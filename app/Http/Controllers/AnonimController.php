<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AnonimController extends Controller
{
    public function index(): View
    {
        return view('profiles.anonim', [
            'profile' => [
                'name' => 'Anonim',
                'initial' => '?',
                'description' => 'Halaman biodata tanpa identitas pribadi.',
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
