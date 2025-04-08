<div class="faq-item flex flex-row justify-between items-center border-b gap-16 py-5 px-4 md:py-9 md:px-6 cursor-pointer">

    <div class="flex flex-col gap-2">
        <!-- Question -->
        <div class="text-lg min-[768px]:text-2xl text-zinc-900">
            <?php the_title(); ?>
        </div>

        <!-- Answer -->
        <div class="faq-answer max-h-0 overflow-hidden text-sm min-[768px]:text-lg text-zinc-500 leading-8 transition-all duration-500">
            <?php the_content(); ?>
        </div>
    </div>

    <!-- Icon -->
    <div class="faq-icon rotate-90 transition-all duration-300">
        <a>
            <svg class="icon w-6 h-6 min-[768px]:w-12 min-[768px]:h-12">
                <use href="#icon-Arrow-17" />
            </svg>
        </a>
    </div>

</div>