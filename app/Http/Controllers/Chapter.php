<?php
namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    protected function validationRules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function index(): \Illuminate\View\View
    {
        $subjects = Subject::all();
        return view('chapter.new', compact('chapter'));
    }

    public function create(): \Illuminate\View\View
    {
        return view('chapter.new');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate($this->validationRules());

        Subject::create($request->all());
        return redirect()->route('chapter.new');
    }

    public function show(Subject $subject): \Illuminate\View\View
    {
        return view('chapter.new', compact('chapter'));
    }

    public function edit(Subject $subject): \Illuminate\View\View
    {
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject): \Illuminate\Http\RedirectResponse
    {
        $request->validate($this->validationRules());

        $subject->update($request->all());
        return redirect()->route('subjects.index');
    }

    public function destroy(Subject $subject): \Illuminate\Http\RedirectResponse
    {
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
