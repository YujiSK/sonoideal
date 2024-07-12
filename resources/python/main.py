from NECDecoder import NECDecoder

# Example usage
raw_data = "8850,4400,0600,1650,0550,1650,0600,0500,0600,0500,0600,0500,0600,0500,0600,0500,0600,1600,0600,1650,0600,0500,0600,1600,0600,0500,0600,1650,0550,0550,0550,1650,0600,0500,0600,0500,0600,0500,0600,0500,0600,0500,0600,1650,0550,0550,0550,0550,0550,1650,0600,1600,0600,1650,0600,1600,0600,1650,0550,0550,0550,1650,0600,1650,0550,0550,0550"

decoder = NECDecoder()
decoded_data, hex_representation = decoder.decode(raw_data)

print("Decoded data:", decoded_data)
print("Hex representation:", hex_representation)