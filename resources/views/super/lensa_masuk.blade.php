@extends('layouts.super')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Pilih Jenis</h4>
      <div class="template-demo">
        <a href="/super/barangmasuk/lensa/mccr" type="button" class="btn btn-primary btn-fw">MCCR</a>
        <a href="/super/barangmasuk/lensa/grey" type="button" class="btn btn-primary btn-fw">SV. Oriental Flash Grey</a>
        <a href="/super/barangmasuk/lensa/block" type="button" class="btn btn-primary btn-fw">SV. Oriental U.V Block</a>
        <a href="/super/barangmasuk/lensa/flexi" type="button" class="btn btn-primary btn-fw">Progresive Flexi</a>
        <a href="/super/barangmasuk/lensa/leinz" type="button" class="btn btn-primary btn-fw">SV Leinz</a>
        <a href="/super/barangmasuk/lensa/kmccr" type="button" class="btn btn-primary btn-fw">K.MC.CR</a>
      </div>
    </div>
    <div class="card-body">
      <h4 class="card-title">Lensa Kaca</h4>
      <div class="template-demo">
        <a href="/super/barangmasuk/lensa/mccr/kaca" type="button" class="btn btn-primary btn-fw">MCCR</a>
        <a href="/super/barangmasuk/lensa/kmccr/kaca" type="button" class="btn btn-primary btn-fw">K.MC.CR</a>
      </div>
    </div>
</div>
@endsection