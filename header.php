<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بهداد - پوسته وردپرس</title>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <?php wp_head(); ?>
</head>

<body>

    <?php
    // Main Header
    get_template_part("/templates/wp-behdad-header");

    // Show Case
    get_template_part("/templates/wp-behdad-showcase");

    // Slider
    get_template_part("/templates/wp-behdad-slider");
