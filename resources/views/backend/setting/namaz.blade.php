@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Namaz Time Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Namaz Time Settings</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Namaz Time Settings </h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"> Namaz Time Settings </h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.namaztime',$namaz->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Fajr</label>
                             <input type="text" class="form-control " value="{{ $namaz->fajr }}" aria-describedby="emailHelp" name="fajr" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Johr</label>
                             <input type="text" class="form-control " value="{{ $namaz->johr }}" aria-describedby="emailHelp" name="johr" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Asor</label>
                             <input type="text" class="form-control " value="{{ $namaz->asor }}" aria-describedby="emailHelp" name="asor" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">magrib</label>
                             <input type="text" class="form-control " value="{{ $namaz->magrib }}" aria-describedby="emailHelp" name="magrib" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Esha</label>
                             <input type="text" class="form-control " value="{{ $namaz->esha }}" aria-describedby="emailHelp" name="esha" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Jummah</label>
                             <input type="text" class="form-control " value="{{ $namaz->jummah }}" aria-describedby="emailHelp" name="jummah" required="">
                           </div>
                        
                    
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection