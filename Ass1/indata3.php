<?php
    session_start();
    $_SESSION['payment_type']=test_input($_POST['payment_type']);
    $_SESSION['skip_payment']=test_input($_POST['skip_payment']);
    $_SESSION['amount_c']=test_input($_POST['amount_c']);
    $_SESSION['amount']=test_input($_POST['amount']);
    $_SESSION['date_of_payment']=test_input($_POST['date_of_payment']);
    $_SESSION['receipt_no']=test_input($_POST['receipt_no']);
    $_SESSION['name_of_bank']=test_input($_POST['name_of_bank']);
    $_SESSION['name_of_branch']=test_input($_POST['name_of_branch']);

    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    header('Location:savedata1.php');
?>