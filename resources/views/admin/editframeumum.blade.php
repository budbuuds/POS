@extends('layouts.admin')

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
         <form action="/umum/{{$data->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode</label>
                        <input name="kode" class="form-control" type="text" placeholder="Kode" value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Frame</label>
                      <input name="frame" class="form-control" type="text" placeholder="Frame" value="{{$data->frame}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Harga</label>
                    <input name="harga" class="form-control" type="text" placeholder="Harga" value="{{$data->harga}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Tanggal Masuk</label>
                    <input name="masuk" class="form-control" type="date" placeholder="Tanggal Masuk" value="{{$data->masuk}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Tanggal Keluar</label>
                    <input name="keluar" class="form-control" type="date" placeholder="Tanggal Keluar" value="{{$data->keluar}}">
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