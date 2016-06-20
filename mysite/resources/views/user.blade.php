@extends('layouts.master')
@section('body')

<body>
<!-- Page Content -->
<section>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div>
            <p class="lead">User Name</p>
            </div>
            <div>
                <img class="img-responsive" src="img/ml.jpg" alt="">
            </div>
            <hr>
            <div class="panel">
                <div class="panel-heading" align="center">
                    <a class="productName" href="#"><b class="productName">用户认证</b></a>
                </div>
                <div class="panel-body">
                   <p align="center"><span class="glyphicon glyphicon-ok"></span> 在读学校</p>
                    <p align="center"><span class="glyphicon glyphicon-ok"></span> 身份证明</p>
                    <p align="center"><span class="glyphicon glyphicon-ok"></span> 能力证明</p>
                    <p align="center"><span class="glyphicon glyphicon-ok"></span> 第三方验证</p>
                </div>
            </div>
            <hr>
            <div class="panel">
                <div class="panel-heading" align="center">
                    <a class="productName" href="#"><b class="productName">XXX的其他服务</b></a>
                </div>
                <div class="panel-body">
                    <p align="center"><span class="glyphicon glyphicon-pushpin"></span> 上门辅导</p>
                    <p align="center"><span class="glyphicon glyphicon-pushpin"></span> 材料润色</p>
                    <p align="center"><span class="glyphicon glyphicon-pushpin"></span> 经验分享</p>
                    <p align="center"><span class="glyphicon glyphicon-pushpin"></span> 不录不要钱服务</p>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div>
                <h1>Hi, I am XXX!</h1>
                <h3>很高兴认识你。</h3>
                <h6><span class="glyphicon glyphicon-flag"></span>举报此用户</h6>
            </div>

            <div class="well review-well">
                <h2>Reviews</h2>
                <div class="text-right">
                    <a class="btn">Leave a Review</a>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="photo"><img class="img-circle" alt="avatar" src="img/dashboard/ui-zac.jpg"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">10 days ago</span>
                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="photo"><img class="img-circle" alt="avatar" src="img/dashboard/ui-zac.jpg"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">12 days ago</span>
                        <p>I've alredy ordered another one!</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="photo"><img class="img-circle" alt="avatar" src="img/dashboard/ui-zac.jpg"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">15 days ago</span>
                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>
@endsection