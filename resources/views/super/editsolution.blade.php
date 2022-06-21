@extends('layouts.super')

@section('content')

<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
       <div class="panel-body">
       <h1>Edit</h1>
       @if(session('sukses'))
         <div class="alert alert-success">
           <strong>Sukses!</strong> Data berhasil diupdate.
         </div>
       @endif
         <div class="col-md-12"> 
         <form action="/solution/{{$data->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div>
                         <label for="exampleFormControlTextarea1">Ukuran</label>
                         <input name="ukuran" class="form-control" type="text" placeholder="Default input" value="{{$data->ukuran}}">
                     </div>
                     <div>
                         <label for="exampleFormControlTextarea1">Stock</label>
                         <input name="stock" class="form-control" type="number" placeholder="Default input" value="{{$data->stock}}">
                     </div>

                     </div>
                     <div class="modal-footer">
                         <input class="btn btn-warning" type="submit" value="Update">
             </form>
         </div>
     </div>  
   </div>
</div>
<!-- end: content -->

@endsection