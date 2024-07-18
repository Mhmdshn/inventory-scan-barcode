@props(['menuList'])

@php
    $menu = [
        [
            'url' => '#',
            'label' => 'Master',
            'child' => [
                [
                    'url' => route('materialRegistrasi'),
                    'label' => 'Material Registrasi',
                    'icon' => '<svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <title>product-management</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                        <g id="icon" fill="#000000" transform="translate(42.666667, 34.346667)"> <path d="M426.247658,366.986259 C426.477599,368.072636 426.613335,369.17172 426.653805,370.281095 L426.666667,370.986667 L426.666667,392.32 C426.666667,415.884149 383.686003,434.986667 330.666667,434.986667 C278.177524,434.986667 235.527284,416.264289 234.679528,393.025571 L234.666667,392.32 L234.666667,370.986667 L234.679528,370.281095 C234.719905,369.174279 234.855108,368.077708 235.081684,366.992917 C240.961696,371.41162 248.119437,375.487081 256.413327,378.976167 C275.772109,387.120048 301.875889,392.32 330.666667,392.32 C360.599038,392.32 387.623237,386.691188 407.213205,377.984536 C414.535528,374.73017 420.909655,371.002541 426.247658,366.986259 Z M192,7.10542736e-15 L384,106.666667 L384.001134,185.388691 C368.274441,181.351277 350.081492,178.986667 330.666667,178.986667 C301.427978,178.986667 274.9627,184.361969 255.43909,193.039129 C228.705759,204.92061 215.096345,223.091357 213.375754,241.480019 L213.327253,242.037312 L213.449,414.75 L192,426.666667 L-2.13162821e-14,320 L-2.13162821e-14,106.666667 L192,7.10542736e-15 Z M426.247658,302.986259 C426.477599,304.072636 426.613335,305.17172 426.653805,306.281095 L426.666667,306.986667 L426.666667,328.32 C426.666667,351.884149 383.686003,370.986667 330.666667,370.986667 C278.177524,370.986667 235.527284,352.264289 234.679528,329.025571 L234.666667,328.32 L234.666667,306.986667 L234.679528,306.281095 C234.719905,305.174279 234.855108,304.077708 235.081684,302.992917 C240.961696,307.41162 248.119437,311.487081 256.413327,314.976167 C275.772109,323.120048 301.875889,328.32 330.666667,328.32 C360.599038,328.32 387.623237,322.691188 407.213205,313.984536 C414.535528,310.73017 420.909655,307.002541 426.247658,302.986259 Z M127.999,199.108 L128,343.706 L170.666667,367.410315 L170.666667,222.811016 L127.999,199.108 Z M42.6666667,151.701991 L42.6666667,296.296296 L85.333,320.001 L85.333,175.405 L42.6666667,151.701991 Z M330.666667,200.32 C383.155809,200.32 425.80605,219.042377 426.653805,242.281095 L426.666667,242.986667 L426.666667,264.32 C426.666667,287.884149 383.686003,306.986667 330.666667,306.986667 C278.177524,306.986667 235.527284,288.264289 234.679528,265.025571 L234.666667,264.32 L234.666667,242.986667 L234.808715,240.645666 C237.543198,218.170241 279.414642,200.32 330.666667,200.32 Z M275.991,94.069 L150.412,164.155 L192,187.259259 L317.866667,117.333333 L275.991,94.069 Z M192,47.4074074 L66.1333333,117.333333 L107.795,140.479 L233.373,70.393 L192,47.4074074 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>',
                ],
            ],
        ],
        [
            'url' => '#',
            'label' => 'Receiving',
            'child' => [
                [
                    'url' => route('inventory.index'),
                    'label' => 'Receiving Material CNC',
                    'icon' =>
                        '<svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M40,26.294V8c0-2.2-1.8-4-4-4H12C9.8,4,8,5.8,8,8v16.344C7.44,24.542,6.9,24.826,6.399,25.2 c-2.646,1.984-3.185,5.753-1.199,8.4C5.519,34.025,13.131,44,24,44h20V32C44,29.722,42.498,27.724,40,26.294z M8.4,31.2 c-0.662-0.882-0.482-2.139,0.397-2.8c0.36-0.27,0.783-0.399,1.201-0.399c0.608,0,1.207,0.274,1.596,0.791 C11.647,28.864,17.026,36,24,36h8v-2h0h0v-2h-8c-1.229,0-2.46-0.385-3.61-0.962C21.518,29.573,25.025,28,30,28 c6.104,0,10,2.369,10,4v8h-2H24C15.107,40,8.669,31.559,8.4,31.2z M26,8v4h-4V8H26z M18,8v8h12V8h6v16.728 C34.198,24.263,32.176,24,30,24c-5.952,0-10.813,1.913-12.9,4.777c-1.05-0.914-1.862-1.813-2.3-2.379 c-0.737-0.981-1.72-1.67-2.8-2.05V8H18z"></path> </g> </g></svg>',
                ],
                [
                    'url' => route('inventory.po'),
                    'label' => 'Receiving Supplier',
                    'icon' =>
                        '<svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M25.662,19.651C26.402,19.877,27.187,20,28,20c4.418,0,8-3.582,8-8s-3.582-8-8-8c-2.212,0-4.214,0.898-5.662,2.349 C21.598,6.123,20.814,6,20,6c-4.418,0-8,3.582-8,8s3.582,8,8,8C22.212,22,24.214,21.102,25.662,19.651z M28,8c2.206,0,4,1.794,4,4 s-1.794,4-4,4c-2.206,0-4-1.794-4-4S25.795,8,28,8z M16,14c0-2.206,1.794-4,4-4c0.088,0,0.169,0.02,0.256,0.026 C20.095,10.658,20,11.317,20,12c0,2.079,0.8,3.967,2.1,5.389C21.488,17.77,20.773,18,20,18C17.795,18,16,16.206,16,14z"></path> <path d="M30,24c-5.952,0-10.813,1.913-12.9,4.777c-1.05-0.914-1.862-1.813-2.3-2.379c-1.986-2.643-5.754-3.181-8.4-1.198 c-2.646,1.984-3.185,5.753-1.199,8.4C5.519,34.025,13.131,44,24,44h20V32C44,27.439,37.981,24,30,24z M8.4,31.2 c-0.662-0.882-0.482-2.139,0.397-2.8c0.36-0.27,0.783-0.399,1.201-0.399c0.608,0,1.207,0.274,1.596,0.791 C11.647,28.864,17.026,36,24,36h8v-2l0,0v-2h-8c-1.229,0-2.46-0.385-3.61-0.962C21.518,29.573,25.025,28,30,28 c6.104,0,10,2.369,10,4v8h-2H24C15.107,40,8.669,31.559,8.4,31.2z"></path> </g> </g></svg>',
                ],
                [
                    'url' => route('instock'),
                    'label' => 'Material Stock',
                    'icon' =>
                        '<svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 612 612" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M545.325,500.685H66.675c-30.737,0-55.657,24.92-55.657,55.657c0,30.737,24.92,55.657,55.657,55.657h478.65 c30.737,0,55.657-24.92,55.657-55.657C600.982,525.604,576.062,500.685,545.325,500.685z"></path> <path d="M129.753,464.922c30.737,0,55.657-24.92,55.657-55.657v-212.61c0-30.737-24.92-55.657-55.657-55.657 s-55.657,24.92-55.657,55.657v212.61C74.095,440.002,99.016,464.922,129.753,464.922z"></path> <path d="M306.002,464.922c30.737,0,55.657-24.92,55.657-55.657V126.157c0-30.737-24.92-55.657-55.657-55.657 s-55.657,24.92-55.657,55.657v283.108C250.345,440.002,275.263,464.922,306.002,464.922z"></path> <path d="M482.245,464.922c30.737,0,55.655-24.92,55.655-55.657V55.657C537.903,24.92,512.984,0,482.245,0 c-30.737,0-55.657,24.92-55.657,55.657v353.607C426.588,440.002,451.508,464.922,482.245,464.922z"></path> </g> </g> </g></svg>',
                ],
                [
                    'url' => route('checking'),
                    'label' => 'Receiving Report',
                    'icon' =>
                        '<svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>report-linechart</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="add" fill="#000000" transform="translate(42.666667, 85.333333)"> <path d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M106.666667,85.3333333 L106.666333,217.591333 L167.724208,141.269742 L232.938667,173.866667 L280.864376,130.738196 L295.135624,146.595138 L236.398693,199.458376 L173.589333,168.064 L120.324333,234.666333 L341.333333,234.666667 L341.333333,256 L85.3333333,256 L85.3333333,85.3333333 L106.666667,85.3333333 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>',
                ],
                [
                    'url' => route('abnormal'),
                    'label' => 'Abnormal Material',
                    'icon' =>
                        '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.8832 4.69719C19.2737 4.30667 19.9069 4.30667 20.2974 4.69719L23.888 8.28778L27.469 4.7068C27.8595 4.31628 28.4927 4.31628 28.8832 4.7068C29.2737 5.09733 29.2737 5.73049 28.8832 6.12102L25.3022 9.702L28.7827 13.1825C29.1732 13.573 29.1732 14.2062 28.7827 14.5967C28.3922 14.9872 27.759 14.9872 27.3685 14.5967L23.888 11.1162L20.3979 14.6063C20.0074 14.9968 19.3743 14.9968 18.9837 14.6063C18.5932 14.2158 18.5932 13.5826 18.9837 13.1921L22.4738 9.702L18.8832 6.1114C18.4927 5.72088 18.4927 5.08771 18.8832 4.69719Z" fill="#000000"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M23.86 15.0513C24.0652 14.9829 24.2871 14.9829 24.4923 15.0513L39.2705 19.9765C39.4691 20.0336 39.6499 20.1521 39.783 20.323L43.7861 25.4612C43.9857 25.7173 44.0485 26.0544 43.9545 26.3652C43.8902 26.5779 43.7579 26.7602 43.5821 26.887L28.1827 32.0159L24.965 27.8858C24.7754 27.6424 24.4839 27.5001 24.1753 27.5004C23.8667 27.5007 23.5755 27.6434 23.3863 27.8871L20.186 32.0093L4.74236 26.8577C4.58577 26.7329 4.46805 26.5621 4.40853 26.3652C4.31456 26.0544 4.37733 25.7173 4.57688 25.4612L8.50799 20.4154C8.62826 20.2191 8.81554 20.0652 9.04466 19.9889L23.86 15.0513ZM35.8287 20.9376L24.1802 24.8197L12.5277 20.9362L24.1762 17.0541L35.8287 20.9376Z" fill="#000000"></path> <path d="M28.1442 34.1368L39.991 30.1911L39.9905 36.7628C39.9905 38.054 39.1642 39.2003 37.9392 39.6086L25.1762 43.863V31.4111L27.0393 33.8026C27.2997 34.1368 27.7423 34.2706 28.1442 34.1368Z" fill="#000000"></path> <path d="M23.1762 31.4191V43.863L10.4131 39.6086C9.18811 39.2003 8.36183 38.054 8.36175 36.7628L8.36132 30.1732L20.2251 34.1306C20.6277 34.2649 21.0712 34.1305 21.3314 33.7953L23.1762 31.4191Z" fill="#000000"></path> </g></svg>',
                ],
            ],
        ],
        [
            'url' => '#',
            'label' => 'Stock Taking',
            'child' => [
                [
                    'url' => route('prepare.stock.taking'),
                    'label' => 'Prepare Stock Taking',
                    'admin' => '',
                    'icon' => '<svg fill="#000000" viewBox="-2 0 32 32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M26.530,31.994 C26.222,31.994 25.915,31.903 25.619,31.722 L2.000,17.205 L2.000,31.000 C2.000,31.553 1.552,32.000 1.000,32.000 C0.448,32.000 -0.000,31.553 -0.000,31.000 L-0.000,1.006 C-0.000,0.453 0.448,0.006 1.000,0.006 C1.552,0.006 2.000,0.453 2.000,1.006 L2.000,13.855 L25.628,0.248 C25.917,0.083 26.211,-0.000 26.507,-0.000 C27.372,-0.000 28.000,0.689 28.000,1.639 L28.000,30.367 C28.000,31.435 27.260,31.994 26.530,31.994 ZM3.097,15.531 L26.000,29.608 L26.000,2.341 L3.097,15.531 Z"></path> </g></svg>'
                ],
                [
                    'url' => route('input.stock.taking'),
                    'label' => 'Input Stock Taking',
                    'icon'=>'<svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#000000" d="M12 6v-6h-8v6h-4v7h16v-7h-4zM7 12h-6v-5h2v1h2v-1h2v5zM5 6v-5h2v1h2v-1h2v5h-6zM15 12h-6v-5h2v1h2v-1h2v5z"></path> <path fill="#000000" d="M0 16h3v-1h10v1h3v-2h-16v2z"></path> </g></svg>'
                ],
                [
                    'url' => route('result.stock.taking'),
                    'label' => 'Stock Taking Result',
                    'icon'=> '<svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="none"> <path d="M22 142.576h10.702M22 114.712h10.702M22 22v148h148M21.995 32.934h10.702m-10.702 27.32h10.702M21.995 87.356h10.702" style="fill:#000000;fill-opacity:0;stroke:#000000;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6;stroke-dasharray:none;paint-order:stroke fill markers" fill="none"></path> <path d="M68.842 128.695a10.782 10.782 0 0 1-10.781 10.781 10.782 10.782 0 0 1-10.782-10.781 10.782 10.782 0 0 1 10.782-10.782 10.782 10.782 0 0 1 10.781 10.782zM95.06 76.358A10.782 10.782 0 0 1 84.277 87.14a10.782 10.782 0 0 1-10.782-10.782 10.782 10.782 0 0 1 10.782-10.782 10.782 10.782 0 0 1 10.781 10.782Zm43.576 36.396a10.782 10.782 0 0 1-10.782 10.781 10.782 10.782 0 0 1-10.781-10.781 10.782 10.782 0 0 1 10.781-10.782 10.782 10.782 0 0 1 10.782 10.782zm21.604-73.396a10.782 10.782 0 0 1-10.782 10.782 10.782 10.782 0 0 1-10.782-10.782 10.782 10.782 0 0 1 10.782-10.781 10.782 10.782 0 0 1 10.781 10.781z" style="fill-opacity:0;stroke:#000000;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6;paint-order:stroke fill markers"></path> <path d="m64.38 118.198 14.117-31.362m15.08-2.424 24.333 21.124m13.668-4.067 15.53-52.393" style="fill:#000000;fill-opacity:0;stroke:#000000;stroke-width:8;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6;stroke-dasharray:none;paint-order:stroke fill markers" fill="none"></path> </g> </g></svg>'
                ],
                [
                    'url' => route('conf.stock.taking'),
                    'label' => 'Stock Taking Confirmation',
                    'admin' => '',
                    'icon'=>'<svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M484.088,292.46c-5.1-5.128-11.968-8.076-19.156-8.076l0.172,0.036H330.588c-14.832,0-26.864,12.308-26.864,27.132v22.788 c0,7.16,2.784,13.908,7.88,19c5.088,5.092,11.836,7.9,18.992,7.9l39.088,0.004c-32.072,34.348-76.7,53.888-123.708,53.888 c-93.256,0-169.132-75.876-169.132-169.132S152.716,76.868,245.972,76.868c69.824,0,133.388,43.836,158.172,109.084 c5.636,14.82,20.076,24.784,35.924,24.784c4.66,0,9.248-0.852,13.636-2.52c19.808-7.52,29.796-29.76,22.268-49.568 C439.932,63.772,347.504,0.024,245.976,0.024C110.344,0.024,0,110.368,0,246s110.184,245.976,245.816,245.976 c62.608,0,123.232-24.64,169.336-67.9v21.796c0,14.832,12.392,26.824,27.22,26.824h22.792c14.828,0,26.836-11.992,26.836-26.824 V311.648C492,304.468,489.204,297.548,484.088,292.46z"></path> </g> </g> <g> <g> <path d="M361.06,179.392l-11.068-11.072c-2.86-2.86-6.676-4.436-10.744-4.436s-7.884,1.58-10.736,4.436L221.228,275.604 l-64.792-64.792c-2.86-2.86-6.676-4.436-10.736-4.436c-4.068,0-7.88,1.58-10.74,4.436l-11.08,11.068 c-5.912,5.92-5.912,15.56,0,21.48l86.612,86.604c2.856,2.856,6.668,4.432,10.736,4.432s7.88-1.58,10.812-4.512l129.02-129.02 C366.984,194.944,366.984,185.312,361.06,179.392z"></path> </g> </g> </g></svg>'
                ],
                [
                    'url' => route('report.stock.taking'),
                    'label' => 'Report Stock Taking',
                    'admin' => '',
                    'icon'=> '<svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>report-text</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="add" fill="#000000" transform="translate(42.666667, 85.333333)"> <path d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M149.333333,234.666667 L149.333333,266.666667 L85.3333333,266.666667 L85.3333333,234.666667 L149.333333,234.666667 Z M341.333333,234.666667 L341.333333,266.666667 L192,266.666667 L192,234.666667 L341.333333,234.666667 Z M149.333333,170.666667 L149.333333,202.666667 L85.3333333,202.666667 L85.3333333,170.666667 L149.333333,170.666667 Z M341.333333,170.666667 L341.333333,202.666667 L192,202.666667 L192,170.666667 L341.333333,170.666667 Z M149.333333,106.666667 L149.333333,138.666667 L85.3333333,138.666667 L85.3333333,106.666667 L149.333333,106.666667 Z M341.333333,106.666667 L341.333333,138.666667 L192,138.666667 L192,106.666667 L341.333333,106.666667 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>'
                ],
            ],
        ],
    ];
