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
         <form action="/tiara/{{$data->id}}/update" method="POST">
                     {{csrf_field()}}
                     <div>
                        <label for="exampleFormControlTextarea1">Nomor Faktur</label>
                        <input name="faktur" class="form-control" type="text" placeholder="{{$data->faktur}}" value="{{$data->faktur}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Hari</label>
                        <select name="hari" class="form-control" id="exampleFormControlSelect1" value="{{$data->hari}}">
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
                        <label for="exampleFormControlTextarea1">Tanggal</label>
                        <input name="updated_at" class="form-control" type="date" placeholder="{{$data->updated_at}}" value="{{$data->updated_at}}">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Frame</label>
                        <input name="frame" class="form-control" type="text" placeholder="{{$data->frame}}" value="{{$data->frame}}">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Lensa</label>
                        <input name="lensa" class="form-control" type="text" placeholder="{{$data->lensa}}" value="{{$data->lensa}}">
                    </div>     
                    <div>
                        <label for="exampleFormControlTextarea1">ukuran</label>
                        <input name="ukuran" class="form-control" type="text" placeholder="{{$data->ukuran}}" value="{{$data->ukuran}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Stok / Gosok</label>
                        <select name="stokgosok" class="form-control" id="exampleFormControlSelect1" value="{{$data->stokgosok}}">
                        <option value="Stok" >Stok</option>
                        <option value="Gosok">Gosok</option>
                        </select>
                    </div>    
                    <div>
                    <div>     
                    <div>
                        <label for="exampleFormControlTextarea1">Harga</label>
                        <input name="harga" class="form-control" type="number" placeholder="{{$data->harga}}" value="{{$data->harga}}">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Sisa</label>
                        <input name="sisa" class="form-control" type="number" placeholder="{{$data->sisa}}" value="{{$data->sisa}}">
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