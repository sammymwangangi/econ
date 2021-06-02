<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public $projects, $name, $description, $project_id;

    public $isOpen = 0;

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function render()

    {

        $this->projects = Project::all();

        return view('livewire.projects');

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function create()

    {

        $this->resetInputFields();

        $this->openModal();

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function openModal()

    {

        $this->isOpen = true;

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function closeModal()

    {

        $this->isOpen = false;

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    private function resetInputFields(){

        $this->name = '';

        $this->description = '';

        $this->project_id = '';

    }

     

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function store()

    {

        $this->validate([

            'name' => 'required',

            'description' => 'required',

        ]);

   

        Project::updateOrCreate(['id' => $this->project_id], [

            'name' => $this->name,

            'description' => $this->description

        ]);

  

        session()->flash('message', 

            $this->project_id ? 'Project Updated Successfully.' : 'Project Created Successfully.');

  

        $this->closeModal();

        $this->resetInputFields();

    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function edit($id)

    {

        $project = Project::findOrFail($id);

        $this->project_id = $id;

        $this->name = $project->name;

        $this->description = $project->description;

    

        $this->openModal();

    }

     

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function delete($id)

    {

        Project::find($id)->delete();

        session()->flash('message', 'Project Deleted Successfully.');

    }
}
