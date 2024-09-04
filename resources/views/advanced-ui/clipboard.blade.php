@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Clipboard Examples</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="input-group">
                    <input type="text" class="form-control" id="clipboardInput" value="Welcome to Rizz!" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-secondary " type="button" id="button-addon2" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy me-2"></i>Copy</button>
                    <button class="btn btn-primary " type="button" id="button-addon3" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut me-2"></i>Cut</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Paragraph Examples</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <p id="clipboardParagraph" class="border rounded p-3">Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                    a Latin professor at Hampden-Sydney College in Virginia, looked
                </p>
                <div class="mt-3">
                    <button type="button" class="btn btn-secondary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy me-2"></i>Copy</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Textarea Examples</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <textarea class="form-control" rows="3" id="clipboardTextarea">Welcome to Rizz !</textarea>
                <div class="mt-3">
                    <button type="button" class="btn btn-secondary  btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy me-2"></i>Copy</button>
                    <button type="button" class="btn btn-primary  btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut me-2"></i>Cut</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/clipboard.init.js'])
@endsections