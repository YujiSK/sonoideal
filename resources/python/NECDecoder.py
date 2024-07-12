import statistics

class NECDecoder:
    def __init__(self, tolerance=200):
        self.tolerance = tolerance

    def is_close(self, value, target):
        """Determine if a value is close to another within a given tolerance."""
        return abs(value - target) < self.tolerance

    def debugInfo(self, raw_data_list):
        return {
            "raw_data_list": raw_data_list,
            "header_mark": raw_data_list[0],
            "header_space": raw_data_list[1],
            "bit_mark": min(raw_data_list[2::2]),
            "one_space": max(raw_data_list[3::2]),
            "zero_space": min(raw_data_list[3::2]),
            "count of bits": f"{len(raw_data_list[2::2])} bits ({len(raw_data_list[2::1])})",
        }

    def printDebugInfo(self, debugInfo):
        print("\nDebug Info:")
        print(f"  Raw Data List : {debugInfo['raw_data_list']}")
        print(f"  Header Mark   : {debugInfo['header_mark']}")
        print(f"  Header Space  : {debugInfo['header_space']}")
        print(f"  Bit Mark      : {debugInfo['bit_mark']}")
        print(f"  One Space     : {debugInfo['one_space']}")
        print(f"  Zero Space    : {debugInfo['zero_space']}")
        print(f"  Count of bits : {debugInfo['count of bits']}")

    def decode(self, raw_data):
        try:
            """Decode NEC protocol from raw data string."""
            raw_data_list = list(map(int, raw_data.split(",")))

            # Automatically determine header and bit marks
            header_mark = raw_data_list[0]
            header_space = raw_data_list[1]

            if header_mark in raw_data_list[2::2]:
                bit_mark_list = raw_data_list[0::2]
                space_list = raw_data_list[1::2]
            else:
                if header_mark in raw_data_list[2::2]:
                    bit_mark_list = raw_data_list[1::2]
                    space_list = raw_data_list[2::2]
                else:
                    bit_mark_list = raw_data_list[2::2]
                    space_list = raw_data_list[3::2]

            bit_mark = min(bit_mark_list)
            one_space = max(space_list)
            zero_space = min(space_list)
            debugInfo = self.debugInfo(raw_data_list)

            # Decode the data based on detected marks
            if (
                len(raw_data_list) < 2
                or not self.is_close(raw_data_list[0], header_mark)
                or not self.is_close(raw_data_list[1], header_space)
            ):
                print("Error: Invalid header")
                return None, None
            else:
                bits = []
                for i in range(2, len(raw_data_list), 2):
                    if i + 1 >= len(raw_data_list):
                        break
                    mark = raw_data_list[i]
                    space = raw_data_list[i + 1]

                    # print(f"{mark} {space},")

                    if not self.is_close(mark, bit_mark):
                        print(f"Error: Invalid bit mark {mark}")
                        continue
                    if self.is_close(space, one_space):
                        bits.append(1)
                    elif self.is_close(space, zero_space):
                        bits.append(0)
                    else:
                        print(f"Error: Invalid space {space}")
                        continue

                # Convert the decoded bits into bytes
                bytes_data = []
                for i in range(0, len(bits), 8):
                    byte = 0
                    for j in range(8):
                        if (i + j) < len(bits):
                            byte = (byte << 1) | bits[i + j]
                    bytes_data.append(byte)

                # Display the results
                hex_representation = "".join(f"{byte:02X}" for byte in bytes_data)
                # print("Decoded bytes:", bytes_data)
                # print("Hex representation:", hex_representation)
                return bytes_data, hex_representation, debugInfo
        except Exception as e:
            print(f"Error decoding data: {e}")
            print(f"Data: {raw_data if len(raw_data) < 100 else raw_data[:100]}")
            return None, None, None
        # end try
