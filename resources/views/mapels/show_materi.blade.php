@extends('layouts.main')

@section('container')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="h2 d-inline">{{ $subbab->judul_sub_bab }}</h1>

  <a href="{{ route('soals.show', $subbab->id) }}">
    <div class="btn-group mr-2 p-1 bg-success">
      <span class="btn btn-sm">
        <span class="text-light">Lihat Soal</span>
      </span>
    </div>
  </a>

</div>

<div>
  {!! $subbab->isi_sub_bab !!}
</div>

@endsection
