<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman login
    public function login()
    {
        return view('login');
    }

    // Proses login
    public function prosesLogin(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect('/login');
        }

        return redirect('/dashboard?username=' . urlencode($username));
    }

    // Halaman dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('dashboard', compact('username'));
    }

    // Halaman profil
        public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('profile', compact('username'));
    }

    // Halaman pengelolaan tugas
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        $tugas = [
            [
                'mata_kuliah' => 'Pemrograman Web',
                'nama' => 'Slicing Website HTML/CSS/JS',
                'deadline' => '10 November 2026',
                'status' => 'Proses'
            ],
            [
                'mata_kuliah' => 'Sistem Operasi',
                'nama' => 'Mengerjakan laporan praktikum',
                'deadline' => '11 November 2026',
                'status' => 'Belum'
            ],
            [
                'mata_kuliah' => 'Basis Data',
                'nama' => 'Menyelesaikan latihan SQL',
                'deadline' => '12 November 2026',
                'status' => 'Selesai'
            ],
            [
                'mata_kuliah' => 'Analisis Desain Sistem',
                'nama' => 'Membuat diagram UML',
                'deadline' => '14 November 2026',
                'status' => 'Belum'
            ],
            [
                'mata_kuliah' => 'Pemrograman Web',
                'nama' => 'Mempelajari Laravel',
                'deadline' => '15 November 2026',
                'status' => 'Proses'
            ]
        ];

        return view('pengelolaan', compact('username', 'tugas'));
    }
}