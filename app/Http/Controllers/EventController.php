<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $data = DB::table('events')->get();
        return view('admin.event.eventEntry')->with('data', $data);
        }
      
    public function save(Request $request){
 
       $prodEntry = new Event();
       $prodEntry -> title = $request ->title; 
       $prodEntry -> desc = $request ->desc; 
       $prodEntry -> date = $request ->date; 
       $prodEntry -> image = 'image';
       $prodEntry -> save();  

       $lastId=$prodEntry->id;

       $pictureInfo=$request->file('image');
         
       $picName = $lastId.$pictureInfo->getClientOriginalName();
       
       $folder="eventImage/";

       $pictureInfo->move($folder,$picName);

       $picUrl=$folder.$picName;

       $prodPic = Event::find($lastId);

       $prodPic->image = $picUrl;
       $prodPic-> save();  

       
       return redirect('/event/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Event::All();
        return view('admin.event.eventManage', compact('genc'));
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
       return redirect('/event/manage')->with('message','updated');
    }

    public function delete($id){
        $gencDelete = Event::find($id);
        $gencDelete->delete();

        return redirect('/event/manage')->with('message','deleted');
    }
      
}

?>
