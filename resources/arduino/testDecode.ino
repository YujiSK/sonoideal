#include <IRremote.h>

// Define variables for IR receiver pin and instance
#define IR_RECEIVE_PIN 11
IRrecv irrecv(IR_RECEIVE_PIN);
decode_results results;

void setup()
{
    Serial.begin(115200);
    irrecv.enableIRIn(); // Start the IR receiver

    // Manually set pulses for testing
    results = setManualPulses("10010010101010101111000011111111");

    // Process received NEC format pulses
    int pulses[] = results.rawbuf; // Assuming raw data is stored here

    // Decode NEC format pulses
    String bin_str = necPulsesToBinStr(pulses, results.rawlen);

    Serial.print(results.rawlen);

    // Split binary string into segments
    String customer_code_bin = bin_str.substring(0, 16);
    String data_bin = bin_str.substring(16, 24);
    String inverted_data_bin = bin_str.substring(24, 32);

    // Convert binary segments to decimal
    int customer_code = binStrToDec(customer_code_bin);
    int data = binStrToDec(data_bin);
    int inverted_data = binStrToDec(inverted_data_bin);

    // Output decoded values
    Serial.print("Customer Code: ");
    Serial.println(customer_code);
    Serial.print("Data: ");
    Serial.println(data);
    Serial.print("Inverted Data: ");
    Serial.println(inverted_data);

    irrecv.resume(); // Receive the next value
}

void loop()
{
    // if (irrecv.decode(&results)) {
    //     // Process received NEC format pulses
    //     int pulses[] = results.rawbuf;  // Assuming raw data is stored here

    //     // Decode NEC format pulses
    //     String bin_str = necPulsesToBinStr(pulses, results.rawlen);

    //     Serial.print(results.rawlen);

    //     // Split binary string into segments
    //     String customer_code_bin = bin_str.substring(0, 16);
    //     String data_bin = bin_str.substring(16, 24);
    //     String inverted_data_bin = bin_str.substring(24, 32);

    //     // Convert binary segments to decimal
    //     int customer_code = binStrToDec(customer_code_bin);
    //     int data = binStrToDec(data_bin);
    //     int inverted_data = binStrToDec(inverted_data_bin);

    //     // Output decoded values
    //     Serial.print("Customer Code: ");
    //     Serial.println(customer_code);
    //     Serial.print("Data: ");
    //     Serial.println(data);
    //     Serial.print("Inverted Data: ");
    //     Serial.println(inverted_data);

    //     irrecv.resume();  // Receive the next value
    // }
}

// Function to convert NEC pulses to binary string
String necPulsesToBinStr(int pulses[], int length)
{
    String bin_str = "";
    for (int i = 0; i < length; i += 2)
    {
        if (pulses[i] == 560 && pulses[i + 1] == 1690)
        {
            bin_str += "1";
        }
        else if (pulses[i] == 560 && pulses[i + 1] == 560)
        {
            bin_str += "0";
        }
    }
    return bin_str;
}

// Function to convert binary string to decimal
int binStrToDec(String bin_str)
{
    return strtol(bin_str.c_str(), NULL, 2);
}

// Function to manually set pulses (simulate IR receiver)
void setManualPulses(String bin_str)
{
    int pulses[32]; // Assuming 32 is the length of the raw data

    // Convert binary string to integer array
    for (int i = 0; i < 32; i++)
    {
        if (bin_str.charAt(i) == '1')
        {
            pulses[i] = 560; // Burst for '1'
        }
        else
        {
            pulses[i] = 560; // Burst for '0'
        }
    }

    // Set the decode results manually
    results.rawlen = 32;
    memcpy(results.rawbuf, pulses, sizeof(pulses));

    // Process the manually set results
    // processIRData();
    return results;
}
