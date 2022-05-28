<div class="bg-white">
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-burg-light">Ready To Leap In?</p>
                <a href="https://app.jackrabbitclass.com/regv2.asp?id=504663" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-light btn-family">&#10097; Enroll today!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-burg-dark">Want To Give It A Try?</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/s/trial-classes-kleuvjip" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-dark btn-family">&#10097; Schedule A Trial!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-gold">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">&#10097; Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            3280 Suntree Blvd, Suite 107B, Melbourne, Fl 32940
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="gift"></ion-icon>
                            PO Box 372927, Satellite Beach, FL 32937
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            (321) 636-8966
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            <a href="mailto:UDFdirector@gmail.com" style="color: black; text-decoration: none;">UDFdirector@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-1" href="https://facebook.com/UltimateDanceFlorida" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-1" href="https://twitter.com/UltimateDanceFL" target="_blank">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-1" href="https://instagram.com/theultimatedancefl" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-1" href="https://www.youtube.com/user/UltimateDanceFlorida" target="_blank">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 ml-4">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3280%20Suntree%20Blvd,%20Suite%20107B,%20Melbourne,%20Fl%2032940+(Ultimate%20Dance%20Florida)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="bottom" class="text-white-50 text-center pt-3" style="background: black;">
    © 2022 Ultimate Dance Florida
</div>
<p id="credit" class="text-center m-0" style="background: black;">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
<div style="background: black;" class="text-center pb-3">
    @guest
        <small>
            <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
        </small>
    @else
        <small class="dropdown">
            <a class="text-decoration-none text-muted" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </small>
    @endguest
</div>
