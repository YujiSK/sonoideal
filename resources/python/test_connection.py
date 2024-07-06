import requests

url = 'https://sonoideal.net/raspi/test/connection'

try:
    response = requests.get(url)
    print(response.text)
except requests.exceptions.ProxyError as e:
    print(f"Proxy Error: {e}")
