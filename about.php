<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Learn More About Our Digital Marketing Expertise</title>
<meta name="description" content="Discover who we are and our passion for digital marketing. Learn about our journey, values, and commitment to helping businesses grow online." />
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>


<main class="about-main">

  <h1>About Our Digital Marketing Agency</h1>

  <p>We are dedicated to providing innovative digital marketing solutions that help businesses grow and succeed online. Our team combines creativity, technology, and strategy to deliver measurable results.</p>

  <p>With years of experience in SEO, SEM, content creation, and social media marketing, we strive to be your trusted partner in the digital world.</p>

</main>





<section class="certificates">
    <h2>My Certificates</h2>
    <div class="certificates-gallery">
        <div class="certificate-item">
            <img src="e-marketing-certificate.webp"  alt="E-Marketing Certificate awarded for digital marketing proficiency">
        </div>
        <div class="certificate-item">
            <img src="semrush-certificate.webp" alt="SEMrush Certificate demonstrating SEO and SEM skills">
        </div>
        <div class="certificate-item">
            <img src="hubsot-certificate.webp" alt="HubSpot Certificate for inbound marketing and sales expertise">
        </div>
    </div>
</section>









<?php include 'footer.php'; ?>











<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');

    menuToggle.addEventListener('click', function () {
        navbar.classList.toggle('active');
    });
</script>

</body>
</html>