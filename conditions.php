<?php
/**
 * Série d'exercices sur les structures conditionnelles PHP.
*/
// 1.1 Clean your room Exercise 

// $room_is_filthy = true;
// function cleanup_room(){
// };

// if( $room_is_filthy = true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

///////
// echo "<br>"
//////


// 1.2 Clean your room Exercise, improved

$possible_states = array(
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"
);
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == $possible_states[0] OR $room_filthiness == $possible_states[1] ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[2]){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

///////
echo "<br>";
//////


// 2. "Different greetings according to time" Exercise

date_default_timezone_set('Europe/Amsterdam');
$now = date("h:i a", time());
echo($now);

if($now >= 5 AND $now <= 9){
    echo " <br> Good morning !";
} elseif ($now >= 9.01 AND $now <= 12) {
    echo " <br> Good day !";
} elseif ( $now >= 12.01 AND $now <= 16 ) {
    echo " <br> Good afternoon";
} elseif ( $now >= 16.01 and $now <= 21) {
    echo " <br> Good evening";
} else {
    echo " <br> Good night";
}

///////
echo "<br>";
//////

// 3.(4).(5). "Different greetings according to age" Exercise

if (isset($_GET['submit'])){
    if ($_GET['gender'] == "Men") {
        if ($_GET['age'] <= 12) {
            if ($_GET['languages'] == "yes") {
                echo "Hello boy !";
            }else {
                echo "Olá garoto !";
            }
        }elseif ($_GET['age'] > 12 AND $_GET['age'] < 18) {
            if ($_GET['languages'] == "yes") {
                echo "Hello mister teen !";
            }else {
                echo "Olá senhor adolescente !";
            }
        }elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115 ) {
            if ($_GET['languages'] == "yes") {
                echo "Hello sir !";
            }else {
                echo "Olá senhor !";
            }
        }else{
            if ($_GET['languages'] == "yes") {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }else {
                echo "Uau! Continua vivo ? Você é um robô, como eu? Posso te abraçar ?";
            }
        }
    }elseif ( $_GET['gender'] == "Women") {
        if ($_GET['age'] <= 12) {
            if ($_GET['languages'] == "yes") {
                echo "Olá garota !";
            }else {
                echo "Olá garoto !";
            }
        }elseif ($_GET['age'] > 12 AND $_GET['age'] < 18) {
            if ($_GET['languages'] == "yes") {
                echo "Hello miss teen !";
            }else {
                echo "Olá senhorita adolescente !";
            }
        }elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115 ) {
            if ($_GET['languages'] == "yes") {
                echo "Hello miss !";
            }else {
                echo "Olá senhorita !";
            }
        }else{
            if ($_GET['languages'] == "yes") {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }else {
                echo "Uau! Continua vivo ? Você é um robô, como eu? Posso te abraçar ?";
            }
        }
    }
}
?>
<form method="get" action="conditions.php">
	<label for="age">What's your age ?</label>
	<input type="text" name="age">
	<label for="gender">What's your gender ?
	<input type="radio" name="gender" value="Men">
	<label for="gender">Men</label>
	<input type="radio" name="gender" value="Women">
	<label for="gender">Women</label>
    </label>
    <label for="languages"> <br> Do you speak English ?
	<input type="radio" name="languages" value="yes">
	<label for="languages">yes</label>
	<input type="radio" name="languages" value="no">
	<label for="languages">no <br> </label>
    </label>
	<input type="submit" name="submit" value="Greet me now">
</form>


<!-- 6.(7) The Girl Soccer team -->
<?php 

echo ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "Women") ? "Welcome to the team !" : "Sorry, you don't fit the criteria" ;
?>
<form method="get" action="conditions.php">
<label for="age">What's your age ?</label>
<input type="text" name="age">
<label for="gender"> <br> What's your gender ?</label>
<input type="radio" name="gender" value="Men">
<label for="gender">Men</label>
<input type="radio" name="gender" value="Women">
<label for="gender">Women <br> </label>
<input type="submit" name="submit" value="Send">
</form>

<!-- 8. "School sucks!" Exercise -->
<?php
if (isset($_GET['submit'])) {
    if ( $_GET['note'] = 0 AND $_GET['note'] < 4){
        echo "This work is really bad. What a dumb kid!";
    }elseif ( $_GET['note'] >= 5 AND $_GET['note'] <= 9){
        echo "This is not sufficient. More studying is ;required.";
    }elseif ( $_GET['note'] == 10) {
        echo "Barely enough";
    }elseif ( $_GET['note'] >= 11 AND $_GET['note'] <= 14) {
        echo "Not bad !";
    }elseif ( $_GET['note'] >= 15 AND $_GET['note'] <= 18) {
        echo "Bravo, bravissimo !";
    }elseif ( $_GET['note'] >= 19 AND $_GET['note'] <= 20 ) {
        echo "Too good to be true: confront the cheater !";
    }else {
        echo "No notes";
    }
}
?>
<form method="get" action="conditions.php">
    <label for="note">Cotation :</label>
    <input type="text" name="note">
    <input type="submit" name="submit" value="Send">
</form>


