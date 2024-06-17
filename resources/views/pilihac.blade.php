@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Pemilihan Alternatif</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Pilih Alternatif Untuk Perhitungan</a></li>
        </ol>
    </nav>
</div>

{{-- ----------Pemilihan--------- --}}
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <br>
            <h4><b>Pilih alternatif untuk melanjutkan ke perhitungan</b></h4>
            <div class="alert alert-danger">
                <p>Catatan: Minimal Pilih 3 Alternatif Air Conditioner</p>
            </div>
            <form id="acForm" action="{{ route('pilihac.update') }}" method="POST">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-warning">
                            <th>Pilih</th>
                            <th>Alternatif</th>
                            <th>Merek</th>
                            <th>Harga</th>
                            <th>Tenaga</th>
                            <th>Daya</th>
                            <th>Kapasitas Ruangan</th>
                            <th>Garansi</th>
                            <th>Berat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($airConditioners as $ac)
                        <tr>
                            <td><input type="checkbox" name="selected_ids[]" value="{{ $ac->id }}"></td>
                            <td>{{ $ac->alternatif }}</td>
                            <td>{{ $ac->merek }}</td>
                            <td>Rp {{ is_numeric($ac->c1) ? number_format($ac->c1) : $ac->c1 }}</td>
                            <td>{{ $ac->c2 }} PK</td>
                            <td>{{ $ac->c3 }} Watt</td>
                            <td>{{ $ac->c4 }} m2</td>
                            <td>{{ $ac->c5 }} Tahun</td>
                            <td>{{ $ac->c6 }} Kg</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-warning" type="button" onclick="validateForm()">Simpan Pilihan Alternatif</button>
                <hr>
            </form>
        </div>
    </div>
</div>

{{-- Modal Minimal 3 Data --}}
<div class="modal fade" id="noDataModal" tabindex="-1" aria-labelledby="noDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="noDataModalLabel">Peringatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tidak ada data yang dipilih. Silakan pilih setidaknya tiga alternatif AC.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Konfirmasi --}}
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data alternatif yang telah dipilih akan diganti dengan pilihan terbaru ini, yakin?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="submitForm()">Ya, Simpan</button>
            </div>
        </div>
    </div>
</div>
<script>
function validateForm() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    if (checkboxes.length < 3) {
        var noDataModal = new bootstrap.Modal(document.getElementById('noDataModal'));
        noDataModal.show();
    } else {
        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        confirmationModal.show();
    }
}

function submitForm() {
    document.getElementById('acForm').submit();
}
</script>

@endsection
