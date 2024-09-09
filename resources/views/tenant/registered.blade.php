@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="mb-4 text-sm">
      {{ __('Your tenant has been registered successfully!') }}
    </div>
  
    <div class="mt-4 d-flex items-center justify-between">
      <div>
        Your tenant URL:
        <a
          href="http://{{ $domain }}.localhost.com"
          class="text-sm underline"
          target="_blank"
          >http://{{ $domain }}.localhost.com</a
        >
      </div>
    </div>
  </div>
@endsection