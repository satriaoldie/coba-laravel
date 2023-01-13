@extends('layouts.dashboard')

@section('okoko')
  <h1 class="h3 mb-4 text-gray-800">SubKategori Barang</h1>
@endsection

@section('konten')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Table</h6>
  </div>

  <div class="card-body">

    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <a href="{{ route('create.sub-kategori') }}" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
      </span>
      <span class="text">Tambah Data</span>
    </a>

    <hr>

    <hr>

    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="10px" >No</th>
              <th >Nama Kategori</th>
              <th >Nama Sub-Kategori</th>
              <th width="300px">Aksi</th>
            </tr>
        </thead>
          <tbody>
            @foreach($subKategori as $data)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->kategori->nama_kategori_barang}}</td>
                <td>{{$data->nama_sub_kategori_brg}}</td>
                <td>
                  <a href="{{route('edit.sub-kategori',$data->id)}}" class="btn btn-info">Edit</a>

                  <form hidden action="{{ route('delete.sub-kategori', $data->id)}}" method="post" id="data-ke-{{ $data->id }}">
                    @csrf
                    @method('DELETE')
                    &nbsp;
                  </form>
                  <button class="btn btn-danger" onclick="deleteRow( {{ $data->id }} )">
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
            @endforeach
            
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Add SweetAlert 2 CDN -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Delete Row -->
<script>
  function deleteRow(id) {
    Swal.fire({
      title: 'Apakah Kamu Yakin?',
      text: "Untuk Menghapus Data!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Iya, Hapus!'
    }).then((result) => {
      if (result.isConfirmed) {
        $('#data-ke-'+id).submit()
      }
    })
  }
</script>

@endpush