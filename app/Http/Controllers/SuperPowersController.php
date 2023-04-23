<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\superpowers;

class SuperPowersController extends Controller
{
    
    public function index()
    {
        $superpowers = superpowers::where('user_id', Auth::id())
            ->where('active', 1)
            ->select('id','name','description')
            ->get();
        //dd($superpowers);

        return view ('superpowers.index', compact('superpowers'));
    }

    
    public function create()
    {
        return view ('superpowers.create');
    }


    public function store(Request $request)
    {
        // dd($request);

        superpowers::create([
            'user_id' =>  Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'active' => 1
        ]);

        return redirect()->route('superpowers.index');
    }

    
    public function show(string $id)
    {

        $superpowers = superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id','name','description')
        ->firstOrFail();
        
        //dd($superpowers.show);
        return view('superpowers.show', compact('superpowers'));
    }

    
    public function edit(string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id','name','description')
        ->firstOrFail();
        
        //dd($superpowers.show);
        return view('superpowers.edit', compact('superpower'));
    }

    
    public function update(Request $request, string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id','name','description')
        ->firstOrFail();

        $superpower->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('superpowers.show', $id );

        }

    
    public function destroy(string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id','name','description')
        ->firstOrFail();

        $superpower->update([
            'active' => 0
        ]);

        return redirect()->route('superpowers.index');

    }
}
