@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pilih Kategori</h4>
            <div class="template-demo">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Softlens Idol </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                        <h6 class="dropdown-header">Jenis</h6>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/idolblack">Black</a>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/idolgrey">Grey</a>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/idolbrown">Brown</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Softlens Celebrity </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                        <h6 class="dropdown-header">Jenis</h6>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/celebrityblack">Black</a>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/celebritygrey">Grey</a>
                        <a class="dropdown-item" href="/super/barangkeluar/softlens/celebritybrown">Brown</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="/super/barangkeluar/softlens/solution" type="button" class="btn btn-outline-primary btn-fw">Solution</a>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>    
@endsection