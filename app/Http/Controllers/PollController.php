<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Option;
use App\User;
use Illuminate\Http\RequestW;
use Auth;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth')->except('index'); 
    }

    public function index()
    {
        $polls = Poll::orderBy('updated_at', 'desc')
            ->get();

        return view('index')->with('polls', $polls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();
        
        $code = uniqid();
        $poll = Poll::create([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $code,
            'user_id' => $user
        ]);
        
        $options = $request->option;

        foreach($options as $option) {

        Option::create([
            'text' => $option,
            'poll_id' => $poll->id
        ]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $poll = Poll::find($id);
        // dd($id);
        return view('show')->with('poll', $poll);
    }
    
    public function show_user_polls($user_id)
    {   
        $user = User::find($user_id);

        return view('manage.show')->with('polls', $user->poll());
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
