@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <img class="card-img-top img-fluid bg-light-alt" src="/images/extra/card/img-1.jpg" alt="Card image cap">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Card title</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <img class="rounded-circle" src="/images/users/avatar-7.jpg" alt="" height="24">
                        <span class="badge bg-primary-subtle text-primary">30 May 2024</span>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p class="card-text text-muted ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Go somewhere</a>
            </div><!--end card -body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Card Body</h4>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p class="card-subtitle fs-14 mb-2">This is the card subtitle</p>
                <p class="card-text text-muted">Some quick example text the bulk of the card's content.
                    It is a long established fact that a reader will be distracted by the readable
                    content.
                </p>
            </div><!--end card -body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="card-subtitle fs-14 mb-2">This is the card subtitle</h6>
                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link text-primary">Card link</a>
                <a href="#" class="card-link text-primary">Another link</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-white">Header - Primary</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div><!--end card-body-->
            <p class="card-footer bg-light-alt m-0">Footer - 2024 Rizz</p>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a amet, consectetur adipiscing elit ante.</p>
                    <footer class="blockquote-footer fs-14 mb-0 mt-2">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-md-6 col-xl-3">


        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Group</h4>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group list-group-flush border mb-3">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Go somewhere</a>
                <a href="#" class="btn btn-outline-secondary btn-sm">Finish</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/images/extra/card/v-card.jpg" class="img-fluid rounded-start" alt="...">
                </div><!--end col-->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-lg-4">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div><!--end card-header-->
            <div class="card-body">
                <h5 class="card-title mb-2">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div><!--end col-->
                <div class="col-md-4">
                    <img src="/images/extra/card/v-card.jpg" class="img-fluid rounded-end" alt="...">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Special title treatment</h4>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                    content.</p>
                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

    <div class="col-lg-4">
        <div class="card text-center">
            <div class="card-header">
                <h4 class="card-title">Special title treatment</h4>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                    content.</p>
                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

    <div class="col-lg-4">
        <div class="card text-end">
            <div class="card-header">
                <h4 class="card-title">Special title treatment</h4>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                    content.</p>
                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card-group mb-3">
            <div class="card">
                <img class="img-fluid bg-light-alt" src="/images/extra/card/ex-card.png" alt="Card image">
                <div class="card-header">
                    <h4 class="card-title">Card Groups</h4>
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <p class="card-text">This is a wider card supporting text below to content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div><!--end card-body-->
            </div><!--end card-->
            <div class="card">
                <img class="img-fluid bg-light-alt" src="/images/extra/card/ex-card.png" alt="Card image">
                <div class="card-header">
                    <h4 class="card-title">Card Groups</h4>
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <p class="card-text">This is a wider card supporting text below to content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div><!--end card-body-->
            </div><!--end card-->
            <div class="card">
                <img class="img-fluid bg-light-alt" src="/images/extra/card/ex-card.png" alt="Card image">
                <div class="card-header">
                    <h4 class="card-title">Card Groups</h4>
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <p class="card-text">This is a wider card supporting text below to content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end card-group-->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4 bg-light-alt align-self-center">
                    <img src="/images/extra/card/ex-card.png" alt="..." class="img-fluid bg-light-alt">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-0">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text mb-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
    <div class="col-lg-6">
        <div class="row row-cols-1 row-cols-md-2 gx-3">
            <div class="col">
                <div class="card">
                    <img src="/images/extra/card/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col">
                <div class="card">
                    <img src="/images/extra/card/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col">
                <div class="card">
                    <img src="/images/extra/card/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col">
                <div class="card">
                    <img src="/images/extra/card/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end col-->
</div><!--end row-->

@endsection