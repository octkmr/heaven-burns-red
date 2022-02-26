<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\View\View;

class CharacterController extends Controller
{
    /**
     * @param Character $character
     * @return View
     */
    public function index(Character $character): View
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

    /**
     * @param Character $character
     * @return View
     */
    public function detail(Character $character): View
    {
        $styles = $character->styles()->get();
        $param = [
            'character' => $character,
            'styles' => $styles,
        ];
        return view('character.detail', $param);
    }
}
