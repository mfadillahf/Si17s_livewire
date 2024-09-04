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

@endsection

@section('script')
    @vite(['resources/js/pages/file-upload.init.js'])
@endsection
