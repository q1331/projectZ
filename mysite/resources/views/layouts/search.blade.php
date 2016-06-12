@section('searchBar')
<div class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-section">
                    <div class="row">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="applicationType">applicationType</label>
                                    <input type="text" class="form-control" id="applicationType" placeholder="项目关键字">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="startApplication">申请开始时间</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type="text" class="form-control" placeholder="开始申请时间">
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group teamType">
                                    <label class="sr-only" for="teamType">类别</label>
                                        <label><input type="checkbox" value="">团队</label>
                                        <label><input type="checkbox" value="">个人</label>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default btn-primary">Search</button>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datepicker();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@show
