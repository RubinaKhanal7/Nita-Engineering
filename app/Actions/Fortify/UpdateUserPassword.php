<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        // Validate the input with more comprehensive rules
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'],
            'password' => [
                'required', 
                'string', 
                'min:8', 
                'confirmed', 
                'different:current_password'
            ],
        ], [
            'current_password.current_password' => __('The provided password does not match your current password.'),
            'password.min' => __('The password must be at least 8 characters long.'),
            'password.different' => __('The new password must be different from the current password.'),
            'password.confirmed' => __('The password confirmation does not match.'),
        ])->validateWithBag('updatePassword');

        // Update the password
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();

        // Logout the user and redirect to login
        Auth::logout();
    }
}
