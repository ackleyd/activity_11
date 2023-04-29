<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\parents;

class ParentsController extends Controller
{
    
    public function index()
    {
        $parents = parents::where('user_id', Auth::id())
            ->where('active', 1)
            ->select('id','name','gender')
            -> get();

        //dd($parents);
        $page_title = "Parents";
        return view('parents.index', compact('parents', 'page_title'));    
    }

    
    public function create()
    {
        $page_title = "Create Parents";
        return view('parents.create', compact('page_title'));
    }

    
    public function store(Request $request)
    {
        parents::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'gender' => $request -> gender,
            'active' => 1,
        ]);

        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parents = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

            $page_title = "Show Parents";
            return view('parents.show', compact('parents','page_title'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

            $page_title = "Edit Parents";
            return view('parents.edit', compact('parent','page_title'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        $parent->update([
            'name' => $request->name,
            'gender' => $request->gender
        ]);  
        
        return redirect()->route('parents.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        $parent->update([
            'active' => 0,
        ]);
        
        return redirect()->route('parents.index');
    }
}