<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>


<div class="list-kamar">




    <a href="<?= base_url('kamar/add') ?>">
        Tambah
    </a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Room Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kamar as $k) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <img width="50" height="50" src="/img/<?= $k['image'] ?>" alt="<?= $k['image'] ?>"> </td>
                    <td> <?= $k['name'] ?> </td>
                    <td> <?= $k['qty'] ?> </td>
                    <td> <?= $k['price'] ?> </td>

                    <td> <a href="">Edit</a> | Delete</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php $this->endSection(); ?>