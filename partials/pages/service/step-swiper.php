<?php
$mainTitle = get_field('main_title');
?>

<?php if (!empty($mainTitle)): ?>

    <section class="bg-slate-950 p-10"
        style="background-image: url(<?php echo CYN_THEME_DIR . '/assets/img/opacity-black-sections.png' ?>);">
        <div class="text-white text-3xl md:text-4xl mb-5">
            <?php echo $mainTitle ?>
        </div>

        <swiper-container class="max-md:h-[560px] h-full flex flex-col justify-between" slides-per-view="1"
            space-between="20" pagination="true" pagination-clickable="true">

            <?php for ($i = 1; $i <= 3; $i++): ?>
                <?php
                $stepsTitle = get_field("step_title_$i");
                $stepsText = get_field("step_text_$i");
                $stepsImage = get_field("step_image_$i");
                ?>

                <swiper-slide class="p-2">
                    <div class="flex flex-col md:flex-row justify-around items-center gap-5">
                        <!-- Content -->
                        <div
                            class="flex flex-col gap-2 justify-center max-md:text-center w-full md:w-[608px] order-2 md:order-1">
                            <!-- Title -->
                            <div class="text-neutral-300 text-2xl md:text-3xl">
                                <?php echo $stepsTitle ?>
                            </div>

                            <!-- Text -->
                            <div class="text-zinc-600 text-xl md:text-2xl">
                                <?php echo $stepsText ?>
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="md:w-[350px] order-1 md:order-2 mb-5 md:mb-0">
                            <?php echo wp_get_attachment_image($stepsImage, 'full', false, ['class' => 'max-w-[334px] h-auto max-md:w-[224px] object-cover']); ?>
                        </div>
                    </div>
                </swiper-slide>
            <?php endfor; ?>

        </swiper-container>
        

    </section>

<?php endif; ?>