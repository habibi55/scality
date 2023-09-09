@extends('layouts.main')

@section('content')

<div class="flex flex-col bg-primary_back p-6 gap-6 ml-72 h-full">
  <div class="flex w-full mt-4">
    <div class="w-8/12 font-semibold text-4xl">Penilaian Bulanan Pengurus - Bidang Manajemen Kontrol</div>
  </div>

  <div class="flex flex-row gap-6">
    <div class="flex flex-col rounded-lg gap-6">
      <div class="flex bg-white p-4 rounded-lg">
        <p class="font-semibold text-lg">Bulan Penilaian : Januari</p>
      </div>

      <div class="flex flex-col bg-white p-4 rounded-lg">
        <p class="font-semibold text-lg">Deskripsi Range dan Indikator Penilaian</p>
        <div class="w-full flex flex-col gap-4 text-sm leading-relaxed">
          <div class="flex flex-col">
            <p>Range Penilaian : 1 - 5</p>
            <p>Dengan range nilai pada setiap indikator sebagai berikut :</p>
            <p>1 = Buruk</p>
            <p>2 = Kurang</p>
            <p>3 = Cukup</p>
            <p>4 = Baik</p>
            <p>5 = Sangat Baik</p>
          </div>

          <div class="flex flex-col">
            <p>Range penilaian dapat didasarkan pada tolak ukur di setiap pemenuhan indikator, yaitu :</p>
            <p>Buruk = 0 - 20%</p>
            <p>Kurang = 21 - 40%</p>
            <p>Cukup = 41 - 60%</p>
            <p>Baik = 61 - 80%</p>
            <p>Sangat Baik = 81 - 100%</p>
          </div>

          <div class="flex flex-col">
            <p>Indikator Penilaian :</p>
            <ul class="list-decimal pl-4">
              <li>Tanggung Jawab : Untuk mengukur pemenuhan tanggung jawab dari peran yang dijalankan sebagai pengurus BEM
                FIKTI UG.</li>
              <li>Keaktifan : Aktif menyampaikan pendapatnya dan aktif bertanya apabila terdapat sesuatu yang di rasa
                kurang
                mengerti saat diskusi</li>
              <li>Komunikasi : Memiliki komunikasi yang baik antar sesama pengurus sehingga tidak terjadi misscom dan lost
                contact</li>
              <li>Kedisiplinan : Ketepatan waktu dalam menjalankan tugas dan menghadiri rapat, serta taat terhadap
                perturan
                yang berlaku.</li>
              <li>Kontribusi : Keterlibatan atau keikutsertaan secara langsung dalam diskusi maupun kegiatan yang diadakan
                oleh BEM FIKTI UG.</li>
              <li>Sikap : Mempunyai sikap yang sopan santun terhadap sesama pengurus BEM FIKTI UG</li>
              <li>Inisiatif : Inisiatif membantu pemecahan masalah dan Inisiatif melakukan hal-hal baru yang berdampak
                positif serta memberikan hasil yang nyata baik pada proker, biro/dept/AU ataupun dalam ruang lingkup
                kerjanya
                masing-masing.</li>
              <li>Problem solving : Mempunyai cara pemecahan masalah yang baik dan kreatif selama menjalankan kewajibannya
                sebagai pengurus BEM FIKTI UG, sehingga masalah yang ada dapat segera di tuntaskan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="flex flex-col bg-white p-4 rounded-lg w-1/3">
      <div>Hasil Penilaian</div>
      <ul class="list-decimal p-4">
        @foreach ($penilaian as $item)
          @if (auth()->user()->role == 1)
            <form action="{{ route('delete-penilaian-evaluator', $item->id) }}" method="POST">
          @endif

          @if (auth()->user()->role == 2)
            <form action="{{ route('delete-penilaian-admin', $item->id) }}" method="POST">
          @endif

            @csrf
            @method('DELETE')
            <li>
              <p>{{ $item->receiver_name }}</p>
              <p>{{ $item->p1 }}</p>
              <p>{{ $item->p2 }}</p>
              <p>{{ $item->p3 }}</p>
              <p>{{ $item->p4 }}</p>
              <p>{{ $item->p5 }}</p>
              <p>{{ $item->p6 }}</p>
              <p>{{ $item->p7 }}</p>
              <p>{{ $item->p8 }}</p>
              <p>{{ $item->keterangan }}</p>
            </li>
            <button type="submit" class="rounded-md bg-red-500 px-4 text-white">Delete</button>
          </form>
        @endforeach
      </ul>
    </div>
  </div>


    <ul class="flex flex-col list-decimal gap-6 bg-white p-4 rounded-lg w-2/4 text-sm leading-relaxed">
      @foreach ($users as $user)
        @if (auth()->user()->role == 1)
          <form class="w-full" action="{{ route('store-penilaian-evaluator') }}" method="POST">
        @endif

        @if (auth()->user()->role == 2)
          <form class="w-full" action="{{ route('store-penilaian-admin') }}" method="POST">
        @endif      
        @csrf
              
        <li class="m-2">
          <div class="flex flex-col gap-4">
            <select name="receiver_id" id="receiver_id">
              @foreach ($users as $user)
                  <option value="{{ $user->id }}|{{ $user->name }}">{{ $user->name }}</option>
              @endforeach   
            </select>

            <div class="flex gap-12">
              <p class="w-40">Tanggung Jawab</p>
              <input class="w-5" type="radio" name="p1" id="0" value="1">
              <input class="w-5" type="radio" name="p1" id="1" value="2">
              <input class="w-5" type="radio" name="p1" id="2" value="3">
              <input class="w-5" type="radio" name="p1" id="3" value="4">
              <input class="w-5" type="radio" name="p1" id="4" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Keaktifan</p>
              <input class="w-5" type="radio" name="p2" id="5" value="1">
              <input class="w-5" type="radio" name="p2" id="6" value="2">
              <input class="w-5" type="radio" name="p2" id="7" value="3">
              <input class="w-5" type="radio" name="p2" id="8" value="4">
              <input class="w-5" type="radio" name="p2" id="9" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Komunikasi</p>
              <input class="w-5" type="radio" name="p3" id="10" value="1">
              <input class="w-5" type="radio" name="p3" id="11" value="2">
              <input class="w-5" type="radio" name="p3" id="12" value="3">
              <input class="w-5" type="radio" name="p3" id="13" value="4">
              <input class="w-5" type="radio" name="p3" id="14" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Kedisiplinan</p>
              <input class="w-5" type="radio" name="p4" id="15" value="1">
              <input class="w-5" type="radio" name="p4" id="16" value="2">
              <input class="w-5" type="radio" name="p4" id="17" value="3">
              <input class="w-5" type="radio" name="p4" id="18" value="4">
              <input class="w-5" type="radio" name="p4" id="19" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Kontribusi</p>
              <input class="w-5" type="radio" name="p5" id="20" value="1">
              <input class="w-5" type="radio" name="p5" id="21" value="2">
              <input class="w-5" type="radio" name="p5" id="22" value="3">
              <input class="w-5" type="radio" name="p5" id="23" value="4">
              <input class="w-5" type="radio" name="p5" id="24" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Sikap</p>
              <input class="w-5" type="radio" name="p6" id="25" value="1">
              <input class="w-5" type="radio" name="p6" id="26" value="2">
              <input class="w-5" type="radio" name="p6" id="27" value="3">
              <input class="w-5" type="radio" name="p6" id="28" value="4">
              <input class="w-5" type="radio" name="p6" id="29" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Inisiatif</p>
              <input class="w-5" type="radio" name="p7" id="30" value="1">
              <input class="w-5" type="radio" name="p7" id="31" value="2">
              <input class="w-5" type="radio" name="p7" id="32" value="3">
              <input class="w-5" type="radio" name="p7" id="33" value="4">
              <input class="w-5" type="radio" name="p7" id="34" value="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Problem Solving</p>
              <input class="w-5" type="radio" name="p8" id="35" value="1">
              <input class="w-5" type="radio" name="p8" id="36" value="2">
              <input class="w-5" type="radio" name="p8" id="37" value="3">
              <input class="w-5" type="radio" name="p8" id="38" value="4">
              <input class="w-5" type="radio" name="p8" id="39" value="5">
            </div>

            <div class="flex flex-col gap-2">
              <p class="font-semibold">Keterangan Penilaian</p>
              <p>Kolom ini digunakan untuk memberikan kesimpulan, kritik ataupun saran, sehingga dapat
                dijadikan sebagai
                evaluasi pengurus supaya lebih baik kedepan nya.</p>
              <textarea class="flex border-b p-2 rounded-md border-2 border-gray-500" name="keterangan" id="keterangan" rows="5" placeholder="Jawaban Kamu">
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


    {{--<li>
          <div class="flex flex-col gap-4">
            <p class="font-semibold">Khairul Adi</p>
            <div class="flex gap-12">
              <p class="w-40">Tanggung Jawab</p>
              <input class="w-5" type="radio" name="tg" id="1">
              <input class="w-5" type="radio" name="tg" id="2">
              <input class="w-5" type="radio" name="tg" id="3">
              <input class="w-5" type="radio" name="tg" id="4">
              <input class="w-5" type="radio" name="tg" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Keaktifan</p>
              <input class="w-5" type="radio" name="keak" id="1">
              <input class="w-5" type="radio" name="keak" id="2">
              <input class="w-5" type="radio" name="keak" id="3">
              <input class="w-5" type="radio" name="keak" id="4">
              <input class="w-5" type="radio" name="keak" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Komunikasi</p>
              <input class="w-5" type="radio" name="kom" id="1">
              <input class="w-5" type="radio" name="kom" id="2">
              <input class="w-5" type="radio" name="kom" id="3">
              <input class="w-5" type="radio" name="kom" id="4">
              <input class="w-5" type="radio" name="kom" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Kedisiplinan</p>
              <input class="w-5" type="radio" name="ked" id="1">
              <input class="w-5" type="radio" name="ked" id="2">
              <input class="w-5" type="radio" name="ked" id="3">
              <input class="w-5" type="radio" name="ked" id="4">
              <input class="w-5" type="radio" name="ked" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Kontribusi</p>
              <input class="w-5" type="radio" name="kont" id="1">
              <input class="w-5" type="radio" name="kont" id="2">
              <input class="w-5" type="radio" name="kont" id="3">
              <input class="w-5" type="radio" name="kont" id="4">
              <input class="w-5" type="radio" name="kont" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Sikap</p>
              <input class="w-5" type="radio" name="sik" id="1">
              <input class="w-5" type="radio" name="sik" id="2">
              <input class="w-5" type="radio" name="sik" id="3">
              <input class="w-5" type="radio" name="sik" id="4">
              <input class="w-5" type="radio" name="sik" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Inisiatif</p>
              <input class="w-5" type="radio" name="in" id="1">
              <input class="w-5" type="radio" name="in" id="2">
              <input class="w-5" type="radio" name="in" id="3">
              <input class="w-5" type="radio" name="in" id="4">
              <input class="w-5" type="radio" name="in" id="5">
            </div>

            <div class="flex gap-12">
              <p class="w-40">Problem Solving</p>
              <input class="w-5" type="radio" name="ps" id="1">
              <input class="w-5" type="radio" name="ps" id="2">
              <input class="w-5" type="radio" name="ps" id="3">
              <input class="w-5" type="radio" name="ps" id="4">
              <input class="w-5" type="radio" name="ps" id="5">
            </div>

            <div class="flex flex-col gap-2">
              <p class="font-semibold">Keterangan Penilaian</p>
              <p>Kolom ini digunakan untuk memberikan kesimpulan, kritik ataupun saran, sehingga dapat
                dijadikan sebagai
                evaluasi pengurus supaya lebih baik kedepan nya.</p>
              <input class="flex border-b p-2 rounded-md " name="keterangan" type="text" placeholder="Jawaban Kamu">
            </div>
          </div>
    </li> --}}
  

</div>



<script>
document.getElementById("mySelect").addEventListener("change", function() {
  // Get the selected value
  var selectedValue = this.value;
  
  // Show or hide the form based on the selected value
  if (selectedValue === "2") {
    document.getElementById("myForm").style.display = "block";
  } else {
    document.getElementById("myForm").style.display = "none";
  }
});
</script>

@endsection