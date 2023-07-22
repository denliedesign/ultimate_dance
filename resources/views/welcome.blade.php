@extends('layouts.app')
@section('content')

    <div class="gradient-splash">
        <div id="primary-bg">
{{--            <div class="color-filter-burg"></div>--}}
            <h2 id="primary-txt-mobile" class="d-md-none">You <span style="color: #51002B;">belong</span> here <ion-icon name="heart"></ion-icon></h2>
            <h2 id="primary-txt" class="d-none d-md-block">You <span style="color: #51002B;">belong</span> here <ion-icon name="heart"></ion-icon></h2>
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
        </div>

            @include('trial-modal')

        <div class="container">
            <div id="next-steps">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-red">Ready To Leap In?</p>
                        <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-light btn-family">&#10097; Enroll today!</div></a>
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-teal">Want To Give It A Try?</p>
                        <a href="#" class="btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal"><div class="shadow btn btn-lg btn-burg-dark btn-family">&#10097; Schedule A Trial!</div></a>
                        {{--                    <div>--}}
                        {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-purple">Still Have Questions?</p>
                        <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">&#10097; Contact Us!</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision" class="text-center text-white">
            <div class="container">
{{--                <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>--}}
                <h2 class="text-uppercase">Dance makes GREAT kids!</h2>
{{--                <p>From your child’s first class to their graduation performance, UDF has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, UDF is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.</p>--}}
                <p>From your child’s first class to their graduation performance, your child will thrive at UDF! At UDF, dance classes are More Than Just Great Dancing!®. Our dancers go beyond technique to develop important life skills, learning to be respectful, confident, and conscientious young people who share their gifts and talents with the community.</p>
            </div>
        </div>
    </div>

    <div class="bg-white pb-5" id="class-categories">
        <div class="container pb-5">
            <h2 class="text-center pt-5">Dance Classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <img src="/images/ages2-3.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-light btn-family mt-2" style="width: 100%;">Ages 2-3</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ages4-5.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-dark btn-family mt-2" style="width: 100%;">Ages 4-5</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ages5-6.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family mt-2" style="width: 100%;">Ages 5-6</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ages7-9.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-light btn-family mt-2" style="width: 100%;">Ages 7-9</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ages9-11.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-dark btn-family mt-2" style="width: 100%;">Ages 9-11</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ages12-14.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family mt-2" style="width: 100%;">Ages 12-14</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-15.JPG" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-light btn-family mt-2" style="width: 100%;">Ages 15+</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/powerhouse-team.jpg" alt="dancers" class="img-fluid shadow rounded" style="height: 450px; object-fit: cover; object-position: center; width: 100%;">
                    <a href="/academy#age-1" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-burg-dark btn-family mt-2" style="width: 100%;">Powerhouse Team</div></a>
                </div>
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-burg"></div>
        <h2 class="secondary-txt d-none d-md-block">Parents <span class="txt-gold"><ion-icon name="heart"></ion-icon></span> UDF...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p class="my-0 text-capitalize">
                    <span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Safer Studio
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Tech Enabled
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Secured Facility
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Written Curriculum
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Full-Time Admin
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> YPAD Certified
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Community Service
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> Background Checked
                    <br><span class="txt-gold"><ion-icon name="heart"></ion-icon></span> CPR Trained
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="d-flex justify-content-center mb-0">
                            <img src="/images/logo-abt.jpg" alt="program logo" class="img-fluid">
                        </div>
                        <p class="my-3">
                            <strong>ULTIMATE DANCE FLORIDA is proud to include the AMERICAN BALLET THEATRE® National Training Curriculum</strong>
                            <br><br>
                            A breakthrough 8 level program that combines high quality artistic training with the basics of dancer health and child development. The ABT® National Training Curriculum consists of a comprehensive set of age-appropriate, outcome-based guidelines to provide the highest quality ballet training to dance students of all ages and skill levels. Pre-Primary through Level 3 will be supervised by ABT® Certified Teacher, Annette Alvarez, who has successfully completed the ABT® Teacher Training Intensive in Pre-Primary through Level 3 of the ABT® National Training Curriculum.
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/program-abt.jpg" alt="ballet dancer on beach" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-burg"></div>
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%; filter: invert(1);">
                    </div>
                    <h2 class="text-center">UDF is a Safer Studio™</h2>
                    <p>
                        UDF focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">UDF is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="gradient-splash text-white" style="min-height: 85vh; max-height: 100%;">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm">
                    <h2 class="text-center">Awards</h2>
                    <div class="row row-cols-4">
                        <img src="/images/ReadersChoice2019.png" alt="readers choice 2019" class="img-fluid">
                        <img src="/images/ReadersChoice2020.png" alt="readers choice 2020" class="img-fluid">
                        <img src="/images/ReadersChoice2021.png" alt="readers choice 2021" class="img-fluid">
                        <img src="/images/ReadersChoice2022b.PNG" alt="readers choice 2022" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm" style="position: relative; min-height: 85vh; height: 100%;">
                    <h2 class="text-center mb-4">Testimonials</h2>
                    <!-- carousel start -->
                    <div id="carouselExampleControls" class="carousel slide pt-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>
                                    I've danced at Ultimate Dance since I was five and not a day goes by where I am not thankful I chose this studio. The Ultimate Dance staff and students are my second family. The studio is my second home. Everyone on this staff has made me not only a better dancer, but a better person. The training has led me to scholarships, getting into intensives, getting parts in shows, and more. Being a part of this studio has led me and may others to meeting wonderful people and having wonderful opportunities. They not only teach you about dance, but about life. In my opinion, the training I get at Ultimate Dacne is the best you will find in Brevard! Once you go to Ultimate Dance you are hooked because everyone is so welcoming and friendly! The studio has changed my life in every way. It helped me when I was going through a hard time and without it, I don't know where I would be! I love Ultimate Dance and think everyone should be a part of this little family.
                                    <br>
                                    <span class="signed">Madelyn T., student</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    My daughters are starting their fifth year dancing at Ultimate Dance Florida. The instruction is superb, the location convenient, and it draws a great group of students and families. Not only do I trust the dance education 100%, I also appreciate the friendships my children have made through the studio. It's like family and a second home, a place where we all feel comfortable and happy.
                                    <br>
                                    <span class="signed">Susan P., parent</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    My daughter has been dancing at Ultimate Dance Florida since we moved up to Brevard County when she was in 1st grade; she is now an 11th grader!  That goes to show that we wouldn't ever think of dancing anywhere else!  Mrs. Annette and her staff are professional, encouraging, and fun.  They stress working hard to be the best dancer you can be.  I have seen my daughter's dance skills improve over the years, as well as her confidence, passion and commitment.  The past two years she has enjoyed dancing on the UDF Dance Team and has gained so much from the conventions and competitions.  UDF is THE place to dance!
                                    <br>
                                    <span class="signed">Carmen E., parent</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    What I love about UDF is the amazing teachers and staff. Everyone is so friendly and welcoming, even if you're new. You learn so much from everyone and they don't even get mad at you if you do something wrong; you just have to keep trying. Another thing what I love about UDF is that I get to spend time with my amazing friends and we get to dance next to other. Have fun and just enjoy ourselves and it's something to look forward to when you have to go to school ALL DAY! I'm looking forward to another ULTIMATE year and thank you Ultimate Dance for making this my 2nd home!
                                    <br>
                                    <span class="signed">Kailyn C., student</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    My daughter has almost finished her two weeks in NYC. Between Open Jar and the Rockettes, she had learned so much!! Tomorrow is her performance and then she is taking a tap class at BDC with Jared Grimes and then musical theater on Saturday. I personally want to thank ALL the teachers at Ultimate Dance Florida, past and present and as well as her other master teachers who spent time with her and coached her and believed in her these past 12 years. She is on her way to making her dream come true!! Lastly Annette Alvarez- there are many dance studios in our area, but for my daughter,  your studio has made her dream to become a Broadway dancer soon a reality. It isn't about winning the awards, the trophies, but making your dream an reality, and I thank your studio for never giving up on her!
                                    <br>
                                    <span class="signed">Lesley C., parent</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    My daughter has grown so much in just one year of dance on the competitive team. She has been at UDF for 3 years now and the instructors have really been great in bringing out her personality as well as improving her dance skills. Looking forward to continued growth and guidance from UDF for her.
                                    <br>
                                    <span class="signed">Claire J., parent</span>
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p>
                                    I’ve currently been with Ultimate dance for 3 seasons now, and I am looking forward for this upcoming year. Ultimate Dance is a great studio with amazing dance instructors, a great dance environment, and gives students an abundance of opportunities and a chance to become a better dancer. I have improved a lot since I joined Ultimate Dance, and I am excited to become an even better dancer. I think that UDF is an amazing place to dance.
                                    <br>
                                    <span class="signed">Ella J, student</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-indicators" style="position: absolute; bottom: 0; height: 100%;">
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        </div>
                    </div>
                    <!-- carousel end -->
                </div>
            </div>
        </div>
    </div>

    {{--    @include('testimonials')--}}

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-kapa-teal">Be A Part Of Our <span class="txt-red">UDF</span> Family!</h2>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
