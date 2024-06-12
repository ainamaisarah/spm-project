<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reflection;

class ReflectionController extends Controller
{
    // Display all reflections
    public function index()
    {
        $reflections = Reflection::all();
        return view('reflection.index', compact('reflections'));
    }

    // Show the form for creating a new reflection
    public function create()
    {
        return view('reflections.create');
    }

    // Store a newly created reflection in storage
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Reflection::create([
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return redirect()->route('reflection.index')
            ->with('success', 'Reflection created successfully.');
    }

    // Show the form for editing the specified reflection
    public function edit(Reflection $reflection)
    {
        return view('reflections.edit', compact('reflection'));
    }

    // Update the specified reflection in storage
    public function update(Request $request, Reflection $reflection)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $reflection->update([
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return redirect()->route('reflection.index')
            ->with('success', 'Reflection updated successfully');
    }

    // Remove the specified reflection from storage
    public function destroy(Reflection $reflection)
    {
        $reflection->delete();

        return redirect()->route('reflection.index')
            ->with('success', 'Reflection deleted successfully');
    }
}
