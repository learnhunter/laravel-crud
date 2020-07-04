<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
class ExtraController extends Controller
{
    public function English()
    {
    	Session::get('lang');
    	session()->forget('lang');
    	Session()->put('lang','english');
    	return redirect()->back();
    }

    public function Bangla()
    {
    	Session::get('lang');
    	session()->forget('lang');
    	Session()->put('lang','bangla');
    	return redirect()->back();
    }

    public function SinglePost($id,$slug)
    {
           $post=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->join('users','posts.user_id','users.id')
                        ->select('posts.*','categories.category_bn','categories.category_en','subcategories.subcategory_bn','subcategories.subcategory_en','users.name')
                        ->where('posts.id',$id)
                        ->first();
           return view('frontend.singlepost',compact('post'));  
    }

    public function AllPost($id,$subcategory_bn)
    {
        $posts=DB::table('posts')->where('subcat_id',$id)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
    }

    public function AllPostscat($id ,$category_bn)
    {
        $posts=DB::table('posts')->where('cat_id',$id)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
    }

       //json data return 
      public function GetSubDist($dist_id)
     {
           $sub=DB::table('subdistricts')->where('district_id',$dist_id)->get();
          return response()->json($sub);
     }

     public function Saradesh(Request $request)
     {
         $distid=$request->dist_id;
         $subdistid=$request->subdist_id;

       $posts=DB::table('posts')->where('dist_id',$distid)->where('subdist_id',$subdistid)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
     }


}
