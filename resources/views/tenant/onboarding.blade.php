@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Register') . ' ' . tenant('domains')[0]->domain  }}</div>
              <div class="card-body p-4">
                <form method="POST" action="{{ route('tenant.onboarding.store') }}">
                  @csrf
              
                  <div>
                    <label class="form-label" for="name">Name</label>
                    <input
                      id="name"
                      class="form-control"
                      type="text"
                      name="name"
                      :value="old('name')"
                      required
                      autofocus
                      autocomplete="name"
                    />
                  </div>
              
                  <div class="mt-4">
                    <label class="form-label" for="email">Email</label>
                    <input
                      id="email"
                      class="form-control"
                      type="email"
                      name="email"
                      :value="old('email')"
                      required
                      autocomplete="username"
                    />
                  </div>
              
                  <div class="mt-4">
                    <label class="form-label" for="password">Password</label>
                    <input
                      id="password"
                      class="form-control"
                      type="password"
                      name="password"
                      required
                      autocomplete="new-password"
                    />
                  </div>
              
                  <div class="mt-4">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input
                      id="password_confirmation"
                      class="form-control"
                      type="password"
                      name="password_confirmation"
                      required
                      autocomplete="new-password"
                    />
                  </div>
              
                  <div class="mt-4 d-flex items-center justify-end">
                    <button class="ml-4 btn btn-primary"> Registrar </button>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection