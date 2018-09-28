@extends('layouts.baseApp')

@section('title','Home')
@section('nvClass','')
@section('nvClass2','transparent-navbar')
@section('content')
    <!-- BANNER SECTION -->
    <section class="clearfix homeBanner" style="background-image: url(img/banner/banner1.png);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banerInfo">
                        <h1>Explore Your Local Market</h1>
                        <p>Xplormart helps to find out local markets arround you</p>
                        <form class="form-inline" action="listing-sidebar-map-left.html" method="">
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Find</div>
                                    <input type="text" class="form-control" id="findItem" placeholder="Keywords">
                                    <div class="input-group-addon addon-right"></div>
                                </div>
                            </div>
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Type</div>
                                    <select class="form-control" name="type" id="type" placeholder="">
                                        @foreach($types as $type)
                                            <option value="{{$type->type}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group inputGroup">
                                <div class="input-group">
                                    <div class="input-group-addon">Near</div>
                                    <input type="text" class="form-control" id="nearLocation" placeholder="Location">
                                    <div class="input-group-addon addon-right"><i class="icon-listy icon-target"
                                                                                  aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="btnWrapper">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"
                                                                                 aria-hidden="true"></i> Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THINGS SECTION -->
    <section class="clearfix thingsArea">
        <div class="container">
            <div class="page-header text-center">
                <h2>Popular Things Near You
                    <small>This are some of most popular markets</small>
                </h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="thubmnailSlider" class="carousel slide thumbnailCarousel">

                        <ol class="carousel-indicators">

                            @foreach($latest_markets as $latest_market)
                                <li data-target="#thubmnailSlider" data-slide-to="{{$loop->index}}"
                                    class="{{$loop->first?'active':''}}"></li>
                            @endforeach
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            @foreach($latest_markets as $market)
                                <div class="item row {{$loop->first?'active':''}}">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="thingsBox">
                                            <div class="thingsImage">
                                                <img src="{{$market->image}}" height="237px" width="368px"
                                                     alt="{{$market->name}}">
                                                <div class="thingsMask">
                                                    <ul class="list-inline rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <a href="{{ route('shop.show',$market->id) }}">
                                                        <h2>{{ $market->name }} <i
                                                                class="fa fa-check-circle" aria-hidden="true"></i></h2>
                                                    </a>
                                                    <p>{{ $market->address }}</p>
                                                    <p>{{ $market->country }}</p>
                                                </div>
                                            </div>
                                            <div class="thingsCaption ">
                                                <ul class="list-inline captionItem">
                                                    <li>
                                                        <a href="{{ route('shop.show',$market->id) }}">{{$market->type}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#thubmnailSlider" data-slide="prev"><i
                                class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#thubmnailSlider" data-slide="next"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
