@if(Request::is('/'))<body class="index">@endif
@if(Request::is('raftarstock'))<body class="Percentages">@endif
@if(Request::is('dashboard'))<body class="account">@endif
@if(Request::is('login'))<body class="login">@endif
@if(Request::is('register'))<body class="login">@endif
@if(Request::is('percentage'))<body class="Stock-information">@endif