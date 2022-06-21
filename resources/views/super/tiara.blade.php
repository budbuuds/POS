@extends('layouts.super')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Toko Tiara </h4>
        <a href="/tiara/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th>Nomor Faktur</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Frame</th>
                <th>Lensa</th>
                <th>Ukuran</th>
                <th>Stock/Gosok</th>
                <th>Harga</th>
                <th>Sisa</th>
                <th>PJ</th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($tiara as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{$data -> faktur}} </td>
               <td> {{$data -> hari}} </td>
               <td> {{$data -> updated_at}} </td>
               <td> {{$data -> frame}} </td>
               <td> {{$data -> lensa}} </td>
               <td> {{$data -> ukuran}} </td>
               <td> {{$data -> stokgosok}} </td>
               <td> {{$data -> harga}} </td>
               <td> {{$data -> sisa}} </td>
               <td> {{$data -> pj}} </td>
               <td>
                <a href="/tiara/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                <a href="/tiara/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">
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
                    <form action="/super/tiara/create" method="POST">
                        {{csrf_field()}}
                            <div>
                                <label for="exampleFormControlTextarea1">Nomor Faktur</label>
                                <input name="faktur" class="form-control" type="text" placeholder="Faktur">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Hari</label>
                                <select name="hari" class="form-control" id="exampleFormControlSelect1">
                                <option value="Senin" >Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu" >Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at" >Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu" >Minggu</option>
                                </select>
                            </div> 
                            <div>
                                <label for="exampleFormControlTextarea1">Frame</label>
                                <input name="frame" class="form-control" type="text" placeholder="Frame">
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Lensa</label>
                                <input name="lensa" class="form-control" type="text" placeholder="Lensa">
                            </div>     
                            <div>
                                <label for="exampleFormControlTextarea1">ukuran</label>
                                <input name="ukuran" class="form-control" type="text" placeholder="Ukuran">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Stok / Gosok</label>
                                <select name="stokgosok" class="form-control" id="exampleFormControlSelect1">
                                <option value="Stok" >Stok</option>
                                <option value="Gosok">Gosok</option>
                                </select>
                            </div>    
                            <div>
                            <div>     
                            <div>
                                <label for="exampleFormControlTextarea1">Harga</label>
                                <input name="harga" class="form-control" type="number" placeholder="Harga">
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Sisa</label>
                                <input name="sisa" class="form-control" type="number" placeholder="Sisa">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">PJ</label>
                                <select name="pj" class="form-control" id="exampleFormControlSelect1">
                                <option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
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