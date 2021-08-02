<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'child_name' => 'required|unique:applications|max:255',
        //     'sex' => 'required',
        //     'date_of_birth' => 'required',
        //     'place_of_birth' => 'required',
        //     'id_number' => 'required',
        //     'level' => 'required',
        //     'child_inclinations' => 'required',
        //     'father_profession' => 'required',
        //     'academic_qualification_dad' => 'required',
        //     'mother_name' => 'required',
        //     'mother_profession' => 'required',
        //     'academic_qualification_mom' => 'required',
        //     'parents_marital_status' => 'required',
        //     'The_arrangement_of_the_child_in_the_family' => 'required',
        //     'The_person_authorized_to_accompany_the_child_in_the_emergency' => 'required',
        //     'full_address' => 'required',
        //     'problem_patiant' => 'required',
        //     'taking_medication' => 'required',
        //     'accidant' => 'required',
        //     'movment_disorders' => 'required',
        //     'bathroom_remember' => 'required',
        //     'self_relinat_bathroom' => 'required',
        //     'behavioral_problems' => 'required',
        //     'need_transportation' => 'required',
        // ]);
        application::create([
            'id' => $request->id,
            'child_name' => $request->child_name,
            'sex' => $request->sex,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->place_of_birth,
            'id_number' => $request->id_number,
            'level' => $request->level,
            'child_inclinations' => $request->child_inclinations,
            'father_profession' => $request->father_profession,
            'academic_qualification_dad' => $request->academic_qualification_dad,
            'mother_name' => $request->mother_name,
            'mother_profession' => $request->mother_profession,
            'academic_qualification_mom' => $request->academic_qualification_mom,
            'parents_marital_status' => $request->parents_marital_status,
            'The_arrangement_of_the_child_in_the_family' => $request->The_arrangement_of_the_child_in_the_family,
            'phone_number' => $request->phone_number,
            'The_person_authorized_to_accompany_the_child_in_the_emergency' => $request->The_person_authorized_to_accompany_the_child_in_the_emergency,
            'full_address' => $request->full_address,
            'problem_patiant' => $request->problem_patiant,
            'taking_medication' => $request->taking_medication,
            'accidant' => $request->accidant,
            'movment_disorders' => $request->movment_disorders,
            'bathroom_remember' => $request->bathroom_remember,
            'self_relinat_bathroom' => $request->self_relinat_bathroom,
            'behavioral_problems' => $request->behavioral_problems,
            'need_transportation' => $request->need_transportation,
        ]);
        application::all();
        return redirect('/conn');
    }
    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }

    public function destroy(Request $request)
    {
    }
}
