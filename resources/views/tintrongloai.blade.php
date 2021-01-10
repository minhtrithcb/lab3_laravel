<?php use App\Http\Controllers\TinController; ?>
@extends('layout')

@section('noidungchinh')
    {{-- Tin trong loại --}}
    <nav style="--bs-breadcrumb-divider: '>" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            @if ($TenTL != null)
                <li class="breadcrumb-item active" aria-current="page">{{$TenTL}}</li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{$TenLT}}</li>
        </ol>
      </nav>
    <div class="all_news_right">
        @foreach ($list as $tinmoi)
            <div class="fs_news_right">
                <div class="single_fs_news_img"> 
                    <img onerror="this.src='defaultimg/defaultimg.jpg'" alt="Single News" src="{{$tinmoi->urlHinh}}" style="height: 170px"> 
                </div>
                <div class="single_fs_news_right_text">
                    <h4><a href="{{action([TinController::class, 'chitiettin'] ,['id'=>$tinmoi->idTin])}}" style="color: #3498db">{{$tinmoi->TieuDe}}</a></h4>
                    <p> <a href="tin/{{$tinmoi->idTin}}"> | </a> <i class="fa fa-clock-o"></i> {{ date('H:m',strtotime($tinmoi->Ngay)) }} </p>
                </div>
                <div class="single_fs_news_right_text" >
                    {{$tinmoi->TomTat}}
                </div>
            </div>
        @endforeach   
    </div>
    {{$list->links('pagination::bootstrap-4') }}
@endsection