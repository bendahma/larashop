<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\Category\AddCategoryRequest;
use Alert;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('image')->get();

        return view('backoffice.category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.category.add');
    }

    public function store(AddCategoryRequest $request)
    {
        $imageUrl = $request->image->store('upload');

        $category = Category::create([
            'name' => $request->name,
        ]);

        $image = Image::create([
            'url' => $imageUrl,
            'category_id' => $category->id
        ]);

        
        Alert::success('New Category', 'New Category Added successfully');

        return redirect(route('category.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backoffice.category.add')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(AddCategoryRequest $request, Category $category)
    {

        if(!$request->hasFile('image')){
            $category->update([
                'name' => $request->name,
            ]);
        }else{
            $imageUrl = $request->image->store('upload');
            $category->image()->update([
                'url' => $imageUrl,
            ]);
        }
        
        Alert::success('Update Category', 'Category Updated successfully');

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        Alert::success('Delete Category', 'Category Delete successfully');

        return redirect(route('category.index'));
    }
}
