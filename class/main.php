<?php

$fullname = $email = $dateofbirth = $phonenumber = $collegename = $gender = $grade = $booktitle = $isbn = $quantity = $want = $interest = $shippingaddress = $city = $state = $postal = $country = $message = "";

$fullnameErr = $emailErr = $dateofbirthErr = $phonenumberErr = $collegenameErr = $genderErr = $gradeErr = $booktitleErr = $isbnErr = $quantityErr = $wantErr = $interestErr = $shippingaddressErr = $cityErr = $stateErr = $postalErr = $countryErr = $messageErr = "";


if (isset($_POST["submit"])) {
    if(empty($_POST["fullname"])){
        $fullnameErr = "Fullname is required";
    }else{
        $fullname = $_POST["fullname"];
        if (!preg_match("/^[a-zA-Z']*$/", $fullname)){
            $fullnameErr = "Only letters and space allowed";
        }
    }



    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = $_POST["email"];
    }



    if(empty($_POST["dateofbirth"])){
        $dateofbirthErr = "Date of Birth is required";
    }else{
        $dateofbirth = $_POST["dateofbirth"];
    }



    if(empty($_POST["phonenumber"])){
        $phonenumberErr = "Phone Number is required";
    }else{
        $phonenumber = $_POST["phonenumber"];
    }



    if(empty($_POST["collegename"])){
        $collegenameErr = "College Name is required";
    }else{
        $collegename = $_POST["collegename"];
    }



    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = $_POST["gender"];
    }



    if(empty($_POST["grade"])){
        $grade = "";
    }else{
        $grade = $_POST["grade"];
    }



    if(empty($_POST["booktitle"])){
        $booktitleErr = "Book Title is required";
    }else{
        $booktitle = $_POST["booktitle"];
    }



    if(empty($_POST["isbn"])){
        $isbnErr = "ISBN is required";
    }else{
        $isbn = $_POST["isbn"];
    }



    if(empty($_POST["quantity"])){
        $quantityErr = "Quantity is required";
    }else{
        $quantity = $_POST["quantity"];
    }



    if(empty($_POST["want"])){
        $wantErr = "Want is required";
    }else{
        $want = $_POST["want"];
    }



    if(empty($_POST["interest"])){
        $interest = "";
    }else{
        $interest = $_POST["interest"];
    }



    if(empty($_POST["shippingaddress"])){
        $shippingaddressErr= "Shipping Address is required";
    }else{
        $shippingaddress = $_POST["shippingaddress"];
    }



    if(empty($_POST["city"])){
        $cityErr = "City is required";
    }else{
        $city = $_POST["city"];
    }



    if(empty($_POST["state"])){
        $stateErr = "State is required";
    }else{
        $state = $_POST["state"];
    }



    if(empty($_POST["postal"])){
        $postalErr = "Postal code is required";
    }else{
        $postal = $_POST["postal"];
    }



    if(empty($_POST["country"])){
        $countryErr = "Country is required";
    }else{
        $country = $_POST["country"];
    }



    if(empty($_POST["message"])){
        $message = "";
    }else{
        $message = $_POST["message"];
    }
            
}




?>


<!DOCTYPE html>

