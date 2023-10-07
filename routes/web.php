<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});
Route::get('/gyms', function () {
    return view('Gyms/index', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Jolly',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ],
            [
                'no' => 2,
                'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                'nama' => 'Bungee ',
                'instruktur' => 'Agung', 
                'ruang' => 'Kelas B', 
                'rating' => '3',
            ],
            [
                'no' => 3,
                'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                'nama' => 'Yogalates ',
                'instruktur' => 'Raka',
                'ruang' => 'Kelas C',
                'rating' => '4',
            ],
            [
                'no' => 4,
                'gambar' =>
                'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg', 
                'nama' => 'Boxing ',
                'instruktur' => 'Tebri', 
                'ruang' => 'Kelas D', 
                'rating' => '5',
            ]
        ]
    ]);
});
Route::get('/presensi', function () {
    return view('Gyms/presensi', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Stefanus Vemas Aditya Mahardika',
                'kode' => '210711398',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ]
        ],
        'members' => [
            [
                "no" => 1,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "Stefanus Vemas",
                "email" => "stefanusvemas@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Black",
                "metode_pembayaran" => "Deposit Kelas"
            ],
            [
                "no" => 2,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "Aditya Mahardika",
                "email" => "adityamahardika@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Gold",
                "metode_pembayaran" => "Deposit Uang"
            ],
            [
                "no" => 3,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "John",
                "email" => "john@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Silver",
                "metode_pembayaran" => "Deposit Uang"
            ],
            [
                "no" => 4,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "Doe",
                "email" => "doe@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Silver",
                "metode_pembayaran" => "Deposit Kelas"
            ],
            [
                "no" => 5,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "Sova",
                "email" => "sova@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Gold",
                "metode_pembayaran" => "Deposit Kelas"
            ],
            [
                "no" => 6,
                "gambar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
                "nama" => "Butter",
                "email" => "butter@gmail.com",
                "no_telp" => "081234567890",
                "jenis_kartu" => "Black",
                "metode_pembayaran" => "Deposit Uang"
            ],
        ]
    ]);
});