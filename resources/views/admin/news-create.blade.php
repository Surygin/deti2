@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('posts.store') }}" class="form" method="POST" enctype="multipart/form-data">
                
                <h3 class="mb-5">Создание записи</h3>

                @csrf 
                
                @if(isset($post))
                <img src="{{ asset('storage/' . $post->img) }}">
                @endif
                <input type="file" name="img" class="form-control mb-2">
                
                <input type="hidden" name="category" value="{{ $id }}">
                
                <input type="text" name="title" class="form-control mb-2" placeholder="Введите название" @if(isset($post))value="{{ $post->title }}"@endif>
                <textarea type="text" name="description" class="form-control mb-2" placeholder="Введите описание" rows="5">@if(isset($post)){{ $post->description }}@endif</textarea>
                <textarea type="text" name="text" id="textEditor" class="form-control mb-2" placeholder="Введите текст" rows="50">@if(isset($post)){{ $post->text }}@endif</textarea>
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
