<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller {


    public function index() { // http://localhost/users
        $users = User::all();
        return view('user.index',['users' => $users]);
    }


    public function create() { // http://localhost/create
        $users = User::all();
        return view('user.create');
    }



    public function store() {
        $user = new User;
        $user->username = request('username');
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        return redirect('/users');
    }

    public function edit($id) { // http:// localhost/users/1/edit
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }


    public function update($id) {
        $user = User::findOrFail($id);
        if($user->password == request('password')) {
            $user->username = request('username');
            $user->name = request('name');
            $user->email = request('email');
            $user->save();
            //Flash::message('La cuenta ha sido actualizada exitosamente!');
            return redirect('/users');
        }
        else {

            //Flash::message('La contraseña es incorrecta!');
            return redirect('/users/'.$id.'/edit');
        }
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect('/users');
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('user.show',compact('user'));
    }
}