<html>
    <head>
        <title>Samp</title>


        <style>
            body{
                margin: 0%;
                padding: 0%;
            }

            .centered{
                text-align: center;
            }

            .redd{
                color: red;
            }

          

        

        </style>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
    <body>


        
        <div style="background-color: #a3d5ff;">
            <br><br>
            <h2 style="text-align: center; "><b>Book Order Details</b></h2>
            <br><br>
        </div>



        <div style="background-color: #d9f0ff;">
            <br><br>
        </div>


        <form method="post" action="#">
            <div style="background-color: #d9f0ff;">
                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    1. Full Name:<br><input type="text" name="fullname" placeholder="Enter your Name, e.g. Zakir Naik" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    2. Email:<br><input type="email" name="email" placeholder="example@example.com" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    3. Date of Birth:<br><input type="date"" name="dateofbirth" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    4. Phone Number:<br><input type="text"" name="phonenumber" placeholder="+880xxxxxxxxx" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    5. College Name:<br><input type="text" name="collegename" placeholder="e.g. Notre Dame College" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div style="margin-left: -103px;">
                                    6. Gender:<br><input type="radio"" name="gender">&nbsp;Male&nbsp;&nbsp;&nbsp;
                                    <input type="radio"" name="gender">&nbsp;Female&nbsp;&nbsp;
                                    <input type="radio"" name="gender">&nbsp;Others&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    7. Grade:<br><input type="text"" name="grade" placeholder="e.g. 11th" style="width: 300px;"><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    8. Book Title:<br><input type="text" name="booktitle" placeholder="e.g. Harry Potter by J. K. Rowling" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    9. ISBN (13 digits):<br><input type="text" name="isbn" placeholder="978-x-xx-xxxxxx-x" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    10. Quantity:<br><input type="number" name="quantity" placeholder="Enter expected quantity" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div style="margin-left: -26px;">
                                    11. Want:<br><input type="checkbox"" name="want"> Printed Book&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="want"> eBook&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="want"> Audiobook &nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div style="margin-left: -45px;">
                                    12. Interest:<br><input type="checkbox"" name="interest"> Science&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest1"> History&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest2"> Travel&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <input type="checkbox"" name="interest3"> Politics&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest4"> Food&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest5"> Climate&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <input type="checkbox"" name="interest6"> Emotion&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest7"> Romance&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"" name="interest8"> Horror&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    13. Shipping Address:<br><input type="text" name="shippingaddress" placeholder="Street address physical address only" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    14. City:<br><input type="text" name="city" placeholder="e.g. Dhaka" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    15. State/Province:<br><input type="text" name="state" placeholder="e.g. Savar" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    16. Postal/Zip code:<br><input type="number" name="postal" placeholder="e.g. 1212" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                    </div>
                </div>
                <br>



                <div class="container">
                    <div class="row">
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    17. Country:<br><input type="text" name="country" placeholder="Enter your Country, e.g. Bangladesh" style="width: 300px;">&nbsp;<span class="redd">* <?php echo $fullnameErr;?></span><br><br>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center; justify-content: center;">
                                <div style="margin-left: 10px;">
                                    18. Message:<br><textarea name="message" placeholder="Enter your Thoughts" rows="03" cols="41"></textarea><br><br>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


            
            <div style="background-color: #d9f0ff;">
                <br>
            </div>
            


            <div>
                <br><br>
                <div class="centered">
                    <input type="checkbox"" name="checkbox"> <span>I accept the <span><a href="#" style="color: blue;">terms and conditions.</a></span></span>
                </div>
                <br>


            
                <div class="centered">
                    <input type="submit" name="submit" placeholder="Submit" class="btn btn-success btn-lg">
                </div>
                <br><br>
            </div>
        </form>
        <hr>
        <br><br>



        <div style="margin-left: 290px;">
            <?php
            echo "1. Full Name:" . $fullname . "<br>";
            echo "2. Email:" . $email . "<br>";
            echo "3. Date of Birth:" . $dateofbirth . "<br>";
            echo "4. Phone Number:" . $phonenumber . "<br>";
            echo "5. College Name:" . $collegename . "<br>";
            echo "6. Gender:" . $gender . "<br>";
            echo "7. Grade:" . $grade . "<br>";
            echo "8. Book Title:" . $booktitle . "<br>";
            echo "9. ISBN:" . $isbn . "<br>";
            echo "10. Quantity:" . $quantity . "<br>";
            echo "11. Want:" . $want . "<br>";
            echo "12. Interest:" . $interest . "<br>";
            echo "13. Shipping Address:" . $shippingaddress . "<br>";
            echo "14. City:" . $city . "<br>";
            echo "15. State/Province:" . $state . "<br>";
            echo "16. Postal/Zip code:" . $postal . "<br>";
            echo "17. Country:" . $country . "<br>";
            echo "18. Message:" . $message . "<br>";

            ?>
        </div>

        <br><br><br><br>

            






    </body>
</html>