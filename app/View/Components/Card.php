<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Card extends Component
{
    // public function __invoke()
    // {

    //     $user = User::first();
    //     $userTwo = User::find(2);

    //     $usercurrentMonthTasks = Task::where('user_id', $user->id)->whereStatus(true)->whereMonth('created_at', '=', now()->month)->count();
    //     $userTasksAMonthAgo = Task::where('user_id', $user->id)->whereStatus(true)->whereMonth('created_at', '=', now()->subMonth()->month)->count();
    //     $userTasksTwoMonthAgo = Task::where('user_id', $user->id)->whereStatus(true)->whereMonth('created_at', '=', now()->subMonths(2)->month)->count();

    //     $userTwocurrentMonthTasks = Task::where('user_id', $userTwo->id)->whereStatus(true)->whereMonth('created_at', '=', now()->month)->count();
    //     $userTwoTasksAMonthAgo = Task::where('user_id', $userTwo->id)->whereStatus(true)->whereMonth('created_at', '=', now()->subMonth()->month)->count();
    //     $userTwoTasksTwoMonthAgo = Task::where('user_id', $userTwo->id)->whereStatus(true)->whereMonth('created_at', '=', now()->subMonths(2)->month)->count();

    //     $chart = (new LarapexChart)->lineChart()
    //         ->setLabels([$user->name, $userTwo->name])
    //         ->setXAxis(['Now', 'A month ago', '2 months ago'])
    //         ->setDataset([
    //         [
    //             'username' => $user->name,
    //             'data' => [
    //                 $usercurrentMonthTasks, $userTasksAMonthAgo, $userTasksTwoMonthAgo
    //             ]
    //         ],
    //         [
    //             'username' => $userTwo->name,
    //             'data' => [
    //                 $userTwocurrentMonthTasks, $userTwoTasksAMonthAgo, $userTwoTasksTwoMonthAgo
    //             ]
    //         ]
    //     ]);


    //     return view('chart', compact('chart'));
    // }

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
        return view('components.card', [
            'projects' => Project::all(),
            'previous_projects' => DB::table('projects')->whereDate('created_at', Carbon::now()->subDays(7))->get(),
            'tasks' => Task::all(),
            'tasksCompleted' => Task::where('status', '=', 'Complete'),
            'tasksInProgress' => Task::where('status', '=', 'In Progress')
        ]);
    }
}
