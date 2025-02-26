<?php $mobile_menu = cyn_get_menu_items_by_slug(CYN_MOBILE_MENU) ?>

<div class="fixed z-50 space-y-5 inset-0 p-5 pb-10 bg-gray-50 [clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)] duration-700 transition-all"
    id="mobileMenu">

    <div class="flex gap-4 justify-between">
        <!-- Close Button -->
        <div class="flex items-center cursor-pointer" id="mobileMenuCloser">
            <div class="border bottom-1 rounded-full border-slate-100 p-3">
                <svg class="icon text-zinc-600">
                    <use href="#icon-xmark" />
                </svg>
            </div>
        </div>

        <!-- Logo -->
        <div>
            <?php the_custom_logo() ?>
        </div>
    </div>

    <!-- Menu -->
    <div class="grid gap-2" id="mobileMenu">
        <?php foreach ($mobile_menu as $menu_item): ?>
            <div class="menu-item">
                <a href="<?php echo $menu_item->url ?>"
                    class="menu-link flex justify-start items-center gap-2 p-2 text-xl text-slate-400 hover:text-slate-950">
                    <?php echo $menu_item->title ?>
                    <?php if ($menu_item->child_items): ?>
                        <svg class="menu-icon icon size-4 transition-transform duration-300 rotate-0">
                            <use href="#icon-chevron-left" />
                        </svg>
                    <?php endif; ?>
                </a>

                <?php if ($menu_item->child_items): ?>
                    <div class="submenu overflow-hidden max-h-0 transition-all duration-300">
                        <div class="submenu-content grid gap-2 rounded-2xl divide-y-2 divide-slate-200 bg-zinc-100">
                            <?php foreach ($menu_item->child_items as $child): ?>
                                <a class="p-2 block text-zinc-500 px-3 py-4" href="<?php echo $child->url ?>">
                                    <?php echo $child->title ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

</div>