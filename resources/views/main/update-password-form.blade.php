@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Ganti Password</div>
    <div class="w-4/12 mx-auto">
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

  {{-- <form class="flex flex-col w-1/3 gap-6" action="{{ route('update-password') }}" method="post"> --}}

  @if (auth()->user()->role == 0)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('update-password-pengurus') }}" method="post">
  @endif

  @if (auth()->user()->role == 1)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('update-password-evaluator') }}" method="post">
  @endif

  @if (auth()->user()->role == 2)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('update-password-admin') }}" method="post">
  @endif

    @csrf
    <div class="flex flex-col w-full gap-2">
      <div>Password Sekarang</div>
        <input name="current_password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="current_password"
        type="password" placeholder="Password Sekarang" required autofocus>
    </div>
    <div class="flex flex-col w-full gap-2">
      <div>Password Baru</div>
        <input name="new_password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="new_password"
        type="password" placeholder="Password Baru" required autofocus>
    </div>
    <div class="flex flex-col w-full gap-2">
      <div>Konfirmasi Password Baru</div>
        <input name="new_password_confirmation" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="new_password_confirmation"
        type="password" placeholder="Password Baru" required autofocus>
    </div>

    <div class="flex flex-col justify-end gap-4">
      <button type="submit" class="button text-center w-40 mt-2">
        Ganti Password
      </button>
    </div>
  </form>

</div>

@endsection