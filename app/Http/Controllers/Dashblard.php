<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\products;
use  App\Models\Products_Details;
use Illuminate\Support\Facades\DB;
class Dashblard extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.index');
    }
    public function products()
    {
        $prod=products::All();
      return view('dashboard.products',['prod'=>$prod]);//هذي داله القراءه
    }
    public function create_newproducts(Request $request)
    {

       $prod=products::create([
              'name'=>$request->productname,
              'Description'=>$request->description,//هذي داله الاضافه
       ]);
       $prod->save();
       return redirect()->route('products');
    }
    public function delete()
    {
       $id=$_GET['id'];
       $p=products::find($id);
       $p->delete();

    }
    public function update(Request $request)
    {
        products::where('id',$request->id)  
        ->update (['name'=>$request->name,'description'=>$request->description]);
        return redirect()->route('products');
    }
    public function creat_new_detail(Request $request)
    {
        $product_details=Products_Details::create([

            'id_products'=>$request->product_no,
              'price'=>$request->price,
              'color'=>$request->color,
              'qty'=>$request->qty,
              'img'=>$request->img,
              
        ]);
        $product_details->save();
        return redirect()->route('showdet');
    }
    public function edit($id)
    {
        $products=products::find($id);
        return view('dashboard.edit',['products'=>$products]);

    }
    
    public function showproduct_details()
    {
        $prod=products::All();//اعبي السيلكت 
        $Productdrtails=DB::table('products')
        -> join('products__details','products.id','=','products__details.id_products')
        ->get();
        return view('dashboard.products_details',['prod'=>$prod,'Productdrtails'=>$Productdrtails]);
    }
    
}
