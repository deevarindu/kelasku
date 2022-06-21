@extends('layouts.main')

@section('container')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Siswa</h1>

  {{-- trigger modal --}}
  <div class="btn-group mr-2 p-1" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
    <span class="btn btn-sm">
      <i class="bi bi-plus-circle-dotted text-light"></i>
      <span class="text-light">Tambah Data</span>
    </span>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('siswas.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="number" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
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
        <th scope="col">Nama Siswa</th>
        <th scope="col">Kelas</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $s)
      <tr>
        <th scope="row">{{ $s->id }}</th>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->email }}</td>
        <td>
          <a href="" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil-square"></i>
          </a>
          <form action="{{ route('siswas.destroy', $s) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
              <i class="bi bi-trash"></i>
            </button>
          </form>
          <a href="" class="btn btn-sm btn-success">Lihat Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
