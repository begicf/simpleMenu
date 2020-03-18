<?php

namespace simpleMenu;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;
use simpleMenu\model\MenuModel;

class MenuComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $items=MenuModel::tree();

        return View::file(__DIR__.'/views/components/cmenu.blade.php',['items'=>$items]);
    }
}
