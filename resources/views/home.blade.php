@extends ("layouts.$layout")
@section('content')
    <div class="pt-5">
        <h1 class="font-weight-bolder text-center">Công Ty TNHH MTV sản xuất và thương mại Hải Oanh</h1>
    </div>
    <div class="ml-5 ml-5 mr-5">
        <div class="card mt-5">
            <h4 class="font-weight-bolder card-header">Các loại sản phẩm bán chạy</h4>
            <div class="card-deck">
                <div class="card">
                    <img src="../pictures/products/may-can-la-ton-cua-cuon-tam-lien.jpg" alt="may-can-la-ton-cua-cuon-tam-lien" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/dan-may-san-xuat-cua-cuon-uc') }}">Dàn máy sản xuất cửa cuốn Úc</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/khoa-ngang.jpg" alt="khoa-ih-4-canh-thuong" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/khoa-ngang') }}">Khóa ngang</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/lo-xo-2.jpg" alt="lo-xo" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/lo-xo-cua-cuon-uc') }}">Lò xo cửa cuốn Úc</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ml-5 ml-5 mr-5">
        <div class="card mt-5">
            <h4 class="font-weight-bolder card-header">Máy sản xuất</h4>
            <div class="card-deck">
                <div class="card">
                    <img src="../pictures/products/may-can-la-ton-cua-cuon-tam-lien.jpg" alt="may-can-la-ton-cua-cuon-tam-lien" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/dan-may-san-xuat-cua-cuon-uc') }}">Dàn máy sản xuất cửa cuốn Úc</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/may-can-la-ton-cua-cuon-tam-lien.jpg" alt="may-can-la-ton-cua-cuon-tam-lien" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/day-chuyen-san-xuat-kinh-dan-xay-dung') }}">Dây chuyền sản xuất kính dán xây dựng</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/may-can-la-ton-cua-cuon-tam-lien.jpg" alt="may-can-la-ton-cua-cuon-tam-lien" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/day-chuyen-san-xuat-tam-banen-cach-nhiet') }}">Dây chuyển sản xuất tấm Banen cách nhiệt</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ml-5 ml-5 mr-5">
        <div class="card mt-5">
            <h4 class="font-weight-bolder card-header">Phụ kiện cửa cuốn</h4>
            <div class="card-deck">
                <div class="card">
                    <img src="../pictures/products/khoa-ngang.jpg" alt="khoa-ih-2-canh-thuong" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/khoa-ngang') }}">Khóa ngang</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/lo-xo-2.jpg" alt="lo-xo" class="card-img-top">
                    <div class="card-body"></div>
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/lo-xo-cua-cuon-uc') }}">Lò xo cửa cuốn Úc</a></h5>
                    </div>
                </div>
                <div class="card">
                    <img src="../pictures/products/sung-ban-ghim-2.jpg" alt="sung-ban-ghim" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/sung-ban-ghim') }}">Súng bắn ghim</a></h5>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img src="../pictures/products/dinh-ghim-1.jpg" alt="dinh-ghim" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title"><a href="{{ url('../products/dinh-ghim') }}">Súng bắn ghim</a></h5>
                    </div>
                </div>
                <div class="card border-white"></div>
                <div class="card border-white"></div>
            </div>
        </div>
    </div>
@endsection
