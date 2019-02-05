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
        'page_title' => 'Редактировать лэндинг здесь',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Редактировать лэндинг здесь',
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
     * ---> START HELP TABS
     */

    // $tabs = array(
    //     array(
    //         'id'      => 'redux-help-tab-1',
    //         'title'   => __( 'Theme Information 1', 'admin_folder' ),
    //         'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
    //     )
    // );
    // Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    // $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    // Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

     // ПАНЕЛЬ Лого_____________________________________________________________
      Redux::setSection( $opt_name, array(
        'title'      => 'Логотипы',
        'desc'       => '',
        'id'         => 'logos',
        'icon'  => 'el el-picture',
        'fields'     => array(
            array(
              'id'       => 'logo-top',
              'type'     => 'media', 
              'url'      => true,
              'title'    => 'Лого в шапке',
            ),
            array(
              'id'       => 'logo-footer',
              'type'     => 'media', 
              'url'      => true,
              'title'    => 'Лого в подвале',
            ),
        )
    ) );



    
    // ПАНЕЛЬ Контакты _____________________________________________________________
    Redux::setSection( $opt_name, array(
        'title' => 'Контакты', 'redux-framework-demo',
        'id'    => 'contacts-tab',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-phone',
        array(
          'id'       => 'contacts',
          'type'     => 'text',
      )
    ) );
    // Телефоны
    Redux::setSection( $opt_name, array(
        'title'      => 'Телефоны',
        'desc'       => '',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
              'id'       => 'phone1',
              'type'     => 'text',
              'title'    => 'Телефон Учебный отдел',
            ),
            array(
              'id'       => 'phone2',
              'type'     => 'text',
              'title'    => 'Бесплатно по России',
              'desc'     => 'Выводится также в секции с контактами над подвалом и в подвале сайта',
            ),
            array(
              'id'       => 'phone3',
              'type'     => 'text',
              'title'    => 'Телефон для соц. сетей',
            ),
            array(
              'id'       => 'phone4',
              'type'     => 'text',
              'title'    => 'Второй телефон - в подвале сайта',
            ),
        )
    ) );
    // Адрес
    Redux::setSection( $opt_name, array(
        'title'      => 'Адрес',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
              'title'    => 'Адрес в подвале',
              'id'       => 'textarea-address',
              'type'     => 'textarea',
              'full_width' => true,
              'desc'       => 'Выводится в подвале',
            ),
            array(
              'title'    => 'Адрес на яндекс-карте',
              'id'       => 'textarea-address2',
              'type'     => 'textarea',
              'full_width' => true,
              'desc'       => 'Выводится на карте',
            ),
            array(
              'title'    => 'Время работы',
              'id'       => 'textarea-time',
              'type'     => 'text',
              'full_width' => true,
              'desc'       => 'Выводится на карте',
            ),
            array(
              'title'    => 'E-mail',
              'id'       => 'email-address',
              'type'     => 'text',
              'desc'     => 'Выводится в секции с контактами над подвалом и в подвале сайта',
              'full_width' => true,
            ),
        )
    ) );
    // Соц. сети
    Redux::setSection( $opt_name, array(
      'title'      => 'Социальные сети',
      'desc'       => 'Контакты в социальных сетях (находятся в подвале сайта)',
      'id'         => 'opt-text-soc',
      'subsection' => true,
      'fields'     => array(
          array(
            'id'       => 'soc-vk',
            'type'     => 'text',
            'title'    => 'Ссылка на vk.com',
          ),
          array(
            'id'       => 'soc-face',
            'type'     => 'text',
            'title'    => 'Ссылка на facebook',
          ),
          array(
            'id'       => 'soc-insta',
            'type'     => 'text',
            'title'    => 'Сыылка на instagram',
          ),
      )
  ) );


    // // ПАНЕЛЬ Первый экран _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Первый экран',
      'id'    => 'firstsdfs-tab',
      'desc'  => 'Basic fields as subsections.',
      'icon'  => 'el el-home',
      'fields' => array(
        array(
          'id'       => 'first-tab-text1',
          'type'     => 'editor',
          'title'    => 'Приветсвие',
          'full_width' => true,
          'args'    => array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny'         => false,
            'quicktags'     => false,
          )
        ),
        array(
          'id'               => 'first-tab-text2',
          'type'             => 'editor',
          'title'            => 'Чем занимаемся', 
          'subtitle'         => 'Пункты списка',
          'full_width' => true,
          'args'    => array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny'         => false,
            'quicktags'     => false,
          )
        ),
        array(
          'id'               => 'first-tab-text3',
          'type'             => 'editor',
          'full_width' => true,
          'title'            => 'Проводим обучение',
          'args'    => array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny'         => false,
            'quicktags'     => false,
          )
        ),
        array(
          'id'               => 'first-tab-text4',
          'type'             => 'editor',
          'title'            => 'Текст под кнопкой',
          'full_width' => true,
          'args'    => array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny'         => false,
            'quicktags'     => false,
          )
        ),
      )
    ) );



    // // ПАНЕЛЬ Наши преимущества _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Наши преимущества',
      'id'    => 'advantages',
      'desc'  => 'Подпись к иконкам',
      'icon'  => 'el el-ok',
      'fields' => array(
        array(
          'id'       => 'adv-titlee',
          'type'     => 'text',
          'title'    => 'Заголовок секции',
        ),
        array(
          'id'       => 'adv-item-1-text',
          'type'     => 'editor',
          'title'    => 'Текст для 1 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-2-text',
          'type'     => 'editor',
          'title'    => 'Текст для 2 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-3-text',
          'type'     => 'editor',
          'title'    => 'Текст для 3 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-4-text',
          'type'     => 'editor',
          'title'    => 'Текст для 4 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-5-text',
          'type'     => 'editor',
          'title'    => 'Текст для 5 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-6-text',
          'type'     => 'editor',
          'title'    => 'Текст для 6 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-7-text',
          'type'     => 'editor',
          'title'    => 'Текст для 7 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
        array(
          'id'       => 'adv-item-8-text',
          'type'     => 'editor',
          'title'    => 'Текст для 8 элемента',
          'args'   => array(
              'teeny'            => true,
              'textarea_rows'    => 4,
              'media_buttons'    => false
          )
        ),
      ),
      )
    );




    // Секция документация _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Имеем внушительную документацию',
      'id'    => 'section-docs1',
      'desc'  => 'Basic fields as subsections.',
      'icon'  => 'el el-book',
      array(
        'id'       => 'docs1',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'docs1-title-main',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'docs1-title-h2',
          'type'     => 'textarea',
          'full_width' => true,
        ),
      )
    ) );
    // Текст
    Redux::setSection( $opt_name, array(
      'title'      => 'Подписи к лицензиям',
      'desc'       => '',
      'id'         => 'docs1-text',
      'subsection' => true,
      'fields'     => array(
          array(
              'id'       => 'docs1-text1',
              'type'     => 'text',
              'title'    => 'Название документа-1',
          ),
          array(
            'id'       => 'docs1-text2',
            'type'     => 'text',
            'title'    => 'Название документа-2',
          ),
          array(
            'id'       => 'docs1-text3',
            'type'     => 'text',
            'title'    => 'Название документа-3',
          ),
          array(
            'id'       => 'docs1-text4',
            'type'     => 'text',
            'title'    => 'Название документа-4',
          ),
          array(
            'id'       => 'docs1-text5',
            'type'     => 'text',
            'title'    => 'Название документа-5',
          ),
          array(
            'id'       => 'docs1-text6',
            'type'     => 'text',
            'title'    => 'Название документа-6',
          ),
          array(
            'id'       => 'docs1-text7',
            'type'     => 'text',
            'title'    => 'Название документа-7',
          ),
          array(
            'id'       => 'docs1-text8',
            'type'     => 'text',
            'title'    => 'Название документа-8',
          ),
          array(
            'id'       => 'docs1-text9',
            'type'     => 'text',
            'title'    => 'Название документа-9',
          ),
      )
    ) );
    // Картинки
    Redux::setSection( $opt_name, array(
        'title'      => 'Изображения',
        'desc'       => 'Изображения документов',
        'id'         => 'docs1-img',
        'subsection' => true,
        'fields'     => array(
          array(
            'id'       => 'docs1-img1',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-1',
          ),
          array(
            'id'       => 'docs1-img2',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-2',
          ),
          array(
            'id'       => 'docs1-img3',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-3',
          ),
          array(
            'id'       => 'docs1-img4',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-4',
          ),
          array(
            'id'       => 'docs1-img5',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-5',
          ),
          array(
            'id'       => 'docs1-img6',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-6',
          ),
          array(
            'id'       => 'docs1-img7',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-7',
          ),
          array(
            'id'       => 'docs1-img8',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-8',
          ),
          array(
            'id'       => 'docs1-img9',
            'type'     => 'media', 
            'url'      => true,
            'title'    => 'Изображение-9',
          ),
        )
    ) );
    // Текст под секцией
    Redux::setSection( $opt_name, array(
      'title'      => 'Текст под секцией',
      'id'         => 'docs1-bottom-txt',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'docs1-text-bottom',
          'type'     => 'textarea',
          'full_width' => true,
        ),
      )
    ) );





    // Секция преподы _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Преподаватели',
      'id'    => 'section-teachers',
      'desc'  => 'Basic fields as subsections.',
      'icon'  => 'el el-user',
      array(
        'id'       => 'teach',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'teach-title-main',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'teach-title-h2',
          'type'     => 'textarea',
          'full_width' => true,
        ),
      )
    ) );
    // Фотки преподов
    Redux::setSection( $opt_name, array(
      'title'      => 'Фотографии',
      'desc'       => 'Фотографии преподавателей',
      'id'         => 'teach-photo-img',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'teach-photo-img1',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-1',
        ),
        array(
          'id'       => 'teach-photo-img2',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-2',
        ),
        array(
          'id'       => 'teach-photo-img3',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-3',
        ),
        array(
          'id'       => 'teach-photo-img4',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-4',
        ),
        array(
          'id'       => 'teach-photo-img5',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-5',
        ),
        array(
          'id'       => 'teach-photo-img6',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-6',
        ),
        array(
          'id'       => 'teach-photo-img7',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-7',
        ),
        array(
          'id'       => 'teach-photo-img8',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-8',
        ),
        array(
          'id'       => 'teach-photo-img9',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение-9',
        ),
      )
    ) );
    // Ф.И.О
    Redux::setSection( $opt_name, array(
      'title'      => 'Ф.И.О',
      'desc'       => 'Ф.И.О преподавателя',
      'id'         => 'teach-fio-text',
      'subsection' => true,
      'fields'     => array(
          array(
            'id'       => 'teach-fio-text1',
            'type'     => 'editor',
            'title'    => 'Преподаватель-1',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text2',
            'type'     => 'editor',
            'title'    => 'Преподаватель-2',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text3',
            'type'     => 'editor',
            'title'    => 'Преподаватель-3',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text4',
            'type'     => 'editor',
            'title'    => 'Преподаватель-4',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text5',
            'type'     => 'editor',
            'title'    => 'Преподаватель-5',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text6',
            'type'     => 'editor',
            'title'    => 'Преподаватель-6',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text7',
            'type'     => 'editor',
            'title'    => 'Преподаватель-7',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text8',
            'type'     => 'editor',
            'title'    => 'Преподаватель-8',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
          array(
            'id'       => 'teach-fio-text9',
            'type'     => 'editor',
            'title'    => 'Преподаватель-9',
            'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 5,
              'teeny'         => false,
              'quicktags'     => false,
            )
          ),
      )
    ) );



    // Секция обр. программы _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Образовательные программы',
      'id'    => 'section-programs',
      'desc'  => 'Секция Образовательные программы',
      'icon'  => 'el el-pencil',
      array(
        'id'       => 'programs',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'programs-title',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'programs-title-h2',
          'type'     => 'textarea',
        ),
        array(
          'id'       => 'programs-descr-p',
          'type'     => 'textarea',
          'title'    => 'Описание под заголовком',
        ),
      )
    ) );
    // Первый блок списка
    Redux::setSection( $opt_name, array(
      'title'      => 'Первая вкладка',
      'desc'       => 'Контент для первой вкладки',
      'id'         => 'programs-left',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'programs-left1-text',
          'type'     => 'text',
          'title'    => 'Заголовок для контента первой вкладки',
        ),
        array(
          'id'       => 'programs-left1',
          'type'     => 'editor',
          'title'    => 'Контент-1 для первой вкладки',
          'args' => array(
            'rows' => '9'
          ),
        ),
        array(
          'id'       => 'programs-left2',
          'type'     => 'editor',
          'title'    => 'Контент-2 для первой вкладки',
        ),
        'args' => array(
          'rows' => '9'
        ),
      )
    ) );
    // Второй блок списка
    Redux::setSection( $opt_name, array(
      'title'      => 'Вторая вкладка',
      'desc'       => 'Контент для второй вкладки',
      'id'         => 'programs-right',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'programs-right1-text',
          'type'     => 'text',
          'title'    => 'Заголовок для контента второй вкладки',
        ),
        array(
          'id'       => 'programs-right1',
          'type'     => 'editor',
          'title'    => 'Контент-1 для второй вкладки',
          'args' => array(
            'rows' => '9'
          ),
        ),
        array(
          'id'       => 'programs-right2',
          'type'     => 'editor',
          'title'    => 'Контент-2 для второй вкладки',
          'args' => array(
            'rows' => '9'
          ),
        ),
      )
    ) );



    // Секция Как мы работаем _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Как мы работаем',
      'id'    => 'section-how-works',
      'desc'  => 'Секция Как мы работаем',
      'icon'  => 'el el-child',
      array(
        'id'       => 'how-works',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'how-works-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'how-works-h2',
          'type'     => 'text',
        ),
      )
    ) );
    // Шаг-1
    Redux::setSection( $opt_name, array(
      'title'      => 'Шаг-1',
      'desc'       => 'Заголовок и текст для шага 1',
      'id'         => 'works-step1',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'works-step1-title',
          'type'     => 'text',
          'title'    => 'Заголовок для 1 шага',
        ),
        array(
          'id'       => 'works-step1-text',
          'type'     => 'editor',
          'full_width' => true,
          'title'    => 'Текст для 1 шага',
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array(),
          ),
          'args'    => array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_rows' => 5,
            //'tabindex' => 1,
            //'editor_css' => '',
            'teeny'         => false,
            //'tinymce' => array(),
            'quicktags'     => false,
        )
        ),
      )
    ) );
    // Шаг-2
    Redux::setSection( $opt_name, array(
      'title'      => 'Шаг-2',
      'desc'       => 'Заголовок и текст для шага 2',
      'id'         => 'works-step2',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'works-step2-title',
          'type'     => 'text',
          'title'    => 'Заголовок для 2 шага',
        ),
        array(
          'id'       => 'works-step2-text',
          'type'     => 'editor',
          'title'    => 'Текст для 2 шага',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          )
        ),
      )
    ) );
    // Шаг-3
    Redux::setSection( $opt_name, array(
      'title'      => 'Шаг-3',
      'desc'       => 'Заголовок и текст для шага 3',
      'id'         => 'works-step3',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'works-step3-title',
          'type'     => 'text',
          'title'    => 'Заголовок для 3 шага',
        ),
        array(
          'id'       => 'works-step3-text',
          'type'     => 'editor',
          'title'    => 'Текст для 3 шага',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          )
        ),
      )
    ) );
    // Шаг-4
    Redux::setSection( $opt_name, array(
      'title'      => 'Шаг-4',
      'desc'       => 'Заголовок и текст для шага 4',
      'id'         => 'works-step4',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'works-step4-title',
          'type'     => 'text',
          'title'    => 'Заголовок для 4 шага',
        ),
        array(
          'id'       => 'works-step4-text',
          'type'     => 'editor',
          'title'    => 'Текст для 4 шага',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          )
        ),
      )
    ) );
    // Шаг-5
    Redux::setSection( $opt_name, array(
      'title'      => 'Шаг-5',
      'desc'       => 'Заголовок и текст для шага 5',
      'id'         => 'works-step5',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'works-step5-title',
          'type'     => 'text',
          'title'    => 'Заголовок для 5 шага',
        ),
        array(
          'id'       => 'works-step5-text',
          'type'     => 'editor',
          'title'    => 'Текст для 5 шага',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          )
        ),
      )
    ) );


    // Скачайте каталог _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Скачайте каталог',
      'id'    => 'section-download',
      'desc'  => 'Секция Скачайте каталог',
      'icon'  => 'el el-download-alt',
      array(
        'id'       => 'download',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'download-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'download-h2',
          'type'     => 'textarea',
          'full_width' => true,
        ),
      )
    ) );



    // Сертификаты _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Сертификаты',
      'id'    => 'section-sertif',
      'desc'  => 'Секция Сертификаты',
      'icon'  => 'el el-check',
      array(
        'id'       => 'sertif',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'sertif-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'sertif-h2',
          'type'     => 'textarea',
          'full_width' => true,
        ),
      )
    ) );
    // Первый документ
    Redux::setSection( $opt_name, array(
      'title'      => 'Первый документ',
      'desc'       => 'Заполнение первого документа',
      'id'         => 'serf1',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'serf-scan-img1',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение',
        ),
        array(
          'id'       => 'serf-title-1',
          'type'     => 'text',
          'title'    => 'Заголовок для первого документа',
        ),
        array(
          'id'       => 'serf-text-1',
          'type'     => 'editor',
          'title'    => 'Текст для первого документа',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          ),
          'args'   => array(
            'teeny'            => true,
            'media_buttons' => false,
          )
        ),
      )
    ) );
    // Второй документ
    Redux::setSection( $opt_name, array(
      'title'      => 'Второй документ',
      'desc'       => 'Заполнение второго документа',
      'id'         => 'serf2',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'serf-scan-img2',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение',
        ),
        array(
          'id'       => 'serf-title-2',
          'type'     => 'text',
          'title'    => 'Заголовок для второго документа',
        ),
        array(
          'id'       => 'serf-text-2',
          'type'     => 'editor',
          'title'    => 'Текст для второго документа',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          ),
          'args'   => array(
            'teeny'            => true,
            'media_buttons' => false,
          )
        ),
      )
    ) );
    // Третий документ
    Redux::setSection( $opt_name, array(
      'title'      => 'Третий документ',
      'desc'       => 'Заполнение третьего документа',
      'id'         => 'serf3',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'serf-scan-img3',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Изображение',
        ),
        array(
          'id'       => 'serf-title-3',
          'type'     => 'text',
          'title'    => 'Заголовок для третьего документа',
        ),
        array(
          'id'       => 'serf-text-3',
          'type'     => 'editor',
          'title'    => 'Текст для третьего документа',
          'full_width' => true,
          'allowed_html' => array(
            'br' => array(),
            'em' => array(),
            'strong' => array()
          ),
          'args'   => array(
            'teeny'         => true,
            'media_buttons' => false,
          )
        ),
      )
    ) );



    // Логотипы _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция с логотипами',
      'id'    => 'section-logos',
      'desc'  => 'Секция с логотипами организаций',
      'icon'  => 'el el-idea',
      array(
        'id'       => 'logos',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции',
      'id'         => 'logos-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'logos-h2',
          'type'     => 'textarea',
          'full_width' => true
        ),
      )
    ) );
    // Фотки преподов
    Redux::setSection( $opt_name, array(
      'title'      => 'Логотипы',
      'desc'       => 'Изображения логотипов',
      'id'         => 'logo-img',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'logo-img1',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 1',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img2',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 2',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img3',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 3',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img4',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 4',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img5',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 5',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img6',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 6',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img7',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 7',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img8',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 8',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img9',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 9',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'logo-img10',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Логотип - 10',
          'compiler' => 'true',
        ),
      )
    ) );



    // Благодарственные письма _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Благодарственные письма',
      'id'    => 'section-letter',
      'desc'  => 'Секция Благодарственные письма',
      'icon'  => 'el el-envelope',
      array(
        'id'       => 'letter',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции Благодарственные письма',
      'id'         => 'letter-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'letter-h2',
          'type'     => 'textarea',
          'full_width' => true
        ),
      )
    ) );
    // Благодарственные письма фотки
    Redux::setSection( $opt_name, array(
      'title'      => 'Благодарственные письма',
      'desc'       => 'Сканированные изображения',
      'id'         => 'letter-img',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'letter-img1',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Письмо - 1',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'letter-img2',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Письмо - 2',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'letter-img3',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Письмо - 3',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'letter-img4',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Письмо - 4',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'letter-img5',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Письмо - 5',
          'compiler' => 'true',
        ),
      )
    ) );



    // Отзывы _____________________________________________________________
    Redux::setSection( $opt_name, array(
      'title' => 'Секция Отзывы',
      'id'    => 'section-comments',
      'desc'  => 'Секция Отзывы',
      'icon'  => 'el el-glasses',
      array(
        'id'       => 'comments',
        'type'     => 'text',
      )
    ) );
    // Заголовок секции
    Redux::setSection( $opt_name, array(
      'title'      => 'Заголовок секции Отзывы',
      'id'         => 'comments-id',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comments-h2',
          'type'     => 'textarea',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 1 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 1',
      'desc'       => 'Заполнение 1 отзыва',
      'id'         => 'comment-1',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-1-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-1-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-1-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-1-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 2 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 2',
      'desc'       => 'Заполнение 2 отзыва',
      'id'         => 'comment-2',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-2-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-2-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-2-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-2-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 3 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 3',
      'desc'       => 'Заполнение 3 отзыва',
      'id'         => 'comment-3',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-3-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-3-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-3-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-3-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 4 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 4',
      'desc'       => 'Заполнение 4 отзыва',
      'id'         => 'comment-4',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-4-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-4-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-4-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-4-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 5 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 5',
      'desc'       => 'Заполнение 5 отзыва',
      'id'         => 'comment-5',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-5-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-5-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-5-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-5-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 6 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 6',
      'desc'       => 'Заполнение 6 отзыва',
      'id'         => 'comment-6',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-6-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-6-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-6-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-6-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 7 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 7',
      'desc'       => 'Заполнение 7 отзыва',
      'id'         => 'comment-7',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-7-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-7-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-7-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-7-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 8 
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 8',
      'desc'       => 'Заполнение 8 отзыва',
      'id'         => 'comment-8',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-8-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-8-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-8-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-8-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );
    // Отзыв - 9
    Redux::setSection( $opt_name, array(
      'title'      => 'Отзыв - 9',
      'desc'       => 'Заполнение 9 отзыва',
      'id'         => 'comment-9',
      'subsection' => true,
      'fields'     => array(
        array(
          'id'       => 'comment-9-img',
          'type'     => 'media', 
          'url'      => true,
          'title'    => 'Фотография',
          'compiler' => 'true',
        ),
        array(
          'id'       => 'comment-9-name',
          'type'     => 'text',
          'title'    => 'Фамилия, Имя',
        ),
        array(
          'id'       => 'comment-9-post',
          'type'     => 'text',
          'title'    => 'Должность',
        ),
        array(
          'id'       => 'comment-9-message',
          'type'     => 'textarea',
          'title'    => 'Текст отзыва',
          'full_width' => true
        ),
      )
    ) );




    // Мета
    Redux::setSection( $opt_name, array(
      'title'      => 'Мета даннные',
      'desc'       => '',
      'id'         => 'meta',
      'icon'  => 'el el-key',
      'fields'     => array(
          array(
            'id'       => 'meta1',
            'type'     => 'textarea',
            'title'    => 'Мета данные',
            'full_width' => true
          ),
          array(
            'id'       => 'meta2',
            'type'     => 'textarea',
            'title'    => 'Код счётчика',
            'full_width' => true
          ),
      )
  ) );



  // Скидка
  Redux::setSection( $opt_name, array(
    'title'      => 'Скидка в форме Расчёт стоимости',
    'desc'       => '',
    'id'         => 'discont',
    'icon'  => 'el el-magic',
    'fields'     => array(
        array(
          'id'       => 'discont1',
          'type'     => 'textarea',
          'title'    => 'Текстовое поле со скидкой',
          'full_width' => true
        ),
    )
) );