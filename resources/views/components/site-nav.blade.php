<div id="header">
    <div class="intro">
        <img src="" alt="" class="icon" />

        <form action="" class="input-group flex-nowrap" method="post">
            <input name="product-name" type="text" class="form-control" placeholder="Tên sản phẩm" aria-label="Tên sản phẩm" />
            <button class="btn btn-outline-secondary">Search</button>
        </form>

        <div class="hotline">
            <p>Liên hệ với chúng tôi</p>
            <h1>HOTLINE</h1>
            <p>***********</p>
        </div>
    </div>

    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a href="#" class="nav-link">Trang chủ</a>
        </li>

        @foreach ($rootCategories as $rootCategory)
            <li class="nav-item">
                <a href="" class="dropdown nav-link">
                    {{ $rootCategory->name }}
                </a>
                <div class="dropdown-menu">
                    @foreach ($rootCategory->categories as $category)
                        <a href="" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach
                </div>
            </li>
        @endforeach

        <li class="nav-item">
            <a href="#" class="nav-link">Sản phẩm bán chạy</a>
        </li>

        <li class="nav-item dropdown dropdown-bottom">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Hỗ trợ khách hàng
            </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Hình thức mua hàng</a>
                <a href="#" class="dropdown-item">Chính sách bảo hành</a>
                <a href="#" class="dropdown-item">Chính sách vận chuyển</a>
                <a href="#" class="dropdown-item">Chính sách thanh toán</a>
                <a href="#" class="dropdown-item">Chính sách sản phẩm</a>
            </div>
        </li>
    </ul>

</div>
