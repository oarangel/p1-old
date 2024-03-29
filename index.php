<?php
/* This part of the PHP code Declares an array with the Random Quotes */
$phrases = [
    'Imagination is more important than knowledge. -Albert Einstein',
    'All truths are easy to understand once they are discovered; the point is to discover them. - Galielo Galilei',
    'I have not failed. I\'ve just found 10,000 ways that won\'t work. - Thomas Edison',
];
?>


<!DOCTYPE html>
<html>
<!-- This Section of Code Generates the Display -->
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
</head>
<body>
<header>
    <div class="center">
        <h1 style="font-family:Helvetica;">Oscar Rangel</h1>
    </div>
</header>
<div class="center">
    <img src='images/Oscar_Rangel.jpg' alt='Oscar Rangel Photograph'>
    <h2 style="font-family: Tahoma">About Me</h2>
</div>

<div class="left">
    <p style="font-family:arial;"> I am Senior Controls Engineer with the General Electric Company.
        I have a BSEE from Tulane University and a PE License from the State of Louisiana.
        My job involves replacing legacy electronic components of Gas Turbines
        with the latest generation of controls and computer software.
        With the increasing industrial demand for web based applications,
        this course is a good starting point for learning about dynamic,
        database-driven web applications. In addition, it will be a good opportunity
        to learn about new server side web languages like PHP.</p>
</div>
<div class="center">
    <h2 style="font-family: Tahoma"> Random Quote</h2>
    <p style="font-family:arial;">
        <!-- The following line generates the random quotes -->
        <?=$phrases[mt_rand(0, count($phrases)-1)]; ?>
    </p>
</div>
</body>
</html>


