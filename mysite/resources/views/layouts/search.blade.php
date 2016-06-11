@section('searchBar')
<link href="css/search.css" rel="stylesheet">
<link href="css/datepicker.css" rel="stylesheet">
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/search.js"></script>
<div class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-section">
                    <div class="row">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="location">Location</label>
                                    <input type="email" class="form-control" id="location" placeholder="Where ?">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="sr-only" for="checkin">Check in</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="checkin" placeholder="Check in">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="sr-only" for="checkout">Check out</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="checkout" placeholder="Check out">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="sr-only" for="guest">Guest</label>
                                    <select id="guest" name="guest" class="form-control">
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guests</option>
                                        <option value="3">3 Guests</option>
                                        <option value="4">4 Guests</option>
                                        <option value="5">5 Guests</option>
                                        <option value="6">6 Guests</option>
                                        <option value="7">7 Guests</option>
                                        <option value="8">8 Guests</option>
                                        <option value="9">9 Guests</option>
                                        <option value="10">10 Guests</option>
                                        <option value="11">11 Guests</option>
                                        <option value="12">12 Guests</option>
                                        <option value="13">13 Guests</option>
                                        <option value="14">14 Guests</option>
                                        <option value="15">15 Guests</option>
                                        <option value="16">16+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
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
