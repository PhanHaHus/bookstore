<nav id="nav-mobile" class="mm-menu mm-offcanvas">
  <div class="mm-panels">
    <div class="mm-panel mm-hasnavbar mm-opened mm-current" id="mm-1">
      <div class="mm-navbar"><a class="mm-title">Menu</a></div>
      <ul class="mm-listview">
         <li class="@yield('trangchu')"> <a href="{!! url('/') !!}">Trang chủ </a> </li>
        <li> <a href="#">Giới thiệu </a> </li>
        <li> <a class="mm-next" href="#mm-2" data-target="#mm-2"></a><a href="{!! url('san-pham') !!}" title="">Sản phẩm</a> </li>
        <li> <a href="#" title="">Tin tức</a> </li>
        <li> <a href="{!! url('lien-he') !!}" title="">Liên hệ</a> </li>
      </ul>
    </div>
    <div class="mm-panel mm-hasnavbar mm-hidden" id="mm-2">
      <div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" data-target="#mm-1"></a>
      <a class="mm-title" href="#mm-1">Sản phẩm</a></div>
      <ul class="mm-listview">
        <?php $menus = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',0)->orderBy('id','DESC')->get(); ?>
        @foreach ($menus as $menu)
         <li><a href="{!! url('danh-muc',[$menu->alias]) !!}">{!! $menu->name !!}</a> </li>
         @endforeach
        
      </ul>
    </div>
  </div>
</nav>

