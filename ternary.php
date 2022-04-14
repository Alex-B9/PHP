<?php

// 11. Ternary exercises

$gender = $_GET['gender'];

if (isset($_GET['submit'])){
   echo ($gender == "M") ? "Hello sir" : "hello miss";
}

?>
<form method="get" action="ternary.php">
<label for="note">gender :</label>
    <input type="radio" name="gender" value="M">
    <label for="gender">Men</label>
    <input type="radio" name="gender" value="W">
    <label for="gender">Women</label>
    <label for="gender"> ?</label>
    <input type="submit" name="submit" value="Send">
</form>