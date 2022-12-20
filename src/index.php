<?php

use Otus\Bracket;

require_once './vendor/autoload.php';

class Test
{
    public static function check(array $argv): void
    {
        $path = $argv[1];
        $brackets = file_get_contents($path);
        var_dump(Bracket::brackets($brackets));
    }
}

unset($argv[0]);
Test::check($argv);