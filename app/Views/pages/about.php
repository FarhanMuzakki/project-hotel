<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>


<div class="container about-us">

    <h1 class="about">About Us</h1>

    <h2>Welcome to Our Hotel Company</h2>
    <p>Riverside Hotel, we offer a serene and picturesque getaway nestled along the beautiful riverside. Our hotel is designed to provide a relaxing and memorable experience for our guests, surrounded by the soothing sounds of flowing water and breathtaking views.</p>
    <p>Our commitment to exceptional hospitality ensures that every moment of your stay is filled with comfort and satisfaction. Our dedicated team of staff is here to cater to your every need, ensuring a seamless and delightful experience from check-in to check-out.</p>
    <p>Indulge in our luxurious accommodations, thoughtfully designed to offer a tranquil escape from the hustle and bustle of everyday life. Whether you choose a spacious suite or a cozy room, each space is tastefully furnished and equipped with modern amenities to enhance your stay.</p>
    <div class="vision-mission">
        <h2>Our Vision</h2>
        <p>To be the premier riverside hotel destination, providing exceptional hospitality and creating unforgettable experiences for our guests.</p>

        <h2>Our Mission</h2>
        <p>1. We are committed to providing the highest level of personalized service, ensuring that every guest feels valued and well taken care of throughout their stay.</p>
        <p>2. We aim to create a peaceful and serene environment where guests can escape the stresses of daily life and indulge in relaxation, surrounded by the beauty of the riverside.</p>
        <p>3. We strive to minimize our environmental impact and promote sustainable practices throughout our operations. We are dedicated to preserving the natural beauty of the riverside and contributing to the well-being of our local community.</p>
        <p>4. We value our guests and seek to build long-lasting relationships based on trust, respect, and loyalty. We aim to be the hotel of choice for our guests, ensuring they return to us time and again.</p>
    </div>

    <div class="contact-info">
        <h2>Contact Us</h2>
        <p>If you have any inquiries, feel free to reach out to us:</p>
        <ul>
            <li>Email: riverside@ymail.com</li>
            <li>Phone: +123456789</li>
            <li>Address: 31 St Thomas Street,
                London SE1 9QU,
                United Kingdom</li>
        </ul>
    </div>

    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Thomas St uk&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            <style>
                .mapouter {

                    margin: 1rem;
                    position: relative;
                    text-align: right;
                    height: 100%;
                    width: 100%;
                    padding: 40px 40px 0px 0px;
                    /* border: 2px solid #d7a449; */
                }
            </style>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 100%;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>