<?php if ($this->session->flashdata('success')): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success') ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('fail') ?>
            </div>
        </div>
    </div>
<?php endif; ?>