@endphp

@if ($menuList)
    @foreach ($menu as $m)
        <li>
            @if (isset($m['child']))
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-300 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example{{ $loop->iteration }}"
                    data-collapse-toggle="dropdown-example{{ $loop->iteration }}">
                    <svg viewBox="0 0 64 64" class="w-5 h-5 " fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g clip-path="url(#clip0_14_1960)">
                                <path
                                    d="M25.545 8H11C9.34315 8 8 9.34315 8 11V28.931C8 30.5879 9.34315 31.931 11 31.931H25.545C27.2019 31.931 28.545 30.5879 28.545 28.931V11C28.545 9.34315 27.2019 8 25.545 8Z"
                                    stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M52.94 8H38.395C36.7382 8 35.395 9.34315 35.395 11V15.272C35.395 16.9289 36.7382 18.272 38.395 18.272H52.94C54.5969 18.272 55.94 16.9289 55.94 15.272V11C55.94 9.34315 54.5969 8 52.94 8Z"
                                    stroke="#426AB2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M52.94 25.121H38.395C36.7382 25.121 35.395 26.4641 35.395 28.121V52.94C35.395 54.5969 36.7382 55.94 38.395 55.94H52.94C54.5969 55.94 55.94 54.5969 55.94 52.94V28.121C55.94 26.4641 54.5969 25.121 52.94 25.121Z"
                                    stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M25.545 38.818H11C9.34315 38.818 8 40.1611 8 41.818V52.939C8 54.5958 9.34315 55.939 11 55.939H25.545C27.2019 55.939 28.545 54.5958 28.545 52.939V41.818C28.545 40.1611 27.2019 38.818 25.545 38.818Z"
                                    stroke="#426AB2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                            <defs>
                                <clipPath id="clip0_14_1960">
                                    <rect width="51.94" height="51.939" fill="white" transform="translate(6 6)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 pr-5 text-left rtl:text-right whitespace-nowrap">{{ $m['label'] }}</span>
                    <svg class="w-3 h-3 text-right" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example{{ $loop->iteration }}" class="hidden py-2 space-y-2 pl-2 text-sm">
                    @foreach ($m['child'] as $ch)
                        @if (isset($ch['admin']))
                            @if (auth()->user()->Role_ID == '3' || auth()->user()->Admin == '1')
                                <li>
                                    <a href="{{ $ch['url'] }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group @if (url()->current() === $ch['url']) bg-gray-400 dark:bg-gray-500 @endif">
                                        @if (isset($ch['icon']))
                                            <div class="!w-5 !h-5">{!! $ch['icon'] !!}</div>
                                        @else
                                            <div class="w-5 h-5">
                                                <svg class=" text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 22 21">
                                                    <path
                                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                                    <path
                                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                                </svg>

                                            </div>
                                        @endif
                                        <span class="ms-3">{{ $ch['label'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{ $ch['url'] }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group @if (url()->current() === $ch['url']) bg-gray-400 dark:bg-gray-500 @endif">
                                    @if (isset($ch['icon']))
                                        <div class="!w-5 !h-5">{!! $ch['icon'] !!}</div>
                                    @else
                                        <div class="w-5 h-5">
                                            <svg class=" text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 22 21">
                                                <path
                                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                                <path
                                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                            </svg>

                                        </div>
                                    @endif
                                    <span class="ms-3">{{ $ch['label'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @else
                <a href="{{ $m['url'] }}" wire:navigate
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group @if (url()->current() === $m['url']) bg-gray-400 dark:bg-gray-500 @endif">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">{{ $m['label'] }}</span>
                </a>
            @endforelse
        </li>
    @endforeach
@else
    @foreach ($menu as $m)
        @if (isset($m['child']))
            @foreach ($m['child'] as $ch)
                @if (url()->current() === $ch['url'])
                    {{ $ch['label'] }}
                @endif
            @endforeach
        @else
            @if (url()->current() === $m['url'])
                {{ $m['label'] }}
            @endif
        @endif
    @endforeach
@endif
