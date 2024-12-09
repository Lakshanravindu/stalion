<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = [
            ['name' => 'Grilled Cheeseburger', 'price' => 12],
            ['name' => 'Salisbury Steak', 'price' => 23],
            ['name' => 'Bison Burger', 'price' => 16],
            ['name' => 'Grilled Chili Burger', 'price' => 13],
            ['name' => 'Elk Burger', 'price' => 19],
            ['name' => 'Ribeye', 'price' => 16],
            ['name' => 'Hanger Steak', 'price' => 25],
            ['name' => 'Chimichurri Burger', 'price' => 13],
        ];

        return view('menu', compact('menuItems'));
    }
}
