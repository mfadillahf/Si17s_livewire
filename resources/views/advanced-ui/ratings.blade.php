@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
@vite(['node_modules/starability/starability-css/starability-all.css', 'node_modules/animate.css/animate.min.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Default star rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-basic">
                        <input type="radio" id="rate5" name="rating" value="5" />
                        <label for="rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="rate4" name="rating" value="4" />
                        <label for="rate4" title="Very good">4 stars</label>

                        <input type="radio" id="rate3" name="rating" value="3" />
                        <label for="rate3" title="Average">3 stars</label>

                        <input type="radio" id="rate2" name="rating" value="2" />
                        <label for="rate2" title="Not good">2 stars</label>

                        <input type="radio" id="rate1" name="rating" value="1" />
                        <label for="rate1" title="Terrible">1 star</label>
                    </div>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Slot machine rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-slot">
                        <input type="radio" id="slot-rate5" name="rating" value="5" />
                        <label for="slot-rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="slot-rate4" name="rating" value="4" />
                        <label for="slot-rate4" title="Very good">4 stars</label>

                        <input type="radio" id="slot-rate3" name="rating" value="3" />
                        <label for="slot-rate3" title="Average">3 stars</label>

                        <input type="radio" id="slot-rate2" name="rating" value="2" />
                        <label for="slot-rate2" title="Not good">2 stars</label>

                        <input type="radio" id="slot-rate1" name="rating" value="1" />
                        <label for="slot-rate1" title="Terrible">1 star</label>
                    </div>
                </form>
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
                        <h4 class="card-title">Growing star rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-grow">
                        <input type="radio" id="growing-rate5" name="rating" value="5" />
                        <label for="growing-rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="growing-rate4" name="rating" value="4" />
                        <label for="growing-rate4" title="Very good">4 stars</label>

                        <input type="radio" id="growing-rate3" name="rating" value="3" />
                        <label for="growing-rate3" title="Average">3 stars</label>

                        <input type="radio" id="growing-rate2" name="rating" value="2" />
                        <label for="growing-rate2" title="Not good">2 stars</label>

                        <input type="radio" id="growing-rate1" name="rating" value="1" />
                        <label for="growing-rate1" title="Terrible">1 star</label>
                    </div>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Growing & rotating star rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-growRotate">
                        <input type="radio" id="growing-rotating-rate5" name="rating" value="5" />
                        <label for="growing-rotating-rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="growing-rotating-rate4" name="rating" value="4" />
                        <label for="growing-rotating-rate4" title="Very good">4 stars</label>

                        <input type="radio" id="growing-rotating-rate3" name="rating" value="3" />
                        <label for="growing-rotating-rate3" title="Average">3 stars</label>

                        <input type="radio" id="growing-rotating-rate2" name="rating" value="2" />
                        <label for="growing-rotating-rate2" title="Not good">2 stars</label>

                        <input type="radio" id="growing-rotating-rate1" name="rating" value="1" />
                        <label for="growing-rotating-rate1" title="Terrible">1 star</label>
                    </div>
                </form>
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
                        <h4 class="card-title">Fading star rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-fade">
                        <input type="radio" id="fading-rate5" name="rating" value="5" />
                        <label for="fading-rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="fading-rate4" name="rating" value="4" />
                        <label for="fading-rate4" title="Very good">4 stars</label>

                        <input type="radio" id="fading-rate3" name="rating" value="3" />
                        <label for="fading-rate3" title="Average">3 stars</label>

                        <input type="radio" id="fading-rate2" name="rating" value="2" />
                        <label for="fading-rate2" title="Not good">2 stars</label>

                        <input type="radio" id="fading-rate1" name="rating" value="1" />
                        <label for="fading-rate1" title="Terrible">1 star</label>
                    </div>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Checkmark rating</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="starability-checkmark">
                        <input type="radio" id="checkmark-rate5" name="rating" value="5" />
                        <label for="checkmark-rate5" title="Amazing">5 stars</label>

                        <input type="radio" id="checkmark-rate4" name="rating" value="4" />
                        <label for="checkmark-rate4" title="Very good">4 stars</label>

                        <input type="radio" id="checkmark-rate3" name="rating" value="3" />
                        <label for="checkmark-rate3" title="Average">3 stars</label>

                        <input type="radio" id="checkmark-rate2" name="rating" value="2" />
                        <label for="checkmark-rate2" title="Not good">2 stars</label>

                        <input type="radio" id="checkmark-rate1" name="rating" value="1" />
                        <label for="checkmark-rate1" title="Terrible">1 star</label>
                    </div>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')

@endsection
