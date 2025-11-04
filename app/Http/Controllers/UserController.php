<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * display a listing of the users.
     */
    public function index(): View
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'));
    }

    /**
     * show the form for creating a new user
     */
    public function create(): View
    {
        return view('users.create');
    }

    // create new user
    public function store(Request $request): RedirectResponse
    {
        error_log('Store method called');
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
            ]);

            DB::table('users')->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);

        } catch (\Exception $e) {
            // throw $th;
            return error_log($e->getMessage());
        }

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * remove the specified user from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
