<?php use App\Http\Controllers\TinController; ?>

@extends('layout')

@section('noidungchinh')
    {{-- Form liên hệ --}}
    <div class="contact-page-form">
        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <div class="comments_form">
            <form action="{{action([TinController::class,'lienhe'])}}" method="post">
                {{ csrf_field()}}
                <div class="contact_cc_name">
                    <label for="">Tên của bạn</label>
                    <input type="text" name="name" placeholder="Tên của bạn" required/>
                    <label for="">Email của bạn</label>
                    <input type="text" name="email" placeholder="Email của bạn" required/>
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" placeholder="Điện thoại của bạn" required/>
                </div>
                <label for="">Nội dung</label>
                <textarea name="message" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
                <input name="submit" type="submit" value="Gửi Liên Hệ"/>
            </form>
        </div>
    </div>
@endsection