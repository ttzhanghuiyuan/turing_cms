@extends('layouts.app')

@section('self_css')
    <link href="{{ asset('css/menu/menulist.css') }}" rel="stylesheet">
@endsection

@section('self_js')
@endsection


@section('content')
    <div class="content">
        <!-- 目录组件 -->
        <menu-component></menu-component>
    </div>
@endsection
