@section('searchBar')
<div class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="form-section">
                    <div class="row">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="applicationType">applicationType</label>
                                    <input type="text" class="form-control" id="applicationType" placeholder="项目关键字">
                                </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="sr-only" for="startApplication">申请开始时间</label>
                                    <div class='input-group date has-feedback' id='datetimepicker1'>
                                        <input class="form-control" id="date" name="date" placeholder="开始申请时间" type="text"/>
                                        <i class="glyphicon glyphicon-calendar form-control-feedback"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-default btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@show
