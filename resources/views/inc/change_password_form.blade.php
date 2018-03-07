<div id="modal-wrapper">
    <header id="modal-header">
        <img id="modal-logo" src="/img/logo-header.png" alt="Skill Project" />
        <h2>Sign In</h2>
    </header>
    <div id="modal-content">
        <form method= "post" action="{{route('pages.change_password',Session::get('user')['uuid'])}}" class="form_details">
            {{csrf_field()}}
            <div>
                <label for="password"><?= _("NEW PASSWORD") ?></label>
                <input type="password" name="password" id="password"  required />
            </div>
            <div>
                <label for="password_confirmation"><?= _("NEW PASSWORD AGAIN") ?></label>
                <input type="password" name="password_bis" id="password_bis"  required />
            </div>
            <div class="submit-container">
                <input type="submit" value="<?= _("UPDATE") ?>" />
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
            </div>
        </form>
    </div>
</div>