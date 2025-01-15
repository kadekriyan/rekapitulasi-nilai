<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="<?= base_url('assets/style/dashboard.css'); ?>">
        <title>Dashboard</title>
    </head>
</head>

<body>

    <?php $this->load->view('dosen/sidebar'); ?>
    <?php $this->load->view('dosen/header'); ?>

    <div class="content" style="padding-top: 100px;">
        <h2>Responsive Sidebar Example</h2>
        <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px
            or less.</p>
        <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center
            the navigation links.</p>
        <h3>Resize the browser window to see the effect.</h3>
    </div>

</body>

</html>