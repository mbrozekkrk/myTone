import Vue from "vue";

console.log("jestem");

let jobsContainer = new Vue({
    el: ".jobs-container",
    data:{
        toDoClicked: true,
        doneClicked: false
    },
    methods:{
        toDo:function(event){
            this.doneClicked= false
            this.toDoClicked= true
        },
        done:function(event){
            this.toDoClicked= false
            this.doneClicked = true
        }
    }
})