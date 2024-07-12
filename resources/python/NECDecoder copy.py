import serial
import time

# Function to invert data (bitwise XOR with 0xff)
def invert_data(data):
    return data ^ 0xff

# Function to convert decimal to binary string of specified length
def dec_to_bin_str(num, length):
    return format(num, f'0{length}b')

# Function to convert binary string to NEC format pulses
def bin_str_to_nec_pulses(bin_str):
    pulses = []
    for bit in bin_str:
        if bit == '1':
            pulses.extend([560, 1690])  # 1 burst and space
        else:
            pulses.extend([560, 560])   # 0 burst and space
    return pulses

# Function to create NEC frame from customer code and data
def create_nec_frame(customer_code, data):
    inverted_data = invert_data(data)

    customer_code_bin = dec_to_bin_str(customer_code, 16)
    data_bin = dec_to_bin_str(data, 8)
    inverted_data_bin = dec_to_bin_str(inverted_data, 8)

    customer_code_pulses = bin_str_to_nec_pulses(customer_code_bin)
    data_pulses = bin_str_to_nec_pulses(data_bin)
    inverted_data_pulses = bin_str_to_nec_pulses(inverted_data_bin)

    frame = customer_code_pulses + data_pulses + inverted_data_pulses
    return frame

# Function to divide array into three parts
def divide_array_into_three(array):
    length = len(array)
    if length % 32 == 0:  # Assuming always divisible by 32
        part_size = length // 3
        part1 = array[:part_size]
        part2 = array[part_size:2 * part_size]
        part3 = array[2 * part_size:]
        return part1, part2, part3
    return None

# Function to convert NEC pulses to binary string
def nec_pulses_to_bin_str(pulses, pulse0=[560, 560], pulse1=[560, 1690]):
    bin_str = []
    for i in range(0, len(pulses), 2):
        if (pulses[i:i+2] == pulse1):
            bin_str.append('1')
        elif (pulses[i:i+2] == pulse0):
            bin_str.append('0')
    return bin_str

# Function to convert binary string to decimal
def bin_str_to_dec(bin_str):
    customer_code_bin = bin_str[:16]
    data_bin = bin_str[16:24]
    inverted_data_bin = bin_str[24:]

    customer_code = int(''.join(customer_code_bin), 2)
    data = int(''.join(data_bin), 2)
    inverted_data = int(''.join(inverted_data_bin), 2)

    return customer_code, data, inverted_data

# Header and Footer pulses
header = [9000, 4500]
footer = [1000]

# Example data (luminosity, temperature, humidity)
luminosity = 100
temperature = 25
humidity = 60

# Example customer code (0x1A2B in decimal)
customer_code = 0x1A2B

# Create NEC frames
luminosity_pulses = create_nec_frame(customer_code, luminosity)
temperature_pulses = create_nec_frame(customer_code, temperature)
humidity_pulses = create_nec_frame(customer_code, humidity)

# Combine all pulses
all_pulses = header + luminosity_pulses + temperature_pulses + humidity_pulses + footer

print("\nall_pulses:", ",".join(map(str, all_pulses)))

# ____________________ Arduino に送る ____________________

ser = serial.Serial('COM9', 9600)
time.sleep(2)

# Convert pulses to string
pulses_str = ','.join(map(str, all_pulses))

print("\nSending pulses to Arduino:", len(all_pulses))
print("\n")

# Send pulses to Arduino in chunks
chunk_size = 64
for i in range(0, len(pulses_str), chunk_size):
    chunk = pulses_str[i:i + chunk_size]
    ser.write(chunk.encode())
    time.sleep(0.1)  # Small delay to allow Arduino to process the chunk

# Arduinoからの応答を受信する例
while True:
    data = ser.readline().strip()  # 改行コードを取り除く
    if data: print(f"Data received from Arduino: {data}")
    if data == b"Done": break

# Close serial port
ser.close()

# ____________________ デコード ____________________

# # Example decoding (assuming all_pulses are already defined)
# pulse0 = [560, 560]
# pulse1 = [560, 1690]
# decoded = nec_pulses_to_bin_str(all_pulses, pulse0, pulse1)
# luminosity_code_bin, temperature_code_bin, humidity_code_bin = divide_array_into_three(decoded)

# # Convert binary strings to decimal
# luminosity_code = bin_str_to_dec(luminosity_code_bin)
# temperature_code = bin_str_to_dec(temperature_code_bin)
# humidity_code = bin_str_to_dec(humidity_code_bin)

# print("")
# print("temperature_code:", temperature_code)
# print("luminosity_code: ", luminosity_code)
# print("humidity_code:   ", humidity_code)
# print("")
# print("customer code: ", temperature_code[0])
# print("temperature: ", temperature_code[1])
# print("luminosity: ", luminosity_code[1])
# print("humidity:    ", humidity_code[1])
