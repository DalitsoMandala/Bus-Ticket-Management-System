<div x-data="{ chartdata: @entangle('chartdata') }" x-init="() => {

            var studentGender = document.getElementById('myChart');
            var chartdata = @this.chartdata;

            let x = ['Male', 'Female']
            let y = [chartdata.maleStudents, chartdata.femaleStudents];

             chart = new Chart($refs.chart, {
                type: 'doughnut',
                data: {
                    labels: x,
                    datasets: [{
                        label: 'Github Stars',
                        data: y,
                        backgroundColor: [
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                    }]
                },

            });

    console.log(chartdata);
}">

    <canvas style="height: 200px" x-ref="chart"></canvas>

</div>
