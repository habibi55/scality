<aside
  class="hidden md:flex flex-col p-6 justify-between fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0">
  <!-- Logo and Nav -->
  <div class="flex flex-col h-5/6 gap-2 mt-2 ">
    <div class="flex flex-col gap-2 font-semibold">
      
      <a href="{{ route('home') }}">
        <img class="w-36 mx-auto mb-4" src="{{ asset('/assets/images/scality rebranding.png') }}" alt="Logo">
      </a>

      <a href="{{ route('home') }}" class="nav">
        <svg class="w-10" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <title />
          <g id="home">
            <path
              d="M29.71,15.29l-3-3h0l-10-10a1,1,0,0,0-1.42,0l-10,10h0l-3,3a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L5,15.41V29a1,1,0,0,0,1,1H26a1,1,0,0,0,1-1V15.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,29.71,15.29ZM25,28H7V13.41l9-9,9,9Z" />
          </g>
        </svg>
        <div class="w-full">Home</div>
      </a>

      <a href="rapor.html" class="nav">
        <svg class="w-10" viewBox=" 0 0 256 256" xmlns="http://www.w3.org/2000/svg">
          <rect fill="none" height="256" width="256" />
          <rect fill="none" height="136" rx="8" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="12" width="192" x="32" y="48" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="160"
            x2="192" y1="184" y2="224" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="96"
            x2="64" y1="184" y2="224" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="96"
            x2="96" y1="120" y2="144" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="128"
            x2="128" y1="104" y2="144" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="14" x1="160"
            x2="160" y1="88" y2="144" />
          <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="14" x1="128"
            x2="128" y1="48" y2="24" /></svg>
        <div class="w-full">Rapor Diri</div>
      </a>

      @if(auth()->user()->role == 2)
        <a href="penilaian.html" class="nav">
          <svg class="w-10" id="Слой_1" style="enable-background:new 0 0 50 50;" version="1.1" viewBox="0 0 50 50"
            xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <style type="text/css">
              .st0 {
                display: none;
              }

              .st1 {
                display: inline;
              }

              .st2 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-miterlimit: 10;
              }

              .st3 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 5;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st4 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st5 {
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st6 {
                display: inline;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st7 {
                display: none;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }
            </style>
            <g class="st0" id="поиск">
              <g class="st1">
                <g>
                  <path
                    d="M19.5,8.2c6.2,0,11.3,5.1,11.3,11.3s-5.1,11.3-11.3,11.3S8.2,25.8,8.2,19.5S13.2,8.2,19.5,8.2 M19.5,5.2     c-7.9,0-14.3,6.4-14.3,14.3s6.4,14.3,14.3,14.3s14.3-6.4,14.3-14.3S27.3,5.2,19.5,5.2L19.5,5.2z" />
                </g>
              </g>
              <line class="st2" x1="28.8" x2="32.1" y1="28.7" y2="32" />
              <line class="st3" x1="44.8" x2="33" y1="44.8" y2="33" />
            </g>
            <g class="st0" id="активы">
              <path class="st4"
                d="M46.3,13.9H3.7c-0.3,0-0.5-0.2-0.5-0.5V6.6c0-0.6,0.4-1,1-1h41.7c0.6,0,1,0.4,1,1v6.8   C46.8,13.7,46.6,13.9,46.3,13.9z" />
              <path class="st4" d="M42.5,44.4H7.5c-0.6,0-1-0.4-1-1V13.9h37.1v29.5C43.5,43.9,43.1,44.4,42.5,44.4z" />
              <path class="st4"
                d="M32.3,26.5H18.2c-1.6,0-2.9-1.3-2.9-2.9v0c0-1.6,1.3-2.9,2.9-2.9h14.1c1.6,0,2.9,1.3,2.9,2.9v0   C35.2,25.1,33.9,26.5,32.3,26.5z" />
            </g>
            <g class="st0" id="заявки">
              <path class="st4" d="M11.6,41.3h-3c-0.6,0-1-0.4-1-1v-32c0-0.6,0.4-1,1-1h3V41.3z" />
              <path class="st4"
                d="M32.2,6.1H12.6c-0.6,0-1,0.4-1,1v35.8c0,0.6,0.4,1,1,1h28.9c0.6,0,1-0.4,1-1V15c0-0.3-0.1-0.6-0.4-0.8   l-9.2-7.8C32.7,6.2,32.4,6.1,32.2,6.1z" />
              <line class="st4" x1="32.2" x2="32.2" y1="6.1" y2="14.9" />
              <line class="st4" x1="42.4" x2="32.2" y1="15" y2="15" />
              <g class="st1">
                <line class="st5" x1="19" x2="36" y1="20.9" y2="20.9" />
                <line class="st5" x1="19" x2="33.3" y1="26" y2="26" />
                <line class="st5" x1="19" x2="36" y1="30.9" y2="30.9" />
                <line class="st5" x1="19" x2="33.3" y1="35.6" y2="35.6" />
              </g>
            </g>
            <g class="st0" id="регистрация">
              <path class="st4"
                d="M38.5,32.6v10.7c0,0.6-0.4,1-0.9,1H9.3c-0.5,0-0.9-0.4-0.9-1V6.6c0-0.6,0.4-1,0.9-1h28.3c0.5,0,0.9,0.4,0.9,1   v10.5" />
              <path class="st6"
                d="M28.5,30V20c0-0.2-0.3-0.4-0.5-0.2l-6.6,5c-0.2,0.1-0.2,0.4,0,0.5l6.6,5C28.3,30.4,28.5,30.2,28.5,30z" />
              <line class="st4" x1="28.5" x2="45.6" y1="25" y2="25" />
            </g>
            <g class="st0" id="оповещение">
              <path class="st4"
                d="M9.9,16.1h31.3v-4.6c0-0.6-0.4-1-1-1H4.4c-0.6,0-1,0.4-1,1v23.2c0,0.6,0.4,1,1,1h4.6V17.1   C8.9,16.5,9.4,16.1,9.9,16.1z" />
              <path class="st4"
                d="M46,42.8H9.9c-0.6,0-1-0.4-1-1V17.1c0-0.6,0.4-1,1-1H46c0.6,0,1,0.4,1,1v24.7C47,42.4,46.6,42.8,46,42.8z" />
              <path class="st4"
                d="M46,42.8H9.9c-0.6,0-1-0.4-1-1V17.1c0-0.6,0.4-1,1-1l15.3,14.6c1.5,1.5,4,1.5,5.5,0L46,16.1c0.6,0,1,0.4,1,1   v24.7C47,42.4,46.6,42.8,46,42.8z" />
              <line class="st4" x1="22.3" x2="8.9" y1="27.9" y2="38.6" />
              <line class="st4" x1="33.6" x2="47" y1="28.1" y2="38.9" />
            </g>
            <g class="st0" id="синхронизация">
              <path class="st6"
                d="M30.8,36.6l5.8,8.1c0.1,0.2,0.5,0.2,0.5-0.1l2.5-7.9c0.1-0.2-0.1-0.4-0.3-0.4L31,36.1   C30.8,36.1,30.7,36.4,30.8,36.6z" />
              <path class="st6"
                d="M18.7,12.6l-5.8-8.1c-0.1-0.2-0.5-0.2-0.5,0.1l-2.5,7.9c-0.1,0.2,0.1,0.4,0.3,0.4l8.3,0.2   C18.7,13.1,18.9,12.8,18.7,12.6z" />
              <path class="st4" d="M39.4,36.5c-3.5,4.3-8.7,7-14.6,7c-10.4,0-18.8-8.4-18.8-18.8c0-1.5,0.2-2.9,0.5-4.3" />
              <path class="st4" d="M10.1,12.6c3.5-4.3,8.7-7,14.6-7c10.4,0,18.8,8.4,18.8,18.8c0,1.5-0.2,2.9-0.5,4.3" />
            </g>
            <path class="st7"
              d="M25.1,5.3c-11.5,0-20.9,8.1-20.9,18.2c0,5.8,3.1,11,8,14.3L7.5,45  c-0.2,0.2,0.1,0.5,0.3,0.4c4.7-0.6,8.9-2,12.5-4.3c1.5,0.3,3.1,0.5,4.8,0.5c11.5,0,20.9-8.1,20.9-18.2S36.7,5.3,25.1,5.3z"
              id="взаимодействие" />
            <g id="SLA">
              <path class="st5"
                d="M43.4,44.4H6.6c-0.6,0-1-0.4-1-1V6.6c0-0.6,0.4-1,1-1h36.8c0.6,0,1,0.4,1,1v36.8   C44.4,43.9,43.9,44.4,43.4,44.4z" />
              <g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="36.2" y2="36.2" />
                  <line class="st7" x1="30.7" x2="33.2" y1="34.8" y2="37.5" />
                  <line class="st7" x1="38.1" x2="33.2" y1="32.5" y2="37.5" />
                </g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="26.2" y2="26.2" />
                  <line class="st5" x1="30.7" x2="33.2" y1="24.8" y2="27.5" />
                  <line class="st5" x1="38.1" x2="33.2" y1="22.5" y2="27.5" />
                </g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="16.2" y2="16.2" />
                  <line class="st5" x1="30.7" x2="33.2" y1="14.8" y2="17.5" />
                  <line class="st5" x1="38.1" x2="33.2" y1="12.5" y2="17.5" />
                </g>
              </g>
            </g>
            <g class="st0" id="отчет">
              <path class="st4"
                d="M44.2,9.3H5.7c-0.6,0-1-0.4-1-1V4.9c0-0.6,0.4-1,1-1h38.5c0.6,0,1,0.4,1,1v3.4C45.2,8.9,44.7,9.3,44.2,9.3z" />
              <path class="st4" d="M42.2,38.4H7.7c-0.6,0-1-0.4-1-1V9.3h36.5v28.1C43.2,38,42.7,38.4,42.2,38.4z" />
              <line class="st4" x1="25" x2="25" y1="42.8" y2="38.4" />
              <circle class="st4" cx="25" cy="45.6" r="2.2" />
              <g class="st1">
                <line class="st5" x1="28" x2="38.7" y1="18.8" y2="18.8" />
                <line class="st5" x1="28" x2="38.7" y1="23.9" y2="23.9" />
                <line class="st5" x1="28" x2="38.7" y1="29" y2="29" />
                <path class="st5"
                  d="M17.8,23.4l-0.6-5.2c0-0.2-0.1-0.3-0.3-0.3c-3.5,0.2-6.2,3.5-5.4,7.1c0.5,2.2,2.3,4,4.5,4.5    c3.7,0.8,6.9-1.9,7.1-5.3c0-0.2-0.1-0.3-0.3-0.3L17.8,23.4z" />
              </g>
            </g>
          </svg>
          <div class="w-full">Penilaian</div>
        </a>

        <a href="{{ route('data-pengurus') }}" class="nav">
          <svg class="w-10" height="100%" viewBox="0 0 512 512" width="100%" xmlns="http://www.w3.org/2000/svg">
            <title />
            <path d="M402,168c-2.93,40.67-33.1,72-66,72s-63.12-31.32-66-72c-3-42.31,26.37-72,66-72S405,126.46,402,168Z"
              style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path
              d="M336,304c-65.17,0-127.84,32.37-143.54,95.41-2.08,8.34,3.15,16.59,11.72,16.59H467.83c8.57,0,13.77-8.25,11.72-16.59C463.85,335.36,401.18,304,336,304Z"
              style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px" />
            <path
              d="M200,185.94C197.66,218.42,173.28,244,147,244S96.3,218.43,94,185.94C91.61,152.15,115.34,128,147,128S202.39,152.77,200,185.94Z"
              style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
            <path
              d="M206,306c-18.05-8.27-37.93-11.45-59-11.45-52,0-102.1,25.85-114.65,76.2C30.7,377.41,34.88,384,41.72,384H154"
              style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" /></svg>
          <div class="w-full">Pengurus</div>
        </a>
      @endif

      @if(auth()->user()->role == 1)
        <a href="penilaian.html" class="nav">
          <svg class="w-10" id="Слой_1" style="enable-background:new 0 0 50 50;" version="1.1" viewBox="0 0 50 50"
            xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <style type="text/css">
              .st0 {
                display: none;
              }

              .st1 {
                display: inline;
              }

              .st2 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-miterlimit: 10;
              }

              .st3 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 5;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st4 {
                display: inline;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st5 {
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st6 {
                display: inline;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }

              .st7 {
                display: none;
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-miterlimit: 10;
              }
            </style>
            <g class="st0" id="поиск">
              <g class="st1">
                <g>
                  <path
                    d="M19.5,8.2c6.2,0,11.3,5.1,11.3,11.3s-5.1,11.3-11.3,11.3S8.2,25.8,8.2,19.5S13.2,8.2,19.5,8.2 M19.5,5.2     c-7.9,0-14.3,6.4-14.3,14.3s6.4,14.3,14.3,14.3s14.3-6.4,14.3-14.3S27.3,5.2,19.5,5.2L19.5,5.2z" />
                </g>
              </g>
              <line class="st2" x1="28.8" x2="32.1" y1="28.7" y2="32" />
              <line class="st3" x1="44.8" x2="33" y1="44.8" y2="33" />
            </g>
            <g class="st0" id="активы">
              <path class="st4"
                d="M46.3,13.9H3.7c-0.3,0-0.5-0.2-0.5-0.5V6.6c0-0.6,0.4-1,1-1h41.7c0.6,0,1,0.4,1,1v6.8   C46.8,13.7,46.6,13.9,46.3,13.9z" />
              <path class="st4" d="M42.5,44.4H7.5c-0.6,0-1-0.4-1-1V13.9h37.1v29.5C43.5,43.9,43.1,44.4,42.5,44.4z" />
              <path class="st4"
                d="M32.3,26.5H18.2c-1.6,0-2.9-1.3-2.9-2.9v0c0-1.6,1.3-2.9,2.9-2.9h14.1c1.6,0,2.9,1.3,2.9,2.9v0   C35.2,25.1,33.9,26.5,32.3,26.5z" />
            </g>
            <g class="st0" id="заявки">
              <path class="st4" d="M11.6,41.3h-3c-0.6,0-1-0.4-1-1v-32c0-0.6,0.4-1,1-1h3V41.3z" />
              <path class="st4"
                d="M32.2,6.1H12.6c-0.6,0-1,0.4-1,1v35.8c0,0.6,0.4,1,1,1h28.9c0.6,0,1-0.4,1-1V15c0-0.3-0.1-0.6-0.4-0.8   l-9.2-7.8C32.7,6.2,32.4,6.1,32.2,6.1z" />
              <line class="st4" x1="32.2" x2="32.2" y1="6.1" y2="14.9" />
              <line class="st4" x1="42.4" x2="32.2" y1="15" y2="15" />
              <g class="st1">
                <line class="st5" x1="19" x2="36" y1="20.9" y2="20.9" />
                <line class="st5" x1="19" x2="33.3" y1="26" y2="26" />
                <line class="st5" x1="19" x2="36" y1="30.9" y2="30.9" />
                <line class="st5" x1="19" x2="33.3" y1="35.6" y2="35.6" />
              </g>
            </g>
            <g class="st0" id="регистрация">
              <path class="st4"
                d="M38.5,32.6v10.7c0,0.6-0.4,1-0.9,1H9.3c-0.5,0-0.9-0.4-0.9-1V6.6c0-0.6,0.4-1,0.9-1h28.3c0.5,0,0.9,0.4,0.9,1   v10.5" />
              <path class="st6"
                d="M28.5,30V20c0-0.2-0.3-0.4-0.5-0.2l-6.6,5c-0.2,0.1-0.2,0.4,0,0.5l6.6,5C28.3,30.4,28.5,30.2,28.5,30z" />
              <line class="st4" x1="28.5" x2="45.6" y1="25" y2="25" />
            </g>
            <g class="st0" id="оповещение">
              <path class="st4"
                d="M9.9,16.1h31.3v-4.6c0-0.6-0.4-1-1-1H4.4c-0.6,0-1,0.4-1,1v23.2c0,0.6,0.4,1,1,1h4.6V17.1   C8.9,16.5,9.4,16.1,9.9,16.1z" />
              <path class="st4"
                d="M46,42.8H9.9c-0.6,0-1-0.4-1-1V17.1c0-0.6,0.4-1,1-1H46c0.6,0,1,0.4,1,1v24.7C47,42.4,46.6,42.8,46,42.8z" />
              <path class="st4"
                d="M46,42.8H9.9c-0.6,0-1-0.4-1-1V17.1c0-0.6,0.4-1,1-1l15.3,14.6c1.5,1.5,4,1.5,5.5,0L46,16.1c0.6,0,1,0.4,1,1   v24.7C47,42.4,46.6,42.8,46,42.8z" />
              <line class="st4" x1="22.3" x2="8.9" y1="27.9" y2="38.6" />
              <line class="st4" x1="33.6" x2="47" y1="28.1" y2="38.9" />
            </g>
            <g class="st0" id="синхронизация">
              <path class="st6"
                d="M30.8,36.6l5.8,8.1c0.1,0.2,0.5,0.2,0.5-0.1l2.5-7.9c0.1-0.2-0.1-0.4-0.3-0.4L31,36.1   C30.8,36.1,30.7,36.4,30.8,36.6z" />
              <path class="st6"
                d="M18.7,12.6l-5.8-8.1c-0.1-0.2-0.5-0.2-0.5,0.1l-2.5,7.9c-0.1,0.2,0.1,0.4,0.3,0.4l8.3,0.2   C18.7,13.1,18.9,12.8,18.7,12.6z" />
              <path class="st4" d="M39.4,36.5c-3.5,4.3-8.7,7-14.6,7c-10.4,0-18.8-8.4-18.8-18.8c0-1.5,0.2-2.9,0.5-4.3" />
              <path class="st4" d="M10.1,12.6c3.5-4.3,8.7-7,14.6-7c10.4,0,18.8,8.4,18.8,18.8c0,1.5-0.2,2.9-0.5,4.3" />
            </g>
            <path class="st7"
              d="M25.1,5.3c-11.5,0-20.9,8.1-20.9,18.2c0,5.8,3.1,11,8,14.3L7.5,45  c-0.2,0.2,0.1,0.5,0.3,0.4c4.7-0.6,8.9-2,12.5-4.3c1.5,0.3,3.1,0.5,4.8,0.5c11.5,0,20.9-8.1,20.9-18.2S36.7,5.3,25.1,5.3z"
              id="взаимодействие" />
            <g id="SLA">
              <path class="st5"
                d="M43.4,44.4H6.6c-0.6,0-1-0.4-1-1V6.6c0-0.6,0.4-1,1-1h36.8c0.6,0,1,0.4,1,1v36.8   C44.4,43.9,43.9,44.4,43.4,44.4z" />
              <g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="36.2" y2="36.2" />
                  <line class="st7" x1="30.7" x2="33.2" y1="34.8" y2="37.5" />
                  <line class="st7" x1="38.1" x2="33.2" y1="32.5" y2="37.5" />
                </g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="26.2" y2="26.2" />
                  <line class="st5" x1="30.7" x2="33.2" y1="24.8" y2="27.5" />
                  <line class="st5" x1="38.1" x2="33.2" y1="22.5" y2="27.5" />
                </g>
                <g>
                  <line class="st5" x1="11.9" x2="24.4" y1="16.2" y2="16.2" />
                  <line class="st5" x1="30.7" x2="33.2" y1="14.8" y2="17.5" />
                  <line class="st5" x1="38.1" x2="33.2" y1="12.5" y2="17.5" />
                </g>
              </g>
            </g>
            <g class="st0" id="отчет">
              <path class="st4"
                d="M44.2,9.3H5.7c-0.6,0-1-0.4-1-1V4.9c0-0.6,0.4-1,1-1h38.5c0.6,0,1,0.4,1,1v3.4C45.2,8.9,44.7,9.3,44.2,9.3z" />
              <path class="st4" d="M42.2,38.4H7.7c-0.6,0-1-0.4-1-1V9.3h36.5v28.1C43.2,38,42.7,38.4,42.2,38.4z" />
              <line class="st4" x1="25" x2="25" y1="42.8" y2="38.4" />
              <circle class="st4" cx="25" cy="45.6" r="2.2" />
              <g class="st1">
                <line class="st5" x1="28" x2="38.7" y1="18.8" y2="18.8" />
                <line class="st5" x1="28" x2="38.7" y1="23.9" y2="23.9" />
                <line class="st5" x1="28" x2="38.7" y1="29" y2="29" />
                <path class="st5"
                  d="M17.8,23.4l-0.6-5.2c0-0.2-0.1-0.3-0.3-0.3c-3.5,0.2-6.2,3.5-5.4,7.1c0.5,2.2,2.3,4,4.5,4.5    c3.7,0.8,6.9-1.9,7.1-5.3c0-0.2-0.1-0.3-0.3-0.3L17.8,23.4z" />
              </g>
            </g>
          </svg>
          <div class="w-full">Penilaian</div>
        </a>
      @endif

      @if(auth()->user()->role == 0)

      @endif

      <div class="border border-black"></div>

      <a href="{{ route('profile') }}" class="nav">
        <svg class="w-9 mr-1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <title />
          <g id="about">
            <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z" />
            <path
              d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z" />
          </g>
        </svg>
        <div class="w-full">Profile</div>
      </a>

      <a href="{{ route('logout') }}" class="nav">
        <svg class="w-9 mr-1" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24"
          xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <style type="text/css">
            .st0 {
              fill: none;
              stroke: #000000;
              stroke-width: 1.6724;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-miterlimit: 10;
            }

            .st1 {
              fill: none;
              stroke: #000000;
              stroke-width: 1.5;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-miterlimit: 10;
            }

            .st2 {
              fill: none;
              stroke: #000000;
              stroke-width: 1.5;
              stroke-linejoin: round;
              stroke-miterlimit: 10;
            }
          </style>
          <g>
            <g>
              <line class="st1" x1="7.6" x2="22" y1="12" y2="12" />
            </g>
            <g>
              <path class="st1" d="M11.9,0.8H4.5C3.1,0.8,2,1.9,2,3.2v17.5c0,1.4,1.1,2.5,2.5,2.5h7.4" />
            </g>
            <polyline class="st1" points="18.2,8.2 22,12 18.2,15.8  " />
          </g>
        </svg>
        <div class="w-full">Logout</div>
      </a>

    </div>
  </div>

  <!-- Profile -->
  <div class="flex bg-primary_back rounded-md h-20 items-center p-1 gap-1 text-sm" data-te-dropdown-position="dropup">
    <svg class="w-5/12 h-14 cursor-pointer" id="dropdownTopButton" data-dropdown-toggle="dropdownTop"
      data-dropdown-placement="top" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init
      data-te-ripple-color="light" width="100%" height="100%" viewBox="0 0 61.7998 61.7998"
      xmlns="http://www.w3.org/2000/svg">
      <title />
      <g data-name="Layer 2" id="Layer_2">
        <g data-name="—ÎÓÈ 1" id="_ÎÓÈ_1">
          <circle cx="30.8999" cy="30.8999" fill="#485a69" r="30.8999" />
          <path d="M23.242 38.592l15.92.209v12.918l-15.907-.121-.013-13.006z" fill="#f9dca4" fill-rule="evenodd" />
          <path
            d="M53.478 51.993A30.814 30.814 0 0 1 30.9 61.8a31.225 31.225 0 0 1-3.837-.237A30.699 30.699 0 0 1 15.9 57.919a31.033 31.033 0 0 1-7.857-6.225l1.284-3.1 13.925-6.212c0 4.535 1.84 6.152 7.97 6.244 7.57.113 7.94-1.606 7.94-6.28l12.79 6.281z"
            fill="#d5e1ed" fill-rule="evenodd" />
          <path d="M39.165 38.778v3.404c-2.75 4.914-14 4.998-15.923-3.59z" fill-rule="evenodd" opacity="0.11" />
          <path d="M31.129 8.432c21.281 0 12.987 35.266 0 35.266-12.267 0-21.281-35.266 0-35.266z" fill="#ffe8be"
            fill-rule="evenodd" />
          <path d="M18.365 24.045c-3.07 1.34-.46 7.687 1.472 7.658a31.973 31.973 0 0 1-1.472-7.658z" fill="#f9dca4"
            fill-rule="evenodd" />
          <path d="M44.14 24.045c3.07 1.339.46 7.687-1.471 7.658a31.992 31.992 0 0 0 1.471-7.658z" fill="#f9dca4"
            fill-rule="evenodd" />
          <path
            d="M43.409 29.584s1.066-8.716-2.015-11.752c-1.34 3.528-7.502 4.733-7.502 4.733a16.62 16.62 0 0 0 3.215-2.947c-1.652.715-6.876 2.858-11.61 1.161a23.715 23.715 0 0 0 3.617-2.679s-4.287 2.322-8.44 1.742c-2.991 2.232-1.66 9.162-1.66 9.162C15 18.417 18.697 6.296 31.39 6.226c12.358-.069 16.17 11.847 12.018 23.358z"
            fill="#ecbe6a" fill-rule="evenodd" />
          <path d="M23.255 42.179a17.39 17.39 0 0 0 7.958 6.446l-5.182 5.349L19.44 43.87z" fill="#ffffff"
            fill-rule="evenodd" />
          <path d="M39.16 42.179a17.391 17.391 0 0 1-7.958 6.446l5.181 5.349 6.592-10.103z" fill="#ffffff"
            fill-rule="evenodd" />
          <path d="M33.366 61.7q-1.239.097-2.504.098-.954 0-1.895-.056l1.031-8.757h2.41z" fill="#3dbc93"
            fill-rule="evenodd" />
          <path d="M28.472 51.456l2.737-2.817 2.736 2.817-2.736 2.817-2.737-2.817z" fill="#3dbc93"
            fill-rule="evenodd" />
        </g>
      </g>
    </svg>

    <div class="flex flex-col text-black w-7/12  h-full justify-center gap-2">
      <div class="font-bold text-black text-sm">Mr. Habibi</div>
      <div>Bidang PSDM</div>
    </div>
  </div>
</aside>