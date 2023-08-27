<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock-information</title>
    <link rel="stylesheet" href="{{asset('content/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/code.jquery.com_jquery-3.7.0.min.js')}}" defer></script>
    <script src="{{asset('js/sticky-kit-master/dist/sticky-kit.min.js')}}" defer></script>

    <Script src="{{asset('content/bootstrap/bootstrap.js')}}" defer></Script>
    <script src="{{asset('node_modules/chart.js/dist/chart.umd.js')}}" defer></script>
    <script src="{{asset('js/main.js')}}" defer></script>

    
</head>

 @include('components.bodyhead')

    <!-- start header dashbord -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="row-header">
                    <div class="col-md-4">
                        <div class="calendar-header">
                            <img class="calender" src="{{asset('img/Vector.png')}}" alt="calender">
                            <img class="calender-item" src="{{asset('img/Ellipse 5.png')}}" alt="calender">
                            <p class="calender-item-1">1401</p>
                            <p class="calender-item-2">اسفند
                            <p>
                            <p class="calender-item-3">25</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="name-website">
                            <h1>Leano</h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="timer">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M65 32.5C65 50.4493 50.4493 65 32.5 65C14.5507 65 0 50.4493 0 32.5C0 14.5507 14.5507 0 32.5 0C50.4493 0 65 14.5507 65 32.5ZM4.07513 32.5C4.07513 48.1986 16.8014 60.9249 32.5 60.9249C48.1986 60.9249 60.9249 48.1986 60.9249 32.5C60.9249 16.8014 48.1986 4.07513 32.5 4.07513C16.8014 4.07513 4.07513 16.8014 4.07513 32.5Z"
                                    fill="#92FFBD" />
                            </svg>
                            <p class="timer-item">11:25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer" style="margin-top: -90px; position: relative; width: 100%; z-index: -1;">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="96" viewBox="0 0 auto 96" fill="none">
            <path
                d="M-48 0V107H1481C1481 107 1440.25 30.9172 1246.24 57.6154C1039.98 86 950.329 86.3284 745.584 57.6154C582.888 34.7992 547.973 7.57598 402.06 7.57593C335.699 7.57591 247.445 45.7965 181.607 50.2236C57.4853 58.5699 -48 0 -48 0Z"
                fill="url(#paint0_linear_402_359)" fill-opacity="0.97" />
            <defs>
                <linearGradient id="paint0_linear_402_359" x1="-9.82523" y1="76.2261" x2="1457.43" y2="164.692"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#628677" />
                    <stop offset="0.25" stop-color="#47A56D" stop-opacity="0.916667" />
                    <stop offset="0.5" stop-color="#3A9680" stop-opacity="0.53528" />
                    <stop offset="0.75" stop-color="#3FA5BC" stop-opacity="0.44" />
                    <stop offset="1" stop-color="#709A98" stop-opacity="0.58" />
                </linearGradient>
            </defs>
        </svg> 
    </footer>
</body>

</html>