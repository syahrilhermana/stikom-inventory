<div class="account-pages">
    <div class="account-box">
        <div class="account-logo-box">
            <h2 class="text-uppercase text-center">
                <a href="#" class="text-success">
                    <span><img src="<?php echo $config->base_url() ?>assets/images/logo_dark.png" alt="" height="18"></span>
                </a>
            </h2>

        </div>
        <div class="account-content">
            <form class="form-horizontal" action="#">

                <div class="form-group m-b-20 row">
                    <div class="col-12">
                        <label for="emailaddress">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                    </div>
                </div>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                        <label for="password">Password</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                    </div>
                </div>

                <div class="form-group row text-center m-t-10">
                    <div class="col-12">
                        <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Sign In</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>