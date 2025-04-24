
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Delivery Mans Lists')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('delivery_hero_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('delivery_hero'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    if(isset($_GET['q'])){
        $q          = $_GET['q'];
    }
    if(isset($_GET['ph'])){
        $ph          = $_GET['ph'];
    }
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Delivery Mans Lists')); ?></h2>
                    <p class="section-lead"></p>
                </div>
                
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('delivery.hero.create')); ?>" class="btn btn-icon icon-left btn-outline-primary">
                            <i class="bx bx-plus"></i><?php echo e(__('Add New Delivery Man')); ?></a>
                    </div>
                
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo e(__('Delivery Mans')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline" id="sorting">
                                    <div class="form-group">
                                        <select class="form-control select2 sorting" name="ph">
                                            <option <?php echo e(@$ph == "" ? "selected" : ""); ?> value=""><?php echo e(__('Pickup Hub')); ?></option>
                                            <?php $__currentLoopData = $pickupHubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(@$ph == $hub->id ? "selected" : ""); ?> value="<?php echo e($hub->id); ?>"><?php echo e($hub->getTranslation('name')); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo e(@$q); ?>"
                                               placeholder="<?php echo e(__('Search')); ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-primary"><i class="bx bx-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Phone')); ?></th>
                                        <th><?php echo e(__('Last Login')); ?></th>
                                        <th><?php echo e(__('Salary')); ?></th>
                                        <th><?php echo e(__('Pickup Hub')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Balance')); ?></th>
                                        <th><?php echo e(__('Total Collection')); ?></th>
                                        <th><?php echo e(__('Total Commission')); ?></th>
                                        
                                        <th><?php echo e(__('Options')); ?></th>
                                        
                                    </tr>
                                    <?php $__currentLoopData = $deliveryHeroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($deliveryHeroes->firstItem() + $key); ?></td>
                                        <td width="300">
                                            <div class="d-flex">
                                                <figure class="avatar mr-2">
                                                    <?php if($value->images != [] && @is_file_exists($value->images['image_40x40'])): ?>
                                                        <img src="<?php echo e(static_asset($value->images['image_40x40'])); ?>"
                                                             alt="<?php echo e($value->first_name); ?>">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(static_asset('images/default/user40x40.jpg')); ?>"
                                                            alt="<?php echo e($value->first_name); ?>">
                                                    <?php endif; ?>
                                                </figure>
                                                <div class="ml-1">
                                                    <a href="<?php echo e(route('delivery.hero.edit', $value->id)); ?>"
                                                       data-toggle="tooltip" title=""
                                                       data-original-title="<?php echo e(__('Edit')); ?>"><?php echo e($value->first_name . ' ' . $value->last_name); ?></a>
                                                    <br/>
                                                    <i class='bx bx-check-circle
                                                            <?php echo e(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($value) == true ? "text-success" : "text-warning"); ?> '>
                                                    </i>
                                                    <?php echo e(config('app.demo_mode') ? emailAddressMask($value->email) : $value->email); ?>

                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo e(config('app.demo_mode') ? Str::of($value->phone)->mask('*', 0, strlen($value->phone)-3) : $value->phone); ?></td>
                                        <td><?php echo e($value->last_login != '' ? date('M d, Y h:i a', strtotime($value->last_login)) : ''); ?></td>
                                        <td><?php echo e(get_price(@$value->deliveryHero->salary,user_curr())); ?> </td>
                                        <td>
                                            <?php if(isset($value->deliveryHero->pickupHub)): ?>
                                            <?php echo e(@$value->deliveryHero->pickupHub->getTranslation('name')); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($value->is_user_banned == 1): ?>
                                                <div class="d-flex">
                                                    <div
                                                        class="ml-1 badge badge-pill badge-danger"><?php echo e(__('Banned')); ?></div>
                                                </div>
                                            <?php else: ?>
                                                
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                           value="customer-status-change/<?php echo e($value->id); ?>"
                                                           
                                                           <?php echo e($value->status == 1 ? 'checked' : ''); ?> class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(get_price(priceFormatUpdate($value->balance,settingHelper('default_currency'),"*"),user_curr())); ?></td>
                                        <td><?php echo e($value->deliveryHero ? get_price(priceFormatUpdate($value->deliveryHero->total_collection,settingHelper('default_currency'),"*"),user_curr()) : 0); ?></td>
                                        <td><?php echo e($value->deliveryHero ? get_price(priceFormatUpdate($value->deliveryHero->total_commission,settingHelper('default_currency'),"*"),user_curr()) : 0); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(route('delivery.hero.edit', $value->id)); ?>"
                                               class="btn btn-outline-secondary btn-circle"
                                               data-toggle="tooltip" title=""
                                               data-original-title="<?php echo e(__('Edit')); ?>"><i class="bx bx-edit"></i>
                                            </a>
                                            
                                            
                                            <a href="javascript:void(0)" data-toggle="dropdown"
                                               class="btn btn-outline-secondary btn-circle" title=""
                                               data-original-title="<?php echo e(__('Options')); ?>">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                                
                                             <div class="dropdown-menu">
                                                 
                                                     
                                                 
                                                 
                                                    
                                                
                                                     
                                                     
                                                 
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($deliveryHeroes->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\yoori-ecommerce\resources\views/admin/delivery-hero/index.blade.php ENDPATH**/ ?>