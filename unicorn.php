<?php
if (isset($_GET['species'])){
    $species = $_GET['species'];
    $uni = '<img src="https://media.giphy.com/media/HULqwwF5tWKznstIEE/giphy.gif" alt="">';
    $catt = '<img src="https://giphy.com/clips/bestfriends-best-friends-adopt-animal-adoption-cwQCUhKible5mGrtMO" alt="">';
    $hmn = '<img src="https://media.giphy.com/media/4VEAg0IWR7gNa/giphy.gif" alt="">';
    if ($species == "human"){
        echo $hmn;
    }elseif ($species == "cat"){
        echo $catt;
    }elseif ($species == "unicorn"){
        echo $uni;
    }else {
        echo "Error";
    }
}

?>
<form method="get" action="unicorn.php">
    <label for="species">What is your species?</label>
    <input type="radio" name="species" value="human">
    <label for="human">Human</label>
    <input type="radio" name="species" value="cat">
    <label for="cat">Cat</label>
    <input type="radio" name="species" value="unicorn">
    <label for="unicorn">Unicorn</label>
    <input type="submit" name="submit" value="Send">
</form>