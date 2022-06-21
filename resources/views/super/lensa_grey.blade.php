@extends('layouts.super')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Stok Lensa Grey </h4>
        <a href="/gudang/lensa/grey/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
          IMPORT EXCEL
        </button>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Ukuran </th>
                <th> Stok </th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data_lensa_grey as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $data -> ukuran}} </td>
               <td> {{ $data -> stock}} </td>
               <td>
                <a href="/lensagrey/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                <a href="/lensagrey/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">
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
<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="/gudang/lensa/grey/import_excel" enctype="multipart/form-data">
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
@endsection