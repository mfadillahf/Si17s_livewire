@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Trigger Modal And Trigger Toast</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-primary btn-sm" data-swal-template="#my-template"
                            id="TriggerModalToast">Trigger modal
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-swal-toast-template="#my-template"
                            id="TriggerModalToast">Trigger toast
                    </button>
                    <template id="my-template">
                        <swal-title>
                            Save changes to "Untitled 1" before closing?
                        </swal-title>
                        <swal-icon type="warning" color="red"></swal-icon>
                        <swal-button type="confirm">
                            Save As
                        </swal-button>
                        <swal-button type="cancel">
                            Cancel
                        </swal-button>
                        <swal-button type="deny">
                            Close without Saving
                        </swal-button>
                        <swal-param name="allowEscapeKey" value="false"/>
                        <swal-param name="customClass" value='{ "popup": "my-popup" }'/>
                    </template>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Icons</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-success btn-sm" id="success">Success
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" id="error">Error</button>
                    <button type="button" class="btn btn-warning btn-sm" id="warning">Warning
                    </button>
                    <button type="button" class="btn btn-info btn-sm" id="info">Info</button>
                    <button type="button" class="btn btn-secondary btn-sm" id="question">
                        Question
                    </button>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Examples</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>A basic
                                    message
                                </td>
                                <td class="border-0">
                                    <button class="btn btn-primary btn-sm" id="basicMessage">
                                        Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>A title
                                    with a text under
                                </td>
                                <td class="border-0">
                                    <button class="btn btn-primary btn-sm" id="titleText">
                                        Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>A modal
                                    with a title, an error icon, a text, and a footer
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="errorType">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-dark"></i>Custom HTML
                                    description and buttons with ARIA labels
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="customHtml">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>A dialog with
                                    three buttons
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="threeButtons">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>A custom
                                    positioned dialog
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="customPosition">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-primary"></i>Custom
                                    animation with Animation
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="customAnimation">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-secondary"></i>A confirm
                                    dialog, with a function attached to the "Confirm"-button...
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="warningConfirm">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-danger"></i>... and by
                                    passing a parameter, you can execute something else for "Cancel".
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="handleDismiss">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-purple"></i>A message
                                    with a custom image
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="customImage">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>A message
                                    with custom width, padding, background and animated Nyan Cat
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="customWidth">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>A message
                                    with auto close timer
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="timer">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>Right-to-left
                                    support for Arabic, Persian, Hebrew, and other RTL languages
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="rtl">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>AJAX request
                                    example
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="ajaxRequest">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Mixin
                                    example
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="mixin">Click me
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Declarative
                                    template example
                                </td>
                                <td class="border-0">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            id="declarativeTemplate">Click me
                                    </button>
                                </td>
                                <template id="my-template">
                                    <swal-title>
                                        Save changes to "Untitled 1" before closing?
                                    </swal-title>
                                    <swal-icon type="warning" color="red"></swal-icon>
                                    <swal-button type="confirm">
                                        Save As
                                    </swal-button>
                                    <swal-button type="cancel">
                                        Cancel
                                    </swal-button>
                                    <swal-button type="deny">
                                        Close without Saving
                                    </swal-button>
                                    <swal-param name="allowEscapeKey" value="false"/>
                                    <swal-param name="customClass" value='{ "popup": "my-popup" }'/>
                                </template>
                            </tr>
                            </tbody>
                        </table>
                    </div><!--table responsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->

@endsection

@section('script')

@endsection
