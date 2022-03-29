@extends('layouts.main')

@section('container')

<h1>Halaman Riwayat</h1>
   @foreach ($posts as $post)
   <article class="mb-5 border-bottom pb-4">
      <h5>Patient : <a href="/pasien/{{ $post->pasien->nama }}" class="text-decoration-none">{{ $post->pasien->nama  }}</a></h3>
      <h5>Doctor : <a href="/dokter/{{ $post->dokter->nama }}" class="text-decoration-none">{{ $post->dokter->nama  }}</a></h3>
      <h5>Condition :{{ $post->condition }}</h3>
      <h5>Temperature :{{ $post->temperature }}</h3>
   </article>
       
   @endforeach 
@endsection