@extends('layouts.master')

@section('content')

    @include('site.banner', ['billboard' => $billboard, 'banner' => $banner])
    <!-- Banner -->
    <div id="content">
        @include('site.process', ['billboard' => $billboard])
        @include('site.category', ['type' => $type, 'generalizeType' => $generalizeType, 'generalizePlatform' => $generalizePlatform, 'cooperationType' => $cooperationType])
        @include('site.goods-list', ['goods' => $goods])
        @include('site.website-list')
        @include('site.store-list')
    </div>

@stop
