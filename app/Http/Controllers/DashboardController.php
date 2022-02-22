<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class dashboardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = User::find(Auth::user()->id);
        $users = User::all();
        return view('dashboard/index', compact('user', 'users'));

        // 2 Table
        // $user = User::find(Auth::user()->id);
        // if (Detail::where('user_id', Auth::user()->id)->exists()){
        //     $detail = Detail::where('user_id', Auth::user()->id)->first();
            
        // } else {
        //     $detail = 'null';
        // }
        // return view('dashboard/index', compact('detail'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function details()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if($user) {
                return view('dashboard.details', compact('user'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return view('dashboard/details');

        // 2 Table
        // if (Auth::user()) {
        //     $user = User::find(Auth::user()->id);
            
        //     if (Detail::where('user_id', Auth::user()->id)->exists()){
        //         $detail = Detail::where('user_id', Auth::user()->id)->first();
        //     } else {
        //         $detail = null;
        //     }

        //     if($user) {
        //         return view('dashboard.details', compact('detail'))->withUser($user);
        //     } else {
        //         return redirect()->back();
        //     }
        // } else {
        //     return redirect()->back();
        // }
        // return view('dashboard/details');
    }
    
    public function messages()
    {
        $user = User::find(Auth::user()->id);
        return view('dashboard/messages', compact('user'));
    }
    
    public function invoices()
    {
        $user = User::find(Auth::user()->id);
        return view('dashboard/invoices', compact('user'));
    }
    
    public function favorites()
    {
        $user = User::find(Auth::user()->id);
        return view('dashboard/favorites', compact('user'));
    }

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
