@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex justify-content-between mt-4 p-0 m-0">
                    <div class="">
                        <h1 class="fw-bolder text-white">Projects</h1>
                    </div>
                    <div class="view-changer d-flex align-items-center">
                      <div class="selected-view d-flex align-items-center justify-content-center">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                          fill="#fff" class="bi bi-grid-fill"
                          viewBox="0 0 16 16">
                          <path
                              d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                        </svg></a>
                      </div>
                      <div class="non-selected-view d-flex align-items-center justify-content-center">
                        <a href=""><i class="fa-solid fa-bars"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-0">

            <div class="row">

                @foreach ($projects as $project)
                    <div class="col-sm-12 col-md-6 col-lg-4  d-flex justify-content-center">

                        <div class="info-container mb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content">
                                          <div class="img-container">
                                            @if ($project->image !== null)
                                                <img src="{{ asset('/storage/' . $project->image) }}" alt="">
                                            @else
                                                <img src="{{ asset('/storage/placeholder.png') }}" alt="">
                                            @endif
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content mt-3">
                                            <h4 class="card-title fw-bolder text-white">{{ $project->title }}</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <div class="col-12">
                                            <div class="content my-2 text-white-50 descr-content">
                                                <p class="card-text">{{ $project->description }}</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="content mt-1 py-3 text-white-50 descr-content">
                                                <p class="card-text"><span class="fw-bold text-white">Type:</span><span
                                                        class="{{ $project->type ? 'personal_pill_type' : 'personal_pill_type_null' }}">{{ $project->type ? $project->type->type_name : 'No Type' }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="content text-white-50 descr-content mb-5">
                                                <p class="card-text"><span
                                                        class="fw-bold text-white">Technologies:</span><span
                                                        class="{{ $project->type ? 'personal_pill_type' : 'personal_pill_type_null' }}">{{ $project->type ? $project->type->type_name : 'No Type' }}</span>
                                                </p>
                                            </div>
                                        </div>

                                        {{-- CARD  --}}
                                        <div class="col-12">
                                          <div class="content text-white-50 descr-content card-dash">
                                            <a href="{{ route('admin.projects.show', ['project' => $project->id])}}" class="btn btn-dark"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('admin.projects.edit', ['project' => $project->id])}}" class="btn btn-dark mx-3"><i class="fas fa-pencil"></i></a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $project->id }}">
                                              <i class="fas fa-trash"></i>
                                            </button>
                                          </div>
                                        </div>
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card mb-3" style="width: 18rem;">
                            <div class="card_content">
                                @if ($project->image !== null)
                                    <img src="{{ asset('/storage/' . $project->image) }}" alt="">
                                @else
                                    <img src="{{ asset('/img/placeholder.svg') }}" alt="">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->title }}</h5>
                                    

                                    <h1>{{ $project->type ? $project->type->type_name : 'Niente' }}</h1>

                                    <div class="d-flex">

                                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                            class="btn btn-primary me-1">View More</a>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                            class="btn btn-warning me-1"><i class="fas fa-pencil"></i></a>


                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal-{{ $project->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </div>


                                </div>
                            </div>
                        </div>
 --}}

                    @include('admin.projects.partials.modal')
                @endforeach

            </div>

        </div>
    @endsection
