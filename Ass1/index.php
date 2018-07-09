


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
    <form method="post" action="indata1.php">  
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
                    <select name = "appling_in">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="INDIA">INDIA</option>
                    <option value="UGANDA">UGANDA</option>
                    <option value="JAPAN">JAPAN</option>
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
                    <option value="Ordinary">Ordinary</option>
                    <option value="Official">Official</option>
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Delivery Type:</td>
                    <td id="td1">
                    <input  type="radio" name="delivery_type" value="Regular">Rerular
                    <input type="radio" name="delivery_type" value="Express">Express
                
                    <!--<span class="error">* <?php echo $genderErr;?></span> -->
                </tr>
                    
                <tr>
                    <td id="td1"><P style="color: rgb(0, 81, 255)"><b>Personal Information</b></p><td>
                    
                </tr>
                <tr>
                    <td id="td1">Name of Applicants:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="name_of_application"></td>
                    <!--<span class="error">*<?php echo $nameErr;?></span>-->
                </tr>
                
                <tr>
                    <td id="td1">First Part(Given Name):<sup>*</sup></td>
                    <td id="td1"><input type="text" name="first_part"><td>
                </tr>

                <tr>
                    <td id="td1">Second Part(Surname):<sup>*</sup></td>
                    <td id="td1"><input type="text" name="second_part"><td>
                </tr>
                
                <tr>
                    <td id="td1"></td>
                    <td id="td1"><td>
                </tr>
                <tr>
                    <td id="td1">Gardian <input type="checkbox" name="gardian" value="gardian"></td>
                    <td id="td1"><em style="color:red">"Tick" </em> only if Applicant is legally adapted</td>
                        
<!--ValueDeoahoynai-->  
                        
                </tr>

                <tr>
                    <td id="td1">Fathers name:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="fathers_name"><td>
                </tr>
                <tr>
                        <td id="td1">Fathers Nationality:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="fathers_nationality">
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Fathers Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="fathers_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Business">Business</option>
                    <option value="Employer">Employer</option>
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Mothers name:<sup>*</sup></td>
                    <td id="td1"><input type="text" name="mothers_name"><td>
                </tr>
                <tr>
                        <td id="td1">Mothers Nationality:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="mothers_nationality">
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Mothers Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="mothers_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife">Housewife</option>
                    <option value="Business">Business Man</option>
                    <option value="Employer">Employer</option>
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Spouses name:</td>
                    <td id="td1"><input type="text" name="spouse_name"><td>
                </tr>
                <tr>
                        <td id="td1">Spouses Nationality:
                        </td>
                        <td id="td1">
                            <select name="spouses_nationality">
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            </select> 
                        </td>
                </tr>
                <tr>
                    <td id="td1">Spouses Profession:</td>
                    <td id="td1">
                    <select name="spouses_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife">Housewife</option>
                    <option value="Business">Business Man</option>
                    <option value="Employer">Employer</option>
                    <option value="UnEmployer">UnEmployer</option>
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Marital status:<sup>*</sup></td>
                    <td id="td1">
                    <select name="marital_status">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                    
                
                    </select> 
                    </td>
                </tr>

                <tr>
                    <td id="td1">Applicants Profession:<sup>*</sup></td>
                    <td id="td1">
                    <select name="applicants_profession">
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Housewife">Housewife</option>
                    <option value="Business">Business Man</option>
                    <option value="Employer">Employer</option>
                    <option value="UnEmployer">UnEmployer</option>
                    </select> 
                    </td>
                </tr>

                <tr>
                        <td id="td1">Country of Birth:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="country_of_birth">
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            <option value="Ugamda">Uganda</option>
                            </select> 
                        </td>
                </tr>

                <tr>
                        <td id="td1">Birth District:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="birth_district">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Noakhali">Noakhali</option>
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
                        <input type="date" name="dath_of_birth">
                        </td>
                    </tr>        
                    <tr>
                        <td id="td1">
                        Gender:<sup>*</sup>
                        </td>

                        <td id="td1">
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Other
                            <!--<span class="error">* <?php echo $genderErr;?></span> -->
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Birth Id No :<sup>*</sup> 
                        </td>

                        <td id="td1">
                            <input type="number" name="birth_id_no">
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">National Id No : 
                        </td>

                        <td id="td1">
                            <input type="number" name="national_id_no">
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Tax Id No : 
                        </td>

                        <td id="td1">
                            <input type="number" name="tax_id_no">
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Height :<sup>*</sup> 
                        </td>
                        
                        <td id="td1">
                            <input type="number" name="heigt_cm" style="width:50px"> cm <input type="number" name="heigt_inch" style="width:50px"> inch
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Religion:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <select name="religion">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Other">Other</option>
                
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">E-mail:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <input type="email" name="email">
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
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Citizenship Status:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="citizenship_status">
                            <option value="BIRTH">BIRTH</option>
                            <option value="Naturalization">Naturalization</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Dual Citizenship:<sup>*</sup>
                        </td>
                        <td id="td1">
                            <input type="radio" name="dual_citizenship" value="Yes">Yes
                           <input type="radio" name="dual_citizenship" value="No"> No
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
                             <input type="text" name="village_house">
                        </td>
                    </tr>
                    
                    <tr>

                        <td id="td1">Road/Block/Sector:</td>
                        <td id="td1">
                        <input type="text" name="road_block_sector">
                         </td>



                    </tr>



                    <tr>
                        <td id="td1">District:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="district">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Police Station:<sup>*</sup>

                        </td>
                        <td id="td1"> 
                            <select name="police_station">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select> 
                        </td>
                    <tr>
                    <tr>
                        <td id="td1">Post Office:<sup>*</sup> </td>
                        <td id="td1">
                            <select name="post_office">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select></td>
                    </tr> 
                    <tr>
                        <td id="td1">
                            <P style="color: rgb(0, 81, 255)"><b>Parmanent Address</b></p>
                        </td>  
                        <td id="td1"></td>
                    <tr>
                        <td id="td1">
<!--ValueDeoahoynai-->  <input type="checkbox" name="samep" value="samep"> </td>
                        <td id="td1">Same as above</td>
                    </tr>
                    <tr>
                        <td id="td1">Village/House: 
                        </td>
                        <td id="td1">
                             <input type="text" name="village_house">
                        </td>
                    </tr>
                    

                     <tr>

                        <td id="td1">Road/Block/Sector:</td>
                        <td id="td1">
                        <input type="text" name="road_block_sector_p">
                        </td>



                    </tr>
                    
                    <tr>
                        <td id="td1">District:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="district_p">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td id="td1">Police Station:<sup>*</sup>

                        </td>
                        <td id="td1"> 
                            <select name="police_station_p">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select> 
                        </td>
                    <tr>
                    <tr>
                        <td id="td1">Post Office:<sup>*</sup></td>
                        <td id="td1">
                            <select name="post_office_p">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
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