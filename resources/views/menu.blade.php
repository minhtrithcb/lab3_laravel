<?php
    use App\Http\Controllers\TinController;
    $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
    ->orderby('ThuTu','asc')
    ->where('AnHien','=','1')->where('lang','=','vi')
    ->limit(5)->get();

    $icons = ["nav_lifeguide", "nav_fashion","nav_gadgets", "nav_lifestyle", "nav_video"];
?>

<nav class="main_nav_box" >
    <ul id="nav">
        <li class="nav_news"><a href="/">TRANG CHỦ</a></li>
        @foreach ($cactheloai as $i => $mottheloai) 
            @php
                $cacloaitin = DB::table('loaitin')
                ->where('idTL','=',$mottheloai->idTL)->where('AnHien','=','1')
                ->get();
            @endphp   
            <li class="{{$icons[$i]}}">
                <a href="{{ action([TinController::class, 'tintrongloai'], ['id'=> $mottheloai->idTL]) }}" style="padding-right: 20px ; padding-left: 45px; margin-left: 10px">
                    {{$mottheloai->TenTL}} 
                </a>
                <div class="sub_menu sub_menu_p single_mega">
                    <ul>
                        @foreach ($cacloaitin as $lt)
                            <li><a href="{{ action([TinController::class, 'tintrongloai'], ['id'=> $lt->idLT]) }}"><span>{{$lt->Ten}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
        <li class="nav_fashion"><a href="/lienhe">LIÊN HỆ</a></li>
    </ul>
  </nav>