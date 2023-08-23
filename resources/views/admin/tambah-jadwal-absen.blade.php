@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Tambah Jadwal Absen</div>
    <div class="w-4/12 mx-auto">
      <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
        <div class="grid place-items-center h-full w-12 text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>

        <input class="w-full border-0 focus:outline-0 text-sm text-gray-700 pr-2" type="text" id="search"
          placeholder="Search something.." />
      </div>
    </div>
  </div>

  <!-- Data Diri -->
     <form class="flex flex-col w-1/2 gap-4" action="{{ route('tambah-jadwal-absen') }}" method="post">
      @csrf
      <div class="flex flex-col w-full gap-2">
        <p>Judul</p>
        <input class="p-2 rounded-md border-2" type="text" name="judul" id="judul">
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>Tempat</p>
        <input class="p-2 rounded-md border-2" type="text" name="tempat" id="tempat">
      </div>
      
      <div class="flex justify-end gap-3">
        <a type="button" href="{{ route('data-pengurus') }}"
          class="rounded-md text-white bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Cancel</a>
        <button type="submit"
          class="text-white rounded-md bg-primary px-4 py-2 font-medium hover:opacity-80 duration-300">Submit</button>
      </div>
    </form>
    
</div>

@endsection