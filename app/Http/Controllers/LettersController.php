<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LettersController extends Controller
{
    function assignLetterToNumber($numChain)
{
    if (strlen($numChain) != 8) {
        return "Introduce a valid number (needs to have 8 numbers)";
    }

    $mod = (int)$numChain % 23;
    $letter = Letter::find($mod + 1);

    return $numChain . $letter->letter;
}

}
