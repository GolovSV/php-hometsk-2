<?php

namespace App;

use Otus\Bracket;

class Checker
{
    public static function run(array $argv): void
    {
        $path = $argv[1];
        $brackets = file_get_contents($path);
        var_dump(Bracket::brackets($brackets));
    }
}
