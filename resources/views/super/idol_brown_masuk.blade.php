@extends('layouts.super')

@section('content')
    
@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Idol Brown Masuk</h4>
        <a href="/masuk/softlens/idolbrown/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Ukuran </th>
                <th> Tanggal Masuk </th>
                <th> Jumlah Masuk </th>
                <th> PJ </th>
                <th> Opsi </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($idol_brown_masuk as $masuk)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $masuk -> idol_brown -> ukuran}} </td>
               <td> {{ $masuk -> updated_at}} </td>
               <td> {{ $masuk -> jumlah_masuk }} </td>
               <td> {{ $masuk -> pj }} </td>
               <td> 
                    <a href="/idolbrownmasuk/{{$masuk->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                    <a href="/idolbrownmasuk/delete/{{$masuk->id}}" class="btn btn-danger btn-sm" role="button">
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
                    <form action="/super/barangmasuk/softlens/idolbrown/create" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ukuran Lensa</label>
                                <select name="idol_brown_id" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                                    @foreach ($idol_brown_array as $array)
                                        <option value="{{$array->id}}">{{$array->ukuran}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Jumlah Masuk</label>
                                <input name="jumlah_masuk" class="form-control" type="number" placeholder="Default input">
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