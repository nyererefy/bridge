<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$name = $this->session->{TABLE_LOGIN_FIELD_ONE} ?: $this->session->{TABLE_LOGIN_FIELD_TWO};

$form = array(
    'id' => 'send_data_form'
);
?>
<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    <h1 class="display-5"><?= $name ?>, Welcome to Nyererefy Bridge!</h1>
    <p class="lead">You are about to send your data to Nyererefy's server.</p>

    <?= form_open('home/send_data', $form) ?>
    <div class="alert alert-danger" id="error_div" hidden>
    </div>
    <div class="alert alert-success" id="success_div" hidden>
    </div>
    <div class="text-center" id="loading" hidden>
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="group mt-2">
        <input
                type="checkbox"
                name="checkbox"
                value="1"
                required> I agree with <a href="">terms and conditions</a><br>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Join Nyererefy now!</button>
    <?= form_close() ?>
</header>


<script>
    $(document).ready(function () {
        $('#send_data_form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: this.action,
                method: this.method,
                beforeSend: function () {
                    $('#error_div').empty().attr("hidden", "true");
                    $('#loading').removeAttr('hidden');
                },
                complete: function () {
                    $("#loading").attr("hidden", "true");
                },
                success: function (response) {
                    if (response.status === "success") {
                        $('#success_div').removeAttr('hidden').append(response.message);
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
