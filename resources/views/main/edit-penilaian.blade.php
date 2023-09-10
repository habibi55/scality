@extends('layouts.main')

@section('content')





{{-- ChartJS --}}
{{-- <script type="text/javascript">
  
  const ctx = document.getElementById('myChart');
  const data = @json($data);

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['p1', 'p2', 'p3', 'p4', 'p5', 'p6' ,'p7', 'p8'],
      datasets: [{
        label: 'Penilaian',
        data: data,
        borderWidth: 1,
        tension: 0.1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
</script> --}}

@endsection