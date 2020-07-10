<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 10px">
    <div class="row" style="padding-left: 0 5px 0 5px">
        <div class="col-lg-5">
            
                            <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(url('/subkriteria')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo $__env->make('subkriteria.form', ['formMode' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </div>


        <div class ="col-lg-7">
        <table class="table">
                <thead>
                                <tr>
                                <th width="10px">No</th>
                                <th>id_kriteria</th>
                                <th>nama subkriteria</th>
                                <th>secondary_factor</th>
                                <th>core_factor</th>
                                <th>Action</th>
                                </tr>
                </thead>
                <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->id_kriteria); ?></td>
                                    <td><?php echo e($item->nama_subkriteria); ?></td>
                                    <td><?php echo e($item->target); ?></td>
                                    <td><?php echo e($item->type); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('subkriteria.edit',$item->id_subkriteria)); ?>"class="btn btn-success btn-sm ">Edit</a>
                                        <form method="POST" action="<?php echo e(url('/subkriteria' . '/' . $item->id_subkriteria)); ?>" accept-charset="UTF-8" style="display:inline">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo e(csrf_field()); ?>

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
        </table>
                <?php echo $datas->render(); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


  
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/subkriteria/index.blade.php ENDPATH**/ ?>