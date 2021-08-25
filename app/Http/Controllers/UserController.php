<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Http\Controllers\Admin\CategoryController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $data = $request->only('search', 'sort');
        $data = $request->except('search');
        // $data = request()->all(); //array
        // $data = request()->only(['search', 'sort']); //array
        // $data = request()->except('search'); //array
        dd($data);
        $users = User::all();// laays all user in users table
        // dd($users->toArray());
        return view('list-user')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        //code insert vaof database
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id = 1)
    {
        $data = $request->all();
        dd($data);
        return 'this is user'. $id;
    }

    public function showFriend($id,$friendID)
    {
        return 'this is friend '. $friendID . 'of '. 'user '. $id;
    }

    public function resetPassword($id)
    {
        return 'this is reset password page for user '. $id;
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
