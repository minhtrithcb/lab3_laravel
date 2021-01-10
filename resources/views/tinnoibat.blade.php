<?php
    USE App\Http\Controllers\TinController;
    
    $tinmoileft = DB::table('tin')
    ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->Where("NoiBat","=","1")
    ->offset(0)->limit(3)->get();

    $tinmoiright = DB::table('tin')
    ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->Where("NoiBat","=","1")
    ->offset(3)->limit(2)->get();
?>

<section class="hp_banner_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="hp_banner_box">
            <div class="hp_banner_left">
             @foreach ($tinmoileft as $item)
                <div class="bl_single_news"> 
                    <img src="{{$item->urlHinh}}" alt="" style="height: 360px;" onerror="this.src='defaultimg/defaultimg.jpg'" />
                    <div class="bl_single_text"> 
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$item->idTin] ) }}"><h4>{{$item->TieuDe}}</h4></a> 
                        <span><i class="fa fa-clock-o"></i> {{ date('H:m',strtotime($item->Ngay)) }}</span> 
                    </div>
                </div>
             @endforeach
            </div>
            <div class="hp_banner_right">
            @foreach ($tinmoiright as $item)
            <div class="br_single_news"> 
                <img src="{{$item->urlHinh}}" alt="" style="height: 175px;" onerror="this.src='defaultimg/defaultimg.jpg'" />
                <div class="br_single_text"> <span class="green_hp_span">{{$item->Ten}}</span> 
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$item->idTin] ) }}"><h4>{{$item->TieuDe}}</h4></a> 
                </div>
                <div class="br_cam"> <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$item->idTin] ) }}" class="fa fa-camera"></a> </div>
              </div>
             @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>