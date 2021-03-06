<?php

namespace App\Http\Controllers;

use App\Models\CategoryImage;
use Illuminate\Http\Request;

class CategoryImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryImage $categoryImage)
    {
        //
    }
}
