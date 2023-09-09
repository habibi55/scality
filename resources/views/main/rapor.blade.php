@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Hasil Rapor Diri</div>
  </div>

  <div class="flex">
    <div class="w-1/3 rounded-xl bg-white">
      <div class="flex flex-col p-5 gap-2">
        <p>1. 15 Agustus</p>
        <div class="form-isi flex-col items-start">
          <img class="max-h-96 object-contain mb-2" src="img/1.png" alt="">
        </div>
      </div>
    </div>
  </div>

  {{-- Rapor Diri --}}
  <div class="w-4/12 rounded-xl bg-white p-4">
    <div class="text-2xl font-semibold">Hasil Rapor Diri</div>
      <ul class="list-decimal p-4">
        @foreach ($rapors as $rapor)
          <li>
            <p>Penilaian Januari</p>
            <p>{{ $rapor->receiver_name }}</p>
            <p>P1: {{ $rapor->p1 }}</p>
            <p>P2: {{ $rapor->p2 }}</p>

            @if (auth()->user()->role == 0)
              <a href="{{ route("export-rapor-pengurus") }}">Download PDF</a>
            @endif

            @if (auth()->user()->role == 1)
              <a href="{{ route("export-rapor-evaluator") }}">Download PDF</a>
            @endif

            @if (auth()->user()->role == 2)
              <a href="{{ route("export-rapor-admin") }}">Download PDF</a>
            @endif

          </li>
        @endforeach
      </ul>
  </div>
</div>

@endsection