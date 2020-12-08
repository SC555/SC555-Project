<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>MART</h1>
                                <h2>Online Sri Lankan AgriCrops shopping</h2>
                                <p>We provide adifferent kinds of minor products for you </p>
                                <a href="{{url('/list-products')}}" button type="button" class="btn btn-default get" >Get it now</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontEnd/images/home/h3.png')}}" class="girl img-responsive" alt="" />
                              
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>MART</h1>
                                <h2>Shop Now!</h2>
                                <p>We have Pepper, Cinemmon, Cardamom, Vanilla and many other varities </p>
                                <a href="{{url('/list-products')}}" button type="button" class="btn btn-default get" >Get it now</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontEnd/images/home/pepper.png')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>MART</h1>
                                <h2>Join With Us</h2>
                                <p>Best Platform for Your Products </p>
                                <a href="{{url('/list-products')}}"button type="button" class="btn btn-default get" >Get it now</button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontEnd/images/home/cashewww.png')}}" class="girl img-responsive" alt="" />
                               
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->