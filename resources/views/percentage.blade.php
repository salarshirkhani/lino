@extends('layouts.front')
@section('content')
<style>
        .whatever {
            display: none;
            position: relative;
        }
        .what {
            display: none;
            position: absolute;
            top: -37px;
        }
        .what2 {
            display: none;
            position: relative;
            top: -252px;
            margin-right: 152px;
        }
        .dataTables_filter {
            display: flex;
        }
         /* search box style */
        .dataTables_wrapper .dataTables_filter input {
            border: 0px solid #aaa;
            border-radius: 20px 20px 0px 0px;
            padding: 6.5px 39px;
            background-color: #ddffeb;
            color: black;
            right: 48px;
            font-family: 'B_Koodak_Bold';
        }
        table.dataTable tbody td {
            padding: 8px 10px !important;
        }
        table.dataTable.no-footer {
            border-bottom: 0px solid rgba(0, 0, 0, 0.3);
        }
        table.dataTable > thead > tr > th, table.dataTable > thead > tr > td {
            padding: 10px;
            border-bottom: 0px solid rgba(0, 0, 0, 0.3);
        }
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: right;
        }

        body.Stock-information main .Stocks .Lino-perfor .right-performance .title-table div.button {
            margin-left: 7%;
        }
        table.dataTable > thead > tr > th, table.dataTable > thead > tr > td {
            padding: 10px;
            word-break: break-word;
            border-bottom: 0px solid rgba(0, 0, 0, 0.3);
        }
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: right;
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td.tdd-green { 
            width: 10% !important; 
            padding: 0px; 
            word-break: break-word; 
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td.tdd-red { 
            width: 10% !important; 
            padding: 0px; 
            word-wrap: break-word; 
        }
        /* table saham */
        body.Stock-information main .Stocks .Lino-perfor .right-performance table thead tr th.thh {
            width: 8% !important;
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table thead tr th:first-of-type {
            width: 9% !important;
            padding-right: 55px;
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table thead tr th:nth-child(2) {
            width: 15% !important;
            padding-right: 20px;
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table thead tr th:nth-child(3) {
            width: 15% !important;
            margin-left: -3px;
        }
        /* body table */
       
        body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td:first-of-type {
            width: 15%;
           
        } 
        @media (max-width:1700px) {
            body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td:first-of-type {
            width: 17% ;
        } 
        }
        
        body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td:nth-child(2) {
            width: 15% !important;
            padding-right: 20px;
        }
        body.Stock-information main .Stocks .Lino-perfor .right-performance table tbody tr td:nth-child(3) {
            width: 17%;
        }  
        body.Stock-information main .Beta-by-industry .by-industry {

            padding: 20px 20px 30px 36px;
        }
        table.dataTable.display > tbody > tr > td {
            border-top: none;
            border-bottom: none;
            background: #ffffff;
        }
        table.dataTable.stripe > tbody > tr.odd > *, table.dataTable.display > tbody > tr.odd > * {
            box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0) !important; 
            box-shadow: inset 0 0 0 9999px rgba(var(--dt-row-stripe), 0) !important; 
        }
        table.dataTable.stripe > tbody > tr.even > *, table.dataTable.display > tbody > tr.even > * {
            box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0) !important; 
            box-shadow: inset 0 0 0 9999px rgba(var(--dt-row-stripe), 0) !important; 
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
                                        <div class="button"> رفتار نماد پس از خروج درصدی </div>
                                        <div class="button"> رفتار نماد بعد از ورود درصدی </div>
                                        <div class="buttonnn"> </div>
                                        <div class="buttonnn"> </div>
                                    </div>
                                    <!-- table -->
                                    <table id="myTable2">
                                        <thead>
                                            <tr>
                                                <th>نماد
                                                    <i class="bboomo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                        viewBox="0 0 19 18" fill="none">
                                                        <path
                                                            d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                            stroke="#589B57" stroke-opacity="0.31"
                                                            stroke-width="2.2" />
                                                        </svg>
                                                    </i> 
                                                </th>
                                                <th> تعداد تجمعی درصدی ها</th>
                                                <th> میانگین زمان حضور درصدی ها (روز)</th>
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
                                                <td> {{round($item['unique_codes_count'],2)}} </td>
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
                                <button id="tab-1" onclick="button_table('tab-1')">  بتا به تفکیک نماد </button>
                                <button id="tab-2" onclick="button_table('tab-2')">  بتا به تفکیک صنعت </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="by-industry">
                                <div class="col-md-12">
                                    <div class="right-performance">
                                        <!-- table -->
                                        <table id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>نماد
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
                                                    <!-- display: flex;
                                                    justify-content: center; -->

                                                    <th> صنعت
                                                    </th>

                                                    <th>  میانگین بتا 
                                                    </th>

                                                    <th>  میانگین بتا در بازار صعودی
                                                    </th>
                                                    
                                                    <th>  میانگین بتا در بازار نزولی 
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr>
                                                    <td > واحیا </td>
                                                    <!-- width: 25%; -->
                                                    <td> خودرو و ساخت قطعات </td>
                                                    <td class="tdd-green"> 0.12 </td>
                                                    <td class="tdd-green"> 0.34 </td>    
                                                    <td class="tdd-red"> 0.17 </td>
                                                </tr>
                                                <tr>
                                                    <td > واحیا </td>
                                                    <td> خودرو و ساخت قطعات </td>
                                                    <td class="tdd-green"> 0.12 </td>
                                                    <td class="tdd-green"> 0.34 </td>    
                                                    <td class="tdd-red"> 0.17 </td>
                                                </tr>
                                                <tr>
                                                    <td > واحیا </td>
                                                    <td> خودرو و ساخت قطعات </td>
                                                    <td class="tdd-green"> 0.12 </td>
                                                    <td class="tdd-green"> 0.34 </td>    
                                                    <td class="tdd-red"> 0.17 </td>
                                                </tr>
                                                <tr>
                                                    <td > واحیا </td>
                                                    <td> خودرو و ساخت قطعات </td>
                                                    <td class="tdd-green"> 0.12 </td>
                                                    <td class="tdd-green"> 0.34 </td>    
                                                    <td class="tdd-red"> 0.17 </td>
                                                </tr>
                                                <tr>
                                                    <td > واحیا </td>
                                                    <td> خودرو و ساخت قطعات </td>
                                                    <td class="tdd-green"> 0.12 </td>
                                                    <td class="tdd-green"> 0.34 </td>    
                                                    <td class="tdd-red"> 0.17 </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <table id="table-2" class="display">
                                            <thead>
                                                <tr>
                                                    <th> صنعت
                                                        <i class="bboo2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                            viewBox="0 0 19 18" fill="none">
                                                            <path
                                                                d="M17.8988 16.9091L13.493 12.5454M9.08721 14.7273C8.21935 14.7273 7.35998 14.558 6.55817 14.229C5.75637 13.9001 5.02783 13.4179 4.41416 12.8101C3.80048 12.2023 3.31369 11.4808 2.98157 10.6866C2.64945 9.89251 2.47852 9.04137 2.47852 8.18181C2.47852 7.32225 2.64945 6.4711 2.98157 5.67697C3.31369 4.88284 3.80048 4.16127 4.41416 3.55347C5.02783 2.94567 5.75637 2.46354 6.55817 2.1346C7.35998 1.80566 8.21935 1.63635 9.08721 1.63635C10.8399 1.63635 12.5209 2.32596 13.7603 3.55347C14.9996 4.78098 15.6959 6.44584 15.6959 8.18181C15.6959 9.91777 14.9996 11.5826 13.7603 12.8101C12.5209 14.0377 10.8399 14.7273 9.08721 14.7273Z"
                                                                stroke="#589B57" stroke-opacity="0.31"
                                                                stroke-width="2.2" />
                                                            </svg>
                                                        </i> 
                                                    </th>

                                                    <th>  میانگین بتا 
                                                    
                                                    </th>

                                                    <th>  میانگین بتا در بازار صعودی 
                                                       
                                                    </th>
                                                    
                                                    <th>  میانگین بتا در بازار نزولی 
                                                        
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