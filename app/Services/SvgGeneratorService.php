<?php

namespace App\Services;

use App\Models\Drawing;

class SvgGeneratorService
{
    public function generate(
        Drawing $drawing
    ): string
    {
        $svg='
<svg xmlns="http://www.w3.org/2000/svg"
width="1200"
height="800">

<rect
x="0"
y="0"
width="1200"
height="800"
fill="white"/>

<circle
cx="300"
cy="300"
r="12"
fill="black"/>

<text
x="320"
y="305"
font-size="18">

'.$drawing->pole->pole_no.'

</text>

</svg>';

        return $svg;
    }
}