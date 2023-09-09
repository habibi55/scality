<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <div class="flex flex-col w-full p-6 gap-6 items-center">
  
    <div>BADAN EKSEKUTIF MAHASISWA
  FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI
  UNIVERSITAS GUNADARMA
  </div>

  <div>Sekretariat: Pusat kegiatan Mahasiswa (PUSGIWA) Kampus E Jl. Komjen Pol. M. Jasin – Depok</div>
  
    <div class="text-2xl font-semibold">Hasil Rapor Diri</div>
      <ul class="list-decimal p-4">
        @foreach ($rapors as $rapor)
          <li>
            <p>Penilaian Januari</p>
            <p>{{ $rapor->receiver_name }}</p>
            <p>P1: {{ $rapor->p1 }}</p>
            <p>P2: {{ $rapor->p2 }}</p>
          </li>
        @endforeach
      </ul>
    </div>
</div>
  
</body>
</html>





  



  
