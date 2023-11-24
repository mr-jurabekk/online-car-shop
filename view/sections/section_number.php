<?php if(!empty($allCounterArea)): ?>

<!-- Numbers -->
<div class="counter-area pt-30 pb-30">
    <div class="container">
        <div class="row">

            <?php foreach ($allCounterArea as $allCounterItem): ?>

                <div class="col-lg-3 col-sm-6">

                    <div class="counter-box">
                        <div class="icon">
                            <i class="<?= $allCounterItem['icon']; ?>"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="<?= $allCounterItem['counter'];?>" data-speed="3000"></span>
                            <h6 class="title"><?= $allCounterItem['title']; ?></h6>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php endif; ?>