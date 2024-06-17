@extends('layouts.app')

@section('content')

<div class="pagetitle">
      <h1>Data Alternatif</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Data alternatif yang telah dipilih.</a></li>
        </ol>
      </nav>
</div>

<a href="{{route('pilihac')}}" class="btn btn-primary">Kembali</a>
<a href="#" class="btn btn-warning" onclick="showPembobotanModal()">Lanjut Kepombobotan?</a>
@if (session('success'))
<hr>
    <div class="alert alert-primary">{{session('success')}}</div>
@endif

{{-- ----------DATASET AC--------- --}} 
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <br>
            <h4><b>Alternatif yang Dipilih</b></h4>
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
                    @foreach($data as $item)
                    <tr>
                        <td class="alternatif-col">{{ $item->alternatif }}</td>
                        <td>Rp {{ number_format($item->c1) }}</td>
                        <td>{{ $item->c2 }} PK</td>
                        <td>{{ $item->c3 }} Watt</td>
                        <td>{{ $item->c4 }} m2</td>
                        <td>{{ $item->c5 }} Tahun</td>
                        <td>{{ $item->c6 }} Kg</td>
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
            <hr>
        </div>
    </div>
</div>

{{-- ----------DATASET AC Setelah Dikonversi--------- --}} 
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <br>
            <h4><b>Data Alternatif Setelah Dikonversi</b></h4>
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
                    @foreach($konversi as $item)
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
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#keteranganModal">Lihat Keterangan</button>
            <hr>
        </div>
    </div>
</div>

{{-- ----------Modal Keterangan--------- --}} 
<div class="modal fade" id="keteranganModal" tabindex="-1" aria-labelledby="keteranganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="keteranganModalLabel">Keterangan Konversi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Konversi</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>C5</th>
                            <th>C6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rp 2.000.000 - 2.999.999</td>
                            <td>0,5 PK</td>
                            <td>250-299 Watt</td>
                            <td>8-10 m2</td>
                            <td>5 Bulan - 11 Bulan</td>
                            <td>18-24 Kg</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rp 3.000.000 - 3.999.999</td>
                            <td>1 PK</td>
                            <td>300-499 Watt</td>
                            <td>11-15 m2</td>
                            <td>1 Tahun - 2 Tahun</td>
                            <td>25-29 Kg</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rp 4.000.000 - 4.999.999</td>
                            <td>1,5 PK</td>
                            <td>500-699 Watt</td>
                            <td>16-22 m2</td>
                            <td>3 Tahun - 4 Tahun</td>
                            <td>30-34 Kg</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rp 5.000.000 - 6.000.000</td>
                            <td>2 PK</td>
                            <td>700-900 Watt</td>
                            <td>23-30 m2</td>
                            <td>5 Tahun - 6 Tahun</td>
                            <td>35-37 Kg</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rp >6.000.000</td>
                            <td>2,5 PK</td>
                            <td>>900 Watt</td>
                            <td>>30 m2</td>
                            <td>>6 Tahun</td>
                            <td>>37 Kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- ----------Modal bobot--------- --}} 
<div class="modal fade" id="pembobotanModal" tabindex="-1" aria-labelledby="pembobotanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pembobotanModalLabel">Konfirmasi Pembobotan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Berikut merupakan pengisian pembobotan alternatif, jika data alternatif yang telah dipilih sudah benar maka, tekan oke.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="{{ route('bobot') }}" class="btn btn-primary">Oke</a>
            </div>
        </div>
    </div>
</div>

<script>
function showPembobotanModal() {
    var pembobotanModal = new bootstrap.Modal(document.getElementById('pembobotanModal'));
    pembobotanModal.show();
}
</script>

@endsection
