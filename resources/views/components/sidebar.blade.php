<x-slot name="sidebar">
    <ul>
        <li>
            <x-nav-link :href="route('dashboard.home')" :active="request()->routeIs('dashboard.home')">
                {{ __('Home') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('dashboard.history')" :active="request()->routeIs('dashboard.history')">
                {{ __('Nossa história') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('dashboard.contato')" :active="request()->routeIs('dashboard.contato')">
                {{ __('Contato') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('dashboard.agendamentos')" :active="request()->routeIs('dashboard.agendamentos')">
                {{ __('Agendamentos') }}
            </x-nav-link>
        </li>
    </ul>
</x-slot>