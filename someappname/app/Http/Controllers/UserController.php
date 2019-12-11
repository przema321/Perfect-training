<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();


       return view('auth.users', compact('users'));
    }

    public function show(User $user)
    {


        return view('show', compact('user'));

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }

    public function edit(User $user)
    {
        if(Auth::user()->id===$user->id or !Auth::user() || Auth::user()->is_admin === 1) {
            return view('auth.edit', compact('user'));
        }else
            abort(403, 'Unauthorized action.');
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }



    public function update($id, Request $request)
    {
            request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'second_name'=>['required','string','max:255'],
                'weight'=>['required', 'min:30','max:200','integer'],
                'height'=>['required','max:230','integer'],
            ]);

        {
            $user = User::findOrFail($id);
            $newPassword = $request->get('password');

            if (empty($newPassword)) {
                $user->update($request->except('password'));
            } else {
                $user->name = request('name');
                $user->second_name = request('second_name');
                $user->password = bcrypt(request('password'));
                request()->validate([
                    'password'=>['min:8','confirmed','string','required']
                ]);
                $user->exp = request('exp');
                $user->height = request('height');
                $user->weight = request('weight');
                $user->save();


            }

            return redirect('users');
        }

////        $user->name = request('name');
////        $user->second_name = request('second_name');
////        $user->birth_date = request('birth_date');
////        $user->email = request('email');
////        $user->password = bcrypt(request('password'));
////        $user->sex = request('sex');
////        $user->exp = request('exp');
////        $user->height = request('height');
////        $user->weight = request('weight');
////        $user->save();
//
//        return redirect('/users');
    }


}
