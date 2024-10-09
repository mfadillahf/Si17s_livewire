<div>

@section('content')
<div class="card-header" style="padding-bottom: 10px">
    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" wire::click href="livewire.agenda"
                role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Daftar Kegiatan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" wire::click href="livewire.agenda-calendar"
                role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Kalender</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <div class="card-body">
                <div id='calendar'></div>
                <div style='clear:both'></div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/calendar.init.js'])
@endsection
</div>