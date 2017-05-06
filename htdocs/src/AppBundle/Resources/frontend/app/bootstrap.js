import {default as Vue} from "vue";

import {default as exceptionChart} from "./components/exception-chart";

const app = new Vue({
    el: '#app',
    template: '<exception-chart v-if="exceptions.length" :data="exceptions"></exception-chart>',
    data: {
        exceptions: []
    },
    components: {
        'exception-chart': exceptionChart
    },
    created() {
        fetch('/api/exception').then(function (response) {
            return response.json()
        }).then(function (data) {
            this.exceptions = data.exceptions
        }.bind(this));
    }
});
