@extends('layouts.main')


@section('content')
<div class="header show">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center">
                <div class="header-title left">
                    <h1 class="font-weight-500 mb-5">
                        Olimpiade Sains MIPA 2021 Siswa SMA/SMK, SMP dan SD Se-Maluku
                    </h1>
                    <a href="/osmipa" class="mt-3 d-inline-block shadow">Daftar Olimpiade</a>
                </div>
            </div>
            <div class="col-md-7 right">
                <div class="header-hero d-flex justify-content-center">
                    <img src="img/header-hero.png" class="d-block" alt="img-header">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,0L26.7,5.3C53.3,11,107,21,160,37.3C213.3,53,267,75,320,106.7C373.3,139,427,181,480,170.7C533.3,160,587,96,640,85.3C693.3,75,747,117,800,112C853.3,107,907,53,960,74.7C1013.3,96,1067,192,1120,234.7C1173.3,277,1227,267,1280,229.3C1333.3,192,1387,128,1413,96L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
</div>
<div class="text-center header-category">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h2>Fisika</h2>
                            </th>
                            <th scope="col">
                                <h2>Matematika</h2>
                            </th>
                            <th scope="col">
                                <h2>Biologi</h2>
                            </th>
                            <th scope="col">
                                <h2>IPA</h2>
                            </th>
                            <th scope="col">
                                <h2>Statistika</h2>
                            </th>
                            <th scope="col">
                                <h2>Komputer</h2>
                            </th>
                            <th scope="col">
                                <h2>Kebumian</h2>
                            </th>
                            <th scope="col">
                                <h2>Astronomi</h2>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="peserta show">
        <div class="row g-5">
            <h2 class="text-center">Peserta OS MIPA</h2>
            <div class="col-md-4">
                <a href="{{$urlSd}}" target="_blank" class="text-decoration-none">
                    <div class="card border-info mb-3 shadow rounded">
                        <div class="card-header text-center p-3">
                            <h4>Sekolah Dasar</h4>
                            <p class="text-muted">Mata Pelajaran yang dilombakan</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Matematika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>IPA</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{$urlSmp}}" target="_blank" class="text-decoration-none">
                    <div class="card border-info mb-3 shadow rounded">
                        <div class="card-header text-center p-3">
                            <h4>Sekolah Menengah Pertama</h4>
                            <p class="text-muted">Mata Pelajaran yang dilombakan</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Matematika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Fisika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Biologi</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{$urlSma}}" target="_blank" class="text-decoration-none">
                    <div class="card border-info mb-3 shadow rounded">
                        <div class="card-header text-center p-3">
                            <h4>Sekolah Menengah Atas</h4>
                            <p class="text-muted">Mata Pelajaran yang dilombakan</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Matematika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Fisika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Biologi</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Kimia</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Statistika</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Komputer</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Kebumian</p>
                                </li>
                                <li>
                                    <p class="card-text"><i class="bi bi-check"></i>Astronomi</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="tahap-daftar show">
        <div class="row text-center g-5 my-5 d-flex justify-content-center">
            <h1 class="text-center">Tahapan Pendaftaran Olimpiade Sains MIPA</h1>
            <div class="col-md-3">
                <div class="card">
                    <img src="icons/daftar.svg" class="card-img-top" alt="img-daftar">
                    <div class="card-body">
                        <h5 class="card-title">1. Pendaftaran</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="icons/bayar.svg" class="card-img-top" alt="img-pembayaran">
                    <div class="card-body">
                        <h5 class="card-title">2. Pembayaran</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="icons/verifikasi.svg" class="card-img-top" alt="img-verifikasi">
                    <div class="card-body">
                        <h5 class="card-title">3. Verifikasi</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="icons/tes.svg" class="card-img-top" alt="img-tes">
                    <div class="card-body">
                        <h5 class="card-title">4. Tes</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row panduan">
            <div class="col text-center">
                <a class="rounded shadow" href="{{$urlPanduan}}" target="_blank">Download
                    Panduan</a>
            </div>
        </div>
    </section>


    <secti class="mediainformasi show">
        <div class="row g-4 my-5 d-flex justify-content-center">
            <h1 class="text-center">Media dan Informasi</h1>
            <div class="col-lg-3">
                <div class="card">
                    <a href="">
                        <img src="icons/info-online.svg" class="card-img-top" alt="information-img">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Info Pembukaan Olimpiade</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="">
                        <img src="icons/info-online.svg" class="card-img-top" alt="information-img">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Info Pembukaan Olimpiade</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="">
                        <img src="icons/info-online.svg" class="card-img-top" alt="information-img">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Info Pembukaan Olimpiade</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="">
                        <img src="icons/info-online.svg" class="card-img-top" alt="information-img">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Info Pembukaan Olimpiade</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </secti on>
</div>
@endsection
