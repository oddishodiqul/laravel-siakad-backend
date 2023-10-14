@extends('layouts.app')

@section('title', 'New User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">User</a></div>
                    <div class="breadcrumb-item">New User</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form method="POST" action="{{ route('user.update', $user) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>New User</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"
                                            name="name"
                                            value="{{ $user->name }}"
                                            class="form-control
                                            @error('name')
                                                is-invalid
                                            @enderror">
                                        @error('name')
                                            <div class="invalid-feeback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email"
                                            name="email"
                                            value="{{ $user->email }}"
                                            class="form-control
                                            @error('email')
                                                is-invalid
                                            @enderror">
                                        @error('email')
                                            <div class="invalid-feeback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text"
                                            name="phone"
                                            value="{{ $user->phone }}"
                                            class="form-control
                                            @error('phone')
                                                is-invalid
                                            @enderror">
                                        @error('phone')
                                            <div class="invalid-feeback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Address</label>
                                        <textarea
                                            class="form-control
                                                @error('address')
                                                    is-invalid
                                                @enderror"
                                            name="address"
                                            data-height="150">{{ $user->address }}</textarea>
                                        @error('address')
                                            <div class="invalid-feeback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Roles</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="admin"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'admin')
                                                        checked
                                                    @endif>
                                                    <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="dosen"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'dosen')
                                                        checked
                                                    @endif>
                                            <span class="selectgroup-button">Dosen</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="mahasiswa"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'mahasiswa')
                                                        checked
                                                    @endif>
                                                <span class="selectgroup-button">Mahasiswa</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
