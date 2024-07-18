import serial
import time

# シリアルポートの設定（Arduinoに合わせて適宜変更）
ser = serial.Serial('COM9', 9600)  # ポート名とボーレートを設定
time.sleep(2)  # シリアルポートの初期化時間を待つ

# データをArduinoに送信する関数
def send_to_arduino(data):
    if ser.out_waiting == 0:
        ser.write(data.encode('utf-8'))  # データをUTF-8形式で送信
        ser.flush()  # データのフラッシュ

# Arduinoからデータを受信する関数
def receive_from_arduino():
    while ser.in_waiting == 0:
        pass
    received_data = ser.readline().decode('utf-8').rstrip()
    return received_data

# メイン処理
if __name__ == '__main__':
    try:
        # Arduino起動メッセージの確認
        print(receive_from_arduino())
        data_sent = False

        while True:
            # 送信するデータを指定
            temperature = 25
            humidity = 10
            light = 15
            data_to_send = '{},{},{}'.format(temperature, humidity, light)
            # print('送信するデータ: {}'.format(data_to_send))
            # print("Sent data: ", data_to_send)

            if data_sent == False:
                send_to_arduino(data_to_send)
                data_sent = True

            # Arduinoからのデータを受信
            received_data = receive_from_arduino()
            print(received_data)

            if received_data == 'NEC signal sent':
                data_sent = False
                print()
            # time.sleep(1)  # 1秒待機して繰り返す

    except KeyboardInterrupt:
        ser.close()  # キーボード割り込みで終了した場合、シリアルポートを閉じる
