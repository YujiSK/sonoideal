import requests

# Define the URL and the data to be sent
url = 'http://sonoideal.net/raspi/sensor/store'
data = {
    'temperature': 25.3,
    'humidity': 60.5    
}

# Make the POST request
response = requests.post(url, data=data)

# Check the response
if response.status_code == 200:
    print('Data sent successfully')
else:
    print('Failed to send data')
    print('Response:', response.text)