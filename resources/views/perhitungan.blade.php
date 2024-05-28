@extends('layouts.app')
  <style>
        .alternatif-col {
            width: 25%;
        }
    </style>
@section('content')

 
    {{-- ----------PEMBOBOTAN--------- --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <br>
                <h4>Pembobotan Kriteria</h4>
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
                <h4>Dataset Alternatif AC</h4>
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
                <h4>1. Konversi Data & Normalisasi Euclidean</h4>
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
                <h4>2. Normalized Values</h4>
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
                <h4>3. Weighted Normalized Values</h4>
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

   




@endsection