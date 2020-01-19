<template>
    <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>

</template>

<script>
    import axios from "axios";

    export default {
        name: "App",
        methods: {
            getDates: function() {
                axios.get('/api/data')
            },
            getData: function() {
                axios.get('/api/dateRange')
            }
        },
        data: function() {
            return {
                series: [{
                    name: 'Test1',
                    data: this.getData()
                }],
                chartOptions: {
                    chart: {
                        height: 350,
                        type: 'line',
                    },
                    stroke: {
                        width: 7,
                        curve: 'smooth'
                    },
                    xaxis: {
                        type: 'datetime',
                        categories:  this.getDates() },
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
        }
}
</script>

<style scoped>

</style>
