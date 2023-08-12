@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-screen">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Edit Profile</div>
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

  <div class="flex justify-center">
    <div class="flex-row justify-center">
      <img class="object-cover h-40 w-40 bg-white rounded-lg" src="img/1.png" alt="">
      <div class="button text-center cursor-pointer text-white mt-6">
        Change
        Photo</div>
    </div>
  </div>

 
  <form class="flex flex-col gap-6" action="{{ route('profile.update', auth()->user()) }} " method="post">
    @csrf
    @method('PUT')
    @if(session('success'))
        {{-- <div class="border-2 rounded-md border-green-400 text-green-400 w-1/2">{{ session('success') }}</div> --}}
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


    <div class="flex flex-row w-full gap-6"> 
      <div class="flex flex-col w-full gap-2">
        <div>Full Name</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->name }}" type="text" name="name" id="name">
      </div>
      <div class="flex flex-col w-full gap-2">
        <div>NPM</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->npm }}" type="text" name="npm" id="npm">
      </div>
    </div>

    <div class="flex flex-row w-full gap-6">
      <div class="flex flex-col w-full gap-2">
        <div>Email</div>
        <input class="border border-gray-300 bg-white rounded-lg py-3 px-4 text-sm " value="{{ $profile->email }}" type="text" name="email" id="email">
      </div>
      <div class="flex flex-col w-full gap-2">
        <div>Password</div>
         <input name="new-password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm mt-2" id="new-password"
          type="password" placeholder="Password Baru" autofocus>
      </div>
    </div>

    <div class="flex justify-end">
      <button type="submit" class="button text-center w-40 mt-2">
        Update Profile
      </button>
    </div>
  </form>
</div>

@endsection