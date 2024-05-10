<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-image: url('images/Prosperous_fantasy_kingdom_landscape.png'); background-size: cover; background-position: 0px -100px;">
            <form class="d-flex flex-column bg-white bg-opacity-10 p-4">
                <h2>Signup</h2>
                <input name="email" type="email" placeholder="E-Mail" class="form-control mb-2">
                <input name="pwd" type="password" placeholder="Password" class="form-control mb-2">
                <input name="confirmPwd" type="password" placeholder="Confirm Password" class="form-control mb-2">


                <div class="input-group">
                    <label class="input-group-text">As</label>
                    <select class="form-select">
                      <option selected>Choose...</option>
                      <option value="student">Student</option>
                      <option value="teacher">Teacher</option>
                      <option value="admin">Admin</option>
                    </select>
                </div>

                <a href="login.php" class="align-self-end mb-2">I already have an account</a>
                <button type="submit" class="btn btn-primary align-self-start">Signup</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>