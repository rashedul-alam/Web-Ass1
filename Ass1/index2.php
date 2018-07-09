<?php
        session_start();
        $id=rand(10,99999999);
        $SESSION['id']=$id;


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
    <h1 id="h1">PASSPORT APPLICATION -STAGE 2</h1>
    
    <p id="p1"><b>Online Application ID: <?php echo $_SESSION['id']?></b></p>
    
    <p id ="p2">Fields marked with <span class="error">(*)</span>are mandatory.</p>
    <hr id ="line">
   <form method="post" action="indata2.php">  
    <table id="table0">

            <td id="td0">
            
            <table id="table1">
                <tr>
                    <th id="th1"></th>
                    <th id="th1"></th>
                </tr>

                <tr>
                    <td id="td1">
                    <p  style="color: rgb(0, 81, 255)"><b>Applicant Contact Information</b></P></td>
                    <td id="td1"></td>
                </tr>
                


                <tr>
                    <td id="td1">Office No:
                    </td>
                    <td id="td1"><input type="text" class="input2" name="office_no"></td>
                </tr>

                <tr>
                    <td id="td1">Residence No:
                    </td>
                    <td id="td1"><input type="text" class="input2" name="residence_no"></td>
                </tr>

                <tr>
                    <td id="td1">Mobile No:
                    </td>
                    <td id="td1"><input type="text" class="input2" name="mobile_no"></td>
                </tr>

                <tr>
                    <td id="td1">
                    <p  style="color: rgb(0, 81, 255)"><b>Emergency Contact Person Details</b></P></td>
                    <td id="td1"></td>
                </tr>

                <tr>
                    <td id="td1">Name:<sup>*</sup>
                    </td>
                    <td id="td1"><input type="text" class="input2" name="em_name"></td>
                    
                </tr>

                <tr>
                    <td id="td1">Country:<sup>*</sup> </td>
                    <td id="td1">
                    <select class="select2" name = "em_country" >
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="INDIA">INDIA</option>
                    <option value="UGANDA">UGANDA</option>
                    <option value="JAPAN">JAPAN</option>
                    </select> 
                    
                    </td>
                </tr>

                <tr>

                    <td id="td1"><input type="checkbox" name="same_as_permanent_address" value="same_as_permanent_address">Same as permanent address</td>
        
                    <td id="td1"></td>

                </tr>
                <tr>

                    <td id="td1"><input type="checkbox" name="same_as_present_address" value="same_as_present_address">Same as present address</td>

                    <td id="td1"></td>

                </tr>   
                
                <tr>
                        <td id="td1">Village/House: 
                        </td>
                        <td id="td1">
                             <input type="text" class="input2" name="em_village_house">
                        </td>
                </tr>

                <tr>

                    <td id="td1">Road/Block/Sector:</td>
                    <td id="td1">
                    <input type="text" class="input2"  name="em_road_block_sector">
                    </td>



                </tr>



                    
                    <tr>
                        <td id="td1">District:<sup>*</sup> 
                        </td>
                        <td id="td1">
                            <select name="em_district" class="select2">
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
                            <select name="em_police_station" class="select2">
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
                            <select name="em_post_office" class="select2">
                            <option value="" selected disabled hidden></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kulan">Kulna</option>
                            
                        </select></td>
                    </tr>
                    
                    <tr>

                         <td id="td1">Email:</td>
                         <td id="td1">
                         <input type="email" class="input2"  name="em_email">
                         </td>



                    </tr>
                    <tr>
                        <td id="td1">Relationship:<sup>*</sup> </td>
                        <td id="td1">
                            <select name="em_relationship" class="select2">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Parents">Parents</option>
                            <option value="Sidling">Relativs</option>
                           
                            
                        </select></td>
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
                        <td id="td1">
                         <p  style="color: rgb(0, 81, 255)"><b>Old Passport Information</b></P></td>
                         <td id="td1"></td>
                    </tr>
                


                    <tr>
                        <td id="td1">Passport No:
                        </td>
                        <td id="td1"><input type="text" class="input2" name="Passport_no"></td>
                    </tr>
                    <tr>
                        <td id="td1">Place Of Issue:<sup>*</sup>
                        </td>
                        <td id="td1">
                        <input type="text" class="input2" name="place_of_issue">
                        </td>
                    </tr>   
                    <tr>
                        <td id="td1">Date Of Issue:<sup>*</sup>
                        </td>
                        <td id="td1">
                        <input type="date" class="input2" name="date_of_issue">
                        </td>
                    </tr>   

                    <tr>
                        <td id="td1">Re-issue Reason: </td>
                        <td id="td1">
                            <select name="re_issue_reason" class="select2">
                            <option value="" selected disabled hidden>--Select--</option>
                            <option value="Damaged">Damaged</option>
                            <option value="Lost">lost</option>
                           
                            
                        </select></td>
                    </tr>
                    <tr>
                        <td id="td1">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                        
                        </td>
                        <td id="td1">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                        
                        
                        </td>
                    </tr> 
                    <tr>
                        <td id="td1"><a href="index.php" class="button1">PREVIOUS PAGE</a></td>
                        
                        <td id="td1"><input type="submit" value="SAVE & NEXT" class="button1"></td>
                    </tr>
                    
                    
            </table>

        
    </td>
            
    </table>
</form>
    


    
    
</body>
</html>