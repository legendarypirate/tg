<?php

namespace App\Http\Controllers;

use App\Subcat;
use App\Cat;
use App\Genc;
use App\Member;
use Illuminate\Http\Request;
use DB;
use Auth;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $data = DB::table('members')->get();
        return view('admin.member.memberEntry')->with('data', $data);
        }
      
    public function save(Request $request){

       $prodEntry = new Member();
       $prodEntry -> name = $request ->name; 
     
    
       $prodEntry -> info = $request ->info; 
      
       $prodEntry -> image = 'image';
       $prodEntry -> save();  

       $lastId=$prodEntry->id;

       $pictureInfo=$request->file('image');
         
       $picName = $lastId.$pictureInfo->getClientOriginalName();
       
       $folder="memberImage/";

       $pictureInfo->move($folder,$picName);

       $picUrl=$folder.$picName;

       $prodPic = Member::find($lastId);

       $prodPic->image = $picUrl;
       $prodPic-> save();  
       return redirect('/member/save')->with('message','Амжилттай хадгалагдлаа');
    }

    public function manage(){
       

       
        $genc=Member::All();
        return view('admin.member.memberManage', compact('genc'));
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
        $gencDelete = Member::find($id);
        $gencDelete->delete();

        return redirect('/member/manage')->with('message','deleted');
    }
      
}

?>
