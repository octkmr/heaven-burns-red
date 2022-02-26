<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Character $character)
    {
        $characters = $character->orderBy('id')->get();
        // point
        $unitsAndCharacters = $characters->mapToGroups(function ($item){
            $character_info = [
                'id' => $item['id'],
                'name' => $item['name'],
            ];
            return [$item['unit'] => $character_info];
        });
        $param = [
            "unitsAndCharacters" => $unitsAndCharacters,
        ];
        return view('character.index', $param);
    }

    public function detail(Character $character)
    {
        $styles = $character->styles()->get();
        $param = [
            'character' => $character,
            'styles' => $styles,
        ];
        return view('character.detail', $param);
    }
}
