<x-app-layout>
    @include('components.sidebar')
    @include('components.title')
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-7 lg:col-span-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 text-gray-900">
                <h2 class="mb-2 text-center text-Secundario-400 text-lg">Agendamentos por dia</h2>
                <canvas id="graficoAgendamentos"></canvas>
                <script>
                    const ctx = document.getElementById('graficoAgendamentos').getContext('2d');
                    const graficoAgendamentos = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: @json($labelsDias),
                            datasets: [{
                                label: 'Agendamentos',
                                data: @json($dataDias),
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: { beginAtZero: true }
                            }
                        }
                    });
                </script>
            </div>
        </div>
        <div class="col-span-12 md:col-span-5 lg:col-span-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 text-gray-900">
                <h2 class="mb-2 text-center text-Secundario-400 text-lg">Porte dos pets</h2>
                <canvas id="graficoPets"></canvas>

                <script>
                    const ctx2 = document.getElementById('graficoPets').getContext('2d');
                    const graficoPets = new Chart(ctx2, {
                        type: 'pie',
                        data: {
                            labels: @json($labelsPort),
                            datasets: [{
                                data: @json($dataAmount),
                                backgroundColor: ['#4CAF50', '#FF9800', '#F44336', '#9C27B0'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                        }
                    });
                </script>
            </div>
        </div>
    </div>
        
</x-app-layout>
