@extends('layouts.admin')


@section("content")
<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4 border-bottom-primary">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ __("Document") }}</h6>
                <div class="dropdown no-arrow">
                    <div class="dropdown no-arrow">
                        <x-BackButton />
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="text-center">
                    <h5>
                    {{ $document->title }}
                    </h5>
                    <p>
                        {!! $document->description !!}
                    </p>

                    <hr/>

                    @forelse ($document->Files as $file)
                        {{ $file->description }}
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
    </div>


@endsection