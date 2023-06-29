//ISTANZIO L' APP VUE
const { createApp } = Vue;

createApp({
    //DATA
    data() {
        return {
            apiUrl: "api.php",
            todoList: [],
            todoCheckList:[],
            newTask: ""
        }
    },
    //MOUNTED
    mounted() {
        this.getDati();
    },
    //METHODS
    methods: {
        getDati() {
            //Faccio una chiamata ad un API specificata nel data
            axios.get(this.apiUrl).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.todoList = response.data;
            })
            .catch(error => {
                console.error('Error: ' + error);
            })
        },
        sendData(data) {
            //Faccio una chiamata POST ad apiUrl, passando il data
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then((response) => {
                this.todoList = response.data;
            })
            .catch(error => {
                console.error(error);
            })
        },
        addNewTask() {
            const data = { newTask: this.newTask };

            this.sendData(data);
            this.newTask = "";
        },
        checkList(i) {
            const data = { checkList: i };
            
            this.sendData(data);
        },
        deleteTask(i) {
            console.log(i);
            const data = { deleteTask: i };
    
            this.sendData(data);
        },
    }
//MOUNT APP
}).mount("#app");