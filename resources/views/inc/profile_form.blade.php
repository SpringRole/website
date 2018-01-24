<form method="POST" action="{{Route('pages.edit_profile', Session::get('user')['username'])}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="profile-section">
        <h3 class="first special"><?= _("PERSONAL INFORMATION"); ?></h3>
        <div class="row">
            <div>
                <label for="username"><?= _("Username") ?></label>
                <input type="text" disabled name="username" id="username" value="<?php echo Session::get('user')['username']?>" required />
            </div>
            <div class="r">
                <label for="email"><?= _("Email") ?></label>
                <input type="email" disabled name="email" id="email" value="<?php echo Session::get('user')['email'] ?>" required />
            </div>
        </div>
        <div class="row">
            <div>
                <label for="languages"><?= _("Languages-s (Comma separated please)") ?></label>
                <input type="text" name="languages" id="languages" value="" required />
            </div>
            <div class="r">
                <label for="country"><?= _("Country") ?></label>
                <input type="text" name="country" id="country" value="" required />
            </div>
        </div>
    </div>
    <div class="profile-section">
        <div>
            <label for="interests"><?= _("SKILLS OF INTEREST") ?></label>
            <input type="text" name="interests" id="interests" value=""  required/>
        </div>
    </div>
    <div class="profile-section">
        <label for="job"><?= _("SAY SOMETHING ABOUT YOURSELF"); ?></label>
        <textarea name="job" id="job" required ></textarea>
    </div>
    <div class="submit-container">
        
        <input class="pink-submit" type="submit" value="<?= _("Save") ?>" required/>
        <?php
            if (!empty($errors)):
            echo '<div class="errors">';
            foreach($errors as $name => $message){
                echo $message . "<br />";
            }
            echo '</div>';
            endif;
        ?>
    </div>

</form>
