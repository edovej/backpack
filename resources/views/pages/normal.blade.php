@extends('layouts.app')

@section('title', $page->name)

@section('content')
{!!$page->content!!}

@endsection