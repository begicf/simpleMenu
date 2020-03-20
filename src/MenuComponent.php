<?php

namespace SimpleMenu;

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
        $items = MenuModel::tree();

        if (View::exists('views/vendor/menu/components')):
            return view('views.vendor.menu.components.cmenu');
        else:
            return View::file(__DIR__ . '/views/components/cmenu.blade.php', ['items' => $items]);
        endif;
    }
}
