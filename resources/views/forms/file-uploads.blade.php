@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Custom File Upload</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="d-grid">
                        <p class="text-muted">Upload your blog image here, Please click "Upload Image" Button.</p>
                        <div
                            class="preview-box d-block justify-content-center rounded  border-dashed border-theme-color overflow-hidden p-3"></div>
                        <input type="file" id="input-file" name="input-file" accept="image/*"
                               hidden/>
                        <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload Image</label>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                Upload Image
            </button>
        </div> <!--end col-->
    </div><!--end row-->

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Custom File Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-grid">
                        <p class="text-muted">Upload your blog image here, Please click "Upload Image" Button.</p>
                        <div class="preview-box d-block justify-content-center rounded border-dashed border-theme-color overflow-hidden p-3"></div>
                        <input type="file" id="input-file" name="input-file" accept="image/*" hidden/>
                        <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload Image</label>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end modal-->

@endsection

@section('script')
    @vite(['resources/js/pages/file-upload.init.js'])
@endsection
