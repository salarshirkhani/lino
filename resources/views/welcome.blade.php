@extends('layouts.front')
@section('content')
<main >
    <div class="container-fluid">
        <div class="row">

            @include('components.sidebar')            
            <!-- start content page  -->
            <div class="col-md-11">
                
                @include('components.headinfo') 

                <div class="Lino-basket-performance">
                    <div class="col-md-12">
                        <div class="Lino-basket">
                            <button>عملکرد سبد لینو</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="Lino-perfor">
                            <div class="col-md-6">
                                <div class="right-performance">
                                    <div class="title-table">
                                        <h2>بررسی بازدهی برخی نماد های سبد
                                            <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="ph:chart-line">
                                            <path id="Vector" d="M39.875 32.5C39.875 32.8315 39.7301 33.1495 39.4723 33.3839C39.2144 33.6183 38.8647 33.75 38.5 33.75H5.5C5.13533 33.75 4.78559 33.6183 4.52773 33.3839C4.26987 33.1495 4.125 32.8315 4.125 32.5V7.5C4.125 7.16848 4.26987 6.85054 4.52773 6.61612C4.78559 6.3817 5.13533 6.25 5.5 6.25C5.86467 6.25 6.21441 6.3817 6.47227 6.61612C6.73013 6.85054 6.875 7.16848 6.875 7.5V22.2453L15.5942 15.3125C15.8315 15.1237 16.1329 15.0147 16.448 15.0039C16.7631 14.9931 17.0728 15.0811 17.325 15.2531L27.433 22.1453L37.5942 14.0625C37.7274 13.9426 37.8862 13.8487 38.0608 13.7867C38.2354 13.7246 38.4221 13.6957 38.6095 13.7016C38.7968 13.7076 38.9809 13.7483 39.1503 13.8212C39.3197 13.8942 39.4709 13.9979 39.5946 14.126C39.7183 14.254 39.8119 14.4037 39.8697 14.5658C39.9274 14.728 39.9481 14.8991 39.9304 15.0688C39.9127 15.2385 39.8571 15.403 39.7668 15.5524C39.6766 15.7018 39.5537 15.8329 39.4058 15.9375L28.4058 24.6875C28.1685 24.8763 27.8671 24.9853 27.552 24.9961C27.2369 25.0069 26.9272 24.9189 26.675 24.7469L16.567 17.8578L6.875 25.5672V31.25H38.5C38.8647 31.25 39.2144 31.3817 39.4723 31.6161C39.7301 31.8505 39.875 32.1685 39.875 32.5Z" fill="#57F884"/>
                                            </g>
                                            </svg>
                                        </h2>
                                    </div>
                                    <!-- table -->
                                    <table >
                                        <thead>
                                            <tr>
                                                <th>نماد</th>
                                                <th>درصد بازدهی</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($Darsadi_SudGir as $item)      
                                            <tr>
                                                <td>{{$item['code']}}</td>
                                                <td>{{round($item['profit'],2)}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-performance">
                                    <!-- green style them tab -->
                                    <div class="tab">
                                        <div class="header-green-tab">
                                            <h3> درصد رشد کل سبد </h3>
                                            <p> از تاریخ 1402/1/12 تا 1402/4/4 </p>
                                        </div>
                                        <div class="info-tab">
                                            <span>+</span><h4>180 %
                                                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="68" viewBox="0 0 68 68" fill="none">
                                                    <path d="M24.191 39.5225L21.1712 42.4818C20.6269 43.0153 19.709 42.6296 19.709 41.8675V32.1656C19.709 31.6905 20.0941 31.3054 20.5692 31.3054H24.191M31.6611 36.7735L29.8963 35.2672C29.5649 34.9844 29.0745 34.9939 28.7544 35.2894L28.6227 35.411C28.0717 35.9196 27.1791 35.5288 27.1791 34.7789V26.1895C27.1791 25.7144 27.5642 25.3293 28.0392 25.3293H31.6611M39.1312 34.2934L36.1176 37.307C35.5757 37.8489 34.6491 37.4651 34.6491 36.6988V20.2135C34.6491 19.7384 35.0342 19.3533 35.5093 19.3533H39.1312M43.3293 34.0095L42.0936 32.7738C41.5517 32.2319 41.9355 31.3054 42.7019 31.3054H47.235C47.7101 31.3054 48.0952 31.6905 48.0952 32.1656V36.6988C48.0952 37.4651 47.1687 37.8489 46.6268 37.307L46.0267 36.7069C45.6917 36.3719 45.149 36.3708 44.8127 36.7043L35.2166 46.2206C34.8967 46.5378 34.3861 46.5545 34.0462 46.2586L30.0606 42.7899C29.7237 42.4967 29.2184 42.5101 28.8975 42.8208L24.0677 47.4973C23.9072 47.6527 23.6927 47.7395 23.4693 47.7395H21.8158C21.0453 47.7395 20.6634 46.8043 21.2138 46.2649L28.8163 38.8152C29.1332 38.5047 29.6342 38.4861 29.9732 38.7723L34.6491 42.7196" fill="#18CA49"/>
                                                </svg>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- red style them tab -->
                                    <div class="tab">
                                        <div class="RED-style-tab">
                                            <h3> درصد رشد کل سبد </h3>
                                            <p> از تاریخ 1402/1/12 تا 1402/4/4 </p>
                                        </div>
                                        <div class="info-tab ">
                                            <span class="RED">-</span><h4>180 %
                                                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="68" viewBox="0 0 68 68" fill="none">
                                                    <path d="M24.191 39.5225L21.1712 42.4818C20.6269 43.0153 19.709 42.6296 19.709 41.8675V32.1656C19.709 31.6905 20.0941 31.3054 20.5692 31.3054H24.191M31.6611 36.7735L29.8963 35.2672C29.5649 34.9844 29.0745 34.9939 28.7544 35.2894L28.6227 35.411C28.0717 35.9196 27.1791 35.5288 27.1791 34.7789V26.1895C27.1791 25.7144 27.5642 25.3293 28.0392 25.3293H31.6611M39.1312 34.2934L36.1176 37.307C35.5757 37.8489 34.6491 37.4651 34.6491 36.6988V20.2135C34.6491 19.7384 35.0342 19.3533 35.5093 19.3533H39.1312M43.3293 34.0095L42.0936 32.7738C41.5517 32.2319 41.9355 31.3054 42.7019 31.3054H47.235C47.7101 31.3054 48.0952 31.6905 48.0952 32.1656V36.6988C48.0952 37.4651 47.1687 37.8489 46.6268 37.307L46.0267 36.7069C45.6917 36.3719 45.149 36.3708 44.8127 36.7043L35.2166 46.2206C34.8967 46.5378 34.3861 46.5545 34.0462 46.2586L30.0606 42.7899C29.7237 42.4967 29.2184 42.5101 28.8975 42.8208L24.0677 47.4973C23.9072 47.6527 23.6927 47.7395 23.4693 47.7395H21.8158C21.0453 47.7395 20.6634 46.8043 21.2138 46.2649L28.8163 38.8152C29.1332 38.5047 29.6342 38.4861 29.9732 38.7723L34.6491 42.7196" fill="#EE1D1D"/>
                                                </svg>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- section 2   -->
                <div class="Lino-performance-comparison">
                    <div class="col-md-12">
                        <div class="Lino-comparison">
                            <button>مقایسه عملکرد لینو</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="Lino-comparis">
                            <div class="col-md-5">
                                <div class="right-comparison">
                                    <div class="title-box">
                                        <h2>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="71" viewBox="0 0 72 71" fill="none">
                                                <g filter="url(#filter0_f_147_183)">
                                                <ellipse cx="36" cy="35.5" rx="16" ry="15.5" fill="#FEE17C" fill-opacity="0.54"/>
                                                </g>
                                                <defs>
                                                <filter id="filter0_f_147_183" x="0" y="0" width="72" height="71" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                                    <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_147_183"/>
                                                </filter>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M15.5 2.83301C13.6435 2.83301 11.863 3.57051 10.5503 4.88326C9.2375 6.19602 8.5 7.97649 8.5 9.83301C8.5 13.693 12.445 14.77 12.723 19.333H18.276C18.554 14.77 22.5 13.693 22.5 9.83301C22.5 7.97649 21.7625 6.19602 20.4497 4.88326C19.137 3.57051 17.3565 2.83301 15.5 2.83301ZM15.5 28.166C17.394 28.166 17.983 27.139 18.167 26.5H12.833C13.017 27.14 13.606 28.166 15.5 28.166ZM12.75 25.498H18.25V20.334H12.75V25.498Z" fill="#FFD233"/>
                                            </svg>
                                            بررسی شاخص لینو با دیگر شاخص ها
                                    </div>
                                    <div class="Lino-suggeste-basket">
                                        <div class="header-box">
                                            <h3> درصد رشد کل سبد </h3>
                                            <p>  تاریخ 1402/1/12 </p>
                                        </div>
                                        <div class="button-box">
                                            <button>
                                                دانلود فایل PDF
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                                    <circle cx="25" cy="25" r="25" fill="white"/>
                                                    <circle cx="25" cy="25" r="24.25" stroke="url(#paint0_angular_162_3037)" stroke-opacity="0.78" stroke-width="1.5"/>
                                                    <defs>
                                                    <radialGradient id="paint0_angular_162_3037" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(25)">
                                                    <stop stop-color="#E863FE"/>
                                                    <stop offset="0.333333" stop-color="#6385FE" stop-opacity="0.97"/>
                                                    <stop offset="0.536458" stop-color="#63F9F0" stop-opacity="0.983448"/>
                                                    <stop offset="0.786458" stop-color="#638BF2"/>
                                                    <stop offset="1" stop-color="#DE2EFB" stop-opacity="0.97"/>
                                                    </radialGradient>
                                                    </defs>
                                                </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                                        <path d="M27.8564 23.5922C28.9575 22.8179 29.7831 21.713 30.2136 20.4377C30.6441 19.1623 30.6569 17.783 30.2503 16.4999C29.4164 13.8668 26.8609 12.4237 24.0993 12.4265H22.5036C22.1229 10.9418 21.4104 9.56285 20.4196 8.39343C19.4289 7.22401 18.1857 6.29461 16.7837 5.67521C15.3818 5.05582 13.8575 4.76257 12.3258 4.81756C10.7941 4.87254 9.29486 5.27432 7.94092 5.99264C6.58697 6.71097 5.41365 7.72711 4.50929 8.96456C3.60493 10.202 2.99311 11.6285 2.71989 13.1367C2.44667 14.6448 2.51919 16.1953 2.93197 17.6714C3.34474 19.1474 4.08703 20.5106 5.10294 21.6582M16.5058 28.1874L16.5003 15.8124M20.8756 23.8122L16.5003 28.1874L12.1251 23.8122" stroke="#AE87FF" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="left-comparison">
                                    <!-- green style chart.js -->
                                    <canvas id="myChart" style="direction:ltr"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>    
</main>
