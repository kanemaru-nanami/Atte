@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('content')
<div class="attendance__content">
  <div class="attendance-form__heading">
    <h2 class="title">さんお疲れ様です！</h2>
  </div>
  <div class="attendance__panel">
    <div class="work">
        <form class="timestamp" action="/time/timein" method="post">
          @csrf
            <button class="attendance__button" type="submit">勤務開始</button>
        </form>
        <form class="timestamp" action="/time/timeout" method="post">
          @csrf
            <button class="attendance__button" type="submit">勤務終了</button>
        </form>
    </div>
    <div class="break">
        <form class="timestamp" action="/time/breakin" method="post">
          @csrf
            <button class="attendance__button" type="submit">休憩開始</button>
        </form>
        <form class="timestamp" action="/time/breakout" method="post">
          @csrf
            <button class="attendance__button" type="submit">休憩終了</button>
        </form>
    </div>
  </div>
@endsection