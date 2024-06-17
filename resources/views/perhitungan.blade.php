@extends('layouts.app')
  <style>
  .alternatif-col {width: 25%;}
  </style>
@section('content')

@if (session('success'))
<hr>
    <div class="alert alert-primary">{{session('success')}}</div>
@endif

 
    {{-- ----------PEMBOBOTAN--------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>Pembobotan Kriteria</b></h4>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-warning">
                            <th class="alternatif-col">Kriteria</th>
                            <th>Tipe</th>
                            <th>Bobot</th>
                            <th>w</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bobot as $konver)
                        <tr>
                            <td class="alternatif-col">{{ $konver->kriteria }}</td>
                            <td>{{ $konver->tipe }}</td>
                            <td>{{ $konver->bobot }} %</td>
                            <td>{{ $konver->w }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th>Total</th>
                            <th></th>
                            <th>{{$bobot->sum('bobot')}} %</th>
                            <th>{{$bobot->sum('w')}}</th>
                        </tr>
                    </tbody>
                </table>
                 <button class="btn btn-sm btn-warning">Lihat Keterangan</button>
                <hr>
            </div>
        </div>
   </div>

    {{-- ----------DATASET AC--------- --}} 
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>Dataset Alternatif AC</b></h4>
                <table class="table table-bordered">
                    <thead>
                         <tr class="table-warning">
                            <th class="alternatif-col">Alternatif</th>
                            <th>Harga (c1)</th>
                            <th>Tenaga (c2)</th>
                            <th>Daya (c3)</th>
                            <th>Kapasitas Ruangan (c4)</th>
                            <th>Garansi (c5)</th>
                            <th>Berat (c6)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataset as $item)
                        <tr>
                            <td class="alternatif-col">{{ $item->alternatif }}</td>
                            <td>{{ $item->c1 }}</td>
                            <td>{{ $item->c2 }}</td>
                            <td>{{ $item->c3 }}</td>
                            <td>{{ $item->c4 }}</td>
                            <td>{{ $item->c5 }}</td>
                            <td>{{ $item->c6 }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th><b>Tipe</b></th>
                            <th>Cost</th>
                            <th>Benefit</th>
                            <th>Cost</th>
                            <th>Benefit</th>
                            <th>Benefit</th>
                            <th>Cost</th>
                        </tr>
                    </tbody>
                </table>
                 <button class="btn btn-sm btn-warning">Lihat Keterangan</button>
                <hr>
            </div>
        </div>
   </div>

    {{-- ----------STEP 1--------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>1. Matrix Keputusan X</b></h4>
                <table class="table table-bordered">
                    <thead>
                       <tr class="table-warning">
                            <th class="alternatif-col">Alternatif</th>
                            <th>c1</th>
                            <th>c2</th>
                            <th>c3</th>
                            <th>c4</th>
                            <th>c5</th>
                            <th>c6</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($konvers as $konver)
                        <tr>
                            <td class="alternatif-col">{{ $konver->alternatif }}</td>
                            <td>{{ $konver->c1 }}</td>
                            <td>{{ $konver->c2 }}</td>
                            <td>{{ $konver->c3 }}</td>
                            <td>{{ $konver->c4 }}</td>
                            <td>{{ $konver->c5 }}</td>
                            <td>{{ $konver->c6 }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th>Total Euclidean</th>
                            <th>{{ number_format($results['c1'], 2) }}</th>
                            <th>{{ number_format($results['c2'], 2) }}</th>
                            <th>{{ number_format($results['c3'], 2) }}</th>
                            <th>{{ number_format($results['c4'], 2) }}</th>
                            <th>{{ number_format($results['c5'], 2) }}</th>
                            <th>{{ number_format($results['c6'], 2) }}</th>
                        </tr>
                    </tbody>
                </table>
                 <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>

    {{-- ----------STEP 2--------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>2. Matrix Keputusan Ternormalasasi (R)</b></h4>
                <table class="table table-bordered">
                    <thead>
                         <tr class="table-warning">
                            <th class="alternatif-col">Alternatif</th>
                            <th>c1</th>
                            <th>c2</th>
                            <th>c3</th>
                            <th>c4</th>
                            <th>c5</th>
                            <th>c6</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($normalizedValues as $normalized)
                        <tr>
                            <td class="alternatif-col">{{ $normalized['alternatif'] }}</td>
                            <td>{{ $normalized['c1'] }}</td>
                            <td>{{ $normalized['c2'] }}</td>
                            <td>{{ $normalized['c3'] }}</td>
                            <td>{{ $normalized['c4'] }}</td>
                            <td>{{ $normalized['c5'] }}</td>
                            <td>{{ $normalized['c6'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>

    {{-- ----------STEP 3--------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>3. matriks keputusan ternormalisasi (Y)</b></h4>
                <table class="table table-bordered">
                    <thead>
                         <tr class="table-warning">
                            <th class="alternatif-col">Alternatif</th>
                            <th>c1</th>
                            <th>c2</th>
                            <th>c3</th>
                            <th>c4</th>
                            <th>c5</th>
                            <th>c6</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($weightedValues as $value)
                        <tr>
                            <td>{{ $value['alternatif'] }}</td>
                            <td>{{ $value['c1'] }}</td>
                            <td>{{ $value['c2'] }}</td>
                            <td>{{ $value['c3'] }}</td>
                            <td>{{ $value['c4'] }}</td>
                            <td>{{ $value['c5'] }}</td>
                            <td>{{ $value['c6'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                 <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>

    {{-- ----------STEP 4 (A+ A-) --------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>4. Solusi Ideal</b></h4>
                <br>
                <h5><b>Nilai A+</b></h5>
                <table class="table table-bordered">
                    <thead>
                         <tr class="table-warning">
                            <th>y1+</th>
                            <th>y2+</th>
                            <th>y3+</th>
                            <th>y4+</th>
                            <th>y5+</th>
                            <th>y6+</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td>{{ $aPlus['c1'] }}</td>
                             <td>{{ $aPlus['c2'] }}</td>
                             <td>{{ $aPlus['c3'] }}</td>
                             <td>{{ $aPlus['c4'] }}</td>
                             <td>{{ $aPlus['c5'] }}</td>
                             <td>{{ $aPlus['c6'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h5><b>Nilai A-</b></h5>
                <table class="table table-bordered">
                    <thead>
                         <tr class="table-warning">
                            <th>y1-</th>
                            <th>y2-</th>
                            <th>y3-</th>
                            <th>y4-</th>
                            <th>y5-</th>
                            <th>y6-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $aMinus['c1'] }}</td>
                            <td>{{ $aMinus['c2'] }}</td>
                            <td>{{ $aMinus['c3'] }}</td>
                            <td>{{ $aMinus['c4'] }}</td>
                            <td>{{ $aMinus['c5'] }}</td>
                            <td>{{ $aMinus['c6'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>

   {{-- ----------STEP 5 (D+ D-) --------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>5. jarak Antara Nilai Terbobot Setiap Alternatif Solusi Postif & Negatif</b></h4>
                <br>
                <h5><b>Jarak D+ dan D-</b></h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            <th>D+</th>
                            <th>D-</th>
                        </tr>
                    </thead>
                   @php
                        $no = 1;
                        $no1 = 1;
                    @endphp
                        <tbody>
                            @foreach ($distances as $index => $distance)
                            <tr>
                                <td>{{ $weightedValues[$index]['alternatif'] }}</td>
                                <td>(D{{ $no++ }}+) <b>{{ number_format($distance['dPlus'], 4) }}</b></td>
                                <td>(D{{ $no1++ }}-) <b>{{ number_format($distance['dMinus'], 4) }}</b></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>

      {{-- ----------STEP 6 (V) --------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><b>6. Menghitung Kedekatan Relatif Terhadap Solusi Ideal</b></h4>
                <br>
                <h5><b>Relatif Solusi Ideal</b></h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            <th>V</th>
                        </tr>
                    </thead>
                   @php
                        $no = 1;
                    @endphp

                        <tbody>
                            @foreach ($distances as $index => $distance)
                            <tr>
                                <td>{{ $weightedValues[$index]['alternatif'] }}</td>
                                <td>(V{{ $no++ }}) <b>{{ number_format($vValues[$index], 4) }}</b></td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
                <button class="btn btn-sm btn-warning">Lihat Rumus</button>
                <hr>
            </div>
        </div>
   </div>
   




@endsection