<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Vue</title>
    <!-- ADD VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- ADD BOOTSRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- ADD STYLE -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black">
    <!-- APP VUE -->
    <div id="app">
        <!-- CONTAINER -->
        <div class="container border-top border-start border-end border-white mt-3">
            <!-- Title -->
            <div class="text-center text-white">
                <h1>To-Do List</h1>
            </div>
            <!-- Add Task -->
            <div class="row">
                <div class="col">
                    <input v-model="newTask" @keyup.enter="addNewTask" type="text" class="form-control" placeholder="Add new Task" aria-label="Add new Task">
                </div>
                <div class="col">
                    <button @click="addNewTask" class="btn btn-primary">
                        Add-Task
                    </button>
                </div>
            </div>
            <!--START List Task -->
            <div class="row py-5">
                <div class="col">
                    <ul class="text-white" v-if="todoList.length">
                        <li v-for="(task, i) in todoList">
                            <div class="d-flex justify-content-between align-items-center m-2 p-2 border-top bg-light">
                                <div @click="checkList(i)" class="m-0 fs-5 fw-semibold text-primary">
                                    <div class="task" v-if="!task.status">
                                        {{task.name}}
                                    </div>
                                    <div class="text-danger bg-warning p-1 rounded" v-else>
                                        <del class="task ">
                                            {{task.name}}
                                        </del>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-danger my-0" @click="deleteTask(i)">
                                        Elimina
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--END Add Task -->
        </div>
    </div>
    <!-- Script JS -->
    <script src="./main.js"></script>

</body>

</html>