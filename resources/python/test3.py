import requests
from bs4 import BeautifulSoup

# セッションを作成
session = requests.Session()

try:
    # GETリクエストを送信してCSRFトークンを取得
    url = "https://sonoideal.net/raspi/csrf"
    response = session.get(url)
    response.raise_for_status()  # エラーチェック

    # BeautifulSoupでHTMLを解析
    soup = BeautifulSoup(response.text, "html.parser")
    csrf_token_tag = soup.find("input", {"name": "_token"})

    if csrf_token_tag:
        csrf_token = csrf_token_tag["value"]
        print(f"CSRF Token: {csrf_token}")

        # POSTデータ
        post_data = {"temperature": 25.3, "humidity": 60.5}

        # CSRFトークンをヘッダーに含める
        headers = {
            "X-CSRF-TOKEN": csrf_token,
            "Content-Type": "application/json",
        }

        # POSTリクエストを送信
        post_url = "https://sonoideal.net/raspi/sensor/store"
        response = session.post(post_url, json=post_data, headers=headers)
        response.raise_for_status()  # エラーチェック

        # レスポンスのステータスコードと内容を表示
        print(f"Status Code: {response.status_code}")
        print(response.text)
    else:
        print("CSRFトークンが見つかりませんでした。")

except requests.exceptions.RequestException as e:
    print(f"Error: {e}")
