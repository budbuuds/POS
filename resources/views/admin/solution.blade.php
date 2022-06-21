@extends('layouts.admin')

@section('content')

@php
    $no =1;
@endphp

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Stok Solution </h4>
        <a href="/gudang/softlens/solution/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual table-hover table-striped">
            <thead>
              <tr>
                <th> No. </th>
                <th> Ukuran </th>
                <th> Stok </th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data_solution as $data)

             <tr>
               <td> {{ $no++ }} </td>
               <td> {{ $data -> ukuran}} </td>
               <td> {{ $data -> stock}} </td>
             </tr>

             @endforeach 

            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection