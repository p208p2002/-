@extends('website.layouts.main')
@section('title', '最新消息')
@section('container')

<?php 
function cut_content($a,$b){
    $a = strip_tags($a); //去除HTML標籤
    $sub_content = mb_substr($a, 0, $b, 'UTF-8'); //擷取子字串
    echo $sub_content;  //顯示處理後的摘要文字
    if (strlen($a) > strlen($sub_content)) echo "...";
}
?>
    
    <div>

    {{--  first  --}}
    @foreach( $firstData as $data )
    <div class="row">
        <div class="col"></div>
        <div class="col-10 cover">
            <img src={{ url('/website/img/defaule_post.jpg') }} max-width="100%" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col"></div>
    </div>
    <!-- title -->
    <a style="color:black;" href="#"><h1 class="text-center">{{ $data->title }}</h1></a>
    <div class="row">
        <div class="col"></div>
        <!-- context -->
        <div class="col-9">
            <?php 
                cut_content($data->context,500);
            ?>
        </div>
        <div class="col"></div>
    </div>
    <br>
    <!-- context info -->
    <div class="row">
        <div class="col"></div>
        <div class="col-9">
            <p class="text-secondary">{{ App\GoodArticle::find($data->id)->getPoster($data->createrid) }} at {{ $data->createtime }}</p>
        </div>
        <div class="col"></div>
    </div>

    </div>
    @endforeach
    {{--  endfirst  --}}
    <hr>

    <!--  -->
   
    <div class="row">
        <div class="col-2">分類</div>
        <div class="col">

            <hr>
            <!--  -->
            @foreach($datas as $data)
            <div class="row">
                <div class="col-4 cover-sm">
                    <img src={{ url('/website/img/defaule_post.jpg') }} max-width="100%" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                    <a style="color:black;" href="#"><h3 class="text">{{ $data->title }}</h3></a>
                    <?php 
                        cut_content($data->context,400);
                    ?>
                    <br><br>
                    <p class="text-secondary">{{ App\GoodArticle::find($data->id)->getPoster($data->createrid) }} at {{ $data->createtime }}</p>
                </div>
            </div>
            <hr>
            @endforeach
            
            <div class="row">
                <div class="col"></div>
                <div class="col">{!! $datas->render() !!}</div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    
    
    <!--  -->
@endsection