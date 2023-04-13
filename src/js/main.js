const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            newTodo: '',
        }
    },
    methods: {
        //axios call for getting array
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
            })
        },
        //function for adding item 
        addTodo() {
            const data = {
                add: true,
                newTodo: this.newTodo
            };
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then((response) => {
                    this.todoList = response.data;
                })
        },
        removeTodo() {
            const data = {
                delete: i
            };
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then((response) => {
                    this.todoList = response.data;
                })
        }
    },
    created() {
        this.getTodoList();
    }
}
).mount('#app');

