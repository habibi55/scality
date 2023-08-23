@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back h-screen p-6 gap-6 ml-72">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Pengisian Absen</div>
    <div class="w-6/12 mx-auto">
      <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
        <div class="grid place-items-center h-full w-12 text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>

        <input class="peer h-full w-full border-0 text-sm text-gray-700 pr-2" type="text" id="search"
          placeholder="Search something.." />
      </div>
    </div>
  </div>

  <div class="flex">
    <div class="w-1/3 rounded-xl bg-white">
      @if (auth()->user()->role == 0)
          <form class="flex flex-col p-5 gap-4" action="{{ route('store-absen-pengurus') }}" method="POST" enctype="multipart/form-data">
      @endif

      @if (auth()->user()->role == 1)
          <form class="flex flex-col p-5 gap-4" action="{{ route('store-absen-evaluator') }}" method="POST" enctype="multipart/form-data">
      @endif

      @if (auth()->user()->role == 2)
          <form class="flex flex-col p-5 gap-4" action="{{ route('store-absen-admin') }}" method="POST" enctype="multipart/form-data">
      @endif

        @csrf
        <div class="flex items-center">
          <div class="w-16">
            <svg enable-background="new 0 0 48 48" height="48px" id="Layer_1" version="1.1" viewBox="0 0 48 48"
              width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path clip-rule="evenodd"
                d="M46.627,21.895l-9.235,19.805c-0.928,1.989-3.291,2.85-5.28,1.922l-5.423-2.529  c-0.395-0.134-0.683-0.496-0.683-0.936c0-0.553,0.448-1,1-1c0.171,0,0.324,0.054,0.465,0.13l0.009-0.017l5.472,2.551  c0.994,0.464,2.177,0.034,2.64-0.961l9.235-19.805c0.464-0.995,0.033-2.176-0.961-2.64l-6.859-3.199c0,0-1.031-0.356-1.031-1.122  c0-0.552,0.447-1,1-1c0.177,0,0.335,0.059,0.479,0.139l7.251,3.381C46.693,17.542,47.554,19.906,46.627,21.895z M29.006,36h-24  c-2.209,0-4-1.791-4-4V8c0-2.209,1.791-4,4-4h24c2.209,0,4,1.791,4,4v24C33.006,34.209,31.215,36,29.006,36z M18.006,26v-1  l1.158-0.468c0.58-0.466,2.045-1.847,2.045-1.847l0.04-0.196c0.305-1.511,0.735-4.001,0.735-4.804c0-3.24-1.535-4.686-4.979-4.686  s-4.979,1.445-4.979,4.686c0,0.872,0.451,3.407,0.735,4.801l0.04,0.245c0.327,0.329,1.24,1.205,2.054,1.768L16.006,25v1  c-0.008-0.081,0,2,0,2c0,1.617-1.105,2.084-2.62,2.084c-0.001,0-0.002,0-0.003,0c-3.398,0.133-3.927,1.253-4.046,1.383  C9.23,31.626,9.113,33.648,8.998,34h16.018c-0.113-0.351-0.225-2.363-0.347-2.545c-0.047-0.056-0.493-1.219-3.963-1.369  c-1.594,0-2.7-0.468-2.7-2.086C18.006,28,18.024,25.859,18.006,26z M31.006,8c0-1.104-0.896-2-2-2h-24c-1.104,0-2,0.896-2,2v24  c0,1.104,0.896,2,2,2h1.805c0.349-0.644,0.533-3.148,0.891-3.686c0,0,0.623-2.038,5.529-2.229c0.5,0,0.75-0.313,0.75-0.793  c0-0.387,0-0.693,0-0.693c0-0.097-0.016-0.183-0.021-0.277c-0.436-0.347-0.539-0.479-1.295-1.109c0,0-1.674-1.096-1.861-2.327  c0,0-0.775-3.8-0.775-5.2c0-3.45,1.54-6.686,6.979-6.686c5.365,0,6.979,3.235,6.979,6.686c0,1.366-0.775,5.2-0.775,5.2  c-0.156,1.166-1.861,2.327-1.861,2.327c-0.678,0.629-0.985,0.894-1.374,1.148c-0.003,0.081-0.018,0.155-0.018,0.238  c0,0,0,0.307,0,0.693c0,0.479,0.25,0.793,0.75,0.793c4.98,0.214,5.604,2.229,5.604,2.229c0.357,0.537,0.542,3.042,0.892,3.686h1.804  c1.104,0,2-0.896,2-2V8z"
                fill-rule="evenodd" /></svg>
          </div>
          <div class="text-2xl font-semibold">Upload Photo</div>
        </div>

        <div class="flex flex-col gap-3">
            <input type="file" name="image" id="image" class="form-control" placeholder="image">
        </div>

        <div class="flex justify-end gap-3">
          <a type="button" href="dashboard.html"
            class="rounded-md text-white bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Cancel</a>
          <button type="submit"
            class="text-white rounded-md bg-primary px-4 py-2 font-medium hover:opacity-80 duration-300">Submit</button>
        </div>
      </form>
    </div>
  </div>

</div>

@endsection