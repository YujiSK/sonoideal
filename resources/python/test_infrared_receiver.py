import serial
import serial.tools.list_ports

def list_all_ports():
    ports = list(serial.tools.list_ports.comports())
    return ports

def select_port(ports):
    if not ports:
        print("利用可能なシリアルポートが見つかりませんでした。")
        return None

    print("使用可能なシリアルポート:")
    for i, port in enumerate(ports):
        print(f"{i}: {port.device} - {port.description}")

    while True:
        try:
            selection = int(input("ポート番号を選択してください: "))
            if 0 <= selection < len(ports):
                return ports[selection].device
            else:
                print("無効な選択です。もう一度お試しください。")
        except ValueError:
            print("無効な入力です。数値を入力してください。")

def main():
    ports = list_all_ports()
    selected_port = select_port(ports)
    if selected_port is None:
        return

    print(f"選択されたポート: {selected_port}")
    ser = serial.Serial(selected_port, 115200)

    while True:
        if ser.in_waiting > 0:
            line = ser.readline().decode('utf-8').strip()
            if line.startswith("RAW_DATA:"):
                raw_data = line.split(":")[1]
                raw_data_list = [int(x) for x in raw_data.split(",")]
                print("Received RAW Data: ", raw_data_list)

if __name__ == "__main__":
    main()
