@extends('layouts.admin')
@section('title')
<?php $title = "Users";?>
@endsection
@section('css')
 <link href="{{asset('css/adminusers.css')}}" rel="stylesheet">
 
@endsection

@section('content')
 @include('partials.users')
@endsection
