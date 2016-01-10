<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Goal;
use App\Comment;
use App\ProgressUpdate;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProgressUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = ProgressUpdate::with('goal')->with('comment')->with('user')->with('encouragement')->orderBy('created_at', 'desc')->get();
        $userGoals = Auth::user()->goals()->get();
        return view('index', compact('updates', 'userGoals'));
    }

    public function welcome() {
        return view('welcome');
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
        $this->validate($request, [
            'title' => 'required|min:2|max:100',
            'body' => 'required|min:2',
            'added_progress' => 'min:0|max:100'
        ]);

        $update = new ProgressUpdate($request->all());
        Auth::user()->progressUpdate()->save($update);
        $goal = Goal::find($update->goal_id);
        $goal->progress += $update->added_progress;
        Auth::user()->goals()->save($goal);
        return redirect('/');
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
