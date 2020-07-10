<div class="form-group row">
    <label for="anggota_id" class="control-label"><?php echo e('CALON ANGGOTA'); ?></label>
    <select class="form-control <?php if ($errors->has('anggota_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('anggota_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="anggota_id" id="anggota_id">
        <option value="" disabled selected>Nama Calon Anggota</option>
        <?php $__currentLoopData = $ca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_calonanggota); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
    </select>
</div>

<div class="form-group row">
    <label for="id_subkriteria" class="control-label"><?php echo e('SUB KRITERIA'); ?></label>
    <select class="form-control <?php if ($errors->has('id_subkriteria')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_subkriteria'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="id_subkriteria" id="id_subkriteria">
        <option value="" disabled selected>PILIH SUB KRITERIA</option>
        <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($t->id_subkriteria); ?>"><?php echo e($t->nama_subkriteria); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
    </select>
</div>

<div class="form-group row">
    <label for="values" class="control-label"><?php echo e('values'); ?></label>
    <input class="form-control <?php if ($errors->has('values')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('values'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="values" type="text" id="values" value="<?php echo e(isset($datas->values) ? $datas->values : ''); ?>" autofocus>
 
</div>




<div class="form-group">
<input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/sample/form.blade.php ENDPATH**/ ?>