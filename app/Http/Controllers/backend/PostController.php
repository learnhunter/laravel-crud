<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Auth;

class PostController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

	//all post show here
     public function index()
     {
            // $post=DB::table('posts')
            //             ->join('categories','posts.cat_id','categories.id')
            //             ->join('subcategories','posts.subcat_id','subcategories.id')
            //             ->join('districts','posts.dist_id','districts.id')
            //             ->join('subdistricts','posts.subdist_id','subdistricts.id')
            //             ->get();

          $post=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
                        ->get();

                  return view('backend.post.index',compact('post'));      
     }

     //post insert form
     public function create()
     {
     		$category=DB::table('categories')->get();
     		$district=DB::table('districts')->get();

     		return view('backend.post.create',compact('category','district'));
     }

     //store post
     public function store(Request $request)
     {
           $validatedData = $request->validate([
                'cat_id' => 'required',
        ]);

           $data=array();
           $data['title_bn']=$request->title_bn;
           // $data['title_slug']=Str::slug($request->title_bn, '-');
           $data['title_en']=$request->title_en;
           $data['user_id']= Auth::id();
           $data['cat_id']=$request->cat_id;
           $data['subcat_id']=$request->subcat_id;
           $data['dist_id']=$request->dist_id;
           $data['subdist_id']=$request->subdist_id;
           $data['details_en']=$request->details_en;
           $data['details_bn']=$request->details_bn;
           $data['tags_bn']=$request->tags_bn;
           $data['tags_en']=$request->tags_en;
           $data['headline']=$request->headline;
           $data['first_section']=$request->first_section;
           $data['first_section_thumbnail']=$request->first_section_thumbnail;
           $data['bigthumbnail']=$request->bigthumbnail;
           $data['post_date']=date('d-m-Y');
           $data['post_month']=date("F");

           $image=$request->image;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500,310)->save('public/postimages/'.$image_one);    //   public/postimages/123123.jpg
                $data['image']='public/postimages/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('posts') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }else{
             return Redirect()->back();
           }



     }

     public function destroy($id)
     {
          $post=DB::table('posts')->where('id',$id)->first();
          unlink($post->image);
          DB::table('posts')->where('id',$id)->delete();
           $notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);

     }

    public function edit($id)
     {
            $post=DB::table('posts')->where('id',$id)->first();
            $category=DB::table('categories')->get();
            $district=DB::table('districts')->get();
            return view('backend.post.edit',compact('post','category','district'));

     }

     public function update(Request $request,$id)
     {
           $validatedData = $request->validate([
                'cat_id' => 'required',
                'dist_id' => 'required',
        ]);

           $data=array();
           $data['title_bn']=$request->title_bn;
           $data['title_en']=$request->title_en;
           $data['cat_id']=$request->cat_id;
           $data['subcat_id']=$request->subcat_id;
           $data['dist_id']=$request->dist_id;
           $data['subdist_id']=$request->subdist_id;
           $data['details_en']=$request->details_en;
           $data['details_bn']=$request->details_bn;
           $data['tags_bn']=$request->tags_bn;
           $data['tags_en']=$request->tags_en;
           $data['headline']=$request->headline;
           $data['first_section']=$request->first_section;
           $data['first_section_thumbnail']=$request->first_section_thumbnail;
           $data['bigthumbnail']=$request->bigthumbnail;

           $oldimage=$request->oldimage;  //public/postimages/1154654.jpg;

           $image=$request->image;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500,310)->save('public/postimages/'.$image_one);    //   public/postimages/123123.jpg
                $data['image']='public/postimages/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('posts')->where('id',$id) ->update($data);
                 unlink($oldimage);
                 $notification=array(
                     'messege'=>'Successfully Post Updated ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }
            //jodi image na thake notun vabe
           $data['image']= $oldimage;
            DB::table('posts')->where('id',$id) ->update($data);
             $notification=array(
                     'messege'=>'Successfully Post Updated ',
                     'alert-type'=>'success'
             );
            return Redirect()->route('all.post')->with($notification);

     }


   //json data return 
     public function GetSubcat($cat_id)
     {
          $sub=DB::table('subcategories')->where('category_id',$cat_id)->get();
          return response()->json($sub);
     }

     //get subdistrict
     public function GetSubDist($dist_id)
     {
           $sub=DB::table('subdistricts')->where('district_id',$dist_id)->get();
          return response()->json($sub);
     }



}
