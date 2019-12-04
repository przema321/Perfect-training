<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('auth.edit', compact('user'));
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function update($id, Request $request)
    {


        {
            $user = User::findOrFail($id);
            $newPassword = $request->get('password');

            if (empty($newPassword)) {
                $user->update($request->except('password'));
            } else {
                $user->name = request('name');
                $user->second_name = request('second_name');
                $user->birth_date = request('birth_date');
                $user->email = request('email');
                $user->password = bcrypt(request('password'));
                $user->sex = request('sex');
                $user->exp = request('exp');
                $user->height = request('height');
                $user->weight = request('weight');
                $user->save();

            }
            return redirect('users');
        }

//        $user->name = request('name');
//        $user->second_name = request('second_name');
//        $user->birth_date = request('birth_date');
//        $user->email = request('email');
//        $user->password = bcrypt(request('password'));
//        $user->sex = request('sex');
//        $user->exp = request('exp');
//        $user->height = request('height');
//        $user->weight = request('weight');
//        $user->save();

        return redirect('/users');
    }


}
