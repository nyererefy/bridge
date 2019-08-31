<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$form = array(
    'id' => 'student_login_form'
);
?>

<div class="login-form">
    <?= form_open('start/login', $form) ?>
    <div class="top">
        <img src="<?= base_url() ?>_img/sigil.png" alt="icon" class="icon">
        <h1>VS</h1>
        <h4>"Beyond Transparency"</h4>
        <div id="loading" class="text-center" hidden>
            <span class="text-primary"><i class="fa fa-spinner fa-spin fa-4x"></i></span>
        </div>
    </div>
    <div class="form-area">
        <div class="alert alert-danger" id="error_div" hidden>
        </div>
        <div class="group">
            <input type="text" name="reg_no" class="form-control" placeholder="Registration number" required>
            <i class="fa fa-user"></i>
        </div>
        <div class="group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <i class="fa fa-key"></i>
        </div>
        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
        <span><a href="#" id="btn-bhv" class="btn-nux btn btn-link pull-right">Need help?</a></span>
    </div>
    <?= form_close() ?>
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
                    $('#error_div').removeAttr('hidden').append(error);
                }
            });
        });
    });
</script>