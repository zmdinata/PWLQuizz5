<!DOCTYPE html>
<html lang="id">

<head>
    <title>Info Dosen</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 15px;
            border- radius: 8px;
            width: 300px;
        }

        h2 {
            color: #2c3e50;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Profil Dosen</h2>
        <p><strong>Nama:</strong> <?php echo e($nama); ?></p>
        <p><strong>Tahun:</strong> <?php echo e($tahun); ?></p>
        <p><strong>Matakuliah:</strong> <?php echo e($mata_kuliah); ?></p>
    </div>
    <h3>Daftar Mahasiswa:</h3>
    <ul>
        <?php $__currentLoopData = $list_mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($mhs); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <p><strong>Umur:</strong> <?php echo e($umur); ?></p>
    </ul>
</body>

</html><?php /**PATH C:\Projects\pratikum5\resources\views/info_dosen.blade.php ENDPATH**/ ?>