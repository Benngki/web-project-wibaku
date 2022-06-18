<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    return view('home', ['testimoni' => ['azizi'   => ['nama' => 'Azizi',
    'pesan' => '“Website Candi Badut fiturnya banyak banget. Candi Badut juga instagramable buat foto-foto. Makasih WiBaKu Team. <3”',
    'img' => 'assets/img/Testimoni_Azizi.png'],
'hayley'  => ['nama' => 'Hayley',
    'pesan' => '“Website ini sangat membantu saya menelusuri Candi Badut yang ada di Malang, Jawa Timur. Karena saya hanya tau Bali saja XD”',
    'img' => 'assets/img/Testimoni_Hayley.png'],
'ronaldo' => ['nama' => 'Ronaldo',
    'pesan' => '“Indonesia negara yang indah. Website ini membantu saya dalam memesan tiket masuk Candi Badut. Hehehe. Siuuu.”',
    'img' => 'assets/img/Testimoni_Ronaldo.png']
], 
                        'fitur' => ['testimoni' => ['nama' => 'Testimoni',
                        'desc' => 'Pengguna dapat mengirim dan melihat testimoni dari pengguna lain yang telah menggunakan website Candi Badut.',
                        'img'  => 'assets/img/Icon Testimoni.png'
                        ],
        'sejarah'   => ['nama' => 'Sejarah',
                        'desc' => 'Pengguna dapat membaca dan mendengarkan sejarah dari objek wisata Candi Badut.',
                        'img'  => 'assets/img/Icon Sejarah.png'
                        ],
        'pesan tiket' => ['nama' => 'Pesan Tiket',
                        'desc' => 'Pengguna dapat memesan tiket objek wisata Candi Badut melalui website kami.',
                        'img'  => 'assets/img/Icon Pesan Tiket.png'
                        ],
        'bawa saya ke sana'   => ['nama' => 'Bawa Saya ke Sana',
                                'desc' => 'Pengguna dapat mengetahui lokasi dari objek wisata Candi Badut dan akan diarahkan melalui Google Street View.',
                                'img'  => 'assets/img/Icon Bawa Saya ke Sana.png'
                                ],
        'stan foto'   => ['nama' => 'Stan Foto',
                        'desc' => 'Pengguna dapat menggunakan filter instagram WiBaKu dengan latar belakang objek wisata Candi Badut.',
                        'img'  => 'assets/img/Icon Stan Foto.png'
                        ],
        'augmented reality'   => ['nama' => 'Augmented Reality',
                                'desc' => 'Pengguna dapat menggunakan filter AR objek wisata Candi Badut melalui instagram WiBaKu.',
                                'img'  => 'assets/img/Icon Augmented Reality.png'
                                ],
        'tur virtual 360*'   => ['nama' => 'Tur Virtual 360°',
                                'desc' => 'Pengguna dapat melakukan tur virtual secara 360° objek wisata Candi Badut.',
                                'img'  => 'assets/img/Icon Tur Virtual 360.png'
                                ],
        'galeri foto'   => ['nama' => 'Galeri Foto',
                            'desc' => 'Pengguna dapat melihat kumpulan foto menarik dari objek wisata Candi Badut.',
                            'img'  => 'assets/img/Icon Galeri Foto.png'
                            ]
                            ]
                        ]);
    }
}
