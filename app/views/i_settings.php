<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    <h1 class="display-5">Have you forgotten your Nyererefy Password?</h1>
    <p class="lead">You can easily reset your account directly from this bridge!
        You need to logout from all devices and then
        click the button below</p>
    <div class="alert alert-danger" id="error_div" hidden>
    </div>
    <div class="alert alert-success" id="success_div" hidden>
    </div>
    <div class="text-center" id="loading" hidden>
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <button id="resetBtn" type="button" class="btn btn-primary mt-2">Reset my account</button>
</header>

<script>
    $('#resetBtn').click(function () {
        $.ajax({
            url: '<?=base_url()?>/settings/reset',
            method: 'POST',
            beforeSend: function () {
                $('#error_div').empty().attr("hidden", "true");
                $('#loading').removeAttr('hidden');
            },
            complete: function () {
                $("#loading").attr("hidden", "true");
            },
            success: function (response) {
                $('#success_div').removeAttr('hidden').append(response.message);
            },
            error: function (error) {
                $('#error_div').removeAttr('hidden').append(error.responseJSON.message);
            }
        });
    })
</script>
