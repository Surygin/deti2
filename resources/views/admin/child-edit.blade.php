@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('child.update', $post->id) }}" class="form" method="POST" enctype="multipart/form-data">

                @method('PUT')
                <h3 class="mb-5">Редактироваие записи</h3>                

                @csrf 
                
                <img src="{{ asset('posts/' . $post->img) }}">
                <a class="btn btn-more mb-3"  href="/admin/child/{{ $post->id }}/img/edit">Изменить изображение</a>

                <input type="text" name="firstname" class="form-control mb-2" placeholder="Введите имя" @if(isset($post))value="{{ $post->firstname }}"@endif>
                <input type="text" name="lastname" class="form-control mb-2" placeholder="Введите имя" @if(isset($post))value="{{ $post->lastname }}"@endif>
                <input type="text" name="quantity_end" class="form-control mb-2" placeholder="Введите имя" @if(isset($post))value="{{ $post->quantity_end }}"@endif>
                <textarea type="text" name="description" id="textEditor" class="form-control mb-2" placeholder="Введите описание" rows="5">@if(isset($post)){{ $post->description }}@endif</textarea>
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
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

@endsection
