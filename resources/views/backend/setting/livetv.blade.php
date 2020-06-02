@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">LIVETV Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">LIVETV Settings</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> LIVETV Settings</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">LIVETV Settings</h4>
                        @if($livetv->status == 1)
                         	<a href="{{ route('deactive.livetv',$livetv->id) }}" style="float: right" class="btn btn-danger">Deactive</a>
                         @else
                           <a href="{{ route('active.livetv',$livetv->id) }}" style="float: right" class="btn btn-success">Active</a>
                         @endif
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.livetv',$livetv->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Embed Code</label>
                             <textarea type="text" class="form-control " aria-describedby="emailHelp" name="embed_code" required="">  
                             	{{ $livetv->embed_code }}
                             </textarea>
                             @if($livetv->status == 1)
                                 <small class="text-success">Now LiveTV are Active</small>
                             @else
                                 <small class="text-danger">Now LiveTV are Deactive</small>
                              @endif
                           </div>
                        
                          
                    
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection