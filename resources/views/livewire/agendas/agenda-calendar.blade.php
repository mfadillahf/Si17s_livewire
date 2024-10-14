<div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kalender</h4>
                </div>
                <div class="card-body pt-0">
                    <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" wire:click href="{{ route('agenda') }}">Daftar Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" wire:click href="{{ route('kalender') }}">Kalender</a>
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
            </div>
        </div>
    </div>
@section('script')
@vite(['resources/js/pages/calendar.init.js'])
@endsection
</div>