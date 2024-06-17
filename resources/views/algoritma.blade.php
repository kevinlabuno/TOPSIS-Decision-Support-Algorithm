@extends('layouts.app')

@section('content')

     <div class="pagetitle">
      <h1>TOPSIS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">(Technique for Order Preference by Similarity to Ideal Solution)</a></li>
        </ol>
      </nav>
    </div>

    <div class="col-12">
           <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Tahapan Perhitungan<span> | TOPSIS</span></h5>
              
              <p>TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution) <br>
                adalah salah satu metode dalam pengambilan keputusan multikriteria (MCDM) <br>
                yang digunakan untuk menentukan peringkat dari berbagai alternatif berdasarkan <br>
                kedekatannya dengan solusi ideal. Metode ini dikembangkan oleh Hwang dan <br>
                Yoon pada tahun 1981 dan sering digunakan dalam berbagai bidang seperti manajemen, <br>
                teknik, dan bisnis untuk membuat keputusan yang kompleks.</p>
              <hr>
              <div class="news">
                <div class="post-item clearfix">
                  <h4><a href="#">1. Normalisasi</a></h4>
                  <img src="img/step1.png" alt="" width="270px" height="150px">
                  <br>
                  <p>Di mana 𝑟𝑖𝑗r ij adalah nilai ternormalisasi, 𝑥𝑖𝑗xij adalah nilai awal dalam matriks keputusan.</p>
                </div>

                <div class="post-item clearfix">
                  <h4><a href="#">2. Normalisasi Tertimbang</a></h4>
                  <img src="img/step2.png" alt="" width="270px" height="100px">
                  <br>
                  <p>Di mana 𝑣𝑖𝑗vij adalah nilai ternormalisasi tertimbang, dan 𝑤𝑗wj adalah bobot kriteria.</p>
                </div>

                <div class="post-item clearfix">
                  <h4><a href="#">3. Jarak Euclidean</a></h4>
                  <img src="img/step3.png" alt="" width="270px" height="170px">
                  <br>
                  <p>Di mana 𝐷𝑖+ Di+ adalah jarak ke solusi ideal positif, dan 𝐷𝑖 − Di−adalah jarak ke solusi ideal negatif.</p>
                </div>

                <div class="post-item clearfix">
                  <h4><a href="#">4. Nilai Preferensi</a></h4>
                  <img src="img/step4.png" alt="" width="270px" height="120px">
                  <br>
                  <p>Di mana 𝐶𝑖∗C i∗ adalah nilai preferensi untuk alternatif 𝑖i</p>
                </div>



              </div><!-- End sidebar recent posts-->

            </div>
          </div>

           </div>
    
@endsection
