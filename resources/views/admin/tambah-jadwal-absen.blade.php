@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Tambah Jadwal Absen</div>
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

      <div class="flex flex-col w-full gap-2">
        <p>Tanggal dan Waktu</p>
        <input class="p-2 rounded-md border-2" type="datetime-local" name="waktu" id="waktu">
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>Status</p>
        <input class="p-2 rounded-md border-2" type="checkbox" name="status" id="status" value="1">
      </div>
      
      <div class="flex justify-end gap-3">
        <button type="reset"
          class="rounded-md text-white bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Cancel</button>
        <button type="submit"
          class="text-white rounded-md bg-primary px-4 py-2 font-medium hover:opacity-80 duration-300">Submit</button>
      </div>
    </form>
    
</div>

@endsection