@extends('layouts.main')

@section('title', 'Products')


@section('content')
    <div class="main">
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3" style="width: 55%; margin: 0 auto;">
                            <img class="card-img img-fluid" src="https://{{ $AllProductData['media']['images'][0]['url']  ?? '' }}" alt="Card image cap"
                                id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-dark fas fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <!--End Controls-->
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                                data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="https://{{ $AllProductData['media']['images'][1]['url']  ?? '' }}"
                                                        alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="https://{{ $AllProductData['media']['images'][2]['url']  ?? '' }}"
                                                        alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="https://{{ $AllProductData['media']['images'][3]['url']  ?? '' }}"
                                                        alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">{{ $AllProductData['name']  ?? '' }}</h1>
                                <p class="h3 py-2">{{ $AllProductData['price']['current']['text']  ?? '' }}</p>
                                <p class="py-2">
                                    <span class="list-inline-item text-dark">Info: {{$AllProductData['info']['careInfo']}}</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Brand:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>{{$AllProductData['brand']['name']}}</strong></p>
                                    </li>
                                </ul>

                                <h6>Description:</h6>
                                <div class="description">
                                    {!! strip_tags($AllProductData['description'], '<strong>') !!}
                                </div><br>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Avaliable Color :</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>White / Black</strong></p>
                                    </li>
                                </ul>

                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row" style="    justify-content: center;
                                    align-items: center;
                                    align-content: center;">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item">Size :
                                                    <input type="hidden" name="product-size" id="product-size"
                                                        value="S">
                                                </li>
                                                <li class="list-inline-item"><span
                                                        class="btn btn-success btn-size">S</span></li>
                                                <li class="list-inline-item"><span
                                                        class="btn btn-success btn-size">M</span></li>
                                                <li class="list-inline-item"><span
                                                        class="btn btn-success btn-size">L</span></li>
                                                <li class="list-inline-item"><span
                                                        class="btn btn-success btn-size">XL</span></li>
                                            </ul>
                                        </div>

                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class=" text-right" style="display: flex;
                                                column-gap: 5px;">
                                                    
                                                    <span>Quantity:</span> <input type="number" name="product-quanity"
                                                        style="display: block;
                                                        background: #fff;
                                                        background-color: #fff !important;
                                                        border: 1px solid black;
                                                        width: 70px;
                                                        text-align: center;"
                                                        placeholder="1"
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                value="buy">Buy</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                value="addtocard">Add To Cart</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

        <!-- Start Article -->
        <section class="py-5">
            <div class="container">
                <div class="row text-left p-2 pb-3">
                    <h4>Related Products</h4>
                </div>

                <!--Start Carousel Wrapper-->
                <div id="carousel-related-product" class="d-flex">

                    <div class="p-2 pb-3 col-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="/assets/img/shop_08.jpg">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$20.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3 col-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="/assets/img/shop_09.jpg">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">White Shirt</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$25.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3 col-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="/assets/img/shop_10.jpg">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$45.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3 col-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="/assets/img/shop_11.jpg">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Black Fashion</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$60.00</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- End Article -->
    </div>
@endsection
