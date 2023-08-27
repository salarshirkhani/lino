            <!-- strat side-bar && menu -->
            <aside class="col-md-1">
                <div id="side">
                    <div class="aside-nav-bar">
                        <ul class="menu-items">
                            <li class="menu-item @if(Route::is('dashboard')) active @endif">
                                <a href="{{route('dashboard')}}">
                                    <svg width="40" height="40" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="ic:round-person">
                                        <path id="Vector" d="M23 23.7813C27.1438 23.7813 30.5 20.425 30.5 16.2813C30.5 12.1375 27.1438 8.78125 23 8.78125C18.8563 8.78125 15.5 12.1375 15.5 16.2813C15.5 20.425 18.8563 23.7813 23 23.7813ZM23 27.5313C17.9938 27.5313 8 30.0438 8 35.0313V36.9063C8 37.9375 8.84375 38.7813 9.875 38.7813H36.125C37.1563 38.7813 38 37.9375 38 36.9063V35.0313C38 30.0438 28.0063 27.5313 23 27.5313Z" fill="#BBFFEF"/>
                                        </g>
                                    </svg>   
                                    <p>حساب کاربری</p>
                                </a>
                            </li>
                            <li class="menu-item @if(Route::is('raftarstock')) active @endif">
                                <a href="{{route('raftarstock')}}">
                                    <svg width="35" height="35" viewBox="0 0 35 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fontisto:persons" clip-path="url(#clip0_162_1611)">
                                    <path id="Vector" d="M30.0367 22.4C28.6769 20.7047 26.7353 19.4904 24.5323 18.9575L24.4637 18.9437L22.8765 21.4312C22.8755 21.7625 22.7333 22.0798 22.4811 22.314C22.2289 22.5482 21.8871 22.6803 21.5304 22.6812C20.79 22.6812 20.1842 22.1187 19.4775 20.4637V20.4237C19.4775 20.0093 19.3002 19.6119 18.9847 19.3189C18.6691 19.0259 18.2411 18.8612 17.7948 18.8612C17.3485 18.8612 16.9205 19.0259 16.605 19.3189C16.2894 19.6119 16.1121 20.0093 16.1121 20.4237V20.465V20.4625C15.3583 22.1187 14.7471 22.68 14.0081 22.68C13.6514 22.679 13.3096 22.547 13.0574 22.3128C12.8052 22.0786 12.663 21.7612 12.6619 21.43L11.1246 18.9375C8.90648 19.4614 6.94717 20.6722 5.57038 22.37L5.55154 22.3938C5.00581 23.2225 4.70193 24.169 4.66981 25.14V25.1487C4.67654 25.3362 4.66981 25.555 4.66981 25.7737V28.2737C4.66981 28.9368 4.95346 29.5727 5.45837 30.0415C5.96327 30.5104 6.64807 30.7737 7.36212 30.7737H28.2275C28.9415 30.7737 29.6263 30.5104 30.1313 30.0415C30.6362 29.5727 30.9198 28.9368 30.9198 28.2737V25.7737C30.9198 25.5562 30.9131 25.3362 30.9198 25.1487C30.8859 24.1667 30.5769 23.2098 30.0233 22.3725L30.0381 22.3975L30.0367 22.4ZM10.7262 7.39375C10.7262 11.0437 13.1762 16.4062 17.7935 16.4062C22.33 16.4062 24.8608 11.0437 24.8608 7.39375V7.3125C24.8608 6.4507 24.678 5.59734 24.3228 4.80114C23.9676 4.00494 23.4471 3.2815 22.7908 2.67211C22.1345 2.06273 21.3554 1.57934 20.498 1.24954C19.6406 0.919744 18.7216 0.75 17.7935 0.75C16.8654 0.75 15.9464 0.919744 15.0889 1.24954C14.2315 1.57934 13.4524 2.06273 12.7961 2.67211C12.1399 3.2815 11.6193 4.00494 11.2641 4.80114C10.909 5.59734 10.7262 6.4507 10.7262 7.3125V7.3975V7.39375ZM25.8488 9.54375C25.8488 11.9213 27.4454 15.4163 30.4527 15.4163C33.4075 15.4163 35.0565 11.9225 35.0565 9.54375V9.47875C35.0565 8.34462 34.5714 7.25694 33.7077 6.45498C32.8441 5.65303 31.6727 5.2025 30.4513 5.2025C29.23 5.2025 28.0586 5.65303 27.195 6.45498C26.3313 7.25694 25.8462 8.34462 25.8462 9.47875V9.5475V9.54375H25.8488ZM0.00269231 11.5437C0.00269231 13.9212 1.59923 17.4162 4.60654 17.4162C7.56135 17.4162 9.21039 13.9225 9.21039 11.5437V11.4787C9.21039 10.3446 8.7252 9.25694 7.86156 8.45498C6.99791 7.65303 5.82657 7.2025 4.60519 7.2025C3.38382 7.2025 2.21247 7.65303 1.34883 8.45498C0.485189 9.25694 0 10.3446 0 11.4787L0 11.5475V11.5437H0.00269231Z" fill="#BBFFEF"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_162_1611">
                                    <rect width="35" height="30" fill="white" transform="translate(0 0.78125)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    <p>درصدی ها</p>
                                    
                                </a>
                            </li>
                            <li class="menu-item @if(Route::is('/')) active @endif ">
                                <a href="{{route('/')}}">
                                    <svg width="35" height="35" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M9.04505 1.6C9.51054 0.656 10.5147 0 11.6751 0H18.3249C19.4853 0 20.4878 0.656 20.955 1.6C22.0904 1.6096 22.9765 1.6592 23.7678 1.9568C24.7125 2.31243 25.5341 2.91682 26.1385 3.7008C26.7487 4.4912 27.0363 5.504 27.4286 6.8976L28.6622 11.2528L29.1276 12.5984L29.1675 12.6464C30.6654 14.4928 29.9522 17.2384 28.5258 22.728C27.6181 26.2208 27.1659 27.9664 25.8127 28.984C24.4594 30 22.5892 30 18.8486 30H11.1514C7.41084 30 5.54057 30 4.18732 28.984C2.83407 27.9664 2.38022 26.2208 1.47417 22.728C0.0477757 17.2384 -0.665423 14.4928 0.83246 12.6464L0.872359 12.5984L1.33785 11.2528L2.5714 6.8976C2.9654 5.504 3.25301 4.4896 3.86147 3.6992C4.46616 2.91581 5.2877 2.312 6.23215 1.9568C7.02349 1.6592 7.90792 1.608 9.04505 1.6ZM9.04837 4.0032C7.94782 4.0144 7.5056 4.0544 7.13986 4.192C6.63109 4.38349 6.18861 4.70897 5.86308 5.1312C5.57049 5.5104 5.39759 6.04 4.91548 7.7472L3.96787 11.0896C5.66359 10.8 7.98107 10.8 11.1497 10.8H18.8486C22.0189 10.8 24.3348 10.8 26.0305 11.088L25.0845 7.7456C24.6024 6.0384 24.4295 5.5088 24.1369 5.1296C23.8114 4.70737 23.3689 4.38189 22.8601 4.1904C22.4944 4.0528 22.0522 4.0128 20.9516 4.0016C20.7156 4.47976 20.3435 4.88371 19.8786 5.16662C19.4137 5.44953 18.875 5.5998 18.3249 5.6H11.6751C11.1252 5.59994 10.5866 5.44991 10.1217 5.1673C9.65681 4.88468 9.28466 4.48106 9.04837 4.0032Z" fill="#BBFFEF"/>
                                    </svg>
                                    <p>سبد ها</p>
                                </a>
                            </li>
                            
                            <li class="menu-item ">
                                <a href="#">
                                    <svg width="40" height="40" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_162_1626)">
                                        <rect width="55" height="55" rx="27.5" transform="matrix(1 0 0 -1 0 55.7812)" fill="#95959C" fill-opacity="0.44"/>
                                        <path id="Vector" d="M40.6923 13H15.3077C14.6957 13 14.1087 13.2431 13.6759 13.6759C13.2431 14.1087 13 14.6957 13 15.3077V40.6923C13 41.3043 13.2431 41.8913 13.6759 42.3241C14.1087 42.7569 14.6957 43 15.3077 43H40.6923C41.3043 43 41.8913 42.7569 42.3241 42.3241C42.7569 41.8913 43 41.3043 43 40.6923V15.3077C43 14.6957 42.7569 14.1087 42.3241 13.6759C41.8913 13.2431 41.3043 13 40.6923 13ZM19.9231 33.7692H15.3077V29.1538H19.9231V33.7692ZM22.2308 36.0769H26.8462V40.6923H22.2308V36.0769ZM29.1538 36.0769H33.7692V40.6923H29.1538V36.0769ZM29.1538 26.8462V22.2308H33.7692V26.8462H29.1538ZM33.7692 19.9231H29.1538V15.3077H33.7692V19.9231ZM36.0769 22.2308H40.6923V26.8462H36.0769V22.2308ZM26.8462 15.3077V26.8462H15.3077V15.3077H26.8462ZM36.0769 40.6923V29.1538H40.6923V40.6923H36.0769Z" fill="#BBFFEF"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_162_1626">
                                        <rect width="55" height="55" rx="27.5" transform="matrix(1 0 0 -1 0 55.7812)" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                   <p>سهام</p>
                                </a>
                            </li>
                            <li class="menu-item font-side">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                        viewBox="0 0 33 33" fill="none">
                                        <path opacity="0.5"
                                            d="M16.25 27.5C19.1674 27.5 21.9653 26.3411 24.0282 24.2782C26.0911 22.2153 27.25 19.4174 27.25 16.5C27.25 13.5826 26.0911 10.7847 24.0282 8.72183C21.9653 6.65893 19.1674 5.5 16.25 5.5"
                                            stroke="#BBFFEF" stroke-width="2.0625" stroke-linecap="round" />
                                        <path d="M5.5 16.5H19.25M19.25 16.5L15.125 12.375M19.25 16.5L15.125 20.625"
                                            stroke="#BBFFEF" stroke-width="2.0625" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p>خروج از حساب</p>
                                </a>
                            </li>
                        </ul>


                        <div class="select-item">
                            <svg width="86" height="86" viewBox="0 0 85 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle id="Ellipse 10" cx="42.5" cy="43.2812" r="42.5" fill="white"/>
                            </svg>       
                        </div>
                    </div>
                </div>
            </aside>
