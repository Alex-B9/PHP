<?php
$me = array (
    'firstname' => 'Alex',
    'lastname' => 'B',
    'season' => 'summer',
    'football' => 'No',
    'favorite_movie' => array (
        'Avengers',
        'Rocky',
        'Evasion',
        'The expendables',
    ),
    'hobbies' => array (
        'coding',
        'movies/series',
        'sport'
    ),
    'other' => array (
        'firstname' => 'Billy',
        'lastname' => 'D',
        'season' => 'winter',
        'football' => 'yes',
        'favorite_movie' => array (
            'Interstellar',
            'Avengers',
            'Spider-man',
            'Hunger Games',
            'Harry Potter'
        ),
        'hobbies' => array (
            'Video games',
            'Series',
            'Music'
        )
    )
);
$soulmate = array (
    'firstname' => 'A',
    'lastname' => 'B',
    'season' => 'summer',
    'football' => 'no',
    'favorite_movie' => array (
        'grease',
        'titanic',
        'avatar',
        'Mamma Mia'
    ),
    'hobbies' => array (
        'movies/series',
        'sport',
        'reading'
    )
);
echo '<pre>';
$me['hobbies'][]='taxidermy';
$me['lastname'] = 'Durant';
$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);
print_r("Number of my hobbies : " . (count($me['hobbies'])) . "<br>");
print_r("Number of Billy's hobbies : " . count($me['other']['hobbies']) . "<br>");
print_r("total : " . (count($me['hobbies']) + count($me['other']['hobbies'])). "<br>");
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
?>

////////////////////////////////////////////////////

// More array exercises
<?php

$web_development = array (
    'frontend' => array (),
    'backend' => array()
);

$web_development['frontend'][0]= "xhtml";
$web_development['backend'][0]= "Ruby on Rails";
$web_development['frontend'][1]= "CSS";
$web_development['frontend'][2]= "flash";
$web_development['frontend'][3]= "JavaScript";
$web_development['frontend'][0]= "html";
unset($web_development['backend'][0]);
echo '<pre>';
print_r($web_development);
echo '</pre>';