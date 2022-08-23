<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function randomNum()
    {
        $first = rand(1, 100);
        $sec = rand(100, 1000);
        $final = rand($first, $sec);
        $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $alphabetSize = intval(count($alphabet) - 1);
        $alphabetRand = rand(0, $alphabetSize);
        $letter = $alphabet[$alphabetRand];
        $alphabetRand = rand(0, $alphabetSize);
        $letter = strval($letter).$alphabet[$alphabetRand];
        $alphabetRand = rand(0, $alphabetSize);
        $letter = strval($letter) . strval($alphabet[$alphabetRand]);
        return strval($final) . "-" . $letter . "-" . strval(time());

    }
}
