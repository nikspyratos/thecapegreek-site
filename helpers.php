<?php

/*
 * Unicon is amazing, but currently can't get it to change the SVG colour. This is my super hacky workaround.
*/
function getSvgIcon(string $colour, string $icon): string
{
    return '/assets/svg/' . $icon . '-' . $colour . '.svg';
}
