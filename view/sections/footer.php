
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="<?= ASSETS?>/img/logo/logo-light.png" alt="">
                        </a>
                        <p class="mb-3"> <?= getSettings('about') ?> </p>
                        <ul class="footer-contact">
                            <li>
                                <a href="tel:<?= getSettings('phone') ?>">
                                    <i class="far fa-phone"></i> <?= getSettings('phone') ?> </a>
                            </li>
                            <li>
                                <i class="far fa-map-marker-alt"></i><?= getSettings('address') ?>
                            </li>
                            <li>
                                <a href="mailto:<?= getSettings('email') ?>">
                                    <i class="far fa-envelope"></i>
                                    <span class="__cf_email__" data-cfemail="2b42454d446b4e534a465b474e05484446"><?= getSettings('email') ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php if(!empty($allFooterMenus)): ?>

                    <?php foreach ($allFooterMenus as $allFooterMenu): ?>

                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title"><?= $allFooterMenu['title'];?></h4>

                                <?php if(!empty($allFooterMenu['children'])): ?>

                                    <ul class="footer-list">
                                        <?php foreach ($allFooterMenu['children'] as $child): ?>

                                            <li>
                                                <a href="<?=$child['link']?>">
                                                    <i class="fas fa-caret-right"></i> <?=$child['title']?>
                                                </a>
                                            </li>

                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        <?= getSettings('copyright') ?>
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">

                        <?php if(!empty($allSocialLinksFooter)): ?>
                            <?php foreach ($allSocialLinksFooter as $allSocial): ?>
                                <li>
                                    <a href="<?= $allSocial['link'];?>">
                                        <i class="<?= $allSocial['icon_class'];?>"></i>
                                    </a>
                                </li>       
                            <?php endforeach;?>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="scroll-top">
    <i class="far fa-arrow-up"></i>
</a>

<script src="<?= ASSETS?>/js/jquery-3.6.0.min.js"></script>
<script src="<?= ASSETS?>/js/modernizr.min.js"></script>
<script src="<?= ASSETS?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= ASSETS?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= ASSETS?>/js/isotope.pkgd.min.js"></script>
<script src="<?= ASSETS?>/js/jquery.appear.min.js"></script>
<script src="<?= ASSETS?>/js/jquery.easing.min.js"></script>
<script src="<?= ASSETS?>/js/owl.carousel.min.js"></script>
<script src="<?= ASSETS?>/js/counter-up.js"></script>
<script src="<?= ASSETS?>/js/jquery-ui.min.js"></script>
<script src="<?= ASSETS?>/js/jquery.nice-select.min.js"></script>
<script src="<?= ASSETS?>/js/wow.min.js"></script>
<script src="<?= ASSETS?>/js/flex-slider.js"></script>
<script src="<?= ASSETS?>/js/main.js"></script>
</body>
<!-- Mirrored from live.themewild.com/motex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 12:52:18 GMT -->
</html>