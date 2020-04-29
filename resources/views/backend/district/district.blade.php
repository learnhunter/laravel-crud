@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dictricts</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Dictricts</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Dictricts Table</h3>
              <button class="btn btn-danger btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dictrict Name Bangla</th>
                  <th>Dictrict Name English</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($district as $row)
                <tr>
                  <td>{{ $row->district_bn }}</td>
                  <td>{{ $row->district_en }}</td>
                  <td>
                  	  <a href="{{ route('edit.district',$row->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                  	  <a href="{{ route('delete.district',$row->id) }}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
            	@endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>Dictrict Name Bangla</th>
                  <th>Dictrict Name English</th>
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
              <h4 class="modal-title">Insert New District</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{ route('store.district') }}" method="Post">
               	@csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">District Name English</label>
                   <input type="text" class="form-control @error('district_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="district_en" required="">
                     @error('district_en')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">District Name Bangla</label>
                   <input type="text" class="form-control @error('district_bn') is-invalid @enderror" id="bangla" name="district_bn" required="">
                      @error('district_bn')
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