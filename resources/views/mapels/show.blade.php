@extends('layouts.main')

@section('container')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="h2 d-inline">{{ $mapel->nama_mapel }} Kelas {{ $mapel->kelas }}</h1>

  {{-- trigger modal --}}
  <div class="btn-group mr-2 p-1" data-bs-toggle="modal" data-bs-target="#modalTambahBab">
    <span class="btn btn-sm">
      <i class="bi bi-plus-circle-dotted text-light"></i>
      <span class="text-light">Tambah Data</span>
    </span>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalTambahBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Bab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('babs.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <input type="hidden" class="form-control" id="id_mapel" name="id_mapel" value="{{ $mapel->id }}">
            <div class="mb-3">
              <label for="judul_bab" class="form-label">Judul Bab</label>
              <input type="text" class="form-control" id="judul_bab" name="judul_bab">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="table-responsive col-lg-12">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Mapel</th>
        <th scope="col">Judul Bab</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($babs as $b)
      <tr>
        <th scope="row">{{ $b->id }}</th>
        <td>{{ $b->id_mapel }}</td>
        <td>{{ $b->judul_bab }}</td>
        <td>
          <a href="" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil-square"></i>
          </a>
          <form action="{{ route('babs.destroy', $b) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
              <i class="bi bi-trash"></i>
            </button>
          </form>
          <a href="{{ route('babs.show', $b) }}" class="btn btn-sm btn-success">Lihat Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
