@extends('layouts.super')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Laporan Pengiriman</h4>
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
            <a href="/laporan/cetak_pdf" class="btn btn-primary btn-icon-text" target="_blank">CETAK PDF</a>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Invoice </th>
                <th> Tanggal </th>
                <th> PJ </th>
                <th> Nama Distributor </th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data_laporan as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> <img src="{{asset('images/'.$data -> invoice)}}" height="75px"> </td>
               <td> {{$data -> updated_at}} </td>
               <td> {{$data -> pj}} </td>
               <td> {{$data -> nama_dis}} </td>
               <td>
                    <a href="/laporan/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                    <a href="/laporan/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">
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
                    <form action="/super/laporan/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div>
                                <label for="exampleFormControlTextarea1">invoice</label>
                                <input type="file" name="invoice" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">PJ</label>
                                <select name="pj" class="form-control" id="exampleFormControlSelect1">
                                <option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Distributor</label>
                                <input name="nama_dis" class="form-control" type="text" placeholder="Nama Distribor" required>
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