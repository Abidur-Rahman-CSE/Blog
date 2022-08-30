{{-- <x-app-layout>

    <x-slot name="header">
        {{ $blog }} Edit
    </x-slot>

    <form method="POST" action="{{ route('backend.dashboard.update', $subject) }}">
        @csrf
        @method('PUT')
        @include('backend.dashboard.create')
    </form>

</x-app-layout> --}}


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
                <div class="col-lg-4 col-md-12">
                    <div class="card" style="box-shadow: 100em">
                        <div class="card-header">
                            <h4 class="card-title">Edit Blog</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('blogUpdate', $blog->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Blog Title"
                                                name="title" value="{{ $blog->title }}"  required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image" >
                                        </div>
                                    </div>




                                    <fieldset class="form-group" style="color: BLUE">
                                        <div class="row">
                                            <label class="col-form-label col-sm-2 pt-0">status</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input id="INACTIVESTATUS" class="form-check-input" type="radio"
                                                        name="status" value="1" @if ($blog->status ==1) checked @endif>
                                                    <label class="form-check-label" for="INACTIVESTATUS">
                                                        active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="ACTIVESTATUS" class="form-check-input" type="radio"
                                                        name="status" value="0" @if ($blog->status ==0) checked @endif>
                                                    <label class="form-check-label" for="ACTIVESTATUS">
                                                        inactive
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Body</label>
                                        <div class="col-sm-10">
                                            <textarea name="blog_body" class="form-control" cols="3" rows="2" required>{{ $blog->body }}</textarea>
                                        </div>
                                    </div>
                                    <img src="{{ asset('images/' . $blog->image)}}" alt="" style="width:50%;">

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
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

