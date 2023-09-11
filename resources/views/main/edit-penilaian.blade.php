@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 min-h-full">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-semibold text-4xl">Edit Penilaian Bulanan Pengurus - Bidang Manajemen Kontrol</div>
  </div>

    <ul class="flex flex-col list-decimal gap-6 bg-white p-4 rounded-lg w-2/4 text-sm leading-relaxed">
      @foreach ($penilaians as $penilaian)
        @if (auth()->user()->role == 1)
          <form class="w-full" action="{{ route('update-penilaian-evaluator', $penilaian->id) }}" method="POST">
        @endif

        @if (auth()->user()->role == 2)
          <form class="w-full" action="{{ route('update-penilaian-admin', $penilaian->id) }}" method="POST">
        @endif      
        @csrf
        @method('PUT')

        <li class="m-2">
          <div class="flex flex-col gap-8">
            <div class="p-2 w-80 font-semibold text-base" name="receiver_id" id="receiver_id">
              {{ $penilaian->receiver_name }}               
            </div>

            <div class="flex flex-row items-center gap-4">
              <p class="text-base font-semibold">Bulan Penilaian :</p>
              <select class="p-2 border-b-2 rounded-md w-60 font-semibold" name="bulan_penilaian" id="bulan_penilaian">
                <option value="0" {{ old('status', $penilaian->bulan_penilaian) == 0 ? 'selected':'' }}>Januari</option>
                <option value="1" {{ old('status', $penilaian->bulan_penilaian) == 1 ? 'selected':'' }}>Februari</option>
                <option value="2" {{ old('status', $penilaian->bulan_penilaian) == 2 ? 'selected':'' }}>Maret</option>
                <option value="3" {{ old('status', $penilaian->bulan_penilaian) == 3 ? 'selected':'' }}>April</option>
                <option value="4" {{ old('status', $penilaian->bulan_penilaian) == 4 ? 'selected':'' }}>Mei</option>
                <option value="5" {{ old('status', $penilaian->bulan_penilaian) == 5 ? 'selected':'' }}>Juni</option>
                <option value="6" {{ old('status', $penilaian->bulan_penilaian) == 6 ? 'selected':'' }}>Juli</option>
                <option value="7" {{ old('status', $penilaian->bulan_penilaian) == 7 ? 'selected':'' }}>Agustus</option>
                <option value="8" {{ old('status', $penilaian->bulan_penilaian) == 8 ? 'selected':'' }}>September</option>
                <option value="9" {{ old('status', $penilaian->bulan_penilaian) == 9 ? 'selected':'' }}>Oktober</option>
                <option value="10" {{ old('status', $penilaian->bulan_penilaian) == 10 ? 'selected':'' }}>November</option>
                <option value="11" {{ old('status', $penilaian->bulan_penilaian) == 11 ? 'selected':'' }}>Desember</option>
              </select>
            </div>

            <div class="flex gap-20 text-base text-center">
              <p class="w-40 invisible">Tanggung Jawab</p>
              <p class="w-5">1</p>
              <p class="w-5">2</p>
              <p class="w-5">3</p>
              <p class="w-5">4</p>
              <p class="w-5">5</p>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Tanggung Jawab</p>
              <input class="w-5" type="radio" name="p1" id="0" value="1" {{ $penilaian->p1=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p1" id="1" value="2" {{ $penilaian->p1=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p1" id="2" value="3" {{ $penilaian->p1=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p1" id="3" value="4" {{ $penilaian->p1=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p1" id="4" value="5" {{ $penilaian->p1=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Keaktifan</p>
              <input class="w-5" type="radio" name="p2" id="5" value="1" {{ $penilaian->p2=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p2" id="6" value="2" {{ $penilaian->p2=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p2" id="7" value="3" {{ $penilaian->p2=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p2" id="8" value="4" {{ $penilaian->p2=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p2" id="9" value="5" {{ $penilaian->p2=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Komunikasi</p>
              <input class="w-5" type="radio" name="p3" id="10" value="1" {{ $penilaian->p3=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p3" id="11" value="2" {{ $penilaian->p3=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p3" id="20" value="3" {{ $penilaian->p3=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p3" id="13" value="4" {{ $penilaian->p3=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p3" id="14" value="5" {{ $penilaian->p3=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Kedisiplinan</p>
              <input class="w-5" type="radio" name="p4" id="15" value="1" {{ $penilaian->p4=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p4" id="16" value="2" {{ $penilaian->p4=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p4" id="17" value="3" {{ $penilaian->p4=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p4" id="18" value="4" {{ $penilaian->p4=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p4" id="19" value="5" {{ $penilaian->p4=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Kontribusi</p>
              <input class="w-5" type="radio" name="p5" id="20" value="1" {{ $penilaian->p5=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p5" id="21" value="2" {{ $penilaian->p5=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p5" id="22" value="3" {{ $penilaian->p5=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p5" id="23" value="4" {{ $penilaian->p5=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p5" id="24" value="5" {{ $penilaian->p5=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Sikap</p>
              <input class="w-5" type="radio" name="p6" id="25" value="1" {{ $penilaian->p6=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p6" id="26" value="2" {{ $penilaian->p6=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p6" id="27" value="3" {{ $penilaian->p6=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p6" id="28" value="4" {{ $penilaian->p6=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p6" id="29" value="5" {{ $penilaian->p6=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Inisiatif</p>
              <input class="w-5" type="radio" name="p7" id="30" value="1" {{ $penilaian->p7=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p7" id="31" value="2" {{ $penilaian->p7=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p7" id="32" value="3" {{ $penilaian->p7=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p7" id="33" value="4" {{ $penilaian->p7=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p7" id="34" value="5" {{ $penilaian->p7=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex gap-20">
              <p class="w-40">Problem Solving</p>
              <input class="w-5" type="radio" name="p8" id="35" value="1" {{ $penilaian->p8=="1" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p8" id="36" value="2" {{ $penilaian->p8=="2" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p8" id="37" value="3" {{ $penilaian->p8=="3" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p8" id="38" value="4" {{ $penilaian->p8=="4" ? "checked" : "" }} required>
              <input class="w-5" type="radio" name="p8" id="39" value="5" {{ $penilaian->p8=="5" ? "checked" : "" }} required>
            </div>

            <div class="flex flex-col gap-4">
              <p class="font-semibold text-lg">Keterangan Penilaian</p>
              <p>Kolom ini digunakan untuk memberikan kesimpulan, kritik ataupun saran, sehingga dapat
                dijadikan sebagai
                evaluasi pengurus supaya lebih baik kedepan nya.</p>
              <textarea class="flex p-2 rounded-md border-2 border-gray-500" name="keterangan" id="keterangan" rows="5" cols="100" placeholder="Jawaban Kamu" required>{{ old('body', $penilaian->keterangan ?? null) }}
              </textarea>
            </div>
            
            <div class="flex justify-end gap-2">
              <button class="rounded-lg bg-red-500 hover:bg-red-700 duration-150 cursor-pointer text-white px-6 mt-4"
                type="reset">Cancel</button>
              <button class="button px-6 mt-4" type="submit">Submit</button>
            </div>
          </div>
        </li>

        </form>
      @endforeach     
    </ul>
</div>



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