<!-- LOGIN -->
<div class="container">
            <br>
            <br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-body">
                <form action="<?= BASEURL; ?>/login/cekLogin" method="POST" >
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" class="btn btn-info btn-block" value="Login" />
                    </div>
                </form>
            </div>
            </div>
</div>