<?php
    use App\Http\Controllers\TinController;

    $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");

    $tinmoinew = DB::table('tin')
    ->select('idTin', 'TieuDe', 'urlHinh','Ngay')
    ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
    ->where('tin.idTL','=',$idTL)
    ->first();

    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
    ->where('tin.idTL','=',$idTL)
    ->offset(1)->limit(3)->get();

    $loaitincon = DB::table('loaitin')->select('idLT', 'Ten')
    ->orderby('ThuTu','ASC')->where('AnHien','=','1')
    ->where('idTL','=',$idTL)
    ->get();

?>
<div class="fashion_area">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header_fasion">
          <div class="left_fashion main_nav_box">
            <ul>
              <li class="nav_fashion"><a href="">{{$TenTL}}</a></li>
            </ul>
          </div>
          <div class="fasion_right">
            <ul>
                @foreach ($loaitincon as $item)
                <li><a href="">{{$item->Ten}}</a></li>
                @endforeach
              <li class="last_item"><a href="">...</a></li>
            </ul>
          </div>
        </div>
        <div class="fashion_area_box">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left">
                <div class="single_fs_news_left_text">
                  <div class="fs_news_left_img" style="height: 260px"> <img src="{{ $tinmoinew->urlHinh}}" alt="" onerror="this.src='defaultimg/defaultimg.jpg'" />
                    <div class="br_cam br_vid_big_s"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                  <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoinew->idTin] ) }}"><?=$tinmoinew->TieuDe;?></a></h4>
                  <p> <i class="fa fa-clock-o"></i> <?=date('H:m',strtotime($tinmoinew->Ngay));?> <i class="fa fa-comment"></i> 19 </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="all_news_right">
                @foreach ($tinmoi as $item)
                  <div class="fs_news_right">
                    <div class="single_fs_news_img"> <img src="{{$item->urlHinh}}" alt="Single News" onerror="this.src='defaultimg/defaultimg.jpg'" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$item->idTin] ) }}">{{$item->TieuDe}}</a></h4>
                      <p> <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$item->idTin] ) }}">{{$item->Ten}} </a>| <i class="fa fa-clock-o"></i>  <?=date('H:m',strtotime($tinmoinew->Ngay));?> </p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>