<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PasswordChangeController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => [
                'required',
                function($attribute,$value,$fails){
                    if(! \Hash::check($value,auth()->user()->password)){
                        $fails(__('auth.password'));
                    }
                },
            ],
            'password' =>['required','confirmed'],
        ]);

        User::whereId(auth()->id())->update([
            'password' => bcrypt($request->password),  
        ]);

        return redirect()
            ->route('profile.index', 'change_password')
            ->flashify('Password has been updated successfully.');
    }

}

