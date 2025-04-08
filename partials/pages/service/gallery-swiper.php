<section class="max-[767px]:px-4 min-[768px]:px-10">
    <!-- Swiper Container -->
    <swiper-container class="flex justify-center" speed="500" pagination="true" pagination-clickable="true">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php $image = get_field("img_$i") ?>
            <?php if (empty($image))
                continue; ?>

            <!-- Swiper Slide -->
            <swiper-slide class="flex justify-center items-center">
                <?php echo wp_get_attachment_image($image, 'full', false, ['class' => 'w-[1440px] max-w-full h-[196px] lg:h-[560px] md:h-[300px] object-cover rounded-[32px]']) ?>
            </swiper-slide>
        <?php endfor; ?>
    </swiper-container>
</section>