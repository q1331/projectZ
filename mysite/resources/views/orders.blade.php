@extends('layouts.master')
@section('body')
<body>
    <div class="container orders-div">
        <div class="row" id="tabs">
            <ul class="nav nav-pills">
                <li><a href="#tabs-1" class="active">购买历史</a></li>
                <li><a href="#tabs-2">收到的订单</a></li>
            </ul>
            <div class="col-md-12" id="tabs-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" id="tabs-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>bash</td>
                        <td>kajima</td>
                        <td>1324@sadf.com</td>
                    </tr>
                    <tr>
                        <td>diuch</td>
                        <td>isdhf</td>
                        <td>sdhfsdfl@kinik.com</td>
                    </tr>
                    <tr>
                        <td>jsdlfh</td>
                        <td>ddsfooley</td>
                        <td>dsf@sdjfs.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <script src="js/orders.js"></script>
</body>
@endsection