<?php
 
namespace Unesc\Http\Controllers;
use Illuminate\Http\Request;

use Unesc\User;

class UserController extends Controller
{ 
    public function index() {

        $title = 'users';
        $users = User::all();
       

        return view('users.index', ["title" => $title, "users" => $users]);
    }
    public function store(Request $request) {
        $formData = $request->all();

        User::create($formData);

        return redirect('/users');
    }
    

    public function edit($id) {
        
        $title = "Editar Usuario";
        $user = User::find($id); 

        return view('users.edit', ["title" => $title, "user" => $user]);
    }
 
    public function update(Request $request, $id) {
        $formData = $request->all();

        $user = User::find($id);
        
        $user->update($formData);

        return redirect('/users');
    }

    public function destroy($id) {
        $user = User::find($id);
        
        $user->delete(); 

        return redirect('/users');
    }
}
