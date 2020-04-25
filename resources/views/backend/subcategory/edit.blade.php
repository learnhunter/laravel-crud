@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sub-Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Sub-</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Sub-Categories Modify</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Sub-Category</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.subcategory',$sub->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">SubCategory Name English</label>
                             <input type="text" class="form-control " value="{{ $sub->subcategory_en }}" aria-describedby="emailHelp" name="subcategory_en" required="">
                             
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">SubCategory Name Bangla</label>
                             <input type="text" class="form-control " value="{{ $sub->subcategory_bn }}"  name="subcategory_bn" required="">
                          
                           </div>
                    
		                    <div class="form-group">
		                   <label for="exampleInputPassword1">Choose Category  </label>
		                   <select class="form-control " name="category_id" required>
		                   	  <option disabled="" selected="">==choose one==</option>
		                   	@foreach($category as $row)
		                   	  <option value="{{ $row->id }}"   <?php  if($row->id == $sub->category_id) 
		                   	  echo "selected";
		                   	  ?> >{{ $row->category_en }} | {{ $row->category_bn }}</option>
		                   	@endforeach
		                   </select>
		                  
		                 </div>

                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection