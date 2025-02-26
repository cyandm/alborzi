<div class="container">
    <div
        class="group cursor-pointer before:h-full before:w-full before:content-[''] before:[url(var(--content-url))] border border-slate-200 rounded-[40px] min-md:p-10 text-3xl max-md:text-lg text-zinc-400 leading-[64px] transition-all duration-500 ">

        <div
            class="prose-strong:font-normal group-hover:prose-strong:text-zinc-800 group-hover:first:prose-strong:underline p-10 transition-all duration-500 max-md:space-y-4 space-y-6">

            <div class="max-md:flex max-md:justify-center max-md:items-center">
                <img src="<?php echo CYN_THEME_DIR . '/assets/img/Quote.png'; ?>" alt="Quote" class="w-[30px] h-[30px]">
            </div>

            <?php the_content() ?>
        </div>
    </div>
</div>