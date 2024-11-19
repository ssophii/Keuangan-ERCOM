<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $request->user();
        $anggota = Anggota::where('user_id', $user->id)->first();
        return view('profile.edit', compact('user', 'anggota'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'bidang' => 'required|string|max:255',
        'no_hp' => 'required|string|max:15',
    ]);

    Anggota::updateOrCreate(
        ['user_id' => auth::id()], // Cek berdasarkan user_id
        [
            'bidang' => $validated['bidang'],
            'no_hp' => $validated['no_hp'],
        ]
    );

    return back()->with('success', 'Data berhasil disimpan.');
}
}