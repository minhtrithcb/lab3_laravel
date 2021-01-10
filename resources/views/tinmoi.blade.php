<?php use App\Http\Controllers\TinController; ?>
<div class="follow_us_side">
    <h2>TIN MỚI NHẤT</h2>
    <?php
        $tinmois = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
            ->orderby('Ngay','desc')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
            ->offset(0)->limit(5)->get();

            function time_elapsed_string($datetime, $full = false) {
                $now = new DateTime;
                $ago = new DateTime($datetime);
                $diff = $now->diff($ago);

                $diff->w = floor($diff->d / 7);
                $diff->d -= $diff->w * 7;

                $string = array(
                    'y' => 'year',
                    'm' => 'month',
                    'w' => 'week',
                    'd' => 'day',
                    'h' => 'hour',
                    'i' => 'minute',
                    's' => 'second',
                );
                
                foreach ($string as $k => &$v) {
                    if ($diff->$k) {
                        $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                    } else {
                        unset($string[$k]);
                    }
                }

                if (!$full) $string = array_slice($string, 0, 1);
                return $string ? implode(', ', $string) . ' ago' : 'just now';
            }
    ?>

    <div class="all_news_right">
        @foreach ($tinmois as $tinmoi)
            <div class="fs_news_right">
                <div class="single_fs_news_img"> <img alt="Single News" src="{{$tinmoi->urlHinh}}" onerror="this.src='defaultimg/defaultimg.jpg'"> </div>
                <div class="single_fs_news_right_text">
                    <h4><a href="{{action([TinController::class, 'chitiettin'] ,['id'=>$tinmoi->idTin])}}">{{$tinmoi->TieuDe}}</a></h4>
                    {{-- <p> <a href="tin/{{$tinmoi->idTin}}">{{$tinmoi->Ten}} | </a> <i class="fa fa-clock-o"></i> {{ time_elapsed_string($tinmoi->Ngay) }} </p> --}}
                    <p> <a href="tin/{{$tinmoi->idTin}}">{{$tinmoi->Ten}} | </a> <i class="fa fa-clock-o"></i> {{ date('H:m',strtotime($tinmoi->Ngay)) }} </p>
                </div>
            </div>
        @endforeach      
    </div>
  </div>