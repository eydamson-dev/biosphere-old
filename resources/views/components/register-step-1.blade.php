<div>
  <label class="block mb-1 font-bold text-pink-100">Username</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-pink-500" wire:model="username">
  <span class="text-red-500">
    @error('username')
      {{$message}}
    @enderror
</span>
</div>

<div>
  <label class="block mb-1 font-bold text-pink-100">Password</label>
  <input type="password" class="w-full border-2 border-pink-100 p-3 rounded outline-none focus:border-pink-500" wire:model="password">
  <span class="text-red-500">
    @error('password')
      {{$message}}
    @enderror
</div>

<div>
  <label class="block mb-1 font-bold text-pink-100">Confirm Password</label>
  <input type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-pink-500" wire:model="password_confirmation">
  <span class="text-red-500">
    @error('password_confirmation')
      {{$message}}
    @enderror
</div>
