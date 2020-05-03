@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@php
	$sub=DB::table('subcategories')->where('category_id',$post->cat_id)->get();
	$subdist=DB::table('subdistricts')->where('district_id',$post->dist_id)->get();
@endphp 
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Post Update Panel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Post Update Panel</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Post Insert Panel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  action="{{ route('update.post',$post->id) }}" method="post"  enctype="multipart/form-data"> 
                @csrf
                <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Title Bangla</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="title_bn"  value="{{ $post->title_bn }}">
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputPassword1">Title English</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="title_en"  value="{{ $post->title_en }}">
                  </div>
               </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Category</label>
                  		<select name="cat_id" class="form-control">
                  			  	<option selected="" disabled="">==choose one==</option>
                  			@foreach($category as $row)
                  		     	<option value="{{ $row->id }}"  <?php if ($row->id == $post->cat_id) {
                  		     		 echo "selected";
                  		     	} ?> >{{ $row->category_bn }} </option>
                  			@endforeach
                  		</select>
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputPassword1">SubCategory</label>
                    <select name="subcat_id" class="form-control" id="subcat_id">
                  			  	<option selected="" disabled="">==choose one==</option>
                  			  	@foreach($sub as $row)
                  		     	<option value="{{ $row->id }}"  <?php if ($row->id == $post->subcat_id) {
                  		     		 echo "selected";
                  		     	} ?> >{{ $row->subcategory_bn }} </option>
                  			@endforeach
                  		
                  		</select>
                  </div>
               </div>

                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">District</label>
                  		<select name="dist_id" class="form-control">
                  			  	<option selected="" disabled="">==choose one==</option>
                  			@foreach($district as $row)
                  		     	<option value="{{ $row->id }}" <?php if ($row->id == $post->dist_id) {
                  		     		 echo "selected";
                  		     	} ?> >{{ $row->district_bn }} </option>
                  			@endforeach
                  		</select>
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputPassword1">SubDistrict</label>
                    <select name="subdist_id" class="form-control" id="subdist_id">
                  			  	<option selected="" disabled="">==choose one==</option>
                  				 	@foreach($subdist as $row)
	                  		     	<option value="{{ $row->id }}"  <?php if ($row->id == $post->dist_id) {
	                  		     		 echo "selected";
	                  		     	} ?> >{{ $row->subdistrict_bn }} </option>
                  			   @endforeach
                  		</select>
                  </div>
               </div>

               	<div class="row">
               		 <div class="form-group col-lg-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                  	  <label for="exampleInputFile">Old Image</label><br>
                  		<img src="{{ URL::to($post->image) }}" style="height: 50px; width: 70px;">
                  		<input type="hidden" name="oldimage" value="{{ $post->image }}">
                  </div>
               	</div>
                

                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Tags Bangla</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="tags_bn" value="{{ $post->tags_bn }}">
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputPassword1">Tags English</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tags_en"  value="{{ $post->tags_en }}">
                  </div>
               </div>

                  <div class="form-group  col-md-12">
                    <label for="exampleInputPassword1">Details English</label>
                     <textarea class="textarea" placeholder="Place some text here" name="details_en" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {{ $post->details_en }}
                          </textarea>
                  </div>

                    <div class="form-group  col-md-12">
                    <label for="exampleInputPassword1">Details Bangla</label>
                     <textarea class="textarea" placeholder="Place some text here" name="details_bn" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	{{ $post->details_bn }}
                          </textarea>
                  </div>
                  <hr>
                  <h4 class="text-center">Extra Option</h4>
                

                 <div class="row">

                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="headline" value="1"   <?php  if ($post->headline == 1) {
                    	 echo "checked";
                    } ?> >
                    <label class="form-check-label" for="exampleCheck1">Headline</label>
               		</div>
                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bigthumbnail" value="1"   <?php  if ($post->bigthumbnail == 1) {
                    	 echo "checked";
                    } ?> >
                    <label class="form-check-label" for="exampleCheck1">General big thumbnail</label>
                  </div>

                   <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section" value="1"   <?php  if ($post->first_section == 1) {
                    	 echo "checked";
                    } ?> >
                    <label class="form-check-label" for="exampleCheck1">FirstSection</label>
                  </div>

                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section_thumbnail" value="1"   <?php  if ($post->first_section_thumbnail == 1) {
                    	 echo "checked";
                    } ?> >
                    <label class="form-check-label" for="exampleCheck1">FirstSection Big Thumbnail</label>
                  </div>
               
            </div>
                <!-- /.card-body -->	
                <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
         </div>
       </div>
   </div>
</section>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="cat_id"]').on('change', function(){
             var cat_id = $(this).val();
             if(cat_id) {
                 $.ajax({
                     url: "{{  url('/get/subcat/') }}/"+cat_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subcat_id").empty();
                              $.each(data,function(key,value){
                                  $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_bn+'</option>');
                              });

                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="dist_id"]').on('change', function(){
             var dist_id = $(this).val();
             if(dist_id) {
                 $.ajax({
                     url: "{{  url('/get/subdist/') }}/"+dist_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subdist_id").empty();
                              $.each(data,function(key,value){
                                  $("#subdist_id").append('<option value="'+value.id+'">'+value.subdistrict_bn+'</option>');
                              });

                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>


@endsection