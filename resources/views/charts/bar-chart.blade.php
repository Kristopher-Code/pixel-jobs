<x-layout>


    <div style="width: 80%; margin: auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</x-layout>
