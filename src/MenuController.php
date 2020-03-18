<?php

namespace simpleMenu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use simpleMenu\model\Menu;

class MenuController extends Controller
{
    public function add($a, $b){
        echo $a + $b;
    }

    public function subtract($a, $b){
        echo $a - $b;
    }

    public function item(){

        dump(Menu::tree());
    }


}
