<x-app-layout>
    @include('components.sidebar')

    <div class="py-4 md:py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="w-full col-span-1 p-4 md:p-8 bg-white shadow md:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="w-full col-span-1 p-4 md:p-8 bg-white shadow md:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>

            <div class="w-full col-span-1 md:col-span-2 p-4 md:p-8 bg-white shadow md:rounded-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
