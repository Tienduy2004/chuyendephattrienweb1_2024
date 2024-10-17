<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section class="testimonial-section">
        <div class="background-image"></div>
        <h2>Testimonial</h2>
        <div class="underline"></div>
        <div class="testimonial-content">
            <p id="testimonial-text" class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda
                a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam
                perferendis aliquid vitae saepe.</p>
        </div>
        <div class="profile-images">
            <img src="image/3064/testimonial-client-01-1.jpg"
                alt="Profile 1" class="profile-image active">
            <img src="image/3064/testimonial-client-02-1.jpg"
                alt="Profile 2" class="profile-image">
            <img src="image/3064/testimonial-client-03-1.jpg"
                alt="Profile 3" class="profile-image">
        </div>
        <p class="author" id="author-name">Michelle Walsh, Company</p>
        <div class="dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </section>
    <script src="js/3064.js"></script>
