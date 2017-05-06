import {Line} from "vue-chartjs"

const colorPool = [
    '#f00',
    '#0f0',
    '#00f'
];

export default Line.extend({
    props: ['data'],
    computed: {
        chartData: function () {
            return {
                labels: this.data.map(function (exceptions) {
                    return exceptions.project
                }),
                datasets: this.data.map(function (exceptions, index) {
                    return {
                        label: exceptions.project,
                        backgroundColor: colorPool[index],
                        data: exceptions.exceptions.map(function (exception) {
                            return {
                                x: (new Date(exception.datetime)).getTime(),
                                y: 1
                            }
                        })
                    }
                })
            }
        }
    },
    mounted () {
        this.renderChart(this.chartData, {
            fill: false,
            scales: {
                xAxes: [{
                    type: 'linear',
                    position: 'bottom'
                }]
            }
        })
    }
})
