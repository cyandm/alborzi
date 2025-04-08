<?php

if (!class_exists('cyn_customize')) {
	class cyn_customize
	{
		function __construct()
		{
			add_action('customize_register', [$this, 'cyn_basic_settings']);
		}

		public function cyn_basic_settings($wp_customize)
		{

			$this->cyn_register_panel_general($wp_customize);
			$this->cyn_register_panel_header($wp_customize);
			$this->cyn_register_panel_footer($wp_customize);
		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control($wp_customize, $section, $type, $id, $label, $description = '')
		{
			$wp_customize->add_setting(
				$id,
				['type' => 'option']
			);


			if ($type == "file") {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ($type != 'file') {
				$wp_customize->add_control(
					$id,
					[
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_general($wp_customize)
		{

			$wp_customize->add_panel(
				'general',
				[
					'title' => 'تنظیمات تم - عمومی',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'404_img',
				[
					'title' => 'لوگو 404',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, '404_img', 'file', "cyn_custom_404_logo", "لوگو 404");
			$this->cyn_add_control($wp_customize, '404_img', 'text', "404_link", "لینک 404");


		}

		private function cyn_register_panel_header($wp_customize)
		{

			$wp_customize->add_panel(
				'cyn_header_panel',
				[
					'title' => 'تنظیمات هدر',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'desktop_header_section',
				[
					'title' => 'هدر',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_header_section', 'text', 'desktop_header_phone', ' شماره تماس');

			$wp_customize->add_section(
				'desktop_menu_section',
				[
					'title' => 'منو دسکتاپ',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "title_persian_link", "لینک سوالات متداول فارسی");
			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "title_english_link", "لینک سوالات متداول انگلیسی");

			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'desktop_menu_phone', ' شماره تماس');
			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'desktop_menu_mail', 'ایمیل');
			for ($i = 1; $i <= 4; $i++) {
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'file', "icon_img_$i", "آیکون شبکه اجتماعی $i");
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "icon_text_$i", "لینک شبکه اجتماعی $i");
			}

			$wp_customize->add_section(
				'blog_hero_section',
				[
					'title' => 'هدر بلاگ',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);
			$this->cyn_add_control($wp_customize, 'blog_hero_section', 'file', "blog_img_desktop", "تصویر هیرو بلاگ دسکتاپ");
			$this->cyn_add_control($wp_customize, 'blog_hero_section', 'file', "blog_img_mobile", "تصویر هیرو بلاگ موبایل");

			$wp_customize->add_section(
				'portfolio_hero_section',
				[
					'title' => 'هدر نمونه کار',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);
			$this->cyn_add_control($wp_customize, 'portfolio_hero_section', 'file', "portfolio_img", "وکتور هیرو نمونه کار");
		}

		private function cyn_register_panel_footer($wp_customize)
		{

			$wp_customize->add_panel(
				'cyn_footer_panel',
				[
					'title' => 'تنظیمات فوتر',
					'priority' => 1
				]
			);


			$wp_customize->add_section(
				'desktop_footer_col_6',
				[
					'title' => 'تنظیمات ستون آدرس',
					'priority' => 2,
					'panel' => 'cyn_footer_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_footer_col_6', 'textarea', 'footer_persian_address', 'آدرس فارسی');
			$this->cyn_add_control($wp_customize, 'desktop_footer_col_6', 'textarea', 'footer_english_address', 'آدرس انگلیسی');

		}
	}
}