import Vue from "vue";

//:skillsArray="'{{ $user->profile->birthdate->format('m-d-Y') }}'"

new Vue({
    data(){
        return{
            skills:'',
            skillsArray:[],
            requirements:'',
            requirementsArray:[]

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
        },
        addRequirement(e){
            if(e.key === ',' && this.requirements && this.requirementsArray.length<=10){
                if(!this.requirementsArray.includes(this.requirements)){
                    this.requirementsArray.push(this.requirements)
                }

                this.requirements = ''

            }
        },

    }
}).$mount(".form-container");

