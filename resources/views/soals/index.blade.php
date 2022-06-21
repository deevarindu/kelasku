@extends('layouts.main')

@section('container')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="h2 d-inline">Soal</h1>

  {{-- trigger modal --}}
  <div class="btn-group mr-2 p-1" data-bs-toggle="modal" data-bs-target="#modalTambahBab">
    <span class="btn btn-sm">
      <i class="bi bi-plus-circle-dotted text-light"></i>
      <span class="text-light">Tambah Soal</span>
    </span>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalTambahBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('soals.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <input type="hidden" class="form-control" id="id_sub_bab" name="id_sub_bab" value="{{ $id_sub_bab }}">
            <div class="mb-3">
              <label for="soal" class="form-label">Soal</label>
              <input id="soal" type="hidden" name="soal">
              <trix-editor input="soal"></trix-editor>
            </div>
            <div class="mb-3">
              <label for="jawaban" class="form-label">Jawaban</label>
              <input type="text" class="form-control" id="jawaban" name="jawaban">
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
        <th scope="col">No</th>
        <th scope="col">Soal</th>
        <th scope="col">Jawaban</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($soals as $s)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{!! $s->soal !!}</td>
          <td>{{ $s->jawaban }}</td>
          <td>
            <form action="{{ route('soals.destroy', $s) }}" method="POST" class="d-inline">
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
