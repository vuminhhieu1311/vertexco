@extends('layouts.admin')

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => __('messages.dashboard'),
    ])

@endsection
