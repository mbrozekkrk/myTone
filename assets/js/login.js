import Vue from 'vue';

console.log('js dziala');

var app = new Vue({
    el: '.vue-test',
    data(){
        return{
            name:'test vue'
        };
    },
    template:'<h1>{{ name }}</h1>'
})
export default {
    name:'test',
    data(){
        return{
            legend:'hahahahah'
        };
    },
}
//window.app = app;