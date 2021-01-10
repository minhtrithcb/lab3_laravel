<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class GuimailController extends Controller
{
    function guimaillienhe(Request $request){
        $input = $request->all();
          Mail::send('mauthulienhe', 
            array(  'name'=>$input["name"],
                    'email'=>$input["email"], 
                    'content'=>$input['message']
             ), 
            function($message){
                $message
                ->from('vominhtriwordpress@gmail.com','Từ ứng dụng website')
                ->to('vominhtriwordpress@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn
                ->subject('Thư liên hệ');
            }
          );
          Session::flash('thongbao', 'Đã gửi mail thành công'); 
              
        //print_r($_POST);
      }  

}
