const { createApp } = Vue;

createApp({
    data() {
        return {
            listTodo: [],
            newTask: "",
        };
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.listTodo = resp.data;
            console.log(this.listTodo);
        });
    },
    methods: {
        changeDone(index) {
            this.listTodo[index].done = !this.listTodo[index].done;
        },
        addTask() {
            const data = {
                newTask: this.newTask,
            };
            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((resp) => {
                    this.listTodo = resp.data;
                    this.newTask = "";
                });
        },
        removeTask(todo) {
            this.listTodo = this.listTodo.filter((t) => t !== todo)
        },
    },
}).mount("#app");