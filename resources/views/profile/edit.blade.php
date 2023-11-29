<x-app-layout>

    @section('title', 'Profil User')

    <div class="py-12">
        <div class="flex items-start justify-center gap-10 sm:px-6 lg:px-20">
            <div class="w-1/2 p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="w-1/2 h-full bg-white shadow sm:p-8 sm:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>

</x-app-layout>
