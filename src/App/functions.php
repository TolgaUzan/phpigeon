<?php

declare(strict_types=1);
// dump and die
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
