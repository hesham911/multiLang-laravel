@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
               @lang('welcome.helloWorld')
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">@lang('welcome.docs')</a>
                <a href="https://laracasts.com">@lang('welcome.laracasts')</a>
                <a href="https://laravel-news.com">@lang('welcome.news')</a>
                <a href="https://blog.laravel.com">@lang('welcome.blog')</a>
                <a href="https://nova.laravel.com">@lang('welcome.nova')</a>
                <a href="https://forge.laravel.com">@lang('welcome.forge')</a>
                <a href="https://github.com/laravel/laravel">@lang('welcome.github')</a>
            </div>
        </div>
    </div>
@endsection
