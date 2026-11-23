<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class GekyaController extends Controller
{
    public function index(): View
    {
        return view('profiles.gekya', [
            'profile' => [
                'name' => 'Gekya',
                'initial' => 'G',
                'description' => 'Halaman biodata Gekya.',
                'details' => $this->emptyDetails(),
            ],
        ]);
    }

    private function emptyDetails(): array
    {
        return [
            'Tempat, tanggal lahir' => 'Belum diisi',
            'Jenis kelamin' => 'Belum diisi',
            'Alamat' => 'Belum diisi',
            'Pendidikan' => 'Belum diisi',
            'Hobi' => 'Belum diisi',
        ];
    }
}
