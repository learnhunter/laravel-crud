@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Photo gallery</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Photo gallery</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Photo Gallery</h3>
              <button class="btn btn-danger btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($photo as $row)
                <tr>
                  <td>{{ $row->title }}</td>
                  <td><img src="{{ asset($row->photo) }}" style="height: 70px; width: 90px;"></td>
                  <td>
                  	@if($row->type == 1)
                  	      <span class="badge badge-success">Big Photo</span>
                  	      @else
                  	      <span class="badge badge-info">Small Photo</span>
                  	      @endif
                  </td>
                  <td>
                  	  <a href="#" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  	  <a href="#" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
            	@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

<!--category added modal-->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insert new Photo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{ route('store.photos') }}" method="Post" enctype="multipart/form-data">
               	@csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">Title </label>
                   <input type="text" class="form-control @error('title') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="title" required="">
                     @error('title')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Photo</label>
                   <input type="file" class="form-control " id="bangla" name="photo" required="">
                    
                 </div>
                  <div class="form-group">
                   <label for="exampleInputPassword1">Type</label>
                 <select class="form-control" name="type" required>
                 	  <option value="1">Big Photo</option>
                 	  <option value="0">Small Photo</option>
                 </select>
                    
                 </div>
          
                 <button type="submit" class="btn btn-success btn-block">Submit</button>
               </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

@endsection