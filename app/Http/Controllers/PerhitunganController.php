<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;
use App\Models\Konver;
use App\Models\Data;
use App\Models\Real;

class PerhitunganController extends Controller
{
    
    public function pemilihan(){
        $airConditioners = Real::all();
        return view('pilihac', compact('airConditioners'));
    }

    public function update(Request $request)
     {
        $selectedIds = $request->input('selected_ids');
        $airConditioners = Real::whereIn('id', $selectedIds)->get();
        
        Data::truncate();
        Konver::truncate();


        foreach ($airConditioners as $ac) {
            Data::updateOrCreate(
                ['alternatif' => $ac->alternatif],
                ['c1' => $ac->c1, 'c2' => $ac->c2, 'c3' => $ac->c3, 'c4' => $ac->c4, 'c5' => $ac->c5, 'c6' => $ac->c6, 'v' => $ac->v]
            );

            Konver::updateOrCreate(
                ['alternatif' => $ac->alternatif],
                [
                    'c1' => $this->convertC1($ac->c1),
                    'c2' => $this->convertC2($ac->c2),
                    'c3' => $this->convertC3($ac->c3),
                    'c4' => $this->convertC4($ac->c4),
                    'c5' => $this->convertC5($ac->c5),
                    'c6' => $this->convertC6($ac->c6),
                    'v' => $ac->v
                ]
            );
        }

        return redirect()->route('priview')->with('success', 'Data Alternatif Telah Disimpan');
    }

    private function convertC1($value)
     {
        if ($value >= 2000000 && $value <= 2999999) return 1;
        if ($value >= 3000000 && $value <= 3999999) return 2;
        if ($value >= 4000000 && $value <= 4999999) return 3;
        if ($value >= 5000000 && $value <= 6000000) return 4;
        if ($value > 6000000) return 5;
        return null;
    }

    private function convertC2($value)
      {
        if ($value == 0.5) return 1;
        if ($value == 1) return 2;
        if ($value == 1.5) return 3;
        if ($value == 2) return 4;
        if ($value == 2.5) return 5;
        return null;
    }

    private function convertC3($value)
     {
        if ($value >= 250 && $value <= 299) return 1;
        if ($value >= 300 && $value <= 499) return 2;
        if ($value >= 500 && $value <= 699) return 3;
        if ($value >= 700 && $value <= 900) return 4;
        if ($value > 900) return 5;
        return null;
    }

    private function convertC4($value)
     {
        if ($value >= 8 && $value <= 10) return 1;
        if ($value >= 11 && $value <= 15) return 2;
        if ($value >= 16 && $value <= 22) return 3;
        if ($value >= 23 && $value <= 30) return 4;
        if ($value > 30) return 5;
        return null;
    }

    private function convertC5($value)
     {
        if ($value < 0) return 1;
        if ($value >= 1 && $value <= 2) return 2;
        if ($value >= 3 && $value <= 4) return 3;
        if ($value >= 5 && $value <= 6) return 4;
        if ($value > 6) return 5;
        return null;
    }

    private function convertC6($value)
     {   
        if ($value >= 18 && $value <= 24) return 1;
        if ($value >= 25 && $value <= 29) return 2;
        if ($value >= 30 && $value <= 34) return 3;
        if ($value >= 35 && $value <= 37) return 4;
        if ($value > 37) return 5;
        return null;
    }
    
    public function priview(){

        $data = Data::all();
        $konversi = Konver::all();
        return view('priview', compact('data','konversi'));
    }
    
    public function bobot(){
        return view('bobot');
    }

    public function bobot_post(Request $request){
    // Truncate tabel Bobot
    Bobot::truncate();

    // Validasi request
    $request->validate([
        'harga' => 'required|numeric',
        'tenaga' => 'required|numeric',
        'daya' => 'required|numeric',
        'kapasitas' => 'required|numeric',
        'garansi' => 'required|numeric',
        'berat' => 'required|numeric'
    ]);

    // Simpan bobot baru
    $criteria1 = ['harga', 'daya', 'berat'];
    foreach ($criteria1 as $kriteria) {
        Bobot::create([
            'kriteria' => $kriteria,
            'tipe' => 'cost',
            'bobot' => $request->$kriteria,
            'w' => $request->$kriteria / 100
        ]);
    }

    $criteria = ['tenaga', 'kapasitas', 'garansi'];
    foreach ($criteria as $kriteria) {
        Bobot::create([
            'kriteria' => $kriteria,
            'tipe' => 'benefit',
            'bobot' => $request->$kriteria,
            'w' => $request->$kriteria / 100
        ]);
    }

    return redirect()->route('perhitungan')->with('success','Bobot Kriteria Berhasil Disimpan');
}


