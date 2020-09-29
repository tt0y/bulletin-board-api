@extends('plain.layout')

@section('title')
    Список объявлений
@endsection

@section('content')
    <header>
        @include('plain.blocks.header')
    </header>

    <main>
        <div class="wrapper">
            <div class="header">
                <h1>Список объявлений</h1>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Описание предложения</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Изображение</th>
                </tr>
                </thead>
                <tbody>

                <tbody>
                @each('offer_item', $offers, 'offer')
                </tbody>
            </table>

            {{ $offers->links() }}

        </div>
    </main>

    <footer>
        @include('plain.blocks.footer')
    </footer>
@endsection
