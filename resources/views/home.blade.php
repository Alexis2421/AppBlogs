@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card  border-primary mb-3">
                <div class="card-header border-primary text-center">{{ __('Sistema de Blogs') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado Sesión!.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
