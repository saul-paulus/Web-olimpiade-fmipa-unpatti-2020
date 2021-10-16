@extends('layouts.main')

@section('content')
<section class="osmipa">
    <div class="container">
        <div class="row mb-4 show">
            <h1 class="text-center">Olimpiade Sains MIPA 2021</h1>
            <div class="col-12 text-center">
                <h3 class="text-danger text-decoration-underline mb-4">Mohon perhatikan beberapa informasi sebelum
                    melakukan
                    pendaftaran</h3>
                <div class="fs-5">
                    <p>1) Perhatikan Alamat Email harus sesuai dan dalam keadaan aktif</p>
                    <p>2) Untuk pembayaran dapat melalui No Rekening <i class="text-primary"> BNI 0748943489 a.n Dyana
                            Patty</i> </p>
                    <p>3) Wajib menyimpan hasil Print Resi / Kertas Transaksi
                        pengiriman</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 left">
                <img src="icons/daftar-icon.svg" alt="img-osmipa" style="width: 90%;">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center right">
                <a href="{{$urlPanduan}}" class="rounded shadow" target="_blank">Download Panduan Olimpiade</a>
                <a href="{{$urlSd}}" class="rounded shadow" target="_blank">Daftar Olimpiade SD</a>
                <a href="{{$urlSmp}}" class="rounded shadow" target="_blank">Daftar Olimpiade SMP</a>
                <a href="{{$urlSma}}" class="rounded shadow" target="_blank">Daftar Olimpiade SMA</a>
            </div>
        </div>
    </div>
</section>



@endsection
