<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/5g5faf78gvk6yfq9bd3bbfjo858kjx1q8o0nbiwtygo2e4er/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/tiny.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/post.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/2f67e8621f.js" crossorigin="anonymous"></script>

        @yield('styles')
    </head>

    <body>

        <div id="header">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-3">
                        <a href="{{ url('/') }}" class="my-4 d-block">
                            <img src="{{ url('pictures/icon/main-logo.png') }}" alt="logo" class="logo"/>
                        </a>
                    </div>

                    <div class="col-6">
                        <form action="" class="mt-5">
                            {{ csrf_field() }}
                            <input type="text" id="search" class="form-control input-lg"
                                   placeholder="Tìm kiếm sản phẩm"/>
                            <div id="productList"></div>
                        </form>
                    </div>

                    <div class="col-3 d-flex justify-content-end">
                        <div class="py-3">
                            <h5 class="font-weight-bolder h4 text-uppercase hotline pl-4">Hotline</h5>

                            <div class="">
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:02113839186" class="ml-1 phone-no">02113.839.186</a>
                            </div>

                            <div class="d-flex mt-2">
                                <i class="fas fa-mobile-alt"></i>
                                <ul class="list-unstyled m-0 p-0 ml-3">
                                    <li><a href="tel:0979552609" class="phone-no">0979.552.609</a></li>
                                    <li><a href="tel:0912340708" class="phone-no">0912.340.708</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--container-->

            <div class="menu-wrapper">
                <div class="container">
                    <ul class="nav position-relative">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Trang chủ</a>
                        </li>

                        @foreach ($rootCategories as $rootCategory)
                            <li class="nav-item dropdown dropdown-bottom">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    {{ $rootCategory->name }}
                                </a>

                                <div class="dropdown-menu border-0 rounded-0 shadow-sm">
                                    @foreach ($rootCategory->categories as $category)
                                        <a href="{{ url('products/' . $category->slug) }}"
                                           class="dropdown-item">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
{{--

                        <li class="nav-item">
                            <a href="{{ url('pages/san-pham-ban-chay') }}" class="nav-link">Sản phẩm bán chạy</a>
                        </li>
--}}

                        <li class="nav-item dropdown dropdown-bottom">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                Hỗ trợ khách hàng
                            </a>

                            <div class="dropdown-menu  border-0 rounded-0 shadow-sm">
                                <a href="{{ url('pages/hinh-thuc-mua-hang') }}" class="dropdown-item">Hình thức mua hàng</a>
                                <a href="{{ url('pages/chinh-sach-bao-hanh') }}" class="dropdown-item">Chính sách bảo hành</a>
                                <a href="{{ url('pages/chinh-sach-thanh-toan') }}" class="dropdown-item">Chính sách thanh toán</a>
                                <a href="{{ url('pages/chinh-sach-san-pham') }}" class="dropdown-item">Chính sách sản phẩm</a>
                            </div>
                        </li>
                        <li class="nav-item position-absolute introduce">
                            <a href="{{ url('pages/gioi-thieu') }}" class="nav-link">Giới thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
