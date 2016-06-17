@extends('layouts.master')
@section('body')
    <body>
    <section>
    @extends('layouts.search')
    @section('searchBar')
        @parent
    </section>
    @for($i = 0; $i < 2; $i++)
    <div class="container">
        <div class="row">
            @for($j = 0; $j < 3; $j++)
            <div class="col-sm-4">
                <div class="panel">
                    <div class="panel-heading" align="center">
                        <a class="productName" href="/item"><b class="productName">常青藤申请一条龙服务</b></a>
                    </div>
                    <div class="panel-body">
                        @for($k = 0; $k < 4; $k++)
                            <p align="center">产品简介 不需要图片 {{$k}}</p>
                        @endfor
                        <a href="#"><img src="img/tempUser.jpg" class="img-circle" alt="Cinque Terre"></a>
                    </div>
                    <div class="panel-footer">提供者的简介</div>
                </div>
            </div>
            @endfor
        </div>
    </div><br>
    @endfor
    </body>
@endsection
