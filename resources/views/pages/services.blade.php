@extends('index')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto mb-11">
                    <h1 class="display-1 mb-3">Our Services</h1>
                    <p class="lead px-lg-7 px-xl-7 px-xxl-6">We are a creative company that focuses on establishing <span
                            class="underline">long-term relationships</span> with customers.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-14 pb-md-16">
            <div class="row mb-8">
                <div class="col-12 mt-n20">
                    <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/about5.jpg') }}"
                            srcset="./assets/img/photos/about5@2x.jpg 2x" alt="" /></figure>
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top"
                                data-image-src="{{ asset('theme/assets/img/photos/bg3.jpg') }}">
                                <div class="card-body p-9 p-xl-10">
                                    <div class="row align-items-center counter-wrapper gy-4 text-center">
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">7518</h3>
                                            <p>Completed Projects</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">3472</h3>
                                            <p>Satisfied Customers</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">2184</h3>
                                            <p>Expert Employees</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">4523</h3>
                                            <p>Awards Won</p>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-4 offset-md-2 align-self-end">
                            <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/g1.jpg') }}"
                                    srcset="./assets/img/photos/g1@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/g2.jpg') }}"
                                    srcset="./assets/img/photos/g2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 offset-md-1">
                            <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/g3.jpg') }}"
                                    srcset="./assets/img/photos/g3@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 align-self-start">
                            <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/g4.jpg') }}"
                                    srcset="./assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3">What We Do?</h2>
                    <p class="lead fs-lg mb-8 pe-xxl-2">The full service we are offering is <span
                            class="underline">specifically</span> designed to meet your business needs and projects.</p>
                    <div class="row gx-xl-10 gy-6">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i
                                            class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">24/7 Support</h4>
                                    <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i
                                            class="uil uil-shield-exclamation"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Secure Payments</h4>
                                    <p class="mb-0">Vivamus sagittis lacus augue laoreet vel.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i
                                            class="uil uil-laptop-cloud"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Daily Updates</h4>
                                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-5"> <i
                                            class="uil uil-chart-line"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Market Research</h4>
                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <h2 class="display-4 mb-3">How We Do It?</h2>
            <p class="lead fs-lg mb-8">We make your spending <span class="underline">stress-free</span> for you to have the
                perfect control.</p>
            <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
                <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span
                            class="number">01</span></span>
                    <h4 class="mb-1">Concept</h4>
                    <p>Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam. Pellentesque
                        ornare.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span
                            class="number">02</span></span>
                    <h4 class="mb-1">Prepare</h4>
                    <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span
                            class="number">03</span></span>
                    <h4 class="mb-1">Retouch</h4>
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span
                            class="number">04</span></span>
                    <h4 class="mb-1">Finalize</h4>
                    <p>Integer posuere erat, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay"
        data-image-src="{{ asset('theme/assets/img/photos/bg1.jpg') }}">
        <div class="container py-18 text-center">
            <div class="row">
                <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                    <a href="https://www.youtube.com/watch?v=26TbMXXOe0I"
                        class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i
                            class="icn-caret-right"></i></a>
                    <h2 class="display-4 px-lg-10 px-xl-13 px-xxl-10 mb-10 text-white">Find out everything you need to know
                        about creating a business process model.</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 mb-md-18">
                <div class="col-lg-4">
                    <h2 class="display-4 mt-lg-18 mb-3">Our Pricing</h2>
                    <p class="lead fs-lg">We offer <span class="underline">great prices</span>, premium and quality
                        products for your business.</p>
                    <p>Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No
                        credit card required!</p>
                    <a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a>
                </div>
                <!--/column -->
                <div class="col-lg-7 offset-lg-1 pricing-wrapper">
                    <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-end">
                        <p class="mb-0 pe-3">Monthly</p>
                        <div class="pricing-switchers">
                            <div class="pricing-switcher pricing-switcher-active"></div>
                            <div class="pricing-switcher"></div>
                            <div class="switcher-button bg-primary"></div>
                        </div>
                        <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
                    </div>
                    <div class="row gy-6 position-relative mt-5">
                        <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1"
                            style="bottom: -0.5rem; right: -1.6rem;"></div>
                        <div class="shape rounded-circle bg-line red rellax w-18 h-18" data-rellax-speed="1"
                            style="top: -1rem; left: -2rem;"></div>
                        <div class="col-md-6">
                            <div class="pricing card">
                                <div class="card-body pb-12">
                                    <div class="prices text-dark">
                                        <div class="price price-show justify-content-start"><span
                                                class="price-currency">$</span><span class="price-value">19</span> <span
                                                class="price-duration">mo</span></div>
                                        <div class="price price-hide price-hidden justify-content-start"><span
                                                class="price-currency">$</span><span class="price-value">199</span> <span
                                                class="price-duration">yr</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <h4 class="card-title mt-2">Premium Plan</h4>
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                        <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24
                                                <strong>Support</strong></span></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 popular">
                            <div class="pricing card">
                                <div class="card-body pb-12">
                                    <div class="prices text-dark">
                                        <div class="price price-show justify-content-start"><span
                                                class="price-currency">$</span><span class="price-value">49</span> <span
                                                class="price-duration">mo</span></div>
                                        <div class="price price-hide price-hidden justify-content-start"><span
                                                class="price-currency">$</span><span class="price-value">499</span> <span
                                                class="price-duration">yr</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <h4 class="card-title mt-2">Corporate Plan</h4>
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                        <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1"
                        style="top: 0; left: -1.4rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded mt-md-10 position-relative"><img
                                    src="{{ asset('theme/assets/img/photos/g5.jpg') }}"
                                    srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2">
                                    <figure class="rounded"><img src="{{ asset('theme/assets/img/photos/g6.jpg') }}"
                                            srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-10">
                                    <div class="card bg-pale-primary text-center">
                                        <div class="card-body py-11 counter-wrapper">
                                            <h3 class="counter text-nowrap">5000+</h3>
                                            <p class="mb-0">Satisfied Customers</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="display-4 mb-3">Let’s Talk</h2>
                    <p class="lead fs-lg">Let's make something great together. We are <span class="underline">trusted
                            by</span> over 5000+ clients. Join them by using our services and grow your business.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus
                        mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                        fermentum massa justo sit amet risus.</p>
                    <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
