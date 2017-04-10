<?php
return [
    'view' => 'theme',
    'setting' => [
        /* section 일반 */
        'main_menu' => [
            '_section' => '일반',
            '_type' => 'menu',
            'label' => '메인 메뉴'
        ],
        'footer_menu' => [
            '_section' => '일반',
            '_type' => 'menu',
            'label' => '하단 메뉴'
        ],
        'colorset' => [
            '_type' => 'select',
            '_section' => '일반',
            'label' => '컬러셋',
            'description' => '메인 점보트론, 버튼 등의 전체 레이아웃의 색상을 정할 수 있습니다.',
            'options' => [
                'info' => '하늘색',
                'primary' => '파랑색',
                'success' => '초록색',
                'warning' => '노란색',
                'danger' => '빨간색',
            ]
        ],
        'logo_title' => [
            '_type' => 'text',
            '_section' => '일반',
            'label' => '홈페이지 이름 ',
            'description' => '상단 메뉴에 표시될 홈페이지 이름을 입력하세요.',
        ],
        'index_url' => [
            '_type' => 'text',
            '_section' => '일반',
            'label' => '홈페이지 주소 ',
            'description' => '홈페이지 이름을 클릭 시 이동 할 URL을 입력하세요.',
        ],
        'logo_img' => [
            '_type' => 'text',
            '_section' => '일반',
            'label' => '홈페이지 주소',
            'description' => '홈페이지 이름을 클릭 시 이동 할 URL을 입력하세요.',
        ],
        'logo_img' => [
            '_type' => 'image',
            '_section' => '일반',
            'label' => '로고 이미지',
            'description' => '(옵션) 홈페이지 이름 대신 표시될 이미지를 올려주세요. (권장 높이 50px)',
        ],
        'site_frame' => [
            '_type' => 'select',
            '_section' => '일반',
            'label' => '프레임 형태',
            'description' => '서브 사이드바를 사용할 경우 \'./plugins/simplestrap/ ~~~ 검토 필요 ~~~ custom/custom_sub_sidebar.html\' 경로에 서브 사이드바에 추가할 내용을 업로드 해야 합니다.',
            'options' => [
                'sidebar_content' => '사이드바 + 컨텐츠',
                'content_sidebar' => '컨텐츠 + 사이드바',
                'content' => '컨텐츠',
                'sidebar_content_sidebar' => '사이드바 + 컨텐츠 + 서브 사이드바'
            ]
        ],
        'sb_col' => [
            '_type' => 'select',
            '_section' => '일반',
            'label' => '프레임 비율',
            'description' => '* 사이드바: 컨텐츠 (프레임 형태가 \'컨텐츠\' 혹은 \'서브 사이드바\'가 포함될 경우에 작동하지 않습니다.)',
            'options' => [
                '2' => '(1:5) 16% : 84%',
                '3' => '(1:3) 25% : 75%',
                '4' => '(1:2) 33% : 67%',
                '5' => '(5:7) 42% : 58%',
                '6' => '(1:1) 50% : 50%',
            ]
        ],
        'site_frame_content' => [
            '_type' => 'text',
            '_section' => '일반',
            'label' => '프레임 고정 모듈',
            'description' => '\'컨텐츠\' 프레임으로 고정할 모듈 ID를 입력하세요. 쉼표로 구분합니다. 예) home,main,content',
        ],
        'use_breadcrumb' => [
            '_type' => 'select',
            '_section' => '일반',
            'label' => '빵 메뉴',
            'description' => '메뉴 위치를 알려주는 빵 메뉴를 사용합니다.',
            'options' => [
                'N' => '사용 안 함',
                'Y' => '사용',
            ],
        ],

        /* section 상단바 */
        'navbar_fixed' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '상단바 고정',
            'description' => '상단바를 항상 상단에 고정합니다.',
            'options' => [
                'Y' => '예',
                'N' => '아니요',
            ]
        ],
        'navbar_color' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '상단바 색상',
            'options' => [
                '' => '흰색',
                'inverse' => '검정',
            ]
        ],
        'navbar_border_bottom' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '상단바 하단 테두리',
            'description' => '상단바에 컬러셋에서 지정한 색상으로 하단 테두리를 표시합니다.',
            'options' => [
                'Y' => '사용',
                'N' => '사용 안 함',
            ],
        ],
        'navbar_search' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '통합 검색 버튼',
            'description' => '상단바에 통합 검색 기능을 추가합니다.',
            'options' => [
                'Y' => '예, 버튼으로 표시합니다.',
                'Y2' => '예, 상단바에 직접 표시합니다.',
                'N' => '사용 안 함',
            ],
        ],
        'navbar_login' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '상단바 로그인 버튼',
            'description' => '* 주의: 사용하지 않을 경우 레이아웃 내에서 로그인을 할 수 없으며 관리자는 /admin 등 으로 접근하여야 합니다. (사이트 로그인이 완벽히 차단되지는 않습니다.)',
            'options' => [
                'Y' => '사용',
                'N' => '사용 안 함',
            ],
        ],
        'navbar_sm_dropdown' => [
            '_section' => '상단바',
            '_type' => 'select',
            'label' => '[모바일] 모든 메뉴 표시',
            'description' => '모바일에서 상단바에 표시되는 2차 메뉴를 모두 보여줍니다.',
            'options' => [
                'N' => '아니요',
                'Y' => '예'
            ]
        ],


        /* section 사이드바 */
        'sb_menu' => [
            '_section' => '사이드바',
            '_type' => 'select',
            'label' => '하위 메뉴 출력',
            'description' => '사이드바에 하위 메뉴를 표시합니다.',
            'options' => [
                'N' => '아니요',
                'Y' => '예',
            ]
        ],
        'sb_post' => [
            '_section' => '사이드바',
            '_type' => 'select',
            'label' => '최신 글 출력',
            'description' => '사이드바에 최신 글 위젯을 표시합니다. (* Content 위젯 스킨이 필요합니다.)',
            'options' => [
                'Y' => '예',
                'N' => '아니요'
            ]
        ],
        'sb_post_count' => [
            '_section' => '사이드바',
            '_type' => 'text',
            'label' => '최신 글 출력 갯수',
            'description' => '최신 글 리스트를 출력할 갯수를 정해주세요. (기본 5개)',
        ],
        'sb_post_module' => [
            '_section' => '사이드바',
            '_type' => 'text',
            'label' => '최신 글 출력 모듈 번호',
            'description' => '최신 글을 출력할 모듈 번호를 입력합니다. 비워둘 경우 모든 게시물이 출력됩니다. (쉼표로 구분합니다.)',
        ],
        'sb_comm' => [
            '_section' => '사이드바',
            '_type' => 'select',
            'label' => '최신 댓글 출력',
            'description' => '사이드바에 최신 댓글 위젯을 표시합니다. (* Content 위젯 스킨이 필요합니다.)',
            'options' => [
                'Y' => '예',
                'N' => '아니요'
            ]
        ],
        'sb_comm_count' => [
            '_section' => '사이드바',
            '_type' => 'text',
            'label' => '최신 댓글 출력 갯수',
            'description' => '최신 댓글 리스트를 출력할 갯수를 정해주세요. (기본 5개)',
        ],
        'sb_comm_module' => [
            '_section' => '사이드바',
            '_type' => 'text',
            'label' => '최신 댓글 출력 모듈 번호',
            'description' => '최신 댓글을 출력할 모듈 번호를 입력합니다. 비워둘 경우 모든 댓글이 출력됩니다. (쉼표로 구분합니다.)',
        ],
        'sb_title_icon' => [
            '_section' => '사이드바',
            '_type' => 'select',
            'label' => '제목 아이콘',
            'description' => '최신 글 및 최신 댓글 제목 앞에 아이콘을 표시합니다.',
            'options' => [
                'Y' => '예',
                'N' => '아니요',
            ],
        ],

        /* section 점보트론 */
        'jumbotron' => [
            '_section' => '점보트론',
            '_type' => 'select',
            'label' => '점보트론 사용',
            'description' => '메인 페이지에서만 사용하지 않음\' 속성은 슬라이더와 같이 사용하실 수 있습니다.',
            'options' => [
                'no_main' => '메인 페이지에서만 사용하지 않음',
                'only_main' => '메인 페이지에서만 사용',
                'Y' => '예',
                'N' => '아니요',
            ]
        ],
        'jumbotron_hide_mid' => [
            '_section' => '점보트론',
            '_type' => 'text',
            'label' => '점보트론 숨기기 모듈',
            'description' => '점보트론을 특정 페이지(모듈)에서 숨길 경우 사용하는 기능입니다. 모듈 ID를 입력해주세요. (쉼표로 구분합니다.)',
        ],
        'jumbotron_align' => [
            '_section' => '점보트론',
            '_type' => 'select',
            'label' => '점보트론 글자 정렬',
            'options' => [
                'center' => '가운데 정렬',
                'left' => '왼쪽 정렬',
                'right' => '오른쪽 정렬',
            ],
        ],

        /* section 슬라이드 */
        'slide_use' => [
            '_section' => '슬라이드',
            '_type' => 'select',
            'label' => '슬라이드 사용',
            'description' => '슬라이드를 사용하는 모듈일 경우, 점보트론을 사용하지 않는 것을 추천합니다.',
            'options' => [
                'only_main' => '자동 (메인 페이지에서만 사용)',
                'N' => '아니요',
                'Y' => '예'
            ]
        ],
        'slide_module' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 표시 모듈',
            'description' => '메인 페이지 같이 슬라이더를 특정 페이지 (모듈)에서만 표시할 경우 사용하는 기능입니다. 모듈 ID를 입력해주세요. (쉼표로 구분합니다.)'
        ],
        'slide_img_height' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 이미지 높이',
            'description' => '입력하신 값에 따라 이미지가 하단이 짤려집니다. 입력하지 않으면 업로드된 이미지의 기본 높이로 지정됩니다. (px는 생략합니다.)'
        ],
        'slide_c1_img' => [
            '_section' => '슬라이드',
            '_type' => 'image',
            'label' => '슬라이드 1 이미지',
            'description' => '슬라이드 첫번째 이미지를 업로드해주세요.'
        ],
        'slide_c1_url' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 1 URL',
            'description' => '슬라이드 첫번째 이미지를 클릭하면 이동할 URL를 입력해주세요.'
        ],
        'slide_c1_text' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 1 제목',
            'description' => '슬라이드 첫번째 이미지 하단에 나올 제목을 입력하세요.'
        ],
        'slide_c1_desc' => [
            '_section' => '슬라이드',
            '_type' => 'textarea',
            'label' => '슬라이드 1 설명',
            'description' => '슬라이드 첫번째 이미지 하단에 나올 설명을 입력하세요. (br 태그 사용 가능)'
        ],
        'slide_c2_img' => [
            '_section' => '슬라이드',
            '_type' => 'image',
            'label' => '슬라이드 2 이미지',
        ],
        'slide_c2_url' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 2 URL',
        ],
        'slide_c2_text' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 2 제목',
        ],
        'slide_c2_desc' => [
            '_section' => '슬라이드',
            '_type' => 'textarea',
            'label' => '슬라이드 2 설명',
        ],
        'slide_c3_img' => [
            '_section' => '슬라이드',
            '_type' => 'image',
            'label' => '슬라이드 3 이미지',
        ],
        'slide_c3_url' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 3 URL',
        ],
        'slide_c3_text' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 3 제목',
        ],
        'slide_c3_desc' => [
            '_section' => '슬라이드',
            '_type' => 'textarea',
            'label' => '슬라이드 3 설명',
        ],
        'slide_c4_img' => [
            '_section' => '슬라이드',
            '_type' => 'image',
            'label' => '슬라이드 4 이미지',
        ],
        'slide_c4_url' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 4 URL',
        ],
        'slide_c4_text' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 4 제목',
        ],
        'slide_c4_desc' => [
            '_section' => '슬라이드',
            '_type' => 'textarea',
            'label' => '슬라이드 4 설명',
        ],
        'slide_c5_img' => [
            '_section' => '슬라이드',
            '_type' => 'image',
            'label' => '슬라이드 5 이미지',
        ],
        'slide_c5_url' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 5 URL',
        ],
        'slide_c5_text' => [
            '_section' => '슬라이드',
            '_type' => 'text',
            'label' => '슬라이드 5 제목',
        ],
        'slide_c5_desc' => [
            '_section' => '슬라이드',
            '_type' => 'textarea',
            'label' => '슬라이드 5 설명',
        ],

        /* section 하단 메뉴*/
        'footer_copyright' => [
            '_section' => '하단 메뉴',
            '_type' => 'textarea',
            'label' => '하단 메뉴 상단',
            'description' => '하단 메뉴 상단에 표시할 저작권 내용 등을 적어주세요. (HTML 사용 가능)'
        ],
        'footer_bottom_menu' => [
            '_section' => '하단 메뉴',
            '_type' => 'select',
            'label' => '하단 메뉴',
            'description' => '하단 메뉴를 사용합니다. 아래 \'하단 메뉴\'에서 사이트맵을 선택하세요.',
            'options' => [
                'N' => '아니요',
                'Y' => '예'
            ],
        ],
        'footer_lang' => [
            '_section' => '하단 메뉴',
            '_type' => 'select',
            'label' => '언어 변경 표시',
            'description' => '하단에 언어 변경 버튼을 보여줍니다.',
            'options' => [
                'N' => '아니요',
                'Y' => '예',
            ],
        ],
        'footer_bottom' => [
            '_section' => '하단 메뉴',
            '_type' => 'textarea',
            'label' => '하단 메뉴 하단',
            'description' => '하단 메뉴의 최하단에 나올 내용을 적어주세요. (HTML 사용 가능)'
        ],

        /* section 커스텀 / 고급 */
        'premium' => [
            '_section' => '커스텀 / 고급',
            '_type' => 'select',
            'label' => '라이센스 제거',
            'description' => '* Premium Pack을 구입하신 분만 이 기능을 사용해주세요. 구입하지 않은 사이트에서 이 기능을 적용시 법적인 책임을 물을 수 있습니다.',
            'options' => [
                'N' => '아니요',
                'Y' => '예',
            ],
        ],
        'custom' => [
            '_section' => '커스텀 / 고급',
            '_type' => 'checkbox',
            'label' => '커스텀 파일',
            'description' => '원하는 파일(위치)를 체크한 후 \'./layouts/simplestrap/custom/\' 경로에 커스텀 파일을 업로드하여 커스텀 파일을 불러옵니다.',
            'options' => [
                'custom_style' => 'custom_style.css (CSS)',
                'custom_js' => 'custom_js.js (Javascript)',
                'custom_top' => 'custom_top.html (페이지 상단/컨테이너 상단)',
                'custom_bottom' => 'custom_bottom.html (페이지 최하단)',
                'custom_content_top' => 'custom_content_top.html (컨텐츠 상단)',
                'custom_content_bottom' => 'custom_content_bottom.html (컨텐츠 하단)',
                'custom_sidebar_top' => 'custom_sidebar_top.html (사이드바 상단)',
                'custom_sidebar_bottom' => 'custom_sidebar_bottom.html (사이드바 하단)',
                'custom_jumbotron' => 'custom_jumbotron.html (점보트론 교체)',
                'custom_setting' => 'custom_setting.html',
            ],
        ],
