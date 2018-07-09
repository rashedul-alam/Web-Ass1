<?php
    session_start();
    $_SESSION['appling_in']=test_input($_POST['appling_in']);
    $_SESSION['passport_type']=test_input($_POST['passport_type']);
    $_SESSION['delivery_type']=test_input($_POST['delivery_type']);
    $_SESSION['name_of_application']=test_input($_POST['name_of_application']);
    $_SESSION['first_part']=test_input($_POST['first_part']);
    $_SESSION['second_part']=test_input($_POST['second_part']);
    $_SESSION['gardian']=test_input($_POST['gardian']);
    $_SESSION['fathers_name']=test_input($_POST['fathers_name']);
    $_SESSION['fathers_nationality']=test_input($_POST['fathers_nationality']);
    $_SESSION['fathers_profession']=test_input($_POST['fathers_profession']);
    $_SESSION['mothers_name']=test_input($_POST['mothers_name']);
    $_SESSION['mothers_nationality']=test_input($_POST['mothers_nationality']);
    $_SESSION['mothers_profession']=test_input($_POST['mothers_profession']);
    $_SESSION['nameofapplicant']=test_input($_POST['nameofapplicant']);
    $_SESSION['spouse_name']=test_input($_POST['spouse_name']);
    $_SESSION['spouses_nationality']=test_input($_POST['spouses_nationality']);
    $_SESSION['spouses_profession']=test_input($_POST['spouses_profession']);
    $_SESSION['marital_status']=test_input($_POST['marital_status']);
    $_SESSION['duelcitizenship']=test_input($_POST['duelcitizenship']);
    $_SESSION['applicants_profession']=test_input($_POST['applicants_profession']);
    $_SESSION['country_of_birth']=test_input($_POST['country_of_birth']);
    $_SESSION['birth_district']=test_input($_POST['birth_district']);
    $_SESSION['dath_of_birth']=test_input($_POST['dath_of_birth']);
    $_SESSION['gender']=test_input($_POST['gender']);
    $_SESSION['birth_id_no']=test_input($_POST['birth_id_no']);
    $_SESSION['national_id_no']=test_input($_POST['national_id_no']);
    $_SESSION['tax_id_no']=test_input($_POST['tax_id_no']);
    $_SESSION['heigt_cm']=test_input($_POST['heigt_cm']);
    $_SESSION['heigt_inch']=test_input($_POST['heigt_inch']);
    $_SESSION['religion']=test_input($_POST['religion']);
    $_SESSION['email']=test_input($_POST['email']);
    $_SESSION['nationality']=test_input($_POST['nationality']);
    $_SESSION['citizenship_status']=test_input($_POST['citizenship_status']);
    $_SESSION['dual_citizenship']=test_input($_POST['dual_citizenship']);
    $_SESSION['village_house']=test_input($_POST['village_house']);
    $_SESSION['road_block_sector']=test_input($_POST['road_block_sector']);
    $_SESSION['district']=test_input($_POST['district']);
    $_SESSION['police_station']=test_input($_POST['police_station']);
    $_SESSION['post_office']=test_input($_POST['post_office']);
    $_SESSION['road_block_sector_p']=test_input($_POST['road_block_sector_p']);
    $_SESSION['district_p']=test_input($_POST['district_p']);
    $_SESSION['police_station_p']=test_input($_POST['police_station_p']);
    $_SESSION['post_office_p']=test_input($_POST['post_office_p']);

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

      
    header('Location:savedata1.php');

    
    


?>