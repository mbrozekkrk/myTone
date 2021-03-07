//import Vue from 'vue';
import App from './pages/offerts';
import { h } from 'vue'

console.log('js dziala');

const { createApp, ref, computed } = Vue;
const app = createApp({
    delimiters: ['${', '}'],
    render(h){
        return h(App);
    }

});
app.mount(".test");


