<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    protected $repository;

    public function __construct(Product $product)
    {
        $this->repository = $product;
    }
    
    public function index()
    {
        $products = $this->repository->paginate(4);

        return view('pages.site.index',['products'=>$products]);
    
    }

    public function show($code)
    {

        if(!$product = $this->repository->where('code',$code)->first())
            return redirect()->route('site.index');

        return view('pages.site.show',['product'=>$product]);
    
    }

    public function contato()
    {
        return view('pages.site.contato');
    }
}

