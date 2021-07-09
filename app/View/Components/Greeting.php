<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Greeting extends Component
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
        $time = date("H");

        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");

        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greetings = "Good morning";
        } else

            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
            if ($time >= "12" && $time < "17") {
                $greetings = "Good afternoon";
            } else

                /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                if ($time >= "17" && $time < "19") {
                    $greetings = "Good evening";
                } else

                    /* Finally, show good night if the time is greater than or equal to 1900 hours */
                    if ($time >= "19") {
                        $greetings = "Good night";
                    }
        return view('components.greeting', compact('greetings'));
    }
}
