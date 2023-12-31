@extends('layouts.main')

@section('content')

<!-- Responsive Bar -->
<div class="w-full md:hidden text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
  <div x-data="{ open: false }" class="flex flex-col px-4 ">
    <div class="p-4 flex flex-row items-center justify-between">
      <a href="home.html">
        <img class="w-32" src="../../src/img/scality rebranding.png" alt="Logo">
      </a>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>

    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 hidden">
      <a class="px-4 py-2 text-sm font-semibold rounded-lg hover:bg-primary_back" href="home.html">Home</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-primary_back focus:bg-gray-200 focus:outline-none focus:shadow-outline"
        href="rapor.html">Rapor Diri</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-primary_back focus:bg-gray-200 focus:outline-none focus:shadow-outline"
        href="profile.html">Profile</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-primary_back focus:bg-gray-200 focus:outline-none focus:shadow-outline"
        href="login.html">Logout</a>
    </nav>
  </div>
</div>

<!-- Main -->
<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 min-h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Home</div>
  </div>

  <div class="flex w-full gap-4">
    {{-- Absen dan Rapat --}}
    <div class="flex flex-col w-8/12 gap-4">
      {{-- Rapat --}}
      <div class="rounded-xl bg-white">
          @if ($jadwal_absen->isEmpty())
            <div class="flex flex-col h-48 bg-white rounded-xl justify-center items-center text-3xl font-bold">
              <svg class="h-20 stroke-2 stroke-black fill-primary" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                .st0{fill-rule:evenodd;clip-rule:evenodd;}
                .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2B87FE;}
                </style><g id="XMLID_10_"><path class="st0" d="M96.2,59.8l4.5-4.5c6.2-6.2,16.4-6.2,22.6,0c6.2,6.2,6.2,16.4,0,22.6l-25.5,25.5h0.5   c4.6,0,8.4,3.8,8.4,8.4v7.8c0,4.6-3.8,8.4-8.4,8.4H15.2c-4.6,0-8.4-3.8-8.4-8.4v-7.8c0-4.1,3-7.6,6.9-8.3l0-0.1V41.2   C13.7,18.5,32.3,0,55,0c22.7,0,41.2,18.5,41.2,41.2V59.8L96.2,59.8z M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0   c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72   c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L37.2,72z M57.2,72c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18   c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L57.2,72z M15.2,107.3c-2.4,0-4.4,2-4.4,4.4v7.8c0,2.4,2,4.4,4.4,4.4h83.1c2.4,0,4.4-2,4.4-4.4   v-7.8c0-2.4-2-4.4-4.4-4.4H15.2z" id="XMLID_15_"/><path class="st1" d="M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2   C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72   c0-1.1,0.9-2,2-2C36.3,70,37.2,70.9,37.2,72L37.2,72z M57.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72c0-1.1,0.9-2,2-2   C56.3,70,57.2,70.9,57.2,72z" id="XMLID_11_"/></g>
              </svg>
              <p>Belum ada rapat saat ini</p>
            </div>
          @else
            @foreach ($jadwal_absen as $jadwal)
              @if ($jadwal->status == 1)
                <div class="flex flex-col p-5 gap-2">
                  <div class="flex items-center gap-3">
                    <div class="w-16">
                      <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: #4c241d;
                            }

                            .cls-2 {
                              fill: #d2ddff;
                            }

                            .cls-3 {
                              fill: #c1dbdc;
                            }

                            .cls-3,
                            .cls-4,
                            .cls-5,
                            .cls-6,
                            .cls-7,
                            .cls-8,
                            .cls-9 {
                              stroke: #4c241d;
                              stroke-linecap: round;
                              stroke-linejoin: round;
                              stroke-width: 2px;
                            }

                            .cls-4 {
                              fill: #6b4f5b;
                            }

                            .cls-5 {
                              fill: #fff;
                            }

                            .cls-6 {
                              fill: #b5a19c;
                            }

                            .cls-7 {
                              fill: #ffe8dc;
                            }

                            .cls-8 {
                              fill: none;
                            }

                            .cls-9 {
                              fill: #fc8c29;
                            }
                          </style>
                        </defs>
                        <g id="e-meet">
                          <circle class="cls-1" cx="17.8333" cy="11.0346" r="1.0691" />
                          <circle class="cls-2" cx="32.5" cy="31.5" r="21.5" />
                          <path class="cls-3"
                            d="M41.163,19H56.837A3.163,3.163,0,0,1,60,22.163V53a0,0,0,0,1,0,0H38a0,0,0,0,1,0,0V22.163A3.163,3.163,0,0,1,41.163,19Z" />
                          <path class="cls-4"
                            d="M38,53H60a0,0,0,0,1,0,0v2.837A3.163,3.163,0,0,1,56.837,59H41.163A3.163,3.163,0,0,1,38,55.837V53A0,0,0,0,1,38,53Z" />
                          <path class="cls-3"
                            d="M9.163,19H24.837A3.163,3.163,0,0,1,28,22.163V53a0,0,0,0,1,0,0H6a0,0,0,0,1,0,0V22.163A3.163,3.163,0,0,1,9.163,19Z" />
                          <path class="cls-5"
                            d="M6,53H28a0,0,0,0,1,0,0v2.837A3.163,3.163,0,0,1,24.837,59H9.163A3.163,3.163,0,0,1,6,55.837V53A0,0,0,0,1,6,53Z" />
                          <circle class="cls-1" cx="17" cy="56" r="1" />
                          <path class="cls-6"
                            d="M22,46h3V38.3333A3.3333,3.3333,0,0,0,21.6667,35H12.3334A3.3334,3.3334,0,0,0,9,38.3333V53H22Z" />
                          <path class="cls-7"
                            d="M17,24h0a4,4,0,0,1,4,4v7a0,0,0,0,1,0,0H17.5184A4.5184,4.5184,0,0,1,13,30.4816V28A4,4,0,0,1,17,24Z" />
                          <line class="cls-8" x1="12" x2="12" y1="41" y2="53" />
                          <polyline class="cls-6" points="22 41.584 22 47 29 47 29 44 25 44 25 39.973" />
                          <path class="cls-7"
                            d="M29,44h2.5A1.5,1.5,0,0,1,33,45.5v0A1.5,1.5,0,0,1,31.5,47H29a0,0,0,0,1,0,0V44A0,0,0,0,1,29,44Z" />
                          <path class="cls-9"
                            d="M44,46H41V38.3333A3.3333,3.3333,0,0,1,44.3333,35h9.3333A3.3334,3.3334,0,0,1,57,38.3333V53H44Z" />
                          <path class="cls-7"
                            d="M49.5184,24H53a0,0,0,0,1,0,0v7a4,4,0,0,1-4,4h0a4,4,0,0,1-4-4V28.5184A4.5184,4.5184,0,0,1,49.5184,24Z"
                            transform="translate(98 59) rotate(180)" />
                          <line class="cls-8" x1="54" x2="54" y1="41" y2="53" />
                          <polyline class="cls-9" points="44 41.584 44 47 37 47 37 44 41 44 41 39.973" />
                          <path class="cls-7"
                            d="M33,44h2.5A1.5,1.5,0,0,1,37,45.5v0A1.5,1.5,0,0,1,35.5,47H33a0,0,0,0,1,0,0V44A0,0,0,0,1,33,44Z"
                            transform="translate(70 91) rotate(-180)" />
                          <line class="cls-8" x1="44.5858" x2="47.4142" y1="11.5858" y2="14.4142" />
                          <line class="cls-8" x1="47.4142" x2="44.5858" y1="11.5858" y2="14.4142" />
                          <circle class="cls-1" cx="49" cy="56" r="1" />
                          <circle class="cls-8" cx="34.5" cy="10.5" r="2.5" />
                        </g>
                      </svg>
                    </div>
                    <div class="text-2xl font-semibold">{{ $jadwal->judul }}</div>
                  </div>

                  <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-1">
                      <div class="font-medium">Tempat</div>
                      <div class="flex items-center gap-1">
                        <svg class="w-9" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                          <title />
                          <g data-name="1" id="_1">
                            <path
                              d="M257,450.17a15,15,0,0,1-7.32-1.91A282.08,282.08,0,0,1,105,201.8q0-3.08.06-6.14c1-45.48,17.93-83.78,49-110.75C181.54,61.11,218.09,48,257,48s75.45,13.11,102.9,36.91c31.1,27,48.06,65.27,49,110.75h0c0,2,.07,4.09.07,6.14a281.8,281.8,0,0,1-40,144.87A283.7,283.7,0,0,1,264.32,448.26,15,15,0,0,1,257,450.17ZM257,78c-31.69,0-61.26,10.5-83.25,29.58-24.53,21.26-37.91,51.94-38.69,88.72,0,1.82-.06,3.66-.06,5.5a252.06,252.06,0,0,0,122,216,253.66,253.66,0,0,0,86.28-86.58A251.83,251.83,0,0,0,379,201.8c0-1.84,0-3.68-.06-5.5-.79-36.78-14.17-67.46-38.69-88.72C318.25,88.5,288.69,78,257,78Z" />
                            <path
                              d="M257.39,296.6a94.32,94.32,0,1,1,94.32-94.32A94.42,94.42,0,0,1,257.39,296.6Zm0-158.63a64.32,64.32,0,1,0,64.32,64.31A64.39,64.39,0,0,0,257.39,138Z" />
                          </g>
                        </svg>
                        <div class="text-lg font-semibold">{{ $jadwal->tempat }}</div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-1">
                      <div class="font-medium">Tanggal</div>
                      <div class="flex items-center gap-1">
                        <svg class="w-9" enable-background="new 0 0 80 80" height="100%" id="Icons" version="1.1"
                          viewBox="0 0 80 80" width="80px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g>
                            <path
                              d="M61,20.047h-6V15h-5v5.047H30V15h-5v5.047h-5.919c-2.209,0-4,1.791-4,4V61c0,2.209,1.791,4,4,4H61c2.209,0,4-1.791,4-4   V24.047C65,21.838,63.209,20.047,61,20.047z M60,60H20V35h40V60z M60,30H20v-5h40V30z" />
                            <rect height="5" width="5" x="38" y="40" />
                            <rect height="5" width="5" x="48" y="40" />
                            <rect height="5" width="5" x="38" y="50" />
                            <rect height="5" width="5" x="28" y="50" />
                          </g>
                        </svg>
                        <div class="text-lg font-semibold">{{ \Carbon\Carbon::parse($jadwal->waktu)->isoFormat('dddd, D MMMM Y') }}</div>
                        
                      </div>
                    </div>

                    <div class="flex flex-col gap-1">
                      <div class="font-medium">Waktu</div>
                      <div class="flex items-center gap-1">
                        <svg class="w-6 mx-1 ml-1.5" height="100%" version="1.1" viewBox="0 0 20 20" width="100%"
                          xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title />
                          <desc />
                          <defs />
                          <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                            <g fill="#000000" fill-opacity="0.9" id="Icons-Device" transform="translate(-44.000000, 0.000000)">
                              <g id="access-time" transform="translate(44.000000, 0.000000)">
                                <path
                                  d="M10,0 C4.5,0 0,4.5 0,10 C0,15.5 4.5,20 10,20 C15.5,20 20,15.5 20,10 C20,4.5 15.5,0 10,0 L10,0 Z M10,18 C5.6,18 2,14.4 2,10 C2,5.6 5.6,2 10,2 C14.4,2 18,5.6 18,10 C18,14.4 14.4,18 10,18 Z M10.5,5 L9,5 L9,11 L14.2,14.2 L15,12.9 L10.5,10.2 L10.5,5 Z"
                                  id="Shape" />
                              </g>
                            </g>
                          </g>
                        </svg>
                        <div class="text-lg font-semibold">{{ \Carbon\Carbon::parse($jadwal->waktu)->format('H:i') }}</div>
                      </div>
                    </div>

                    <div class="flex flex-row w-full mt-4">
                      @if (auth()->user()->role == 0)
                        <a href="{{ route('absen-pengurus') }}" class="w-44 bg-primary hover:bg-primary_hover duration-150 text-white text-center rounded-md cursor-pointer py-2">
                      @endif

                      @if (auth()->user()->role == 1)
                        <a href="{{ route('absen-evaluator') }}" class="w-44 bg-primary hover:bg-primary_hover duration-150 text-white text-center rounded-md cursor-pointer py-2">
                      @endif

                      @if (auth()->user()->role == 2)
                        <a href="{{ route('absen-admin') }}" class="w-44 bg-primary hover:bg-primary_hover duration-150 text-white text-center rounded-md cursor-pointer py-2">
                      @endif

                        Absen
                      </a>
                    </div>
                  </div>
                </div>
              @else
                <div class="flex flex-col h-40 bg-white rounded-xl justify-center items-center text-3xl font-bold">
                  <svg class="h-20 stroke-2 stroke-black fill-primary" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                    .st0{fill-rule:evenodd;clip-rule:evenodd;}
                    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2B87FE;}
                    </style><g id="XMLID_10_"><path class="st0" d="M96.2,59.8l4.5-4.5c6.2-6.2,16.4-6.2,22.6,0c6.2,6.2,6.2,16.4,0,22.6l-25.5,25.5h0.5   c4.6,0,8.4,3.8,8.4,8.4v7.8c0,4.6-3.8,8.4-8.4,8.4H15.2c-4.6,0-8.4-3.8-8.4-8.4v-7.8c0-4.1,3-7.6,6.9-8.3l0-0.1V41.2   C13.7,18.5,32.3,0,55,0c22.7,0,41.2,18.5,41.2,41.2V59.8L96.2,59.8z M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0   c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72   c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L37.2,72z M57.2,72c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18   c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L57.2,72z M15.2,107.3c-2.4,0-4.4,2-4.4,4.4v7.8c0,2.4,2,4.4,4.4,4.4h83.1c2.4,0,4.4-2,4.4-4.4   v-7.8c0-2.4-2-4.4-4.4-4.4H15.2z" id="XMLID_15_"/><path class="st1" d="M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2   C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72   c0-1.1,0.9-2,2-2C36.3,70,37.2,70.9,37.2,72L37.2,72z M57.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72c0-1.1,0.9-2,2-2   C56.3,70,57.2,70.9,57.2,72z" id="XMLID_11_"/></g>
                  </svg>
                  <p>Belum ada rapat saat ini</p>
                  
                </div>
              @endif
            @endforeach
          @endif
      </div>

      {{-- Hasil Absen --}}
      <div class="flex flex-col w-full rounded-xl bg-white">
        @if ($absen->isEmpty())
          <div class="flex flex-col p-5 gap-2">
            <div class="flex items-center gap-3">
              <div class="w-10">
                <svg class="fill-primary" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32s-14.33 32-32 32S160 113.7 160 96S174.3 64 192 64zM282.9 262.8l-88 112c-4.047 5.156-10.02 8.438-16.53 9.062C177.6 383.1 176.8 384 176 384c-5.703 0-11.25-2.031-15.62-5.781l-56-48c-10.06-8.625-11.22-23.78-2.594-33.84c8.609-10.06 23.77-11.22 33.84-2.594l36.98 31.69l72.52-92.28c8.188-10.44 23.3-12.22 33.7-4.062C289.3 237.3 291.1 252.4 282.9 262.8z" />
                </svg>
              </div>
              <div class="text-2xl font-semibold">Hasil Absen</div>        
            </div>  
          </div> 

          <div class="flex flex-col w-full h-48 bg-white rounded-xl justify-center items-center text-3xl font-bold">
            <svg class="h-20 stroke-2 stroke-black fill-primary" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
              .st0{fill-rule:evenodd;clip-rule:evenodd;}
              .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2B87FE;}
              </style><g id="XMLID_10_"><path class="st0" d="M96.2,59.8l4.5-4.5c6.2-6.2,16.4-6.2,22.6,0c6.2,6.2,6.2,16.4,0,22.6l-25.5,25.5h0.5   c4.6,0,8.4,3.8,8.4,8.4v7.8c0,4.6-3.8,8.4-8.4,8.4H15.2c-4.6,0-8.4-3.8-8.4-8.4v-7.8c0-4.1,3-7.6,6.9-8.3l0-0.1V41.2   C13.7,18.5,32.3,0,55,0c22.7,0,41.2,18.5,41.2,41.2V59.8L96.2,59.8z M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0   c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72   c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L37.2,72z M57.2,72c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v18   c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V72L57.2,72z M15.2,107.3c-2.4,0-4.4,2-4.4,4.4v7.8c0,2.4,2,4.4,4.4,4.4h83.1c2.4,0,4.4-2,4.4-4.4   v-7.8c0-2.4-2-4.4-4.4-4.4H15.2z" id="XMLID_15_"/><path class="st1" d="M17.7,103.3h74.5L120.5,75c4.7-4.7,4.7-12.3,0-17l0,0c-4.7-4.7-12.3-4.7-17,0L92.2,69.4V41.2   C92.2,20.8,75.4,4,55,4l0,0C34.5,4,17.7,20.8,17.7,41.2V103.3L17.7,103.3z M37.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72   c0-1.1,0.9-2,2-2C36.3,70,37.2,70.9,37.2,72L37.2,72z M57.2,72v18c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2V72c0-1.1,0.9-2,2-2   C56.3,70,57.2,70.9,57.2,72z" id="XMLID_11_"/></g>
            </svg>
            <p>Belum ada pengisian absen</p>
          </div>
        @else
          <div class="flex flex-col p-5 gap-2">
            <div class="flex items-center gap-3">
              <div class="w-10">
                <svg class="fill-primary" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32s-14.33 32-32 32S160 113.7 160 96S174.3 64 192 64zM282.9 262.8l-88 112c-4.047 5.156-10.02 8.438-16.53 9.062C177.6 383.1 176.8 384 176 384c-5.703 0-11.25-2.031-15.62-5.781l-56-48c-10.06-8.625-11.22-23.78-2.594-33.84c8.609-10.06 23.77-11.22 33.84-2.594l36.98 31.69l72.52-92.28c8.188-10.44 23.3-12.22 33.7-4.062C289.3 237.3 291.1 252.4 282.9 262.8z" />
                </svg>
              </div>
              <div class="text-2xl font-semibold">Hasil Absen</div>        
            </div>   

            <div class="flex flex-col items-start p-4">
              <ul class="list-decimal flex flex-col gap-4">
                @foreach ($absen as $item)
                <li>
                  <div class="font-semibold">Absen {{ $item->judul }} - {{ \Carbon\Carbon::parse($item->waktu)->isoFormat('dddd, D MMMM Y') }}</div>
                  <div>Waktu Absen : {{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }}</div>
                  <img class="max-h-80 object-contain mb-2" src="{{ asset('storage/images/' . $item->image) }}" width="500px">
                </li>               
                @endforeach
              </ul>
            </div>
          </div>
        @endif
      </div>
    </div>

    {{-- Rapor Diri --}}
    <div class="w-4/12 rounded-xl bg-white p-4 h-full">
      <div class="text-2xl font-semibold">Hasil Rapor Diri Bulanan Pengurus</div>
        @if ($rapors->isEmpty())
        <div class="flex flex-col items-center gap-4 mt-2">
          <svg class="w-14 rounded-xl bg-primary_back p-2" height="100%" style="enable-background:new 0 0 1701 1701;" version="1.1" viewBox="0 0 1701 1701" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="empty_inbox"><path d="M1701,162.902C1701,72.934,1628.066,0,1538.098,0H162.902C72.934,0,0,72.934,0,162.902v1375.195   C0,1628.066,72.934,1701,162.902,1701h1375.195c89.969,0,162.902-72.934,162.902-162.902V162.902z M164.832,132h1375.517   c16.963,0,28.651,11.502,28.651,28.465V935h-398.719c-36.494,0-66.07,28.313-66.07,64.801   c0,143.903-117.076,260.348-260.979,260.348c-140.287,0-255.075-111.57-260.76-250.487c0.581-3.517,0.881-6.02,0.881-9.7   c0-36.49-29.581-64.961-66.071-64.961H132V160.465C132,143.502,147.87,132,164.832,132z M1540.349,1569H164.832   c-16.962,0-32.832-16.057-32.832-33.02V1067h323.663c31.503,185,193.305,327.05,387.568,327.05   c194.26,0,356.063-142.05,387.565-327.05H1569v468.98C1569,1552.943,1557.312,1569,1540.349,1569z"/></g><g id="Layer_1"/></svg>
          <p class="">Belum ada hasil rapor diri</p>
        </div>
          
        @else
            
        @endif

        <ul class="flex flex-col gap-4 list-decimal p-4">
          @foreach ($rapors as $rapor)
            <li>
              <p>{{ $rapor->receiver_name }}</p>
              <div class="flex flex-row justify-between gap-2">
                <div class="flex flex-row w-1/2 justify-start gap-2">
                  <p>Bulan Penilaian : </p>
                  <p>{{ $months[$rapor->bulan_penilaian] }}</p>
                </div>

                @if (auth()->user()->role == 0)
                  <a class="bg-primary rounded-full hover:bg-primary_hover duration-150  text-white px-4" href="{{ route('detail-rapor-pengurus', $rapor->id)}}">Lihat Detail</a>
                @endif

                @if (auth()->user()->role == 1)
                  <a class="bg-primary rounded-full hover:bg-primary_hover duration-150  text-white px-4" href="{{ route('detail-rapor-evaluator', $rapor->id)}}">Lihat Detail</a>
                @endif

                @if (auth()->user()->role == 2)
                  <a class="bg-primary rounded-full hover:bg-primary_hover duration-150  text-white px-4" href="{{ route('detail-rapor-admin', $rapor->id)}}">Lihat Detail</a>
                @endif
              </div>

              {{-- @if (auth()->user()->role == 0)
                <a href="{{ route("export-rapor-pengurus") }}">Download PDF</a>
              @endif

              @if (auth()->user()->role == 1)
                <a href="{{ route("export-rapor-evaluator") }}">Download PDF</a>
              @endif

              @if (auth()->user()->role == 2)
                <a href="{{ route("export-rapor-admin") }}">Download PDF</a>
              @endif --}}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection

