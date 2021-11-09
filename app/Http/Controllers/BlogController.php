<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Blog;
use Illuminate\Http\Request;
use DB;
use Auth;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $data = DB::table('blogs')->get();
        return view('admin.blog.blogEntry')->with('data', $data);
        }
      

      

       

    public function save(Request $request){

      
       
       $prodEntry = new Blog();
       $prodEntry -> title = $request ->title; 
       $prodEntry -> author =Auth::user()->name; 
       $prodEntry -> header = $request ->header; 
       $prodEntry -> desc = $request ->desc; 
      
       $prodEntry -> image = 'image';
       $prodEntry -> save();  

       $lastId=$prodEntry->id;

       $pictureInfo=$request->file('image');
         
       $picName = $lastId.$pictureInfo->getClientOriginalName();
       
       $folder="blogImage/";

       $pictureInfo->move($folder,$picName);

       $picUrl=$folder.$picName;

       $prodPic = Blog::find($lastId);

       $prodPic->image = $picUrl;
       $prodPic-> save();  
       return redirect('/blog/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Blog::All();
        return view('admin.blog.blogManage', compact('genc'));
    }

    public function edit($id){
        $cat = Cat::all();
        $subcat = Subcat::where('id', $id)->first();
        return view('admin.subcat.subcatEdit', compact('subcat','cat'));

    }


    public function renew($id){

        $catEdit = Prod::find($id);
        $catEdit->status = "2";
        $catEdit->update();
        return redirect('/prod/manage')->with('message','updated');

    }

    public function update(Request $request){
       $subcat= Subcat::find($request->subcatId);
       $subcat -> catid = $request ->catid; 
       $subcat -> subcatname = $request ->subcatname; 
       $subcat -> save();
       return redirect('/subcat/manage')->with('message','updated');
    }

    public function delete($id){
        $gencDelete = Blog::find($id);
        $gencDelete->delete();

        return redirect('/blog/manage')->with('message','deleted');
    }
      
}

?>
