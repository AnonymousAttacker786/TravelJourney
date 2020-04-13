<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Sign In</h4>
            <p>It's free and always will be.</p>


            <form class="col s12" action=" <?php echo base_url() ?>Customer/validate" method="post">

                <?php if ($this->session->flashdata('err')) {
                    ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        </div>
                    </div>    
                    <?php
                }
                ?>



                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="validate" name="email_id">
                        <label>Email Id</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate" name="password">
                        <label>Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div>
            </form>
            <p><a href="forgot-pass-2.html">forgot password</a> | Are you a new user ? <a href="<?php echo base_url() ?>Customer">Register</a>
            </p>

        </div>
    </div>
</section>
