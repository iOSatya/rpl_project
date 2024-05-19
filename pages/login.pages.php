        <div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-image: url('images/Prosperous_fantasy_kingdom_landscape.png'); background-size: cover; background-position: 0px -100px;">
            <form action="includes/login.inc.php" method="post" class="d-flex flex-column bg-white bg-opacity-10 p-4">
                <h2>Login</h2>
                <input name="email" type="text" placeholder="E-Mail" class="form-control mb-2">
                <input name="pwd" type="password" placeholder="Password" class="form-control mb-2">
                <a href="signup.php" class="align-self-end mb-2">I don't have an account</a>
                <?php if (isset($_SESSION["loginMessage"])) { echo $_SESSION["loginMessage"]; } unset($_SESSION["loginMessage"]) ?>
                <button type="submit" class="btn btn-primary align-self-start">Login</button>
            </form>
        </div>