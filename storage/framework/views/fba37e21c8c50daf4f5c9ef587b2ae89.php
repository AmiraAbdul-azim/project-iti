<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Contact Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* direction: rtl;  <-- احذف هذا السطر */
            margin: 20px;
            background-color: #f7f7f7;
        }
        .container {
            background-color: white;
            padding: 20px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        input, button {
            font-size: 1em;
        }
    </style>
</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>

<?php /**PATH C:\Users\LOQ\myapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>