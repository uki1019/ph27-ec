@extends('layouts.base')


@section('title', '商品一覧')

@section('content')

    <h2>商品一覧</h2>
    <form action="/search" method="GET">
        <input type="text" name="keyword" value="{{ request('keyword') }}">
        <input type="submit" value="検索">
    </form>
    @if (request('keyword'))
        <a href="/">検索結果をクリア</a>
    @endif
    @foreach ($products as $product)
        <ul>
            <li>
                <a href="/products/{{ $product->id }}">
                    {{ $product['name'] }}
                    <img src="{{ $product->imageUrl() }}" width="200">
                </a>
            </li>
        </ul>

        @if(isset($news))
        <h2>お知らせ</h2>

        @foreach ($news as $item)
            <div class="news">
                <h3>{{ $item->title }}</h3>
                <p>{!! $item->content !!}</p>
            </div>
        @endforeach
@endif
    @endforeach
@endsection
