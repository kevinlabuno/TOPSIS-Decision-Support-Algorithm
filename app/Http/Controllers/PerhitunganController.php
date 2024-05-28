<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;
use App\Models\Konver;
use App\Models\Data;

class PerhitunganController extends Controller
{
    public function bobot(){
        return view('bobot');
    }

    public function bobot_post(Request $request){
         $request->validate([
            'harga' => 'required|numeric',
            'tenaga' => 'required|numeric',
            'daya' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'garansi' => 'required|numeric',
            'berat' => 'required|numeric'
        ]);

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
        return redirect()->back()->with('success','Bobot Kriteria Berhasil Disimpan');
        
    }

    public function index(){

$dataset = Data::all();
$bobot = Bobot::all();
$konvers = Konver::all();

// Menghitung Euclidean Norm
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

// Menghitung nilai normalisasi
$normalizedValues = [];
$weightedValues = [];

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

    $bobotValues = $bobot->pluck('w')->toArray(); // Mengambil nilai 'w' dari bobot sebagai array
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


return view('perhitungan', [
    'konvers' => $konvers,
    'results' => $euclideanNorms,
    'normalizedValues' => $normalizedValues,
    'weightedValues' => $weightedValues,
    'bobot' => $bobot,
    'dataset' => $dataset,
]);
    }
}
