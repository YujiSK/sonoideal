import requests
from bs4 import BeautifulSoup

# Example URL
url = 'https://sonoideal.net/raspi/csrf'

# Perform a GET request to fetch the CSRF token
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')
csrf_token = soup.find('input', {'name': '_token'})['value']
print(csrf_token)

# Example POST data
post_data = {
    'temperature': 25.3,
    'humidity': 60.5
}

# Include CSRF token in headers
headers = {
    'X-CSRF-TOKEN': csrf_token,
    'Content-Type': 'application/json',
}

# Send POST request with data and headers
url = 'https://sonoideal.net/raspi/sensor/store'
response = requests.post(url, json=post_data, headers=headers)

# Print response
print(response.status_code)
# print(response.text)
