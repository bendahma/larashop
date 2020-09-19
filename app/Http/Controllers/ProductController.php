<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Image;
use App\Characteristic;
use App\Color;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductRequest;
use Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('backoffice.product.index')
                ->with('products',$products)
                ->with('category',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $colors = Color::all();
        if($categories->isEmpty()){
            Alert::warning('Add Category Befor Adding Any Product');
            return redirect(route('category.create'));
        } 

        return view('backoffice.product.add')
            ->with('categories',$categories)
            ->with('colors',$colors);
    }

    
    public function store(ProductRequest $request)
    {
        
        $mainImage = $request->mainImage->store('upload');

        $carac = new Characteristic();

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description ,
            'price' => $request->price,
            'like' => 0 ,
            'vue' => 0 ,
            'category_id' => $request->category,
        ]);

        $colors = Color::find($request->colors);
        // dd($colors);
        $product->colors()->attach($colors);

        $carac->create([
            'ReleasedDate' => $request->ReleasedDate ,
            'Network' => $request->Network ,
            'Dimensions' => $request->Dimensions ,
            'DisplaySize' => $request->DisplaySize ,
            'DisplayResolution' => $request->DisplayResolution ,
            'OS' => $request->OS ,
            'CPU' => $request->CPU ,
            'GPU' => $request->GPU ,
            'MemoryCardslot' => $request->MemoryCardslot ,
            'MemoryInternal' => $request->MemoryInternal ,
            'MemoryRam' => $request->MemoryRam ,
            'MainCamera' => $request->MainCamera ,
            'SelfierCamera' => $request->SelfierCamera ,
            'Sensors' => $request->Sensors ,
            'Battery' => $request->Battery ,
            'product_id' => $product->id
        ]);


        

        $image = Image::create([
            'url' => $mainImage,
            'product_id' => $product->id,
            'productMainImage' => true,
        ]);

        Alert::success('New Product', 'New Product Added successfully');

        return redirect(route('product.index'));


    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::withTrashed()->where('id',$id)->first();
        $categories = Category::all();

        return view('backoffice.product.add')
                ->with('product',$product)
                ->with('categories',$categories);
    }

    public function update(Request $request, $id)
    {
        $product = Product::withTrashed()->where('id',$id)->first();

        if($request->has('mainImage')){
            $mainImage = $request->mainImage->store('upload');
            $oldMainImage = Image::where('url',$product->mainImageUrl($product->id))->first();
            $oldMainImage->update([
                'productMainImage' => false,
            ]);
            $newMainImage = Image::create([
                'url' => $mainImage,
                'product_id' => $product->id,
                'productMainImage' => true,
            ]);
            $product->update([
                'name' => $request->name,
                'details' => $request->details ,
                'description' => $request->description ,
                'price' => $request->price,
                'mark' => $request->mark ,
                'category_id' => $request->category,
            ]);
        }else{
            $product->update([
                'name' => $request->name,
                'details' => $request->details ,
                'description' => $request->description ,
                'price' => $request->price,
                'mark' => $request->mark ,
                'category_id' => $request->category,
            ]);
        }

        Alert::success('Product updated successfully','');

        return redirect(route('product.index'));
    }

    public function Remove(Product $product){
        $product->delete();
        Alert::success('Prodect removed successfully','');
        return back();
    }

    public function Removed(){
        $products = Product::onlyTrashed()->get();
        $categories = Category::all();
        return view('backoffice.product.removed')
                ->with('products',$products)
                ->with('category',$categories);
    }

    public function Restore($id){
        $product = Product::withTrashed()->where('id',$id)->restore();
        $products = Product::all();
        $categories = Category::all();
        Alert::success('Product restored successfully','Now the Product will be visible for your client');
        return view('backoffice.product.index')
                ->with('products',$products)
                ->with('category',$categories);
    }

    public function Delete($id){
        $product = Product::withTrashed()->where('id',$id)->forceDelete();
        $products = Product::all();
        $categories = Category::all();
        Alert::success('Product Deleted Successfully','');
        return view('backoffice.product.index')
                ->with('products',$products)
                ->with('category',$categories);
        
    }
}
