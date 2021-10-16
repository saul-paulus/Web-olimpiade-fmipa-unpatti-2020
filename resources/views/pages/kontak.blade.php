@extends('layouts.main')


@section('content')
<section class="kontak ">
    <div class="container">
        <div class="row ">
            <h1 class="text-center mb-5 show">Kontak</h1>
            <div class=" show col-12 d-flex justify-content-center g-4 flex-wrap">
                <div class="card m-3 rounded bg-light d-flex align-items-center" style="width: 18rem;">
                    <img src="icons/wanita.svg" class="border border-2 card-img-top m-3 rounded-circle"
                        alt="ing-contact">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sekolah Dasar</h5>
                        <p class="card-text text-muted">Ibu Dewi Sri</p>
                        <a class="card-text text-success rounded btn"
                            href="https://api.whatsapp.com/send?phone=+6281354686066" target="_blank">WA:
                            081354686066</a>
                    </div>
                </div>
                <div class="card m-3 rounded bg-light d-flex align-items-center" style="width: 18rem;">
                    <img src="icons/wanita.svg" class="border border-2 card-img-top m-3 rounded-circle"
                        alt="ing-contact">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sekolah Menengah Pertama</h5>
                        <p class="card-text text-muted">Ibu Marsela S. Laratmase</p>
                        <a class="card-text text-success rounded btn"
                            href="https://api.whatsapp.com/send?phone=+6285243343905" target="_blank">WA:
                            085243343905</a>
                    </div>
                </div>
                <div class="card m-3 rounded bg-light d-flex align-items-center" style="width: 18rem;">
                    <img src="icons/wanita.svg" class="border border-2 card-img-top m-3 rounded-circle"
                        alt="ing-contact">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sekolah Menengah Atas</h5>
                        <p class="card-text text-muted">Ibu Sanlly J. Latuipeirissa</p>
                        <a class="card-text text-success rounded btn"
                            href="https://api.whatsapp.com/send?phone=+6282337338556" target="_blank">WA:
                            082337338556</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
@endsection
