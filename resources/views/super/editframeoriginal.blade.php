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
         <form action="/super/frameoriginal/{{$data->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Merek</label>
                        <input name="merek" class="form-control" type="text" placeholder="merek" value="{{$data->merek}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Warna</label>
                      <input name="warna" class="form-control" type="text" placeholder="warna" value="{{$data->warna}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Jumlah</label>
                    <input name="jumlah" class="form-control" type="number" placeholder="jumlah" value="{{$data->jumlah}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Keterangan</label>
                    <input name="ket" class="form-control" type="text" placeholder="ket" value="{{$data->ket}}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">PJ</label>
                    <select name="pj" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                        @foreach ($User_array as $array)
                            <option value="{{$array->name}}">{{$array->name}}</option>
                        @endforeach
                    </select>
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