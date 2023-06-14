<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>


<div class="form-controller">


    <form action="<?= base_url("kamar/insert ") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Room Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input type="text" name="qty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php $this->endSection(); ?>