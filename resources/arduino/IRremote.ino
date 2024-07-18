#include <IRremote.h>

const int irPin = 3;
IRsend irsend;

void setup() {
    Serial.begin(9600);
    IrSender.begin(irPin, ENABLE_LED_FEEDBACK);
}

void loop() {
    if (Serial.available() > 0) {
        String irData = Serial.readStringUntil('\n');
        unsigned long data = strtoul(irData.c_str(), NULL, 16);
        IrSender.sendNEC(data, 32);
    }
}
