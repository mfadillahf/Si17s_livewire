@extends('layouts.vertical', ['title' => 'FAQs'])

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="card-title pt-2 fw-semibold mb-2 fs-18">Most Commonly Asked Questions</h4>
                <p> <i class="la la-grip-lines text-primary fs-18"></i> <i class="la la-question-circle text-primary fs-18"></i> <i class="la la-grip-lines text-primary fs-18"></i></p>
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" p-4 rounded mb-3 border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-hexagon-dice h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1"> What is Rizz ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </p>
                        </div>
                        <div class=" p-4 rounded mb-3   border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-flower h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1">What cryptocurrency can i use to buy Rizz ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.
                            </p>
                        </div>
                        <div class=" p-4 rounded mb-3   border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-wolf h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1">Can i trade Rizz ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class=" p-4 rounded mb-3   border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-magic-wand h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1"> How buy Rizz on coin ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure .
                            </p>
                        </div>
                        <div class=" p-4 rounded mb-3   border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-emoji h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1"> Where can i download the wallet ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                        </div>
                        <div class=" p-4 rounded mb-3   border-dashed border-theme-color">
                            <div class="mb-2">
                                <div class="d-inline-flex justify-content-center align-items-center thumb-md card-bg border border border-secondary-subtle  rounded mx-auto">
                                    <i class="iconoir-bitcoin-circle h5 align-self-center mb-0 text-dark"></i>
                                </div>
                                <h6 class="fs-15 d-inline-block ms-1"> What is Rizz ?</h6>
                            </div>
                            <p class="fs-14 ms-45 text-muted mb-0">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </p>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Questions With Accordion</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="accordion" id="accordionExample-faq">
                    <div class="accordion-item">
                        <h5 class="accordion-header m-0" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Rizz?
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample-faq">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header m-0" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How buy Rizz on coin?
                            </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample-faq">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header m-0" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What cryptocurrency can i use to buy Rizz?
                            </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample-faq">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Have More Questions</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <input class="form-control mb-2" type="text" id="name" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control mb-2" type="email" id="example-email-input3" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control mb-2" type="text" id="subject2" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block px-4">Send Email</button>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection