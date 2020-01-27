<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/typerocket-public/galaxy/galaxy.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<section>
    <img src="https://s3-us-west-2.amazonaws.com/typerocket-public/galaxy/typerocket-logo.svg" alt="TypeRocket Galaxy">
    <p><?php echo esc_html($title); ?></p>
</section>

<?php wp_footer(); ?>
</body>
</html>