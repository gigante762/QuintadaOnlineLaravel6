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
    
     /**
     * Display the index view
     */
    public function index()
    {
        $products = $this->repository->paginate();

        return view('pages.site.index',['products'=>$products]);
    
    }

     /**
     * Display an products view
     */
    public function show($code)
    {

        if(!$product = $this->repository->where('code',$code)->first())
            return redirect()->route('site.index');

        return view('pages.site.show',['product'=>$product]);
    
    }

     /**
     * Search for products
     */
    public function search(Request $request)
    {
        if (!$products = $this->repository->search($request->filter))
            return redirect()->back();

        $filters = $request->only(['filter','page']);

        return view('pages.site.index',
        [
            'products'=>$products,
            'filters'=>$filters
        ]
        );
    }

    /**
     * Display contato view
     */
    public function contato()
    {
        return view('pages.site.contato');
    }

    /**
     * Display cart view
     */
    public function cart()
    {
        $cart = [];

        if(session()->exists('cart'))
        {
            $cart = session('cart');

        }

        $products = $this->repository->whereIn('code',array_keys($cart))->get();
        
        return view('pages.site.cart',[
            'products'=>$products,
            'cart' => $cart,
            'total' => 0
        ]);
    }

    /**
     * Display contato view
     */
    public function checkout()
    {
        $cart = [];

        if(session()->exists('cart'))
        {
            $cart = session('cart');
        }

        $products = $this->repository->whereIn('code',array_keys($cart))->get();
        return view('pages.site.checkout', [
            'products'=>$products,
            'cart' => $cart,
            'total' => 0
            ]);
    }

    /**
     * Display contato view
     */
    public function fechamentoItens()
    {
        $cart = [];

        if(session()->exists('cart'))
        {
            $cart = session('cart');
        }

        $products = $this->repository->whereIn('code',array_keys($cart))->get();
        
        return view('pages.site.fechamento-itens',
        [
            'products'=>$products,
            'cart' => $cart,
            'total' => 0
            ]
        );
    }

}

