@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Districts</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Districts</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Districts Modify</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Districts</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.district',$district->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Districts Name English</label>
                             <input type="text" class="form-control " value="{{ $district->district_en }}" aria-describedby="emailHelp" name="district_en" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Districts Name Bangla</label>
                             <input type="text" class="form-control " value="{{ $district->district_bn }}"  name="district_bn" required="">
                          
                           </div>
                    
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection