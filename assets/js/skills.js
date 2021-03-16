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
    //el: '#too-much',
    data(){
        return{
            skills:'',
            skillsArray:[],

        };
    },
    methods:{
        addSkill(e){
            if(e.key === ',' && this.skills && this.skillsArray.length<=10){
                if(!this.skillsArray.includes(this.skills)){
                    this.skillsArray.push(this.skills)
                }

                this.skills = ''

            }
        },
        removeElement: function (index) {
            this.skillsArray.splice(index, 1);
        }

    }
    //template:'<p>[[ skills ]] </p>',
    //delimiter: ['{}'],
}).$mount(".form-container");

