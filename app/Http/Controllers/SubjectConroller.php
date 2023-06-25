<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allsubjects = Subject::where('name','PHP')->get();
        foreach ($allsubjects as $value) {
            echo $value->name.'<br>';
        }

        //dd($allsubjects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ubjectObj = new Subject;
        $ubjectObj->name = 'Laravel';
        $ubjectObj->class = 'Advance';
        $ubjectObj->price = '500';
        $newsub = $ubjectObj->save();
        if ($newsub) {
            echo 'inserted the subject';
        } else {
            echo 'not inserted the subject..';
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $id)
    {
        // $mysubje = Subject::find($id);
         dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
