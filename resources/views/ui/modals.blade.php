@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Optional Sizes</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Class</th>
                                <th>Modal max-width</th>
                                <th>Modal Demo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Small</td>
                                <td><code>.modal-sm</code></td>
                                <td><code>300px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSmall">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Default</td>
                                <td class="text-muted">None</td>
                                <td><code>500px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Large</td>
                                <td><code>.modal-lg</code></td>
                                <td><code>800px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLarge">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Extra large</td>
                                <td><code>.modal-xl</code></td>
                                <td><code>1140px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bd-example-modal-xl">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Default (Center Modal)</td>
                                <td class="text-muted"><code>.modal-dialog-centered</code></td>
                                <td><code>500px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Default (Scroll Modal)</td>
                                <td class="text-muted"><code>.modal-dialog-scrollable</code></td>
                                <td><code>500px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                                        Launch demo modal
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Modal -->

                <div class="modal fade bd-example-modal-sm" id="exampleModalSmall" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="mySmallModalLabel">Small Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="text-center py-3">
                                <img src="/images/users/avatar-5.jpg" alt="" class="thumb-lg rounded-circle d-block mx-auto mb-1">
                                <h5 class="mb-1">Good Morning!</h5>
                                <p class="mb-0 text-muted">Hi, Aaron Gish ! Congratulations.</p>
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">Default Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade bd-example-modal-lg" id="exampleModalLarge" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="myLargeModalLabel">Large Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <img src="/images/extra/card/find.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-8 align-self-center">
                                        <div class="error-content text-center">
                                            <h1 class="fw-bold display-5">404!</h1>
                                            <h4 class=" mb-3">Looks like you've got lost...</h4>
                                            <button type="button" class="btn btn-primary">Back to Dashboard</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade bd-example-modal-xl" id="bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Extra Large Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <h5 class="mt-0">Overflowing text to show scroll behavior</h5>
                                <p>Cras mattis consectetur purus sit amet fermentum.
                                    Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac
                                    consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Vivamus sagittis lacus vel
                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                    Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Donec sed odio dui. Donec
                                    ullamcorper nulla non metus auctor
                                    fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum.
                                    Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac
                                    consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Vivamus sagittis lacus vel
                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                    Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Donec sed odio dui. Donec
                                    ullamcorper nulla non metus auctor
                                    fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum.
                                    Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac
                                    consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Vivamus sagittis lacus vel
                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                    Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Donec sed odio dui. Donec
                                    ullamcorper nulla non metus auctor
                                    fringilla.</p>
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Center Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->


                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalScrollableTitle">Center Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>

                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Fullscreen Modal</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Availability</th>
                                <th>Modal Demo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>.modal-fullscreen</code></td>
                                <td>Always</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.modal-fullscreen-sm-down</code></td>
                                <td>Below <code>576px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.modal-fullscreen-md-down</code></td>
                                <td>Below <code>768px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.modal-fullscreen-lg-down</code></td>
                                <td>Below <code>992px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.modal-fullscreen-xl-down</code></td>
                                <td>Below <code>1200px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>.modal-fullscreen-xxl-down</code></td>
                                <td>Below <code>1400px</code></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full screen below xxl</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenLabel">Full screen modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenSmLabel">Full screen below sm</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenMdLabel">Full screen below md</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-lg-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenLgLabel">Full screen below lg</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-xl-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenXlLabel">Full screen below xl</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-xxl-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Theme Color Modal</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="button-items d-flex flex-wrap gap-2">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalPrimary">Primary</button>

                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalSecondary">Secondary</button>

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalSuccess">Success</button>

                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalWarning">Warning</button>

                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalInfo">Info</button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDanger">Danger</button>

                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalDark">Dark</button>
                </div>

                <div class="modal fade" id="exampleModalPrimary" tabindex="-1" role="dialog" aria-labelledby="exampleModalPrimary1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">Primary Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalSecondary" tabindex="-1" role="dialog" aria-labelledby="exampleModalSecondary1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h6 class="modal-title m-0 text-white" id="exampleModalSecondary1">Secondary Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalSuccess1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h6 class="modal-title m-0 text-white" id="exampleModalSuccess1">Success Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalWarning" tabindex="-1" role="dialog" aria-labelledby="exampleModalWarning1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-warning">
                                <h6 class="modal-title m-0 text-white" id="exampleModalWarning1">Warning Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-warning btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalInfo1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h6 class="modal-title m-0 text-white" id="exampleModalInfo1">Info Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Danger Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->

                <div class="modal fade" id="exampleModalDark" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h6 class="modal-title m-0 text-white" id="exampleModalDark1">Drak Modal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3 text-center align-self-center">
                                        <img src="/images/extra/card/btc.png" alt="" class="img-fluid">
                                    </div><!--end col-->
                                    <div class="col-lg-9">
                                        <h5>Crypto Market Services</h5>
                                        <span class="badge bg-light text-dark">Disable Services</span>
                                        <small class="text-muted ms-2">07 Oct 2024</small>
                                        <ul class="mt-2 mb-0">
                                            <li>Lorem Ipsum is dummy text.</li>
                                            <li>It is a long established reader.</li>
                                            <li>Contrary to popular belief, Lorem simply.</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-dark btn-sm">Save changes</button>
                            </div><!--end modal-footer-->
                        </div><!--end modal-content-->
                    </div><!--end modal-dialog-->
                </div><!--end modal-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection