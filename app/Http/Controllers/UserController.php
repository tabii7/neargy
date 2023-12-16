<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function create()
    {
        return view('comunity.form');
    }

    public function store(Request $request)
    {
       $user = Auth::user();
    $formData = array_merge($request->except('_token'), ['user_id' => $user->id]);
    Community::create($formData);
    return redirect()->route('form.create')->with('success', 'Form submitted successfully!');
    }
    public function show(){
        $forms = auth()->user()->forms;

        return view('comunity.index', compact('forms'));
    }
   public function home(){
    $communities = Community::all();
    return view('home', compact('communities'));
}
public function search(Request $request)
    {
       $zipCode = $request->input('map_location');
        $communities = Community::where('map_location', 'like', '%' . $zipCode . '%')->get();

        return view('home', ['communities' => $communities, 'zipCode' => $zipCode]);
    }
}
