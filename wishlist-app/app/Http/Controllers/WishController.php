<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index(){
        $wishes = Wish::all();
        foreach($wishes as $wish){
            dd($wish);
        }
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

        foreach ($wishArr as $wish){
            Wish::create($wish);
        }   

        dd("created");
    }

    public function update(){
        $wish = Wish::find(2);
        
        $wish->update(
            [
                'ProductName' => 'updated'
            ]
            );
        dd($wish);
    }

    public function delete(){
        $wish = Wish::find(2);

        $wish->delete();

        dd("deleted");
    }

    public function restore(){
        $wish = Wish::withTrashed()->find(2);

        $wish->restore();

        dd("restored");
    }
}
