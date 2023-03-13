<?php

namespace App\Http\Controllers\Panel\Projects;

use App\Http\Controllers\Controller;
use App\Models\Projects\BoardProject;
use App\Models\Projects\Project;
use App\Models\Projects\TaskProject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index(Project $project)
   {
      $users = User::orderBy('name', 'ASC')->whereStatus('Active')->get();
      $boards = BoardProject::where('project_id', $project->id)->with('tasks')->get();
      return view('panel.projects.tasks.index', compact(['users', 'boards', 'project']));
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
      $validator = Validator::make($request->all(), [
         'title' => 'required|max:100'
      ]);

      $progress = 50;


      // $request->title,
      // $request->board_id,
      // $request->description,
      // $request->budget,
      // $request->end_date,
      // $request->users,

      // return response()->json(
      //    [
      //       'success' => true,
      //       'message' => 'Se ha creado exitosamente la tarea',
      //       'title' => $request->title,
      //       'board_title' => $request->board_title,
      //       'description' => $request->description,
      //       'budget' => $request->budget,
      //       'end_date' => $request->end_date,
      //       'users' => $request->users,
      //    ]
      // );      

      if ($validator->fails()) {
         return response()->json(['success' => false, 'message' => ' Debes completar todos los campos.', 'error' => $validator->errors()], 200);
      } else {
         TaskProject::create([
            'title' => $request->title,
            'description' => $request->description,
            'progress' => $progress,
            'budget' => $request->budget,
            'end_date' => $request->end_date,
            'board_id' => $request->board_id,
            'user_id' => Auth::id(),
            'project_id' => $request->project_id
         ]);

         return response()->json(
            [
               'success' => true,
               'message' => 'Se ha creado exitosamente la tarea'
            ]
         );
      }
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show(Project $project, TaskProject $task)
   {

      return view('panel.projects.tasks.show', compact(['project', 'task']));
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
   //
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
