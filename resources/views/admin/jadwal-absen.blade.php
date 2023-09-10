@extends('layouts.main')

@section('content')
<style>
  input:checked {
    background-color: #22c55e; /* bg-green-500 */
  }

  input:checked ~ span:last-child {
    --tw-translate-x: 1.75rem; /* translate-x-7 */
  }
</style>

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Jadwal Absen</div>
  </div>

  <a href="{{ route('tambah-jadwal-absen') }}"
    class="flex gap-2 py-3 w-64 bg-white rounded-lg justify-center items-center hover:bg-gray-100 hover:duration-200 shadow-md hover:cursor-pointer">
    <svg class="w-6" height="100%" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"
      viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink">
      <path
        d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
    </svg>
    <p class="font-semibold">Tambah Jadwal Absen</p>
  </a>

  <!-- Data Pengurus -->
  <div class="w-full mx-auto leading-normal">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
      <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr>
            <th data-priority="1">Judul</th>
            <th data-priority="2">Tempat</th>
            <th data-priority="3">Tanggal dan Waktu</th>
            <th data-priority="4">Status</th>
            <th data-priority="5">Action</th>

          </tr>
        </thead>
        <tbody class="divide-y-8">
          <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
          @foreach ($jadwal_absen as $jadwal)
            <tr>
              <td>{{ $jadwal->judul }}</td>
              <td>{{ $jadwal->tempat }}</td>
              <td>{{ \Carbon\Carbon::parse($jadwal->waktu)->isoFormat('dddd, D MMMM Y') }} ({{ \Carbon\Carbon::parse($jadwal->waktu)->format('H:i') }})</td>
              <td>
                @if ($jadwal->status == 1 )
                    ON
                @endif

                @if ($jadwal->status == 0)
                    OFF
                @endif
                
              </td>
              <td>
                <div class="flex gap-2">
                  <a href="{{ route('edit-jadwal-absen', $jadwal->id)}}" class="rounded-md bg-primary px-4 text-white">Edit</a>

                  <form action="{{ route('delete-jadwal-absen-destroy', $jadwal->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="rounded-md bg-red-500 px-4 text-white">Delete</button>
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
