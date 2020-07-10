<div class="form-group row">
    <label for="selisih" class="control-label"><?php echo e('SELISIH'); ?></label>
    <input class="form-control <?php if ($errors->has('selisih')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('selisih'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="selisih" type="text" id="selisih" value="<?php echo e(isset($datas->selisih) ? $datas->selisih : ''); ?>" autofocus> 
</div>


<div class="form-group row">
    <label for="nilai" class="control-label"><?php echo e('NILAI'); ?></label>
    <input class="form-control <?php if ($errors->has('nilai')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nilai'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nilai" type="text" id="nilai" value="<?php echo e(isset($datas->nilai) ? $datas->nilai : ''); ?>" autofocus>
 
</div>

<div class="form-group row">
    <label for="keterangan" class="control-label"><?php echo e('keterangan'); ?></label>
    <input class="form-control <?php if ($errors->has('keterangan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('keterangan'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="keterangan" type="text" id="keterangan" value="<?php echo e(isset($datas->keterangan) ? $datas->keterangan : ''); ?>" autofocus>
 
</div>




<div class="form-group">
<input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/nilai/form.blade.php ENDPATH**/ ?>