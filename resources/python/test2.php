<?php

$all_pulses = [9000, 4500, 560, 560, 560, 1690, 560, 560, 560, 560, 560, 1690, 560, 560, 560, 1690, 560, 560, 560, 560, 560, 560, 560, 560, 560, 1690, 560, 1690, 560, 560, 560, 1690, 560, 1690, 560, 560, 560, 560, 560, 560, 560, 1690, 560, 1690, 560, 560, 560, 560, 560, 560, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560, 1690, 560];

$serialPort = '/dev/ttyUSB0'; // Replace with your serial port

// Convert array to comma-separated string
$pulseString = implode(',', $all_pulses);

// Send data to Arduino
exec("stty -F $serialPort 9600");
exec("echo $pulseString > $serialPort");
