<?php


function pluralize($noun)
{
    $rules = [
        '/(s|sh|ch|x|z)$/i' => '$1es',
        '/([^aeiou])y$/i'    => '$1ies',
        '/(f|fe)$/i'         => 'ves',
        '/(us)$/i'           => '$1es',
        '/(deer|sheep|fish|ox|mouse|goose|foot|tooth)$/i' => '$1',
        '/(man|woman|child|person)$/i' => '$1',
    ];

    foreach ($rules as $pattern => $replacement) {
        if (preg_match($pattern, $noun)) {
            return preg_replace($pattern, $replacement, $noun);
        }
    }
    return $noun . 's';
}


echo pluralize('cat') . "<br>";
echo pluralize('bus') . "<br>";
echo pluralize('baby') . "<br>";
echo pluralize('knife') . "<br>";
echo pluralize('campus') . "<br>";
echo pluralize('deer') . "<br>";
echo pluralize('woman') . "<br>";
echo pluralize('dog') . "<br>";

