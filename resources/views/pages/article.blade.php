@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="section-title text-center position-relative mb-5">
                    <h1 class="display-4">{{ $title}}</h1>
                </div>
                <div class="content-wrapper">
                    {!! $description !!}
                </div>
            </div>
        </div>
    </div>
@endsection
