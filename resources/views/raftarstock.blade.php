@extends('layouts.front')
@section('content')
<style>
    .whatever {
        display: none;
    }
    .what {
        display: none;
        position: absolute;
        top: -37px;
    }
    .dataTables_filter {
        display: flex;
    }
    table.dataTable > thead > tr > th, table.dataTable > thead > tr > td {
        padding: 10px;
         border-bottom: 0px solid rgba(0, 0, 0, 0.3);
    }
</style>
<main >
    <div class="container-fluid">
        <div class="row">
            <!-- strat side-bar && menu -->

            @include('components.sidebar')            

            <!-- start content page  -->
            <div class="col-md-11">

                @include('components.headinfo') 

                <div class="Performance-of-percentages">
                    <div class="col-md-12">
                        <div class="button-stock">
                            <button>رفتار درصدی </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="of-percentages">
                            <div class="col-md-12">
                                <div class="right-performance">
                                    <!-- table -->
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>نام درصدی
                                                    <i class="bboo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                        </svg>
                                                    </i> 
                                                </th>


                                                <th style="position: relative; left:10px;"> سود تجمعی

                                                </th>

                                                <th>  میانگین سود از هر سهم 

                                                </th>

                                                <th>  میانگین زمان حضور   

                                                </th>
                                                
                                                <th>  میانگین رفتار سهام بعد از ورود   

                                                </th>

                                                <th>  میانگین رفتار سهام بعد از خروج   

                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody >
                                        @foreach ($Raftar_Darsadi_Tajmiei as $item)    
                                            <tr>
                                                <td>{{$item['code']}}</td>
                                                <td>{{round($item['AllTimeChangePrice'],2)}}% </td>
                                                <td @if($item['AllTimeChangeMarket'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['AllTimeChangeMarket'],2)}}% </td>
                                                <td> {{round($item['duration'],0)}}</td>    
                                                <td @if($item['AllTimeChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['AllTimeChangePrice'],2)}}% </td>
                                                <td @if($item['60daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['60daysChangePrice_After'],2)}}% </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="Smart-and-knowledgeable">
                    <div class="col-md-12">
                        <div class="and-knowledgeable">
                            <button>زرنگ و خبردار </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="Smart-and">
                            <div class="col-md-6">
                                <div class="right-performance">
                                    
                                    <!-- table -->
                                    <table >
                                        <thead>
                                            <tr>
                                                <th>نام درصدی</th>
                                                <th> تعداد زرنگی </th> 
                                                <th>تعداد خبرداری</th> 
                                                <th>تعدادسودگیری</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($Smart_Darsadi as $item) 
                                            <tr>
                                                <td style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#{{$item['_id']}}">{{$item['code']}}</td>
                                                <td>{{$item['Zerang']}}</td>
                                                <td>{{$item['Khabardar']}}</td>
                                                <td>{{$item['Amalkard']}}</td>  
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                    @foreach ($Smart_Darsadi as $item)
                                    <!-- The Modal -->
                                    <div class="modal" id="{{$item['_id']}}">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title"> کارنامه درصدی ها 

                                            </h4>
                                            @php
                                                $tajamoei=0;
                                                $i=0;
                                                $duaration=0;
                                            @endphp
                                            @foreach ($Raftar_Darsadi_Tajmiei->where('code',$item['code']) as $post)
                                             @php   
                                                $i++;
                                                $tajamoei=$tajamoei+$post['AllTimeChangePrice'];
                                                $duaration = $duaration +$post['duration'];
                                            @endphp
                                            @endforeach
                                            <div class="header-prec-title">
                                                <div class="heder-prec-item">
                                                    <p> نام درصدی : {{$item['code']}} </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> سود تجمعی : {{round($tajamoei,2)}}% </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> میانگین سود از هر سهم : {{round($tajamoei/$i,2)}}% </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> میانگین زمان حضور: {{round($duaration/$i,0)}} روز </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> زرنگی : {{$item['Zerang']}} </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> خبرداری : {{$item['Khabardar']}} </p>
                                                </div>
                                                <div class="heder-prec-item">
                                                    <p> سودگیری : {{$item['Amalkard']}} </p>
                                                </div>
                                            </div>
                                            </div>



                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="pop-table">
                                                        <div class="head-table">
                                                            <div class="button"> رفتار نماد بعد از خروج درصدی </div>
                                                            <div class="button"> رفتار بازار بعد از خروج درصدی </div>
                                                            <div class="button"> رفتار نماد بعد از ورود درصدی </div>
                                                            <div class="button"> رفتار بازار بعد از ورود درصدی </div>
                                                            <div class="buttonnn"> </div>
                                                        </div>
                                                        <!-- table -->
                                                        <table class="display">
                                                            <style>
                                                                 .thhh{width: 10% !important;}   
                                                                 .thh{width: 6% !important;} 
                                                            </style>
                                                            <thead>
                                                                <tr>
                                                                    <th class="thhh">نماد
                                                                       
                                                                    </th>
                                                                    <th class="thhh"> تاریخ ورود </th>
                                                                    <th class="thhh"> تاریخ خروج </th>
                                                                    <th class="thh">بعد از 15 روز </th>
                                                                    <th class="thh"> بعد از 30 روز</th>
                                                                    <th class="thh"> بعد از 60 روز </th>

                                                                    <th class="thh">بعد از 15 روز </th>
                                                                    <th class="thh"> بعد از 30 روز</th>
                                                                    <th class="thh"> بعد از 60 روز </th>

                                                                    <th class="thh">بعد از 15 روز </th>
                                                                    <th class="thh"> بعد از 30 روز</th>
                                                                    <th class="thh"> بعد از 60 روز </th>

                                                                    <th class="thh">بعد از 15 روز </th>
                                                                    <th class="thh"> بعد از 30 روز</th>
                                                                    <th class="thh"> بعد از 60 روز </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($Raftar_Darsadi_Tajmiei->where('code',$item['code']) as $post)
                                                                <tr>
                                                                    <td>{{$post['stock_name']}} </td>
                                                                    <td> {{$post['first_shamsi']}} </td>
                                                                    <td>{{$post['last_shamsi']}} </td>
                                                                    <td @if($post['15daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['15daysChangePrice'],2)}} </td>
                                                                    <td @if($post['30daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['30daysChangePrice'],2)}} </td>
                                                                    <td @if($post['60daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['60daysChangePrice'],2)}}</td>
                                                                    <td @if($post['15daysChangeMarket'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['15daysChangeMarket'],2)}} </td>
                                                                    <td @if($post['30daysChangeMarket'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['30daysChangeMarket'],2)}} </td>
                                                                    <td @if($post['60daysChangeMarket'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['60daysChangeMarket'],2)}} </td>
                                                                    <td @if($post['15daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['15daysChangePrice_After'],2)}} </td>
                                                                    <td @if($post['30daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['30daysChangePrice_After'],2)}} </td>
                                                                    <td @if($post['60daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['60daysChangePrice_After'],2)}} </td>
                                                                    <td @if($post['15daysChangeMarket_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['15daysChangeMarket_After'],2)}} </td>
                                                                    <td @if($post['30daysChangeMarket_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['30daysChangeMarket_After'],2)}} </td>
                                                                    <td @if($post['60daysChangeMarket_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($post['60daysChangeMarket_After'],2)}} </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="title-table">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="71" viewBox="0 0 72 71" fill="none">
                                                <g filter="url(#filter0_f_147_183)">
                                                    <ellipse cx="36" cy="35.5" rx="16" ry="15.5" fill="#FEE17C" fill-opacity="0.54" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_f_147_183" x="0" y="0" width="72" height="71" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                        <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_147_183" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path
                                                    d="M15.5 2.83301C13.6435 2.83301 11.863 3.57051 10.5503 4.88326C9.2375 6.19602 8.5 7.97649 8.5 9.83301C8.5 13.693 12.445 14.77 12.723 19.333H18.276C18.554 14.77 22.5 13.693 22.5 9.83301C22.5 7.97649 21.7625 6.19602 20.4497 4.88326C19.137 3.57051 17.3565 2.83301 15.5 2.83301ZM15.5 28.166C17.394 28.166 17.983 27.139 18.167 26.5H12.833C13.017 27.14 13.606 28.166 15.5 28.166ZM12.75 25.498H18.25V20.334H12.75V25.498Z"
                                                    fill="#FFD233" />
                                            </svg>
                                            <span>میتوانید با کلیک کردن روی نام هر درصدی کارنامه ی آن را مشاهده کنید .</span>
                                        </p>    
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="left-performance">
                                    <div class="box-guidance">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                <path d="M22.5 5.625C13.1836 5.625 5.625 13.1836 5.625 22.5C5.625 31.8164 13.1836 39.375 22.5 39.375C31.8164 39.375 39.375 31.8164 39.375 22.5C39.375 13.1836 31.8164 5.625 22.5 5.625ZM21.9727 32.3438C21.625 32.3438 21.2851 32.2407 20.9961 32.0475C20.707 31.8544 20.4817 31.5798 20.3486 31.2586C20.2156 30.9374 20.1808 30.584 20.2486 30.243C20.3164 29.902 20.4839 29.5888 20.7297 29.343C20.9755 29.0971 21.2887 28.9297 21.6297 28.8619C21.9707 28.7941 22.3241 28.8289 22.6453 28.9619C22.9665 29.095 23.2411 29.3203 23.4342 29.6093C23.6274 29.8984 23.7305 30.2383 23.7305 30.5859C23.7305 31.0521 23.5453 31.4992 23.2156 31.8289C22.886 32.1586 22.4389 32.3438 21.9727 32.3438ZM24.9117 23.3789C23.487 24.3352 23.291 25.2114 23.291 26.0156C23.291 26.342 23.1614 26.6549 22.9306 26.8857C22.6999 27.1165 22.3869 27.2461 22.0605 27.2461C21.7342 27.2461 21.4212 27.1165 21.1905 26.8857C20.9597 26.6549 20.8301 26.342 20.8301 26.0156C20.8301 24.0899 21.716 22.5589 23.5389 21.3346C25.2334 20.1973 26.1914 19.4766 26.1914 17.8919C26.1914 16.8144 25.5762 15.9961 24.3026 15.3905C24.0029 15.2481 23.3358 15.1093 22.5149 15.1189C21.4849 15.1321 20.6851 15.3782 20.0689 15.8739C18.907 16.8091 18.8086 17.8269 18.8086 17.8418C18.8008 18.0034 18.7613 18.1619 18.6922 18.3082C18.6232 18.4545 18.526 18.5857 18.4062 18.6945C18.2865 18.8032 18.1465 18.8873 17.9942 18.942C17.8419 18.9966 17.6804 19.0207 17.5188 19.0129C17.3572 19.0051 17.1987 18.9656 17.0524 18.8966C16.9061 18.8275 16.7749 18.7304 16.6661 18.6106C16.5574 18.4908 16.4733 18.3508 16.4186 18.1985C16.364 18.0463 16.3399 17.8847 16.3477 17.7231C16.3573 17.5096 16.5059 15.5856 18.5247 13.9614C19.5715 13.1194 20.903 12.6817 22.4798 12.6624C23.596 12.6492 24.6445 12.8382 25.3556 13.1739C27.4834 14.1803 28.6523 15.8581 28.6523 17.8919C28.6523 20.8652 26.6651 22.2003 24.9117 23.3789Z" fill="#FAC713"/>
                                            </svg>
                                            راهنمای استفاده از جدول
                                        </p>
                                        <p>
                                            <span> زرنگ </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <g clip-path="url(#clip0_123_94)">
                                                <path d="M20.5206 7.56994C20.1138 7.04495 19.5602 6.65271 18.93 6.44306L17.305 5.91494C17.1788 5.87084 17.0696 5.78847 16.9925 5.67931C16.9351 5.59823 16.8974 5.50494 16.8822 5.40679C16.867 5.30864 16.8748 5.2083 16.905 5.11367C16.9352 5.01904 16.9869 4.93271 17.0561 4.86146C17.1253 4.79021 17.21 4.73599 17.3038 4.70306L18.93 4.17494C19.4116 4.00872 19.849 3.73488 20.2089 3.37424C20.5688 3.0136 20.8417 2.57565 21.0069 2.09369L21.0206 2.05369L21.5487 0.42869C21.5925 0.302792 21.6744 0.19365 21.7831 0.116415C21.8917 0.0391788 22.0217 -0.00231934 22.155 -0.00231934C22.2883 -0.00231934 22.4183 0.0391788 22.5269 0.116415C22.6356 0.19365 22.7175 0.302792 22.7612 0.42869L23.2894 2.05369C23.4538 2.54811 23.7313 2.99732 24.0999 3.36558C24.4685 3.73384 24.9179 4.01098 25.4125 4.17494L27.0387 4.70306L27.0712 4.71119C27.1962 4.75566 27.3043 4.83772 27.3808 4.94609C27.4573 5.05447 27.4983 5.18386 27.4983 5.3165C27.4983 5.44914 27.4573 5.57853 27.3808 5.68691C27.3043 5.79529 27.1962 5.87734 27.0712 5.92181L25.445 6.44994C24.9506 6.61411 24.5012 6.89133 24.1327 7.25956C23.7641 7.62779 23.4865 8.07689 23.3219 8.57119L22.7931 10.1962C22.7602 10.2899 22.7059 10.3748 22.6345 10.444C22.5632 10.5132 22.4768 10.5648 22.3821 10.595C22.2874 10.6251 22.187 10.6328 22.0888 10.6175C21.9906 10.6022 21.8973 10.5643 21.8162 10.5068C21.7079 10.43 21.626 10.3215 21.5819 10.1962L21.0531 8.57119C20.9339 8.20957 20.7538 7.87096 20.5206 7.56994ZM24.4375 11.9887C24.4114 12.0255 24.3929 12.0671 24.3831 12.1112C24.3627 12.1933 24.3736 12.2801 24.4139 12.3546C24.4541 12.4291 24.5207 12.4858 24.6006 12.5137L25.4619 12.7937C25.724 12.8807 25.9622 13.0277 26.1575 13.223C26.3528 13.4183 26.4999 13.6565 26.5869 13.9187L26.8669 14.7793C26.8898 14.8432 26.9314 14.8988 26.9861 14.9389C27.0409 14.979 27.1064 15.0018 27.1743 15.0045C27.2421 15.0071 27.3092 14.9894 27.3669 14.9536C27.4246 14.9178 27.4703 14.8656 27.4981 14.8037V14.7974C27.5018 14.7895 27.5051 14.7813 27.5081 14.7731L27.7881 13.9124C27.8753 13.6508 28.0222 13.4132 28.2173 13.2183C28.4124 13.0235 28.6502 12.8768 28.9119 12.7899L29.7731 12.5099C29.839 12.4861 29.8959 12.4426 29.9361 12.3853C29.9763 12.328 29.9979 12.2596 29.9979 12.1896C29.9979 12.1196 29.9763 12.0513 29.9361 11.994C29.8959 11.9367 29.839 11.8931 29.7731 11.8693L29.7556 11.8649L28.8944 11.5849C28.6328 11.4979 28.3952 11.3512 28.2002 11.1563C28.0053 10.9615 27.8584 10.7239 27.7712 10.4624L27.4912 9.60181C27.468 9.53526 27.4246 9.47759 27.3671 9.43678C27.3096 9.39598 27.2408 9.37406 27.1703 9.37406C27.0998 9.37406 27.031 9.39598 26.9735 9.43678C26.916 9.47759 26.8727 9.53526 26.8494 9.60181L26.5694 10.4624C26.4841 10.7222 26.3398 10.9587 26.1479 11.1535C25.956 11.3482 25.7216 11.4959 25.4631 11.5849L24.6019 11.8649C24.5356 11.8883 24.4782 11.9315 24.4375 11.9887ZM15 27.4999C8.09625 27.4999 2.5 21.9037 2.5 14.9999C2.5 8.09619 8.09625 2.49994 15 2.49994C16.2175 2.49994 17.3938 2.67369 18.5063 2.99806L16.9175 3.51431C16.5444 3.63959 16.2197 3.87816 15.9886 4.19675C15.7575 4.51534 15.6316 4.89809 15.6283 5.29166C15.6251 5.68522 15.7447 6.06999 15.9705 6.39233C16.1964 6.71468 16.5171 6.95855 16.8881 7.08994L18.5444 7.62869C18.8519 7.7333 19.131 7.90771 19.3597 8.13824C19.5885 8.36877 19.7608 8.64917 19.8631 8.95744L20.3913 10.5781C20.4846 10.8559 20.6412 11.1083 20.8486 11.3153C21.0561 11.5224 21.3087 11.6785 21.5867 11.7714C21.8647 11.8642 22.1605 11.8913 22.4507 11.8505C22.741 11.8097 23.0178 11.7021 23.2594 11.5362C23.1694 11.7372 23.1221 11.9548 23.1206 12.1751C23.1191 12.3954 23.1634 12.6135 23.2506 12.8158C23.3379 13.0181 23.4662 13.2 23.6275 13.35C23.7888 13.5001 23.9795 13.615 24.1875 13.6874L25.0775 13.9768C25.1529 14.0034 25.2211 14.0469 25.277 14.104C25.3329 14.1611 25.375 14.2303 25.4 14.3062L25.6787 15.1624C25.7976 15.5207 26.0401 15.825 26.3628 16.0208C26.6855 16.2166 27.0673 16.2912 27.44 16.2312C26.8212 22.5581 21.4881 27.4999 15 27.4999ZM10.9375 13.7499C11.3519 13.7499 11.7493 13.5853 12.0424 13.2923C12.3354 12.9993 12.5 12.6018 12.5 12.1874C12.5 11.773 12.3354 11.3756 12.0424 11.0826C11.7493 10.7896 11.3519 10.6249 10.9375 10.6249C10.5231 10.6249 10.1257 10.7896 9.83265 11.0826C9.53962 11.3756 9.375 11.773 9.375 12.1874C9.375 12.6018 9.53962 12.9993 9.83265 13.2923C10.1257 13.5853 10.5231 13.7499 10.9375 13.7499ZM20.625 12.1874C20.625 11.773 20.4604 11.3756 20.1674 11.0826C19.8743 10.7896 19.4769 10.6249 19.0625 10.6249C18.6481 10.6249 18.2507 10.7896 17.9576 11.0826C17.6646 11.3756 17.5 11.773 17.5 12.1874C17.5 12.6018 17.6646 12.9993 17.9576 13.2923C18.2507 13.5853 18.6481 13.7499 19.0625 13.7499C19.4769 13.7499 19.8743 13.5853 20.1674 13.2923C20.4604 12.9993 20.625 12.6018 20.625 12.1874ZM11.5325 21.6756C12.6028 22.2317 13.7939 22.5149 15 22.4999C16.206 22.5149 17.397 22.2317 18.4673 21.6757C19.5376 21.1196 20.4539 20.3078 21.135 19.3124C21.2433 19.1359 21.2771 18.9236 21.2289 18.7221C21.1806 18.5207 21.0543 18.3467 20.8778 18.2384C20.7013 18.1301 20.4889 18.0963 20.2875 18.1445C20.0861 18.1928 19.9121 18.319 19.8038 18.4956C19.263 19.2636 18.5425 19.8876 17.7052 20.3132C16.8679 20.7388 15.9392 20.9531 15 20.9374C14.0608 20.9528 13.1321 20.7384 12.2948 20.3128C11.4574 19.8872 10.7368 19.2633 10.1956 18.4956C10.0873 18.319 9.91329 18.1928 9.71186 18.1445C9.51043 18.0963 9.2981 18.1301 9.12156 18.2384C8.94503 18.3467 8.81876 18.5207 8.77052 18.7221C8.72229 18.9236 8.75605 19.1359 8.86437 19.3124C9.54558 20.3078 10.4621 21.1196 11.5325 21.6756Z" fill="#9268D6" fill-opacity="0.48"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_123_94">
                                                <rect width="30" height="30" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                            درصدی ای که قبل از ریزش بازار فروخته 
                                        </p>
                                        <p>
                                            <span> خبردار </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M15 3.75C21.2133 3.75 26.25 8.7868 26.25 15C26.25 21.2133 21.2133 26.25 15 26.25C8.7868 26.25 3.75 21.2133 3.75 15C3.75 8.7868 8.7868 3.75 15 3.75Z" stroke="#4AC9D0" stroke-opacity="0.62" stroke-width="2.5" stroke-linecap="round"/>
                                                <path d="M10 17.5C10.625 19.375 12.2386 21.25 15 21.25C17.7614 21.25 19.375 19.375 20 17.5" stroke="#4AC9D0" stroke-opacity="0.62" stroke-width="2.5" stroke-linecap="round"/>
                                                <path d="M11.25 13.75C11.9404 13.75 12.5 12.9105 12.5 11.875C12.5 10.8395 11.9404 10 11.25 10C10.5596 10 10 10.8395 10 11.875C10 12.9105 10.5596 13.75 11.25 13.75Z" fill="#4AC9D0" fill-opacity="0.62"/>
                                                <path d="M18.75 10.625C19.7855 10.625 20.625 11.1846 20.625 11.875C20.625 12.5654 19.7855 13.125 18.75 13.125C17.7145 13.125 16.875 12.5654 16.875 11.875C16.875 11.1846 17.7145 10.625 18.75 10.625Z" fill="#4AC9D0" fill-opacity="0.62"/>
                                            </svg>
                                            درصدی ای که قبل از بازار صعودی خریده
                                        </p>
                                        <p>
                                            <span> سودگیر </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M15 3.75C21.2133 3.75 26.25 8.7868 26.25 15C26.25 21.2133 21.2133 26.25 15 26.25C8.7868 26.25 3.75 21.2133 3.75 15C3.75 8.7868 8.7868 3.75 15 3.75Z" stroke="#66DB5B" stroke-opacity="0.82" stroke-width="2.5" stroke-linecap="round"/>
                                                <path d="M10 17.5C10.625 19.375 12.2386 21.25 15 21.25C17.7614 21.25 19.375 19.375 20 17.5" stroke="#66DB5B" stroke-opacity="0.82" stroke-width="2.5" stroke-linecap="round"/>
                                                <path d="M11.25 13.75C11.9404 13.75 12.5 12.9105 12.5 11.875C12.5 10.8395 11.9404 10 11.25 10C10.5596 10 10 10.8395 10 11.875C10 12.9105 10.5596 13.75 11.25 13.75Z" fill="#66DB5B" fill-opacity="0.82"/>
                                                <path d="M18.75 13.75C19.4404 13.75 20 12.9105 20 11.875C20 10.8395 19.4404 10 18.75 10C18.0596 10 17.5 10.8395 17.5 11.875C17.5 12.9105 18.0596 13.75 18.75 13.75Z" fill="#66DB5B" fill-opacity="0.82"/>
                                                </svg>
                                            درصدی ای که تو بازار نزولی سود کرده
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- section 2   -->
            </div>
        </div> 
    </div>    
</main>
@endsection