<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function showRegistrationForm()
    {
        return view('tenant.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'domain' => 'required|string|max:255|unique:domains,domain',
        ]);
        $tenant = Tenant::create();
        $tenant->domains()->create(['domain' => $request->domain]);
        
        return redirect()->route('tenant.registered', $request->domain);
    }

    public function registered($domain)
    {
        return view('tenant.registered', compact('domain'));
    }
}
