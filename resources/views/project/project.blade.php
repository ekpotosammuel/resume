@extends('layouts.app')

@section('content')
    <!-- Expericence Start -->
    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="title pb-3 mb-5">Expericence</h1>
        @foreach ($exp as $exp)
            <div class="border-start border-2 border-light pt-2 ps-5">
                <div class="position-relative mb-4">
                    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                    <h5 class="mb-1">{{ $exp->title }}</h5>
                    <p class="mb-2">{{ $exp->companyName }} | <small>{{ $exp->year }}</small></p><br>
                    <p><span class="fw-medium text-primary">Project Name: </span>{{ $exp->projectName }}</p>
                    <div class="col-sm-6 py-1">
                        <span class="fw-medium text-primary">Live Server: </span>{{ $exp->url }}
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <!-- Expericence End -->
@endsection
