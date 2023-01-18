@extends('admin.main')

@section('content')

    <div class="article">

        <div class="article__box mb-5">
            <h3 class="mb-5">Редактирование реквизитов</h3>

            <form action="{{ route('requisites.update', $requisites->id) }}" class="form mb-5" method="POST">
                @method('put')
                @csrf

                <label for="inn">ИНН</label>
                <input id="inn" name="inn" type="text" class="form-control mb-2" placeholder="Введите ИНН" value="{{ $requisites->inn }}">
                <label for="rs">Расчетный счет</label>
                <input id="rs" name="rs" type="text" class="form-control mb-2" placeholder="Введите р\с" value="{{ $requisites->rs }}">
                <label for="ks">Кореспондентский счет</label>
                <input id="ks" name="ks" type="text" class="form-control mb-2" placeholder="Введите к\с" value="{{ $requisites->ks }}">
                <label for="kpp">КПП</label>
                <input id="kpp" name="kpp" type="text" class="form-control mb-2" placeholder="Введите КПП" value="{{ $requisites->kpp }}">
                <label for="bik">БИК</label>
                <input id="bik" name="bik" type="text" class="form-control mb-2" placeholder="Введите БИК Банка" value="{{ $requisites->bik }}">
                <label for="bik">ОГРН</label>
                <input id="ogrn" name="ogrn" type="text" class="form-control mb-2" placeholder="Введите ОГРН Банка" value="{{ $requisites->ogrn }}">
                <label for="bank">Название банка</label>
                <input id="bank" name="bank" type="text" class="form-control mb-2" placeholder="Введите название Банка" value="{{ $requisites->bank }}">
                <label for="address">Адрес банка</label>
                <input id="address" name="address" type="text" class="form-control mb-2" placeholder="Введите название Банка" value="{{ $requisites->address }}">

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
