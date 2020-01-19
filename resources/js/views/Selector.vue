<template>
    <div>
        <button v-on:click="emitSelected">test</button>
        <select name="monthsFromNow" id="monthsFromNow" @change="currentValueMonths = $event.target.value" v-model="currentParams.monthsFromNow">
            <option v-for="item in sortOptions" :value="item.value">{{item.text}}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "Selector",
        methods: {
           emitSelected: function () {
               this.$emit('updateFromSelector', this.currentParams)
           }
        },
        watch: {
            currentValueMonths(selected) {
                this.currentParams.monthsFromNow = selected
            }
        },
        data : function () {
            return {
                currentParams: {
                    monthsFromNow: '',
                },
                sortType: 'sort',
                sortOptions: [
                    { text: '2', value: '2' },
                    { text: '3', value: '3' },
                    { text: '4', value: '4' },
                    { text: '6', value: '6' },
                    { text: '12', value: '12' },
                    { text: '24', value: '24' }

                ]
            }
        }
    }
</script>

<style scoped>

</style>
