@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Tambah Pengurus</div>
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
   <form class="flex flex-col w-1/2 gap-4" action="{{ route('tambah-pengurus-store') }}" method="post">
    @csrf
      <div class="flex flex-col w-full gap-2">
        <p>Nama Lengkap</p>
        <input class="p-2 rounded-md border-2" type="text" name="name" id="name">
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>NPM</p>
        <input class="p-2 rounded-md border-2" type="text" name="npm" id="npm">
        @error('npm')
            <strong>{{ $message }}</strong>
        @enderror
      </div>

      <div class="flex flex-col w-full gap-2">
        <p for="email">Email</p>
        <input name="email" class="border border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base" id="email"
          type="email" placeholder="name@domain.com" required>
        @error('npm')
          <strong>{{ $message }}</strong>
        @enderror
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>Role</p>
        <select class="border border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base" name="role" id="role">
          <option value="0">Pengurus</option>
          <option value="1">Evaluator</option>
          <option value="2">Admin</option>
        </select>
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>Jabatan</p>
        <select class="border border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base" name="jabatan" id="jabatan">
          <option value="0">Staff</option>
          <option value="1">Kepala</option>
          <option value="2">Supervisor</option>
          <option value="3">Ketua</option>
        </select>
      </div>

      <div class="flex flex-col w-full gap-2">
        <p>Departemen</p>
        <select class="border border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base" name="departemen" id="departemen">
          <option value="0">Dept A</option>
          <option value="1">Dept B</option>
        </select>
      </div>
     
      <div class="flex flex-col w-full gap-2">
        <p>Bidang</p>
        <select class="border border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base" name="bidang" id="bidang">
          <option value="0">Dept A - Bidang A</option>
          <option value="1">Dept A - Bidang B</option>

          <option value="2">Dept B - Bidang C</option>
          <option value="3">Dept B - Bidang D</option>
          <option value="4">Dept B - Bidang E</option>
        </select>
      </div>
    
      <div class="flex flex-col w-full gap-2">
        <p>Password</p>
        <div class="border bg-white border-gray-300 rounded-lg py-3 px-4 text-sm md:text-base">Otomatis</div>
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