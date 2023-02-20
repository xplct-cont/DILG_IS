<?php

namespace App\Http\Controllers\Admin_View;

use App\Models\Program;
use App\Models\Project;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use File;

class Admin_ProjectController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        $projects = Project::with(['municipality'])->orderBy('municipality_id', 'asc')->get();

        $municipalities = Municipality::all();
        $projectsAll = Project::all();
        return view('Admin_View.projects.projects',compact('program','municipalities','projectsAll','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $admin_project = new Project;


        $admin_project->program_id = $request->input('program_id');
        $admin_project->municipality_id = $request->input('municipality_id');
        $admin_project->title = $request->input('title');
        $admin_project->province = $request->input('province');
        $admin_project->exact_loc = $request->input('exact_loc');
        $admin_project->year = $request->input('year');
        $admin_project->description = $request->input('description');
        $admin_project->type = $request->input('type');
        $admin_project->status = $request->input('status');
        $admin_project->total_cost = $request->input('total_cost');
        $admin_project->proj_code = $request->input('proj_code');



        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path('/project_images/'), $name);
                $data[] = $name;
        }
    }

        // $admin_project = Home_Image::find($id);
        $admin_project->images = json_encode($data);

        $admin_project->save();

        return redirect()->back()->with('message', 'New Project Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // dd($request);

        $admin_project = Project::find($id);


        // $admin_project->program_id = $request->input('program_id');
        $admin_project->program_id = $request->input('program_id');
        $admin_project->municipality_id = $request->input('municipality_id');
        $admin_project->title = $request->input('title');
        $admin_project->province = $request->input('province');
        $admin_project->exact_loc = $request->input('exact_loc');
        $admin_project->year = $request->input('year');
        $admin_project->description = $request->input('description');
        $admin_project->type = $request->input('type');
        $admin_project->status = $request->input('status');
        $admin_project->total_cost = $request->input('total_cost');
        $admin_project->proj_code = $request->input('proj_code');


        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = json_decode($admin_project->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists(public_path('project_images/'.$deleteimage))) {
                    File::delete(public_path('project_images/'.$deleteimage));
                }
            }

        }
        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path('/project_images/'), $name);
                $data[] = $name;
        }
        $admin_project->images = json_encode($data);
        $admin_project->update();
        return redirect()->back()->with('message', 'Details Updated Successfully!');
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove = Project::findOrFail($id);

        $images = json_decode($remove->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists(public_path('project_images/'.$deleteimage))) {
                    File::delete(public_path('project_images/'.$deleteimage));
                }
            }
            $remove->delete();
        }
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}

