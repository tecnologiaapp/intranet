<?php

namespace App\Http\Controllers\Panel\Projects;

use App\Http\Controllers\Controller;
use App\Models\Dependency;
use App\Models\Projects\BoardProject;
use App\Models\Projects\Project;
use App\Models\Projects\UserProject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $projects = Project::where('user_id', Auth::id())->with(['dependency', 'user'])->withCount(['tasks', 'users'])->latest()->get();

      $user_projects = UserProject::where('user_id', Auth::id())->latest()->get();
      return view('panel.projects.index', compact('projects'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $users = User::orderBy('name', 'ASC')->whereStatus('Active')->get();
      $dependencies = Dependency::orderBy('title', 'ASC')->get();
      return view('panel.projects.create', compact(['dependencies', 'users']));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $project = Project::create([
         'title'         => $request->title,
         'dependency_id' => $request->dependency_id,
         'end_date'      => $request->end_date,
         'budget'        => $request->budget,
         'description'   => $request->description,
         'user_id'       => Auth::id()
      ]);

      $project_id = $project->id;
      $now = Carbon::now();

      foreach ($request->users as $user) {
         UserProject::create([
            'project_id' => $project_id,
            'user_id' => $user,
         ]);
      }

      $pending_board = DB::table('board_projects')->insert([
         'title' => 'Pendientes',
         'project_id' => $project_id,
         'created_at' => $now,
         'updated_at' => $now
      ]);

      $in_progress_board = DB::table('board_projects')->insert([
         'title' => 'En progreso',
         'project_id' => $project_id,
         'created_at' => $now,
         'updated_at' => $now
      ]);

      $to_review_board = DB::table('board_projects')->insert([
         'title' => 'Para revisar',
         'project_id' => $project_id,
         'created_at' => $now,
         'updated_at' => $now
      ]);

      $finished_board = DB::table('board_projects')->insert([
         'title' => 'Terminado',
         'project_id' => $project_id,
         'created_at' => $now,
         'updated_at' => $now
      ]);
 
      return back()->with('message', ['success', 'Se ha agregado el proyecto']);
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
   //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit(Project $project)
   {
      $users = User::orderBy('name', 'ASC')->whereStatus('Active')->get();
      $dependencies = Dependency::orderBy('title', 'ASC')->get();
      return view('panel.projects.edit', compact(['dependencies', 'users', 'project']));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, Project $project)
   {
      $project->title = $request->title;
      $project->dependency_id = $request->dependency_id;
      $project->end_date = $request->end_date;
      $project->budget = $request->budget;
      $project->description = $request->description;
      $project->user_id = Auth::id();
      $project->update();

      $users = UserProject::where('project_id', $project->id)->get();

      foreach ($users as $user) {
         $user->delete();
      }

      foreach ($request->users as $user) {
         UserProject::updateOrCreate([
            'project_id' => $project->id,
            'user_id' => $user,
         ]);
      }

      return back()->with('message', ['success', 'Se ha actualizado el proyecto']);
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
   //
   }
}
