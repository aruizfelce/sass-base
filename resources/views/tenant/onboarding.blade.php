<div>
    <form method="POST" action="{{ route('tenant.onboarding.store') }}">
      @csrf
  
      <div>
        <label for="name" :value="__('Name')" />
        <input
          id="name"
          class="mt-1 block w-full"
          type="text"
          name="name"
          :value="old('name')"
          required
          autofocus
          autocomplete="name"
        />
      </div>
  
      <div class="mt-4">
        <label for="email" :value="__('Email')" />
        <input
          id="email"
          class="mt-1 block w-full"
          type="email"
          name="email"
          :value="old('email')"
          required
          autocomplete="username"
        />
      </div>
  
      <div class="mt-4">
        <label for="password" :value="__('Password')" />
        <input
          id="password"
          class="mt-1 block w-full"
          type="password"
          name="password"
          required
          autocomplete="new-password"
        />
      </div>
  
      <div class="mt-4">
        <label for="password_confirmation" :value="__('Confirm Password')" />
        <input
          id="password_confirmation"
          class="mt-1 block w-full"
          type="password"
          name="password_confirmation"
          required
          autocomplete="new-password"
        />
      </div>
  
      <div class="mt-4 flex items-center justify-end">
        <button class="ml-4"> {{ __('Complete Setup') }} </button>
      </div>
    </form>
  </div>