@extends('layouts.admin')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Stok Frame </h4>
        <a href="/barangkeluar/frame/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <button type="button" class="btn btn-info btn-fw" data-toggle="modal" data-target="#exampleModal">
          TAMBAH 
         </button>
  
          <!-- Import Excel -->
          <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form method="post" action="/gudang/softlens/celebrityblack/import_excel" enctype="multipart/form-data">
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
                <th> Merek </th>
                <th> Warna </th>
                <th> Jumlah </th>
                <th> Tanggal </th>
                <th> PJ </th>
                <th> Tujuan </th>

              </tr>
            </thead>
            <tbody>

             @foreach ($frame_keluar as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $data -> frame -> merek}} </td>
               <td> {{ $data -> warna}} </td>
               <td> {{ $data -> jumlah_keluar}} </td>
               <td> {{ $data -> created_at}} </td>
               <td> {{ $data -> pj}} </td>
               <td> {{ $data -> tujuan -> toko }} </td>


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
                          <form action="/barangkeluar/frame/create" method="POST">
                              {{csrf_field()}}
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Merek</label>
                                <select name="frame_id" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                                    @foreach ($frame_array as $array)
                                        <option value="{{$array->id}}">{{$array->merek}}</option>
                                    @endforeach
                                </select>
                            </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Warna</label>
                                    <input name="warna" class="form-control" type="text" placeholder="Warna">
                                 </div>
                                 <div class="form-group">
                                  <label for="exampleFormControlSelect1">Jumlah</label>
                                  <input name="jumlah_keluar" class="form-control" type="number" placeholder="Jumlah">
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