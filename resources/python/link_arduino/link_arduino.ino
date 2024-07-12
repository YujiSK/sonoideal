#include <IRremote.h>

// 赤外線LEDのピン番号
const int IR_LED_PIN = 3; // 例としてデジタルピン3を使用

IRsend irsend; // IR送信オブジェクトの作成

void setup()
{
    Serial.begin(9600); // シリアル通信の初期化
}

void loop()
{
    if (Serial.available() > 0)
    {
        String data_received = Serial.readString();
        Serial.println("受信したデータ: " + data_received);

        // 受信したデータを解析して、赤外線信号のデータを準備
        // ここに赤外線信号のデータ準備と送信コードを追加する

        // 例: NECフォーマットの信号を送信する場合
        // NECフォーマットの例: カスタマーコードが0x1A0A、データが25の場合
        unsigned int customer_code = 0x1A0A;
        unsigned int data = 25;

        if (customer_code == 0x1A0A)
        {
            Serial.println("カスタマーコードが一致しました");
            irsend.sendNEC(customer_code, data);
        }

        delay(1000); // 1秒待機して繰り返す
    }
}
