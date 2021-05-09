<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cart extends Controller
{
    protected $cart;

    public function __construct()
    {

        if(session()->exists('cart'))
        {
            $this->cart = session('cart');
        }
        else
        {
            $this->cart = [];
        }


    }

    public function add($productCode, $amout = 1)
    {
        if(!isset($this->cart[$productCode]))
        {
            $this->cart[$productCode] = 1;
        }
        else
        {
            $this->cart[$productCode]+= $amout;
        }
        session()->put('cart',$this->cart);

        
       return redirect()->back();

    }

    public function remove($productCode, $amout = 1)
    {

        if(isset($this->cart[$productCode]))
        {
            $this->cart[$productCode]-= $amout;
        }
        session()->put('cart',$this->cart);

       return redirect()->back();

    }

    public function deleteItem($productCode)
    {

        if(isset($this->cart[$productCode]))
        {
            unset($this->cart[$productCode]);
        }
        session()->put('cart',$this->cart);

       return redirect()->back();

    }
    
}
