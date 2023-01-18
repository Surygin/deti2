@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <form action="{{ route('docs.update', $doc->id) }}" class="form" method="POST" enctype="multipart/form-data">
                
                <h3 class="mb-5">Изменение документа</h3>
                
                @method('put')
                @csrf 
                
                <input type="hidden" name="id" value="{{ $doc->id }}">
                <label for="title">Название документа</label>
                <input type="text" name="title" class="form-control mb-2" placeholder="Введите название" @if(isset($doc))value="{{ $doc->title }}"@endif>
                <a href="{{ route('docEdit', $doc->id) }}" class="btn btn-more">Изменить файл документа</a><br>

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
