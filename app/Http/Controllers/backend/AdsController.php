<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  

     public function horizontal()
    {
    	$ads=DB::table('ads')->get();
    	return view('backend.ads.horizontal',compact('ads'));
    }
    public function store(Request $request)
    {

    	$data=array();
    	$data['link']=$request->link;

    	if ($request->type==2) {
    			$image=$request->ads;
    			$image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(970,90)->save('public/ads/'.$image_one);    //   public/postimages/123123.jpg
                $data['ads']='public/ads/'.$image_one;   //   public/postimages/123123.jpg
                $data['type']=2;   //   public/postimages/123123.jpg
                 DB::table('ads') ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
    	}else{
    		   $image=$request->ads;
    			$image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500,500)->save('public/ads/'.$image_one);    //   public/postimages/123123.jpg
                $data['ads']='public/ads/'.$image_one;   //   public/postimages/123123.jpg
                $data['type']=1;   //   public/postimages/123123.jpg
                 DB::table('ads') ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
    	}


    }

}
