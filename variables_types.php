<?php
$_Name = 'Alex';
$_Age = 25;
$_Eyes = 'Green';
$Family = array(
    0 => "Jean",
    1 => 'Cécile',
    2 => 'Luc',
    3 => 'Alfred',
    4 => 'Jiren',
    5 => 'Eren'
);
?>
<html>
    <head>
        <title>This is</title>
    </head>
    <body>
        <?php { ?>
            <p>My name is <?php echo $_Name; ?>!</p>
            <p>I have <?php echo $_Age; ?> year old</p>
            <p>The color of my eye is <?php echo $_Eyes; ?>.</p>
            <p>And the first member of my familly is <?php echo $Family[0]; ?></p>
        <?php } ?>
    </body>
</html>