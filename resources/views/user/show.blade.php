@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Show User {{ $user->name }}</h5>
            <form class="row g-3" method="POST" action="{{ route('user.update', $user->id) }}">
                @method('PATCH')
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Full Name</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="input13" value="{{ $user->name }}" disabled placeholder="Full Name" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input16" class="form-label">Email</label>
                    <div class="position-relative input-icon">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" id="input16" disabled placeholder="Email" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">email</i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input19" class="form-label">Is Admin ?</label>
                    <select id="input19" name="isAdmin" class="form-select" disabled>
                        <option value="0" {{ $user->isAdmin == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $user->isAdmin ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <a href="{{route('user.index')}}" class="btn btn-grd-warning px-4">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
