<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "r_nikolay";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'r_nikolay',
        'dev_mode' => TRUE,
        'use_cdn' => TRUE,
        'page_title' => 'Настройки темы',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Настройки темы',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    

    Redux::setArgs( $opt_name, $args );
/*
  * ---> END ARGUMENTS
  */

    


/*
  *
  * ---> START SECTIONS
  *
  */

############################# Главная вкладка
Redux::setSection( $opt_name, array(
    'title'  => 'Основные настройки - первая вкладка',
    'id'     => 'basic',
    'desc'   => 'Basic field with no subsections.',
    'icon'   => 'el el-home',
    'fields' => array(
        array(     // с переносом строк
            'id'      => 'address',
            'type'    => 'editor',
            'title'   => 'Адрес в шапке сайта',
            'args'    => array(
                'wpautop'       => false,
                'media_buttons' => false,
                'textarea_rows' => 3,
                'teeny'         => false,
                'quicktags'     => false,
            ),
            'full_width'        => true,
          ),
        array(
            'id'       => 'phone',
            'type'     => 'text',
            'title'    => 'Телефон',
            // 'desc'     => 'Example description.',
            'subtitle'   => 'Шапка сайта',
        ),
        // array(
        //   'id'       => 'mail',
        //   'type'     => 'text',
        //   'title'    => 'E-mail',
        //   'subtitle'   => 'Подвал сайта и секция «Контакты»',
        // ),
        array(
          'id'       => 'work',
          'type'     => 'text',
          'title'    => 'Время работы',
          'subtitle'   => 'Шапка сайта',
        ),
        // array(     // с переносом строк
        //   'id'       => 'our_advantages',
        //   'type'     => 'editor',
        //   'title'    => 'Наши преимущества',
        //   'subtitle' => 'Находятся в подвале сайта',
        //   'args'     => array(
        //       'wpautop'       => false,
        //       'media_buttons' => false,
        //       'textarea_rows' => 6,
        //       'teeny'         => false,
        //       'quicktags'     => false,
        //   ),
        //   'full_width'        => true,
        // ),

    )
) );

// Заголовки
Redux::setSection( $opt_name, array(
    'title' => 'Основные настройки',
    'id'    => 'basic',
    'desc'  => 'Данные, которые выводятся на всех страницах',
    'icon'  => 'el el-home'
) );


// 2
Redux::setSection( $opt_name, array(
    'title'      => 'Ссылки на соц. сети',
    // 'desc'       => 'Описание',
    'id'         => 'soclincs',
    'subsection' => true,
    'fields'     => array(
        // array(
        //   'id'       => 'my_vk',
        //   'type'     => 'text',
        //   'title'    => 'Ссылка на vk',
        // ),
        // array(
        //   'id'       => 'my_telega',
        //   'type'     => 'text',
        //   'title'    => 'Ссылка на telegram',
        // ),
        array(
          'id'       => 'my_twitter',
          'type'     => 'text',
          'title'    => 'Ссылка на twitter',
        ),
        array(
          'id'       => 'my_facebook',
          'type'     => 'text',
          'title'    => 'Ссылка на facebook',
        ),
        array(
          'id'       => 'my_pinterest',
          'type'     => 'text',
          'title'    => 'Ссылка на pinterest',
        ),
        // array(
        //   'id'       => 'my_youtube',
        //   'type'     => 'text',
        //   'title'    => 'Ссылка на youtube',
        // ),
        // array(
        //   'id'       => 'my_instagram',
        //   'type'     => 'text',
        //   'title'    => 'Ссылка на instagram',
        // ),
    )
) );

// 3
Redux::setSection( $opt_name, array(
    'title'      => 'Контакты',
    'desc'       => 'Адреса. Выводятся в подвале сайта',
    'id'         => 'bg-main',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'place',
            'type'     => 'text',
            'title'    => 'Название',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_addr',
            'type'     => 'text',
            'title'    => 'Адрес',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_phone',
            'type'     => 'text',
            'title'    => 'Адрес',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
          'id'       => 'bg-main-1',
          'type'     => 'media',
          'url'      => true,
          'title'    => 'Изображение',
          'compiler' => 'true',
          // 'desc'     => 'descr',
          // 'subtitle' => 'subtitle',
        ),
        
    )
) );



############################# ВТОРАЯ ВКЛАДКА

// ВТОРАЯ ГЛАВНАЯ ВКЛАДКА
Redux::setSection( $opt_name, array(
    'title' => 'Адреса',
    'id'    => 'two',
    'desc'  => 'Данные, которые выводятся на всех страницах',
    'icon'  => 'el el-home'
) );

// 1
Redux::setSection( $opt_name, array(
    'title'      => 'Адрес-1',
    'id'         => 'media-1',
    'desc'       => '',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'place',
            'type'     => 'text',
            'title'    => 'Название',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_addr',
            'type'     => 'text',
            'title'    => 'Адрес',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_phone',
            'type'     => 'text',
            'title'    => 'Телефон',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'bg-main-1',
            'type'     => 'media',
            'url'      => true,
            'title'    => 'Изображение',
            'compiler' => 'true',
            // 'desc'     => 'descr',
            // 'subtitle' => 'subtitle',
        ),
    )
) );

// 2
Redux::setSection( $opt_name, array(
    'title'      => 'Адрес-2',
    'id'         => 'media-2',
    'desc'       => '',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'place2',
            'type'     => 'text',
            'title'    => 'Название',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_addr2',
            'type'     => 'text',
            'title'    => 'Адрес',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_phone2',
            'type'     => 'text',
            'title'    => 'Телефон',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'bg-main-2',
            'type'     => 'media',
            'url'      => true,
            'title'    => 'Изображение',
            'compiler' => 'true',
            // 'desc'     => 'descr',
            // 'subtitle' => 'subtitle',
        ),
    )
) );

// 3
Redux::setSection( $opt_name, array(
    'title'      => 'Адрес-3',
    'id'         => 'media-3',
    'desc'       => '',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'place3',
            'type'     => 'text',
            'title'    => 'Название',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_addr3',
            'type'     => 'text',
            'title'    => 'Адрес',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'place_phone3',
            'type'     => 'text',
            'title'    => 'Телефон',
            // 'subtitle'   => 'Шапка сайта',
        ),
        array(
            'id'       => 'bg-main-3',
            'type'     => 'media',
            'url'      => true,
            'title'    => 'Изображение',
            'compiler' => 'true',
            // 'desc'     => 'descr',
            // 'subtitle' => 'subtitle',
        ),
    )
) );
