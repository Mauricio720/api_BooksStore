@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card-header w-100 d-flex justify-content-end">
            <a href="{{ route('addBook') }}" class="btn btn-dark">Adicionar Livro</a>
        </div>
        @foreach ($books as $book)
            <div href="{{ route('editBook', ['id' => $book->id]) }}" class="card m-4">
                <a class="actionBtn" href="{{ route('editBook', ['id' => $book->id]) }}">
                    <img src="{{ asset('images/edit.gif') }}" width="100%" alt="">
                </a>

                <a class="actionBtn actionBtn__delete" href="{{ route('deleteBook', ['id' => $book->id]) }}"
                    onclick="return confirm('Tem certeza?')" href="{{ route('editBook', ['id' => $book->id]) }}">
                    <img src="{{ asset('images/trash.png') }}" width="100%" alt="">
                </a>
                <div class="book">
                    <div class="bookImage__exibition">
                        <img src="{{ $book->img }}" width="100%" alt="">
                    </div>
                    <div class="bookTitle">{{ $book->title }}</div>
                    <div class="bookAuthor">autor: {{ $book->author }}</div>
                    <div class="bookPrice"> {{ $book->price }}</div>
                    <div class="bookDescription">{{ $book->description }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
