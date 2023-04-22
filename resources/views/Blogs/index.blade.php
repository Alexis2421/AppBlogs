@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card  border-primary mb-3">
                @foreach ($dataBlog as $blog)
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          {{$blog->title}}
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>{{$blog->title}}</strong> {{$blog->description}} <br><br>
                          <strong>Publicacion: {{$blog->date}}</strong>
                      </div>
                    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection