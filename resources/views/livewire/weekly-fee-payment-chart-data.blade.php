<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
 
    <script> 
    document.addEventListener('livewire:load', function () {

   let currency = @this.currency

   console.log(currency)

   let year="The year is outputting "+1 


var options = {
            chart: {
                height: 350,
                type: 'bar',
            },
            colors: ['#6435c9', '#f66d9b'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'	
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Paid',
                data: [44, 55, 57, 56, 61]
            }, {
                name: 'Pending',
                data: [76, 85, 101, 98, 87]
            }],
            xaxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            },        
            fill: {
                opacity: 1
    
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return currency +" " + val
                    }
                }
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#weekly-fee-payment-analysis"),
            options
        );
    
        chart.render();
    })
    </script> 

</div>
