<?php
$finalString = "";
// $getExcuse = $_GET['excuse'];
    
if (isset($_GET['submit'])){
    $childName = $_GET['childName'];
    $teacherName = $_GET['teacherName'];
    $parentName = $_GET['parentName'];
    $gender = $_GET['gender'];
    $excuse = array (
        "illness" => " is sick.",
        "is_dead" => " his dog is dead.",
        "stupid_grandmother" => " his grandmother fell from the roof",
        "Nothing" => " won't be able to be here today because he has nothing to do.",
        "laziness" => " will not be able to be present because I, his parent, are really lazy to drive him."
    );
    if ($gender == "boy") {
        $finalString = "Dear " .  $teacherName . ". <br>My boy ";
    }elseif ($gender == "girl") {
        $finalString = "Dear " .  $teacherName . ". <br>My girl ";
    }else {
        echo "Error";
    }
    
    $finalString .=   $childName . ", will not come today because ";
    
    if ($_GET['excuse'] == "illness"){
        $finalString .= $excuse["illness"];
    }elseif ( $_GET['excuse'] == "death_of_the_pet"){
        $finalString .= $excuse['is_dead'];
    }elseif ( $_GET['excuse'] == "stupid_family" ) {
        $finalString .= $excuse['stupid_grandmother'];
    }elseif ($_GET['excuse'] == "nothing") {
        $finalString .= $excuse['Nothing'];
    }elseif ($_GET['excuse'] == "laziness" ){
        $finalString .= $excuse['laziness'];
    }else {
        echo "Error. Please, choose an excuse.";
    };
    $finalString .=  "<br> Cordially, " . $parentName;
    echo "<p class='finalTxt'>$finalString</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Excuse generator</title>
</head>
<body>
    <div class="box_container">
        <form method="get" action="excuse.php">
            <label for="parentName">What's your name ?</label>
            <input type="text" name="parentName">
            <label for="childName"><br>What are the names of your children ?</label>
            <input type="text" name="childName">
            <label for="teacherName"><br>What's the name of the teacher ?</label>
            <input type="text" name="teacherName">
            <label for="gender"><br>What is the gender of your child ?</label>
            <select name="gender">
                <option value="boy">boy</option>
                <option value="girl">girl</option>
            </select>
            <label for="excuse"><br> Choose an excuse</label>
            <select name="excuse">
                <option value="illness">illness</option>
                <option value="death_of_the_pet">death of the pet</option>
                <option value="stupid_family">stupid_family</option>
                <option value="nothing">nothing</option>
                <option value="death_of_the_pet">death of the pet</option>
                <option value="laziness">laziness</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Send">
        </form>
    </div>
</body>
</html>