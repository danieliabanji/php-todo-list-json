<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="css/styel.css">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <div class="container mt-2">
            <header class="d-flex justify-content-center">
                <h1 class="mt-5">PHP ToDoList</h1>
            </header>
            <main>
                <div class="todo-container mt-5">
                    <div class="container">
                        <ul class="list-group d-flex justify-content-center">
                            <li @click="changeDone(index)" class="list-group-item d-flex justify-content-between"
                                v-for="(todo , index )  in listTodo"
                                :id="todo.done === false ? 'todo-done-false' : ' '">{{ todo.text}} <i
                                    class="fa-solid fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="submit-container mt-5">
                    <div class="container">
                        <input class="form-control" type="text" name="newTask" v-model="newTask"
                            placeholder="Add a new Task ">
                        <button class="btn btn-success mt-5" @click="addTask">Aggiungi</button>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>