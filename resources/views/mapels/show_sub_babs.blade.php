@extends('layouts.main')

@section('container')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="h2 d-inline">{{ $bab->judul_bab }}</h1>

  {{-- trigger modal --}}
  <div class="btn-group mr-2 p-1" data-bs-toggle="modal" data-bs-target="#modalTambahBab">
    <span class="btn btn-sm">
      <i class="bi bi-plus-circle-dotted text-light"></i>
      <span class="text-light">Tambah Data</span>
    </span>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalTambahBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Bab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('subbabs.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <input type="hidden" class="form-control" id="id_bab" name="id_bab" value="{{ $bab->id }}">
            <div class="mb-3">
              <label for="judul_sub_bab" class="form-label">Judul Sub Bab</label>
              <input type="text" class="form-control" id="judul_sub_bab" name="judul_sub_bab">
            </div>
            <div class="mb-3">
              <label for="isi_sub_bab" class="form-label">Materi</label>
              <input id="isi_sub_bab" type="hidden" name="isi_sub_bab">
              <trix-editor input="isi_sub_bab"></trix-editor>
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
        <th scope="col">ID Bab</th>
        <th scope="col">Judul Sub Bab</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($subbabs as $sb)
      <tr>
        <th scope="row">{{ $sb->id }}</th>
        <td>{{ $sb->id_bab }}</td>
        <td>{{ $sb->judul_sub_bab }}</td>
        <td>
          <a href="" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil-square"></i>
          </a>
          <form action="{{ route('subbabs.destroy', $sb) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
              <i class="bi bi-trash"></i>
            </button>
          </form>
          <a href="{{ route('subbabs.show', $sb) }}" class="btn btn-sm btn-success">Lihat Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
