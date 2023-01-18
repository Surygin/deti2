@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('child.store') }}" class="form" method="POST" enctype="multipart/form-data">
                
                <h3 class="mb-5">Создание записи</h3>

                @csrf 
                
                @if(isset($child))
                <img src="{{ asset('storage/' . $child->img) }}">
                @endif
                <input type="file" name="img" class="form-control mb-2">
                
                <input type="text" name="firstname" class="form-control mb-2" placeholder="Введите Имя" @if(isset($child))value="{{ $child->title }}"@endif>
                <input type="text" name="lastname" class="form-control mb-2" placeholder="Введите Фамилию" @if(isset($child))value="{{ $child->title }}"@endif>
                <input type="text" name="quantity_end" class="form-control mb-2" placeholder="Введите сумму" @if(isset($child))value="{{ $child->title }}"@endif>
                <textarea type="text" name="description" class="form-control mb-2" placeholder="Введите описание" rows="5">@if(isset($child)){{ $child->description }}@endif</textarea>
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
