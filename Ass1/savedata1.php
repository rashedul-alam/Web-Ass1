<?php
        session_start();
        $f=false;

    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Stage Two</title>
    <link rel="stylesheet" type="text/css" media="screen" href="index1.css" >
    
    <style>
        .error {color: #FF0000;}
        .select2{

        border-radius:5px;
        border:1px solid rgb(48, 45, 45);
        width:95%;
        }
        .input2

        {

        border-radius:5px;
        border:1px solid rgb(48, 45, 45);
        width:95%;
        }
        
        sup {
            position: relative;
    
            font-size: 120%;
            color: red;

        }
        


        

    
    
    </style>
    

</head>
<body id="body">
    <h1 id="h1">PASSPORT APPLICATION -RE_ENTRY</h1>
    
    <p id="p1"><b>Online Application ID: 000000000A</b></p>
    
    <p id ="p2">This mandatory fields are empty <span class="error">(*)</span> .</p>
    <hr id ="line">
    
    <table id="table0">
    <?php
     if(empty($_SESSION['appling_in']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>appling in must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['passport_type']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>passport_type must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['first_part']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>first_part must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['second_part']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>second_part must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['fathers_name']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>fathers_name must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['fathers_nationality']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>fathers_nationality must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['fathers_profession']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>fathers_profession must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['mothers_name']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>mothers_name must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['mothers_nationality']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>mothers_nationality must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['mothers_profession']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>mothers_profession must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['marital_status']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>marital_status must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     
     if(empty($_SESSION['applicants_profession']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>applicants_profession must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['country_of_birth']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>country_of_birth must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['birth_district']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>birth_district must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['gender']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>gender must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['tax_id_no']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>tax_id_no must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['heigt_cm']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>heigt_cm must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['heigt_inch']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>heigt_inch must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['religion']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>religion must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['email']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>email must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['nationality']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>nationality must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['citizenship_status']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>citizenship_status must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['dual_citizenship']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>dual_citizenship must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     
     if(empty($_SESSION['district']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>district must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['police_station']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>police_station must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }
     if(empty($_SESSION['post_office']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>post_office must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['district_p']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>district_p must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['police_station_p']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>police_station_p must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['post_office_p']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>post_office_p must be filled</td>
         <td id='td1'><a href='re1.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }


     if(empty($_SESSION['em_name']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_name must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['em_country']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_country must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['em_district']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_district must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['em_police_station']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_police_station must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['em_post_office']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_post_office must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['em_relationship']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>em_relationship must be filled</td>
         <td id='td1'><a href='re2.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['amount_c']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>amount_c must be filled</td>
         <td id='td1'><a href='re3.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['amount']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>amount must be filled</td>
         <td id='td1'><a href='re3.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['date_of_payment']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>date_of_payment must be filled</td>
         <td id='td1'><a href='re3.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }

     if(empty($_SESSION['receipt_no']))
     {
         $f=true;
         echo
         "<tr>
         <td id='td1'>receipt_no must be filled</td>
         <td id='td1'><a href='re3.php' class='button2'>GO TO PAGE</a></td>
         </tr>
         <tr></tr>
         <tr></tr>";
     }



    








    
            ?>
    </table>
    

    


    
    
</body>
</html>
<?php
    if($f==false)
        header('Location:showdata.php');
?>