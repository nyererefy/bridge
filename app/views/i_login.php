<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$form = array(
    'id' => 'student_login_form'
);
?>
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
    <header class="jumbotron my-4">
        <div class="login-form ">
            <?= form_open('login/submit', $form) ?>
            <div class="top">
                <h4><?= INSTITUTION_ABBREVIATION_NAME . '-' . 'Nyererefy Bridge' ?></h4>
                <div class="text-center" id="loading" hidden>
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="form-area">
                <div class="alert alert-danger" id="error_div" hidden>
                </div>
                <div class="group mt-2">
                    <input type="text"
                           name="login"
                           class="form-control"
                           placeholder="Enter <?= LOGIN_HINT ?>"
                           required>
                    <i class="fa fa-user"></i>
                </div>
                <div class="group mt-2">
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Enter Password"
                           required>
                    <i class="fa fa-key"></i>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-2">LOGIN</button>
                <span><a href="#" id="btn-bhv" class="btn-nux btn btn-link pull-right">Need help?</a></span>
            </div>
            <?= form_close() ?>
        </div>
    </header>
</div>

<script>
    $(document).ready(function () {
        $('#student_login_form').submit(function (e) {
            e.preventDefault();

            var data = $("#student_login_form").serialize();

            $.ajax({
                url: this.action,
                method: this.method,
                data: data,
                dataType: 'json',
                beforeSend: function () {
                    $('#error_div').empty().attr("hidden", "true");
                    $('#loading').removeAttr('hidden');
                },
                complete: function () {
                    $("#loading").attr("hidden", "true");
                },
                success: function (response) {
                    if (response.status === "success") {
                        window.location.replace('<?=base_url()?>');
                    } else {
                        $('#error_div').removeAttr('hidden').append(response.message);
                    }
                },
                error: function (error) {
                    $('#error_div').removeAttr('hidden').append(error.responseText);
                }
            });
        });
    });
</script>