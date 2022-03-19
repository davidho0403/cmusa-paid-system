<?php

require_once "./key.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) { 
        ?><script>
            alert('發生錯誤，請重新嘗試。');
            window.location.replace('../index.php');
        </script><?php
    } else {

        require_once "../database/db_conn.php";

            $str = $_POST["student_id"];
            $search_year = $_POST["search_year"];

            if(($str / 1000000) < 101 || ($str / 1000000) > 111) { ?>
                <script>
                    alert('您輸入的學號有誤，請重新查詢。');
                    window.location.replace('../index.php');
                </script> <?php
            }
            else {
                if($search_year == 110) {
                    $sth = $conn -> prepare("SELECT * FROM `students_110` WHERE student_id = '$str'");
                    $sth -> setFetchMode(PDO:: FETCH_OBJ);
                    $sth -> execute();
                    
                    include_once "./send.php";
                }
            
                if($search_year == 109) {
                    $sth = $conn -> prepare("SELECT * FROM `students_109` WHERE student_id = '$str'");
                    $sth -> setFetchMode(PDO:: FETCH_OBJ);
                    $sth -> execute();
                
                    include_once "./send.php";
                }
            
                if($search_year == 108) {
                    $sth = $conn -> prepare("SELECT * FROM `students_108` WHERE student_id = '$str'");
                    $sth -> setFetchMode(PDO:: FETCH_OBJ);
                    $sth -> execute();
            
                    include_once "./send.php";
                }
            }

    }
} else { ?>
    
    <script>
            alert('檢測到機器人行為，請重新嘗試。');
            window.location.replace('../index.php');
    </script>

<?php } ?>

</body>
</html>