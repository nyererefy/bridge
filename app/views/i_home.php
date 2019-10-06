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
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
        possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
        repellat.</p>

    <?= form_open('home/send_data', $form) ?>
    <div class="group mt-2">
        <input
                type="checkbox"
                name="checkbox"
                value="1"
                required> I agree with <a href="">terms and conditions</a><br>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Join now!</button>
    <?= form_close() ?>
</header>
