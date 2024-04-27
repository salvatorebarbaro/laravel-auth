<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index()
        {
            $projects = Project::all();

            // dd($projects);


            return view('projects.index', compact('projects'));
        }
        

    

    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $Project)
    {
        $Project->validated();

       $NewProject = new Project();

       $NewProject->fill($Project->all());

        $NewProject-> save();

        return redirect()->route('projects.show',$NewProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
