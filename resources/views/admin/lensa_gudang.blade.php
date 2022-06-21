@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Lensa Kaca</h4>
      <div class="template-demo">
        <a href="/gudang/lensa/mccr" type="button" class="btn btn-primary btn-fw">MCCR</a>
        <a href="/gudang/lensa/grey" type="button" class="btn btn-primary btn-fw">SV. Oriental Flash Grey</a>
        <a href="/gudang/lensa/block" type="button" class="btn btn-primary btn-fw">SV. Oriental U.V Block</a>
        <a href="/gudang/lensa/flexi" type="button" class="btn btn-primary btn-fw">Progresive Flexi</a>
        <a href="/gudang/lensa/leinz" type="button" class="btn btn-primary btn-fw">SV Leinz</a>
        <a href="/gudang/lensa/kmccr" type="button" class="btn btn-primary btn-fw">K.MC.CR</a>
      </div>
    </div>
    <div class="card-body">
      <h4 class="card-title">Lensa Cermin</h4>
      <div class="template-demo">
        <a href="/gudang/lensa/mccr/kaca" type="button" class="btn btn-primary btn-fw">MCCR</a>
        <a href="/gudang/lensa/kmccr/kaca" type="button" class="btn btn-primary btn-fw">K.MC.CR</a>
      </div>
    </div>
</div>
@endsection