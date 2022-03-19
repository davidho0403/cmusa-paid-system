<?php

// 在資料庫找到對應學號
if($row = $sth -> fetch()) {
    $email = 'u'.$str.'@cmu.edu.tw';
    mb_internal_encoding("utf-8");
    $to = $email;
    $subject = mb_encode_mimeheader("學生會會費查詢結果｜".$row -> name,"utf-8");
    $content = "../email_content/paid.php";

    $swap_var = array(
        "{school_year}" => $row -> school_year,
        "{search_year}" => $search_year,
        "{department}" => $row -> department,
        "{student_id}" => $row -> student_id,
        "{name}" => $row -> name,
        "{fee}" => $row -> fee,
        "{Date}" => date("Y.n.j") 
    );

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From:".mb_encode_mimeheader("學生會會費查詢系統","utf-8")."<contact@twcmusa.org>\r\n";
    $headers .= "Reply-To:"."<cmusa@cmu.edu.tw>\r\n";

    if(file_exists($content))
        $msg = file_get_contents($content);
    else
        die("unable to locate the file.");

    foreach(array_keys($swap_var) as $key) {
        if(strlen($key) > 2 && trim($key) != "")
        $msg = str_replace($key, $swap_var[$key], $msg);
    }

    if(mail("$to", "$subject", "$msg", "$headers")):

?>
    
        <script>
            alert('我們已將結果寄送至u' + <?php echo $str ?> + '@cmu.edu.tw\n請前往信箱查看');
        </script>

<?php

    else:

?>
    
        <script>
            alert('信件發送失敗，請重新嘗試');
        </script>

<?php
    
    endif;
}

// 在資料庫無對應學號
else {
    $email = 'u'.$str.'@cmu.edu.tw';
    mb_internal_encoding("utf-8");
    $to = $email;
    $subject = mb_encode_mimeheader("學生會會費查詢結果｜".$str,"utf-8");
    $content = "../email_content/unpaid.php";

    $swap_var = array(
        "{search_year}" => $search_year,
        "{student_id}" => $str,
        "{Date}" => date("Y.n.j") 
    );

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From:".mb_encode_mimeheader("學生會會費查詢系統","utf-8")."<contact@twcmusa.org>\r\n";
    $headers .= "Reply-To:"."<cmusa@cmu.edu.tw>\r\n";
            
    if(file_exists($content))
        $msg = file_get_contents($content);
    else
        die("unable to locate the file.");

    foreach(array_keys($swap_var) as $key) {
        if(strlen($key) > 2 && trim($key) != "")
        $msg = str_replace($key, $swap_var[$key], $msg);
    }
          
    if(mail("$to", "$subject", "$msg", "$headers")):

?>

        <script>
            alert('我們已將結果寄送至u' + <?php echo $str ?> + '@cmu.edu.tw\n請前往信箱查看');
        </script>

<?php
            
    else:

?>

        <script>
            alert('信件發送失敗，請重新嘗試');
        </script>

<?php
    
    endif;
}

?>

<script>
    document.location.href="../index.php";
</script>