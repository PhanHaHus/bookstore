@extends('frontend.master')
@section('title', 'Gold season')
@section('trangchu', 'active')
@section('content')
<!-- slide --- banner -->
@include('frontend.blocks.banner')
<!-- end slide --- banner -->
<!-- san pham mới -->
@include('frontend.blocks.product_new')
<!-- end sản phẩm mới -->
@stop