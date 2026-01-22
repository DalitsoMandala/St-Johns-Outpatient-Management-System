<div>
    {{-- resources/views/livewire/register-patient.blade.php --}}
    <x-form-ui >
        <form  wire:submit.prevent="submit" class="space-y-6">
            @csrf

            <!-- First Name -->
            <div>
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" wire:model="first_name" type="text" :value="old('first_name')" required
                    placeholder="John"
                    class="block w-full mt-1 {{ $errors->has('first_name') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" wire:model="last_name" type="text" :value="old('last_name')" required
                    placeholder="Doe"
                    class="block w-full mt-1 {{ $errors->has('last_name') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" wire:model="email" type="email" :value="old('email')" required
                    placeholder="info@gmail.com"
                    class="block w-full mt-1 {{ $errors->has('email') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Phone Number -->
            <div>
                <x-input-label for="phone" :value="__('Phone Number')" />
                <x-text-input id="phone" wire:model="phone" type="text" :value="old('phone')" required
                    placeholder="123-456-7890"
                    class="block w-full mt-1 {{ $errors->has('phone') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Gender -->
            <div>
                <x-input-label for="gender" :value="__('Gender')" />
                <x-select id="gender" wire:model="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                </x-select>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <!-- Date of Birth -->
            <div>
                <x-input-label for="dob" :value="__('Date of Birth')" />
                <x-text-input id="dob" wire:model="dob" type="date" :value="old('dob')" required
                    class="block w-full mt-1 {{ $errors->has('dob') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>

            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Address')" />
                <x-textarea id="address" wire:model="address" :value="old('address')" required placeholder="Enter address"
                    class="block w-full mt-1 {{ $errors->has('address') ? 'border-red-600' : '' }}"> </x-textarea>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- District -->
            <div>
                <x-input-label for="district" :value="__('District')" />
                <x-text-input id="district" wire:model="district" :value="old('district')" required
                    placeholder="Enter district"
                    class="block w-full mt-1 {{ $errors->has('district') ? 'border-red-600' : '' }}" />
                <x-input-error :messages="$errors->get('district')" class="mt-2" />
            </div>

            <!-- Marital Status -->
            <div>
                <x-input-label for="marital_status" :value="__('Marital Status')" />
                <x-select wire:model="marital_status" id="marital_status" required>
                    <option value=""> Select Marital Status</option>
                    <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single</option>
                    <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married</option>
                    <option value="Divorced" {{ old('marital_status') == 'Divorced' ? 'selected' : '' }}>Divorced
                    </option>
                </x-select>
                <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
            </div>

            <!-- Country -->
            <div>
                <x-input-label for="country" :value="__('Country')" />
                <x-select wire:model="country" id="country" required>
                    <option value=""></option>Select Country</option>
                    <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                    <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                    <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                    <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                </x-select>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <x-primary-button class="">
                    {{ __('Register Patient') }}
                </x-primary-button>
            </div>
        </form>
    </x-form-ui>

</div>
