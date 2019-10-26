<div id="header" class="border-bottom border-secondary">
    <div class="container">
        <div class="row d-flex">
            <a href="{{ url('/') }}"><img src="{{ url('pictures/icon/main-logo.png') }}" alt="logo" class="icon" height="80px" width="260px"/></a>

            <div class="col-6 form-group">
                {{ csrf_field() }}
                <input type="text" id="search" class="form-control input-lg" placeholder="Tìm kiếm sản phẩm" />
                <div id="productList"></div>
            </div>

            <div class="hotline col align-middle text-center">
                <h1 class="font-weight-bolder">HOTLINE</h1>

                <div class="custom-control-inline ml-3">
                    <label><img src="{{ url('pictures/icon/mayban.png') }}" alt="mayban" width="30px" height="30px"></label>
                        <pre class="font-italic"><h5 id="phone" > 02113 839 186</h5></pre>
                </div>

                <div class="custom-control-inline">
                    <label><img src="{{ url('pictures/icon/didong.jpg') }}" alt="didong" width="40px" height="40px"></label>
                        <pre><h5> 0979 552 609</h5><h5> 09 1234 0708</h5></pre>
                </div>
            </div>
        </div>

        <ul class="nav justify-content-center">
            <li class="nav-item border rounded border-secondary">
                <a href="{{ url('/') }}" class="nav-link">Trang chủ</a>
            </li>

        @foreach ($rootCategories as $rootCategory)
            <li class="nav-item dropdown dropdown-bottom border border-secondary rounded">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ $rootCategory->name }}
                </a>

                <div class="dropdown-menu">
                @foreach ($rootCategory->categories as $category)
                    <a href="{{ url('products/' . $category->slug) }}" class="dropdown-item">{{ $category->name }}</a>
                @endforeach
                </div>
            </li>
        @endforeach

            <li class="nav-item border border-secondary rounded">
                <a href="{{ url('pages/san-pham-ban-chay') }}" class="nav-link">Sản phẩm bán chạy</a>
            </li>

            <li class="nav-item dropdown dropdown-bottom border border-secondary rounded">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Hỗ trợ khách hàng
                </a>

                <div class="dropdown-menu">
                    <a href="{{ url('pages/hinh-thuc-mua-hang') }}" class="dropdown-item">Hình thức mua hàng</a>
                    <a href="{{ url('pages/chinh-sach-bao-hanh') }}" class="dropdown-item">Chính sách bảo hành</a>
                    <a href="{{ url('pages/chinh-sach-thanh-toan') }}" class="dropdown-item">Chính sách thanh toán</a>
                    <a href="{{ url('pages/chinh-sach-san-pham') }}" class="dropdown-item">Chính sách sản phẩm</a>
                </div>
            </li>
        </ul>
    </div>
</div>
