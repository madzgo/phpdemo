<?php
/**
 * @file This file provides global utility functions
 */

/**
 * Selects a random color from a list of predefined options
 *
 * @see array_rand() - used for choosing a random array element
 * @return string - hexadecimal color representation
 */
function getRandomColor() {
    // predefine colors in an array
    $availableColors = array('#337ab7', '#5cb85c', '#5bc0de', '#f0ad4e', '#d9534f');
    // chose a random array item
    $randomColor = $availableColors[array_rand($availableColors, 1)];
    return $randomColor;
}
