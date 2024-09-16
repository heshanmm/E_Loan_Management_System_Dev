@extends('layouts.app')

@section('content')
    <div class="card-body">
        @if (session('status'))
            <script>
                alert('{{ session('status') }}');
            </script>
        @endif
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
