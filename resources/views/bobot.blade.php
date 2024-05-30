@extends('layouts.app')

@section('content')

     <div class="pagetitle">
      <h1>Pembobotan Kriteria</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Pembobotan kriteria alternatif</a></li>
        </ol>
      </nav>
    </div>

                       @if (session('success'))
                        <div class="alert alert-primary">{{session('success')}}</div>
                    @endif

          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masukan Bobot</h5>
                    <p class="text-center small">Pembobotan tidak bisa lebih dari 100% untuk semua kriteria</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{route('bobot.post')}}" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="harga" class="form-label">Harga (c1) <b>(Cost)</b></label>
                      <input type="number" name="harga" class="form-control" id="harga" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari harga</div>
                    </div>

                    <div class="col-12">
                      <label for="tenaga" class="form-label">Tenaga (c2) <b>(Benefit)</b></label>
                      <input type="number" name="tenaga" class="form-control" id="tenaga" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari tenaga</div>
                    </div>

                    <div class="col-12">
                      <label for="daya" class="form-label">Daya (c3) <b>(Cost)</b></label>
                      <input type="number" name="daya" class="form-control" id="daya" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari tenaga</div>
                    </div>

                    <div class="col-12">
                      <label for="kapasitas" class="form-label">Kapasitas Ruangan (c4) <b>(Benefit)</b></label>
                      <input type="number" name="kapasitas" class="form-control" id="kapasitas" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari tenaga</div>
                    </div>

                    <div class="col-12">
                      <label for="garansi" class="form-label">Garansi (c5) <b>(Benefit)</b></label>
                      <input type="number" name="garansi" class="form-control" id="garansi" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari tenaga</div>
                    </div>

                    <div class="col-12">
                      <label for="berat" class="form-label">Berat (c6) <b>(Cost)</b></label>
                      <input type="number" name="berat" class="form-control" id="berat" required="" placeholder="%">
                      <div class="invalid-feedback">Masukan bobot dari tenaga</div>
                    </div>

                      <p id="total">Total : 0% Bobot</p>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Simpan</button>
                    </div>

                  </form>

                </div>
              </div>

            </div>
          </div>


          <script type="text/javascript">
    const inputs = document.querySelectorAll('input[type="number"]');
    const totalElement = document.getElementById('total');

    inputs.forEach(input => {
        input.addEventListener('input', updateTotal);
    });

    function updateTotal() {
        let total = 0;
        inputs.forEach(input => {
            total += parseFloat(input.value) || 0;
        });
        totalElement.innerText = `Total : ${total}%`;
    }
</script>
    
@endsection