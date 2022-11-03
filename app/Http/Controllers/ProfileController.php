<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($tab='profile')
    {
      return view('profile',compact('tab'));
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
      $request->validate([
        'name'=>['required','string','max:255'],
        'email'=>['required','string','email','max:255','unique:users,id,'.$id],
      ]);
      User::whereId($id)->update([
      'name' => $request->name,
      'email'=> $request->email,
      ]);
      return redirect()->route('profile.index', 'edit_profile')->flashify('updated');
    }


    public function destroy($id)
    {
        //
    }
}
