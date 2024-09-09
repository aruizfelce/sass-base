<div class="container">
    <form method="POST" action="{{ route('tenant.register') }}">
      @csrf
      <div class="mt-4">
        <label for="domain" :value="__('Subdomain')" />
        <div class="flex">
          <input
            id="domain"
            class="mt-1 block w-full"
            type="text"
            name="domain"
            :value="old('domain')"
            required
          />
          <span class="text-gray-600 ml-2 mt-1">.localhost.com</span>
        </div>
      </div>
  
      <div class="mt-4 flex items-center justify-end">
        <button class="ml-4"> {{ __('Register Tenant') }} </button>
      </div>
    </form>
  </div>