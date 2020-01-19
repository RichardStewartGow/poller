<template>
    <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>

</template>

<script>
    import axios from "axios";

    export default {
        name: "App",
        methods: {
            getData: async function() {
               let response = await axios.get('/api/data').then(response => response.data).catch();
               console.log(response);
                this.series = [
                    {
                        data: response.data
                    }
                ]
            },
            getDates: async function() {
                let response = await axios.get('/api/dateRange');
                console.log(response);
                this.chartOptions = {
                    xaxis: {
                        categories: [
                            '1/11/2000', '2/11/2000', '3/11/2000',
                            '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000',
                            '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000',
                            '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001',
                            '4/11/2001', '5/11/2001', '6/11/2001'
                        ]
                    }
                }
            }
        },
        data: function() {
            return {
                series: [{
                    name: 'Test1',
                    data: []
                }],

                chartOptions: {
                    chart: {
                        height: 350,
                        type: 'line',
                    },
                    noData: {
                        text: 'Loading...'
                    },
                    stroke: {
                        width: 7,
                        curve: 'smooth'
                    },
                    xaxis: {
                        type: 'datetime',
                        categories:  [
                            '1/11/2000', '2/11/2000', '3/11/2000',
                            '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000',
                            '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000',
                            '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001',
                            '4/11/2001', '5/11/2001', '6/11/2001'
                        ] },
                    title: {
                        text: 'Test2',
                        align: 'left',
                        style: {
                            fontSize: "16px",
                            color: '#666'
                        }
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            gradientToColors: ['#FDD835'],
                            shadeIntensity: 1,
                            type: 'horizontal',
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [0, 100, 100, 100]
                        },
                    },
                    markers: {
                        size: 4,
                        colors: ["#FFA41B"],
                        strokeColors: "#fff",
                        strokeWidth: 2,
                        hover: {
                            size: 7,
                        }
                    },
                    yaxis: {
                        min: -10,
                        max: 40,
                        title: {
                            text: 'Test3',
                        },
                    }
                }
            }
        },
        mounted: function() {
            this.getDates();
            this.getData();
        }
}
</script>

<style scoped>

</style>
