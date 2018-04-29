@extends('back.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Asd
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-left">
                    <button type="button" class="btn btn-success">اضافة مستخدم جديد</button>
                </div>
            </div>


            <div class="panel-body" >
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">الرقم</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">التفاصيل </th>
                            <th scope="col">السعر</th>
                            <th scope="col">المعلن</th>
                            <th scope="col">الفئة</th>
                            <th scope="col">الدولة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            {{$t=$post->id}}
                            <tr>
                            <td >{{$post->id}}</td>
                            <td >{{$post->title}}</td>
                            <td >{{$post->text}}</td>
                            <td >{{$post->price}}</td>
                            <td >{{$post->user->name}}</td>
                            <td >{{$post->category->category_name}}</td>
                            <td >{{$post->country->name}}</td>

                                <td>
                                {!! Form::open(['method'=>'DELETE','action'=>[{{route('post.destroy', $post->id)}}]]) !!}
                                    <div class="form-group">
                                        <button class="btn btn-warning btn-detail open_modal">Edit</button>
                                    </div>
                                    {!! Form::close() !!}






                        </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>//shaow an adding file
/*
        jQuery(document).ready(function(){
            jQuery('#delet').click(function(e){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: ,
                    method: 'post',
                    data:{
                        name: jQuery('#name').val(),
                        details: jQuery('#details').val(),

                    },

                    success: function(data){
                        //$( "#myModal" ).dialog( "close" );

                    }});
            });
            jQuery('.btn-delete').click(function(e){


                console.log("ddddddddddddd");});
        });*/
        //delete product and remove it from list
        jQuery(document).ready(function(){
            jQuery('#delet').click(function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                type: "DELETE",
                url: "/post.destroy/" + product_id,
                success: function (data) {
                    console.log(data);
                    $("#delet" + product_id).remove();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });});});

    </script>
@endsection
