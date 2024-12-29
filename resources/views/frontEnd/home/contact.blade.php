@extends('frontEnd.master')

@section('content')
    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Personal & Company Information</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">
                <div class="col-md-6">
                    {{-- <div class="timeline-container wow fadeInUp"> --}}

                    <img src="{{ asset('frontEndAsset/assets') }}/images/salman_sourov_2.png"
                        style="height: 300px; width: 300px;" alt="Salmanhayat" />

                    <div class="spacer d-md-none d-lg-none" data-height="50"></div>

                    {{-- </div> --}}
                </div>

                <style>
                    .content p {
                        margin: 10px 0;
                        /* Reduces vertical spacing */
                        line-height: 1.4;
                        /* Adjust line height for tighter spacing */
                    }

                    .content p a {
                        font-weight: bold;
                        color: rgb(4, 193, 4);
                        text-decoration: none;
                        /* Optional: Removes underline */
                    }
                </style>

                <div class="col-md-6">
                    <div class="timeline-container wow fadeInUp">
                        <div class="content">
                            <h3 class="title">Personal Details</h3>
                            <p>Full Name: Syed Salman Hayat</p>
                            <p>Address: House 35, Block B, Road 6, Banasree, Rampura, Dhaka-1219, Bangladesh</p>
                            <p>Email: salman.sourov40@gmail.com</p>
                            <p>Phone: +880 1521406205</p>
                        </div>
                        <div class="content">
                            <h3 class="title">Company Details</h3>
                            <p> 2022-2024 <br>
                                Product Designer (Remote) <br>
                                Graphic & UI/UX <br>
                                Lifted Media
                            </p>
                            <p> 2024-Present <br>
                                Founder <br>
                                EMPO TECH BD
                            </p>
                            <p><a href="https://www.fiverr.com/salmansourov">Fiverr Profile</a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <div class="spacer" data-height="190"></div>
@endsection
