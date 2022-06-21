@extends('layouts.admin')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Galeri</h4>
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Opsi </th>
                <th> Nama Frame</th>
                <th> Harga </th>
                <th> Diskon </th>
                <th> Deskripsi </th>
                <th> Merek  </th>
                <th> Ukuran  </th>
                <th> Gambar </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data_galeri as $galeri)

             <tr>
               <td> {{ $no++ }} </td>
               <td>
                    <a href="/galeri/{{$galeri->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                    <a href="/galeri/delete/{{$galeri->id}}" class="btn btn-danger btn-sm" role="button">
                    <i class="fa fa-times-circle">Delete</i>
                    </a>
               </td>
               <td> {{$galeri -> nama}} </td>
               <td> {{$galeri -> harga}}</td>
               <td> {{$galeri -> diskon}}</td>
               <td> {{$galeri -> deskripsi}}</td>
               <td> {{$galeri -> merek}}</td>
               <td> {{$galeri -> tahun}}</td>
               <td> <img src="{{asset('images/'.$galeri -> gambar)}}" height="75px"> </td>
             </tr>

             @endforeach 

            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
             
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action="/galeri/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Frame</label>
                                <input name="nama" class="form-control" type="text" placeholder="Nama Frame" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Harga</label>
                                <input name="harga" class="form-control" type="text" placeholder="100.000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Diskon</label>
                                <input name="diskon" class="form-control" type="text" placeholder="100%" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Deskripsi</label>
                                <input name="deskripsi" class="form-control" type="text" placeholder="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Merek</label>
                                <input name="merek" class="form-control" type="text" placeholder="merek" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran</label>
                                <input name="tahun" class="form-control" type="text" placeholder="Ukuran" required>
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                                           

@endsection