<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
class ApplicationController extends Controller
{
    //

    // public function create() {
    //     return view('offers.index');
    //   }

      public function store() {
        $application = new Application();
        $application->name = request('fullName');
        $application->email = request('email');
        $application->message = request('bio');
        $application->CV = request('CV');
    
        $application->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    
      }

      public function index() {
        $applications = Application::select('*')
                // ->where('i_city', '=', )
                ->get();
    
        return view('applications.index', ['applications' => $applications]);
      }
}
