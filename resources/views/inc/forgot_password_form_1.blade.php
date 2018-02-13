<div id="modal-wrapper">
    <header id="modal-header">
        <img id="modal-logo" src="/img/logo-header.png" alt="Skill Project" />
        <h2>Sign In</h2>
    </header>
    <div id="modal-content">
        <form method="POST" action="{{Route('forgot-password-1')}}">
            {{csrf_field()}}
            <div>
                <label for="loginUsername"><?php echo _("USERNAME OR EMAIL") ?></label>
                <input type="text" name="loginUsername" id="loginUsername" value="" required />
            </div>
            <div class="submit-container">
                <input type="submit" value="<?php echo _("SEND RECOVERY MESSAGE") ?>" />
                <div class="modal-errors">
                    <?php
                        if (!empty($error['global'])){
                            echo $error['global'] . "<br />";
                        }
                    ?>
                    <?php
                        if (!empty($errors)):
                        foreach($errors as $name => $message){
                            echo $message . "<br />";
                        }
                        endif;
                    ?>
                </div>
                <div class="modal-success">
                    <?php
                        if (!empty($success)){
                            echo $success . "<br />";
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
<p><?= _("You don't have an account yet?"); ?> <a href="{{Route("register")}}?>" class="register-link" title="<?= _("Sign up!"); ?>"><?= _("You can create one!"); ?></a></p>