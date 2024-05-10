        <div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-image: url('../pages/images/Prosperous_fantasy_kingdom_landscape.png'); background-size: cover; background-position: 0px -100px;">
            <form action="includes/signup.inc.php" method="post" class="d-flex flex-column bg-white bg-opacity-10 p-4">
                <h2>Signup</h2>
                <input name="email" type="text" placeholder="E-Mail" class="form-control mb-2">
                <input name="pwd" type="password" placeholder="Password" class="form-control mb-2">
                <input name="confirmPwd" type="password" placeholder="Confirm Password" class="form-control mb-2">


                <div class="input-group mb-2">
                    <label class="input-group-text">As</label>
                    <select name="playerStatus" class="form-select">
                      <option value="student">Student</option>
                      <option value="teacher">Teacher</option>
                      <option value="admin">Admin</option>
                    </select>
                </div>

                <a href="login.php" class="align-self-end mb-2">I already have an account</a>
                <button type="submit" class="btn btn-primary align-self-start">Signup</button>
            </form>
        </div>