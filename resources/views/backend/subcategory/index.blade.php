@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sub Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Subcategory
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Subcategory Table</h3>
              <button class="btn btn-danger btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SubCategory Name Bangla</th>
                  <th>SubCategory Name English</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($sub as $row)
                <tr>
                  <td>{{ $row->subcategory_bn }}</td>
                  <td>{{ $row->subcategory_en }}</td>
                   <td>{{ $row->category_en }}</td>
                  <td>
                  	  <a href="{{ URL::to('edit/subcategory/'.$row->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  	  <a href="{{ route('delete.subcategory',$row->id) }}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
            	@endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>Category Name Bangla</th>
                  <th>Category Name English</th>
                   <th>Category</th>
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
              <h4 class="modal-title">Insert new category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{ route('store.subcategory') }}" method="Post">
               	@csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">Subcategory Name English</label>
                   <input type="text" class="form-control @error('category_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="subcategory_en" required="">
                     @error('subcategory_en')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Subcategory Name Bangla</label>
                   <input type="text" class="form-control @error('category_bn') is-invalid @enderror" id="bangla" name="subcategory_bn" required="">
                      @error('subcategory_bn')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Choose Category  </label>
                   <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                   	  <option disabled="" selected="">==choose one==</option>
                   	@foreach($category as $row)
                   	  <option value="{{ $row->id }}">{{ $row->category_en }} | {{ $row->category_bn }}</option>
                   	@endforeach
                   </select>
                    @error('category_id')
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