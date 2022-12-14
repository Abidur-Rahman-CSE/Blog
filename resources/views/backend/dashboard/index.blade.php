@extends('layouts.backend.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6" style="cursor: pointer;"
                        onclick="location.href='{{ url('/blog/' . $blog->id) }}'">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $blog->body }}</p>
                            </div>
                            <img class="card-img-bottom img-thumbnail" src="{{ asset('images/' . $blog->image) }}"
                                alt="Card image cap" style="max-height: 13em">
                            <div class="card-footer d-flex justify-content-between">
                                <p class="card-text">Card footer</p>

                                <div class="edit-delete-button d-flex">

                                    <div class="" style="diplay: inline;">
                                        <form action="{{ route('blogEdit', $blog->id) }}" method="get">
                                            @csrf

                                            <button type="submit" style="border:none; background-color:Transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    style="color: gray; width:2em; height:2em;" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>


                                            <button type="submit" id="blogDelete{{ $blog->id }}" class="btn btn-danger"
                                                style="display: none;">Submit</button>
                                        </form>

                                    </div>
                                    <div class="" style="diplay: inline;">
                                        <form action="{{ route('blogDelete', $blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" style="border:none; background-color:Transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    style="color: rgb(238, 116, 116); width:2em; height:2em;" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>


                                            <button type="submit" id="blogDelete{{ $blog->id }}" class="btn btn-danger"
                                                style="display: none;">Submit</button>
                                        </form>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
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

    <script>
        function submitDelete(data) {
            console.log(data);
            var button = document.getElementById(data);
            button.form.submit();
        }
    </script>
@endsection
