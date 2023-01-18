@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <h3 class="mb-5">Редактирование контактов</h3>
            <form action="{{ route('contacts.update') }}" class="form mb-5" method="POST">
                @method('put')
                @csrf
                <label for="phone1">Телефон 1</label>
                <input id="phone1" name="phone1" type="text" class="form-control mb-2" placeholder="Введите телефон" value="{{ $contacts->phone1 }}">
                <label for="phone2">Телефон 2</label>
                <input id="phone2" name="phone2" type="text" class="form-control mb-2" placeholder="Введите телефон" value="{{ $contacts->phone2 }}">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" class="form-control mb-2" placeholder="Введите email" value="{{ $contacts->email }}">
                <label for="address">Адрес</label>
                <input id="address" name="address" type="text" class="form-control mb-2" placeholder="Введите адрес" value="{{ $contacts->address }}">
                <button class="btn btn-more">
                    Обновить
                </button>
                <!-- /.btn btn-more -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.article__box -->

    </div>
    <!-- /.article -->

@endsection
