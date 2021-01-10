@extends('layout')

@section('noidungchinh')
{{-- chi tiết tin --}}
<div class="cc_single_post">
    {{-- <div class="bsp_img">
        <img src="images/blog-s-p1.jpg" alt="blog single post" />
    </div> --}}
    <div class="sp_details">
        <a href="">{{ $tin->Ten}}</a>  
        <h2>{{$tin->TieuDe}}</h2>
        <div class="post_meta">
            <ul>
                <li><a href=""><i class="fa fa-user"></i>Đăng bởi Võ Minh Trí</a></li>
                <li><a href=""><i class="fa fa-eye"></i>{{$tin->SoLanXem}}</a></li>
                <li><a href=""><i class="fa fa-comment-o"></i>{{$ykien->count()}}</a></li>
            </ul>
        </div>
        <div class="post_text">
           @php
               echo $tin->Content;
           @endphp
        </div>
        <div class="social_tags">
            <div class="social_tags_left">
                <p>Tags :</p>
                <ul>
                    @php
                      $arrs = explode(",",$tin->tags) 
                    @endphp
                    @foreach ($arrs as $item)
                        <li><a href="">{{$item}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="social_tags_right">
                <ul>
                    <li class="facebook"><a class="fa fa-facebook" href=""></a></li>
                    <li class="twitter"><a class="fa fa-twitter" href=""></a></li>
                    <li class="google-plus"><a class="fa fa-google-plus" href=""></a></li>
                    <li class="linkedin"><a class="fa fa-linkedin" href=""></a></li>
                </ul>
            </div>
        </div>
        <div class="sp-next-prev">
            <div class="sp-prev">
                <a href=""><i class="fa fa-angle-double-left"></i>Previous post</a>
            </div>
            <div class="sp-next">
                <a href="">Previous post<i class="fa fa-angle-double-right"></i></a>
                <div class="sp-next-post">
                    <a href="">What Do I Need To Make It In <br>Business?</a>
                </div>
            </div>
        </div>
        <div class="sp-comments-box">
            <h2>Comments</h2>
            @foreach ($ykien as $item)
                <div class="single_comment" style="margin: 0">
                    <div class="single_comment_pic">
                        <img src="images/comment-pic1.png" alt="" />
                    </div>
                    <div class="single_comment_text">
                        <div class="sp_title">
                            <a href=""><h4>{{$item->HoTen}}</h4></a>
                            <p>{{$item->Ngay}}</p>
                        </div>
                        <p>{{$item->NoiDung}}</p>
                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="comment-form">
            <h2>leave your comments</h2>
            <div class="comments_form">
                <form>
                    <div class="inp_name">
                        <input id="c_name" type="text" placeholder="Your Name" required/>
                        <input type="text" placeholder="Your Name" required/>
                    </div>
                    <textarea cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Send Message"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection