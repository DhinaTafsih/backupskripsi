<div class="form-group row">
    <label for="nama_kriteria" class="control-label"><?php echo e('NAMA KRITERIA'); ?></label>
    <input class="form-control  <?php if ($errors->has('nama_kriteria')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_kriteria'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nama_kriteria" type="text" id="nama_kriteria" value="<?php echo e(isset($datas->nama_kriteria) ? $datas->nama_kriteria : ''); ?>" autofocus>
</div>

<div class="form-group row">
    <label for="persentase" class="control-label"><?php echo e('PERSENTASE'); ?></label>
    <input class="form-control <?php if ($errors->has('persentase')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('persentase'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="persentase" type="text" id="persentase" value="<?php echo e(isset($datas->persentase) ? $datas->persentase : ''); ?>" autofocus>
    
 
</div>


<div class="form-group row">
    <label for="secondary_factor" class="control-label"><?php echo e('secondary factor'); ?></label>
    <input class="form-control <?php if ($errors->has('secondary_factor')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('secondary_factor'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="secondary_factor" type="text" id="secondary_factor" value="<?php echo e(isset($datas->secondary_factor) ? $datas->secondary_factor : ''); ?>" autofocus>

   
   
</div>


<div class="form-group row">
    <label for="core_factor" class="control-label"><?php echo e('core factor'); ?></label>
    <input class="form-control <?php if ($errors->has('core_factor')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('core_factor'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="core_factor" type="text" id="core_factor" value="<?php echo e(isset($datas->core_factor) ? $datas->core_factor : ''); ?>" >
     
  
</div>


<div class="form-group">
<input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/kriteria/form.blade.php ENDPATH**/ ?>