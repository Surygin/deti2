@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('imgUpdate', $post->id) }}" class="form" method="POST" enctype="multipart/form-data">

                @method('PUT')
                <h3 class="mb-5">Изменить изображение записи: {{ $post->title }}</h3> 

                @csrf 
                
                <a class="btn btn-more" href="{{ url()->previous() }}">Назад</a>
                <img src="{{ asset('posts/' . $post->img) }}">
                <input type="file" name="img" class="form-control mb-2">

                <button class="btn btn-more">
                    Отправить
                </button>
                <!-- /.btn btn-more -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.article__box -->

    </div>
    <!-- /.article -->
    <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('text', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

@endsection
