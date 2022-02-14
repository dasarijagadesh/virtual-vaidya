<?php
include "includes/header.php";
?>
<section class="padding-conson">
    <div class="container-fluid mt-2 mb-2">
        <div class="row back-icon">
            <div class="col-12 d-flex pt-2">
                <a href="settings.php" class="d-flex">
                    <i class="fas fa-chevron-left"></i>
                    <p class="pl-2">Edit Profile</p>
                </a>

            </div>
            <!-- <div class="col-12">
                <p class="help-isssue">General Queries</p>

            </div> -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="index.html" method="post" class="settings-e">
                    <h4 class="edit-name"> Edit Profile </h4>

                    <fieldset class="files-edit">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="user_name" class="input-editf">

                        <label for="email">Email:</label>
                        <input type="email" id="mail" name="user_email" class="input-editf">
                        <label for="email">Phone Number:</label>
                        <input type="number" id="mail" name="user_email" class="input-editf">

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="user_password" class="input-editf">

                        <label>Age:</label>
                        <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13"
                            class="light">Under 18</label><br>
                        <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13"
                            class="light">Over 18</label>

                    </fieldset>
                    <fieldset class="files-edit">

                        <!-- <legend><span class="number">2</span> Your Profile</legend> -->

                        <label for="bio">Bio:</label>
                        <textarea id="bio" name="user_bio" class="input-editf"></textarea>



                        <label for="job">Job Role:</label>
                        <select id="job" name="user_job" class="select-file input-editf">
                            <optgroup label="Web">
                                <option value="frontend_developer">Front-End Developer</option>
                                <option value="php_developer">PHP Developer</option>
                                <option value="python_developer">Python Developer</option>
                                <option value="rails_developer">Rails Developer</option>
                                <option value="web_designer">Web Designer</option>
                                <option value="wordpress_developer">Wordpress Developer</option>
                            </optgroup>
                            <optgroup label="Mobile">
                                <option value="android_developer">Android Developer</option>
                                <option value="ios_developer">IOS Developer</option>
                                <option value="mobile_designer">Mobile Designer</option>
                            </optgroup>
                            <optgroup label="Business">
                                <option value="business_owner">Business Owner</option>
                                <option value="freelancer">Freelancer</option>
                            </optgroup>
                        </select>
                    </fieldset>
                    <button class="button-continue" type="submit">Change</button>

                </form>
            </div>
        </div>
    </div>

</section>
<?php
include "includes/footer.php";
?>