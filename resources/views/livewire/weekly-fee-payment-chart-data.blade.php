<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
 
    <script> 
    document.addEventListener('livewire:load', function () {

    let currency = @this.currency
    let monday_paid_receipts = @this.monday_paid_receipts
    let tuesday_paid_receipts = @this.tuesday_paid_receipts
    let wednesday_paid_receipts = @this.wednesday_paid_receipts
    let thursday_paid_receipts = @this.thursday_paid_receipts
    let friday_paid_receipts = @this.friday_paid_receipts
    let monday_pending_receipts = @this.monday_pending_receipts
    let tuesday_pending_receipts = @this.tuesday_pending_receipts
    let wednesday_pending_receipts = @this.wednesday_pending_receipts
    let thursday_pending_receipts = @this.thursday_pending_receipts
    let friday_pending_receipts = @this.friday_pending_receipts

   console.log('tuesday_paid_receipts'+friday_pending_receipts)

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
                data: [monday_paid_receipts, tuesday_paid_receipts, wednesday_paid_receipts, thursday_paid_receipts, friday_paid_receipts]
            }, {
                name: 'Pending',
                data: [monday_pending_receipts, tuesday_pending_receipts, wednesday_pending_receipts, thursday_pending_receipts, friday_pending_receipts]
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
