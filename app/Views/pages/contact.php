<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<body>
    <div class="container">
        <h1>Contact Us</h1>

        <form method="post" action="<?php echo base_url('contact/send'); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" required></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Send Message">
            </div>
        </form>
    </div>
</body>
</html>
<?php $this->endSection(); ?>
