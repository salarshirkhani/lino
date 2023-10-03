@extends('layouts.front')
@section('content')
<main  >
    <div class="container-fluid">
        <div class="row">
            <!-- strat side-bar && menu -->
            @include('components.sidebar')                

            <!-- start content page  -->
            <div class="col-md-11">
                <div class="content">

                </div>
                <div style="margin-top:200px;"></div>
                <div class="info_account" >
                    <!--
                    <div class="col-lg-4">
                        <div class="box_1">
                            <div class="info_user">
                                <div class="avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                        <path d="M30 10C32.6522 10 35.1957 11.0536 37.0711 12.9289C38.9464 14.8043 40 17.3478 40 20C40 22.6522 38.9464 25.1957 37.0711 27.0711C35.1957 28.9464 32.6522 30 30 30C27.3478 30 24.8043 28.9464 22.9289 27.0711C21.0536 25.1957 20 22.6522 20 20C20 17.3478 21.0536 14.8043 22.9289 12.9289C24.8043 11.0536 27.3478 10 30 10ZM30 35C41.05 35 50 39.475 50 45V49C50 49.5523 49.5523 50 49 50H11C10.4477 50 10 49.5523 10 49V45C10 39.475 18.95 35 30 35Z" fill="#4F5056"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                                        <circle cx="37.5" cy="37.5" r="37.5" fill="url(#paint0_linear_402_238)" fill-opacity="0.72"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_402_238" x1="0" y1="0" x2="75" y2="75" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0729167" stop-color="#BAE4B3"/>
                                        <stop offset="0.390625" stop-color="#73B0E9" stop-opacity="0.682292"/>
                                        <stop offset="0.65625" stop-color="#558BA3" stop-opacity="0.359375"/>
                                        <stop offset="1" stop-color="#2FE641" stop-opacity="0"/>
                                        </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="name_user">
                                    <h3> نام و نام خانودگی </h3>
                                    <p> {{Auth::user()->mobile}} </p>
                                </div>
                            </div>
                            <div class="history_transactions">
                                <svg width="179" height="178" viewBox="0 0 179 178" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="172.38" height="171.666" rx="40" transform="matrix(0.998406 0.0564339 -0.0661822 0.997808 8.89551 -1.27551)" fill="#1C1D20" fill-opacity="0.97"/>
                                </svg>
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.33203 8.33203V13.1133H4.68359V8.33203H0.0078125V5.70703H4.68359V0.925781H7.33203V5.70703H12.043V8.33203H7.33203Z" fill="#F1FEF6"/>
                                </svg>
                                    
                                <svg width="188" height="198" viewBox="0 0 188 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_409_1715)">
                                    <rect width="171.605" height="186.137" rx="30" transform="matrix(0.997323 -0.073122 0.0857181 0.996319 0 12.5481)" fill="#343B4E"/>
                                    <g filter="url(#filter0_f_409_1715)">
                                    <path d="M113.665 169.771C115.544 186.043 112.851 202.149 106.148 214.729C99.4456 227.31 89.2504 235.393 77.6892 237.294C66.128 239.195 54.0936 234.766 44.096 224.931C34.0984 215.096 26.9096 200.614 24.029 184.507C21.1485 168.399 22.7986 151.91 28.6352 138.477C34.4718 125.045 44.0441 115.707 55.3558 112.41C66.6674 109.114 78.8448 112.115 89.348 120.786C99.8513 129.457 107.869 143.13 111.73 158.952L68.4465 174.415L113.665 169.771Z" fill="#174022"/>
                                    </g>
                                    <g filter="url(#filter1_f_409_1715)">
                                    <ellipse cx="62.6179" cy="72.793" rx="62.6179" ry="72.793" transform="matrix(0.994401 -0.102132 0.114752 0.993765 101.912 138.286)" fill="#3687B5"/>
                                    </g>
                                    <g filter="url(#filter2_f_409_1715)">
                                    <path d="M219.648 89.2355C224.211 138.177 192.065 139.335 151.983 142.032C111.9 144.73 58.9568 114.47 54.3947 65.5288C49.8325 16.5877 98.7302 8.20093 138.812 5.50366C178.895 2.80639 215.086 40.2944 219.648 89.2355Z" fill="#3F493B"/>
                                    </g>
                                    </g>
                                    <defs>
                                    <filter id="filter0_f_409_1715" x="-77.3555" y="11.105" width="291.604" height="326.62" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="50" result="effect1_foregroundBlur_409_1715"/>
                                    </filter>
                                    <filter id="filter1_f_409_1715" x="9.7002" y="31.6046" width="325.665" height="345.251" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="50" result="effect1_foregroundBlur_409_1715"/>
                                    </filter>
                                    <filter id="filter2_f_409_1715" x="-45.9023" y="-94.6332" width="365.983" height="336.832" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="50" result="effect1_foregroundBlur_409_1715"/>
                                    </filter>
                                    <clipPath id="clip0_409_1715">
                                    <rect width="171.605" height="186.137" rx="30" transform="matrix(0.997323 -0.073122 0.0857181 0.996319 0 12.5481)" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>                              
                            </div>
                            <div class="history_info">
                                <h5> سابقه تراکنش های شما </h5>
                                <p> مبلغ تراکنش :2,500,000 ریال </p>
                                <p> کد پیگیری :2254872541 </p>
                                <p> تاریخ : 11 / 4 / 1402 </p>       
                            </div>
                        </div>
                    </div>
                -->
                    <div class="col-lg-5">
                        <div class="colume_2">
                            <div class="box_2">
                                <div class="subscription_type">
                                    <h3> نوع اشتراک </h3>
                                    <p>  اشتراک  <span> 5 </span> روزه <span> رایگان </span> </p>
                                </div>
                            </div>
