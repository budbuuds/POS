@extends('layouts.super')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lensa KMCCR Keluar</h4>
        <a href="/keluar/lensa/kmccr/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Ukuran </th>
                <th> Tanggal Keluar </th>
                <th> Jumlah Keluar </th>
                <th> PJ </th>
                <th> Tujuan </th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($lensa_kmccr_keluar as $keluar)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $keluar -> lensa_kmccr -> ukuran}} </td>
               <td> {{ $keluar -> updated_at}} </td>
               <td> {{ $keluar -> jumlah_keluar }} </td>
               <td> {{ $keluar -> pj }} </td>
               <td> {{ $keluar -> tujuan -> toko }} </td>
               <td>
                    <a href="/lensakmccrkeluar/{{$keluar->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                    <a href="/lensakmccrkeluar/delete/{{$keluar->id}}" class="btn btn-danger btn-sm" role="button">
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
                    <form action="/super/barangkeluar/lensa/kmccr/create" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran Lensa</label>
                                <select name="lensa_kmccr_id" class="form-control" id="exampleFormControlSelect1">
                                <option value="1">-0.25</option>
                                <option value="2">-0.50</option>
                                <option value="3">-0.75</option>
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Jumlah Keluar</label>
                                <input name="jumlah_keluar" class="form-control" type="number" placeholder="Default input">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">PJ</label>
                                <select name="pj" class="form-control" id="exampleFormControlSelect1">
                                <option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tujuan</label>
                                <select name="tujuan_id" class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Tiara</option>
                                <option value="2">Emeral</option>
                                </select>
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