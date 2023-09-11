@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 min-h-screen">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Hasil Rapor Diri</div>
  </div>
    
  {{-- Rapor Diri --}}
  <div class="flex flex-row gap-4">
    <div class="w-7/12 rounded-xl bg-white p-4">     
      <ul class="list-decimal p-4">
        @foreach ($rapors as $rapor)
          <li>
            <p class="font-bold">Penilaian Januari</p>
            {{-- Chart --}}
            <canvas height="75" id="myChart"></canvas>
            <p>{{ $rapor->receiver_name }}</p>

            <p>Ket: {{ $rapor->keterangan }}</p>

            @if (auth()->user()->role == 0)
              <a href="{{ route("export-rapor-pengurus") }}">Download PDF</a>
            @endif

            @if (auth()->user()->role == 1)
              <a href="{{ route("export-rapor-evaluator") }}">Download PDF</a>
            @endif

            @if (auth()->user()->role == 2)
              <a href="{{ route("export-rapor-admin") }}">Download PDF</a>
            @endif

          </li>
        @endforeach
      </ul>

      <div>
        Total:
      </div>
    </div>

    <div class="w-5/12 bg-white rounded-xl p-4">
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
        pointBorderWidth: 15
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        datalabels: {
          align: 'end',
          anchor: 'end',        
          backgroundColor: function(context) {
            return context.data.backgroundColor;
          },
          borderRadius: 4,
          color: 'white',
          formatter: Math.round
        }
      }
    }
  });
  
</script>

@endsection