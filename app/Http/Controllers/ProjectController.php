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
        //restituisce i dati che l'utente ha inserito se sono giusti ??
        $Project->validated();
        // Creazione di un nuovo progetto
        $NewProject = new Project();
        // abbiamo riempito i campi del progetto con gli elementi salvati nel model $fillable
        $NewProject->fill($Project->all());
        //abbiamo salvato
        $NewProject-> save();

        return redirect()->route('admin.projects.show',$NewProject->id);
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
        
        return view ('projects.edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        // inizio validazione (serve principalemente per eseguire più controlli sui dati inseriti dall'utente)
        //questa funzione è privata ed è definita sul fondo del foglio , la richiamiamo con this e serve per eseguire tutti i controlli
        
        // andiamo ad inseirre tutti i dati inseirti dall'utente nel nostro progetto
        $project->fill($request->all());

        $project->save();
        
        //STRINGA CHE CI RIDIRIGE ALLA PAGINA SHOW DEL NOSTRO FUMETTO MODIFICATO INSIEME SI SUOI PARAMETRI MODIFICATI
        return redirect()->route('admin.projects.show',$project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
