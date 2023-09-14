<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }
    public function adminHome(){
        return view('admin.overview');
    }
    // public function adminOrder(){
    //     return view('admin.listbooking');
    // }

    // Buat Nampilin modal Profile
    // public function editProfile(int $id){
    //     $user = User::find($id);
    //     if($user){
    //         $this->name = $user->name;
    //         $this->email = $user->email;
    //         $this->no_hp = $user->no_hp;
    //         $this->organisasi = $user->organisasi;
    //     }else{
    //         return redirect()->to('/home');
    //     }
    // }

    // // Update Profile User
    // public function updateProfile(){
    //     $validatedData = $this->validate();
    //     $id = auth()->user()->id;
    //     User::where('id', $id)->updated([
    //         'name' =>  $validatedData['name'],
    //         'email' =>  $validatedData['email'],
    //         'no_hp' =>  $validatedData['no_hp'],
    //         'organisasi' =>  $validatedData['organisasi'],
    //     ]);
    // }
}
