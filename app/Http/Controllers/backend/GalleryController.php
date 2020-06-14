<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class GalleryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function photos()
    {
    	 $photo=DB::table('photos')->get();
    	 return view('backend.gallery.photos',compact('photo'));
    }

    public function storephotos(Request $request)
    {
    	   $data=array();
           $data['title']=$request->title;
           $data['type']=$request->type;
           $image=$request->photo;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500,310)->save('public/photos_gallery/'.$image_one);    //   public/postimages/123123.jpg
                $data['photo']='public/photos_gallery/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('photos') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Photo Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }else{
             return Redirect()->back();
           }
    }

     public function video()
    {
    	 $video=DB::table('videos')->get();
    	 return view('backend.gallery.video',compact('video'));
    }

    public function storevideo(Request $request)
    {
    	$data=array();
    	$data['title']=$request->title;
    	$data['embed_code']=$request->embed_code;
    	$data['type']=$request->type;
    	DB::table('videos') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Video Inserted ',
                     'alert-type'=>'success'
                    );
       return Redirect()->back()->with($notification);
    }

}
