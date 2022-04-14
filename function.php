<?php

$p = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

$p = explode(" ", $p);

foreach ($p as $value){
    echo str_shuffle($value)." ";
}

//////////////////////////////////////////////////////////////////////////////////

function firstCap($value){
    echo "<p>" . mb_convert_case($value, MB_CASE_TITLE, 'UTF-8') . "</p>";
}
firstCap('élie');
//////////////////////////////////////////////////////////////
///
date_default_timezone_set('Europe/Amsterdam');
$now = date('Y-m-d h:m:s a');
echo $now;
//////////////////////////////////////////////////////////////

function totalNumber($a , $b){
    echo ($a == is_int($a) AND $b == is_int($b)) ? "<p>" . ($a + $b) . "</p>" :
        "<p> Error, it's not a number </p>";
};
totalNumber("10",5);
//////////////////////////////////////////////////////////////////////////

function acronym($value){
    $letters=array();
    $words = explode(' ', $value);
    foreach($words as $word){
        $word = (substr($word, 0, 1));
        array_push($letters, $word);
    }
    $shortname = strtoupper(implode($letters));
    return $shortname;
};
echo acronym('In code we trust');
//////////////////////////////////////////////////////////////////////////////////

////////////
echo '<br>';
////////////


$search = 'ae';
$replace = 'æ';
$subject = "sphaerotheca";
echo str_replace($search, $replace, $subject);
///
///
////////////
echo '<br>';
////////////

$search1 = 'æ';
$replace1 = "ae";
$subject1 = "sphærotheca";
echo str_replace($search1, $replace1,$subject1);
///////////////////////////////////////////////////////
function MsgErr($value1,$value2){
    return "<div class='$value1'>$value2</div>";
}
echo MsgErr("error","ceci est un message d'erreur");
///////////////////////////////////////////////////////

function RandomString(){
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randSmallWord = '';
    $randBigWord = '';
    for ($i = 0; $i <5; $i++){
        $randString = rand(0, strlen($characters)-1);
        $randSmallWord .= $characters[$randString];
    }
    for ($i = 7; $i <= 15; $i++){
        $randString = rand(0, strlen($characters)-1);
        $randBigWord .= $characters[$randString];
    }
    echo $randSmallWord . " <br> " . $randBigWord;
}
RandomString();

////////////
echo '<br>';
////////////
////////////////////////////////////////////////////////////////////

$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo strtolower($string);

////////////
echo '<br>';
////////////
/////////////////////////////////////////////////////////////////////////

function calculate_cone_volume($rayon, $hauteur){
    $PI = 3.14;
    $volume = $rayon * $rayon * $PI * $hauteur *(1/3);
    return $volume;
}
$volume = calculate_cone_volume(3,4);
echo $volume;
////////////
echo '<br>';
////////////
//////////////////////////////////////////////////////////////////////////////

