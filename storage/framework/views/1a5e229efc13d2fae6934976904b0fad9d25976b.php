<div class="form-group row">
    <label for="id_kriteria" class="control-label"><?php echo e('ID KRITERIA'); ?></label>
    <select class="form-control <?php if ($errors->has('id_kriteria')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_kriteria'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="id_kriteria" id="id_kriteria">
        <option value="" disabled selected>PILIH KRITERIA</option>
        <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id_kriteria); ?>"><?php echo e($item->nama_kriteria); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
    </select>
</div>

<div class="form-group row">
    <label for="nama_subkriteria" class="control-label"><?php echo e('NAMA SUBKRITERIA'); ?></label>
    <input class="form-control <?php if ($errors->has('nama_subkriteria')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_subkriteria'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nama_subkriteria" type="text" id="nama_subkriteria" value="<?php echo e(isset($datas->nama_subkriteria) ? $datas->nama_subkriteria : ''); ?>" autofocus> 
</div>


<div class="form-group row">
    <label for="target" class="control-label"><?php echo e('TARGET'); ?></label>
    <input class="form-control <?php if ($errors->has('target')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('target'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="target" type="text" id="target" value="<?php echo e(isset($datas->target) ? $datas->target : ''); ?>" autofocus>
 
</div>


<div class="form-group row">
    <label for="type" class="control-label"><?php echo e('TYPE'); ?></label>
    <select class="form-control <?php if ($errors->has('type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('type'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="type" id="id_kriteria">
        <option value="" disabled selected>PILIH Kriteria</option>
        <option value="core">core</option>    
        <option value="secondary">secondary</option>
    </select>
</div>


<div class="form-group">
<input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/subkriteria/form.blade.php ENDPATH**/ ?>