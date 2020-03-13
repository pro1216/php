<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <?php echo $__env->make('book/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if($target == 'store'): ?>
            <form action="/book" method="post">
            <?php elseif($target == 'update'): ?>
            <form action="/book/<?php echo e($book->id); ?>" method="post">
                <input type="hidden" name="_method" value="PUT">
            <?php endif; ?>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                    <label for="name">書籍名</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($book->name); ?>">
                </div>
                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control" name="price" value="<?php echo e($book->price); ?>">
                </div>
                <div class="form-group">
                    <label for="author">著者</label>
                    <input type="text" class="form-control" name="author" value="<?php echo e($book->author); ?>">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/book">戻る</a>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\shota\hogeapp\resources\views/book/form.blade.php ENDPATH**/ ?>