<!DOCTYPE html>

<html>

<head>
    <title>Todo List</title>

    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

</head>

<body>

<div id="container">

    <!-- Form -->
    <div>
        <form method="post" action="#">

            <input type="text" name="todo" id="todo" placeholder="Cosa hai da fare oggi?">

        </form>
    </div>

    <!-- List -->
    <div>

        <ul id="todo-list">

            <li>

                <div>
                    <span></span>
                </div>

                <p>Comprare il latte</p>

                <div class="importance low">!</div>

                <a href="#">x</a>
            </li>

            <li>

                <div>
                    <span></span>
                </div>

                <p>Andare dal veterinario per il cane</p>

                <div class="importance middle">!!</div>

                <a href="#">x</a>
            </li>

            <li class="done">

                <div>
                    <span></span>
                </div>

                <p>Incontrare Maria</p>

                <div class="importance high">!!!</div>

                <a href="#">x</a>
            </li>

            <li>

                <div>
                    <span></span>
                </div>

                <p>Chiamare Roberto</p>

                <div class="importance middle">!!</div>

                <a href="#">x</a>
            </li>

            <li>

                <div>
                    <span></span>
                </div>

                <p>Portare fuori la spazzatura</p>

                <div class="importance high">!!!</div>

                <a href="#">x</a>
            </li>

        </ul>

    </div>

</div>

</body>

</html>