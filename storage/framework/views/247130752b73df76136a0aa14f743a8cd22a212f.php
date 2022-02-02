<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/42/b4/d3/42b4d305d6663ed350f34d1e7c7e4400.jpg" />
    <?php echo $__env->yieldContent('title'); ?>
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body onmousedown = 'return false' onselectstart = 'return false' oncontextmenu = 'return false' onkeydown = 'return false'>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- <?php echo $__env->yieldContent('footer'); ?> -->   
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>
</html><?php /**PATH C:\Laravel\PasteraPersonalWebPage\resources\views/layouts/app.blade.php ENDPATH**/ ?>