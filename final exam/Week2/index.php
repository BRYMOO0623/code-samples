<!-- Model -->
<html>
    <form action = "index.php" method = "post">
        Enter Userid
        <br><input type = "text" id = "Userid" name = "Userid"/> <br>
        Enter Password
        <br><input type = "text" id = "pw" name ="pw"/><br>
        <input type = "submit"/>
    </form>
</html>
<!-- Controller -->
<?php
$user = $_POST['Userid'];
$pw = $_POST['pw'];
$userid = "Bryce";
$pass = "Moore";

// <!-- View -->
if (strlen($user) > 0)
    echo "<h3> Your User ID is: $user </h3>";
        else 
    echo "<h3> Please enter your User ID. </h3>";
if (strlen($pw) > 0)
        echo "<h3> Your password was accepted. </h3>";
        else
        echo "<h3> Please enter a valid password. </h3>";



?>