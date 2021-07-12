<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Asantibanez\LivewireStatusBoard\LivewireStatusBoard;

class TaskStatusBoard extends LivewireStatusBoard
{
    public function statuses() : \Illuminate\Support\Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'No Progress',
            ],
            [
                'id' => 'In Progress',
                'title' => 'In Progress',
            ],
            [
                'id' => 'Completed',
                'title' => 'Completed',
            ],
        ]);
    }

    public function records() : \Illuminate\Support\Collection
    {
        return Task::query()
            ->get()
            ->map(function (Task $task) {
                return [
                    'id' => $task->id,
                    'title' => $task->name,
                    'status' => $task->status,
                ];
            });
    }

    public function styles()
    {
        $baseStyles = parent::styles();

        $baseStyles['wrapper'] = 'w-full flex space-x-4 overflow-x-auto bg-blue-500 px-4 py-8';

        $baseStyles['statusWrapper'] = 'flex-1';

        $baseStyles['status'] = 'bg-gray-200 rounded px-2 flex flex-col flex-1 mx-2';

        $baseStyles['statusHeader'] = 'text-sm font-medium py-2 text-gray-700';

        $baseStyles['statusRecords'] = 'space-y-2 px-1 pt-2 pb-2';

        $baseStyles['record'] = 'shadow bg-white p-2 rounded border text-sm text-gray-800';

        return $baseStyles;
    }

    public function onStatusSorted($recordId, $statusId, $orderedIds)
    {
        //
    }

    public function onStatusChanged($recordId, $statusId, $fromOrderedIds, $toOrderedIds)
    {
        //
    }

    public function onRecordClick($recordId)
    {
        //
    }



}
