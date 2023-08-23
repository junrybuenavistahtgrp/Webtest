<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Call JS Function</title>
    <script>
    function hello() {
        alert('Hello World!');
    }
    </script>
</head>

<body>
    <?php echo '<script>
    hello();
    </script>'; ?>
</body>
</html>