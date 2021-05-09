<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    protected $repository;

    public function __construct(Product $product)
    {
        $this->repository = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->paginate();

        return view('pages.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $data = $request->except(['_token','_method']);

    
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
           

            $product = $this->repository->create($data);
            
            $path = $request->file('image')->store(
                'products'
            );

            $imgdata['path'] = $path;

            $product->images()->create($imgdata);
        }
        
        
        return redirect()->route('products.index');
        
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
    public function edit($id)
    {
        if(!$product= $this->repository->find($id))
            return redirect()->route('products.index');

        return view('pages.products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productId)
    {
        if(!$product= $this->repository->find($productId))
            return redirect()->route('products.index');
        
        $data = $request->except(['_token','_method']);

        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
           
            $product->update($data);

            $path = $request->file('image')->store(
                'products'
            );

            $imgdata['path'] = $path;

            $product->images()->create($imgdata);
        }
        
        
        return redirect()->route('products.edit',$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$product= $this->repository->find($id))
            return redirect()->route('products.index');
        
        
        $images = $product->images;  

        foreach($images  as $image)
        {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $product->delete();

        return redirect()->route('products.index');
    }

    public function deleteImage($productId, $imageId)
    {
        $product = $this->repository->find($productId);
        $image = Image::find($imageId);

        if(!$product || !$image)
            return redirect()->route('products.index');

        Storage::disk('public')->delete($image->path);
        $image->delete();

        return redirect()->route('products.edit',$product->id);
        
    }
}
