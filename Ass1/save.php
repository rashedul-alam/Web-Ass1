<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		echo "<h2>Submitted</h2>";
	
		$fileext = ".txt";
		$filename = $_SESSION['id'].$fileext;
		$f = fopen($filename, 'a');
		
		fwrite($f, "Personal Information Summary"."\r\n");
		fwrite($f, "Name of Applicant:".strtoupper($_SESSION['first_part'])."\r\n");
		fwrite($f, "Second Part :".strtoupper($_SESSION['second_part'])."\r\n");
		fwrite($f, "First Part :".strtoupper($_SESSION['first_part'])."\r\n");
		fwrite($f, "Gender :".strtoupper($_SESSION['gender'])."\r\n");
		fwrite($f, "Nationality :".strtoupper($_SESSION['nationality'])."\r\n");
		fwrite($f, "Date Of Birth :".strtoupper($_SESSION['dath_of_birth'])."\r\n");
		fwrite($f, "Place Of Birth :".strtoupper($_SESSION['birth_district'])." ".strtoupper($_SESSION['countryofbirth'])."\r\n");
		fwrite($f, "Father's name :".strtoupper($_SESSION['fathers_name'])."\r\n");
		fwrite($f, "Mother's name :".strtoupper($_SESSION['mothers_name'])."\r\n");
		fwrite($f, "Spouse's name :".strtoupper($_SESSION['spouses_name'])."\r\n");
		fwrite($f, "National ID No :".strtoupper($_SESSION['national_id_no'])."\r\n");
		fwrite($f, "Birth ID No :".strtoupper($_SESSION['birth_id_no'])."\r\n");
		fwrite($f, "Old Passport No :".strtoupper($_SESSION['Passport_no'])."\r\n\n\n\n");
		fwrite($f, "Passport Information Summary"."\r\n");
		fwrite($f, "Applying in :".strtoupper($_SESSION['appling_in'])."\r\n");
		fwrite($f, "Passport Type :".strtoupper($_SESSION['passport_type'])."\r\n");
		fwrite($f, "Application Type :"."NEW\r\n");
		fwrite($f, "Contact Information Summary"."\r\n");
		fwrite($f, "Mobile No :".strtoupper($_SESSION['mobile_no'])."\r\n");
		fwrite($f, "Present Address :".strtoupper($_SESSION['village_house'])." ".strtoupper($_SESSION['road_block_sector'])." ".strtoupper($_SESSION['district'])." ".strtoupper($_SESSION['police_station'])." ".strtoupper($_SESSION['post_office'])."  "."\r\n");
		fwrite($f, "Parmanent Address : ".strtoupper($_SESSION['road_block_sector_p'])." ".strtoupper($_SESSION['district_p'])." ".strtoupper($_SESSION['police_station_p'])." ".strtoupper($_SESSION['post_office_p'])."  "."\r\n");
		fwrite($f, "Email :".strtoupper($_SESSION['email'])."\r\n\r\n");
		fwrite($f, "Payment Information Summary"."\r\n");
		fwrite($f, "Payment Amount :".strtoupper($_SESSION['amount'])." ".strtoupper($_SESSION['amount_c'])."\r\n");
		fwrite($f, "Payment Date :".strtoupper($_SESSION['ndate_of_paymentme'])."\r\n");
		fwrite($f, "Reciept No :".strtoupper($_SESSION['receipt_no'])."\r\n");
		fwrite($f, "Bank Name :".strtoupper($_SESSION['name_of_bank'])."\r\n");
		fwrite($f, "Bank Branch :".strtoupper($_SESSION['name_of_branch'])."\r\n");
		fclose($f);
		
		
		
	
	}
	
?>
<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    <p>Thank You</p>
  </body>
</html>