<?php
        session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Stage</title>
    <link rel="stylesheet" type="text/css" media="screen" href="index1.css" >
    
    <style>
        .error {color: #FF0000;}
        select{

        border-radius:5px;
        border:1px solid rgb(48, 45, 45);
        width:90%;
        }
        input

        {

        border-radius:5px;
        border:1px solid rgb(48, 45, 45);
        width:90%;
        }
        
        sup {
            position: relative;
    
            font-size: 120%;
            color: red;

        }
        


        

    
    
    </style>
    

</head>
<body id="body">
    <h1 id="h1">PASSPORT APPLICATION -STAGE 1</h1>
    
    <p id="p1"><b>Before filling up the online application form read the <u style="color: turquoise">guidelines</u> carefully.</b></p>
    
    <p id ="p2">Fields marked with <span class="error">(*)</span>are mandatory.</p>
    <hr id ="line">
     <form method="post" action="indata11.php">  
    <table id="table0">
        <tr>
            <th id="th0"></th>
            <th id="th0"></th>
        </tr>

            <td id="td0">
               
                <table id="table1">
                <tr>
                    <th id="th1"></th>
                    <th id="th1"></th>
                </tr>

                <tr>
                    <td id="td1">
                    <p  style="color: rgb(0, 81, 255)"><b>Passport Application Information</b></P></td>
                    
                </tr>
                
                <tr>
                    <td id="td1">Appling in:<sup>*</sup> </td>
                    <td id="td1">
                    <select name = "appling_in" >
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="BANGLADESH" <?php if($_SESSION['appling_in']=='BANGLADESH')echo "selected"; ?>>BANGLADESH</option>
                    <option value="INDIA" <?php if($_SESSION['appling_in']=='INDIA')echo "selected"; ?>>INDIA</option>
                    <option value="UGANDA" <?php if($_SESSION['appling_in']=='UGANDA')echo "selected"; ?>>UGANDA</option>
                    <option value="JAPAN" <?php if($_SESSION['appling_in']=='JAPAN')echo "selected"; ?>>JAPAN</option>
                    </select> 
                   
                    <!--<span class="error">* <?php echo $nameErr;?></span>-->
                    </td>
                </tr>

                <tr>
                    <td id="td1"><p>Application Type : <b>NEW APPLICATION</b></p></td>
                    
                </tr>
                <tr>
                    <td id="td1">Passport Type:<sup>*</sup></td>
                    <td id="td1">
                    <select name="passport_type">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Ordinary"<?php if($_SESSION['passport_type']=='Ordinary')echo "selected"; ?>>Ordinary</option>
                    <option value="Official"<?php if($_SESSION['passport_type']=='Official')echo "selected"; ?>>Official</option>
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Delivery Type:</td>
                    <td id="td1">
                    <input  type="radio" name="delivery_type" value="Regular"<?php if($_SESSION['delivery_type']=='Regular')echo "checked"; ?>>Rerular
                    <input type="radio" name="delivery_type" value="Express"<?php if($_SESSION['delivery_type']=='Express')echo "checked"; ?>>Express
                
                    <!--<span class="error">* <?php echo $genderErr;?></span> -->
                </tr>
                    
                <tr>
                    <td id="td1"><P style="color: rgb(0, 81, 255)"><b>Personal Information</b></p><td>
                    
                </tr>
                <tr>
                    <td id="td1">Name of Applicants:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="name_of_application" <?php if(!empty($_SESSION['name_of_application'])) echo "value=".$_SESSION['name_of_application'];?>></td>
                    <!--<span class="error">*<?php echo $nameErr;?></span>-->
                </tr>
                
                <tr>
                    <td id="td1">First Part(Given Name):<sup>*</sup></td>
                    <td id="td1"><input type="text" name="first_part" <?php if(!empty($_SESSION['first_part'])) echo "value=".$_SESSION['first_part'];?>><td>
                </tr>

                <tr>
                    <td id="td1">Second Part(Surname):<sup>*</sup></td>
                    <td id="td1"><input type="text" name="second_part" <?php if(!empty($_SESSION['second_part'])) echo "value=".$_SESSION['second_part'];?> ><td>
                </tr>
                
                <tr>
                    <td id="td1"></td>
                    <td id="td1"><td>
                </tr>
                <tr>
                    <td id="td1">Gardian <input type="checkbox" name="gardian" value="gardian" <?php if(!empty($_SESSION['guardian'])) echo "checked"; ?>></td>
                    <td id="td1"><em style="color:red">"Tick" </em> only if Applicant is legally adapted</td>
                        
<!--ValueDeoahoynai-->  
                        
                </tr>

                <tr>
                    <td id="td1">Fathers name:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="fathers_name" <?php if(!empty($_SESSION['fathers_name'])) echo "value=".$_SESSION['fathers_name'];?> ><td>
                </tr>
                <tr>
                        <td id="td1">Fathers Nationality:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="fathers_nationality">
                            <option value="BANGLADESHI" <?php if($_SESSION['fathers_nationality']=='BANGLADESHI')echo "selected"; ?>>BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Fathers Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="fathers_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Business" <?php if($_SESSION['fathers_profession']=='Business')echo "selected"; ?>>Business</option>
                    <option value="Employer"  <?php if($_SESSION['fathers_profession']=='Employer')echo "selected"; ?> >Employer</option>
                
                    </select> 

                    
                    </td>
                </tr>

                <tr>
                    <td id="td1">Mothers name:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="mothers_name"  <?php if(!empty($_SESSION['mothers_name'])) echo "value=".$_SESSION['mothers_name'];?> ><td>
                </tr>
                <tr>
                        <td id="td1">Mothers Nationality:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="mothers_nationality">
                            <option value="BANGLADESHI"  <?php if($_SESSION['mothers_nationality']=='BANGLADESHI')echo "selected"; ?> >BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Mothers Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="mothers_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife"  <?php if($_SESSION['mothers_profession']=='Housewife')echo "selected"; ?> >Housewife</option>
                    <option value="Business"  <?php if($_SESSION['mothers_profession']=='Business')echo "selected"; ?> >Business Man</option>
                    <option value="Employer" <?php if($_SESSION['mothers_profession']=='Employer')echo "selected"; ?> >Employer</option>
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Spouses name:</td>
                    <td id="td1"><input type="text" name="spouse_name" <?php if(!empty($_SESSION['spouse_name'])) echo "value=".$_SESSION['spouse_name'];?> ><td>
                </tr>
                <tr>
                        <td id="td1">Spouses Nationality:
                        </td>
                        <td id="td1">
                            <select name="spouses_nationality">
                            <option value="BANGLADESHI" <?php if($_SESSION['spouses_nationality']=='BANGLADESHI')echo "selected"; ?> >BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Spouses Profession:</td>
                    <td id="td1">
                    <select name="spouses_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife"  <?php if($_SESSION['spouses_profession']=='Housewife')echo "selected"; ?> >Housewife</option>
                    <option value="Business"  <?php if($_SESSION['spouses_profession']=='Business')echo "selected"; ?> >Business</option>
                    <option value="Employer" <?php if($_SESSION['spouses_profession']=='Employer')echo "selected"; ?> >Employer</option>
                    <option value="UnEmployer" <?php if($_SESSION['spouses_profession']=='UnEmployer')echo "selected"; ?> >UnEmployer</option>
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Marital status:<sup>*</sup></td>
                    <td id="td1">
                    <select name="marital_status">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="married" <?php if($_SESSION['marital_status']=='married')echo "selected"; ?> >Married</option>
                    <option value="single" <?php if($_SESSION['marital_status']=='single')echo "selected"; ?>  >Single</option>
                    
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Applicants Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="applicants_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife" <?php if($_SESSION['applicants_profession']=='Housewife')echo "selected"; ?> >Housewife</option>
                    <option value="Business" <?php if($_SESSION['applicants_profession']=='Business')echo "selected"; ?> >Business</option>
                    <option value="Employer" <?php if($_SESSION['applicants_profession']=='Employer')echo "selected"; ?> >Employer</option>
                    <option value="UnEmployer" <?php if($_SESSION['applicants_profession']=='UnEmployer')echo "selected"; ?> >UnEmployer</option>
                    </select> 
                    </td>
                </tr>

                <tr>
                        <td id="td1">Country of Birth:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="country_of_birth">
                            <option value="BANGLADESHI" <?php if($_SESSION['country_of_birth']=='BANGLADESHI')echo "selected"; ?> >BANGLADESHI</option>
                            <option value="Ugamda" <?php if($_SESSION['country_of_birth']=='Ugamda')echo "selected"; ?> >Uganda</option>
                            </select> 
                        </td>
                </tr>

                <tr>
                        <td id="td1">Birth District:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="birth_district">
                            <option value="Dhaka"  <?php if($_SESSION['birth_district']=='Dhaka')echo "selected"; ?>  >Dhaka</option>
                            <option value="Noakhali"  <?php if($_SESSION['birth_district']=='Noakhali')echo "selected"; ?> >Noakhali</option>
                            </select> 
                        </td>
                </tr>
                


                








            
            
            </table>
            
            </td>

 <!--2nd table--><td id="td0">
               
                    <table id="table1">
                    <tr>
                        <th id="th1"></th>
                        <th id="th1"></th>
                    </tr>
                    <tr>
                        <td id="td1">Dath Of Birth:<sup>*</sup>
                        </td>
                        <td id="td1">
                        <input type="date" name="dath_of_birth" <?php if(!empty($_SESSION['dath_of_birth'])) echo "value=".$_SESSION['dath_of_birth'];?>>
                        </td>
                    </tr>        
                    <tr>
                        <td id="td1">
                        Gender:<sup>*</sup>
                        </td>

                        <td id="td1">
                            <input type="radio" name="gender" value="female" <?php if($_SESSION['gender']=='female') echo "checked"; ?> >Female
                            <input type="radio" name="gender" value="male" <?php if($_SESSION['gender']=='male') echo "checked"; ?> >Male
                            <input type="radio" name="gender" value="other" <?php if($_SESSION['gender']=='other') echo "checked"; ?> >Other
                            <!--<span class="error">* <?php echo $genderErr;?></span> -->
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Birth Id No :<sup>*</sup> 
                        </td>

                        <td id="td1">
                            <input type="number" name="birth_id_no"  <?php if(!empty($_SESSION['birth_id_no'])) echo "value=".$_SESSION['birth_id_no'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">National Id No : 
                        </td>

                        <td id="td1">
                            <input type="number" name="national_id_no"  <?php if(!empty($_SESSION['national_id_no'])) echo "value=".$_SESSION['national_id_no'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Tax Id No : <sup>*</sup>
                        </td>

                        <td id="td1">
                            <input type="number" name="tax_id_no" <?php if(!empty($_SESSION['tax_id_no'])) echo "value=".$_SESSION['tax_id_no'];?>  >
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Height :<sup>*</sup> 
                        </td>
                        
                        <td id="td1">
                            <input type="number" name="heigt_cm" style="width:50px"  <?php if(!empty($_SESSION['heigt_cm'])) echo "value=".$_SESSION['heigt_cm'];?> > cm <input type="number" name="heigt_inch" style="width:50px" <?php if(!empty($_SESSION['heigt_inch'])) echo "value=".$_SESSION['heigt_inch'];?>> inch
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Religion:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="religion">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Muslim" <?php if($_SESSION['religion']=='Muslim')echo "selected"; ?> >Muslim</option>
                            <option value="Hindu" <?php if($_SESSION['religion']=='Hindu')echo "selected"; ?> >Hindu</option>
                            <option value="Christian" <?php if($_SESSION['religion']=='Christian')echo "selected"; ?> >Christian</option>
                            <option value="Other" <?php if($_SESSION['religion']=='Other')echo "selected"; ?> >Other</option>
                
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">E-mail:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <input type="email" name="email" <?php if(!empty($_SESSION['email'])) echo "value=".$_SESSION['email'];?> >
                            <!--<span class="error">* <?php echo $emailErr;?></span>-->
                        </td>
                    </tr>
                    <tr>
                        <td id="td1"><P style="color: rgb(0, 81, 255)"><b>Citizenship Information</b></p></td>
                        <td id="td1"></td>
                    </tr>
                    <tr>
                        <td id="td1">Nationality:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="nationality">
                            <option value="BANGLADESHI" <?php if($_SESSION['nationality']=='BANGLADESHI')echo "selected"; ?> >BANGLADESHI</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Citizenship Status:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="citizenship_status">
                            <option value="BIRTH" <?php if($_SESSION['citizenship_status']=='BIRTH')echo "selected"; ?> >BIRTH</option>
                            <option value="Naturalization" <?php if($_SESSION['citizenship_status']=='Naturalization')echo "selected"; ?> >Naturalization</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Dual Citizenship:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <input type="radio" name="dual_citizenship" value="Yes" <?php if($_SESSION['dual_citizenship']=='Yes') echo "checked"; ?>>Yes
                           <input type="radio" name="dual_citizenship" value="No"  <?php if($_SESSION['dual_citizenship']=='No') echo "checked"; ?> > No
                        </td>
                        
                    </tr>
                    <tr>
                        <td id="td1">
                        <P style="color: rgb(0, 81, 255)"><b>Present Address</b></p></td>
                        <td id="td1"></td>
                    </tr>
                    <tr>
                        <td id="td1">Village/House: 
                        </td>
                        <td id="td1">
                             <input type="text" name="village_house" <?php if(!empty($_SESSION['village_house'])) echo "value=".$_SESSION['village_house'];?> >
                        </td>
                    </tr>
                    
                    <tr>

                        <td id="td1">Road/Block/Sector:</td>
                        <td id="td1">
                        <input type="text" name="road_block_sector"  <?php if(!empty($_SESSION['road_block_sector'])) echo "value=".$_SESSION['road_block_sector'];?> >
                         </td>



                    </tr>



                    <tr>
                        <td id="td1">District:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="district">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Dhaka" <?php if($_SESSION['district']=='Dhaka')echo "selected"; ?> >Dhaka</option>
                            <option value="Barisal" <?php if($_SESSION['district']=='Barisal')echo "selected"; ?> >Barisal</option>
                            <option value="Kulan" <?php if($_SESSION['district']=='Kulan')echo "selected"; ?> >Kulna</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Police Station:<sup>*</sup>

                        </td>
                        <td id="td1"> 
                            <select name="police_station">
                            <option value="" selected disabled hidden></option>ion>
                            <option value="Dhaka"  <?php if($_SESSION['police_station']=='Dhaka')echo "selected"; ?> >Dhaka</option>
                            <option value="Barisal" <?php if($_SESSION['police_station']=='Barisal')echo "selected"; ?> >Barisal</opt
Kulan                            
                        </select> 
                        </td>
                    <tr>
                    <tr>
                        <td id="td1">Post Office:<sup>*</sup> </td>
                        <td id="td1">
                            <select name="post_office">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka"  <?php if($_SESSION['post_office']=='Dhaka')echo "selected"; ?>  >Dhaka</option>
                            <option value="Barisal"  <?php if($_SESSION['post_office']=='Barisal')echo "selected"; ?>   >Barisal</option>
                            <option value="Kulan"   <?php if($_SESSION['post_office']=='Kulan')echo "selected"; ?> >Kulna</option>
                            
                        </select></td>
                    </tr> 
                    <tr>
                        <td id="td1">
                            <P style="color: rgb(0, 81, 255)"><b>Parmanent Address</b></p>
                        </td>  
                        <td id="td1"></td>
                    <tr>
                        <td id="td1">
<!--ValueDeoahoynai-->  <input type="checkbox" name="samep" value="samep"  <?php if(!empty($_SESSION['samep'])) echo "checked"; ?>> </td>
                        <td id="td1">Same as above</td>
                    </tr>
                    <tr>
                        <td id="td1">Village/House: 
                        </td>
                        <td id="td1">
                             <input type="text" name="village_house"  <?php if(!empty($_SESSION['village_house'])) echo "value=".$_SESSION['village_house'];?> >
                        </td>
                    </tr>
                    

                     <tr>

                        <td id="td1">Road/Block/Sector:</td>
                        <td id="td1">
                        <input type="text" name="road_block_sector_p" <?php if(!empty($_SESSION['road_block_sector_p'])) echo "value=".$_SESSION['road_block_sector_p'];?> >
                        </td>



                    </tr>
                    
                    <tr>
                        <td id="td1">District:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="district_p">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Dhaka" <?php if($_SESSION['district_p']=='Dhaka')echo "selected"; ?> >Dhaka</option>
                            <option value="Barisal" <?php if($_SESSION['district_p']=='Barisal')echo "selected"; ?> >Barisal</option>
                            <option value="Kulan" <?php if($_SESSION['district_p']=='Kulan')echo "selected"; ?> >Kulna</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Police Station:<sup>*</sup>

                        </td>
                        <td id="td1"> 
                            <select name="police_station_p">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka"   <?php if($_SESSION['police_station_p']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                            <option value="Barisal"  <?php if($_SESSION['police_station_p']=='Barisal')echo "selected"; ?> >Barisal</option>
                            <option value="Kulan"   <?php if($_SESSION['police_station_p']=='Kulan')echo "selected"; ?> >Kulna</option>
                            
                        </select> 
                        </td>
                    <tr>
                    <tr>
                        <td id="td1">Post Office:<sup>*</sup></td>
                        <td id="td1">
                            <select name="post_office_p">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka"  <?php if($_SESSION['post_office_p']=='Dhaka')echo "selected"; ?>  >Dhaka</option>
                            <option value="Barisal"  <?php if($_SESSION['post_office_p']=='Barisal')echo "selected"; ?>  >Barisal</option>
                            <option value="Kulan"  <?php if($_SESSION['post_office_p']=='Kulan')echo "selected"; ?>  >Kulna</option>
                            
                        </select></td>
                       
                    </tr>
                    <tr>
                    <td id="td1">
                    </td>  
                    </tr>

                    <tr>
                        
                        <td id="td1">

                        <input type="submit" value="SAVE NOW & CONTINUE IN THE FUTURE" class="button1">

                        </td>
                        
                        <td id="td1">
                            
                            <input type="submit"  value="SAVE & NEXT" class="button1">

                        </td>
                    </tr>
            </table>

       
    </td>
            
    </table>
 </form>
    


    
    
</body>
</html>