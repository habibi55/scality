@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Ganti Password</div>
  </div>


  @if (auth()->user()->role == 0)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('profile-update-password-pengurus', auth()->user()) }}" method="post"> 
  @endif

  @if (auth()->user()->role == 1)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('profile-update-password-evaluator', auth()->user()) }}" method="post">
  @endif

  @if (auth()->user()->role == 2)
    <form class="flex flex-col w-1/3 gap-6" action="{{ route('profile-update-password-admin', auth()->user()) }}" method="post">
  @endif

    @csrf
    @method('PUT')
    @if (session('status'))
        <div class="alert alert-success"> {{ session('status')}} </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger"> {{ session('error')}} </div>
    @endif

    @if(session('success'))
      <div class="px-4 py-3 w-5/12 bg-green-400 text-white flex justify-between rounded">
          <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-6" viewBox="0 0 20 20" fill="currentColor">
                  <path
                      d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"
                  />
              </svg>
              <p>{{ session('success') }}</p>
          </div>
      </div>
    @endif

    {{-- <div class="flex">  
      <div>Old Password</div>
      <input type="password" name="old_password" id="oldPassword">
    </div>

    <div class="flex">  
      <div>New Password</div>
      <input type="password" name="new_password" id="new_password">
    </div>

    <div class="flex">  
      <div>Repeat Password</div>
      <input type="password" name="repeat_password" id="repeatPassword">
    </div> --}}

    <div class="flex flex-col w-full gap-2">
      <div>Password Sekarang</div>
        <input name="new_password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="new_password"
        type="password" placeholder="Password Sekarang" required autofocus>
    </div>

    <div>
      <button class="button text-center w-40 mt-2" type="submit">Update Password</button>
    </div>

    {{-- <div class="flex flex-col w-full gap-2">
      <div>Password Sekarang</div>
        <input name="current_password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="current_password"
        type="password" placeholder="Password Sekarang"  >
    </div>
    <div class="flex flex-col w-full gap-2">
      <div>Password Baru</div>
        <input name="new_password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="new_password"
        type="password" placeholder="Password Baru"  >
    </div>
    <div class="flex flex-col w-full gap-2">
      <div>Konfirmasi Password Baru</div>
        <input name="new_password_confirmation" class="border border-gray-300 rounded-lg py-3 px-4 text-sm" id="new_password_confirmation"
        type="password" placeholder="Konfirmasi Password Baru"  >
    </div>

    <div class="flex flex-col justify-end gap-4">
      <button type="submit" class="button text-center w-40 mt-2">
        Ganti Password
      </button>
    </div> --}}

  </form>

</div>

@endsection