<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class shopping extends Controller
{
    public function index()
    {
        
        return view ('shopping.landingpage');
    }
    public function electric()
    {
        $product=products::all();
        return view ('shopping.electric',['product'=> $product]);

       
    }
    public function add_to_cart()
    {
          $count=session::get('counter');
          $count++;
          session::put('counter',$count);
          return view ('shopping.landingpage');
    }


    public function productdetails($id)
    {

        $Productdrtails=DB::table('products')
        -> join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();
        return view ('shopping.product_details',['prod'=> $Productdrtails]);

       
    }
    public function homeapp()
    {
        $product=products::all();

        return view ('shopping.home_appliances',['product'=> $product]);

    }

    public function producthome($id)
    {
        $Productdrtails=DB::table('products')
        -> join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();

        return view ('shopping.product_home',['prod'=> $Productdrtails]);

}
public function rosese()
{
    $product=products::all();
    return view ('shopping.roses',['product'=> $product]);
}
public function rosesprod($id)
{
    $product = DB::table('products')
        ->join('products__details', 'products.id', '=', 'products_d_etails.id_products')
        ->where('products__details.price', '<', 100)
        ->first();

    return view('shopping.roses', ['product' => $product]);
}
}