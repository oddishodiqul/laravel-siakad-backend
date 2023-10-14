@extends('layouts.app')

@section('title', 'Schedules')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Posts</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">All Schedules</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Schedules</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <div class="section-header-button">
                                        <a href="{{ route('schedule.create') }}"
                                            class="btn btn-primary">New Schedule</a>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <form method="GET" action="{{ route('schedule.index') }}">
                                        <div class="input-group">
                                            <input type="text"
                                                name="name"
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Room</th>
                                            <th>Attendance Code</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($schedules as $schedule)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $schedule->subject->title }}
                                            </td>
                                            <td>
                                                {{ $schedule->day }}
                                            </td>
                                            <td>
                                                {{ $schedule->start_time }}
                                            </td>
                                            <td>
                                                {{ $schedule->end_time }}
                                            </td>
                                            <td>
                                                {{ $schedule->room }}
                                            </td>
                                            <td>
                                                <a href="{{ route('generate-qrcode', $schedule->id) }}"
                                                    class="btn btn-primary btn-sm" type="button">Generate QRCode</a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-info btn-icon">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <form class="ml-2" method="POST" action="{{ route('schedule.destroy', $schedule->id) }}">
                                                        <input type="hidden" name="_method" value="DELETE" />
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <button class="btn btn-sm btn-danger btn-icon">
                                                            <i class="fas fa-times"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $schedules->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
