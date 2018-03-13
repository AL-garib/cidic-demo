<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Poster;
use App\User;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posters = Poster::latest('id')->take(3)->get();
        $users = User::latest('id')->take(8)->get();
        $posterLatest = Poster::where('created_at','>' , Carbon::now()->subMinutes(30))->orderBy('id', 'DESC')->limit(random_int(1,100))->count();
        $userCount = User::all()->count();
        $userLatest = User::where('created_at', '>', Carbon::now()->subMinutes(30))->orderBy('id', 'DESC')->limit(random_int(1, 100))->count();
        $userCountBlocked = User::where('is_blocked',true)->count();

        return view('admin.dashboard.index', compact([
            'posters',
            'posterLatest',
            'userCount',
            'userLatest',
            'userCountBlocked',
            'users',
        ]));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function block($id)
    {
        //
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
