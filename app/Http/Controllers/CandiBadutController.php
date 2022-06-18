<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandiBadutController extends Controller
{
    public function index () {
        return view('candi-badut', ['testimoni' => ['azizi'   => ['nama' => 'Hendro',
                                                                    'pesan' => '“Asri, walaupun di tengah perumahan. Kalau rekreasi keluarga kayaknya masih kurang. Fasilitas di Candi Badut masih terbatas.”',
                                                                    'img' => 'assets/img/Testimoni_Hendro.png'],
                                                                'hayley'  => ['nama' => 'Giska',
                                                                    'pesan' => '“Yang mau foto bener-bener bisa puas banget. Lokasi juga dekat dengan pusat Kota Malang. Recommended deh.”',
                                                                    'img' => 'assets/img/Testimoni_Giska.png'],
                                                                'ronaldo' => ['nama' => 'Ahmad',
                                                                    'pesan' => '“Sunyi, sepi, dan enak suasananya. Akses jalan juga mudah dicapai.”',
                                                                    'img' => 'assets/img/Testimoni_Ahmad.png']
                                                                ], 
                            'fitur' => ['testimoni' => ['nama' => 'Testimoni',
                                            'desc' => 'Pengguna dapat mengirim dan melihat testimoni dari pengguna lain yang telah menggunakan website Candi Badut.',
                                            'img'  => 'assets/img/Icon Testimoni.png',
                                            'href' => 'testimoni'
                                            ],
                            'sejarah'   => ['nama' => 'Sejarah',
                                            'desc' => 'Pengguna dapat membaca dan mendengarkan sejarah dari objek wisata Candi Badut.',
                                            'img'  => 'assets/img/Icon Sejarah.png',
                                            'href' => 'sejarah'
                                            ],
                            'pesan tiket' => ['nama' => 'Pesan Tiket',
                                            'desc' => 'Pengguna dapat memesan tiket objek wisata Candi Badut melalui website kami.',
                                            'img'  => 'assets/img/Icon Pesan Tiket.png',
                                            'href' => 'pesan-tiket'
                                            ],
                            'bawa saya ke sana'   => ['nama' => 'Bawa Saya ke Sana',
                                                    'desc' => 'Pengguna dapat mengetahui lokasi dari objek wisata Candi Badut dan akan diarahkan melalui Google Street View.',
                                                    'img'  => 'assets/img/Icon Bawa Saya ke Sana.png',
                                                    'href' => 'bawa-saya-ke-sana'
                                                    ],
                            'stan foto'   => ['nama' => 'Stan Foto',
                                            'desc' => 'Pengguna dapat menggunakan filter instagram WiBaKu dengan latar belakang objek wisata Candi Badut.',
                                            'img'  => 'assets/img/Icon Stan Foto.png',
                                            'href' => 'stan-foto'
                                            ],
                            'augmented reality'   => ['nama' => 'Augmented Reality',
                                                    'desc' => 'Pengguna dapat menggunakan filter AR objek wisata Candi Badut melalui instagram WiBaKu.',
                                                    'img'  => 'assets/img/Icon Augmented Reality.png',
                                                    'href' => 'augmented-reality'
                                                    ],
                            'tur virtual 360*'   => ['nama' => 'Tur Virtual 360°',
                                                    'desc' => 'Pengguna dapat melakukan tur virtual secara 360° objek wisata Candi Badut.',
                                                    'img'  => 'assets/img/Icon Tur Virtual 360.png',
                                                    'href' => 'tur-virtual-360'
                                                    ],
                            'galeri foto'   => ['nama' => 'Galeri Foto',
                                                'desc' => 'Pengguna dapat melihat kumpulan foto menarik dari objek wisata Candi Badut.',
                                                'img'  => 'assets/img/Icon Galeri Foto.png',
                                                'href' => 'galeri-foto'
                                                ]
                                                ]
                                            ]);
    }
}
