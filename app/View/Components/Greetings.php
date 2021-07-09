<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Greetings extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $greetings = "";

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = now("e");

        /* Set the $timezone variable to become the current timezone */
//        $timezone = date("e");

        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greetings = "Good morning";
        } elseif ($time >= "12" && $time < "5") {
            $greetings = "Good afternoon";
        } elseif ($time >= "5" && $time < "7") {
            $greetings = "Good evening";
        } elseif ($time >= "7") {
            $greetings = "Good night";
        }

        return view('components.greetings', compact('greetings'));
    }
}
