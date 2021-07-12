<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //

    public function index() {

        $users = User::select('*')
                ->get();
    
        return view('admin.index', ['users' => $users]);
    }

    public function destroy($id) {

        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect('/admin');
    
    }
}
