@extends('layouts.front')
@section('content')

<main  >
    <div class="container-fluid">
        <div class="row">
            <!-- strat side-bar && menu -->
            @include('components.sidebar')            

            <!-- start content page  -->
            <div class="col-md-11">
                
            @include('components.headinfo') 

                <!-- start stock-information -->
                <div class="Stocks">
                    <div class="col-md-12">
                        <div class="button-stock">
                            <button> سهام ها </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="Lino-perfor">
                            <div class="col-md-12">
                                <div class="right-performance">
                                    <div class="title-table">
                                        <div class="button"> رفتار نماد بعد از ورود درصدی </div>
                                        <div class="button"> رفتار نماد بعد از ورود درصدی </div>
                                        <div class="buttonnn"> </div>
                                        <div class="buttonnn"> </div>
                                    </div>
                                    <!-- table -->
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>نماد
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                    </svg>
                                                </th>
                                                <th> تعداد تجمعی درصدی ها</th>
                                                <th>(روز) میانگین زمان حضور درصدی ها</th>
                                                <th class="thh">بعد از 15 روز </th>
                                                <th class="thh"> بعد از 30 روز</th>
                                                <th class="thh"> بعد از 60 روز </th>
                                                <th class="thh">بعد از 15 روز </th>
                                                <th class="thh"> بعد از 30 روز</th>
                                                <th class="thh"> بعد از 60 روز </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($Raftar_Stock as $item)
                                            <tr>
                                                <td>{{$item['_id']}}</td>
                                                <td> {{round($item['AllTimeChangePrice'],2)}} </td>
                                                <td> {{round($item['duration'],0)}}  </td>
                                                <td @if($item['15daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['15daysChangePrice'],2)}} </td>
                                                <td @if($item['30daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['30daysChangePrice'],2)}} </td>
                                                <td @if($item['60daysChangePrice'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['60daysChangePrice'],2)}}</td>
                                                <td @if($item['15daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['15daysChangePrice_After'],2)}} </td>
                                                <td @if($item['30daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['30daysChangePrice_After'],2)}} </td>
                                                <td @if($item['60daysChangePrice_After'] < 0) class="tdd-red" @else class="tdd-green" @endif> {{round($item['60daysChangePrice_After'],2)}} </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- section 2   -->
                <div class="Beta-by-industry">
                    <div class="col-md-12">
                        <div class="button-stock">
                            <button id="tab-1" onclick="button_table('tab-1')">  سهام به تفکیک نماد </button>
                            <button id="tab-2" onclick="button_table('tab-2')">  سهام به تفکیک صنعت </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="by-industry">
                            <div class="col-md-12">
                                <div class="right-performance">
                                    <!-- table -->
                                    <table id="table-1" >
                                        <thead>
                                            <tr>


                                                <th>نماد
                                                    <button>
                                                        <i onclick="toggleSearchBox()"; >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                        </svg>
                                                    </i> 
                                                    </button>
                                                    <div id="searchbox">
                                                        <form action="" id="searchbox_1">
                                                            <input type="search" name="q"  placeholder="نماد را جستجو کنید...">
                                                            <button type="submit"></button>
                                                        </form>
                                                    </div>
                                                </th>


                                                <th> صنعت
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                    </svg>
                                                </th>

                                                <th>  میانگین بتا 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>

                                                <th>  میانگین بتا در بازار صعودی 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>
                                                
                                                <th>  میانگین بتا در بازار نزولی 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td> واحیا </td>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> واحیا </td>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> واحیا </td>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> واحیا </td>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> واحیا </td>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <table id="table-2">
                                        <thead>
                                            <tr>
                                                <th> صنعت
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                    </svg>
                                                </th>

                                                <th>  میانگین بتا 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>

                                                <th>  میانگین بتا در بازار صعودی 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>
                                                
                                                <th>  میانگین بتا در بازار نزولی 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                                        <path d="M1.79481 11.25H12.2048C13.1408 11.25 13.6088 12.2617 12.9484 12.8516L7.74336 17.5C7.33221 17.8672 6.66738 17.8672 6.2606 17.5L1.05124 12.8516C0.390771 12.2617 0.858783 11.25 1.79481 11.25ZM12.9484 7.14844L7.74336 2.5C7.33221 2.13281 6.66738 2.13281 6.2606 2.5L1.05124 7.14844C0.390771 7.73828 0.858783 8.75 1.79481 8.75H12.2048C13.1408 8.75 13.6088 7.73828 12.9484 7.14844Z" fill="#C8E0CA"/>
                                                     </svg>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
                                            </tr>
                                            <tr>
                                                <td> خودرو و ساخت قطعات </td>
                                                <td class="tdd-green"> 0.12 </td>
                                                <td class="tdd-green"> 0.34 </td>    
                                                <td class="tdd-red"> 0.17 </td>
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