<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="icons/osmipa2021-img.png" alt="img-icon" width="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "beranda" ? "active" : "") }} " href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "tentang" ? "active" : "") }} " href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "osmipa" ? "active" : "") }} " href="/osmipa">OS Mipa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "galeri" ? "active" : "") }} " href="/galerifoto">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "kontak" ? "active" : "") }} " href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
