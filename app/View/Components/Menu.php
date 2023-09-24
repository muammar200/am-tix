<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */

    public $active;
    public function __construct($active)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $lists = $this->lists(); 
        // var_dump($lists);
        return view('components.menu', [
            'active' => $this->active,
            // 'menu' => $lists,
        ]);
    }

    public function lists(){
        return [
            [
                "label" => "Dashboard"
            ],
            [
                "label" => "Movies"
            ],
            [
                "label" => "Theaters"
            ],
            [
                "label" => "Tickets"
            ],
            [
                "label" => "Users"
            ],
        ];
    }

    public function isActive($label){
        return $label === $this->active;
    }
}
