@extends('layouts.admin')
@section('title')
<?php $title = "Questions";?>
@endsection
@section('css')
 <link href="{{asset('css/admingroup.css')}}" rel="stylesheet">

@endsection

@section('content')
@include('partials.adminquestion')
@endsection
