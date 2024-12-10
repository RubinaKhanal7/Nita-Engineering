<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <form method="POST" action="{{ route('admin.user.password.update') }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="current_password" class="block text-sm font-medium text-gray-700">
                Current Password
            </label>
            <div class="mt-1">
                <input 
                    id="current_password" 
                    name="current_password" 
                    type="password" 
                    required 
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm 
                    @error('current_password', 'updatePassword') border-red-500 @enderror"
                >
                @error('current_password', 'updatePassword')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
                New Password
            </label>
            <div class="mt-1">
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    required 
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm
                    @error('password', 'updatePassword') border-red-500 @enderror"
                >
                @error('password', 'updatePassword')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                Confirm New Password
            </label>
            <div class="mt-1">
                <input 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    type="password" 
                    required 
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
            </div>
        </div>

        <div class="flex items-center">
            <input 
                type="checkbox" 
                id="show_password" 
                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                onclick="togglePasswordVisibility()"
            >
            <label for="show_password" class="ml-2 block text-sm text-gray-900">
                Show Password
            </label>
        </div>

        <div>
            <button 
                type="submit" 
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Change Password
            </button>
        </div>
    </form>
</div>

<script>
function togglePasswordVisibility() {
    const passwordFields = ['current_password', 'password', 'password_confirmation'];
    
    passwordFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        field.type = field.type === 'password' ? 'text' : 'password';
    });
}
</script>
