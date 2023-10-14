@extends('layouts.app')

@section('title', 'Presence Subject')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Presence Subject</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Presence</a></div>
                    <div class="breadcrumb-item">Show QRCode</div>
                </div>
            </div>

            <div class="section-body">
                <div class="visible-print text-center">
                    {!! QrCode::size(200)->generate($code) !!}
                    <p>Scan me to presence.</p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
