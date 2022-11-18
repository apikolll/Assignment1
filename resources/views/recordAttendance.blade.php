@extends('layout.master')

@section('content1')
    <img src="attendance.png" alt="attendance" class="w-100 h-100 position-absolute" id="attendance"
        style="z-index: -1;filter: blur(15px);">

    <div class="p-3 custom-logo position-absolute">
        <a href="{{ route('second') }}"><i class="bi bi-caret-left-square text-light h3" style="cursor: pointer;"></i></a>
    </div>


    <section>
        <div class="p-5">
            <h1 class="text-center text-light" style="letter-spacing: 2px;">Attendance</h1>

            <div class="border rounded-3 w-75 mx-auto">
                <div class="p-4">
                    <div class="d-flex gap-3 justify-content-center">
                        <h5 class="text-dark">Date: 1 Jan 2023</h5>
                        <h5 class="text-dark">Time: 12:30 p.m</h5>
                    </div>

                    <div class="p-3">
                        <input type="text" class="form-control mb-3" value="Afiq danial bin Noorazam" disabled>
                        <input type="text" class="form-control mb-3" value="CB19034" disabled>
                        <div class="text-center">
                            <button class="btn btn-success">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script>
        $('.logo').hover(function(){
            $(".logo").addClass('custom-logo')
        })
    </script> --}}
@endsection
