@extends('layouts.userpanel.master')
@section('content')
    <section class="section pt-85">
        <div class="container-fluid">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <!--Post-1-->
                        <div class="post-card">
                            <div class="post-card-image">
                                <a href="post-default.html">
                                    <img src="{{ asset('images/' . $blog->image) }}" alt="">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <a href="blog-grid.html" class="categorie">Livestyle</a>
                                <h5>
                                    <a href="post-default.html">{{ $blog->title }}</a>
                                </h5>
                                <p>{{ $blog->body  }}</p>
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="author.html">
                                                <img src="{{ asset('userpanelAssets/img/author/1.jpg') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="author.html">David Smith</a>
                                        </li>
                                        <li class="dot"></li>
                                        <li>January 15, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/-->
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <!--Post-2-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/23.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">travel</a>
                            <h5>
                                <a href="post-default.html"> 10 Best and Most Beautiful Places to Visit in Italy
                                </a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>
                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-3-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/24.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Food</a>
                            <h5>
                                <a href="post-default.html">Enjoy My Favourite Molten Chocolate Cake</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>
                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-4-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/21.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Travel</a>
                            <h5>
                                <a href="post-default.html">Top 10 Forests That Every Nature Lover Must Visit</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-5-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/22.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Food</a>
                            <h5>
                                <a href="post-default.html">How To Prepare A Royal Healthy Breakfast At Home</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-6-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/27.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">livestyle</a>
                            <h5>
                                <a href="post-default.html">20+ Cute Girly Outfits to Buy for the First Day of Winter</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-7-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/26.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Livestyle</a>
                            <h5>
                                <a href="post-default.html">How to wear when you travel to Montain ?</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-8-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/28.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">Food</a>
                            <h5>
                                <a href="post-default.html">How to make morroco's pancake in five steps?</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Post-9-->
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                                <img src="assets/img/blog/20.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie">travel</a>
                            <h5>
                                <a href="post-default.html"> 10 Easy Tips for You to traveling around the world!</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt
                                distinctio...
                            </p>

                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="author.html">David Smith</a>
                                    </li>
                                    <li class="dot"></li>
                                    <li>January 15, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <!--pagination-->
                <div class="col-lg-12">
                    <div class="pagination mt--10">
                        <ul class="list-inline">
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="arrow_carrot-2right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                </div> --}}
            </div>
        </div>
    </section>
@endsection
