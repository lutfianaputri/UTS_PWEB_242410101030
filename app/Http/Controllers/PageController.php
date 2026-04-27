<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username', 'Guest');

        $koleksiBuku =
        [
            ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'rate' => '4.5', 'cover' => asset('resource/Filosofi Teras.jpg')],
            ['judul' => 'Perempuan Yang Menangis Kepada Bulan Hitam', 'penulis' => 'Dian Purnomo', 'rate' => '4.7', 'cover' => asset('resource/Perempuan Yang Menangis Kepada Bulan Hitam.jpg')],
            ['judul' => 'Laut Bercerita', 'penulis' => 'Leila S Chudori', 'rate' => '4.8', 'cover' => asset('resource/laut bercerita.webp')],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'rate' => '4.7', 'cover' => asset('resource/bumi manusia.jpeg')],
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'rate' => '4.7', 'cover' => asset('resource/laskar pelangi.jpg')],
            ['judul' => 'The Alchemist', 'penulis' => 'Paulo Coelho', 'rate' => '4.9', 'cover' => asset('resource/The Alchemist.jpg')],
            ['judul' => 'Merawat Luka Batin', 'penulis' => 'dr. Jiemi Ardian, Sp.K.J.', 'rate' => '4.4', 'cover' => asset('resource/Merawat Luka Batin.png')]
        ];

        return view('dashboard', compact('username', 'koleksiBuku'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username', 'Guest');
        $email = strtolower($username) . '@student.unej.ac.id';
        return view('profile', compact('username', 'email'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->input('username', 'Guest');
        $bukuBaru = $request->input('buku');
        $ulasanBaru = $request->input('ulasan');
        $ratingBaru = $request->input('rating');

        $ulasanPribadi =
        [
            ['buku' => 'Filosofi Teras', 'tgl' => '25 April 2026', 'isi' => 'Intinya cuma 2 didunia ini ada yang bisa kita atur dan ada yang gak bisa. Kita akan merasa bahagia kalau fokus ke hal yang bisa kita atur, dan merasa sengsara kalau fokus ke hal yang gak bisa kita atur. Cocok buat yang suka overthinking!', 'rating' => '4'],
            ['buku' => 'Perempuan Yang Menangis Kepada Bulan Hitam', 'tgl' => '20 April 2026', 'isi' => 'Cocok buat yang mau marah-marah. Bapaknya gak merasa bersalah samsek', 'rating'=> '5'],
        ];

        if ($bukuBaru && $ulasanBaru)
        {
            $ulasanPribadi = array_filter($ulasanPribadi, function($item) use ($bukuBaru)
            {
            return $item['buku'] !== $bukuBaru;
            });
            array_unshift($ulasanPribadi,
            [
                'buku' => $bukuBaru,
                'tgl' => 'Baru Saja',
                'isi' => $ulasanBaru,
                'rating' => $ratingBaru ?? '5'
            ]);
        }
        return view('pengelolaan', compact('username', 'ulasanPribadi'));
    }

    public function formUlasan(Request $request)
    {
    $username = $request->input('username', 'Guest');
    $buku = $request->input('buku', '');
    $ulasanLama = $request->input('ulasan', '');

    return view('form-ulasan', compact('username', 'buku', 'ulasanLama'));
    }
}
