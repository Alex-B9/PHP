<?php

// 9. The "Switch" structure.

if (isset($_GET['note'])){
    switch ($_GET['note']) {
        case 1 : 
        case 2 :
        case 3 : 
        case 4 :
            echo "This work is really bad. What a dumb kid !";
            break;
        case 5 : 
        case 6 :
        case 7 :
        case 8 :
        case 9 :
            echo "This is not sufficient. More studying is required.";
            break;
        case 10 :
            echo "Barely enough !";
            break;
        case 11 :
        case 12 :
        case 13 :
        case 14 :
            echo "Not bad !";
            break;
        case 15 :
        case 16 :
        case 17 :
        case 18 :
            echo "Bravo, bravissimo !";
            break;
        case 19 :
        case 20 :
            echo " Too good to be true : confront the cheater !";
            break;
        default :
            echo "No notes.";
    }
}
?>
<form method="get" action="switch-structure.php">
    <label for="note">Cotation :</label>
    <input type="text" name="note">
    <input type="submit" name="submit" value="Send">
</form>

