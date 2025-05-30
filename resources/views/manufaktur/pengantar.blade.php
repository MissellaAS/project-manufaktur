@extends('manufaktur.layout')

@section('content')

<div class="container mx-auto px-8 py-20 bg-white rounded-xl shadow-2xl text-center">

    <h1 class="text-5xl font-extrabold text-indigo-900 mb-6">🔧 Selamat Datang di Sistem Pemeriksaan Mesin</h1>

  <div class="row max-w-3xl mx-auto px-6 ">
    <p class=" row text-lg text-gray-700 leading-relaxed ">
        Dalam rangka meningkatkan efektivitas dan efisiensi kegiatan operasional di lingkungan manufaktur, diperlukan sistem pencatatan dan evaluasi yang akurat terhadap kondisi mesin produksi. Sistem ini dirancang untuk membantu proses pendataan, pemantauan, serta pengambilan keputusan terkait kelayakan operasional mesin.
        <br><br>
        Melalui form pemeriksaan yang telah disediakan, setiap pegawai diharapkan dapat mengisi data secara lengkap dan jujur mengenai kondisi mesin yang sedang diperiksa, termasuk informasi terkait komponen yang mengalami kerusakan, kebutuhan perawatan besar, serta catatan operasional lainnya.
        <br><br>
        Data yang dikumpulkan akan digunakan sebagai dasar dalam menentukan prioritas perawatan, tindakan preventif, serta penggantian komponen apabila diperlukan, guna menjamin kelancaran dan keselamatan dalam proses produksi.
        
        Pastikan seluruh informasi yang diisi telah sesuai dengan kondisi aktual di lapangan. Apabila terdapat hal-hal yang belum dimengerti, silakan menghubungi supervisor atau teknisi terkait sebelum melanjutkan pemeriksaan.
    </p>
</div>


    <div class="mt-12">
        <a href="{{ route('manufaktur.create') }}"
           class="inline-block px-8 py-4 text-black text-xl font-semibold bg-indigo-600 hover:bg-indigo-700 rounded-lg transition">
            🚀 Mulai Pemeriksaan
        </a>
    </div>

</div>

@endsection
