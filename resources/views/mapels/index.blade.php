@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 d-inline">Mata Pelajaran</h1>

  @if (session('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  {{-- trigger modal --}}
  <div class="btn-group mr-2 p-1" data-bs-toggle="modal" data-bs-target="#modalTambahMapel">
    <span class="btn btn-sm">
      <i class="bi bi-plus-circle-dotted text-light"></i>
      <span class="text-light">Tambah Data</span>
    </span>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalTambahMapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('mapels.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="number" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
              <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
              <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
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
        <th scope="col">Nama Mata Pelajaran</th>
        <th scope="col">Kelas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mapels as $m)
      <tr>
        <th scope="row">{{ $m->id }}</th>
        <td>{{ $m->nama_mapel }}</td>
        <td>{{ $m->kelas }}</td>
        <td>
          <a href="/mapels/1/edit" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil-square"></i>
          </a>
          <form action="" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
              <i class="bi bi-trash"></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
