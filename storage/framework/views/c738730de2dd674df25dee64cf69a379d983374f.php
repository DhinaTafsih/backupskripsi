<div class="form-group row">
    <label for="nim" class="control-label"><?php echo e('NIM'); ?></label>
    <input class="form-control  <?php if ($errors->has('nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nim'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" maxlength="9" name="nim" type="text" id="nim" value="<?php echo e(isset($datas->nim) ? $datas->nim : ''); ?>" autofocus>


</div>

<div class="form-group row">
    <label for="nama_calonanggota" class="control-label"><?php echo e('NAMA'); ?></label>
    <input class="form-control <?php if ($errors->has('nama_calonanggota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_calonanggota'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nama_calonanggota" type="text" id="nama_calonanggota" value="<?php echo e(isset($datas->nama_calonanggota) ? $datas->nama_calonanggota : ''); ?>" autofocus>
    
 
</div>

<div class="form-group row">
    <label for="jurusan" class="control-label"><?php echo e('JURUSAN'); ?></label>
    <select class="form-control <?php if ($errors->has('email_calonanggota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email_calonanggota'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="jurusan" id="jurusan">
        <option value="" disabled selected>PILIH JURUSAN</option>
        <option value="komputerisasi akuntansi">Komputerisasi Akuntansi</option>
        <option value="Teknik Komputer">Teknik Komputer</option>
        <option value="Manajemen Informatika">Manajemen Informatika</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
    </select>

  
    
</div>


<div class="form-group row">
    <label for="email_calonanggota" class="control-label"><?php echo e('EMAIL'); ?></label>
    <input class="form-control <?php if ($errors->has('email_calonanggota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email_calonanggota'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email_calonanggota" type="email" id="email_calonanggota" value="<?php echo e(isset($datas->email_calonanggota) ? $datas->email_calonanggota : ''); ?>" autofocus>
        
      
</div>

<div class="form-group row">
    <label for="nomor_telp" class="control-label"><?php echo e('Nomor Telepon'); ?></label>
    <input class="form-control <?php if ($errors->has('nomor_telp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomor_telp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" maxlength="13" name="nomor_telp" type="text" id="nomor_telp" value="<?php echo e(isset($datas->nomor_telp) ? $datas->nomor_telp : ''); ?>" autofocus>

   
   
</div>


<div class="form-group row">
    <label for="password" class="control-label"><?php echo e('Password'); ?></label>
    <input class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" type="password" id="password" value="<?php echo e(isset($datas->password) ? $datas->password : ''); ?>" >
     
  
</div>


<div class="form-group">
<input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/calonAnggota/form.blade.php ENDPATH**/ ?>