<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index(){
        
    }

    public function create(){
        $wishArr = [
            [
                'productName' => 'Baldur Gate',
                'link' => 'https://store.steampowered.com/app/1086940/Baldurs_Gate_3/',
                'imageUrl' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/header.jpg?t=1737046196'
            ],
            [
                'productName' => 'Doom',
                'link' => 'https://store.steampowered.com/app/3017860/DOOM_The_Dark_Ages/',
                'imageUrl' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3017860/header.jpg?t=1738262840'
            ],
        ];
        Wish::create($wishArr);
    }
}
