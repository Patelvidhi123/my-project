<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="background-image: url('image/12.jpg'); background-size: cover; background-repeat: no-repeat;">

    <form method="post" name="registrationform" action="regp.php" style=" width: 300px; margin: 0 auto; padding: 20px; background-color: #ebf263; opacity: 0.9;">

        <center><h1>Registration</h1></center>

        USERNAME😁:<input type="text" name="un" placeholder="Enter first name" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"><br><br>

       

        SELECT GENDER:<br>
        <input type="radio" name="gender" value="female">FEMALE<br>
        <input type="radio" name="gender" value="male">MALE<br>
        <input type="radio" name="gender" value="other">OTHER<br><br>

        E-MAIL:<input type="text" name="em" placeholder="Enter email" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"><br><br>

        PASSWORD:<input type="password" name="pass" placeholder="Enter password" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"><br><br>

        CONFIRM PASSWORD:<input type="password" name="pass1" placeholder="Confirm password" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"><br><br>

        

        <input type="submit" name="OK" value="OK" style="background-color: #213245; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">

        <input type="reset" name="cancel" value="Cancel" style="background-color: #d9534f; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">
    </form>
</body>
</html>
