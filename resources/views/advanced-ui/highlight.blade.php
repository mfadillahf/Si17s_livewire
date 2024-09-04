@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">HTML Code</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <pre class="rounded language-html"><code class="language-html">&lt;div class=&quot;card-header&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Highlight HTML&lt;/h4&gt;
    &lt;p class=&quot;text-muted mb-0&quot;&gt;Escape code&lt;/p&gt;
&lt;/div&gt;
</code></pre>
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Css Code</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <pre class="rounded language-css"><code class="language-css">font-family : 'Be Vietnam Pro', sans-serif;
</code></pre>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Javascript Code</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="">
                    <pre class="rounded language-javascript"><code class="language-javascript">// Dropdown stop
var dropdownMenus = document.querySelectorAll('.dropdown-menu.stop');
    dropdownMenus.forEach(function(dropdownMenu) {
        dropdownMenu.addEventListener('click', function(event) {
        event.stopPropagation();
    });
});
</code></pre>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@endsection