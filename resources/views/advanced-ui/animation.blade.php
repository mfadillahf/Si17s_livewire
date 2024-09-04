@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
@vite(['node_modules/magic.css/dist/magic.min.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Masic Animation</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="text-center">
                    <div class="position-relative d-inline-block mx-auto">
                        <div id="animate-me">
                            <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                <img src="/images/logo-sm.png" alt="" class="center-block thumb-xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div id="content" class="col-lg-6 mx-auto text-center button-list container-magic-bottom container text-center">
                            <div style="height: 450px;" data-simplebar>
                                <h5 class="my-3 fs-15">Magic Effects</h5>
                                <button type="button" class="btn btn-outline-secondary btn-sm mb-1" data-test="vanishIn">Masic</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="twisterInDown">TwisterInDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="twisterInUp">TwisterInUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="swap">Swap</button>

                                <h5 class="my-3 fs-15">Bling</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="puffIn">PuffIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="puffOut">PuffOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="vanishIn">VanishIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="vanishOut">VanishOut</button>

                                <h5 class="my-3 fs-15">Static Effects</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownLeft">OpenDownLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownRight">OpenDownRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpLeft">OpenUpLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpRight">OpenUpRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownLeftReturn">OpenDownLeftReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownRightReturn">OpenDownRightReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpLeftReturn">OpenUpLeftReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpRightReturn">OpenUpRightReturn</button>

                                <h5 class="my-3 fs-15">Static Effects Out</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownLeftOut">OpenDownLeftOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openDownRightOut">OpenDownRightOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpLeftOut">OpenUpLeftOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="openUpRightOut">OpenUpRightOut</button>

                                <h5 class="my-3 fs-15">Perspective</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveDown">PerspectiveDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveUp">PerspectiveUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveLeft">PerspectiveLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveRight">PerspectiveRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveDownReturn">PerspectiveDownReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveUpReturn">PerspectiveUpReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveLeftReturn">PerspectiveLeftReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="perspectiveRightReturn">PerspectiveRightReturn</button>
                                <h5 class="my-3 fs-15">Rotate</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="rotateDown">RotateDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="rotateUp">RotateUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="rotateLeft">RotateLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="rotateRight">RotateRight</button>

                                <h5 class="my-3 fs-15">Slide</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideDown">SlideDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideUp">SlideUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideLeft">SlideLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideRight">SlideRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideDownReturn">SlideDownReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideUpReturn">SlideUpReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideLeftReturn">SlideLeftReturn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="slideRightReturn">SlideRightReturn</button>

                                <h5 class="my-3 fs-15">Math</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="swashOut">SwashOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="swashIn">SwashIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="foolishIn">FoolishIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="holeOut">HoleOut</button>

                                <h5 class="my-3 fs-15">Tin</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinRightOut">TinRightOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinLeftOut">TinLeftOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinUpOut">TinUpOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinDownOut">TinDownOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinRightIn">TinRightIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinLeftIn">TinLeftIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinUpIn">TinUpIn</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="tinDownIn">TinDownIn</button>

                                <h5 class="my-3 fs-15">Bomb</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="bombRightOut">BombRightOut</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="bombLeftOut">BombLeftOut</button>

                                <h5 class="my-3 fs-15">Boing</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="boingInUp">BoingInUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="boingOutDown">BoingOutDown</button>

                                <h5 class="my-3 fs-15">On The Space</h5>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceOutUp">SpaceOutUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceOutRight">SpaceOutRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceOutDown">SpaceOutDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceOutLeft">SpaceOutLeft</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceInUp">SpaceInUp</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceInRight">SpaceInRight</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceInDown">SpaceInDown</button>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-animation mb-1" data-test="spaceInLeft">SpaceInLeft</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/animation.init.js'])
@endsection