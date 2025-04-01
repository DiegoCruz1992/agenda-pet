<header class="bg-Primario-400 text-white py-2">
    <div class="container px-4 flex items-center justify-between">
        <div class="w-[60px]">
            <img class="w-full h-full object-cover" src="{{ asset('logo.jpg') }}" alt="Logo">
        </div>
        <ul class="flex items-center gap-2">
            <li class="inline-block mx-2">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white pb-1 border-b-2 border-solid border-white' : 'text-gray-300 hover:text-white hover:duration-300 cursor-pointer' }}">Home</a>
            </li>
            <li class="inline-block mx-2">
                <a href="{{ route('historia') }}" class="{{ request()->is('historia') ? 'text-white pb-1 border-b-2 border-solid border-white' : 'text-gray-300 hover:text-white hover:duration-300 cursor-pointer' }}">Nossa história</a>
            </li>
            <li class="inline-block mx-2">
                <a href="{{ route('contato') }}" class="{{ request()->is('contato') ? 'text-white pb-1 border-b-2 border-solid border-white' : 'text-gray-300 hover:text-white hover:duration-300 cursor-pointer' }}">Contato</a>
            </li>
            <li class="inline-block mx-2">
                <a href="{{ route('agendamento') }}" class="{{ request()->is('agendar-banho') ? 'text-white pb-1 border-b-2 border-solid border-white' : 'text-gray-300 hover:text-white hover:duration-300 cursor-pointer' }}">Agendar Banho</a>
            </li>
        </ul>
    </div>
</header>