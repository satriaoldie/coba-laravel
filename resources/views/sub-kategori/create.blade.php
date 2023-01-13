@extends('layouts.dashboard')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('Nama_Produk')
  <h1 class="h3 mb-4 text-gray-800">Sub Kategori</h1>
@endsection

@section('konten')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Sub Kategori</h6>
  </div>

  <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    
    <form action="{{ route('store.sub-kategori') }}" method="post">
        @csrf
  
        <div class="form-group row">
            <label for="nama_kategori_barang" class="col-sm-2 col-form-label">Kategori Barang</label>
    
            <div class="col-sm-10">
              <select name="id_kategori" id="" class="form-control">
                <option value=""> Pilih Kategori Barang</option>
                @foreach($kategori as $data)
                    <option value="{{$data->id}}">{{$data->nama_kategori_barang}}</option>
                @endforeach
              </select>
    
              @error('nama_kategori_barang')
                <div class="invalid-feedback">
                  <strong>{{ $message }}</strong>
                </div>
              @enderror
            </div>
            
          </div>

        <div class="form-group row">
            <label for="nama_sub_kategori_brg" class="col-sm-2 col-form-label">Nama SubKategori </label>
    
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_sub_kategori_brg') is-invalid @enderror" name="nama_sub_kategori_brg" value="{{ old('nama_sub_kategori_brg') }}" required>
    
              @error('nama_sub_kategori_brg')
                <div class="invalid-feedback">
                  <strong>{{ $message }}</strong>
                </div>
              @enderror
            </div>
            
          </div>
  
  
        <button type="submit" class="btn btn-success">
          Simpan
        </button>
  
      </form>

  </div>
</div>
@endsection

