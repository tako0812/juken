@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">



<div class="container">
    <div class="row align-items-center">
        <div class="col-12">

            <h2>２０２３年度大学入学共通テストまで</h2>
            <p class="timer">あと<br><span id="day"></span>日<span id="hour"></span>時間<span id="min"></span>分<span
                    id="sec"></span>秒<span id="com"></span></p>
            <script type="text/javascript" src="js/countdowns.js"></script>
        </div>
    </div>
</div>

<main class="container">

    <form method="POST">
        {{ csrf_field() }}
        <input class="form-control my-2" type="text" name="name" placeholder="ここに名前を入力" value="{{ old('name') }}">
        <textarea class="form-control my-2" name="content" rows="4" placeholder="ここにコメントを入力"></textarea>
        <input class="form-control my-2" type="submit" value="送信">
    </form>

    @forelse ( $topics as $topic )
    <div class="border my-2 p-2">
        <div class="text-secondary">{{ $topic->name }} さん</div>
        <div class="p-2">{!! nl2br(e($topic->content)) !!}</div>
        <div class="text-secondary">投稿日:{{ $topic->created_at }}</div>
    </div>

    @empty
    <p>投稿はありません。</p>
    @endforelse

</main>

<h2>大学入学共通テストまであと何日のTwitterアプリ（BOT)</h2>

<h2>大学入学共通テストの２０２３年日程</h2>

<h2>共通テストまでのスケジュール</h2>

@endsection