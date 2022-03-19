<?php ?>
<!DOCTYPE html>
<html lang="zh_TW">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paid</title>
  </head>
  <body>
    <p>
      <strong>{name}</strong
      >，您好<br /><br />感謝您使用學生會費查詢系統<br />經查詢您 {search_year}
      學年度繳費紀錄如下
    </p>
    <table cellspacing="0" cellpadding="6" border="1">
      <tr>
        <th align="center" valign="center">學年期</th>
        <th align="center" valign="center">系所</th>
        <th align="center" valign="center">學號</th>
        <th align="center" valign="center">姓名</th>
        <th align="center" valign="center">學生會費</th>
      </tr>
      <tr>
        <td align="center" valign="center">{school_year}</td>
        <td align="center" valign="center">{department}</td>
        <td align="center" valign="center">{student_id}</td>
        <td align="center" valign="center">{name}</td>
        <td align="center" valign="center">{fee}</td>
      </tr>
    </table>
    <p>
      關於繳費資料係由校方財務室彙整提供<br />有任何問題歡迎回覆本信詢問<br /><br />敬祝<br />順心<br /><br />中國醫藥大學學生會敬上<br />{Date}
    </p>
  </body>
</html>
