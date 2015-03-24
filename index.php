<?php

// getting utility functions
require 'lib/util.php';

// defining variables for the template
$color = getRandomColor();
$backgroundColor = '#ffffff';
$textColor = '#333333';

// change to dark theme if requested
if (isset($_GET['dark']) && $_GET['dark'] === 'true')
{
    $backgroundColor = '#555';
    $textColor = '#fff';
}

// template rendering
include 'template/index.tpl.php';