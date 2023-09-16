@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Daftar Pengurus</div>
  </div>

  <a href="{{ route('tambah-pengurus') }}"
    class="flex gap-2 py-3 w-56 bg-white rounded-lg justify-center items-center hover:bg-gray-100 hover:duration-200 shadow-md hover:cursor-pointer">
    <svg class="w-6" height="100%" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"
      viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink">
      <path
        d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
    </svg>
    <p class="font-semibold">Tambah Pengurus</p>
  </a>

  <!-- Data Pengurus -->
  <div class="w-full mx-auto leading-normal">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
      <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr>
            <th data-priority="1">Name</th>
            <th data-priority="2">NPM</th>
            <th data-priority="3">Jabatan</th>
            <th data-priority="4">Departemen</th>
            <th data-priority="5">Bidang</th>
            <th data-priority="6">Role</th>
            <th class="w-1/5" data-priority="7">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y-8">
          <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
          @foreach ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>

                <td>{{ $user->npm }}</td>

                <td>
                  @if ($user->jabatan == 0)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-amber-300">Staff</div>
                    </div>
                  @endif
                  @if ($user->jabatan == 1)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-amber-500">Kepala</div>
                    </div>
                  @endif
                  @if ($user->jabatan == 2)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-amber-700">Supervisor</div>
                    </div>
                  @endif
                  @if ($user->jabatan == 3)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-amber-900">Ketua</div>
                    </div>
                  @endif
                </td>

                <td>
                  @if ($user->departemen === 0)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-stone-500">Departemen A</div>
                    </div>
                  @endif
                  @if ($user->departemen === 1)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-stone-500">Departemen B</div>
                    </div>
                  @endif

                  @if (is_null($user->departemen))
                    
                  @endif
                </td>

                <td>
                  @if ($user->bidang === 0)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-purple-500">Bidang A</div>
                    </div>
                  @endif
                  @if ($user->bidang === 1)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-purple-500">Bidang B</div>
                    </div>
                  @endif
                  @if ($user->bidang === 2)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-purple-500">Bidang C</div>
                    </div>
                  @endif
                  @if ($user->bidang === 3)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-purple-500">Bidang D</div>
                    </div>
                  @endif
                  @if ($user->bidang === 4)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-purple-500">Bidang E</div>
                    </div>
                  @endif
                   @if (is_null($user->bidang))
                    
                  @endif
                </td>

                <td>
                  @if ($user->role == 0)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-stone-500">Pengurus</div>
                    </div>
                  @endif
                  @if ($user->role == 1)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-sky-500">Evaluator</div>
                    </div>
                  @endif
                  @if ($user->role == 2)
                    <div class="flex">
                      <div class="px-3 text-center text-white rounded-2xl bg-green-500">Admin</div>
                    </div>
                  @endif
                </td>

                <td>
                  <div class="flex gap-2">
                    <a href="{{ route('pengurus.edit', $user->id)}}" class="rounded-md bg-primary px-4 text-white">Edit</a>

                    <form action="{{ route('delete-pengurus-destroy', $user->id) }}" method="post">
                      @csrf
                      @method('DELETE')

                      @if ($user->role == 2)
                          
                      @else
                        <button type="submit" class="rounded-md bg-red-500 px-4 text-white">Delete</button>
                      @endif
                      </form>
                    </div>
                </td>
                    
                  
                </tr>
          @endforeach

        </tbody>

      </table>


    </div>
  </div>
</div>

@endsection