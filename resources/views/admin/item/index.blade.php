<section>
    商品⼀覧ページです。
</section>

@php
$title = '商品⼀覧';
@endphp
@extends('layouts.admin')

@section('content')
<section>
    <p>
        <a href="{{ route('admin.item.create') }}" class="btn btn-outline-primary">新規追加/a>
    </p>
    <p>
        商品⼀覧ページです。
    </p>
</section>
@endsection