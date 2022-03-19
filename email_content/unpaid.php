<?php ?>
<!DOCTYPE html>
<html lang="zh_TW">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unpaid</title>
  </head>
  <body>
    <p>
      <strong>{student_id}</strong
      >，您好<br /><br />感謝您使用學生會費查詢系統<br />未查詢到您
      {search_year} 學年度的繳費紀錄<br /><br />
    </p>
    <p>
      可能原因如下<br />1.您學年初已完成退費手續<br />2.學校財務室未正常登記<br />若您確定您有繳納本次費用，您可登入華南銀行學雜費管理系統(https://school.hncb.com.tw/tuition/servlet/TrxDispatcher?trx=com.tuition.wibc.trx.web.TuLogin&state=prompt&loginType=STUDENT&schoolId=52005408)<br />下載繳費證明後回傳本封郵件，我們會盡速為您進行補登<br /><br />
    </p>
    <p>
      而若您有意願進行費用補繳納，也歡迎聯繫我們<br /><br />敬祝<br />順心<br /><br />中國醫藥大學學生會敬上<br />{Date}
    </p>
  </body>
</html>
