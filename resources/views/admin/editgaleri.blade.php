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
         <form action="/galeri/{{$galeri->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Frame</label>
                        <input name="nama" class="form-control" type="text" placeholder="Nama Frame" required value="{{$galeri->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Harga</label>
                        <input name="harga" class="form-control" type="text" placeholder="100.000" required value="{{$galeri->harga}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Diskon</label>
                        <input name="diskon" class="form-control" type="text" placeholder="100%" required value="{{$galeri->diskon}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Deskripsi</label>
                        <input name="deskripsi" class="form-control" type="text" placeholder="deskripsi" required value="{{$galeri->deskripsi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Merek</label>
                        <input name="merek" class="form-control" type="text" placeholder="merek" required value="{{$galeri->merek}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ukuran</label>
                        <input name="tahun" class="form-control" type="text" placeholder="Ukuran" required value="{{$galeri->tahun}}">
                    </div>
                     <div>
                        <label for="exampleFormControlTextarea1">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
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