<!--                                 chart page account -->
                            <div class="box_3">
                                <h3>70 <span>روز</span>  </h3>
<!--                                     is chart ircular -->
                                <div class="chart" data-percent="75" >
                                    
                                </div>
                                <p> اشتراک باقی مانده </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="colume_3">
                            <div class="box_4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                    <path d="M28.9457 14.1428H4.05428C3.70075 14.1357 3.35014 14.2081 3.02842 14.3549C2.7067 14.5016 2.42212 14.7188 2.19575 14.9905C1.96938 15.2621 1.80703 15.5812 1.72071 15.9241C1.6344 16.267 1.62634 16.625 1.69714 16.9714L4.28999 29.9357C4.40019 30.4761 4.69642 30.9608 5.12712 31.3053C5.55781 31.6499 6.09569 31.8325 6.64714 31.8214H26.3529C26.9043 31.8325 27.4422 31.6499 27.8729 31.3053C28.3036 30.9608 28.5998 30.4761 28.71 29.9357L31.3029 16.9714C31.3736 16.625 31.3656 16.267 31.2793 15.9241C31.193 15.5812 31.0306 15.2621 30.8042 14.9905C30.5779 14.7188 30.2933 14.5016 29.9716 14.3549C29.6498 14.2081 29.2992 14.1357 28.9457 14.1428ZM21.2143 5.89282L25.9286 14.1428L21.2143 5.89282ZM7.07142 14.1428L11.7857 5.89282L7.07142 14.1428Z" fill="white"/>
                                    <path d="M21.2143 5.89282L25.9286 14.1428M7.07142 14.1428L11.7857 5.89282M28.9457 14.1428H4.05428C3.70075 14.1357 3.35014 14.2081 3.02842 14.3549C2.7067 14.5016 2.42212 14.7188 2.19575 14.9905C1.96938 15.2621 1.80703 15.5812 1.72071 15.9241C1.6344 16.267 1.62634 16.625 1.69714 16.9714L4.28999 29.9357C4.40019 30.4761 4.69642 30.9608 5.12712 31.3053C5.55781 31.6499 6.09569 31.8325 6.64714 31.8214H26.3529C26.9043 31.8325 27.4422 31.6499 27.8729 31.3053C28.3036 30.9608 28.5998 30.4761 28.71 29.9357L31.3029 16.9714C31.3736 16.625 31.3656 16.267 31.2793 15.9241C31.193 15.5812 31.0306 15.2621 30.8042 14.9905C30.5779 14.7188 30.2933 14.5016 29.9716 14.3549C29.6498 14.2081 29.2992 14.1357 28.9457 14.1428Z" stroke="#7EA094" stroke-width="2.35714" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="subscription_type">
                                    <h3> سبد سهم های من </h3>
                                    <table>
                                        <tbody class="scroll">
                                            <tr>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> وسدیدوسدیدوسدید </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                                <td> گشان </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box_5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <g clip-path="url(#clip0_409_1786)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.333 3.33337C16.1229 3.33337 14.0033 4.21135 12.4405 5.77415C10.8776 7.33695 9.99967 9.45657 9.99967 11.6667C9.99967 13.8768 10.8776 15.9965 12.4405 17.5593C14.0033 19.1221 16.1229 20 18.333 20C20.5431 20 22.6628 19.1221 24.2256 17.5593C25.7884 15.9965 26.6663 13.8768 26.6663 11.6667C26.6663 9.45657 25.7884 7.33695 24.2256 5.77415C22.6628 4.21135 20.5431 3.33337 18.333 3.33337ZM18.333 21.6667C14.3413 21.6667 10.708 22.8234 8.03634 24.4517C6.70301 25.2684 5.56301 26.2267 4.73967 27.2684C3.92967 28.295 3.33301 29.5217 3.33301 30.8334C3.33301 32.2417 4.01801 33.3517 5.00467 34.1434C5.93801 34.8934 7.16967 35.39 8.47801 35.7367C11.108 36.4317 14.618 36.6667 18.333 36.6667C18.7163 36.6667 19.0997 36.6634 19.4747 36.6584C19.7538 36.6545 20.0275 36.5807 20.2706 36.4435C20.5138 36.3064 20.7186 36.1103 20.8662 35.8734C21.0139 35.6365 21.0997 35.3663 21.1157 35.0876C21.1317 34.8089 21.0775 34.5307 20.958 34.2784C20.3246 32.9412 19.9972 31.4796 19.9997 30C19.9997 27.9134 20.638 25.98 21.728 24.3784C21.89 24.1404 21.9876 23.8644 22.0113 23.5775C22.0349 23.2905 21.9838 23.0023 21.863 22.741C21.7421 22.4797 21.5557 22.2541 21.3217 22.0863C21.0877 21.9184 20.8143 21.8141 20.528 21.7834C19.8113 21.7067 19.078 21.6667 18.333 21.6667ZM36.1797 26.78C36.4833 26.4657 36.6513 26.0447 36.6475 25.6077C36.6437 25.1707 36.4684 24.7527 36.1594 24.4437C35.8504 24.1347 35.4323 23.9594 34.9953 23.9556C34.5583 23.9518 34.1373 24.1198 33.823 24.4234L28.5197 29.7267L26.163 27.37C25.8487 27.0664 25.4277 26.8985 24.9907 26.9023C24.5537 26.906 24.1357 27.0813 23.8266 27.3903C23.5176 27.6994 23.3424 28.1174 23.3386 28.5544C23.3348 28.9914 23.5027 29.4124 23.8063 29.7267L27.223 33.1434C27.3933 33.3137 27.5954 33.4488 27.8179 33.541C28.0404 33.6332 28.2788 33.6806 28.5197 33.6806C28.7605 33.6806 28.999 33.6332 29.2215 33.541C29.4439 33.4488 29.6461 33.3137 29.8163 33.1434L36.1797 26.78Z" fill="#7EA094"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_409_1786">
                                    <rect width="40" height="40" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <div class="subscription_type">
                                    <h3> درصدی های تحت نظر </h3>
                                    <table>
                                        <tbody class="scroll">
                                            <tr>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                                <td class="td-box5"> درصدی شماره 247 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                


            </div>
        </div>
    </div>
</main>
@endsection