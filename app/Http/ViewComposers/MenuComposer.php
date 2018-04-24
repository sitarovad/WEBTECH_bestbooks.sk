<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Cathegory;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */


    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $cathegories = Cathegory::all();
        $view->with('cathegories', $cathegories);
    }
}