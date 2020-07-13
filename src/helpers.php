<?php

/**
 * This function returns black or white based on the luminance of the color being passed.
 *
 * @param string $color
 * @return string
 */
if (!function_exists('getContrastingColor')) {
    function getContrastingColor($color)
    {
        $r = hexdec(substr($color, 1, 2));
        $g = hexdec(substr($color, 3, 2));
        $b = hexdec(substr($color, 5, 2));

        if ($r + $g + $b > 382) {
            return '#000000';
        }
        return '#FFFFFF';
    }
}
