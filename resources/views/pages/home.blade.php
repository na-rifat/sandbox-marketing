@extends('index')

@section('content')
    <!-- /header -->
    <section class="wrapper bg-gradient-primary">
        <div class="container pt-10 pt-md-14">
            <div class="row gx-2 gy-10 align-items-center">
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0"
                    data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Get the best <br /><span
                            class="typer text-primary text-nowrap" data-delay="100"
                            data-words="SEO service, Lead generation, Digital marketing service, Email marketing, SMS marketing"></span><span
                            class="cursor text-primary" data-owner="typer"></span></h1>
                    <p class="lead fs-23 mb-7">Build your website in minutes with the help of countless amazing features of
                        Sandbox.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start mb-4" data-cues="slideInDown"
                        data-group="page-title-buttons" data-delay="900">
                        <span><a class="btn btn-lg btn-primary rounded-pill me-2 scroll" href="#demos">Register Now</a></span>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-lg-6 ms-auto position-relative">
                    <div class="row g-4">
                        <div class="col-4 d-flex flex-column ms-auto" data-cues="fadeIn" data-group="col-start"
                            data-delay="900">
                            <div class="ms-auto mt-6"><img class="img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc1.jpg') }}"
                                    srcset="./assets/img/demos/vc1@2x.jpg 2x" alt="" /></div>
                            <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc2.jpg') }}"
                                    srcset="./assets/img/demos/vc2@2x.jpg 2x" alt="" /></div>
                            <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc3.jpg') }}"
                                    srcset="./assets/img/demos/vc3@2x.jpg 2x" alt="" /></div>
                        </div>
                        <!-- /column -->
                        <div class="col-4" data-cues="fadeIn" data-group="col-middle">
                            <div><img class="w-100 img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc4.jpg') }}"
                                    srcset="./assets/img/demos/vc4@2x.jpg 2x" alt="" /></div>
                            <div><img class="w-100 img-fluid rounded shadow-lg mt-4"
                                    src="{{ asset('theme/assets/img/demos/vc5.jpg') }}"
                                    srcset="./assets/img/demos/vc5@2x.jpg 2x" alt="" /></div>
                            <div><img class="w-100 img-fluid rounded shadow-lg mt-4"
                                    src="{{ asset('theme/assets/img/demos/vc6.jpg') }}"
                                    srcset="./assets/img/demos/vc6@2x.jpg 2x" alt="" /></div>
                        </div>
                        <!-- /column -->
                        <div class="col-4 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
                            <div class="mt-8"><img class="img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc7.jpg') }}"
                                    srcset="./assets/img/demos/vc7@2x.jpg 2x" alt="" /></div>
                            <div class="mt-4 mb-10"><img class="img-fluid rounded shadow-lg"
                                    src="{{ asset('theme/assets/img/demos/vc8.jpg') }}"
                                    srcset="./assets/img/demos/vc8@2x.jpg 2x" alt="" /></div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="position-relative mt-n20 mb-20" data-cue="fadeIn" data-delay="1800">
                        <div class="btn btn-circle btn-fuchsia pe-none ripple position-absolute counter-wrapper flex-column d-none d-xxl-flex"
                            style="bottom: 0; right: -8%; width: 120px; height: 120px;">
                            <h3 class="fs-26 text-white mt-n1 mb-0">NO</h3>
                            <p>jQuery</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light" id="demos">
        <div class="container py-14 py-md-18 pb-md-19">
            <div class="row mb-10">
                <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                    <div class="counter-wrapper">
                        <h3 class="fs-70 mb-3 text-primary text-center counter">27</h3>
                    </div>
                    <h2 class="display-3 mb-3 text-center mb-0">Functional, impressive and rich demos to start with</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="demos-wrapper">
                <h2 class="fs-16 text-uppercase text-muted mb-6 text-center">New Demos</h2>
                <div class="demo mb-10">
                    <div class="card bg-soft-grape">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-grape mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo18.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d18-1.jpg') }}"
                                                        srcset="./assets/img/demos/d18-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-grape"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo18.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d18-2.jpg') }}"
                                                        srcset="./assets/img/demos/d18-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XVIII</h2>
                                    <ul class="icon-list bullet-grape row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Network,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>3D
                                                illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Gradient
                                                image</span></li>
                                    </ul>
                                    <a href="./demo18.html" target="_blank"
                                        class="btn btn-sm btn-grape rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-fuchsia">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-fuchsia mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo19.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d19-1.jpg') }}"
                                                        srcset="./assets/img/demos/d19-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-fuchsia"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo19.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d19-2.jpg') }}"
                                                        srcset="./assets/img/demos/d19-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XIX</h2>
                                    <ul class="icon-list bullet-fuchsia row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Agency,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Gradient
                                                image</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Colorful
                                                design</span></li>
                                    </ul>
                                    <a href="./demo19.html" target="_blank"
                                        class="btn btn-sm btn-fuchsia rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-purple">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo20.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d20-1.jpg') }}"
                                                        srcset="./assets/img/demos/d20-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo20.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d20-2.jpg') }}"
                                                        srcset="./assets/img/demos/d20-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XX</h2>
                                    <ul class="icon-list bullet-purple row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Agency,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Framed
                                                layout</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Video
                                                background</span></li>
                                    </ul>
                                    <a href="./demo20.html" target="_blank"
                                        class="btn btn-sm btn-purple rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-sky">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-sky mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo21.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d21-1.jpg') }}"
                                                        srcset="./assets/img/demos/d21-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-sky"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo21.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d21-2.jpg') }}"
                                                        srcset="./assets/img/demos/d21-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXI</h2>
                                    <ul class="icon-list bullet-sky row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Studio,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Wave
                                                dividers</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Colorful
                                                design</span></li>
                                    </ul>
                                    <a href="./demo21.html" target="_blank"
                                        class="btn btn-sm btn-sky rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-purple">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo22.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d22-1.jpg') }}"
                                                        srcset="./assets/img/demos/d22-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo22.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d22-2.jpg') }}"
                                                        srcset="./assets/img/demos/d22-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXII</h2>
                                    <ul class="icon-list bullet-purple row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Business,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pricing
                                                table</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>3D
                                                illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Wave
                                                dividers</span></li>
                                    </ul>
                                    <a href="./demo22.html" target="_blank"
                                        class="btn btn-sm btn-purple rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-leaf">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-leaf mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo23.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d23-1.jpg') }}"
                                                        srcset="./assets/img/demos/d23-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-leaf"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo23.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d23-2.jpg') }}"
                                                        srcset="./assets/img/demos/d23-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXIII</h2>
                                    <ul class="icon-list bullet-leaf row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Photography,
                                                Wedding</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Fullscreen
                                                slider</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Image
                                                backgrouds</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pastel
                                                colors</span></li>
                                    </ul>
                                    <a href="./demo23.html" target="_blank"
                                        class="btn btn-sm btn-leaf rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-gray">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-yellow mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo24.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d24-1.jpg') }}"
                                                        srcset="./assets/img/demos/d24-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-yellow"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo24.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d24-2.jpg') }}"
                                                        srcset="./assets/img/demos/d24-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXIV</h2>
                                    <ul class="icon-list bullet-yellow row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Photography,
                                                Food</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Masonry
                                                portfolio</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Image
                                                backgrounds</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Contact
                                                form</span></li>
                                    </ul>
                                    <a href="./demo24.html" target="_blank"
                                        class="btn btn-sm btn-yellow rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-pink">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-pink mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo25.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d25-1.jpg') }}"
                                                        srcset="./assets/img/demos/d25-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-pink"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo25.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d25-2.jpg') }}"
                                                        srcset="./assets/img/demos/d25-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXV</h2>
                                    <ul class="icon-list bullet-pink row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Blog,
                                                Travel</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Sidebar</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Extended
                                                footer</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Blog
                                                carousel</span></li>
                                    </ul>
                                    <a href="./demo25.html" target="_blank"
                                        class="btn btn-sm btn-pink rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-grape">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-grape mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo26.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d26-1.jpg') }}"
                                                        srcset="./assets/img/demos/d26-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-grape"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo26.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d26-2.jpg') }}"
                                                        srcset="./assets/img/demos/d26-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXVI</h2>
                                    <ul class="icon-list bullet-grape row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>SEO,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pricing
                                                table</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>3D
                                                illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                    </ul>
                                    <a href="./demo26.html" target="_blank"
                                        class="btn btn-sm btn-grape rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-navy">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-navy mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo27.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d27-1.jpg') }}"
                                                        srcset="./assets/img/demos/d27-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-navy"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo27.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d27-2.jpg') }}"
                                                        srcset="./assets/img/demos/d27-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XXVII</h2>
                                    <ul class="icon-list bullet-navy row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Corporate,
                                                Business</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Split
                                                content</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pricing
                                                table</span></li>
                                    </ul>
                                    <a href="./demo27.html" target="_blank"
                                        class="btn btn-sm btn-navy rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <h2 class="fs-16 text-uppercase text-muted pt-8 mb-6 text-center">Previous Demos</h2>
                <div class="demo mb-10">
                    <div class="card bg-soft-yellow">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-yellow mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo1.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d1-1.jpg') }}"
                                                        srcset="./assets/img/demos/d1-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-yellow"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo1.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d1-2.jpg') }}"
                                                        srcset="./assets/img/demos/d1-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout I</h2>
                                    <ul class="icon-list bullet-yellow row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>SEO,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Colorful
                                                design</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pricing
                                                table</span></li>
                                    </ul>
                                    <a href="./demo1.html" target="_blank"
                                        class="btn btn-sm btn-yellow rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-blue">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo2.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d2-1.jpg') }}"
                                                        srcset="./assets/img/demos/d2-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo2.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d2-2.jpg') }}"
                                                        srcset="./assets/img/demos/d2-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout II</h2>
                                    <ul class="icon-list bullet-blue row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Business,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Serif
                                                headings</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Solid
                                                colors</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Video
                                                lightbox</span></li>
                                    </ul>
                                    <a href="./demo2.html" target="_blank"
                                        class="btn btn-sm btn-blue rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-aqua">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo3.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d3-1.jpg') }}"
                                                        srcset="./assets/img/demos/d3-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo3.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d3-2.jpg') }}"
                                                        srcset="./assets/img/demos/d3-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout III</h2>
                                    <ul class="icon-list bullet-aqua row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Service,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Angled
                                                sections</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Animations</span></li>
                                    </ul>
                                    <a href="./demo3.html" target="_blank"
                                        class="btn btn-sm btn-aqua rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-violet">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-violet mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo4.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d4-1.jpg') }}"
                                                        srcset="./assets/img/demos/d4-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-violet"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo4.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d4-2.jpg') }}"
                                                        srcset="./assets/img/demos/d4-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout IV</h2>
                                    <ul class="icon-list bullet-violet row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Corporate,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Serif
                                                headings</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Tiled
                                                images</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Video
                                                lightbox</span></li>
                                    </ul>
                                    <a href="./demo4.html" target="_blank"
                                        class="btn btn-sm btn-violet rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-blue">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo5.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d5-1.jpg') }}"
                                                        srcset="./assets/img/demos/d5-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo5.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d5-2.jpg') }}"
                                                        srcset="./assets/img/demos/d5-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout V</h2>
                                    <ul class="icon-list bullet-blue row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>SaaS,
                                                Software</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Tiled
                                                images</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Animations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Pricing
                                                table</span></li>
                                    </ul>
                                    <a href="./demo5.html" target="_blank"
                                        class="btn btn-sm btn-blue rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-aqua">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo6.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d6-1.jpg') }}"
                                                        srcset="./assets/img/demos/d6-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo6.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d6-2.jpg') }}"
                                                        srcset="./assets/img/demos/d6-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout VI</h2>
                                    <ul class="icon-list bullet-aqua row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Landing,
                                                Product</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Animations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                    </ul>
                                    <a href="./demo6.html" target="_blank"
                                        class="btn btn-sm btn-aqua rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-purple">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo7.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d7-1.jpg') }}"
                                                        srcset="./assets/img/demos/d7-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo7.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d7-2.jpg') }}"
                                                        srcset="./assets/img/demos/d7-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout VII</h2>
                                    <ul class="icon-list bullet-purple row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Agency,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Illustrations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Project
                                                display</span></li>
                                    </ul>
                                    <a href="./demo7.html" target="_blank"
                                        class="btn btn-sm btn-purple rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-aqua">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo8.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d8-1.jpg') }}"
                                                        srcset="./assets/img/demos/d8-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-aqua"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo8.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d8-2.jpg') }}"
                                                        srcset="./assets/img/demos/d8-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout VIII</h2>
                                    <ul class="icon-list bullet-aqua row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Corporate,
                                                Business</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Animated
                                                header</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                    </ul>
                                    <a href="./demo8.html" target="_blank"
                                        class="btn btn-sm btn-aqua rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-blue">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo9.html"
                                                    target="_blank"><img class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d9-1.jpg') }}"
                                                        srcset="./assets/img/demos/d9-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a href="./demo9.html"
                                                    target="_blank"><img class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d9-2.jpg') }}"
                                                        srcset="./assets/img/demos/d9-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout IX</h2>
                                    <ul class="icon-list bullet-blue row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>SaaS,
                                                Software</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Serif
                                                headings</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Testimonials</span></li>
                                    </ul>
                                    <a href="./demo9.html" target="_blank"
                                        class="btn btn-sm btn-blue rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-orange">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-orange mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo10.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d10-1.jpg') }}"
                                                        srcset="./assets/img/demos/d10-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-orange"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo10.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d10-2.jpg') }}"
                                                        srcset="./assets/img/demos/d10-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout X</h2>
                                    <ul class="icon-list bullet-orange row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Business,
                                                Marketing</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Animations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Simple
                                                testimonials</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Tiled
                                                images</span></li>
                                    </ul>
                                    <a href="./demo10.html" target="_blank"
                                        class="btn btn-sm btn-orange rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-purple">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo11.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d11-1.jpg') }}"
                                                        srcset="./assets/img/demos/d11-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo11.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d11-2.jpg') }}"
                                                        srcset="./assets/img/demos/d11-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XI</h2>
                                    <ul class="icon-list bullet-purple row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Marketing,
                                                Service</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Animated
                                                header</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Tiled
                                                images</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                    </ul>
                                    <a href="./demo11.html" target="_blank"
                                        class="btn btn-sm btn-purple rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-orange">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-orange mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo12.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d12-1.jpg') }}"
                                                        srcset="./assets/img/demos/d12-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-orange"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo12.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d12-2.jpg') }}"
                                                        srcset="./assets/img/demos/d12-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XII</h2>
                                    <ul class="icon-list bullet-orange row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Agency,
                                                Studio</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>svg')}}
                                                icons</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Masonry
                                                portfolio</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                    </ul>
                                    <a href="./demo12.html" target="_blank"
                                        class="btn btn-sm btn-orange rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-purple">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo13.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d13-1.jpg') }}"
                                                        srcset="./assets/img/demos/d13-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-purple"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo13.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d13-2.jpg') }}"
                                                        srcset="./assets/img/demos/d13-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XIII</h2>
                                    <ul class="icon-list bullet-purple row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Agency,
                                                Startup</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Animations</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Parallax
                                                testimonials</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Angled
                                                sections</span></li>
                                    </ul>
                                    <a href="./demo13.html" target="_blank"
                                        class="btn btn-sm btn-purple rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-violet">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-violet mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo14.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d14-1.jpg') }}"
                                                        srcset="./assets/img/demos/d14-1@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-violet"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo14.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d14-2.jpg') }}"
                                                        srcset="./assets/img/demos/d14-2@2x.jpg 2x" alt="" /></a>
                                            </figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XIV</h2>
                                    <ul class="icon-list bullet-violet row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Startup,
                                                Creative</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Image
                                                section</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Background
                                                shapes</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Detailed
                                                footer</span></li>
                                    </ul>
                                    <a href="./demo14.html" target="_blank"
                                        class="btn btn-sm btn-violet rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-blue">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo15.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d15-1.jpg') }}"
                                                        srcset="./assets/img/demos/d15-1@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-blue"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo15.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d15-2.jpg') }}"
                                                        srcset="./assets/img/demos/d15-2@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XV</h2>
                                    <ul class="icon-list bullet-blue row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Business,
                                                Service</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Video
                                                lightbox</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Background
                                                shapes</span></li>
                                        <li class="col-md-6"><span><i
                                                    class="uil uil-check"></i></span><span>Newsletter</span></li>
                                    </ul>
                                    <a href="./demo15.html" target="_blank"
                                        class="btn btn-sm btn-blue rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="demo mb-10">
                    <div class="card bg-soft-pink">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-pink mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo16.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d16-1.jpg') }}"
                                                        srcset="./assets/img/demos/d16-1@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-pink"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo16.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d16-2.jpg') }}"
                                                        srcset="./assets/img/demos/d16-2@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XVI</h2>
                                    <ul class="icon-list bullet-pink row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Personal,
                                                Portfolio</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Shape
                                                mask</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Detailed
                                                portfolio</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Contact
                                                form</span></li>
                                    </ul>
                                    <a href="./demo16.html" target="_blank"
                                        class="btn btn-sm btn-pink rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
                <div class="project">
                    <div class="card bg-soft-navy">
                        <div class="card-body px-4 px-md-8 ps-xl-12 py-0 overflow-hidden">
                            <div class="row gx-md-8 gx-xl-12 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <div class="row gx-4 gx-md-7">
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-navy mt-9"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo17.html" target="_blank"><img
                                                        class="shadow-lg rounded-top"
                                                        src="{{ asset('theme/assets/img/demos/d17-1.jpg') }}"
                                                        srcset="./assets/img/demos/d17-1@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-6">
                                            <figure class="itooltip itooltip-navy"
                                                title='<h5 class="mb-0">Click to see the demo</h5>'><a
                                                    href="./demo17.html" target="_blank"><img
                                                        class="shadow-lg rounded-bottom"
                                                        src="{{ asset('theme/assets/img/demos/d17-2.jpg') }}"
                                                        srcset="./assets/img/demos/d17-2@2x.jpg 2x"
                                                        alt="" /></a></figure>
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /column -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <h2 class="post-title fs-30 mb-4">Demo Layout XVII</h2>
                                    <ul class="icon-list bullet-navy row ms-0 gy-2">
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Business,
                                                Corporate</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Soft
                                                colors</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Animated
                                                header</span></li>
                                        <li class="col-md-6"><span><i class="uil uil-check"></i></span><span>Content in
                                                box</span></li>
                                    </ul>
                                    <a href="./demo17.html" target="_blank"
                                        class="btn btn-sm btn-navy rounded-pill mt-1">See Demo</a>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.project -->
            </div>
            <!-- /.demos-wrapper -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-soft-primary mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg')}}" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-primary">
        <div class="container pt-7 pt-md-10 pb-14 pb-md-17">
            <div class="row mb-8 text-center">
                <div class="col-md-11 col-lg-10 col-xl-8 col-xxl-7 mx-auto">
                    <img src="{{ asset('theme/assets/img/demos/icon.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/icon@2x.png') }}" alt="" />
                    <h2 class="display-3 mt-3 mb-3 mb-0 px-lg-10 px-xl-0">Save your time and money by choosing Sandbox for
                        your website.</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-8 col-xxl-7 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-4">
                            <h3 class="counter fs-50 text-primary mb-1">250+</h3>
                            <p class="fs-18 mb-0">UI elements</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter fs-50 text-primary mb-1">130+</h3>
                            <p class="fs-18 mb-0">Pre-made blocks</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter fs-50 text-primary mb-1">100+</h3>
                            <p class="fs-18 mb-0">Neatly coded pages</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-11 pb-md-14">
            <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center mb-14 mb-md-16">
                <div class="col-lg-6 position-relative">
                    <div class="shape rounded bg-soft-primary rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                                src="{{ asset('theme/assets/img/demos/fe1.jpg') }}"
                                srcset="./assets/img/demos/fe1@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="{{ asset('theme/assets/img/demos/fe2.jpg') }}"
                                srcset="./assets/img/demos/fe2@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                                src="{{ asset('theme/assets/img/demos/fe3.jpg') }}"
                                srcset="./assets/img/demos/fe3@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                                src="{{ asset('theme/assets/img/demos/fe4.jpg') }}"
                                srcset="./assets/img/demos/fe4@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6 col-xl-5 col-xxl-4 offset-xl-1" data-cues="slideInRight" data-delay="1500"
                    data-group="features-1">
                    <div class="d-flex flex-row mb-7">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-images"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">Modern Portfolio Layouts</h4>
                            <p class="mb-0">Build and manage an eye-catching and impressive portfolio fast and without
                                effort.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-7">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-calendar-alt"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">Useful Blog Layouts</h4>
                            <p class="mb-0">Create an attractive and stunning journal to tell the world your wonderful
                                stories.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-star"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">Cool Features & Elements</h4>
                            <p class="mb-0">Sandbox includes amazing features and elements to create rich and attractive
                                pages.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center mb-16 mb-md-22">
                <div class="col-lg-6 offset-xl-1 position-relative order-lg-2">
                    <div class="shape rounded bg-soft-primary rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-5">
                            <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn"
                                data-delay="300" src="{{ asset('theme/assets/img/demos/fe5.jpg') }}"
                                srcset="./assets/img/demos/fe5@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="{{ asset('theme/assets/img/demos/fe6.jpg') }}"
                                srcset="./assets/img/demos/fe6@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-7">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                                src="{{ asset('theme/assets/img/demos/fe7.jpg') }}"
                                srcset="./assets/img/demos/fe7@2x.jpg 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200"
                                src="{{ asset('theme/assets/img/demos/fe8.jpg') }}"
                                srcset="./assets/img/demos/fe8@2x.jpg 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6 col-xl-5 col-xxl-4 offset-xxl-1" data-cues="slideInLeft" data-delay="1500"
                    data-group="features-2">
                    <div class="d-flex flex-row mb-7">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-web-grid-alt"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">13 Headers & 5 Footers</h4>
                            <p class="mb-0">Choose from various gorgeous header and footer styles to serve you best for
                                your needs.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-7">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-palette"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">Color & Font Options</h4>
                            <p class="mb-0">You can either use the included color and fonts or easily add your own
                                choices.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle pe-none btn-soft-primary mt-1 me-4"> <i
                                    class="uil uil-tablet"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1">Fully Responsive Layout</h4>
                            <p class="mb-0">Sandbox adapts to different screen sizes therefore it is compatible with any
                                device.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-soft-primary mx-n2">
                <svg')}} xmlns="http://www.w3.org/2000/svg')}}" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                </svg')}}>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-primary">
        <div class="container pb-14 pb-md-16">
            <div class="row gx-0 mb-14 mb-md-16">
                <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n23" data-cues data-group="images">
                    <img class="img-fluid mx-auto rounded shadow-lg" data-cue="fadeIn"
                        src="{{ asset('theme/assets/img/demos/de1.jpg') }}" srcset="./assets/img/demos/de1@2x.jpg 2x"
                        alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInRight"
                        src="{{ asset('theme/assets/img/demos/de2.jpg') }}" srcset="./assets/img/demos/de2@2x.jpg 2x"
                        style="top: 25%; right:-12%; max-width:30%; height: auto;" alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                        src="{{ asset('theme/assets/img/demos/de3.jpg') }}" srcset="./assets/img/demos/de3@2x.jpg 2x"
                        style="top: 15%; left:-15%; max-width:30%; height: auto;" alt="" />
                    <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                        src="{{ asset('theme/assets/img/demos/de4.jpg') }}" srcset="./assets/img/demos/de4@2x.jpg 2x"
                        style="bottom: 15%; left:-13%; max-width:30%; height: auto;" alt="" />
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 gx-md-8 gy-10 text-center justify-content-center"
                data-cues="slideInDown" data-group="features-3">
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi1.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi1@2x.png') }}" alt="" />
                    <h4>Built with Sass <br> & Bootstrap 5</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi2.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi2@2x.png') }}" alt="" />
                    <h4>SEO-friendly <br> Coding</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi3.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi3@2x.png') }}" alt="" />
                    <h4>Valid W3C <br> HTML5 & CSS3</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi4.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi4@2x.png') }}" alt="" />
                    <h4>Retina-ready <br> Graphics</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi5.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi5@2x.png') }}" alt="" />
                    <h4>One-page <br> Layout Option</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi6.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi6@2x.png') }}" alt="" />
                    <h4>Isotope <br> Filterable Gallery</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi7.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi7@2x.png') }}" alt="" />
                    <h4>Mailchimp <br> Compatible </h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi8.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi8@2x.png') }}" alt="" />
                    <h4>Contact Form <br> w/o Page Refresh</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi9.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi9@2x.png') }}" alt="" />
                    <h4>Animations <br> on Page Scroll</h4>
                </div>
                <!--/column -->
                <div class="col">
                    <img class="mb-4" src="{{ asset('theme/assets/img/demos/fi10.png') }}"
                        srcset="{{ asset('theme/assets/img/demos/fi10@2x.png') }}" alt="" />
                    <h4>Top-Notch Support <br> & Free Updates</h4>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
        <div class="container pt-xl-10 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <img src="{{ asset('theme/assets/img/demos/icon.png') }}"
                        srcset="{{asset('theme/assets/img/demos/icon@2x.png')}}" alt="" />
                    <h2 class="display-3 mt-3 mb-3 px-lg-8">Think unique and be creative. Make a difference with Sandbox.
                    </h2>
                    <p class="lead fs-lg mb-6">Everything you need to create your next unique and professional website,
                        including impressive and ready-made blocks and pages.</p>
                    <a href="https://1.envato.market/NKGrx2" target="_blank"
                        class="btn btn-lg btn-primary rounded-pill mb-10">Buy Sandbox</a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <img class="img-fluid" src="{{ asset('theme/assets/img/demos/f1.png') }}"
                srcset="{{ asset('theme/assets/img/demos/f1@2x.png') }}" data-cue="fadeIn" alt="" />
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
