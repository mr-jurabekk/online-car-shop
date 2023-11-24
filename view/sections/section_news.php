

<!-- News   -->
<div class="blog-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">
                  <i class="flaticon-drive"></i> Bizning blogimiz </span>
                    <h2 class="site-title">So'ngi yangiliklar & <span>Blogi</span>
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($allNews)): ?>
                <?php foreach ($allNews as $allNew):?>

                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="<?=ASSETS?>/img/blog/01.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-eye"></i> <?= $allNew['seen_count']; ?> </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-calendar-alt"></i> <?= $allNew['time']; ?> </a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#"><?= $allNew['title']; ?></a>
                                </h4>
                                <a class="theme-btn" href="?route=news-blog&id=<?=$allNew['id']?>"><?= $allNew['button']; ?> <i class="fas fa-arrow-right-long"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>