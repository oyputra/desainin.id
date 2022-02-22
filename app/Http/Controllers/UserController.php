<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_details(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            // $validate = null;
            if (Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                    'nama_depan' => 'required|min:2',
                    'nama_belakang' => 'required|min:2',
                    'email' => 'required|email',
                ]);
            } else {
                $validate = $request->validate([
                    'nama_depan' => 'required|min:2',
                    'nama_belakang' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                ]);
            }
            
            if ($validate){
                $user->nama_depan = $request['nama_depan'];
                $user->nama_belakang = $request['nama_belakang'];
                $user->email = $request['email'];
                $user->no_telp = $request->no_telp;
                $user->lokasi = $request->lokasi;
                $user->website = $request->website;
                $user->deskripsi = $request->deskripsi;
                $user->instagram = $request->instagram;
                $user->facebook = $request->facebook;
                $user->twitter = $request->twitter;
    
                $user->save();

                return redirect('/dashboard/details')->with('status', 'Info detail kamu sekarang telah di perbarui!');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        // 2 Table
        // $user = User::find(Auth::user()->id);

        // if ($user) {
        //     $validate = null;
        //     if (Auth::user()->email === $request['email']) {
        //         $validate = $request->validate([
        //             'nama_depan' => 'required|min:2',
        //             'nama_belakang' => 'required|min:2',
        //             'email' => 'required|email',

        //         ]);
        //     } else {
        //         $validate = $request->validate([
        //             'nama_depan' => 'required|min:2',
        //             'nama_belakang' => 'required|min:2',
        //             'email' => 'required|email|unique:users',
        //         ]);
        //     }

        //     if ($validate) {
        //         $user->nama_depan = $request['nama_depan'];
        //         $user->nama_belakang = $request['nama_belakang'];
        //         $user->email = $request['email'];
    
        //         $user->save();

        //         if (Detail::where('user_id', Auth::user()->id)->exists()){
        //             $detail = Detail::find(Auth::user()->id);
        //             $request->validate([
        //                 'no_telp' => 'nullable',
        //                 'lokasi' => 'nullable',
        //                 'website' => 'nullable',
        //                 'deskripsi' => 'nullable',
        //                 'instagram' => 'nullable',
        //                 'facebook' => 'nullable',
        //                 'twitter' => 'nullable',
        //             ]);
        
        //             $detail->no_telp = $request->no_telp;
        //             $detail->lokasi = $request->lokasi;
        //             $detail->website = $request->website;
        //             $detail->deskripsi = $request->deskripsi;
        //             $detail->instagram = $request->instagram;
        //             $detail->facebook = $request->facebook;
        //             $detail->twitter = $request->twitter;
        
        //             $detail->save();
        //         } else {
        //             $detail = new detail();
        //             $request->validate([
        //                 'no_telp' => 'nullable',
        //                 'lokasi' => 'nullable',
        //                 'website' => 'nullable',
        //                 'deskripsi' => 'nullable',
        //                 'instagram' => 'nullable',
        //                 'facebook' => 'nullable',
        //                 'twitter' => 'nullable',
        //             ]);
        //             $detail->user_id = Auth::user()->id;
        //             $detail->no_telp = $request->no_telp;
        //             $detail->lokasi = $request->lokasi;
        //             $detail->website = $request->website;
        //             $detail->deskripsi = $request->deskripsi;
        //             $detail->instagram = $request->instagram;
        //             $detail->facebook = $request->facebook;
        //             $detail->twitter = $request->twitter;
        
        //             $detail->save();
        //         }
        //         return redirect('/dashboard/details')->with('status', 'Info detail kamu sekarang telah di perbarui!');

        //     } else {
        //         return redirect()->back();
        //     }
        // } else {
        //     return redirect()->back();
        // }

    }

    public function update_username(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($user) {
            if (Auth::user()->username === $request['username']) {
                $validate = $request->validate([
                    'username' => 'required|min:2'
                ]);
            } else{
                $validate = $request->validate([
                    'username' => 'required|min:2|unique:users'
                ]);
            }
            if ($validate) {
                $user->username = $request->username;
                $user->save();
                return redirect('/dashboard/details')->with('status', 'Username kamu sekarang telah di perbarui!');
            } else{
                return redirect()->back();
            }
        } else{
            return redirect()->back();
        }
    }
    
    public function update_image(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $request->validate([
            'foto' => 'nullable',
        ]);

        $tempat_upload = public_path('/upload/img'); 
        $document = $request->foto; 
        $filename = $document->getClientOriginalName(); 
        $document->move($tempat_upload,$filename);

        $user->foto = $filename;

        $user->save();
        return redirect('/dashboard/details')->with('status', 'Foto kamu sekarang telah di perbarui!');

    }

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if(!(Hash::check($request->get('old_password'), Auth::user()->password))){
            return back()->with('error', 'Password lama kamu tidak sesuai!');
        } elseif(strcmp($request->get('old_password'), $request->get('password')) == 0){
            return back()->with('error', 'Password lama kamu tidak boleh sama dengan password baru!');
        } else{
            // $user = Auth::user();
            $user = User::find(Auth::user()->id);

            $user->password = bcrypt($request->get('password'));

            $user->save();
            
            return back()->with('status', 'Password kamu berhasil diubah');
        }
    }

    public function index()
    {
        //
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
    public function edit(Request $request)
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
    public function update(Request $request)
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
