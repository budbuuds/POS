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
         <form action="/celebritygreymasuk/{{$masuk->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div>
                        <label for="exampleFormControlTextarea1">Tanggal Masuk</label>
                        <input name="updated_at" class="form-control" type="date" placeholder="Default input" value="{{$masuk->updated_at}}">
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