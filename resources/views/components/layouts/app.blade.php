<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    @include('components.layouts.partials/title-meta', ['title' => $title])

    @yield('css')

    @include('components.layouts.partials/head-css')
    @livewireStyles
</head>

<body>

    @include('components.layouts.partials/topbar')

    @include('components.layouts.partials/startbar')

    <div class="page-wrapper">

        <div class="page-content">
            <div class="container-xxl">
                
                @yield('content')
                
            </div>

            @include('components.layouts.partials/endbar')

            @include('components.layouts.partials/footer')

        </div>
    </div>

    @include('components.layouts.partials/vendorjs')

    @vite(['resources/js/app.js'])

    @livewireScripts

</body>

</html>
