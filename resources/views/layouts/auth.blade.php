<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])

    @yield('css')

    @include('layouts.partials/head-css')
</head>

<body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
