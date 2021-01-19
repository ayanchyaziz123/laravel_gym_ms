<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class GymMembersController extends Controller
{
    public function index(){
        $members = Members::latest()->paginate(5);
        return view('members.index', compact('members'));
    }
    public function create(){
        return view('members.create');
    }

    public function store(Request $request){
        $request->validate([
            'user_name'=> 'required',
            'first_name'=>'required',
            'email'=>'required'
        ]);
        Members::create($request->all());

        return redirect()->route('members.index')->with('success', 'profile created succesfully!!');
    }

    public function show(Members $member){
        return view('members.show', compact('member'));
    }



    public function edit(Members $member){
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Members $members){
        $request->validate([
            'user_name'=> 'required',
            'first_name'=>'required',
            'email'=>'required'
        ]);
        $members->update($request->all());

        return redirect()->route('members.index')->with('success', 'profile Updated succesfully!!');


    }
    public function destroy(Members $members){
        $members->delete();
        return redirect()->route('members.index')->with('success', 'profile Deleted succesfully!!');
    }

}
