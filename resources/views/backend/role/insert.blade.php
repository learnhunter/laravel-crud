@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">User roles</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> User Role</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Insert User</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('store.writer') }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Name</label>
                             <input type="text" class="form-control "  aria-describedby="emailHelp" name="name" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Email</label>
                             <input type="email" class="form-control " name="email" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control " name="password" required="">
                           </div><br>
                           <div class="row">
                           	    <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Category</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="category" value="1">
                                </div>
                                <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">District</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="district" value="1">
                                </div>
                                <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Posts</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="post" value="1">
                                </div>
                                <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Setting</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="setting" value="1">
                                </div>
                           </div>
                            <div class="row">
                           	    <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Gallery</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="gallery" value="1">
                                </div>
                                <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Ads</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="ads" value="1">
                                </div>
                                <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Role</label>
		                             <input type="checkbox" class="form-control "  aria-describedby="emailHelp" name="role" value="1">
                                </div>
                             {{--    <div class="form-group col-lg-3">
		                             <label for="exampleInputEmail1">Writer</label>
		                             <input type="checkbox" class="form-control " readonly=""  aria-describedby="emailHelp" name="type" checked="" value="0">
                                </div> --}}
                           </div>
                    	<br><hr>
                           <button type="submit" class="btn btn-success btn-block">Submit</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection