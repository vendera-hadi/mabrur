@extends('layouts.app')

@section('content')
<div class="container-full h-100">
    <div class="row justify-content-center h-100">
      <!-- left -->
      @include('leftnav', ['selected' => 'terms'])
      <!-- right -->
        <div class="col-md-9 shadow-left h-100">
          @include('header', ['title' => 'Syarat & Ketentuan'])

          <div class="container panel h-80">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <!-- content -->
                <div class="card w-100">
                  <div class="card-body">
                    <p class="card-text">
                      <ul>
                      <li>Durasi vlog minimal 3 menit dan maksimal 5 menit.</li>
                      <li>Peserta kompetisi harus merekam videonya sendiri dan tidak bisa diwakilkan dengan orang lain.</li>
                      <li>Peserta dilarang mempromosikan atau mengiklankan suatu instansi selain BPKH dalam vlog yang dilombakan.</li>
                      <li>Peserta diwajibkan untuk memilih kategori perlombaan; Siswa SMU atau setara) dan umum.</li>
                      <li>Peserta wajib mengikuti seluruh kanal media sosial (Like, Subscribe and Share) ,Youtube (NAMA AKUN YOUTUBE), IG (@bpkhri), FB (bpkh), dan Twitter</li>

                      <li>Konten vlog tidak boleh melanggar Hak Atas Kekayaan Intelektual (HAKI), tidak mengandung unsur SARA ataupun politik.</li>

                      <li>Bila konten vlog melanggar ketentuan yang ada, panitia berhak untuk tidak menayangkan vlog yang masuk dalam kategori tesrsebut).</li>

                      <li>Peserta diperbolehkan  mengirimkan lebih dari 1 vlog dengan tema #TipsNabungHaji dan #HajiZamanNow</li>

                      <li>Konten vlog harus original atau belum pernah dipublikasikan.</li>

                      <li>Peserta wajib membuka rekening tabungan Haji minimal senilai Rp50.000 tergantung dengan ketentuan masing-masing bank.</li>

                      <li>Peserta juga dapat melakukan setoran tunai sejumlah Rp25.000.000 untuk mendapatkan langsung antrian untuk berangkat haji.</li>

                      <li>Pembukaan rekening tabungan dapat dilakukan pada seluruh bank syariah di Indonesia.</li>

                      <li>Video dikirimkan dalam format mov, avi, atau mp4, dengan resolusi minimal 720p.</li>

                      <li>Peserta wajib menyertakan caption menarik pada caption video yang diproduksi maksimal 300 kata.</li>

                      <li>Peserta wajib menyertakan poster digital (ukuran 1920 x 1080 pixel) dari video yang dikompetisikan dengan format JPEG dengan kualitas HQ.</li>

                      <li>Pengunggahan video dilakukan dengan mengirimkan link URL vlog tersebut melalui microsite <a href="http://www.lombavlogbpkh.com">www.lombavlogbpkh.com</a></li>

                      <li>Batas pengunggahan vlog sampai tanggal 26 Januari 2019 pukul 23.59</li>

                      <li>Setiap vlog yang didaftarkan menjadi hak cipta panitia.</li>

                      <li>Karya vlog yang masuk akan melalui proses screening terlebih dahulu sebelum di upload oleh pihak panitia.</li>

                      <li>Vlog yang masuk dalam penjurian adalah vlog yang di upload oleh panitia di akun resmi YouTube: BPKH, bukan dari kanal medsos peserta lomba.</li>

                      <li>Lomba vlog ini tidak berlaku bagi semua Panitia yang terlibat dalam acara ini.</li>

                      <li>Jumlah hadiah yang diterima pemenang akan dipotong pajak.</li>

                      <li>Keputusan juri adalah mutlak dan tidak bisa diganggu gugat.</li>
                      </ul>
                    </p>
                  </div>
                </div>
                <!-- content -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
