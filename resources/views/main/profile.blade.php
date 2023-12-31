@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Update Profile</div>
  </div>

  {{-- <div class="flex justify-center">
    <div class="flex-row justify-center">
      <img class="object-cover h-40 w-40 bg-white rounded-lg" src="img/1.png" alt="">
      <div class="button text-center cursor-pointer text-white mt-6">
        Change
        Photo</div>
    </div>
  </div> --}}

  @if (auth()->user()->role == 0)
    <form class="flex flex-col justify-center items-center gap-6" action="{{ route('profile.update-pengurus', auth()->user()) }}" method="post">
  @endif

  @if (auth()->user()->role == 1)
    <form class="flex flex-col justify-center items-center gap-6" action="{{ route('profile.update-evaluator', auth()->user()) }}" method="post">
  @endif

  @if (auth()->user()->role == 2)
    <form class="flex flex-col justify-center items-center gap-6" action="{{ route('profile.update-admin', auth()->user()) }}" method="post">
  @endif
 
    @csrf
    @method('PUT')
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

    <div class="flex flex-col w-1/3 gap-6"> 
      <div class="flex flex-col w-full gap-2">
        <div>Full Name</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->name }}" type="text" name="name" id="name">
      </div>
      <div class="flex flex-col w-full gap-2">
        <div>NPM</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->npm }}" type="text" name="npm" id="npm">
      </div>
      <div class="flex flex-col w-full gap-2">
        <div>Email</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->email }}" type="text" name="email" id="email">
      </div>
    </div>

    <div class="flex flex-col justify-end gap-4">
      <button type="submit" class="button text-center w-40 mt-2">
        Update Profile
      </button>

      @if (auth()->user()->role == 0)
        <a class="button text-center w-40 mt-2" href="{{ route('profile-password-pengurus') }}">Ganti Password</a>
      @endif

      @if (auth()->user()->role == 1)
        <a class="button text-center w-40 mt-2" href="{{ route('profile-password-evaluator') }}">Ganti Password</a>
      @endif

      @if (auth()->user()->role == 2)
        <a class="button text-center w-40 mt-2" href="{{ route('profile-password-admin') }}">Ganti Password</a>
      @endif
    </div>
  </form>
</div>

@endsection