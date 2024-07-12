import serial
import time

arduino = serial.Serial('COM9', 9600, timeout=1)
time.sleep(2)

def send_data(data):
    arduino.write(data.encode())
    print(f"Data '{data}' sent to Arduino")

# データを送信する例
send_data("32,33")
time.sleep(2)
send_data("World")

# Arduinoからの応答を受信する例
while True:
    data = arduino.readline().decode().strip()
    if data:
        print(f"Data received from Arduino: '{data}'")
    if data == "Done":
        break

arduino.close()
