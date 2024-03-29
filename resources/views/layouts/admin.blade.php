<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app">
        <div class="container-fluid">
            <div class="row">

                {{-- SIDEBAR --}}
                <div class="col-2 d-none d-sm-block p-0">

                    <div class="sidebar p-5 d-flex justify-content-center">

                        <ul class="list-unstyled d-flex flex-column align-items-center">
                            <li>
                                <a class="navbar-brand d-flex align-items-center mb-5" href="{{ url('/') }}">
                                    <div class="logo_laravel">
                                        <svg class="d-none d-lg-block" width="176" height="51" viewBox="0 0 176 51" xmlns="http://www.w3.org/2000/svg"><title>logo</title><path d="M67.057 11.723V34.67h8.362v3.958H62.605V11.723h4.452zm24.078 11.415v-2.42h4.219v17.91h-4.22v-2.422c-.567.897-1.374 1.602-2.42 2.114-1.044.512-2.096.768-3.154.768-1.368 0-2.62-.25-3.755-.749a8.782 8.782 0 0 1-2.923-2.056 9.549 9.549 0 0 1-1.896-2.998 9.613 9.613 0 0 1-.678-3.613c0-1.255.226-2.453.678-3.594a9.508 9.508 0 0 1 1.896-3.016 8.79 8.79 0 0 1 2.923-2.057c1.135-.5 2.387-.75 3.755-.75 1.058 0 2.11.257 3.155.77 1.045.512 1.852 1.217 2.42 2.113zm-.388 8.725a6.226 6.226 0 0 0 .388-2.19c0-.77-.13-1.5-.388-2.192a5.548 5.548 0 0 0-1.083-1.806 5.245 5.245 0 0 0-1.684-1.23c-.659-.307-1.388-.461-2.188-.461-.8 0-1.523.154-2.168.461-.645.308-1.2.718-1.664 1.23a5.276 5.276 0 0 0-1.064 1.806 6.489 6.489 0 0 0-.368 2.191c0 .769.122 1.5.368 2.19a5.27 5.27 0 0 0 1.064 1.807 5.29 5.29 0 0 0 1.664 1.23c.645.308 1.368.461 2.168.461s1.53-.153 2.188-.46a5.234 5.234 0 0 0 1.684-1.23 5.543 5.543 0 0 0 1.083-1.807zm7.936 6.764v-17.91h11.459v4.122h-7.24v13.788h-4.219zm26.75-15.489v-2.42h4.219v17.91h-4.22v-2.422c-.568.897-1.374 1.602-2.42 2.114-1.044.512-2.096.768-3.154.768-1.369 0-2.62-.25-3.755-.749a8.782 8.782 0 0 1-2.923-2.056 9.549 9.549 0 0 1-1.896-2.998 9.613 9.613 0 0 1-.678-3.613c0-1.255.225-2.453.678-3.594a9.508 9.508 0 0 1 1.896-3.016 8.79 8.79 0 0 1 2.923-2.057c1.135-.5 2.386-.75 3.755-.75 1.058 0 2.11.257 3.155.77 1.045.512 1.851 1.217 2.42 2.113zm-.388 8.725a6.226 6.226 0 0 0 .387-2.19c0-.77-.13-1.5-.387-2.192a5.548 5.548 0 0 0-1.084-1.806 5.245 5.245 0 0 0-1.684-1.23c-.658-.307-1.387-.461-2.187-.461-.8 0-1.523.154-2.168.461-.645.308-1.2.718-1.664 1.23a5.276 5.276 0 0 0-1.065 1.806 6.489 6.489 0 0 0-.368 2.191c0 .769.122 1.5.368 2.19a5.27 5.27 0 0 0 1.065 1.807 5.29 5.29 0 0 0 1.664 1.23c.645.308 1.368.461 2.168.461s1.53-.153 2.187-.46a5.234 5.234 0 0 0 1.684-1.23 5.543 5.543 0 0 0 1.084-1.807zm21.523-11.146h4.274l-6.926 17.91h-5.302l-6.926-17.91h4.274l5.303 13.715 5.303-13.715zm13.476-.46c5.746 0 9.664 5.055 8.928 10.972h-13.998c0 1.545 1.571 4.532 5.302 4.532 3.21 0 5.36-2.803 5.362-2.805l2.85 2.19c-2.548 2.702-4.635 3.943-7.903 3.943-5.84 0-9.797-3.668-9.797-9.416 0-5.2 4.09-9.416 9.256-9.416zm-5.059 7.859h10.112c-.031-.345-.579-4.532-5.086-4.532-4.507 0-4.993 4.187-5.026 4.532zm16.735 10.511V11.723h4.22v26.904h-4.22zM49.764 11.513a.8.8 0 0 1 .028.208v10.924a.796.796 0 0 1-.403.691l-9.234 5.279v10.463a.796.796 0 0 1-.403.69L20.478 50.787c-.044.026-.093.041-.14.058-.019.006-.036.017-.054.022a.812.812 0 0 1-.412 0c-.022-.006-.042-.018-.063-.026-.045-.015-.09-.03-.132-.054L.402 39.77A.796.796 0 0 1 0 39.078V6.306a.8.8 0 0 1 .028-.208c.006-.024.02-.045.028-.067.016-.042.03-.085.052-.124.015-.026.037-.047.054-.07.024-.032.044-.066.072-.094.023-.023.053-.04.079-.06.029-.022.055-.048.088-.067l.001-.001L10.04.106a.81.81 0 0 1 .8 0l9.638 5.509h.002c.032.02.058.046.088.068.026.02.055.037.078.06.028.028.048.062.072.093.018.024.04.045.055.071.022.039.036.082.052.124.008.022.021.043.028.067a.8.8 0 0 1 .027.208v20.469l8.032-4.591V11.721a.8.8 0 0 1 .027-.208c.007-.024.02-.044.029-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.07.024-.032.044-.066.072-.093.023-.023.052-.04.078-.06.03-.023.056-.05.089-.068v-.001l9.638-5.509a.808.808 0 0 1 .801 0l9.637 5.509h.001c.034.02.06.046.09.068.025.02.055.038.078.06.028.028.048.062.071.093.018.024.04.045.055.071.023.039.036.082.052.124.009.023.022.043.028.067zm-1.578 10.671V13.1l-3.373 1.928-4.658 2.663v9.084l8.03-4.591zm-9.637 16.433v-9.09l-4.584 2.598L20.88 39.54v9.175l17.669-10.1zM1.606 7.685v30.932l17.668 10.1v-9.174l-9.23-5.186-.002-.003-.004-.001c-.032-.018-.057-.044-.086-.066-.026-.02-.054-.036-.077-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.026-.044-.049-.06-.077l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.029-.03-.057-.038-.089v-.001c-.011-.038-.012-.078-.017-.117-.003-.03-.012-.059-.012-.09V12.275L4.98 9.613 1.606 7.685zm8.834-5.968l-8.027 4.59 8.027 4.588 8.028-4.589-8.028-4.589zm4.176 28.638l4.658-2.662V7.685l-3.372 1.928-4.659 2.663v20.007l3.373-1.928zM39.352 7.133l-8.028 4.588 8.028 4.589 8.027-4.589-8.027-4.588zm-.803 10.558l-4.659-2.663-3.372-1.928v9.084l4.658 2.663 3.373 1.928V17.69zm-18.473 20.47l11.775-6.674 5.886-3.336-8.022-4.586-9.237 5.28-8.418 4.812 8.016 4.504z" fill="#4c1e8d" fill-rule="evenodd"/></svg>
                                        <svg class="d-lg-none d-sm-block" width="50" height="52" viewBox="0 0 50 52" xmlns="http://www.w3.org/2000/svg"><title>Logomark</title><path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="#4c1e8d" fill-rule="evenodd"/></svg>
                                    </div>
                                    {{-- config('app.name', 'Laravel') --}}
                                </a>
                            </li>

                            <li class="fs-4 fw-bold mb-5 mt-5 d-flex align-items-center justify-content-center">
                                <a href="{{ route('admin.projects.index', ['view' => 0]) }}"
                                class="text-decoration-none {{ Route::currentRouteName() == 'admin.projects.index' ? 'active-sidebar' : 'text-secondary' }}">

                                    <div class="align-items-center d-flex  ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="currentColor" class="bi bi-grid-fill mt-lg-1 me-lg-3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                                        </svg>
                                        <div class="d-lg-block d-none">
                                            Overview
                                        </div>
                                    </div>

                                </a>
                            </li>

                            <li class="fs-4 fw-bold mb-5 d-flex align-items-center">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="text-decoration-none {{ Route::currentRouteName() == 'admin.dashboard' ? 'active-sidebar' : 'text-secondary' }}">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="currentColor" class="bi bi-bar-chart-fill mt-lg-1 me-lg-3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                                        </svg>
                                        <div class="d-lg-block d-none">
                                            Dashboard
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                {{-- HEADER/MAIN --}}
                <div class="col-12 col-sm-10 bg-warning p-0 m-0">
                    <div class="row">

                        {{-- HEADER --}}
                        <div class="col-12 d-none d-sm-block">
                            <div class="content">
                                <header class="d-flex align-items-center justify-content-between p-5">
                                    <a href="{{ route('admin.projects.create')}}" class="d-flex align-items-center text-decoration-none">
                                        <button class="btn purple-btn fw-bold"><i class="fas fa-plus me-1"></i> Add post</button>
                                    </a>

                                    <div class="nav-item dropdown text-white">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} 
                                        </a>
            
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('admin.dashboard')}}">{{__('Dashboard')}}</a>
                                            <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    
                                </header>
                            </div>
                        </div>

                        {{-- CONTENUTO/MAIN --}}
                        <div class="col-12">
                            <main>
                                <div class="content bg_more_dark p-0 m-0">
                                    @yield('content')
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
