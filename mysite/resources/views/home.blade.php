@extends('layouts.master')
@section('body')
<body id="page-top">
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                @if(!Auth::check())
                    <h1>留学飞跃的新选择</h1>
                @else
                    <h1>Welcome, {{Auth::user()->name}}</h1>
                @endif
                <hr>
                <p>全球第三大留学电商品牌</p>
                <a href="#services" class="btn btn-primary btn-xl page-scroll">启程!</a>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">寻找你的导师</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>质量保证</h3>
                        <p class="text-muted">超越中介流水线服务的品质</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>反应敏捷</h3>
                        <p class="text-muted">你的要求随时能得到答复</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>第一手资讯</h3>
                        <p class="text-muted">直接来自留学生的就业择校情报</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>人生导师</h3>
                        <p class="text-muted">岂止于文书</p>
                    </div>
                </div>
            </div>
        </div>
        @extends('layouts.search')
        @section('searchBar')
            @parent
    </section>

    <!-- plugin javascript -->
    <!-- custom theme javascript -->

</body>
@endsection()
