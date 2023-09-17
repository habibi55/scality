@extends('layouts.main')

@section('content')

<!-- Main -->
<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 min-h-screen">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-bold text-4xl">Rapor Diri Bulanan Pengurus</div>
  </div>

  <div class="flex flex-row rounded-xl gap-4">
    <div class="flex flex-col rounded-xl bg-white p-4 gap-4 w-3/6">
      <div class="flex gap-2">
        <div class="flex flex-col">
          <p>Nama</p>
          <p>Kode Pengurus</p>
          <p>Jabatan</p>
          <p>Periode</p>
        </div>

        <div class="flex flex-col">
          <p>:</p>
          <p>:</p>
          <p>:</p>
          <p>:</p>
        </div>

        <div class="flex flex-col">
          <p>{{ $rapors->receiver_name }}</p>
          <p>{{ $rapors->receiver_name }}</p>
          <p>{{ $rapors->receiver_name }}</p>
          <div>{{ $months[$rapors->bulan_penilaian] }}</div>
        </div>

      </div>



      <canvas height="250" id="myChart"></canvas>

      <div class="flex flex-row justify-start gap-2">
        <p>Bulan Penilaian : </p>
        <div>{{ $months[$rapors->bulan_penilaian] }}</div>
      </div>

      <div>
        <p class="font-semibold">Keterangan Evaluasi :</p>
        <p>{{ $rapors->keterangan }}</p>
      </div>


    </div>

    <div class="w-80 bg-white rounded-xl p-4">
      <div class="font-bold mb-4">
        Range Penilaian
      </div>
      <table class="border-collapse border text-center">
        <thead>
          <tr>
            <th class="ket-penilaian px-6">Range</th>
            <th class="ket-penilaian px-6">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="ket-penilaian">1</td>
            <td class="ket-penilaian">Buruk</td>
          </tr>
          <tr>
            <td class="ket-penilaian">2</td>
            <td class="ket-penilaian">Kurang</td>
          </tr>
          <tr>
            <td class="ket-penilaian">3</td>
            <td class="ket-penilaian">Cukup</td>
          </tr>
          <tr>
            <td class="ket-penilaian">4</td>
            <td class="ket-penilaian">Baik</td>
          </tr>
          <tr>
            <td class="ket-penilaian">5</td>
            <td class="ket-penilaian">Sangat Baik</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>


{{-- ChartJS --}}
<script type="text/javascript">
  
  const ctx = document.getElementById('myChart');
  const data = @json($data);

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Tanggung Jawab', 'Keaktifan', 'Komunikasi', 'Kedisiplinan', 'Kontribusi', 'Sikap' ,'Inisiatif', 'Problem Solving'],
      datasets: [{
        label: 'Penilaian',
        data: data,
        borderWidth: 3,
        pointBorderWidth: 10
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
    }
  });
  
</script>

@endsection