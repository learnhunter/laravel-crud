@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Social Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Social Settings</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Social Settings</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Social Settingd</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.social',$social->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Facebook</label>
                             <input type="text" class="form-control " value="{{ $social->facebook }}" aria-describedby="emailHelp" name="facebook" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Twitter</label>
                             <input type="text" class="form-control " value="{{ $social->twitter }}" aria-describedby="emailHelp" name="twitter" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Linkedin</label>
                             <input type="text" class="form-control " value="{{ $social->linkedin }}" aria-describedby="emailHelp" name="linkedin" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Instagram</label>
                             <input type="text" class="form-control " value="{{ $social->instagram }}" aria-describedby="emailHelp" name="instagram" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Youtube</label>
                             <input type="text" class="form-control " value="{{ $social->youtube }}" aria-describedby="emailHelp" name="youtube" required="">
                           </div>
                        
                    
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection