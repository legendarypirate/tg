<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

use App\Mail\ContactForMail;
use App\Form;
use App\Anz;

use App\Http\Controllers;
use Validator,Redirect,Response,File,Date;
use DB, Auth;



class WebController extends Controller
{
     /**
     * Show the profile for the given user.
     *
     * 
     */
    public function blog(Request $request)
    {
      
        return view('web.blog');
    }  


  
    public function contact(Request $request)
    {
      
        return view('web.contact');
    }  
    

    public function mypage(Request $request)
    {
      
        return view('web.mypage');
    }  
    
   
    
  public function about()
    {
       
        return view('web.about');
    }  
    
    
      public function job()
    {
      
          $job=Job::all();
        return view('web.job', compact('job'));
    }  
 
 
       public function order()
    {
        return view('web.order');
    }  


 
    
       public function news(Request $request)
    {   
        $news = News::paginate(6);
        return view('web.news.index',['news'=>$news]);
    }

    public function ndetail(Request $request, $id)
    {
         
        
        $news = News::find($id);  
        return view( 'web.news.detail', compact('news'));
    }

   
    
    /**
     * Show the profile for the given user.
     *
   
     */
        public function donation(Request $request)
    {   
        $donation = Donation::All();
        return view('web.donation.index',compact('donation'));
    }

  
    public function comment_send(Request $request)
    {
        $rate = $request -> product_rating;
        $comment = $request -> textcomm;
        $company_id = $request -> company_id;
        $user_id = Auth::user()->id;

        if (isset($rate) && isset($comment)) {
            $comments = new Comment();
            $comments -> rate = $rate;
            $comments -> comment = $comment;
            $comments -> user_id = $user_id;
            $comments -> company_id = $company_id;
            $comments -> save();
            
        }
        return Redirect::back();
    }

    
    public function sendEmail($name, $email, $body)
    {
        Mailsend::sendCustomer($name, $email, $body);
    }
    
       public function contactstore(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $body = $request->get('message');
        $this->sendEmail($name, $email, $body);
        \Log::info($name.' '.$email.' '.$body);
        
        return redirect()->to('/contact')->with('message','Амжилттай илгээгдлээ');
        
    }
    
   
   
    public function hdetail(Request $request,$id)
    {
         
        $chief = Chief::find($id); 
       
        return view( 'web.history.detail', compact('chief'));
    }

     /**
     * Show the profile for the given user.
     *
     * 
     */
          
}
