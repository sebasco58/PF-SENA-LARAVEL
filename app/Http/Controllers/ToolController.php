<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTool;
use App\Tool;
use App\Category;


class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = Tool::orderBy('created_at', 'desc')->paginate(7);
        return view('dashboard.tool.index', ['tools'=>$tools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','nombre');
        return view("dashboard.tool.create", ['tool'=>new Tool(), 'categories' =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTool $request)
    {
        Tool::create($request->validated());
        return redirect()->route('tool.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool)
    {
        return view('dashboard.tool.show', ["tool" => $tool]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        $categories = Category::pluck('id','nombre');
        return view('dashboard.tool.edit', ["tool" => $tool], compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTool $request, Tool $tool)
    {
        $tool->update($request->validated());
        return redirect()->route("tool.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        $tool->delete();
        return redirect()->route("tool.index");
    }
}
