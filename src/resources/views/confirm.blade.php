<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <main>
      <div class="confirm__content">
        <div class="confirm__heading">
          <h2>内容確認</h2>
        </div>
            <form class="confirm-table"
            action="/thanks"
            method="post">
            @csrf
          <div class="confirm-table-title">
            <span class="confirm-table--item">
              お名前
            </span>
          </div>
          <?php
          if(isset($_POST["family-name"]))
          echo
          $_POST["family-name"];
          ?>

          <?php
          if(isset($_POST["given-name"]))
          echo $_POST["given-name"];
          ?>
          <div class="confirm-table-title">
            <span class="confirm-table--item">性別</span>
          </div>
          <?php
          if(isset($_POST["gender"]))
          echo $_POST["gender"];
          ?>

          <div class="confirm-table-title">
            <span class="confirm-table--item">メールアドレス</span>
          </div>
          <?php
          if(isset($_POST["email"]))
          echo $_POST["email"];
          ?>
          
          <div class="confirm-table-title">
            <span class="confirm-table--item">郵便番号</span>
          </div>
          <?php
          if(isset($_POST["postcode"]))
          echo $_POST["postcode"];
          ?>

          <div class="confirm-table-title">
            <span class="confirm-table--item">住所</span>
          </div>
          <?php
          if(isset($_POST["prefecture_id"]))
          echo $_POST["prefecture_id"];
          ?>

          <div class="confirm-table-title">
            <span class="confirm-table--item">建物名</span>
          </div>
          <?php
          if(isset($_POST["building"]))
          echo $_POST["building"];
          ?>

          <div class="confirm-table-title">
            <span class="confirm-table--item">ご意見</span>
          </div>
          <?php
          if(isset($_POST["content"]))
          echo $_POST["content"];
          ?>

          <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>

            <a href="飛び先のURLを指定" target="_blank" rel="noopener">修正する</a>


        </form>
      </div>
    </main>
</body>
</html>




