@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            @if (isset($data))
                <div class="card mt-2">
                    <div class="card-header ">My note</div>
                {{-- {{ $data }} --}}
                    <div class="card-body">
                    @foreach ($data as $item)
                    <div class="d-flex flex-row justify-content-between">
                        <div class="ms-3">
                            <div>제목 : {{ $item->title }}</div>
                            <div>내용 : {{ $item->ctnt }}</div>
                        </div>
                        <div>
                           <a href="" style="color: black"><i class="fa-solid fa-x me-3 icon"></i></a>
                        </div>
                    </div>
                        <hr>
                    @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection