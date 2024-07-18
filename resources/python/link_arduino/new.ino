#include <Arduino.h>
#include <IRremote.hpp>

#define IR_SEND_PIN 3 // Replace 3 with your actual pin number

void sendNECData(unsigned int customer_code, unsigned int temperature, unsigned int humidity, unsigned int light)
{
    Serial.print("Sending temperature: ");
    Serial.print(temperature);
    Serial.print(" (0x");
    Serial.print(temperature, HEX);
    Serial.print("), humidity: ");
    Serial.print(humidity);
    Serial.print(" (0x");
    Serial.print(humidity, HEX);
    Serial.print("), light: ");
    Serial.print(light);
    Serial.print(" (0x");
    Serial.print(light, HEX);
    Serial.print(") with customer code: 0x");
    Serial.println(customer_code, HEX);

    IrSender.sendNEC(customer_code, temperature);
    delay(50); // 少し待つ
    IrSender.sendNEC(customer_code, humidity);
    delay(50); // 少し待つ
    IrSender.sendNEC(customer_code, light);
}

void setup()
{
    pinMode(LED_BUILTIN, OUTPUT);
    Serial.begin(9600);
    while (!Serial)
        ;                            // Wait for Serial to become available
    IrSender.begin(IR_SEND_PIN);     // Replace IR_SEND_PIN with your actual send pin number
    Serial.println("Arduino ready"); // 起動メッセージを送信
}

void loop()
{
    if (Serial.available() > 0)
    {
        String data_received = Serial.readString();
        Serial.println("Received data: " + data_received);

        // データを解析
        int commaIndex1 = data_received.indexOf(',');
        int commaIndex2 = data_received.indexOf(',', commaIndex1 + 1);

        if (commaIndex1 > 0 && commaIndex2 > commaIndex1)
        {
            String temperature_Str = data_received.substring(0, commaIndex1);
            String humidity_Str = data_received.substring(commaIndex1 + 1, commaIndex2);
            String light_Str = data_received.substring(commaIndex2 + 1);

            unsigned int temperature = temperature_Str.toInt();
            unsigned int humidity = humidity_Str.toInt();
            unsigned int light = light_Str.toInt();

            sendNECData(0x1A0A, temperature, humidity, light);
            Serial.println("NEC signal sent");
        }
        else
        {
            Serial.println("Invalid data format");
        }
    }

    delay(1000); // 1秒待機して繰り返す
}

