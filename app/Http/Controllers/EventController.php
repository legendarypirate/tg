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
       $prodEntry -> name = $request ->name; 
       $prodEntry -> desc = $request ->desc; 
       $prodEntry -> save();  

       
       return redirect('/event/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Review::All();
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
       return redirect('/subcat/manage')->with('message','updated');
    }

    public function delete($id){
        $gencDelete = Event::find($id);
        $gencDelete->delete();

        return redirect('/event/manage')->with('message','deleted');
    }
      
}

?>