    public function index()
     {
        $dataset = Data::all();
        $bobot = Bobot::all();
        $konvers = Konver::all();

        $squaredSums = [
            'c1' => 0,
            'c2' => 0,
            'c3' => 0,
            'c4' => 0,
            'c5' => 0,
            'c6' => 0,
        ];

        foreach ($konvers as $konver) {
            $squaredSums['c1'] += pow((float)$konver->c1, 2);
            $squaredSums['c2'] += pow((float)$konver->c2, 2);
            $squaredSums['c3'] += pow((float)$konver->c3, 2);
            $squaredSums['c4'] += pow((float)$konver->c4, 2);
            $squaredSums['c5'] += pow((float)$konver->c5, 2);
            $squaredSums['c6'] += pow((float)$konver->c6, 2);
        }

        $euclideanNorms = [
            'c1' => sqrt($squaredSums['c1']),
            'c2' => sqrt($squaredSums['c2']),
            'c3' => sqrt($squaredSums['c3']),
            'c4' => sqrt($squaredSums['c4']),
            'c5' => sqrt($squaredSums['c5']),
            'c6' => sqrt($squaredSums['c6']),
        ];

        $normalizedValues = [];
        $weightedValues = [];

        $bobotValues = $bobot->pluck('w')->toArray();

        foreach ($konvers as $konver) {
            $normalized = [
                'alternatif' => $konver->alternatif,
                'c1' => number_format((float)$konver->c1 / $euclideanNorms['c1'], 4),
                'c2' => number_format((float)$konver->c2 / $euclideanNorms['c2'], 4),
                'c3' => number_format((float)$konver->c3 / $euclideanNorms['c3'], 4),
                'c4' => number_format((float)$konver->c4 / $euclideanNorms['c4'], 4),
                'c5' => number_format((float)$konver->c5 / $euclideanNorms['c5'], 4),
                'c6' => number_format((float)$konver->c6 / $euclideanNorms['c6'], 4),
            ];

        $normalizedValues[] = $normalized;

        $weighted = [
            'alternatif' => $konver->alternatif,
            'c1' => number_format((float)$normalized['c1'] * $bobotValues[0], 4),
            'c2' => number_format((float)$normalized['c2'] * $bobotValues[1], 4),
            'c3' => number_format((float)$normalized['c3'] * $bobotValues[2], 4),
            'c4' => number_format((float)$normalized['c4'] * $bobotValues[3], 4),
            'c5' => number_format((float)$normalized['c5'] * $bobotValues[4], 4),
            'c6' => number_format((float)$normalized['c6'] * $bobotValues[5], 4),
            ];

        $weightedValues[] = $weighted;
        }

        $aPlus = [
            'c1' => min(array_column($weightedValues, 'c1')),
            'c2' => max(array_column($weightedValues, 'c2')),
            'c3' => min(array_column($weightedValues, 'c3')),
            'c4' => max(array_column($weightedValues, 'c4')),
            'c5' => max(array_column($weightedValues, 'c5')),
            'c6' => min(array_column($weightedValues, 'c6')),
        ];

        $aMinus = [
            'c1' => max(array_column($weightedValues, 'c1')),
            'c2' => min(array_column($weightedValues, 'c2')),
            'c3' => max(array_column($weightedValues, 'c3')),
            'c4' => min(array_column($weightedValues, 'c4')),
            'c5' => min(array_column($weightedValues, 'c5')),
            'c6' => max(array_column($weightedValues, 'c6')),
        ];
    

        $distances = $this->calculateDistance($weightedValues, $aPlus, $aMinus);
        $vValues = $this->calculatePreferenceValues($distances);

        return view('perhitungan', [
            'konvers' => $konvers,
            'results' => $euclideanNorms,
            'normalizedValues' => $normalizedValues,
            'weightedValues' => $weightedValues,
            'bobot' => $bobot,
            'dataset' => $dataset,
            'aPlus' => $aPlus,
            'aMinus' => $aMinus,
            'distances' => $distances,
            'vValues' => $vValues,
            ]);
    }

    private function calculateDistance($alternatives, $aPlus, $aMinus)
        {
        $distances = [];

        foreach ($alternatives as $key => $alternative) {
            $dPlus = sqrt(
                pow(($aPlus['c1'] - $alternative['c1']), 2) +
                pow(($aPlus['c2'] - $alternative['c2']), 2) +
                pow(($aPlus['c3'] - $alternative['c3']), 2) +
                pow(($aPlus['c4'] - $alternative['c4']), 2) +
                pow(($aPlus['c5'] - $alternative['c5']), 2) +
                pow(($aPlus['c6'] - $alternative['c6']), 2)
            );

            $dMinus = sqrt(
                pow(($aMinus['c1'] - $alternative['c1']), 2) +
                pow(($aMinus['c2'] - $alternative['c2']), 2) +
                pow(($aMinus['c3'] - $alternative['c3']), 2) +
                pow(($aMinus['c4'] - $alternative['c4']), 2) +
                pow(($aMinus['c5'] - $alternative['c5']), 2) +
                pow(($aMinus['c6'] - $alternative['c6']), 2)
            );

            $distances[$key] = ['dPlus' => $dPlus, 'dMinus' => $dMinus];
            }

            return $distances;
    }

    private function calculatePreferenceValues($distances)
         {
            $vValues = [];

             foreach ($distances as $key => $distance) {
                $v = $distance['dMinus'] / ($distance['dPlus'] + $distance['dMinus']);
                $vValues[$key] = number_format($v, 4);
             }

            return $vValues;
    }

}
