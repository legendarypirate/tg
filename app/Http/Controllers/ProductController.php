<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Product;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
        {   
       
        $data = DB::table('products')->get();
        return view('admin.product.productEntry')->with('data', $data);
        }
    
    public function save(Request $request){
       $prodEntry = new Product();
       $prodEntry -> title = $request ->title; 
       $prodEntry -> desc = $request ->desc; 
       $prodEntry -> save();  

       return redirect('/product/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Product::All();
        return view('admin.product.productManage', compact('genc'));
    }

    public function edit($id){
        $cat = Cat::all();
        $subcat = Subcat::where('id', $id)->first();
        return view('admin.subcat.subcatEdit', compact('subcat','cat'));

    }

    public function update(Request $request){
       $subcat= Subcat::find($request->subcatId);
       $subcat -> catid = $request ->catid; 
       $subcat -> subcatname = $request ->subcatname; 
       $subcat -> save();
       return redirect('/subcat/manage')->with('message','updated');
    }

    public function delete($id){
        $gencDelete = Product::find($id);
        $gencDelete->delete();

        return redirect('/product/manage')->with('message','deleted');
    }
      
}

?>
