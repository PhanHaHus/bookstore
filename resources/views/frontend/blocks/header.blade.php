<!-- header -->
<header id="header" class="">
    <!-- herder bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="col-md-4 col-sm-12 header-logo"> <a href="{!! url('/') !!}" title="Gold season"> <img src="{!! asset('public/upload/logoweb/goldseason-2.png') !!}" /> </a> </div>
            <div class="col-xs-4 nav-mobile-button"> <a href="#nav-mobile"><i class="fa fa-bars fa-2x"></i></a> </div>
            <div class="col-md-8 col-sm-12 "> 
                <div class="address-bar">
                    <div class="address-box">
                        <span>47 Nguyễn Tuân, Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="phone-box">
                        <span>Hotline: 0906143468</span>
                    </div>
                    <div class="phone-box">
                        <span>tranvanba.k55@hus.com.vn</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end  header bottom -->
    <!-- header search menu -->
    <div class="header-nav-search">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 hidden-xs">
                    <nav class="header-nav">
                        <ul>
                            <li class="@yield('trangchu')"> <a href="{!! url('/') !!}">Trang chủ </a> </li>
                            <li class="@yield('gioithieu')"> <a href="{!! url('gioi-thieu') !!}">Giới thiệu </a> </li>
                            <li class="@yield('thietke')"> <a href="{!! url('thiet-ke') !!}">THIẾT KẾ <i class="fa fa-caret-down"></i></a> 
                                <ul>
                                    <li><a href="#">Thiet ke</a> 
                                    </li>
                                    <li><a href="#">Thiet ke</a> 
                                    </li>
                                    <li><a href="#">Thiet ke</a> 
                                    </li>
                                </ul>
                            </li>
                            <li class="@yield('tintuc')"> <a href="#">Tin tức </a> </li>
                            <li class="@yield('lienhe')"> <a href="{!! url('lien-he') !!}">Liên hệ </a> </li>
                            <li> <a href="#" title="">Tran Ba</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="header-search">
                        <form action="#" method="get">
                            <input type="text" name="query" class="hs-text" placeholder="Tìm kiếm" value="">
                            <button type="submit" class="hs-submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header search menu -->

</header>

<!-- end header --> 
