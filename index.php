<?php
/* This part of the PHP code that Declares the array with the Random Quotes Each Time the Code is Accessed*/
$phrases = [
    'Imagination is more important than knowledge. -Albert Einstein',
    'All truths are easy to understand once they are discovered; the point is to discover them. - Galielo Galilei',
    'I have not failed. I\'ve just found 10,000 ways that won\'t work. - Thomas Edison',
];
?>


<!DOCTYPE html>
<html>
<head>
    <title>OSCAR RANGEL P1</title>
    <style>
        .center {
            text-align: center;
        }
        .left {
            text-align: left;
        }
    </style>
<body>
<header>
    <div class="center">
        <h1>Oscar Rangel</h1>
    </div>
</header>
<div class="center">
    <img src='images/Oscar_Rangel.jpg' alt='Oscar Rangel Photograph'>
    <h2>About Me</h2>
</div>

<div class="left">
    <p> I am Senior Controls Engineer for the General Electric Company with a BSEE in Electrical Engineering from Tulane University.
        My job involves replacing legacy electronics of Gas Turbine Power Generation units with the latest generation of controls and computer software.
        With the increasing industrial demand for web based applications, this course is a good starting point for learning about dynamic, database-driven web applications.
        In addition, it will be a good opportunity to learn about new server side web languages like PHP.
</div>
<div class="center">
    <h2> Random Quote</h2>
    <p>
        <?=$phrases[mt_rand(0, count($phrases)-1)]; ?>
    </p>
</div>
</body>
</html>


