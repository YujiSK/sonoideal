import requests
from bs4 import BeautifulSoup

class Sensor:
    def __init__(self, base_url):
        self.base_url = base_url
        self.session = requests.Session()

        # CSRFトークンを取得してインスタンス変数に保持する
        self.csrf_token = self._get_csrf_token()

    def _get_csrf_token(self):
        try:
            response = self.session.get(f"{self.base_url}/csrf")
            response.raise_for_status()
            soup = BeautifulSoup(response.text, "html.parser")
            csrf_token_tag = soup.find("input", {"name": "_token"})
            if csrf_token_tag:
                return csrf_token_tag["value"]
            else:
                raise ValueError("CSRFトークンが見つかりませんでした。")
        except requests.exceptions.RequestException as e:
            raise ValueError(f"CSRFトークンの取得中にエラーが発生しました: {e}")

    def send_TRH(self, temperature, humidity):
        try:
            headers = {
                "X-CSRF-TOKEN": self.csrf_token,
                "Content-Type": "application/json",
            }
            post_data = {"temperature": temperature, "humidity": humidity}
            response = self.session.post(f"{self.base_url}/sensor/store", json=post_data, headers=headers)
            response.raise_for_status()
            return response
        except requests.exceptions.RequestException as e:
            raise ValueError(f"データの送信中にエラーが発生しました: {e}")

def main():
    try:
        base_url = "https://sonoideal.net/raspi"
        sensor_sender = Sensor(base_url)

        # データを送信
        response = sensor_sender.send_TRH(25.3, 60.5)

        # レスポンスのステータスコードと内容を表示
        print(f"Status Code: {response.status_code}")
        print(response.text)

    except ValueError as ve:
        print(f"エラー: {ve}")

    except Exception as e:
        print(f"予期しないエラーが発生しました: {e}")

if __name__ == "__main__":
    main()
