<?php ?>
<!DOCTYPE html>
<html lang="zh_TW" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="中國醫藥大學｜學生會費查詢系統" />
    <link href="/paid/styles/style.css" rel="stylesheet" />
    <link
      rel="shortcut icon"
      href="https://www.twcmusa.org/wp-content/uploads/25-LOGO-Favicon-01.png"
      type="image/x-icon"
    />
    <title>中國醫藥大學學生會｜學生會費查詢系統</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("i-recaptcha").submit();
        }
    </script>
  </head>
  <body>
    <div class="container">
      <img src="/paid/img/cmusa_logo.png" class="logo" />
      <div class="content">
        <form action="./app/form.php" method="POST" id="i-recaptcha">
          <div class="user-details">
            <div class="input-box">
              <span class="details">學號</span>
              <input
                type="text"
                id="student_id"
                name="student_id"
                placeholder="請輸入學號..."
                oninput="value=value.replace(/[^\d]/g,'');if(value.length>9)value=value.slice(0,9)"
                autofocus
                required
              />
            </div>
          </div>
          <div class="year-detail">
            <input
              type="radio"
              name="search_year"
              value="110"
              id="dot-1"
              checked
            />
            <input type="radio" name="search_year" value="109" id="dot-2" />
            <input type="radio" name="search_year" value="108" id="dot-3" />
            <span class="year-title">學年度</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="year">110 學年度</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="year">109 學年度</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="year">108 學年度</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="查詢" class="g-recaptcha" data-sitekey="6LeUPekcAAAAAAqfXSfkptv3aVZ02DjYJQGrRY3B" data-callback="onSubmit">
          </div>
        </form>
      </div>
      <div class="google-privacy">
        <p style="margin-bottom: 5px;">本頁面受Google reCAPTCHA保護，以確保您不是機器人，Google <a href="https://policies.google.com/privacy">隱私權</a> 、 <a href="https://policies.google.com/terms">條款</a></p>
        <p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
      </div> 
    </div>
  </body>
</html>
