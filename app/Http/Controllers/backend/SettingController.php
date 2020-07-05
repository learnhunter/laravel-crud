<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SocialSetting()
    {
    	$social=DB::table('socials')->first();
    	 return view('backend.setting.social',compact('social'));
    }

    public function UpdateSOcial(Request $request,$id)
    {
    	  $data=array();
          $data['facebook']=$request->facebook;
          $data['twitter']=$request->twitter;
          $data['linkedin']=$request->linkedin;
          $data['instagram']=$request->instagram;
          $data['youtube']=$request->youtube;
          DB::table('socials')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    public function SeoSetting()
    {
    	 $seo=DB::table('seos')->first();
    	 return view('backend.setting.seo',compact('seo'));
    }

    public function UpdateSEO(Request $request,$id)
    {
    	  $data=array();
          $data['meta_author']=$request->meta_author;
          $data['meta_title']=$request->meta_title;
          $data['meta_keyword']=$request->meta_keyword;
          $data['meta_description']=$request->meta_description;
          $data['google_analytics']=$request->google_analytics;
          $data['alexa_analytics']=$request->alexa_analytics;
          $data['google_verification']=$request->google_verification;
          DB::table('seos')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }


    public function NamazSetting()
    {
    	 $namaz=DB::table('namaz')->first();
    	 return view('backend.setting.namaz',compact('namaz'));
    }

    public function Updatenamaztime(Request $request,$id)
    {
    	 $data=array();
          $data['fajr']=$request->fajr;
          $data['johr']=$request->johr;
          $data['asor']=$request->asor;
          $data['magrib']=$request->magrib;
          $data['esha']=$request->esha;
          $data['jummah']=$request->jummah;

          DB::table('namaz')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    public function LivetvSetting()
    {
    	 $livetv=DB::table('livetv')->first();
    	 return view('backend.setting.livetv',compact('livetv'));
    }

    public function Updatelivetv(Request $request,$id)
    {
          $data=array();
          $data['embed_code']=$request->embed_code;        
          DB::table('livetv')->where('id',$id)->update($data);
          $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function ActiveLivetv($id)
    {
    	DB::table('livetv')->where('id',$id)->update(['status'=>1]);
    	 $notification=array(
                        'messege'=>'Successfully  LiveTv on your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

     public function DeactiveLivetv($id)
    {
    		DB::table('livetv')->where('id',$id)->update(['status'=>0]);
    	   $notification=array(
                        'messege'=>' LiveTv off  your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }


    public function noticeSetting()
    {
    	 $notice=DB::table('notices')->first();
    	 return view('backend.setting.notice',compact('notice'));
    }

    public function UpdateNotice(Request $request,$id)
    {
    	 $data=array();
          $data['notice']=$request->notice;        
          DB::table('notices')->where('id',$id)->update($data);
          $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function ActiveNotice($id)
    {
    		DB::table('notices')->where('id',$id)->update(['status'=>1]);
    	    $notification=array(
                        'messege'=>' Notice on  your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function DeactiveNotice($id)
    {
    		DB::table('notices')->where('id',$id)->update(['status'=>0]);
    	    $notification=array(
                        'messege'=>' Notice off  your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

//important website
    public function importantwebsite()
    {
    	 $website=DB::table('websites')->get();
    	 return view('backend.setting.website',compact('website'));
    }

    public function StoreWebsite(Request $request)
    {
    	 $data=array();
          $data['website_name']=$request->website_name;       
          $data['website_name_en']=$request->website_name_en;       
          $data['website_link']=$request->website_link;     
          DB::table('websites')->insert($data);
          $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }


    public function WebsiteSetting()
    {
       $setting=DB::table('settings')->first();
       return view('backend.setting.website_setting',compact('setting'));
    }

    public function UpdateWebsite(Request $request,$id)
    {
           $data=array();
           $data['phone_bn']=$request->phone_bn;
           $data['phone_en']=$request->phone_en;
           $data['email']=$request->email;
           $data['address_bn']=$request->address_bn;
           $data['address_en']=$request->address_en;
           $image=$request->logo;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(320,130)->save('public/ads/'.$image_one);    //   public/postimages/123123.jpg
                $data['logo']='public/ads/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('settings')->where('id',$id) ->update($data);
                 $notification=array(
                     'messege'=>'Successfully Settings Updated ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }
            //jodi image na thake notun vabe
           // $data['image']= $oldimage;
             DB::table('settings')->where('id',$id) ->update($data);
                 $notification=array(
                     'messege'=>'Successfully Settings Updated ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
    }

}
