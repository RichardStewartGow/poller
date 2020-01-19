<template>
    <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>

</template>

<script>
    import axios from "axios";

    export default {
        name: "App",
        methods: {
            load: async function() {
                let response = await  axios.post('/api/data', {'monthsFromNow': 24}).then(response => response.data).catch();
                this.series = [
                    {
                        data: response.grapthData
                    }
                ]
                this.chartOptions = {
                    xaxis: {
                        categories: response.dates
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
                        categories:  [] },
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
            this.load()
        }
}
</script>

<style scoped>

</style>
