import serial
import time

# シリアルポートの設定（Arduinoに合わせて適宜変更）
ser = serial.Serial('/dev/ttyS0', 9600)  # ポート名とボーレートを設定

# データをArduinoに送信する関数
def send_to_arduino(data):
    ser.write(data.encode('utf-8'))  # データをUTF-8形式で送信
    ser.flush()  # データのフラッシュ

# メイン処理
if __name__ == '__main__':
    try:
        while True:
            data_to_send = input("送信するデータを入力してください: ")
            send_to_arduino(data_to_send)
            time.sleep(1)  # 1秒待機して繰り返す

    except KeyboardInterrupt:
        ser.close()  # キーボード割り込みで終了した場合、シリアルポートを閉じる
