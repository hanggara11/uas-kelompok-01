<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HanggaraController extends Controller
{
    public function index(): View
    {
        return view('profiles.hanggara', [
            'profile' => [
                'name' => 'Hanggara',
                'initial' => 'H',
                'description' => 'Halaman biodata Hanggara.',
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
