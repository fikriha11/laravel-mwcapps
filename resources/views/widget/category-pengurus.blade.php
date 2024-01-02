<!-- ======= Blog Single Section ======= -->
<section id="pengurus" class="pengurus">
    <div class="container mb-5" data-aos="fade-up">
        <div class="row">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                {{-- MUSTASYAR --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            MUSTASYAR
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($mustasyar as $mustasyar)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $mustasyar->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $mustasyar->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $mustasyar->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SYURIAH RAIS --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseTwo">
                            SYURIAH RAIS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($syuriah_rais as $syuriah_rais)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $syuriah_rais->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $syuriah_rais->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $syuriah_rais->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SYURIAH KATIB --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseThree">
                            SYURIAH KATIB
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($syuriah_katib as $syuriah_katib)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $syuriah_katib->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $syuriah_katib->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $syuriah_katib->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SYURIAH A'WAN --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseFour">
                            SYURIAH A'WAN
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($syuriah_awan as $syuriah_awan)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $syuriah_awan->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $syuriah_awan->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $syuriah_awan->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TANFIDZIYAH KETUA --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseFive">
                            TANFIDZIYAH KETUA
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($tanfidziyah_ketua as $tanfidziyah_ketua)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $tanfidziyah_ketua->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $tanfidziyah_ketua->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $tanfidziyah_ketua->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TANFIDZIYAH SEKRETARIS --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseSix">
                            TANFIDZIYAH SEKRETARIS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($tanfidziyah_sekretaris as $tanfidziyah_sekretaris)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $tanfidziyah_sekretaris->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $tanfidziyah_sekretaris->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $tanfidziyah_sekretaris->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TANFIDZIYAH BENDAHARA --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseSeven">
                            TANFIDZIYAH BENDAHARA
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row">
                                    @foreach ($tanfidziyah_bendahara as $tanfidziyah_bendahara)
                                        <div class="col-lg-6 p-2">
                                            <div class="card rounded-0">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-3"
                                                            style="background: url('{{ asset('assets/img/pengurus/khhisyambalya.jpg') }}') center center no-repeat; background-size: cover;">
                                                        </div>
                                                        <div class="col-md-9 p-4">
                                                            <h6 class="card-title fw-bold"><a
                                                                    href="https://jti.polije.ac.id/dosen/2/wahyu-kurnia-dewanto-skom-mt">
                                                                    {{ $tanfidziyah_bendahara->name }}</a>
                                                            </h6>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-primary me-3">Jabatan</span>
                                                                        {{ $tanfidziyah_bendahara->jabatan }}
                                                                    </h6>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <h6 class="mb-0"><span
                                                                            class="badge bg-success me-3">Periode</span>
                                                                        {{ $tanfidziyah_bendahara->periode }}
                                                                    </h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
