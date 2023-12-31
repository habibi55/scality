<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scality Deploy</title>

  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('/assets/images/web.png') }}">

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
</head>

<body class="font-poppins">
  <div class="flex h-screen">
    <form class="flex flex-col md:w-2/5 lg:w-3/8 w-full px-10 md:px-28 pb-8 md:pb-32 justify-center gap-4" action="{{route('login')}}" method="post">
      @csrf
      <img class="w-44 mx-auto" src="{{ asset('/assets/images/scality rebranding.png') }}" alt="Logo">

      @if(session('loginError'))
      <div class="w-full bg-white shadow-sm p-4 rounded-md drop-shadow-lg">
          <span class="text-red-500 font-light">{{ session('loginError') }}</span>
      </div>
      @endif

      <div class="flex flex-col">
        <label class="text-base" for="npm">NPM</label>
        <input name="npm" class="border border-gray-300 rounded-lg py-3 px-4 text-sm mt-2" id="npm" type="text"
          required autofocus>
      </div>

      <div class="flex flex-col">
        <label class="text-base" for="password">Password</label>
        <input name="password" class="border border-gray-300 rounded-lg py-3 px-4 text-sm mt-2" id="password"
          type="password" placeholder="At least 8 characters" required autofocus>
      </div>

      

      <button type="submit" class="button text-center w-full mt-2">
        Log In
      </button>
    </form>
    
    <div class="hidden md:flex w-3/5 lg:w-5/8 bg-primary_back rounded-3xl p-10 m-5 justify-center items-center">
      <img src="{{ asset('/assets/images/login.svg') }}" alt="">
    </div>
  </div>
</body>

</html>