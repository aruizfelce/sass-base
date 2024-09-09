<div>
    <div class="text-gray-600 mb-4 text-sm">
      {{ __('Your tenant has been registered successfully!') }}
    </div>
  
    <div class="mt-4 flex items-center justify-between">
      <div>
        Your tenant URL:
        <a
          href="http://{{ $domain }}.localhost.com"
          class="text-gray-600 hover:text-gray-900 text-sm underline"
          target="_blank"
          >http://{{ $domain }}.localhost.com</a
        >
      </div>
    </div>
  </div>