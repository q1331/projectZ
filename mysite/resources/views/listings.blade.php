@extends('layouts.master')
@section('body')

<body>
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">产品简介</li>
        <li>补充说明</li>
        <li>发布!</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">请介绍一下你的服务吧</h2>
        <h3 class="fs-subtitle">精彩的介绍能让大家注意到你的服务</h3>
        <input type="text" name="servicename" placeholder="你的服务叫什么?"/>
        <input type="text" name="major" placeholder="服务专业"/>
        <div class="form-group">
            <label for="level">学历</label>
            <select class="form-control">
                <option>高中</option>
                <option>本科</option>
                <option>研究生</option>
                <option>博士</option>
            </select>
        </div>
        <input type="text" name="summary" placeholder="一句话形容你的产品"/>
        <label for="price">价格</label>
        <input type="number" name="price" placeholder="0"/>
        <input type="button" name="next" class="next action-button" value="Next"/>
    </fieldset>
    <fieldset>
        <h2 class="fs-title">请介绍一下你的服务吧</h2>
        <h3 class="fs-subtitle">精彩的介绍能让大家注意到你的服务</h3>
        <textarea name="details" form="msform">详细描述下你的服务吧</textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous"/>
        <input type="button" name="next" class="next action-button" value="Next"/>
    </fieldset>
    <fieldset>
        <h2 class="fs-title"更多介绍</h2>
        <h3 class="fs-subtitle">你还可以上传视频或者图片来介绍服务</h3>
        <input type="button" name="previous" class="previous action-button" value="Previous"/>
        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
    </fieldset>
</form>

<script src="js/multiForm.js"></script>
</body>
@endsection
