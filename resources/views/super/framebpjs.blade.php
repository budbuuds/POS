@extends('layouts.super')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Frame Bpjs </h4>
        <a href="/gudang/frame/bpjs/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#importExcel">
          IMPORT EXCEL
        </button>
        <button type="button" class="btn btn-info btn-fw" data-toggle="modal" data-target="#exampleModal">
         TAMBAH 
        </button>
  
          <!-- Import Excel -->
          <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form method="post" action="/gudang/frame/bpjs/import_excel" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                  </div>
                  <div class="modal-body">

                    {{ csrf_field() }}

                    <label>Pilih file excel</label>
                    <div class="form-group">
                      <input type="file" name="file" required="required">
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Kode </th>
                <th> Frame </th>
                <th> Harga </th>
                <th> Masuk </th>
                <th> Keluar </th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data_framebpjs as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $data -> kode}} </td>
               <td> {{ $data -> frame}} </td>
               <td> Rp. {{ $data -> harga}} </td>
               <td> {{ $data -> masuk}} </td>
               <td> {{ $data -> keluar}} </td>
               <td>
                <a href="/framebpjs/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                <a href="/framebpjs/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">
                  <i class="fa fa-times-circle">Delete</i>
                </a>
              </td>
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
                          <form action="/super/frame/bpjs/create" method="POST">
                              {{csrf_field()}}
                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">Kode</label>
                                      <input name="kode" class="form-control" type="text" placeholder="Kode">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Frame</label>
                                    <input name="frame" class="form-control" type="text" placeholder="Frame">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleFormControlSelect1">Harga</label>
                                  <input name="harga" class="form-control" type="text" placeholder="Harga">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleFormControlSelect1">Tanggal Masuk</label>
                                  <input name="masuk" class="form-control" type="date" placeholder="Tanggal Masuk">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleFormControlSelect1">Tanggal Keluar</label>
                                  <input name="keluar" class="form-control" type="date" placeholder="Tanggal Keluar">
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