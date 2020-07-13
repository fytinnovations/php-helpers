<?php

it('returns white when color is dark blue', function () {
    $color = getContrastingColor('#211F2F');
    assertEquals($color, '#FFFFFF');
});

it('returns black when color is light blue', function () {
    $color = getContrastingColor('#F1F8FF');
    assertEquals($color, '#000000');
});
