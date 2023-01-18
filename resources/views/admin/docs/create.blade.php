@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('docs.store') }}" class="form" method="POST" enctype="multipart/form-data">
                
                <h3 class="mb-5">Добавление документа</h3>
            
                @csrf 
                
                <input type="file" name="file" class="form-control mb-2">
                
                <input type="text" name="title" class="form-control mb-2" placeholder="Введите название" @if(isset($post))value="{{ $post->title }}"@endif>

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

@endsection
