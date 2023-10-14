<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index () {
        $subjects = Subject::paginate(10);
        return view('pages.subject.index', compact('subjects'));
    }

    public function create () {
        return view('pages.subject.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:subjects.name',
            'description' => 'required',
            'lecturer_id' => 'required|exists:users,id',
        ]);

        Subject::create($request->all());
        return redirect(route('pages.user.index'))->with('success', 'New Subject Created Successfully');
    }
}
