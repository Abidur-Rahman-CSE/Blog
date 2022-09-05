@extends('layouts.backend.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if (\Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div id="notificationAlert">
                            <div class="alert alert-warning">
                                <span style="color:black;">
                                    {!! \Session::get('success') !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">

                                    <div class="tab-content">
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="my-post-content pt-3">

                                                <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                    <img src="{{ asset('images/' . $blog->image) }}" alt="" class="img-fluid">
                                                    <a class="post-title" href="javascript:void()">
                                                        <h4>{{ $blog->title }}</h4>
                                                    </a>
                                                    <p style="color: black;">{{$blog->body}}</p>
                                                    {{-- <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary"><span class="mr-3"><i
                                                                class="fa fa-reply"></i></span>Reply</button> --}}
                                                </div>

                                                <div class="text-center mb-2"><a href="{{ route('index') }}" class="btn btn-dark">Back</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
@endsection


@section('footer_js')
<script>
    var xx = document.getElementById('notificationAlert');
    // if (xx.style.display === "none") {
    //     xx.style.display = "block";
    // }
    $('#notificationAlert').delay(3000).fadeOut('slow');
</script>
@endsection

