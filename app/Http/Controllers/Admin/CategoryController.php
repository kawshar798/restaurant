<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required',
            'publication_status'=>'required'
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->publication_status = $request->publication_status;
        $category->save();

        $request->session()->flash('msg',"Category has been updated");

        return redirect('admin/categories/create');
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

        $category = Category::find($id);
        return view('admin.category.details',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = Category::find($id);

        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'publication_status'=>'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug =$request->slug;
        $category->publication_status = $request->publication_status;
        $category->save();

        $request->session()->flash('msg',"Category has been updated");

        return redirect('/admin/categories/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Category::destroy($id);

        session()->flash('msg',"Category has been Delete");

        return redirect('admin/categories');
    }
}
