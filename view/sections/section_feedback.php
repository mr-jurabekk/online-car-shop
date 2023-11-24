<!-- Feedback. testimonial area -->
<div class="testimonial-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">
                  <i class="flaticon-drive"></i> Mijozlar </span>
                    <h2 class="site-title">Mijozlarimizning <span>Fikri</span>
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider owl-carousel owl-theme">
            <?php if(!empty($allTestimonials)):?>
                <?php foreach ($allTestimonials as $allTestimonial): ?>
                    <div class="testimonial-single">
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        <img src="<?= ASSETS?>/img/testimonial/<?= $allTestimonial['image']; ?>" alt="">
                    </div>
                    <div class="testimonial-author-info">
                        <h4><?= $allTestimonial['name']; ?></h4>
                        <p><?= $allTestimonial['type']; ?></p>
                    </div>
                </div>
                <div class="testimonial-quote">
                <span class="testimonial-quote-icon">
                  <i class="flaticon-quote"></i>
                </span>
                    <p><?= $allTestimonial['description']; ?></p>
                </div>
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
