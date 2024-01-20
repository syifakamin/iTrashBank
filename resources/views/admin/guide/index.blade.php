@extends('admin.layout.master')
@extends('admin.layout.sidebar')
@section('page_title', __('Panduan Daur Ulang'))

@section('dashboard-content')

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            {{-- ISI CONTENT DISINI --}}
            {{-- breadcrum alamat --}}
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Lainnya /</span> Panduan Daur Ulang</h4>

            <div class="card">

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h2 class="py-3 mb-4 text-center">Mengapa Daur Ulang?</h2>

                    <div class="divider">
                        <div class="divider-text">Tujuan daur ulang adalah untuk mengatasi penumpukan berbagai jenis sampah
                            lalu
                            bagaimana dengan kondisi Indonesia?</div>
                    </div>

                    {{-- card horizontal  --}}
                    <div class="col-md">
                        <div class="card mb-2">
                            <div class="row 8-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" aria-valuetext="Pekerjaan rumah kita?"
                                            aria-labelledby="heading">Pekerjaan rumah kita?</h5>

                                        <p class="mb-2">
                                            Indonesia masih terus menangani masalah penumpukan sampah, khususnya sampah
                                            plastik, dengan berbagai
                                            upaya, salah satunya dengan daur ulang sampah.
                                        </p>

                                        <p class="mb-2">
                                            Berdasarkan data dari Sistem Pengelolaan Sampah Nasional (SIPSN) Kementerian
                                            Lingkungan Hidup dan
                                            Kehutanan (KLHK), pada tahun 2021, masyarakat Indonesia menghasilkan 68 juta ton
                                            sampah .
                                        </p>

                                        <p class="mb-2">
                                            Sayangnya, hanya sekitar 10-15% sampah saja yang berhasil terdaur ulang.
                                            60-70%-nya masih berakhir
                                            di TPA dan 15-30%-nya belum terkelola.
                                        </p>

                                        <p class="mb-2">Untuk mengatasi hal ini, pemerintah terus menggencarkan
                                            anjuran
                                            manajemen sampah kepada seluruh
                                            lapisan masyarakat. Manfaat daur ulang dianggap mampu membantu mengurangi jumlah
                                            sampah
                                            masuk ke TPA
                                            dan memaksimalkan material hingga masa pakainya habis.</p>

                                        <table class="table">
                                            <thead title="Page of Content" align="center">Page Contents
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <tr>
                                                    <td>
                                                        <a href="#pengertian" class="footer-link me-4">• Pengertian
                                                            Daur Ulang Sampah</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#contoh" class="footer-link me-4">•
                                                            Contoh Sampah yang bisa didaur ulang</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#plastik" class="footer-link me-4">•
                                                            Bagaimana Cara Daur Ulang Plastik?
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#kertas" class="footer-link me-4">•
                                                            Bagaimana Cara Daur Ulang Kertas?</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-md-4 important">
                                    <img src="../assets/img/image/dumb-truck.png" alt="dumping trash truck image"
                                        class="card-img-top">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END card horizontal  --}}

                    <div class="col-md">
                        <div class="card mb-2">
                            <div class="row 8-0">
                                <div class="card-body m-4">
                                    <h3 id="pengertian" class="mt-3 "> Apa itu daur ulang?</h3>

                                    <p class="mb-2">Daur ulang sampah adalah kegiatan mengolah kembali sampah atau
                                        produk habis pakai menjadi produk baru yang bermanfaat.</p>

                                    <p class="mb-2">Dalam Kamus Besar Bahasa Indonesia (KBBI), daur ulang berarti
                                        suatu kegiatan atau pemrosesan kembali bahan yang pernah dipakai.</p>

                                    <p class="mb-2">Artinya barang bekas pakai seperti plastik, kertas, logam, kaca,
                                        dan sebagainya, akan diproses kembali untuk dimanfaatkan menjadi produk baru
                                        yang bernilai.</p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <h5 class="pb-1 mb-4 pt-3" id="contoh">Contoh Sampah yang Bisa Didaur Ulang</h5>
                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="card-img card-img-left" src="../assets/img/elements/Sampah-Plastik.jpeg"
                                            alt="image bottle of plastic ready to recycle" width="100%" height="100%" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Plastik</h5>
                                            <p class="card-text">
                                                Sampah Plastik menjadi
                                                jenis sampah yang bisa
                                                dimanfaatkan kembali material
                                                sisanya, seperti botol plastik, kantong plastik, dan beberapa material
                                                plastik lainnya.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Kaca</h5>
                                            <p class="card-text">
                                                Sampah Kaca atau berbagai
                                                benda berbahan
                                                dasar kaca lainnya dapat didaur ulang menjadi kristal kaca untuk
                                                dimanfaatkan menjadi benda berharga.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="height: 210px">
                                        <img class="card-img card-img-right" src="../assets/img/elements/Sampah-Kaca.jpeg"
                                            alt="image bottle of glass ready to recycle" width="100%" height="100%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4" style="height: 210px">
                                        <img class="card-img card-img-left"
                                            src="../assets/img/elements/Sampah-Kaleng-logam.jpeg"
                                            alt="image trash cans on the road" width="100%" height="100%" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Kaleng logam</h5>
                                            <p class="card-text">
                                                sampah kaleng logam atau
                                                metal, contohnya
                                                kemasan kaleng minuman ringan, buah dan makanan kaleng, bisa diolah kembali
                                                dan dijadikan barang berguna.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Kertas</h5>
                                            <p class="card-text">
                                                Sampah Kertas dan Berbagai
                                                jenis kertas, contohnya
                                                HVS, koran, kardus, dan majalah bisa dimanfaatkan sebagai produk daur ulang
                                                kertas, seperti kertas atau tisu toilet, serbet, karton, dan sebagainya.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="height: 210px">
                                        <img class="card-img card-img-right"
                                            src="../assets/img/elements/sampah-kertas.jpeg"
                                            alt="image woman clasterize paper trash" width="100%" height="100%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4" style="height: 210px">
                                        <img class="card-img card-img-left"
                                            src="../assets/img/elements/Sampah-Minyak.jpeg"
                                            alt="image oil spill on the road" width="100%" height="100%" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Minyak Jelantah</h5>
                                            <p class="card-text">
                                                atau minyak bekas pakai, daripada dibuang sembarangan bisa juga
                                                diproses agar lebih bermanfaat oleh ahlinya, seperti dijadikan bahan baku
                                                CPO Biodiesel pengganti solar.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sampah Organik</h5>
                                            <p class="card-text">
                                                meskipun dapat terurai secara alamiah di alam, namun apabila kuantitasnya
                                                banyak dan tidak diperlakukan dengan benar, bisa mempengaruhi kondisi
                                                lingkungan hingga menimbulkan dampak negatif.
                                            </p>
                                            <p class="card-text"><small class="text-muted">copyright image by
                                                    pexels.com</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="height: 210px">
                                        <img class="card-img card-img-right"
                                            src="../assets/img/elements/sampah-organik.jpeg" alt="image waste of banana"
                                            width="100%" height="100%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid Card - Bagaimana Cara Daur Ulang Plastik?-->
                    <h5 class="pb-1 mb-4 pt-3 text-sm-center" id="plastik">Bagaimana Cara Daur Ulang Plastik?</h5>
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/1. COLLECTION (PENGUMPULAN).jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="1. COLLECTION (PENGUMPULAN)">1. COLLECTION (PENGUMPULAN)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Langkah awal dalam proses daur ulang plastik ini sepenuhnya tergantung pada bisnis,
                                        restoran, dan masyarakat untuk membuang sampah plastik di tempat yang tepat. <br>
                                        <br>
                                        Apabila sudah dibuang di tempat sampah biasa, maka plastik tidak akan didaur ulang.
                                        Dari sini, kita dapat belajar bahwa penting untuk memisahkan sampah biasa dan sampah
                                        plastik.<br> <br>

                                        Idealnya, pemerintah juga perlu memiliki sistem pengumpulan sampah plastik yang
                                        diterapkan di rumah atau bisnis.<br> <br>

                                        Namun jika tidak memungkinkan, tempat pengumpulan plastik harus mudah diakses
                                        publik, guna memudahkan mereka yang ingin membuang sampah plastik dengan benar.">
                                        Langkah awal dalam proses daur ulang plastik ini sepenuhnya tergantung pada bisnis,
                                        restoran, dan masyarakat untuk membuang sampah plastik di tempat yang tepat. <br>
                                        <br>
                                        Apabila sudah dibuang di tempat sampah biasa, maka plastik tidak akan didaur ulang.
                                        Dari sini, kita dapat belajar bahwa penting untuk memisahkan sampah biasa dan sampah
                                        plastik.<br> <br>

                                        Idealnya, pemerintah juga perlu memiliki sistem pengumpulan sampah plastik yang
                                        diterapkan di rumah atau bisnis.<br> <br>

                                        Namun jika tidak memungkinkan, tempat pengumpulan plastik harus mudah diakses
                                        publik, guna memudahkan mereka yang ingin membuang sampah plastik dengan benar.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/2. SORTING (PENYORTIRAN).jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="2. SORTING (PENYORTIRAN)">2. SORTING (PENYORTIRAN)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Setelah tahap collection, langkah selanjutnya dalam proses daur ulang plastik adalah
                                        penyortiran.Biasanya, plastik diurutkan berdasarkan beberapa cara yang umum.<br><br>
                                        Contohnya seperti jenis plastik (bahan pembuatannya), warna plastik, atau bahkan
                                        cara pembuatannya.<br><br>
                                        Langkah dalam proses daur ulang plastik ini penting, mengingat setiap jenis plastik
                                        yang tidak sama harus mendapat perlakuan berbeda.<br><br>

                                        Terlebih lagi, terkadang beberapa fasilitas daur ulang hanya mampu mendaur ulang
                                        satu jenis sampah plastik saja.<br><br>

                                        Selain itu, pemisahan plastik berdasarkan jenis dan warna juga berhubungan dengan
                                        harga jual plastik cacahan.<br><br>

                                        Menurut praktisi daur ulang Indonesia, Marahalim Siagian, plastik bening harga
                                        jualnya lebih mahal dibandingkan yang berwarna.">
                                        Setelah tahap collection, langkah selanjutnya dalam proses daur ulang plastik adalah
                                        penyortiran.Biasanya, plastik diurutkan berdasarkan beberapa cara yang umum.<br><br>
                                        Contohnya seperti jenis plastik (bahan pembuatannya), warna plastik, atau bahkan
                                        cara pembuatannya.<br><br>
                                        Langkah dalam proses daur ulang plastik ini penting, mengingat setiap jenis plastik
                                        yang tidak sama harus mendapat perlakuan berbeda.<br><br>

                                        Terlebih lagi, terkadang beberapa fasilitas daur ulang hanya mampu mendaur ulang
                                        satu jenis sampah plastik saja.<br><br>

                                        Selain itu, pemisahan plastik berdasarkan jenis dan warna juga berhubungan dengan
                                        harga jual plastik cacahan.<br><br>

                                        Menurut praktisi daur ulang Indonesia, Marahalim Siagian, plastik bening harga
                                        jualnya lebih mahal dibandingkan yang berwarna.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/3. WASHING (PENCUCIAN).jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="3. WASHING (PENCUCIAN)">3. WASHING (PENCUCIAN)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Tidak hanya pakaian, atau bahkan buah dan sayur yang harus dicuci. Plastik yang akan
                                        didaur ulang pun demikian sebelum menuju tahap lebih lanjut. <br><br>

                                        Tujuan dari langkah dalam caradaur ulang plastik ini adalah menghilangkan kotoran
                                        dan segala sesuatu yang tidak terbuat dari bahan plastik.
                                        Seperti kita ketahui, banyak wadah dan kemasan memiliki label, perekat, atau bahkan
                                        sisa makanan yang perlu dihilangkan.<br><br>

                                        Alasannya, sampah non-plastik tidak dapat didaur ulang serta dapat menyebabkan
                                        produk akhir memiliki kualitas kurang baik.">
                                        Tidak hanya pakaian, atau bahkan buah dan sayur yang harus dicuci. Plastik yang akan
                                        didaur ulang pun demikian sebelum menuju tahap lebih lanjut. <br><br>

                                        Tujuan dari langkah dalam caradaur ulang plastik ini adalah menghilangkan kotoran
                                        dan segala sesuatu yang tidak terbuat dari bahan plastik.
                                        Seperti kita ketahui, banyak wadah dan kemasan memiliki label, perekat, atau bahkan
                                        sisa makanan yang perlu dihilangkan.<br><br>

                                        Alasannya, sampah non-plastik tidak dapat didaur ulang serta dapat menyebabkan
                                        produk akhir memiliki kualitas kurang baik.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/4. RESIZING (PERUBAHAN UKURAN).jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="4. RESIZING (PERUBAHAN UKURAN)">4. RESIZING (PERUBAHAN UKURAN)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Salah satu tahap di dalam artikelmengenai cara daur ulang plastik ini, dilakukan
                                        dengan cara menghancurkan atau membuat butiran sampah plastik menjadi partikel yang
                                        lebih kecil.<br><br>

                                        Langkah ini akan meningkatkan luas permukaan plastik, sehingga membuatnya lebih
                                        mudah untuk diproses, dibentuk kembali, dan diangkut jika diperlukan.<br><br>

                                        Di samping itu, proses daur ulang plastik ini merupakan kesempatan terakhir untuk
                                        membuang sampah non-plastik yang tidak sengaja berhasil melewati 3 langkah
                                        sebelumnya.">
                                        Salah satu tahap di dalam artikelmengenai cara daur ulang plastik ini, dilakukan
                                        dengan cara menghancurkan atau membuat butiran sampah plastik menjadi partikel yang
                                        lebih kecil.<br><br>

                                        Langkah ini akan meningkatkan luas permukaan plastik, sehingga membuatnya lebih
                                        mudah untuk diproses, dibentuk kembali, dan diangkut jika diperlukan.<br><br>

                                        Di samping itu, proses daur ulang plastik ini merupakan kesempatan terakhir untuk
                                        membuang sampah non-plastik yang tidak sengaja berhasil melewati 3 langkah
                                        sebelumnya.


                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="../assets/img/elements/5. IDENTIFIKASI DAN PEMISAHAN PLASTIK.jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="5. IDENTIFIKASI DAN PEMISAHAN PLASTIK">5. IDENTIFIKASI DAN
                                        PEMISAHAN PLASTIK</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Identifikasi dan pemisahan plastik maksudnya adalah saat partikel plastik kecil
                                        diuji untuk menentukan kualitas dan kelasnya.<br> <br>

                                        Dalam tahap proses daur ulang plastik ini, kualitas pertama yang diuji yaitu tingkat
                                        kepadatannya.<br> <br>

                                        Proses ini dilakukan dengan cara mengapungkan partikel di tangki air berukuran
                                        besar. Nantinya, partikel yang kurang padat akan mengapung. Sementara partikel yang
                                        lebih padat akan tenggelam.<br> <br>
                                        Kemudian dilakukan klasifikasi udara untuk mengukur seberapa tebal atau tipisnya
                                        suatu partikel.<br> <br>

                                        Langkah dalam proses daur ulang plastik ini dilakukan dengan cara menjatuhkan
                                        partikel ke terowongan angin kecil.<br> <br>

                                        Nantinya, potongan yang lebih kecil akan terbang lebih tinggi ke atas terowongan.
                                        Sedangkan yang lebih besar akan berada di tingkat lebih rendah.<br> <br>

                                        Di samping itu, terdapat dua faktor lain yang biasa diuji dalam proses daur ulang
                                        sampah ini, yaitu titik leleh dan warnanya. Tahap ini ditentukan dengan cara
                                        mengumpulkan serta menganalisis sampel dari setiap batch partikel plastik.">
                                        Identifikasi dan pemisahan plastik maksudnya adalah saat partikel plastik kecil
                                        diuji untuk menentukan kualitas dan kelasnya.<br> <br>

                                        Dalam tahap proses daur ulang plastik ini, kualitas pertama yang diuji yaitu tingkat
                                        kepadatannya.<br> <br>

                                        Proses ini dilakukan dengan cara mengapungkan partikel di tangki air berukuran
                                        besar. Nantinya, partikel yang kurang padat akan mengapung. Sementara partikel yang
                                        lebih padat akan tenggelam.<br> <br>
                                        Kemudian dilakukan klasifikasi udara untuk mengukur seberapa tebal atau tipisnya
                                        suatu partikel.<br> <br>

                                        Langkah dalam proses daur ulang plastik ini dilakukan dengan cara menjatuhkan
                                        partikel ke terowongan angin kecil.<br> <br>

                                        Nantinya, potongan yang lebih kecil akan terbang lebih tinggi ke atas terowongan.
                                        Sedangkan yang lebih besar akan berada di tingkat lebih rendah.<br> <br>

                                        Di samping itu, terdapat dua faktor lain yang biasa diuji dalam proses daur ulang
                                        sampah ini, yaitu titik leleh dan warnanya. Tahap ini ditentukan dengan cara
                                        mengumpulkan serta menganalisis sampel dari setiap batch partikel plastik.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/6. COMPOUNDING (PENGGABUNGAN).jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-valuetext="6. COMPOUNDING (PENGGABUNGAN)"
                                        aria-describedby="header">6. COMPOUNDING (PENGGABUNGAN)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Langkah terakhir dalam proses daur ulang plastik ini sering dinilai paling
                                        mengasyikkan. Terlebih lagi saat tahap ini, partikel akan dibuat menjadi bahan daur
                                        ulang yang nantinya dapat digunakan untuk produksi di masa mendatang.<br><br>

                                        Compounding merupakan tahap ketika partikel kecil dihancurkan dan dilebur menjadi
                                        pelet plastik. Selanjutnya, pelet ini dapat digunakan untuk produksi plastik
                                        lainnya.">
                                        Langkah terakhir dalam proses daur ulang plastik ini sering dinilai paling
                                        mengasyikkan. Terlebih lagi saat tahap ini, partikel akan dibuat menjadi bahan daur
                                        ulang yang nantinya dapat digunakan untuk produksi di masa mendatang.<br><br>

                                        Compounding merupakan tahap ketika partikel kecil dihancurkan dan dilebur menjadi
                                        pelet plastik. Selanjutnya, pelet ini dapat digunakan untuk produksi plastik
                                        lainnya.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid Card - Bagaimana Cara Daur Ulang Kertas?-->
                    <h5 class="pb-1 mb-4 pt-3 text-sm-center" id="kertas">Bagaimana Cara Daur Ulang Kertas?</h5>
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="../assets/img/elements/1. COLLECTION (PENGUMPULAN)-kertas.jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="1. Collection (Pengumpulan)">1. Collection (Pengumpulan)</h5>
                                    <p class="card-text" style="text-align: justify" aria-describedby="paragraph"
                                        aria-valuetext="Collection merupakan langkah awal dalam proses daur ulang kertas. Biasanya, pembuat
                                        kertas membeli bahan baku untuk didaur ulang dari pengepul-pengepul.<br><br>

                                        Sampai saat ini, selain koran dan majalah bekas, mayoritas kertas yang didaur ulang
                                        berasal dari sumber industri dan komersial karena paling bersih dan paling ekonomis
                                        untuk dikumpulkan.<br><br>

                                        Adapun sistem pengumpulan yang beroperasi harus hemat biaya dan diatur secara
                                        efisien, sehingga volume serta kualitas kertas untuk didaur ulang dapat terjaga.">
                                        Collection merupakan langkah awal dalam proses daur ulang kertas. Biasanya, pembuat
                                        kertas membeli bahan baku untuk didaur ulang dari pengepul-pengepul.<br><br>

                                        Sampai saat ini, selain koran dan majalah bekas, mayoritas kertas yang didaur ulang
                                        berasal dari sumber industri dan komersial karena paling bersih dan paling ekonomis
                                        untuk dikumpulkan.<br><br>

                                        Adapun sistem pengumpulan yang beroperasi harus hemat biaya dan diatur secara
                                        efisien, sehingga volume serta kualitas kertas untuk didaur ulang dapat terjaga.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="../assets/img/elements/2. SORTING AND TRANSPORTION (PEMILAHAN KERTAS)-kertas.jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="2. Sorting and transportion (Pemilahan Kertas)">2. Sorting and
                                        transportion (Pemilahan Kertas)</h5>
                                    <p class="card-text" aria-describedby="paragraph"
                                        aria-valuetext="Setelah pengumpulan, kualitas kertas akan diukur dan dinilai. Kertas bekas dengan
                                        kualitas yang sama akan digabungkan, karena jumlah seratnya sama dan dapat
                                        diekstraksi dari pulp. Dari sini, kertas tersebut diangkut ke fasilitas daur ulang
                                        pabrik kertas, di mana kuantitas dan kualitas (kebersihan dan jenis) kertas diukur.
                                        <br> <br>

                                        Setelah itu, kertas yang diperoleh akan disortir lebih lanjut berdasarkan permukaan
                                        dan strukturnya. Contohnya kertas yang sangat tipis seperti Koran akan dipisahkan
                                        dari kertas yang lebih tebal seperti map kertas.<br><br>

                                        Terkait hal tersebut, tahap sorting ini penting dilakukan, karena berbagai nilai
                                        bahan kertas diproduksi berdasarkan bahan yang diperoleh kembali."
                                        style="text-align: justify">
                                        Setelah pengumpulan, kualitas kertas akan diukur dan dinilai. Kertas bekas dengan
                                        kualitas yang sama akan digabungkan, karena jumlah seratnya sama dan dapat
                                        diekstraksi dari pulp. Dari sini, kertas tersebut diangkut ke fasilitas daur ulang
                                        pabrik kertas, di mana kuantitas dan kualitas (kebersihan dan jenis) kertas diukur.
                                        <br> <br>

                                        Setelah itu, kertas yang diperoleh akan disortir lebih lanjut berdasarkan permukaan
                                        dan strukturnya. Contohnya kertas yang sangat tipis seperti Koran akan dipisahkan
                                        dari kertas yang lebih tebal seperti map kertas.<br><br>

                                        Terkait hal tersebut, tahap sorting ini penting dilakukan, karena berbagai nilai
                                        bahan kertas diproduksi berdasarkan bahan yang diperoleh kembali.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="../assets/img/elements/3. SHREEDDING DAN PULPING (PROSES BUBUR)-kertas.jpeg"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="3. Shreedding dan Pulping (Proses Bubur)">3. Shreedding dan Pulping
                                        (Proses Bubur)</h5>
                                    <p class="card-text" style="text-align: justify"
                                        aria-valuetext="Langkah selanjutnya adalah kertas diparut secara halus untuk memecah bahan menjadi
                                        potongan-potongan kecil. Setelah itu, dilakukan penambahan air dalam jumlah besar
                                        dan bahan kimia lain seperti hidrogen peroksida, natrium hidroksida, dan natrium
                                        silikat guna memecah serta memisahkan serat-serat kertas.<br><br>

                                        Larutan bubur yang dihasilkan dikenal sebagai pulp memiliki konsistensi oatmeal dan
                                        merupakan bahan mentah yang nantinya digunakan untuk membuat kertas.<br><br>

                                        Proses mengubah bahan kertas yang dipulihkan menjadi bubur inilah yang dikenal
                                        dengan nama pulping.<br><br>

                                        Proses daur ulang kertas selanjutnya adalah melakukan screening pulp yang berfungsi
                                        memisahkan padatan dengan menggunakan screen dalam suspensi pulp.<br><br>

                                        Partikel-partikel besar nantinya akan tertahan di dalam screen. Sementara yang lebih
                                        kecil akan melewati luban kecil basket screen."
                                        aria-describedby="paragraph">
                                        Langkah selanjutnya adalah kertas diparut secara halus untuk memecah bahan menjadi
                                        potongan-potongan kecil. Setelah itu, dilakukan penambahan air dalam jumlah besar
                                        dan bahan kimia lain seperti hidrogen peroksida, natrium hidroksida, dan natrium
                                        silikat guna memecah serta memisahkan serat-serat kertas.<br><br>

                                        Larutan bubur yang dihasilkan dikenal sebagai pulp memiliki konsistensi oatmeal dan
                                        merupakan bahan mentah yang nantinya digunakan untuk membuat kertas.<br><br>

                                        Proses mengubah bahan kertas yang dipulihkan menjadi bubur inilah yang dikenal
                                        dengan nama pulping.<br><br>

                                        Proses daur ulang kertas selanjutnya adalah melakukan screening pulp yang berfungsi
                                        memisahkan padatan dengan menggunakan screen dalam suspensi pulp.<br><br>

                                        Partikel-partikel besar nantinya akan tertahan di dalam screen. Sementara yang lebih
                                        kecil akan melewati luban kecil basket screen.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top"
                                    src="../assets/img/elements/4. DE-INKING (PENGHILANGAN TINTA)-kertas.jpeg"
                                    alt="DeInking process of paper" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="4. De-Inking (Penghilangan Tinta)">4. De-Inking (Penghilangan
                                        Tinta)</h5>
                                    <p class="card-text" style="text-align: justify"
                                        aria-valuetext="Tahap proses daur ulang kertas selanjutnya adalah menambahkan pulp ke tangki apung,
                                        di mana bahan kimia dan gelembung udara di dalamnya akan menghilangkan pewarna
                                        sekaligus tinta.<br><br>
                                        Hidrogen peroksida dan bahan pemutih lainnya pun dapat ditambahkan untuk lebih
                                        meningkatkan warna putih pada kertas. Langkah ini secara terus menerus memutihkan
                                        pulp hingga proses akhir siap dilakukan.<br><br>

                                        Terkadang pewarna ditambahkan pada proses daur ulang kertas untuk membuat produk
                                        berwarna selain putih. Dalam beberapa kasus, pewarna biru dan hitam justru
                                        ditambahkan untuk membuat kertas cetak putih cerah."
                                        aria-describedby="paragraph">
                                        Tahap proses daur ulang kertas selanjutnya adalah menambahkan pulp ke tangki apung,
                                        di mana bahan kimia dan gelembung udara di dalamnya akan menghilangkan pewarna
                                        sekaligus tinta.<br><br>
                                        Hidrogen peroksida dan bahan pemutih lainnya pun dapat ditambahkan untuk lebih
                                        meningkatkan warna putih pada kertas. Langkah ini secara terus menerus memutihkan
                                        pulp hingga proses akhir siap dilakukan.<br><br>

                                        Terkadang pewarna ditambahkan pada proses daur ulang kertas untuk membuat produk
                                        berwarna selain putih. Dalam beberapa kasus, pewarna biru dan hitam justru
                                        ditambahkan untuk membuat kertas cetak putih cerah.

                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/5. DRYING (PENGERINGAN)-kertas.jpeg"
                                    alt="Drying process of paper" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="paragraph"
                                        aria-valuetext="5. Drying (Pengeringan)">5. Drying (Pengeringan)</h5>
                                    <p class="card-text" aria-describedby="paragraph" style="text-align: justify"
                                        aria-valuetext="Proses drying ini merupakan tahap finishing dari proses daur ulang kertas, di mana
                                        pulp akan melewati rol yang mengeluarkan kelebihan air.<br><br>

                                        Pulp atau bubur kertas dapat melalui proses daur ulang sendiri, atau dapat pula
                                        dicampur dengan serat kayu murni untuk menambah kekuatan dan kehalusan
                                        kertas.<br><br>

                                        Selanjutnya, lembaran akan melewati sebuah rol yang dipanaskan dengan uap pada suhu
                                        130 derajat Fahrenheit atau sekitar 54 derajat Celcius. Proses daur ulang kertas ini
                                        berguna untuk membentuk gulungan panjang lembaran kertas pipih.<br><br>

                                        Adapun satu gulungan kertas tersebut dapat memiliki lebar sekitar 9 meter dan
                                        beratnya mencapai 27 ton.<br><br>

                                        Pada proses daur ulang kertas ini, pelapis seperti pati kentang terkadang
                                        ditambahkan ke kertas untuk mencegah penyebaran tinta seperti halnya saat menulis di
                                        tisu. Kemudian ujung gulungan dipangkas dan didaur ulang untuk membuat bubur kertas
                                        baru.">
                                        Proses drying ini merupakan tahap finishing dari proses daur ulang kertas, di mana
                                        pulp akan melewati rol yang mengeluarkan kelebihan air.<br><br>

                                        Pulp atau bubur kertas dapat melalui proses daur ulang sendiri, atau dapat pula
                                        dicampur dengan serat kayu murni untuk menambah kekuatan dan kehalusan
                                        kertas.<br><br>

                                        Selanjutnya, lembaran akan melewati sebuah rol yang dipanaskan dengan uap pada suhu
                                        130 derajat Fahrenheit atau sekitar 54 derajat Celcius. Proses daur ulang kertas ini
                                        berguna untuk membentuk gulungan panjang lembaran kertas pipih.<br><br>

                                        Adapun satu gulungan kertas tersebut dapat memiliki lebar sekitar 9 meter dan
                                        beratnya mencapai 27 ton.<br><br>

                                        Pada proses daur ulang kertas ini, pelapis seperti pati kentang terkadang
                                        ditambahkan ke kertas untuk mencegah penyebaran tinta seperti halnya saat menulis di
                                        tisu. Kemudian ujung gulungan dipangkas dan didaur ulang untuk membuat bubur kertas
                                        baru.
                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="../assets/img/elements/art-kertas9.jpeg"
                                    alt="image compounding paper ready to use" />
                                <div class="card-body">
                                    <h5 class="card-title" aria-describedby="header"
                                        aria-valuetext="6. Compounding (PENGGABUNGAN)">6. Compounding (PENGGABUNGAN)</h5>
                                    <p class="card-text" aria-describedby="paragraph" style="text-align: justify"
                                        aria-valuetext="Gulungan kertas yang dihasilkan akan dibagi menjadi bagian yang lebih kecil, lalu
                                        dikirim ke berbagai produsen yang menggunakan kertas untuk membuat produk seperti
                                        koran, kertas kado, kertas cetak, maupun insulasi selulosa tiup yang sering
                                        digunakan sebagai insulasi panas atau dingin di atap rumah.

                                        Sebagai tambahan informasi, keseluruhan proses daur ulang kertas dari surat kabar
                                        membutuhkan waktu sekitar 7 hari.">
                                        Gulungan kertas yang dihasilkan akan dibagi menjadi bagian yang lebih kecil, lalu
                                        dikirim ke berbagai produsen yang menggunakan kertas untuk membuat produk seperti
                                        koran, kertas kado, kertas cetak, maupun insulasi selulosa tiup yang sering
                                        digunakan sebagai insulasi panas atau dingin di atap rumah.

                                        Sebagai tambahan informasi, keseluruhan proses daur ulang kertas dari surat kabar
                                        membutuhkan waktu sekitar 7 hari.


                                    </p>
                                    <p class="card-text"><small class="text-muted">copyright image by
                                            arahenvironmental.com</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


@section('status_sidebar_panduan_daur_ulang', __('active'))




@endsection
