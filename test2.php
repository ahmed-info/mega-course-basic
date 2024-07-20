<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="d-flex">
                <div class="box bg-info border border-top mt-5" style="width: 150px; height: 100px;">welcome</div>
                <div class="d-flex">
                    <div class="box bg-info border border-top mt-5" style="width: 150px; height: 100px;">welcome</div>
                </div>
            </div>

            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <label for="username">username</label>
            <input type="text" id="username" class="form-control input-invalid">


            <!-- <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div> -->

            <!-- <div class="card" style="width: 18rem;">

                <img src="backgound_test.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>about</th>
                        <th>home</th>
                        <th>user</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>qwerty</td>
                        <td>avcd</td>
                        <td>xyz</td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>