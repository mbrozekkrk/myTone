import Vue from "vue";

console.log('register.js dziala')

/*export default {
    data(){
        return{
            skills:'love'
        }
    }
}
*/
new Vue({
    //el: '#form_addedSkills',
    data(){
        return{
            skills:''
        };
    },
    //template:'<p>[[ skills ]] </p>',
    //delimiter: ['{}'],
}).$mount(".register-container");

