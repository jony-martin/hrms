@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('employees.index') }}" class="btn add-btn">
            <i class="fa fa-list"></i>
            All Employees
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Update Employee</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="first_name"
                                    placeholder="Enter your first name" required="" name="first_name"
                                    value="{{ $employee->first_name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name"
                                    required="" name="last_name" value="{{ $employee->last_name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required="" name="email" value="{{ $employee->email }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter your phone"
                                    required="" name="phone" value="{{ $employee->phone }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password"
                                    min="8" name="password">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="profile">Profile <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" accept="image/*" name="profile"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ imageShow($employee->image) }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Employee</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-info" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
