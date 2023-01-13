@extends('layouts.dashboard')

@section('judul')
  <h1 class="h3 mb-4 text-gray-800">Home</h1>
@endsection

@section('konten')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>

  <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    Anda Berhasil Login !

    <br>
    <br>
    <br>
    <br>

    Nama Kelompok 6 : <br>
            1. Satria oldie versileno (8020200268) <br>
            2. Sulistia Ramadhani (8020200272) <br>
            3. Valenia Fawwas Shofie (8020200240) <br>
            4. One Sandy Sagilang (8020200135) <br>
            5. Adrian Isnathan Fortian Nazara (8020200098) <br>
            6. ichwan Nulkhakim (8020200062)</td>
    
  </div>
  
</div>
@endsection