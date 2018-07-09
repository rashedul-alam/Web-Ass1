<?php
        session_start();
        

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
        <p><b>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</b></p>
        <!--<p><b>Online application ID:<?php echo $_SESSION['id']; ?></b></p>-->
        <p><b>Enrolment Date:<?php echo date("d/m/Y"); ?></b></p>
        <p><b><i>Reminder before submitting your application.</i></b></p>
        <ul id="ul01">
            <li><i>After you click submit,you are not allowed to modify your information.</i></li>
            <li><i>Please visit <b><?php echo $_SESSION['name_of_branch']; ?></b> on working day within the next 15 days for biometric capture except government holiday.</i></li>
        </ul>
    <hr id ="line">
    
    <table id="table0">
        <td id="td0">
            <form method="post" action="">  
            <table id="table1">
                <tr>
                    <th id="th1"></th>
                    <th id="th1"></th>
                </tr>

               <tr>
                    <td>Name of Applicant</td>
                    <td><?php echo $_SESSION['name_of_application'];?></td>
                    <td>Applying in:</td>
                    <td><?php echo $_SESSION['appling_in'];?></td>
                </tr>
                <tr>
                    <td>Second Part(Surname):</td>
                    <td><?php echo $_SESSION['second_part'];?></td>
                    <td>Passport Type:</td>
                    <td><?php echo $_SESSION['passport_type'];?></td>
                </tr>
                <tr>
                    <td>First Part(Given name):</td>
                    <td><?php echo $_SESSION['first_part'];?></td>
                    <td>Application Type:</td>
                    <td>NEW</td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo $_SESSION['gender'];?></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Date of Birth:</span></td>
                    <td><?php echo $_SESSION['dath_of_birth'];?></td>
                    <td>Mobile No:</td>
                    <td><?php echo $_SESSION['mobile_no'];?></td>
                </tr>
                <tr>
                
                <?php
                   
                        $presentaddress=$_SESSION['village'].",".$_SESSION['road'].",".$_SESSION['district'].",".$_SESSION['policestation'].",".$_SESSION['postoffice'];
                ?>
                
                <tr>
                    <td>Place of Birth:</td>
                    <td><b><?php echo $_SESSION['district'].",".$_SESSION['country_of_birth']; ?></td>
                    <td>Present Address:</span></td>
                    <td><b><?php echo $presentaddress; ?></b></span></td>
                </tr>
                <?php
                    if($_SESSION['sameasabove'])
                    {
                        $permanentaddress=$presentaddress;                        
                    }
                    else
                    {
                        if(!$_SESSION['villageper'] && !$_SESSION['roadper'])
                            $permanentaddress=$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else if(!$_SESSION['villageper'] && $_SESSION['roadper'])
                            $permanentaddress=$_SESSION['roadper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else if($_SESSION['villageper'] && !$_SESSION['roadper'])
                            $permanentaddress=$_SESSION['villageper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else
                            $permanentaddress=$_SESSION['villageper'].",".$_SESSION['roadper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                    }
                ?>
                <tr>
                    <td>Father's Name:</td>
                    <td><b><?php echo $_SESSION['fathers_name'];?></td>
                    <td>Permanent Address:</span></td>
                    <td><b><?php echo $permanentaddress; ?></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><?php echo $_SESSION['mothers_name'];?></td>
                    <td>Email:</td>
                    <td><?php echo $_SESSION['email'];?></td>
                </tr>
                <tr>
                    <td>National ID No:</td>
                    <td><?php echo $_SESSION['national_id_no'];?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Birth ID No</td>
                    <td><?php echo $_SESSION['birth_id_no'];?></td>
                    
                    <td>
                    <p  style="color: rgb(0, 81, 255)"><b>Payment Information Summary</b></P></td>
                </tr>
                <tr>
                    <td>Old Passport No:</td>
                    <td><?php echo $_SESSION['Passport_no'];?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>Payment Amount:</span></td>
                    <td><?php echo "(".$_SESSION['amount_c'].")".$_SESSION['amount']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Payment Date:</td>
                    <td><?php echo $_SESSION['date_of_payment']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Receipt No:</span></td>
                    <td><?php echo $_SESSION['receipt_no']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Bank Name:</span></td>
                    <td><b><?php echo $_SESSION['name_of_bank']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Bank Branch:</td>
                    <td><?php echo $_SESSION['nameofbranch']; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><p><i>Reminder:Bring old passport during collecting MRP;No correction after handover of delivery slip without fee.</i></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="re2.php">
                            <input type="submit" class="button1" value="PREVIOUS PAGE">
                        </form>
                    </td>
                    <td>
                        <form action="save.php">
                            <input type="submit" class="button1" value="SAVE">
                        </form>
                    </td>
                </tr>





    </table>
    </form>

    


    
    
</body>
</html>
