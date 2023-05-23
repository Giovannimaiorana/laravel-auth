<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();

      return view('admin.index',compact('projects'));
      
    }

   
    public function create()
    {
       return view('admin.create');
    }


    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $newProject = new Project();

        $newProject->fill($data);

        $newProject->save();

        return redirect()->route('admin.projects.show',['project'=>$newProject->id]);
    }

    
    public function show(Project $project)
    {
        
        return view('admin.show', compact('project'));
    }

 
    public function edit(Project $project)
    {
        return view('admin.edit',compact('project'));
    }

 
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $request = $request->validated();
        $project->update();

        return redirect()->route('admin.projects.show',['project'=>$project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
