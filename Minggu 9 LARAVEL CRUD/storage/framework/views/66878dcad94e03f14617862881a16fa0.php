<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Pendaftaran Mahasiswa</title>
</head>
<body>


<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Pendaftaran Mahasiswa</h1>
      <hr>


      <form action="<?php echo e(route('mahasiswas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label class="form-label" for="nim">NIM</label>
          <input type="text" id="nim" name="nim" value="<?php echo e(old('nim')); ?>"
          class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
          <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div class="mb-3">
          <label class="form-label" for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" value="<?php echo e(old('nama')); ?>"
          class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
          <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label>
          <div class="d-flex">
            <div class="form-check me-3">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="laki_laki" value="L" 
              <?php echo e(old('jenis_kelamin')=='L' ? 'checked': ''); ?>>
              <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="perempuan" value="P" 
              <?php echo e(old('jenis_kelamin')=='P' ? 'checked': ''); ?>>
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>
          <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div class="mb-3">
          <label class="form-label" for="jurusan">Jurusan</label>
          <select class="form-select" name="jurusan" id="jurusan" 
          value="<?php echo e(old('jurusan')); ?>">
            <option value="Teknik Informatika"
            <?php echo e(old('jurusan')=='Teknik Informatika' ? 'selected': ''); ?> >
            Teknik Informatika
            </option>
            <option value="Sistem Informasi"
            <?php echo e(old('jurusan')=='Sistem Informasi' ? 'selected': ''); ?> >
            Sistem Informasi
            </option>
            <option value="Ilmu Komputer"
            <?php echo e(old('jurusan')=='Ilmu Komputer' ? 'selected': ''); ?> >
            Ilmu Komputer
            </option>
            <option value="Teknik Komputer"
            <?php echo e(old('jurusan')=='Teknik Komputer' ? 'selected': ''); ?> >
            Teknik Komputer
            </option>
            <option value="Teknik Telekomunikasi"
            <?php echo e(old('jurusan')=='Teknik Telekomunikasi' ? 'selected': ''); ?> >
            Teknik Telekomunikasi
            </option>
          </select>
          <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div class="mb-3">
          <label class="form-label" for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3" 
          name="alamat"><?php echo e(old('alamat')); ?></textarea>
        </div>


        <button type="submit" class="btn btn-primary mb-2">Daftar</button>
      </form>


    </div>
  </div>
</div>


</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\laravel-crud\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>