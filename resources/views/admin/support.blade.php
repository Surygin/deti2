@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">

            <form action="{{ route('support.update', $about->id) }}" class="form" method="POST" enctype="multipart/form-data">

                @method('PUT')
                <h3 class="mb-5">Редактироваие записи "{{ $about->title }}"</h3>

                @csrf 

                <input type="text" name="title" class="form-control mb-2" placeholder="Введите название" value="{{ $about->title }}">
                <textarea type="text" name="text" id="textEditor" class="form-control mb-2" placeholder="Введите текст" rows="50">{{ $about->text }}</textarea>

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
