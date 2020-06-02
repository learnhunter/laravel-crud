@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Important Website</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Important Website</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Important Website</h3>
              <button class="btn btn-danger btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Website Name</th>
                  <th>Website Link</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($website as $row)
                <tr>
                  <td>{{ $row->website_name }}</td>
                  <td>{{ $row->website_link }}</td>
                  <td>
                  	  <a href="{{ URL::to('edit/category/'.$row->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  	  <a href="{{ route('delete.category',$row->id) }}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
            	@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Website Name</th>
                  <th>Website Link</th>
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
              <h4 class="modal-title">Insert new website</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{ route('store.website') }}" method="Post">
               	@csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">Website Name</label>
                   <input type="text" class="form-control @error('category_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="website_name" required="">
                     @error('category_en')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Website Link</label>
                   <input type="text" class="form-control @error('category_bn') is-invalid @enderror" id="bangla" name="website_link" required="">
                      @error('category_bn')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
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