@extends('index')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-lg-10 col-xxl-8 mx-auto">
                    <h1 class="display-1 mb-3">Shop Layout</h1>
                    <p class="lead mb-1">Integer posuere erat a ante venenatis dapibus.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row align-items-center mb-10 position-relative zindex-1">
                <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                    <h2 class="display-6">New Arrivals</h2>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!--/column -->
                <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <div class="form-select-wrapper">
                        <select class="form-select">
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="newness">Sort by newness</option>
                            <option value="price: low to high">Sort by price: low to high</option>
                            <option value="price: high to low">Sort by price: high to low</option>
                        </select>
                    </div>
                    <!--/.form-select-wrapper -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="grid grid-view projects-masonry shop mb-13">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh1.jpg') }}"
                                srcset="{{ asset('theme/assets/img/photos/sh1@2x.jpg') }}" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i
                                    class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                            <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13"
                                style="top: 1rem; left: 1rem;"><span>Sale!</span></span>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Shoes</div>
                                <span class="ratings five"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Nike
                                    Air Sneakers</a></h2>
                            <p class="price"><del><span class="amount">$55.00</span></del> <ins><span
                                        class="amount">$45.00</span></ins></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh2.jpg') }}"
                                srcset="{{asset('theme/assets/img/photos/sh2@2x.jpg')}}" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i
                                    class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Electronics</div>
                                <span class="ratings four"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Apple
                                    Watch</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh3.jpg') }}"
                                srcset="./assets/img/photos/sh3@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i
                                    class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                            <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13"
                                style="top: 1rem; left: 1rem;"><span>New!</span></span>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Electronics</div>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html"
                                    class="link-dark">Headphones</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh4.jpg') }}"
                                srcset="./assets/img/photos/sh4@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Shoes</div>
                                <span class="ratings three"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Colorful
                                    Sneakers</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh5.jpg') }}"
                                srcset="./assets/img/photos/sh5@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Electronics</div>
                                <span class="ratings one"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Polaroid
                                    Camera</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh6.jpg') }}"
                                srcset="./assets/img/photos/sh6@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Cosmetics</div>
                                <span class="ratings two"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Curology
                                    Cleanser</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh7.jpg') }}"
                                srcset="./assets/img/photos/sh7@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Home & Kitchen</div>
                                <span class="ratings four"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Q&Q
                                    Wall Clock</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh8.jpg') }}"
                                srcset="./assets/img/photos/sh8@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Electronics</div>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Earphones</a>
                            </h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4">
                        <figure class="rounded mb-6">
                            <img src="{{ asset('theme/assets/img/photos/sh9.jpg') }}"
                                srcset="./assets/img/photos/sh9@2x.jpg 2x" alt="" />
                            <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                title="Add to wishlist"><i class="uil uil-heart"></i></a>
                            <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i
                                    class="uil uil-eye"></i></a>
                            <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                Cart</a>
                        </figure>
                        <div class="post-header">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                <div class="post-category text-ash mb-0">Accessories</div>
                                <span class="ratings five"></span>
                            </div>
                            <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Apple Watch
                                    Milano Loop</a></h2>
                            <p class="price"><span class="amount">$55.00</span></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid -->
            <nav class="d-flex justify-content-center" aria-label="pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
                <!-- /.pagination -->
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-14">
            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('theme/assets/img/icons/solid/shipment.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Free Shipping</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('theme/assets/img/icons/solid/push-cart.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">30 Days Return</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('theme/assets/img/icons/solid/verify.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">2-Years Warranty</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                lacinia odio sem.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    </div>
@endsection
