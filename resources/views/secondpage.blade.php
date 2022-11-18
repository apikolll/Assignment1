@extends('layout.master')


@section('content1')
    <div class="logo-open p-3 open-btn"><i class="bi bi-list h1 text-light"></i></div>

    <div class="sidebar">
        <div class="p-3">
            <div class="d-flex justify-content-between align-items-center">
                <span class="h2 text-dark">I-Hadir V1</span>
                <div class="logo-close close-btn"><i class="bi bi-x-lg h1 text-dark"></i></div>
            </div>

            <nav class="nav d-block py-5">
                <a href="#" class="nav-link text-dark text-center"><span class="h-custom">Dasboard</span></a>
                <hr>
                <a href="{{ route('record') }}" class="nav-link text-dark text-center"><span class="h-custom">Record
                        Attendance</span></a>
                <hr>
                <a href="#" class="nav-link text-dark text-center"><span class="h-custom">Attendance report</span></a>
                <hr>
            </nav>
        </div>
    </div>

    {{-- navbar --}}
    <section class="p-5">
        <div class="container">
            <div class="d-flex justify-content-evenly">
                <a href="#Home" class="text-decoration-none text-light h5 fw-light" style="letter-spacing: 2px"><span
                        class="">Home</span></a>
                <a href="#About" class="text-decoration-none text-light h5 fw-light" style="letter-spacing: 2px"><span
                        class="">About</span></a>
                <a href="#" class="text-decoration-none text-light h5 fw-light" style="letter-spacing: 2px"><span
                        class="">Contact</span></a>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="p-1" id="Home">
        <div class="container">
            <div class="row g-0 text-light position-relative text-center">
                <div class="row-md-6 mb-md-0 p-md-4">
                    <img src="school.jpeg" class="w-75 rounded" alt="school">
                </div>
                <div class="row-md-6 ps-md-0 p-4">
                    <a href="{{ route('record') }}"><button class="btn btn-warning fw-light"><span class="h3">Record attendance</span></button></a>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="p-5" id="About">
        <div class="container">
            <div class="text-center text-light mb-3">
                <h2 class="display-3 fw-light">About us</h2>
            </div>
            <div class="row g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light text-center shadow">
                        <div class="card-body">
                            <div class="card-title display-6">Location</div>
                            <div class="card-text">Sekolah Kebangsaan Shah Alam
                                Jalan Dawai 16/2, Seksyen 16
                                Selangor, Malaysia</div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light text-center shadow">
                        <div class="card-body">
                            <div class="card-title display-6">Establish</div>
                            <div class="card-text">This school has been established in 2001.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light text-center shadow">
                        <div class="card-body">
                            <div class="card-title display-6">Direction</div>
                            <div class="card-text"><img src="map.png" class="w-100" alt="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Contact --}}
    <h3 class="text-light fw-light text-center display-3">Contact us</h3>
    <div class="w-100 mx-auto mb-5">
        <div class="d-flex d-block justify-content-evenly p-5 border rounded opacity-50">
            <i class="bi bi-twitter h1 text-light" style="cursor: pointer;"></i>
            <i class="bi bi-instagram h1 text-light" style="cursor: pointer;"></i>
            <i class="bi bi-facebook h1 text-light" style="cursor: pointer;"></i>
            <i class="bi bi-telegram h1 text-light" style="cursor: pointer;"></i>
        </div>
    </div>



    <footer class="p-5 bg-dark text-white text-center position-relative align-items-center">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Afiq Website</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".open-btn").on('click', function() {
            $(".sidebar").addClass("opened")
        })

        $(".close-btn").on('click', function() {
            $(".sidebar").removeClass("opened")
        })
    </script>
@endsection
