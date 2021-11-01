<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::all();
        return view('component.index',compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('component.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = new Component();
        $component->processor = $request->processor;
        $component->motherboard = $request->motherboard;
        $component->ram = $request->ram;
        $component->casing = $request->casing;
        $component->storage = $request->storage;
        $component->powersupply = $request->powersupply;

        $component->save();

        return redirect()->route('component:index')->with([
        'alert-type' => 'alert-success',
        'alert-message' => 'Component Added',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Component $component)
    {
        return view('component.edit',compact('component'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        $component->processor = $request->processor;
        $component->motherboard = $request->motherboard;
        $component->ram = $request->ram;
        $component->casing = $request->casing;
        $component->storage = $request->storage;
        $component->powersupply = $request->powersupply;
        $component->save();

        return redirect()->route('component:index')->with([
            'alert-type' => 'alert-warning',
            'alert-message' => 'Component has been edited'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        $component->delete();
        
        return redirect()->route('component:index')->with([
            'alert-type' => 'alert-danger',
            'alert-message' => 'Component has been deleted'
        ]);
    }
}
