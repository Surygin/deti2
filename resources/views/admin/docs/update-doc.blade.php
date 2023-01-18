@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('docUpdate', $doc->id)  }}" class="form" method="POST" enctype="multipart/form-data">
                
                <h3 class="mb-5">Изменение документа</h3>
                
                @method('put')
                @csrf 
                
                <input type="hidden" name="id" value="{{ $doc->id }}">
                <label for="title">Загрузите файл</label>
                <input type="file" name="file" class="form-control mb-2">
                <a href="{{ route('docs.edit', $doc->id) }}" class="btn btn-more">Назад</a>

                <button class="btn btn-more">
                    Изменить
                </button>
                <!-- /.btn btn-more -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.article__box -->

    </div>
    <!-- /.article -->

@endsection
