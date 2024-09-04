@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

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