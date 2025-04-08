<?php $footer_menu_1 = cyn_get_menu_items_by_slug(CYN_FOOTER_MENU_1) ?>
<?php $footer_menu_2 = cyn_get_menu_items_by_slug(CYN_FOOTER_MENU_2) ?>

<div class="container max-lg:px-5 min-[768px]:grid hidden gap-6 mt-20">

    <!-- Footer Title -->
    <div class="footer-text-gsap text-4xl text-neutral-400 cursor-default">
        <?php _e('تو ذهنا موندگار بمون!', 'cyn-dm') ?>
    </div>

    <!-- Footer Information -->
    <div class="grid grid-cols-12 border-y gap-6 text-zinc-400">
        <!-- Column 1 -->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center gap-3 border-e">
            <?php foreach ($footer_menu_1 as $index => $menu_item): ?>
                <a href="<?php echo $menu_item->url ?>"
                    class="whitespace-nowrap menu-item max-lg:text-sm hover:text-teal-600 flex gap-3 items-center text-lg transition-all duration-500 group <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                    data-id="<?php echo $menu_item->ID ?>">
                    <!-- Green line (behind the text) -->
                    <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                    </div>
                    <!-- Text -->
                    <span class="z-10"> <!-- Ensure text is above the green line -->
                        <?php echo $menu_item->title ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Column 2-->
        <div class="col-span-1 justify-center py-4 flex flex-col items-center gap-3">
            <?php foreach ($footer_menu_2 as $index => $menu_item): ?>
                <a href="<?php echo $menu_item->url ?>"
                    class="whitespace-nowrap menu-item max-lg:text-sm hover:text-teal-600 flex gap-3 items-center text-lg transition-all duration-500 group <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                    data-id="<?php echo $menu_item->ID ?>">
                    <!-- Green line (behind the text) -->
                    <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                    </div>
                    <!-- Text -->
                    <span class="z-10"> <!-- Ensure text is above the green line -->
                        <?php echo $menu_item->title ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Column 3-->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center space-y-3 border-s">
            <!-- Price PopUp -->
            <div>
                <a id="menuItem2"
                    class="whitespace-nowrap max-lg:text-sm hover:text-teal-600 flex gap-3 items-center text-lg transition-all duration-500 group"
                    href="<?php echo get_option("price_title_link", '#') ?>">
                    <!-- Green line (behind the text) -->
                    <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                    </div>
                    <!-- Text -->
                    <span class="z-10"> <!-- Ensure text is above the green line -->
                        <?php _e('استعلام هزینه', 'cyn-dm') ?>
                    </span>
                </a>
            </div>

            <div>
                <a class="whitespace-nowrap max-lg:text-sm hover:text-teal-600 flex gap-3 items-center text-lg transition-all duration-500 group"
                    href="<?php echo pll_current_language() === 'fa' ? get_option("title_persian_link", '#') : get_option("title_english_link", '#'); ?>">
                    <!-- Green line (behind the text) -->
                    <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                    </div>
                    <!-- Text -->
                    <span class="z-10"> <!-- Ensure text is above the green line -->
                        <?php _e('سوالات متداول', 'cyn-dm') ?>
                    </span>
                </a>
            </div>
        </div>

        <!-- Column 4-->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center gap-3 border-s">
            <div class="whitespace-nowrap text-lg max-lg:text-sm">
                <?php _e('شماره تماس', 'cyn-dm') ?>
            </div>
            <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                <div
                    class="whitespace-nowrap grid gap-2 max-lg:text-sm hover:text-teal-600 transition-all duration-500 cursor-pointer ">
                    <?php _e(get_option('desktop_menu_phone')) ?>
                </div>
            </a>
        </div>

        <!-- Column 5-->
        <div class="col-span-2 justify-center py-4 px-2 flex flex-col items-center gap-3 border-x">
            <div class="text-lg max-lg:text-sm">
                <?php _e('ایمیل', 'cyn-dm') ?>
            </div>
            <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                <div
                    class="flex gap-2 text-base max-lg:text-sm hover:text-teal-600 transition-all duration-500 cursor-pointer break-all max-w-full">
                    <?php _e(get_option('desktop_menu_mail')) ?>
                </div>
            </a>
        </div>

        <!-- Column 6-->
        <div class="col-span-3 justify-center py-4 grid grid-cols-5 gap-3 align-center">

            <!-- Persian Address -->
            <?php if (pll_current_language() == 'fa'): ?>
                <div class="col-span-3 flex flex-col gap-3">
                    <div class="text-sm">
                        <?php _e('آدرس', 'cyn-dm') ?>
                    </div>
                    <div class="flex f-column text-xs hover:text-teal-600 transition-all duration-500 cursor-pointer">
                        <?php _e(get_option('footer_persian_address')) ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- English Address -->
            <?php if (pll_current_language() == 'en'): ?>
                <div class="col-span-3">
                    <div class="text-lg max-lg:text-sm">
                        <?php _e('Address', 'cyn-dm') ?>
                    </div>
                    <div
                        class="flex f-column text-base max-lg:text-sm hover:text-teal-600 transition-all duration-500 cursor-pointer">
                        <?php _e(get_option('footer_english_address')) ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-span-2 grid gap-4">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <a class="hover:scale-110 transition-all duration-500"
                        href="<?php echo get_option("icon_text_$i", '#') ?>">
                        <img class="max-w-[24px] h-auto object-cover" src="<?php echo get_option("icon_img_$i", '#') ?>"
                            alt="">
                    </a>
                <?php endfor ?>
            </div>
        </div>

    </div>

    <!-- Cyan Name -->
    <div class="text-xs text-zinc-400 text-center py-4">
        <?php _e('طراحی و توسعه توسط شرکت سایان', 'cyn-dm') ?>
    </div>

</div>