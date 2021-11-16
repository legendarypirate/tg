<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Review;
use Illuminate\Http\Request;
use DB;
use Auth;

class ReviewController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $data = DB::table('reviews')->get();
        return view('admin.review.reviewEntry')->with('data', $data);
        }
      
    public function save(Request $request){
 
       $prodEntry = new Review();
       $prodEntry -> name = $request ->name; 
       $prodEntry -> desc = $request ->desc; 
       $prodEntry -> image = 'image';
       $prodEntry -> save();  

       $lastId=$prodEntry->id;

       $pictureInfo=$request->file('image');
         
       $picName = $lastId.$pictureInfo->getClientOriginalName();
       
       $folder="reviewImage/";

       $pictureInfo->move($folder,$picName);

       $picUrl=$folder.$picName;

       $prodPic = Review::find($lastId);

       $prodPic->image = $picUrl;
       $prodPic-> save();  


       
       return redirect('/review/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Review::All();
        return view('admin.review.reviewManage', compact('genc'));
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
        $gencDelete = Review::find($id);
        $gencDelete->delete();

        return redirect('/review/manage')->with('message','deleted');
    }
      
}

?>
