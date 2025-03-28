<x-slot name="sidebar">
    <ul>
        <li>
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                {{ __('Sobre Nós') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                {{ __('Contato') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('agendamentos')" :active="request()->routeIs('agendamentos')">
                {{ __('Agendamentos') }}
            </x-nav-link>
        </li>
    </ul>
</x-slot>