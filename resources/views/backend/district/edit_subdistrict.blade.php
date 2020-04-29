@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sub-District</h1>
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
              <h3 class="card-title"> Sub-District Modify</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Sub-District</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.subdistrict',$sub->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">SubDistrict Name English</label>
                             <input type="text" class="form-control " value="{{ $sub->subdistrict_en }}" aria-describedby="emailHelp" name="subdistrict_en" required="">
                             
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">SubDistrict Name Bangla</label>
                             <input type="text" class="form-control " value="{{ $sub->subdistrict_bn }}"  name="subdistrict_bn" required="">
                          
                           </div>
                    
		                    <div class="form-group">
		                   <label for="exampleInputPassword1">Choose District  </label>
		                   <select class="form-control " name="district_id" required>
		                   	  <option disabled="" selected="">==choose one==</option>
		                   	@foreach($district as $row)
		                   	  <option value="{{ $row->id }}"   <?php  if($row->id == $sub->district_id) 
		                   	  echo "selected";
		                   	  ?> >{{ $row->district_en }} | {{ $row->district_bn }}</option>
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