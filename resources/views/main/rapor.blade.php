@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 min-h-screen">
  <div class="flex w-full mt-4">
    <div class="w-6/12 font-bold text-4xl">Hasil Rapor Diri</div>
  </div>
    
  {{-- Rapor Diri --}}
  <div class="flex flex-row gap-4">
    <div class="w-7/12 rounded-xl bg-white p-4">

      {{-- Chart --}}
      <canvas height="75" id="myChart"></canvas>
      
      <ul class="list-decimal p-4">
        @foreach ($rapors as $rapor)
          <li>
            <p>Penilaian Januari</p>
            <p>{{ $rapor->receiver_name }}</p>
            {{-- <p>P1: {{ $rapor->p1 }}</p>
            <p>P2: {{ $rapor->p2 }}</p>
            <p>P3: {{ $rapor->p3 }}</p>
            <p>P4: {{ $rapor->p4 }}</p>
            <p>P5: {{ $rapor->p5 }}</p>
            <p>P6: {{ $rapor->p6 }}</p>
            <p>P7: {{ $rapor->p7 }}</p>
            <p>P8: {{ $rapor->p8 }}</p> --}}
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
    </div>

    <div class="w-5/12 bg-white rounded-xl p-4">
      <table class="border-collapse border">
        <thead>
          <tr>
            <th class="border border-slate-300">Range</th>
            <th class="border border-slate-300">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-slate-300">1</td>
            <td class="border border-slate-300">Buruk</td>
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