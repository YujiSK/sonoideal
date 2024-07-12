#include <Arduino.h>
#include <IRremote.hpp> // include the library

#define IR_SEND_PIN 13

const uint16_t rawdata[] = {
  9000, 4500, 560, 560, 560, 560, 560, 1690, 560, 1690, 560, 560, 560, 1690,
  560, 560, 560, 560, 560, 560, 560, 1690, 560, 560, 560, 1690, 560, 1690,
  560, 560, 560, 560, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690,
  560, 1690, 560, 1690, 560 };

void setup() {
    Serial.begin(115200);
    while (!Serial); // Wait for Serial to become available

    Serial.println(F("START " __FILE__ " from " __DATE__ "\r\nUsing library version " VERSION_IRREMOTE));
    Serial.print(F("Send IR signals at pin "));
    Serial.println(IR_SEND_PIN);

    IrSender.begin(IR_SEND_PIN); // Initialize the IR sender with the specified pin
}

void loop() {
    Serial.println("Sending raw data:");
    for (size_t i = 0; i < sizeof(rawdata) / sizeof(rawdata[0]); i++) {
        Serial.print(rawdata[i]);
        if (i < sizeof(rawdata) / sizeof(rawdata[0]) - 1) {
            Serial.print(", ");
        }
    }
    Serial.println();

    IrSender.sendRaw(rawdata, sizeof(rawdata) / sizeof(rawdata[0]), 38); // Send raw data with 38kHz frequency

    delay(5000); // Wait 5 seconds before sending the next command
}
