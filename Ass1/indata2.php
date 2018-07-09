<?php
    session_start();
    $_SESSION['office_no']=test_input($_POST['office_no']);
    $_SESSION['residence_no']=test_input($_POST['residence_no']);
    $_SESSION['mobile_no']=test_input($_POST['mobile_no']);
    $_SESSION['em_name']=test_input($_POST['em_name']);
    $_SESSION['em_country']=test_input($_POST['em_country']);
    $_SESSION['same_as_permanent_address']=test_input($_POST['same_as_permanent_address']);
    $_SESSION['same_as_present_address']=test_input($_POST['same_as_present_address']);
    $_SESSION['em_village_house']=test_input($_POST['em_village_house']);
    $_SESSION['em_road_block_sector']=test_input($_POST['em_road_block_sector']);
    $_SESSION['em_district']=test_input($_POST['em_district']);
    $_SESSION['em_police_station']=test_input($_POST['em_police_station']);
    $_SESSION['em_post_office']=test_input($_POST['em_post_office']);
    $_SESSION['em_email']=test_input($_POST['em_email']);
    $_SESSION['em_relationship']=test_input($_POST['em_relationship']);
    $_SESSION['Passport_no']=test_input($_POST['Passport_no']);
    $_SESSION['place_of_issue']=test_input($_POST['place_of_issue']);
    $_SESSION['date_of_issue']=test_input($_POST['date_of_issue']);
    $_SESSION['re_issue_reason']=test_input($_POST['re_issue_reason']);
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    header('Location:index3.php');

?>