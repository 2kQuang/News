@extends("../layouts.user")
@section('content')

    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                    @forelse ($product_slide as $item)
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{$item['image']}}" width="540px" height="345px"/>
                            <div class="tn-title">
                                <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="assets/img/news-450x350-1.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="assets/img/news-450x350-2.jpg" />
                            <div class="tn-title">
                                <a  href="">Integer hendrerit elit eget purus sodales maximus</a>
                            </div>
                        </div>
                    </div>
                    @endforelse
                    </div>
                </div>

                <div class="col-md-6 tn-right">
                    <div class="row">
                        @forelse ($product_four as $item)
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="{{$item['image']}}" width="270px" height="172"/>
                                <div class="tn-title">
                                    <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                           <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="assets/img/news-350x223-1.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="assets/img/news-350x223-2.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="assets/img/news-350x223-3.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="assets/img/news-350x223-4.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div> 
                        @endforelse
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sports</h2>
                    <div class="row cn-slider">
                        @forelse ($product_sports as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item['image']}}" width="255px" height="163px"/>
                                <div class="cn-title">
                                    <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-1.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-2.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-3.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Technology</h2>
                    <div class="row cn-slider">
                        @forelse ($product_technology as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item['image']}}" width="255px" height="163px"/>
                                <div class="cn-title">
                                    <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-4.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-5.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-1.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Business</h2>
                    <div class="row cn-slider">
                        @forelse ($product_Business as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item['image']}}" width="255px" height="163px"/>
                                <div class="cn-title">
                                    <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                                </div>
                            </div>
                        </div>
                        @empty

                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-5.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-4.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-3.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Entertainment</h2>
                    <div class="row cn-slider">
                        @forelse ($product_Entertainment as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item['image']}}" width="255px" height="163px"/>
                                <div class="cn-title">
                                    <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-2.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-1.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="assets/img/news-350x223-3.jpg" />
                                <div class="cn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab News Start-->

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="row">
@forelse ($categories_product as $item)
<div class="col-md-4">
    <div class="mn-img">
        <img src="{{$item['image']}}" width="255px" height="163px"/>
        <div class="mn-title">
            <a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a>
        </div>
    </div>
</div>
@empty
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-1.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-2.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-3.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-4.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-5.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-1.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-2.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-3.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="mn-img">
        <img src="assets/img/news-350x223-4.jpg" />
        <div class="mn-title">
            <a href="">Lorem ipsum dolor sit</a>
        </div>
    </div>
</div>
@endforelse
                        

                     
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Read More</h2>
                        <ul>
                            @forelse ($categories_product as $item)
                            <li><a href="{{route('details',['id'=>$item['id']])}}">{{$item['Title']}}</a></li>
                            @empty
                            <li><a href="">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="">Pellentesque tincidunt enim libero</a></li>
                            <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                            <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                            <li><a href="">Vestibulum cursus lorem nibh</a></li>
                            <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                            <li><a href="">Etiam vitae elit felis sit amet</a></li>
                            <li><a href="">Nullam congue massa vitae quam</a></li>
                            <li><a href="">Proin sed ante rutrum</a></li>
                            <li><a href="">Curabitur vel lectus</a></li>
                            @endforelse
                            



                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection