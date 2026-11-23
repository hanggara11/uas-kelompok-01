<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function hanggara(): View
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

    public function gekya(): View
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

    public function anonim(): View
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
