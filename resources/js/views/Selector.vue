<template>
    <div>
        <button v-on:click="emitSelected">test</button>
        <select name="sortBy" id="sortBy" @change="emitSelected(sortType)" v-model="sortType">
            <option v-for="item in sortOptions" :value="item.value">{{item.text}}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "Selector",
        methods: {
            emitSelected: function () {

            }
        },
        data : function () {
            return {
                sortType: 'sort',
                sortOptions: [
                    { text: 'aaa', value: 'aaa' },
                    { text: 'bbb', value: 'bbb' },
                    { text: 'ccc', value: 'ccc' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
