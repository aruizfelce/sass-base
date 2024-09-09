@extends('layouts.app')

@section('content')
  <div class="container">
    <form method="POST" action="{{ route('tenant.register') }}">
      @csrf
      <div class="mt-4">
        <label class="form-label" for="domain" :value="__('Subdomain')" />
        <div class="d-flex">
          <input
            id="domain"
            class="form-control"
            type="text"
            name="domain"
            :value="old('domain')"
            required
          />
          <span class="text-gray-600 ml-2 mt-1">.localhost</span>
        </div>
      </div>
  
      <div class="mt-4 flex items-center justify-end">
        <button class="ml-4 btn btn-primary"> {{ __('Register Tenant') }} </button>
      </div>
    </form>
  </div>
@endsection