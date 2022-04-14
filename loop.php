<!-- // Loops -->
<?php

// $pronouns = array (
//     'I',
//     'You',
//     'He/She',
//     'We',
//     'You',
//     'They'
// );
// foreach ( $pronouns as $pronouns) {
//     if ($pronouns == 'He/She'){
//         echo $pronouns . ' codes <br>';
//     }else {
//         echo $pronouns . ' code <br>';
//     }
// };

////////////
echo '<br>';
////////////

// $count = 0;

// while($count <= 120){
//     echo $count . "<br>";
//     $count++;
// };

// for ( $countt = 0; $countt <= 120; $countt++) {
//     echo $countt . "<br>";
// };

////////////
echo '<br>';
////////////

// $keller = array (
//     'alex',
//     'ali',
//     'amoryne',
//     'anais',
//     'axel',
//     'chris',
//     'elena',
//     'elise',
//     'fidelys',
//     'florian',
//     'jason',
//     'julie',
//     'kevin',
//     'loic',
//     'mara',
//     'matthias',
//     'nicolas',
//     'philippe',
//     'pierre',
//     'sarah'
// );
// foreach ($keller as $keller){
//     echo $keller . "<br>";
// };

////////////
echo '<br>';
////////////

$country = array (
    'AU' => 'australia',
    'AT' => 'austria',
    'BE' => 'belgium',
    'BR' => 'brazil',
    'CA' => 'canada',
    'IN' => 'india',
    'IR' => 'iran',
    'TR' => 'turkey',
    'DE' => 'germany',
    'TH' => 'thailand',
);


?>
<form method="get" action="loop.php">
<label for="countries">Choose your countries</label>
<select name="countries">
    <option value="default"> -> HERE <- </option>
    <?php foreach ($country as $key => $value) { ?>
        <option value=<?php echo $key ?>> <?php echo $value ?> </option>
    <?php } ?>
</select>
</form>