//        'css3pie' => [
//            '_section' => '커스텀 / 고급',
//            '_type' => 'select',
//            'label' => 'CSS3PIE',
//            'description' => 'Internet Explorer 하위 버전에서 둥근 모서리 등을 사용할 수 있는 CSS3PIE를 사용합니다. (* 참고: css3pie.com)',
//            'options' => [
//                'N' => '아니요',
//                'Y' => '예'
//            ]
//        ],
        'content_panel_heading' => [
            '_section' => '커스텀 / 고급',
            '_type' => 'select',
            'label' => '전체화면 모드 숨기기',
            'description' => '프레임 형태 설정과 상관없이 전체화면 모드 아이콘을 숨깁니다.',
            'options' => [
                'Y' => '프레임 형태 설정에 따름',
                'N' => '숨기기',
            ],
        ],
        'xe_validator_message' => [
            '_section' => '커스텀 / 고급',
            '_type' => 'select',
            'label' => 'XE Validator Message',
            'description' => '레이아웃에서 자체적으로 지원하는 안내 메시지 (XE_VALIDATOR_MESSAGE)를 숨깁니다.',
            'options' => [
                'Y' => '숨기지 않음',
                'N' => '숨기기'
            ],
        ],
//        'xe_css_remove' => [
//            '_section' => '커스텀 / 고급',
//            '_type' => 'select',
//            'label' => 'XE CSS 제거',
//            'description' => 'e.min.css (xe.css)를 제거하는 방식을 선택하세요. 제거하지 않으면 디자인에 문제가 발생할 수 있습니다.',
//            'options' => [
//                'script' => 'Javascript',
//                'N' => '제거하지 않음'
//            ]
//        ],
    ],
    'support' => [
        'mobile' => true,
        'desktop' => true
    ],
    'editable' => [
        'theme.blade.php',
        'gnb.blade.php'
    ]
];
