import serial
from NECDecoder import NECDecoder

# Replace 'COM3' with the appropriate port for your system
# On Linux or Mac it might be something like '/dev/ttyUSB0' or '/dev/ttyACM0'
ser = serial.Serial("COM8", 9600)
decoder = NECDecoder()

while True:
    try:
        if ser.in_waiting > 0:
            line = ser.readline().decode("utf-8").strip()
            if line.startswith("RAW_DATA:"):
                print("\n\nRAW Data Received:")
            else:
                decoded_data, hex_representation, debugInfo = decoder.decode(line)
                if (decoded_data != None and hex_representation != None):
                    print("Decoded data:", decoded_data)
                    print("Hex representation:", hex_representation)
                    decoder.printDebugInfo(debugInfo)
                # end if
    except KeyboardInterrupt:
        print("Exiting...")
        break

ser.close()
