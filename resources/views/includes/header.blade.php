<link rel="stylesheet" href="{{asset('css/includes/header.css')}}">

{{--ALISA START--}}
<link rel="stylesheet" href="{{asset('/js/alisa-3.1/css/alisa.css')}}">
<script src="{{asset('/js/alisa-3.1/js/index.js')}}"></script>
{{--ALISA END--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<header>
    <div class="center-block">
        <a href="/" class="logo-block">
            <svg id="svg-id-logo" viewBox="0 0 107.5 22.5">
                <g transform="matrix(1.25,0,0,-1.25,0,22.5)">
                    <g transform="scale(0.1,0.1)">
                        <path id="logo-path1" d="m 829.738,158 -4.41,-12.375 8.719,0 -4.309,12.375 z m 7.668,-20.773 -15.386,0 c -0.395,-0.922 -0.778,-1.844 -1.161,-2.77 -0.5,-1.203 -1.004,-2.41 -1.5,-3.609 -0.48,-1.18 -0.961,-2.36 -1.433,-3.543 -0.418,-1.051 -0.836,-2.102 -1.238,-3.16 l -0.25,-0.668 -9.497,0 19.301,48.703 6.879,0 19.301,-48.703 -9.406,0 -5.61,13.75"></path>
                        <path id="logo-path2" d="m 786.637,123.008 c -1.754,0 -3.489,0.215 -5.188,0.617 -1.722,0.41 -3.367,1.031 -4.929,1.852 -1.543,0.816 -2.95,1.859 -4.176,3.097 -1.258,1.262 -2.231,2.735 -2.93,4.371 -0.758,1.766 -1.086,3.66 -1.098,5.575 l 0,33.66 8.864,0 0,-33.715 c 0.008,-1.02 0.238,-1.965 0.785,-2.828 0.543,-0.856 1.265,-1.539 2.129,-2.078 0.949,-0.602 1.988,-1.036 3.086,-1.309 1.125,-0.301 2.289,-0.445 3.457,-0.445 1.156,0 2.301,0.16 3.418,0.453 1.09,0.285 2.113,0.726 3.062,1.332 0.856,0.547 1.574,1.238 2.117,2.098 0.547,0.863 0.778,1.824 0.786,2.839 l 0,33.653 8.867,0 0,-33.727 c -0.012,-1.91 -0.348,-3.793 -1.114,-5.551 -0.714,-1.625 -1.691,-3.086 -2.949,-4.336 -1.226,-1.242 -2.633,-2.277 -4.187,-3.089 -1.551,-0.817 -3.184,-1.438 -4.891,-1.848 -1.676,-0.402 -3.387,-0.621 -5.109,-0.621"></path>
                        <path id="logo-path3" d="m 758.965,132.914 c 4.371,0 7.914,-3.543 7.914,-7.914 0,-4.102 -3.137,-7.484 -7.141,-7.875 l -5.597,14.148 c 1.336,1.032 3.007,1.641 4.824,1.641"></path>
                        <path id="logo-path4" d="m 724.352,157.719 -34.914,-90.1565 70.035,0 -35.121,90.1565 z M 166.59,87.6289 c -0.035,6.8906 -0.883,13.7341 -2.719,20.3941 -1.766,6.387 -4.281,12.528 -7.598,18.258 -3.296,5.633 -7.222,10.84 -11.824,15.481 -4.644,4.718 -9.812,8.801 -15.504,12.191 -5.734,3.406 -11.879,6.012 -18.304,7.82 -6.614,1.891 -13.4066,2.793 -20.2777,2.793 -6.8477,0 -13.6211,-0.898 -20.207,-2.793 -6.379,-1.808 -12.4883,-4.41 -18.1797,-7.82 -5.668,-3.39 -10.836,-7.48 -15.4805,-12.195 -4.5938,-4.637 -8.5586,-9.848 -11.8633,-15.488 -3.3828,-5.723 -5.9453,-11.872 -7.75,-18.262 -1.8672,-6.649 -2.7148,-13.4807 -2.75,-20.3635 0.0352,-6.8867 0.8828,-13.7422 2.75,-20.375 C 18.6875,60.875 21.2461,54.7266 24.6406,49 c 3.2969,-5.6328 7.2578,-10.8437 11.8633,-15.4844 4.6445,-4.7187 9.8203,-8.7734 15.4805,-12.1953 5.6875,-3.4101 11.7929,-6.0117 18.1758,-7.8242 6.5859,-1.8906 13.3671,-2.75 20.1914,-2.7891 6.875,0.0391 13.6714,0.8985 20.2934,2.793 6.421,1.8086 12.566,4.4102 18.289,7.8203 5.683,3.4141 10.863,7.4688 15.523,12.1992 4.594,4.6328 8.52,9.8438 11.813,15.4649 3.32,5.7383 5.835,11.8828 7.601,18.2695 1.832,6.6445 2.684,13.5117 2.719,20.375 z M 90.3516,0.53125 C 82.5898,0.574219 74.9063,1.55078 67.4336,3.64453 60.1797,5.67578 53.2344,8.58203 46.7695,12.4453 40.3672,16.2695 34.5273,20.8516 29.3438,26.1953 24.1367,31.4844 19.6563,37.3594 15.8945,43.7617 12.0781,50.293 9.13672,57.2695 7.10156,64.5586 5.00781,72.0859 3.99609,79.8164 3.95703,87.6445 c 0.03906,7.8243 1.05469,15.5625 3.14453,23.1055 2.03516,7.289 4.97654,14.238 8.79294,20.77 3.7539,6.39 8.2344,12.3 13.4414,17.546 5.1914,5.36 11.0313,9.942 17.4336,13.762 6.4649,3.867 13.4102,6.77 20.6641,8.805 7.4805,2.094 15.1602,3.109 22.9297,3.109 7.8008,0 15.5237,-1.004 23.0427,-3.109 7.25,-2.035 14.196,-4.938 20.657,-8.801 6.441,-3.824 12.312,-8.398 17.539,-13.746 5.222,-5.262 9.703,-11.176 13.457,-17.57 3.816,-6.528 6.761,-13.477 8.793,-20.766 2.089,-7.543 3.105,-15.2812 3.144,-23.1211 -0.039,-7.8125 -1.047,-15.543 -3.144,-23.0703 C 171.816,57.2695 168.879,50.293 165.059,43.7578 161.297,37.3594 156.813,31.4805 151.613,26.1992 146.379,20.8438 140.5,16.2656 134.07,12.4453 127.602,8.58203 120.656,5.67578 113.406,3.64453 105.895,1.53906 98.168,0.574219 90.3516,0.53125 Z M 203.25,88.1406 l 0,-75.3359 65.496,0 c 5.367,0.0312 10.801,0.9219 15.695,3.2305 4.297,2.0117 8.036,4.7578 11.082,8.3867 2.981,3.5898 5.231,7.6367 6.727,12.0547 1.52,4.5312 2.277,9.2148 2.277,14 0,4.7812 -0.757,9.4687 -2.277,14 -1.492,4.4375 -3.742,8.4531 -6.719,12.0429 -3.058,3.6407 -6.789,6.418 -11.093,8.4375 -4.879,2.3008 -10.336,3.1524 -15.68,3.1836 l -65.508,0 z m 0,73.8634 0,-63.6876 58.969,0 c 4.394,0.0352 8.804,0.707 12.836,2.5156 3.515,1.57 6.664,3.719 9.238,6.582 2.543,2.859 4.523,6.031 5.922,9.566 1.605,4.247 2.426,8.641 2.426,13.18 0,4.531 -0.809,8.934 -2.418,13.149 -1.403,3.546 -3.368,6.754 -5.918,9.586 -2.582,2.871 -5.735,5.019 -9.25,6.593 -4.032,1.805 -8.442,2.485 -12.825,2.516 l -58.98,0 z m 82.559,-66.7774 c 3.144,-1.1485 6.14,-2.6602 8.937,-4.586 4.664,-3.2226 8.609,-7.25 11.672,-12.0117 3.043,-4.707 5.207,-9.8008 6.484,-15.2461 1.321,-5.4453 1.774,-11.0234 1.407,-16.6172 -0.371,-5.5781 -1.606,-11.0156 -3.68,-16.1992 -2.074,-5.2305 -5.008,-9.9336 -8.816,-14.0781 -3.954,-4.3008 -8.7,-7.58596 -14.047,-9.89455 -5.977,-2.64453 -12.485,-3.69141 -19,-3.73047 -4.219,0 -8.446,0 -12.664,0 -5.153,0 -10.305,0 -15.457,0 -5.461,0 -10.922,0 -16.387,0 -5.137,0 -10.278,0 -15.418,0 -4.18,0 -8.36,0 -12.543,0 l -3.223,0 0,169.31672 3.223,0 c 3.793,0 7.586,0 11.379,0 4.711,0 9.426,0 14.137,0 5.019,0 10.042,0 15.066,0 4.699,0 9.398,0 14.098,0 3.753,0 7.507,0 11.273,0 5.805,-0.039 11.598,-0.969 16.918,-3.352 4.781,-2.144 9.016,-5.109 12.5,-9.023 3.379,-3.762 5.992,-8.043 7.832,-12.766 1.352,-3.555 2.223,-7.285 2.676,-11.059 0.457,-3.808 0.457,-7.675 0,-11.484 -0.453,-3.824 -1.34,-7.574 -2.68,-11.223 -1.875,-4.793 -4.531,-9.164 -7.992,-12.96 -1.727,-1.9185 -3.633,-3.6099 -5.695,-5.0864 z m 211.32,62.4924 -34.914,-90.1565 70.035,0 -35.121,90.1565 z m 39.07,-100.1018 -78.144,0 -22.133,-54.75392 -10.879,0 67.012,169.31672 10.371,0 67.008,-169.31672 -10.868,0 -22.367,54.75392 z m 74.778,-38.0703 60.386,152.6331 10.899,0 -67.004,-169.29328 -8.34,0 -67,169.29328 10.891,0 60.168,-152.6331 z m 152.441,38.0703 -78.141,0 -22.132,-54.75392 -10.879,0 67.011,169.31672 10.368,0 67.011,-169.31672 -10.867,0 -22.371,54.75392"></path>
                        <path id="logo-path5" d="m 445.965,172.176 18.285,0 -60.848,-97.0744 0,-72.23832 -15.968,0 0,75.92972 58.531,93.383 z m -78.504,-88.5471 -55.547,88.5471 18.137,0 46.472,-74.0862 20.219,32.2622 18.281,0 -31.597,-50.4145 0,-77.07422 -15.965,0 0,80.76562 z m 9.105,51.3511 18.286,0 -18.325,-29.343 -9.144,14.578 9.183,14.765"></path>
                    </g>
                </g>
            </svg>
        </a>
        <div class="header-action">

            <div class="main-search left-header-menu-bl">
                <button class="button-new-announcement logged" href="#">
                    <svg id="svg-id-arrow-rounded" viewBox="0 0 32 32" style="transform: rotate(0deg);">
                        <path d="M16,0C7.163,0,0,7.163,0,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.163,24.837,0,16,0z M16,30 C8.28,30,1.969,23.72,1.969,16S8.28,2,16,2s14,6.28,14,14S23.72,30,16,30z M15.979,8.043l-6.062,5.906 c-0.195,0.195-0.293,0.451-0.293,0.707s0.098,0.512,0.293,0.707c0.391,0.391,1.023,0.391,1.414,0l3.68-3.68V23.01 c0,0.553,0.448,1,1,1s1-0.447,1-1V11.746l3.618,3.617c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414L15.979,8.043z"></path>
                    </svg>
                    <span class="label">Разместить объявление</span>
                </button>

            </div>


            <div class="right-header-menu-bl">
                <div class="user-header">
                    <span class="user-header-span" style="background: url({{Session::get('user_data')['profile_image']}});background-size: cover;background-position: center;">
                    </span>
                    <span style="font-size: 14px;"> Профиль</span>
                    <span><i style="transform: rotate(180deg);font-size: 10px" class="fas fa-chevron-up"></i></span>

                    <div class="nav-header-user">
                        <a href="/my-classifieds">
                            <span class="nav-header-icon">
                                <svg id="svg-id-male" viewBox="0 0 31.983 31.983">
                                    <path d="M29.984,24.985l-5.271-2.5l-2.076,1.229l6.513,3.088c0.067,0.031,0.834,0.16,0.834,1.229l0.001,1.952 L2,29.984v-2.028c0-0.794,0.597-1.044,0.835-1.154l8.782-4.146c0.63-0.288,1.063-0.885,1.147-1.571 c0.085-0.688-0.192-1.369-0.731-1.805c-2.078-1.668-3.047-5.334-3.047-7.286V6.996C8.987,4.906,12.625,2,15.991,2 c3.396,0,6.997,2.859,6.997,4.996v4.997c0,1.645-0.593,4.563-2.102,6.435c-0.082,0.096-0.186,0.211-0.308,0.34 c-0.168,0.177-0.334,0.356-0.521,0.506c-0.38,0.336-0.844,0.686-1.373,0.954l0.869,1.606c1.258-0.54,1.727-0.978,1.727-0.978 c2.771-2.18,3.708-6.463,3.708-8.863V6.996C24.989,3.686,20.407,0,15.991,0S6.987,3.686,6.987,6.996v4.997 c0,2.184,0.997,6.602,3.794,8.847l-8.782,4.146c0,0-1.998,0.891-1.998,1.998v3.001c0,1.104,0.895,1.999,1.998,1.999h27.985 c1.104,0,1.999-0.895,1.999-1.999v-3.001C31.983,25.809,29.984,24.985,29.984,24.985z"></path>
                                </svg>
                            </span>
                            <span class="label">Мои объявления</span>
                        </a>

                        <a href="/my-messages">
                            <span class="nav-header-icon">
                                <svg id="svg-id-envelope" viewBox="0 0 32 22">
                                    <path d="M27.212,3.834L16,12.771L4.788,3.835l-1.337,1.5l11.894,9.515c0.188,0.164,0.421,0.244,0.655,0.244 s0.467-0.08,0.654-0.244l11.803-9.442L27.212,3.834z"></path>
                                    <path d="M31.98,2.225c0.023-0.171,0-0.341-0.066-0.505C31.673,0.585,30.87,0,29.5,0h-26 C2.291,0,0.991,0.454,0.372,1.341C0.33,1.375,0.281,1.397,0.244,1.439c-0.207,0.24-0.265,0.546-0.212,0.835 C0.023,2.351,0,2.42,0,2.5v16C0,20.156,1.843,22,3.5,22h26c1.657,0,2.5-1.844,2.5-3.5v-16C32,2.402,31.986,2.317,31.98,2.225z M29.5,20h-26C2.949,20,2,19.053,2,18.5V4.931V4.174V1.999h1.229L3.232,2C3.324,2,3.421,2,3.5,2h25.264l0.002-0.001h1.229v2.179 L30,4.174V18.5C30,19.053,30.053,20,29.5,20z"></path>
                                </svg>
                            </span>
                            <span class="label">Сообщения</span>
                        </a>

                        <a href="/register">
                            <span class="nav-header-icon">
                               <svg id="svg-id-heart-empty" viewBox="0 0 32.062 28.885">
                                    <path d="M29.317,2.712C27.502,0.899,25.473,0,22.999,0c-2.363,0-5,1.885-6.969,3.885 c-2.031-2-4.586-3.875-7.031-3.875c-2.392,0-4.5,0.715-6.255,2.469c-3.659,3.649-3.659,9.566,0,13.218 c1.044,1.044,11.183,12.322,11.183,12.322c0.578,0.578,1.336,0.866,2.092,0.866s1.513-0.288,2.09-0.866 c0,0,11.09-11.969,11.208-12.089C32.976,12.278,32.976,6.36,29.317,2.712z M27.892,14.527 c-0.114,0.116-6.155,6.634-11.217,12.097c-0.238,0.227-0.511,0.261-0.655,0.261c-0.143,0-0.413-0.033-0.65-0.253 C14.136,25.26,5.196,15.319,4.156,14.28C2.765,12.893,2,11.048,2,9.086c0-1.961,0.766-3.805,2.158-5.192 C5.51,2.542,7.094,2.01,8.999,2.01c0.98,0,2.753,0.469,5.628,3.3l1.425,1.403l1.404-1.426C19.452,3.26,21.576,2,22.999,2 c1.919,0,3.432,0.656,4.906,2.128c1.39,1.387,2.155,3.229,2.155,5.19C30.062,11.28,29.296,13.126,27.892,14.527z"></path>
                               </svg>
                            </span>
                            <span class="label">Избранные объявления</span>
                        </a>


                        <a href="/register">
                            <span class="nav-header-icon">
                                <svg id="svg-id-star" viewBox="0 0 32.025 31.029">
                                    <path d="M31.906,11.568c-0.275-0.801-0.986-1.386-1.843-1.513l-8.333-1.24l-3.623-7.521 C17.727,0.505,16.91,0,16.012,0c-0.895,0-1.712,0.505-2.093,1.296l-3.622,7.521l-8.334,1.24 c-0.855,0.127-1.566,0.712-1.843,1.513c-0.275,0.801-0.067,1.684,0.538,2.286l6.105,6.1l-1.417,8.458 c-0.143,0.854,0.226,1.707,0.949,2.206c0.397,0.272,0.865,0.411,1.332,0.411c0.385,0,0.77-0.094,1.119-0.28l7.265-3.912 l7.267,3.912c0.351,0.188,0.735,0.28,1.118,0.28c0.467,0,0.936-0.139,1.333-0.411c0.723-0.499,1.09-1.354,0.947-2.206 l-1.417-8.458l6.109-6.1C31.974,13.252,32.181,12.369,31.906,11.568z M24.02,18.339l-1.018,1.017l0.236,1.417l1.415,8.44 l-7.32-3.937l-1.323-0.712l-1.323,0.712l-7.32,3.938l1.416-8.442l0.236-1.417l-1.018-1.017l-6.056-6.042l8.308-1.233l1.461-0.218 l0.642-1.33l3.655-7.579l3.655,7.579l0.642,1.33l1.461,0.218l8.308,1.233L24.02,18.339z"></path>
                                </svg>
                            </span>
                            <span class="label">Списки желаний</span>
                        </a>


                        <a href="/setting">
                            <span class="nav-header-icon">
                               <svg id="svg-id-gear" viewBox="0 0 32 32">
                                    <path d="M30.016,12.971l-2.566-0.569c-0.2-0.641-0.462-1.253-0.763-1.841l1.389-2.314 c0.519-0.828,0.78-2.047,0-2.828L26.66,4.004c-0.78-0.781-2.099-0.641-2.895-0.088L21.515,5.35 c-0.584-0.303-1.194-0.562-1.829-0.768l-0.576-2.598C18.938,1.031,18.104,0,17,0h-2c-1.104,0-1.781,1.047-2,2l-0.642,2.566 c-0.678,0.216-1.328,0.492-1.948,0.818L8.103,3.916C7.308,3.363,5.989,3.223,5.208,4.004L3.794,5.418 c-0.781,0.781-0.519,2,0,2.828l1.461,2.436c-0.274,0.552-0.517,1.123-0.705,1.72l-2.566,0.569C1.031,13.143,0,13.976,0,15.08v2 c0,1.104,1.047,1.781,2,2l2.599,0.649c0.18,0.551,0.404,1.08,0.658,1.593L3.794,23.76c-0.519,0.828-0.78,2.047,0,2.828 l1.415,1.414c0.78,0.781,2.099,0.641,2.895,0.089l2.312-1.474c0.624,0.329,1.277,0.607,1.959,0.823l0.64,2.56 c0.219,0.953,0.896,2,2,2h2c1.104,0,1.938-1.031,2.109-1.984l0.577-2.604c0.628-0.203,1.23-0.459,1.808-0.758l2.256,1.438 c0.796,0.552,2.114,0.692,2.895-0.089l1.415-1.414c0.78-0.781,0.519-2,0-2.828l-1.39-2.316c0.279-0.549,0.521-1.12,0.716-1.714 L30,19.08c0.953-0.219,2-0.896,2-2v-2C32,13.976,30.969,13.143,30.016,12.971z M30.001,16.939 c-0.085,0.061-0.245,0.145-0.448,0.191l-3.708,0.926l-0.344,1.051c-0.155,0.474-0.356,0.954-0.598,1.429l-0.502,0.986 l1.959,3.267c0.125,0.2,0.184,0.379,0.201,0.484l-1.315,1.313c-0.127-0.04-0.271-0.092-0.341-0.14l-3.292-2.1l-1.023,0.529 c-0.493,0.256-0.999,0.468-1.503,0.631l-1.09,0.353l-0.824,3.723c-0.038,0.199-0.145,0.359-0.218,0.417h-1.799 c-0.062-0.085-0.146-0.245-0.191-0.447l-0.921-3.682l-1.065-0.338c-0.549-0.173-1.097-0.403-1.629-0.685l-1.028-0.543 l-3.292,2.099c-0.134,0.091-0.278,0.143-0.409,0.143l-1.312-1.276c0.018-0.104,0.072-0.274,0.181-0.449l2.045-3.408l-0.486-0.979 C6.82,19.973,6.64,19.539,6.5,19.109l-0.343-1.052L2.485,17.14c-0.231-0.053-0.398-0.139-0.485-0.2V15.08 c0.001,0,0.002,0.001,0.004,0.001c0.034,0,0.198-0.117,0.335-0.142l3.772-0.836l0.347-1.103c0.141-0.449,0.333-0.917,0.588-1.431 l0.486-0.98L5.509,7.218c-0.125-0.201-0.184-0.38-0.201-0.485l1.315-1.314c0.127,0.041,0.271,0.093,0.34,0.141l3.354,2.138 l1.027-0.542c0.527-0.278,1.073-0.508,1.622-0.682l1.063-0.339l0.912-3.649c0.054-0.23,0.138-0.397,0.2-0.484H17 c-0.014,0.021,0.115,0.194,0.142,0.339l0.84,3.794l1.089,0.353c0.511,0.165,1.023,0.38,1.522,0.639l1.023,0.532l3.224-2.054 c0.135-0.092,0.279-0.144,0.409-0.144l1.312,1.275c-0.018,0.104-0.072,0.275-0.182,0.451L24.4,10.481l0.505,0.988 c0.272,0.533,0.48,1.033,0.635,1.528l0.346,1.104l3.696,0.82c0.224,0.042,0.397,0.171,0.435,0.241L30.001,16.939z M16.014,9.99 c-3.321,0-6.023,2.696-6.023,6.01s2.703,6.009,6.023,6.009c3.32,0,6.023-2.695,6.023-6.009S19.334,9.99,16.014,9.99z M16,20 c-2.206,0-4-1.795-4-4c0-2.206,1.794-4,4-4c2.205,0,4,1.794,4,4C20,18.205,18.205,20,16,20z"></path>
                                </svg>
                            </span>
                            <span class="label">Настройки</span>
                        </a>

                        <a href="/logout">
                            <span class="nav-header-icon">
                                <svg id="svg-id-exit" viewBox="0 0 31.979 32">
                                    <path d="M3.641,16.989h17.326c0.553,0,1-0.448,1-1c0-0.553-0.447-1-1-1H3.703l3.617-3.618 c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L0,16.021l5.906,6.062c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L3.641,16.989z M29.979,0h-17c-1.104,0-2,0.896-2,2v9h2.014V3.22 c0-0.668,0.542-1.21,1.21-1.21h14.522c0.668,0,1.209,0.542,1.209,1.21l0.031,25.571c0,0.668-0.541,1.21-1.209,1.21H14.202 c-0.668,0-1.21-0.542-1.21-1.21v-7.824l-2.014,0.003V30c0,1.104,0.896,2,2,2h17c1.105,0,2-0.896,2-2V2 C31.979,0.896,31.084,0,29.979,0z"></path>
                                </svg>
                            </span>
                            <span class="label">Выход</span>
                        </a>
                    </div>

                </div>

                <div class="language-header">
                    <a class="switch-lang-link" href="#">
                        RU
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>

