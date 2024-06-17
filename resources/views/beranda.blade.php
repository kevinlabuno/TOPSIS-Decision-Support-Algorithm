@extends('layouts.app')

@section('content')
     
       <div class="pagetitle">
      <h1>Beranda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Halaman Beranda</a></li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-12">

    <div class="card">
            <div class="card-header">Sistem pendukung keputusan pemilihan air conditioner Menggunakan Metode Topsis</div>
            
            <div class="image-container" style="text-align: center; margin-top: 20px;">
                    <img src="assets/img/ac.jpg" alt="Air Conditioner" style="max-width: 80%; height: auto; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            <div class="card-body">
              <h5 class="card-title">Deskripsi</h5>
              Pemilihan air conditioner yang tepat sangat penting untuk memastikan 
              kenyamanan, efisiensi energi, dan biaya yang optimal. Untuk membantu 
              pengguna dalam menentukan pilihan yang terbaik, sistem pemilihan air 
              conditioner menggunakan metode TOPSIS (Technique for Order Preference 
              by Similarity to Ideal Solution) dapat diterapkan. Metode TOPSIS adalah 
              salah satu metode pengambilan keputusan multi-kriteria yang mengidentifikasi 
              solusi terbaik dengan membandingkan alternatif yang tersedia terhadap 
              solusi ideal positif dan negatif.
              <br>
              <h5 class="card-title">Kriteria</h5>
              Kriteria yang digunakan dalam sistem pemilihan air conditioner mencakup:<br><br>
              <b>- Harga (C1):</b> Biaya pembelian air conditioner. <br>
              <b>- Daya (C2):</b> Konsumsi energi dari air conditioner.<br>
              <b>- Tenaga (C3):</b> Kapasitas pendinginan air conditioner.<br>
              <b>- Kapasitas Ruangan (C4):</b> Ukuran ruangan yang bisa didinginkan oleh air conditioner.<br>
              <b>- Garansi (C5):</b> Lamanya garansi yang diberikan oleh produsen.<br>
              <b>- Berat (C6):</b> Berat fisik dari air conditioner.<br>

            </div>
          </div>
      </div>
          
    
@endsection