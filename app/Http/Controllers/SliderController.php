<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Slider;
use Illuminate\Http\Request;
use DB;
use Auth;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $data = DB::table('sliders')->get();
        return view('admin.slider.sliderEntry')->with('data', $data);
        }
      
    public function save(Request $request){

       $prodEntry = new Slider();
     
       $prodEntry -> image = 'image';
       $prodEntry -> save();  

       $lastId=$prodEntry->id;

       $pictureInfo=$request->file('image');
         
       $picName = $lastId.$pictureInfo->getClientOriginalName();
       
       $folder="sliderImage/";

       $pictureInfo->move($folder,$picName);

       $picUrl=$folder.$picName;

       $prodPic = Slider::find($lastId);

       $prodPic->image = $picUrl;
       $prodPic-> save();  
       return redirect('/slider/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Slider::All();
        return view('admin.slider.sliderManage', compact('genc'));
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
        $gencDelete = Slider::find($id);
        $gencDelete->delete();

        return redirect('/slider/manage')->with('message','deleted');
    }
      
}

?>
