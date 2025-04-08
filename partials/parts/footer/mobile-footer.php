<?php $footer_mobile_menu = cyn_get_menu_items_by_slug(CYN_FOOTER_MOBILE_MENU) ?>

<div class="container hidden max-[767px]:flex flex-col gap-6 mt-20">

    <!-- Footer Title -->
    <div class="text-4xl text-center text-neutral-400 hover:text-slate-950 transition-all duration-500 cursor-default">
        <?php _e('تو ذهنا موندگار بمون!', 'cyn-dm') ?>
    </div>
    <!-- Menu -->
    <div class="text-zinc-400">
        <div class="divide-y">
            <?php foreach ($footer_mobile_menu as $index => $menu_item): ?>
                <div class="text-lg text-center py-4 menu-item">
                    <a href="<?php echo $menu_item->url ?>"
                        class="max-lg:text-sm hover:text-teal-600 flex gap-3 justify-center items-center text-lg transition-all duration-500 group"
                        data-id="<?php echo $menu_item->ID ?>">
                        <!-- Green line (behind the text) -->
                        <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                        </div>
                        <!-- Text -->
                        <span class="z-10"> <!-- Ensure text is above the green line -->
                            <?php echo $menu_item->title ?>
                        </span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div>
            <!-- Price PopUp -->
            <div class="border-t py-4">
                <a id="menuItem3"
                    class="max-lg:text-sm hover:text-teal-600 flex gap-3 justify-center items-center text-lg transition-all duration-500 group"
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

            <div class="divide-y">
                <div class="py-4 text-center first:border-t">
                    <a class="max-lg:text-sm hover:text-teal-600 flex gap-3 justify-center items-center text-lg transition-all duration-500 group"
                        href="<?php echo pll_current_language() === 'fa' ? get_option("title_persian_link", '#') : get_option("title_english_link", '#'); ?>">
                        <!-- Green line (behind the text) -->
                        <div class="w-0 h-[3px] bg-teal-600 rounded-full transition-all duration-500 group-hover:w-3">
                        </div>
                        <!-- Text -->
                        <span class="z-10"> <!-- Ensure text is above the green line -->
                            <?php echo pll_current_language() === 'fa' ? 'سوالات متداول' : 'FAQ'; ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Information -->
    <div class="grid grid-cols-2 text-lg text-zinc-400 border-y">
        <div class="col-span-1 space-y-2 border-e px-6 py-3">
            <!-- Phone -->
            <div class="flex flex-col gap-1">
                <div class="text-sm">
                    <?php _e(get_option('footer_title_phone')) ?>
                </div>
                <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                    <div class="text-xs grid gap-2 hover:text-teal-600  transition-all duration-500 cursor-pointer ">
                        <?php _e(get_option('desktop_menu_phone')) ?>
                    </div>
                </a>
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-1">
                <div class="text-sm">
                    <?php _e(get_option('footer_title_email')) ?>
                </div>
                <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                    <div class="flex gap-2 text-xs hover:text-teal-600  transition-all duration-500 cursor-pointer">
                        <?php _e(get_option('desktop_menu_mail')) ?>
                    </div>
                </a>
            </div>
        </div>

        <!-- Address -->
        <div class="col-span-1 flex flex-col gap-3 px-6 py-3">

            <!-- Persian Address -->
            <?php if (pll_current_language() == 'fa'): ?>
                <div class="flex flex-col gap-3">
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
                <div class="flex flex-col gap-3">
                    <div class="text-sm">
                        <?php _e('Address', 'cyn-dm') ?>
                    </div>
                    <div class="flex f-column text-xs hover:text-teal-600 transition-all duration-500 cursor-pointer">
                        <?php _e(get_option('footer_english_address')) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Social Media -->
    <div class="flex justify-center gap-4">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <a class="hover:scale-110 transition-all duration-500" href="<?php echo get_option("icon_text_$i", '#') ?>">
                <img class="max-w-[24px] h-auto object-cover" src="<?php echo get_option("icon_img_$i", '#') ?>" alt="">
            </a>
        <?php endfor ?>
    </div>

    <!-- Cyan Name -->
    <div class="text-xs text-zinc-400 text-center py-4">
        <?php _e('طراحی و توسعه توسط شرکت سایان', 'cyn-dm') ?>
    </div>

</div>