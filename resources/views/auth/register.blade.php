@extends('layouts.front')
@section('content')
<style>
.form_login form label {
    background: rgba(217, 217, 217, 0.47);
    border-radius: 0px 20px 20px 0px;
    width: 60px;
    height: 60px;
    padding: 9px 13px;
}
body.login div.row-header {
    display: flex;
    width: 100%;
    margin: 0px auto 10px auto;
    align-items: center;
    position: fixed;
    left: 3px;
    background: #f0ffed;
}
</style>
<div class="box_login">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="logo_login">
        <svg class="svg_1" xmlns="http://www.w3.org/2000/svg" width="111" height="110" viewBox="0 0 111 110"
            fill="none">
            <ellipse cx="55.5" cy="55" rx="55.5" ry="55" fill="white" />
        </svg>
        <svg class="svg_2" xmlns="http://www.w3.org/2000/svg" width="83" height="81" viewBox="0 0 83 81" fill="none">
            <path
                d="M41.5002 40.5C37.696 40.5 34.4394 39.1781 31.7304 36.5344C29.0213 33.8906 27.6668 30.7125 27.6668 27C27.6668 23.2875 29.0213 20.1094 31.7304 17.4656C34.4394 14.8219 37.696 13.5 41.5002 13.5C45.3043 13.5 48.5609 14.8219 51.27 17.4656C53.979 20.1094 55.3335 23.2875 55.3335 27C55.3335 30.7125 53.979 33.8906 51.27 36.5344C48.5609 39.1781 45.3043 40.5 41.5002 40.5ZM13.8335 67.5V58.05C13.8335 56.1375 14.3384 54.3791 15.3482 52.7749C16.3558 51.1729 17.6953 49.95 19.3668 49.1063C22.9404 47.3625 26.5717 46.0541 30.2606 45.1811C33.9495 44.3104 37.696 43.875 41.5002 43.875C45.3043 43.875 49.0509 44.3104 52.7397 45.1811C56.4286 46.0541 60.0599 47.3625 63.6335 49.1063C65.305 49.95 66.6446 51.1729 67.6521 52.7749C68.6619 54.3791 69.1668 56.1375 69.1668 58.05V67.5H13.8335Z"
                fill="#545454" />
        </svg>
    </div>
    <div class="form_login">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div style="display: flex;">
                <label for="email"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="29" viewBox="0 0 31 29" fill="none">
                    <path d="M15.2469 14.4739C13.1505 14.4739 11.3558 13.7653 9.86287 12.348C8.36994 10.9308 7.62347 9.22711 7.62347 7.23695C7.62347 5.24679 8.36994 3.54309 9.86287 2.12585C11.3558 0.708618 13.1505 0 15.2469 0C17.3434 0 19.1381 0.708618 20.631 2.12585C22.1239 3.54309 22.8704 5.24679 22.8704 7.23695C22.8704 9.22711 22.1239 10.9308 20.631 12.348C19.1381 13.7653 17.3434 14.4739 15.2469 14.4739ZM0 28.9478V23.8819C0 22.8567 0.278257 21.9141 0.834771 21.0541C1.39001 20.1953 2.12822 19.5398 3.04939 19.0875C5.01878 18.1527 7.01995 17.4513 9.05287 16.9833C11.0858 16.5165 13.1505 16.2831 15.2469 16.2831C17.3434 16.2831 19.4081 16.5165 21.441 16.9833C23.4739 17.4513 25.4751 18.1527 27.4445 19.0875C28.3657 19.5398 29.1039 20.1953 29.6591 21.0541C30.2156 21.9141 30.4939 22.8567 30.4939 23.8819V28.9478H0Z" fill="white"/>
                    </svg>
                </label> 
                <input type="email" name="email" id="email" required placeholder="ایمیل  خود را وارد کنید"><br>
            </div>
            <div style="display: flex;">
            <label for="tel"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="29" viewBox="0 0 31 29" fill="none">
                <path d="M15.2469 14.4739C13.1505 14.4739 11.3558 13.7653 9.86287 12.348C8.36994 10.9308 7.62347 9.22711 7.62347 7.23695C7.62347 5.24679 8.36994 3.54309 9.86287 2.12585C11.3558 0.708618 13.1505 0 15.2469 0C17.3434 0 19.1381 0.708618 20.631 2.12585C22.1239 3.54309 22.8704 5.24679 22.8704 7.23695C22.8704 9.22711 22.1239 10.9308 20.631 12.348C19.1381 13.7653 17.3434 14.4739 15.2469 14.4739ZM0 28.9478V23.8819C0 22.8567 0.278257 21.9141 0.834771 21.0541C1.39001 20.1953 2.12822 19.5398 3.04939 19.0875C5.01878 18.1527 7.01995 17.4513 9.05287 16.9833C11.0858 16.5165 13.1505 16.2831 15.2469 16.2831C17.3434 16.2831 19.4081 16.5165 21.441 16.9833C23.4739 17.4513 25.4751 18.1527 27.4445 19.0875C28.3657 19.5398 29.1039 20.1953 29.6591 21.0541C30.2156 21.9141 30.4939 22.8567 30.4939 23.8819V28.9478H0Z" fill="white"/>
                </svg>
            </label> 
            <input type="tel" name="mobile" id="" required placeholder="شماره تلفن خود را وارد کنید"><br>
            </div>
            <div style="display: flex;">
            <label for="passw">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="40" viewBox="0 0 38 40" fill="none">
                <path d="M8.625 37C7.62812 37 6.77504 36.6832 6.06575 36.0496C5.35525 35.415 5 34.6524 5 33.7619V17.5714C5 16.681 5.35525 15.9184 6.06575 15.2837C6.77504 14.6501 7.62812 14.3333 8.625 14.3333H10.4375V11.0952C10.4375 8.85556 11.3214 6.94616 13.0892 5.36705C14.8558 3.78902 16.9927 3 19.5 3C22.0073 3 24.1448 3.78902 25.9126 5.36705C27.6792 6.94616 28.5625 8.85556 28.5625 11.0952V14.3333H30.375C31.3719 14.3333 32.2256 14.6501 32.9361 15.2837C33.6454 15.9184 34 16.681 34 17.5714V33.7619C34 34.6524 33.6454 35.415 32.9361 36.0496C32.2256 36.6832 31.3719 37 30.375 37H8.625ZM19.5 28.9048C20.4969 28.9048 21.3506 28.588 22.0611 27.9544C22.7704 27.3197 23.125 26.5571 23.125 25.6667C23.125 24.7762 22.7704 24.0136 22.0611 23.379C21.3506 22.7454 20.4969 22.4286 19.5 22.4286C18.5031 22.4286 17.65 22.7454 16.9408 23.379C16.2303 24.0136 15.875 24.7762 15.875 25.6667C15.875 26.5571 16.2303 27.3197 16.9408 27.9544C17.65 28.588 18.5031 28.9048 19.5 28.9048ZM14.0625 14.3333H24.9375V11.0952C24.9375 9.74603 24.4089 8.59921 23.3516 7.65476C22.2943 6.71032 21.0104 6.2381 19.5 6.2381C17.9896 6.2381 16.7057 6.71032 15.6484 7.65476C14.5911 8.59921 14.0625 9.74603 14.0625 11.0952V14.3333Z" fill="white"/>
                </svg>
            </label>
            <input type="password" name="password" required id="password" placeholder="ورود رمز عبور">
            </div>
            <div style="display: flex;">
            <label for="password_confirmation">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="40" viewBox="0 0 38 40" fill="none">
                <path d="M8.625 37C7.62812 37 6.77504 36.6832 6.06575 36.0496C5.35525 35.415 5 34.6524 5 33.7619V17.5714C5 16.681 5.35525 15.9184 6.06575 15.2837C6.77504 14.6501 7.62812 14.3333 8.625 14.3333H10.4375V11.0952C10.4375 8.85556 11.3214 6.94616 13.0892 5.36705C14.8558 3.78902 16.9927 3 19.5 3C22.0073 3 24.1448 3.78902 25.9126 5.36705C27.6792 6.94616 28.5625 8.85556 28.5625 11.0952V14.3333H30.375C31.3719 14.3333 32.2256 14.6501 32.9361 15.2837C33.6454 15.9184 34 16.681 34 17.5714V33.7619C34 34.6524 33.6454 35.415 32.9361 36.0496C32.2256 36.6832 31.3719 37 30.375 37H8.625ZM19.5 28.9048C20.4969 28.9048 21.3506 28.588 22.0611 27.9544C22.7704 27.3197 23.125 26.5571 23.125 25.6667C23.125 24.7762 22.7704 24.0136 22.0611 23.379C21.3506 22.7454 20.4969 22.4286 19.5 22.4286C18.5031 22.4286 17.65 22.7454 16.9408 23.379C16.2303 24.0136 15.875 24.7762 15.875 25.6667C15.875 26.5571 16.2303 27.3197 16.9408 27.9544C17.65 28.588 18.5031 28.9048 19.5 28.9048ZM14.0625 14.3333H24.9375V11.0952C24.9375 9.74603 24.4089 8.59921 23.3516 7.65476C22.2943 6.71032 21.0104 6.2381 19.5 6.2381C17.9896 6.2381 16.7057 6.71032 15.6484 7.65476C14.5911 8.59921 14.0625 9.74603 14.0625 11.0952V14.3333Z" fill="white"/>
                </svg>
            </label>
            <input type="password" required name="password_confirmation" id="password_confirmation" placeholder="تکرار رمز عبور">
            </div>
            <button type="submit" style="margin: 30px 0px;">ثبت نام</button>
            <a href="{{route('login')}}" style="text-align: center; font-size:15px; margin: 120px;">قبلا ثبت نام کردید ؟ </a>
           
        </form>

    </div>

</div>
@endsection