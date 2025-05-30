@extends('layouts.app')

@section('content')
    <div class="container-fluid my-md-0 my-4">
        <form action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row h-100vh">
                <div class="col-12 m-auto">
                    <div class="card rounded-12 border-0 shadow-md">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2 py-3">
                            <h3 class="m-0">{{ __('Add Customer') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <x-input label="First Name" name="name" type="text"
                                                    placeholder="Enter Name" required="true" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <x-input label="Last Name" name="last_name" type="text"
                                                    placeholder="Enter Name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <x-input label="Phone Number" name="phone" type="number"
                                            placeholder="Enter phone number" required="true"/>
                                    </div>
                                    <div class="mt-3">
                                        <x-input type="email" name="email" label="Email" placeholder="Enter Email Address" />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <x-input type="password" name="password" label="Password" placeholder="Enter Password" required="true" />
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <x-input type="password" name="password_confirmation" label="Confirm Password"
                                                placeholder="Enter Confirm Password" required="true" />
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <x-select label="Gender" name="gender">
                                            <option value="male">
                                                {{ __('Male') }}
                                            </option>
                                            <option value="female">
                                                {{ __('Female') }}
                                            </option>
                                        </x-select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-3 d-flex align-items-center justify-content-center">
                                        <div class="ratio1x1">
                                            <img id="previewProfile" src="https://placehold.co/500x500/png" alt="photo" width="100%">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <x-file name="profile_photo" label="User profile (Ratio 1:1)"
                                            preview="previewProfile" />
                                    </div>

                                    <div class="mt-3">
                                        <x-input type="date" name="date_of_birth" label="Date of Birth"
                                        placeholder="Enter Date of Birth" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a href="{{ route('admin.customer.index') }}" class="btn btn-lg btn-outline-secondary">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
