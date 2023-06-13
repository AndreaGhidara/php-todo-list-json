<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Vue</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div id="app">
        <div class="container">

            <h1>To-Do List</h1>

            <div class="row">
                <div class="col">
                    <input v-model="newTask" type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <button @click="addNewTask" class="btn btn-primary">
                        Add-Task
                    </button>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    
                    <ul class="text-white" v-if="todoList.length">
                        <div>
                            <li v-for="(task, i) in todoList">
                                <div class="w-50 d-flex justify-content-between p-2 border-top">
                                    <p @click="checkList(i)" class="m-0">
                                        <span v-if="!task.status">
                                            {{task.name}}
                                        </span>
                                        <span class="text-warning" v-else>
                                            <del>
                                                {{task.name}}
                                            </del>
                                        </span>
                                    </p>
                                    <div>
                                        <button class="btn btn-danger my-0" @click="deleteTask(i)">
                                            Elimina
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>

</body>

</html>