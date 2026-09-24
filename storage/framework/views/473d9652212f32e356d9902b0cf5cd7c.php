<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Pelajaran</title>
</head>
<body>
    <nav>
    <a href="/profil">Profil</a> | 
    <a href="/sapa/Rama">Sapa</a> | 
    <a href="/mapel">Mapel</a>
</nav>
    <hr>

    <h1>Daftar Mata Pelajaran</h1>
    <ul>
        <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\laragon\www\laravel defi\resources\views/mapel.blade.php ENDPATH**/ ?>