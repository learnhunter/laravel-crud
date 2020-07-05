@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">All Writers</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">All Writers</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> All Writers Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> Name </th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($writer as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>
                  	     @if($row->category==1)
                  	     <span class="badge badge-success">Category</span>
                  	     @else
                  	     @endif

                  	     @if($row->district==1)
                  	     <span class="badge badge-success">District</span>
                  	     @else
                  	     @endif

                  	      @if($row->post==1)
                  	     <span class="badge badge-success">Post</span>
                  	     @else
                  	     @endif

                  	        @if($row->setting==1)
                  	     <span class="badge badge-success">Setting</span>
                  	     @else
                  	     @endif

                  	        @if($row->gallery==1)
                  	     <span class="badge badge-success">Gallery</span>
                  	     @else
                  	     @endif

                  	        @if($row->ads==1)
                  	     <span class="badge badge-success">Ads</span>
                  	     @else
                  	     @endif

                  	      @if($row->role==1)
                  	     <span class="badge badge-success">Role</span>
                  	     @else
                  	     @endif
                  	    
                  </td>
                  <td>
                  	  <a href="{{ URL::to('edit/writer/'.$row->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  	  <a href="" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
            	@endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th> Name </th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>


@endsection