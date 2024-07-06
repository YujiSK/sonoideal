import requests

# Define the URL and the data to be sent
url = 'https://sonoideal.net/raspi/sensor/store'
data = {
    'temperature': 25.3,
    'humidity': 60.5
}

try:
    response = requests.post(url, data=data, verify=False)
    print("Successful Response:")
    print(response.text)
except requests.exceptions.RequestException as e:
    print("Failed to send data")
    print("Error:", e)
