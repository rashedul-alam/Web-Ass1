<!DOCTYPE html>
<html>
<head>
    <title>Stage Two</title>
    <link rel="stylesheet" type="text/css" media="screen" href="index1.css" >
    <?php
        session_start();

    ?>
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
    <h1 id="h1">PASSPORT APPLICATION -STAGE 3</h1>
    
    <p id="p1"><b>Online Application ID: <?php echo $_SESSION['id']?></b></p>
    
    <p id ="p2">Fields marked with <span class="error">(*)</span>are mandatory.</p>
    <hr id ="line">
   <form method="post" action="indata33.php">
    <table id="table0">

            <td id="td0">
              
            <table id="table1">
                <tr>
                    <th id="th1"></th>
                    <th id="th1"></th>
                </tr>

                <tr>
                    <td id="td1">
                    <p  style="color: rgb(0, 81, 255)"><b>Payment Information</b></P></td>
                    <td id="td1"></td>
                </tr>
                


                <tr>
                    <td id="td1">permanent Type:
                    </td>
                    <td id="td1">

                        <input type="radio" name="payment_type" value="online"<?php if($_SESSION['payment_type']=='online')echo "checked"; ?>>Online<br>
                        <input type="radio" name="payment_type" value="non_online"<?php if($_SESSION['payment_type']=='non_online')echo "checked"; ?>>Non-Online<br>

                    </td>
                    
                </tr>

                <tr>

                    <td id="td1"><input type="checkbox" name="skip_payment" value="skip_payment" <?php if(!empty($_SESSION['skip_payment'])) echo "checked"; ?>>skip payment</td>

                    <td id="td1"></td>

                </tr>

                <tr>
                    <td id="td1">Amount:<sup>*</sup>
                    <td id="td1">
                    <select  name = "amount_c" >
                    
                    <option value="BDT" <?php if($_SESSION['amount_c']=='BDT')echo "selected"; ?>>BDT</option>
                    <option value="INR" <?php if($_SESSION['amount_c']=='INR')echo "selected"; ?>>INR</option>
                    <option value="USD"<?php if($_SESSION['amount_c']=='USD')echo "selected"; ?>>USD</option>
                    </select> 
                    <input type="number" name="amount"></td>
                </tr>

                <tr>
                    <td id="td1">Date Of Payment:<sup>*</sup>
                    </td>
                    <td id="td1"><input type="date" class="input2" name="date_of_payment"<?php if(!empty($_SESSION['date_of_payment'])) echo "value=".$_SESSION['date_of_payment'];?>></td>
                </tr>

                

                <tr>
                    <td id="td1">Receipt No:<sup>*</sup>
                    </td>
                    <td id="td1"><input type="text" class="input2" name="receipt_no"<?php if(!empty($_SESSION['receipt_no'])) echo "value=".$_SESSION['receipt_no'];?>></td>
                    
                </tr>

                <tr>
                    <td id="td1">Name Of Bank:</td>
                    <td id="td1">
                    <select class="select2" name = "name_of_bank" >
                    <option value="" selected disabled hidden>--Select--</option>
                    <option value="Rupali_bank"<?php if($_SESSION['name_of_bank']=='Rupali_bank')echo "selected"; ?>>Rupali Bank</option>
                    <option value="Islamic_Bank"<?php if($_SESSION['name_of_bank']=='Islamic_Bank')echo "selected"; ?>>Islamic BAnk</option>
                    
                    </select> 
                    
                    </td>
                </tr>

                <tr>
                    <td id="td1">Name Of Branch:</td>
                    <td id="td1">
                    <select class="select2" name = "name_of_branch" >
                    <option value="dhaka"<?php if($_SESSION['name_of_branch']=='dhaka')echo "selected"; ?>>Dhaka</option>
                    <option value="Barisal"<?php if($_SESSION['name_of_branch']=='Barisal')echo "selected"; ?>>Barisal</option>
                    
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
                        <td id="td1">
                         </td>
                         <td id="td1"></td>
                    </tr>
                


                    <tr>
                        <td id="td1"
                        </td>
                        <td id="td1"></td>
                    </tr>
                    <tr>
                        <td id="td1">
                        </td>
                        <td id="td1">
                        
                        </td>
                    </tr>   
                    <tr>
                        <td id="td1">
                        </td>
                        <td id="td1">
                        
                        </td>
                    </tr>   

                    <tr>
                        <td id="td1"></td>
                        <td id="td1">
                           </td>
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
                        <td id="td1"><a href="re2.php" class="button1">PREVIOUS PAGE</a></td>

                        <td id="td1"><input type="submit" value="SAVE & NEXT" class="button1"></td>
                    </tr>
                    
                    
            </table>

        
    </td>
            
    </table>

    </form>


    
    
</body>
</html>