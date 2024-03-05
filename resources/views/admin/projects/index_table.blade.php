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
                      <div class="non-selected-view d-flex align-items-center justify-content-center">
                        <a href="{{ route('admin.projects.index', ['view' => 0]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                          fill="#fff" class="bi bi-grid-fill"
                          viewBox="0 0 16 16">
                          <path
                              d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                        </svg></a>
                      </div>
                      <div class="selected-view d-flex align-items-center justify-content-center">
                        <a href="{{ route('admin.projects.index', ['view' => 1]) }}"><i class="fa-solid fa-bars"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-0">

            <div class="row">

                <table>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col" class="d-none d-sm-table-cell">Languages</th>
                        <th scope="col" class="d-none d-sm-table-cell">Status</th>
                        <th scope="col">Dash</th>
                      </tr>
                    </thead>
                    
                @foreach ($projects as $project)
                
                    <tbody >
                      <tr class="mb-5">
                        <td scope="row">{{ $project->id }}</th>
                        <td class="">{{ $project->title }}</td>
                        <td class="">{{ $project->description }}</td>
                        <td class="d-none d-sm-table-cell">{{ $project->languages }}</td>
                        <td class="d-none d-sm-table-cell">{{ $project->status }}</td>
                        <td class="">
                            <div class="dropdown">
                                <a class="btn text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </a>
                              
                                <ul class="dropdown-menu p-0">
                                  <li><a class="dropdown-item" href="{{ route('admin.projects.show', ['project' => $project->id])}}">View More</a></li>
                                  <li><a class="dropdown-item" href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Modify</a></li>
                                  <li>
                                    <button type="button" class="ps-3 pb-2 d-flex justify-content-start" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $project->id }}">
                                        <div class="text-danger">
                                            Delete
                                        </div>
                                      </button>
                                  </li>
                                </ul>
                              </div>
                        </td>
                      </tr>

                    @include('admin.projects.partials.modal')
                @endforeach
            </tbody>
        </table>

            </div>

        </div>
    @endsection
