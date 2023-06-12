<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
</head>
<body class="bg-dark">
    <div class="container text-white py-5">
        <div class="row justify-content-center">
            <div id="app" class="col-8 d-flex flex-column gap-3">
                <h1>Top Games</h1>
                <table class="table table-Success text-white">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Metacritic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="game in games">
                            <th scope="row">{{ game.name }}</th>
                            <td>{{ game.released }}</td>
                            <td>{{ game.metacritic }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="./main.js"></script>
</body>
</html>