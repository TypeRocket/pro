<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="//s3-us-west-2.amazonaws.com/typerocket-public/pro/pro.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('light'); ?>>
<?php wp_body_open(); ?>

<section>
    <img id="typerocket-logo" src="//s3-us-west-2.amazonaws.com/typerocket-public/pro/white-logo.svg" alt="TypeRocket Pro">
    <p><?php echo esc_html($title); ?></p>
</section>

<script>
    function toggleTheme() {
        document.body.classList.toggle("light");
        document.body.classList.toggle("dark");

        let theme = document.body.classList.contains("dark") ? "dark" : "light";

        if(theme === 'dark') {
            document.querySelector('#typerocket-logo').setAttribute('src', '//s3-us-west-2.amazonaws.com/typerocket-public/pro/logo.svg');
        } else {
            document.querySelector('#typerocket-logo').setAttribute('src', '//s3-us-west-2.amazonaws.com/typerocket-public/pro/white-logo.svg');
        }

        localStorage.setItem(
            "colorTheme",
            theme
        );
    }

    if (localStorage.getItem("colorTheme") === "dark") {
        toggleTheme();
    } else if (
        localStorage.getItem("colorTheme") !== "light" &&
        window.matchMedia &&
        window.matchMedia("(prefers-color-scheme: dark)").matches
    ) {
        toggleTheme();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>