@extends('frontEnd.master')

@section('content')
    <!-- section home -->
    <section id="home" class="home d-flex align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img src="{{ asset('frontEndAsset/assets') }}/images/salman_hayat.png" alt="Salmanhayat" class="mb-1" />

                <!-- info -->
                <h1 class="mb-2 mt-0">Syed Salman Hayat</h1>
                <span>I'm a <span class="text-rotating">PHP-Laravel Developer, Graphic & UI/UX designer, Junior Project
                        Coordinator, Digital Marketing Strategist, Entrepreneur</span></span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <li class="list-inline-item"><a href="https://github.com/Salman-Sourov"><i
                                class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="https://linkedin.com/in/salmansourov"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://behance.net/sourov40"><i class="fab fa-behance"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="https://facebook.com/sourov40"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/salmansourov"><i
                                class="fas fa-dollar-sign"></i></a></li>
                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="#contact" class="btn btn-default">Hire me</a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down">
                <a href="#about" class="mouse-wrapper">
                    <span>Scroll Down</span>
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                </a>
            </div>

            <!-- parallax layers -->
            <div class="parallax" data-relative-input="true">

                <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

                <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none"
                        fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                        fill="#44D7B6" fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                        fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FF4C60" fill-rule="evenodd">
                        <path
                            d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                        <path
                            d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                    </g>
                </svg>

                <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none"
                        fill-rule="evenodd" />
                </svg>

                <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5"
                        fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                        fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="47" height="29" data-depth="0.2" class="layer p10"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="#44D7B6" fill-rule="evenodd">
                        <path
                            d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                        <path
                            d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                    </g>
                </svg>

                <svg width="33" height="20" data-depth="0.5" class="layer p11"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

            </div>
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">About Me</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left about-img">
                        <img src="{{ asset('frontEndAsset/assets') }}/images/salman_sourov.png" alt="Salmanhayat" />
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-white shadow-dark padding-30">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p>Experienced project coordinating transitioning to software engineering, combining strong
                                    project coordination skills with a passion for technology.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-default">Download CV</a>
                                </div>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>
                            <div class="col-md-6">
                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Development</h4>
                                        <span class="float-right">60%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="60" data-color="#6C6CE5">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Graphic & UI/UX design</h4>
                                        <span class="float-right">80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="80" data-color="#F9D74C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Digital Marketing</h4>
                                        <span class="float-right">70%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="70" data-color="#ED596F">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            <div class="spacer" data-height="70"></div>

            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-fire"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">250</em></h3>
                            <p class="mb-0">Projects completed</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-cup"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">9500</em></h3>
                            <p class="mb-0">Cup of coffee</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-people"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">120</em></h3>
                            <p class="mb-0">Satisfied clients</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-badge"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">24</em></h3>
                            <p class="mb-0">World Domination</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section services -->
    <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Services</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue"
                        data-color="#6C6CE5">
                        <img src="{{ asset('frontEndAsset/assets') }}/images/Web_Development.svg" height="80px"
                            width="80px" alt="Web_Development">
                        <h3 class="mb-3 mt-0">Web Development</h3>
                        <p class="mb-0">Creating modern and responsive web application to deliver seamless user
                            experiences.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center shadow-yellow"
                        data-color="#F9D74C">
                        <img src="{{ asset('frontEndAsset/assets') }}/images/Graphic_design.svg" height="80px"
                            width="80px" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Graphic & UI/UX design</h3>
                        <p class="mb-0">Crafting visually stunning and intuitive designs to enhance user engagement.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
                        data-color="#ED596F">
                        <img src="{{ asset('frontEndAsset/assets') }}/images/Project_Management.svg" height="80px"
                            width="80px" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Digital Marketing</h3>
                        <p class="mb-0">Boosting your visibility, driving your success – with SEO and ad campaigns tailored for impact.</p>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Looking for a custom job? <a href="#contact">Click here</a> to contact me! 👋</p>
            </div>

        </div>

    </section>

    <!-- section experience -->
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Academic & Experience</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-6">

                    <!-- timeline wrapper -->
                    <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">2017 - 2022</span>
                                <h3 class="title">Bachelor’s Degree</h3>
                                <p>BSC in Computer Science and Engineering</p>
                                <p>EAST WEST UNIVERSITY</p>
                                <p>CGPA: 3.08 out of 4.00</p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">2014 - 2016</span>
                                <h3 class="title">Higher Secondary Certificate</h3>
                                <p>ARMED POLICE BATTALION SCHOOL & COLLEGE</p>
                                <p>GPA: 4.83 out of 5.00</p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">2012 - 2014</span>
                                <h3 class="title">Secondary School Certificate</h3>
                                <p>DUPCHANCHIA GOVT. PILOT MODEL HIGH SCHOOL</p>
                                <p>GPA: 5.00 out of 5.00</p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">2022 - Present</span>
                                <h3 class="title">Product Designer</h3>
                                <p>Lifted Media (Remote)</p>
                                <p>Graphic & UI/UX, Web Design & Development</p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">2021 - 2022</span>
                                <h3 class="title">Junior Project Coordinator</h3>
                                <p>Creative & IT Projects</p>
                                <p>Nomanzi International Ltd.</p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">2019 - Present</span>
                                <h3 class="title">Level Two Seller</h3>
                                <p>Fiverr - Online Market Place</p>
                                <p>Graphic & UI/UX, Web Design & Development</p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section works -->
    {{-- <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Recent works</h2>

            <div class="spacer" data-height="60"></div>

            <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <li class="current list-inline-item" data-filter="*">Everything</li>
                <li class="list-inline-item" data-filter=".creative">Creative</li>
                <li class="list-inline-item" data-filter=".art">UI</li>
                <li class="list-inline-item" data-filter=".design">Development</li>
                <li class="list-inline-item" data-filter=".branding">Project Management</li>
            </ul>

            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile">
                    <option value="*">Everything</option>
                    <option value=".creative">Creative</option>
                    <option value=".art">UI</option>
                    <option value=".design">Development</option>
                    <option value=".branding">Project Management</option>
                </select>
            </div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art">
                    <a href="https://via.placeholder.com/330x267" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art</span>
                                <h4 class="title">Project Managment Illustration</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#small-dialog" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative</span>
                                <h4 class="title">Guest App Walkthrough Screens</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="https://via.placeholder.com/590x280" alt="Title" />
                        <h2>Guest App Walkthrough Screens</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit nibh in massa semper
                            rutrum. In rhoncus eleifend mi id tempus.</p>
                        <p>Donec consectetur, libero at pretium euismod, nisl felis lobortis urna, id tristique nisl lectus
                            eget ligula.</p>
                        <a href="#" class="btn btn-default">View on Dribbble</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item branding">
                    <a href="https://www.youtube.com/watch?v=qf9z4ulfmYw" class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Branding</span>
                                <h4 class="title">Delivery App Wireframe</h4>
                                <span class="more-button"><i class="icon-camrecorder"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative">
                    <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/240233494&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
                        class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative</span>
                                <h4 class="title">Onboarding Motivation</h4>
                                <span class="more-button"><i class="icon-music-tone-alt"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art branding">
                    <a href="#gallery-1" class="gallery-link">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art, Branding</span>
                                <h4 class="title">iMac Mockup Design</h4>
                                <span class="more-button"><i class="icon-picture"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="gallery-1" class="gallery mfp-hide">
                        <a href="https://via.placeholder.com/330x267"></a>
                        <a href="https://via.placeholder.com/330x267"></a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="https://themeforest.net/user/pxlsolutions/portfolio" target="_blank">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative, Design</span>
                                <h4 class="title">Game Store App Concept</h4>
                                <span class="more-button"><i class="icon-link"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- more button -->
            <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div>

        </div>

    </section> --}}

    <!-- section testimonials -->
    <section id="testimonials">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">TOP Clients & Reviews</h2>

            <div class="spacer" data-height="60"></div>

            <!-- testimonials wrapper -->
            <div class="testimonials-wrapper">

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="{{ asset('frontEndAsset/assets/') }}/images/Greg_Eckmann.jpg" alt="Greg Eckmann" />
                    </div>
                    <h4 class="mt-3 mb-0">Greg Eckmann</h4>
                    <span class="subtitle">Founder & CEO - LIFTED MEDIA</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun
                            and interesting. Good luck! 👍</p>
                    </div>
                </div>

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="{{ asset('frontEndAsset/assets/images/Richard_Kagan.jpeg') }}" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">Richard Kagan</h4>
                    <span class="subtitle">Advisor at Myna Life Tech</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I love working with Salmansourov - the level of detail he puts into all the
                            collateral he creates is second to no one.</p>
                    </div>
                </div>

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="{{ asset('frontEndAsset/assets/images/Justin_Leigh.jpg') }}" alt="Justin Leigh" />
                    </div>
                    <h4 class="mt-3 mb-0">Justin Leigh</h4>
                    <span class="subtitle">Founder and Managing Director - Focus4Growth</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">Salman is simply brilliant. He is responsive and communicates proactively.
                            Nothing is too much trouble and he really wants to make the design the best it can be. Highly
                            recommended. Thank you Salman.</p>
                    </div>
                </div>


            </div>

            <div class="spacer" data-height="60"></div>
            <h2 class="section-title wow fadeInUp">National & International</h2>
            <div class="spacer" data-height="30"></div>
            <div class="row">
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://gaplshop.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/GAPL_SHOP.png') }}"
                                    alt="GAPL SHOP"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=http://www.yasirit.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Yasir-iT.png') }}"
                                    alt="Yasir iT"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=# target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/JAAC-Dep-of-Physiotherapy-&-Rehabilitation.png') }}"
                                    alt="JAAC-Dep-of-Physiotherapy-&-Rehabilitation"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://jerseybari.com// target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/jersey_bari.png') }}"
                                    alt="jerseybari"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://lifted-media.com target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Lifted_Media.png') }}"
                                    alt="Lifted Media"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=http://mynatek.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Myna_Life_Technologies.png') }}"
                                    alt="Myna Life Technologies"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://focus4growth.co.uk/practice-growth-academy/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Practice_Growth_Academy.png') }}"
                                    alt="Practice Growth Academy"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://aj-renewables.co.uk/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/AJ-RENEWABLES.gif') }}"
                                    alt="AJ-RENEWABLES"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://www.coordyek.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Coordyek_logo.png') }}"
                                    alt="Coordyek"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://www.naboso.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/naboso.png') }}" alt="Naboso">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://aitcol.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Advanced_Inspection_Technology_(AIT).jpg') }}"
                                    alt=" Advanced Inspection Technology (AIT)"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://ascorporateservices.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/AS_Corp.png') }}" alt="AS Corp">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://netswitch.net/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Netswitch_Technology_Management.png') }}"
                                    alt=" Netswitch Technology Management"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://btax.net.au/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/Btax.png') }}" alt="Btax">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://www.millertechnology.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/millertechnology.png') }}"
                                    alt="millertechnology"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <a href=https://www.ximiso.com/ target="_blank"><img
                                    src="{{ asset('frontEndAsset/assets/images/clients/ximiso.png') }}" alt="ximiso">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- section contact -->
    <section id="">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a
                                href="mailto:salman.sourov40@gmail.com">email</a>. 👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post" action="form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                        placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Email address" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                        placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message"
                                        required="required" data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit"
                            class="btn btn-default">Send Message</button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section>

    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Business and Contact Information</h2>

            <div class="spacer" data-height="40"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="timeline-container wow fadeInUp">
                        <div class="content">
                            <h3 class="title">Business Name</h3>
                            <h4><a href="https://www.salmanhayat.com">salmanhayat.com</a></h4>
                            <h4><a href="https://www.fiverr.com/salmansourov">www.fiverr.com/salmansourov</a></h4>


                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="timeline-container wow fadeInUp">
                        <div class="content">
                            <h3 class="title">Personal Details</h3>
                            <h6>Full Name: Syed Salman Hayat</h6>
                            <h6>Address: House 35, Block B, Road 6, Banasree, Rampura,
                                Dhaka-1219, Bangladesh</h6>
                            <h6>Email: salman.sourov40@gmail.com</h6>
                            <h6>Phone: +880 1521406205</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div class="spacer" data-height="60"></div>
@endsection
