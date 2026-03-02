@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-4">Summer Classes</h1>
        <div class="">
            <img src="/images/26-summer.jpg" class="img-fluid" alt="">
            <img src="/images/26-summer-2.jpg" class="img-fluid" alt="">
        </div>

        <h1 class="text-center my-4">Summer Camps</h1>
        <div class="d-flex justify-content-center">
            <img src="/images/26-summer-camp.jpg" class="img-fluid" alt="">
        </div>
        {{--        <div class="gradient-splash rounded shadow p-3 text-white">--}}
{{--            <h4 class="text-center fw-bold mb-0 pb-0">--}}
{{--                Join us this summer!--}}
{{--            </h4>--}}
{{--            <p class="text-center my-0 py-0"><small><em>Class sizes are limited! Register Today!!</em></small></p>--}}
{{--            <div class="d-flex justify-content-center my-3">--}}
{{--                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="my-5 p-3">--}}
{{--            <div>--}}
{{--                <h2 class="text-center">Summer Classes June 9 - July 3</h2>--}}
{{--                <img src="/images/summer-classes-4-18-25a.jpg" alt="summer class calendar" class="img-fluid">--}}
{{--                <img src="/images/summer-classes-4-18-25b.jpg" alt="summer class calendar" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center my-3">--}}
{{--                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container">--}}
{{--            <div class="gradient-splash rounded shadow p-3 text-white">--}}
{{--                <h2 class="text-center">Summer Camps</h2>--}}
{{--                <img src="/images/25-summer-camps-hidden.jpg" alt="summer camp calendar" class="img-fluid">--}}
{{--                <div class="d-flex justify-content-center my-3">--}}
{{--                    <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="my-5 p-3">--}}
{{--            <div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <img src="/images/intensive-gfx-2025.png" class="img-fluid" alt="">--}}
{{--                </div>--}}
{{--                <h2 class="text-center">Summer Intensive</h2>--}}
{{--                <img src="/images/25-summer-intensive.jpg" alt="summer intensive calendar" class="img-fluid">--}}
{{--                <img src="/images/intensive-7-31-25.jpg" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center my-3">--}}
{{--                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <p class="mt-5">--}}
{{--                SATURDAY's are reserved for Team Rehearsals per the Team Calendar.--}}
{{--                <br>--}}
{{--                <br>Private lessons available by appointment, scheduled through the front desk. Private lessons must be scheduled a week in advance.--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                Please see each class for required prerequisites--}}
{{--                <br>--}}
{{--                <br><small>*PLEASE NOTE: Classes and teachers are subject to change, for any reason.  Classes that do not meet enrollment requirements will be combined or discontinued. If forced to temporarily close due to COVID-19, all classes will seamlessly convert to online until we are able to safely reopen. our physical location.--}}
{{--                    <br>UPDATED 12/10/21</small>--}}
{{--            </p>--}}
{{--        </div>--}}



{{--        <div class="row mt-5">--}}
{{--            <div class="col-sm my-3 shadow rounded mx-2 p-3">--}}
{{--                <strong>Beginner</strong> (level 1 classes) to <strong>Intermediate</strong> (level 2 classes)--}}

{{--                are intended for Academy dancers with 0-3 years experience and/or new to genre.--}}
{{--                <br>--}}
{{--                <strong>Intermediate</strong> (2+) to <strong>Advanced</strong> (3) level classes--}}
{{--                are intended for students--}}
{{--                who take 4+ hours per week AND multiple classes.--}}
{{--                <br><br>--}}
{{--                ALL Intermediate and Advanced  classes--}}
{{--                require ballet classes concurrently.--}}
{{--                <br>--}}
{{--                Students who dance 1-3 times a week, or need to build skills,--}}
{{--                should enroll in our Beginner/Intermediate level classes.--}}
{{--                <br><br>--}}
{{--                PLEASE REFER TO CLASS DESCRIPTIONS FOR ALL ACRO LEVELS!--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3 shadow rounded mx-2 p-3">--}}
{{--                Students will be tested to assure correct placement has been made.--}}
{{--                <br><br>--}}
{{--                Advanced classes require Director authorization.--}}
{{--                <br>This is our advanced, multiple class, pre-professional UDF dancers.--}}
{{--                <br><br>--}}
{{--                Ballet class must be taken in conjunction with any--}}
{{--                <br>--}}
{{--                UDF lyrical/contemporary class, Top Gun, and /or Leaps & Turns class.--}}
{{--                <br><br>--}}
{{--                Ballet Performance and Ballet Tech are required for all pre-pointe and pointe students.--}}
{{--                <br>--}}
{{--                <u>Please be sure which class you are registering for so we won't have to move you!</u>--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3 shadow rounded mx-2 p-3">--}}
{{--                <strong><u>Age Guidelines:</u></strong>--}}
{{--                <br><small>(ages as of September 1st)</small>--}}
{{--                <br>Ages 2-3 (Tippy Toes & Tuxedos)--}}
{{--                <br>4-PK5 (PreKindergarten) Creative Dancers--}}
{{--                <br>Ages K5-6 (Kindergarten-1st Grade)--}}
{{--                <br>Ages 7-9 (2nd-3rd Grade)--}}
{{--                <br>Ages 9-11 (4th -5th grade)--}}
{{--                <br>Ages 12-14 (Middle School)--}}
{{--                <br>Ages 15+ (High School)--}}
{{--                <br><br>--}}
{{--                *Please note: when you are ready to REGISTER, you must complete the registration all the way through payment in order to be registered. The system does drop all non-paid partial registrations at midnight each night!--}}
{{--            </div>--}}
{{--            <div class="col-sm my-3 shadow rounded mx-2 p-3">--}}
{{--                <strong><u>2025-2026 TUITION SCHEDULE</u></strong>--}}
{{--                <br>Please call us for tuition information--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="my-5">--}}
{{--            <p class="text-center pb-0 mb-0">Check out why we are the BEST studio and faculty to meet your needs:</p>--}}
{{--            <p class="text-center txt-burg fw-bold pb-0 mb-0" style="font-size: 1.25em;">--}}
{{--                TOP STUDIO & NATIONALLY RANKED studio in the SE United States!--}}
{{--                <br>Chamber of Commerce BEST Business Recipient--}}
{{--                <br>ABT® Certified National Training Curriculum--}}
{{--                <br>Progressing Ballet Technique® Certified Teachers--}}
{{--                <br>More Than Just Great Dancing Affiliate Studio--}}
{{--                <br>Professionally Working & Retired Dancer Instructors--}}
{{--                <br>Florida Dance Masters certified by test to teach (all subjects)--}}
{{--                <br>Dance Masters of America certified by test to each (all subjects)--}}
{{--                <br>National Dance Competition adjudicator--}}
{{--                <br>MTV® choreographer--}}
{{--                <br>Nationally ranked award winning Powerhouse Dance Team--}}
{{--                <br>Guest choreographers and Master Teachers--}}
{{--            </p>--}}
{{--            <p class="text-center pt-0 mt-0">...the list goes on and on!</p>--}}
{{--        </div>--}}
{{--        <div class="gradient-splash rounded shadow p-3">--}}
{{--            <p class="text-center text-white fw-bold" style="font-size: 1.25em;">--}}
{{--                TO BE THE BEST, YOU HAVE TO TRAIN WITH THE BEST!--}}
{{--                <br>Are you ready to take the LEAP?--}}
{{--                <br>Just do it!--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                We don't just make <em>great dancers</em> we make <em>great kids!</em>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-center my-3">--}}
{{--            <img src="/images/summer-graphic.JPEG" alt="summer graphic" class="img-fluid">--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-center my-3">--}}
{{--            <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--        <div class="gradient-splash text-white rounded shadow p-5">--}}
{{--            <h2 class="text-white text-center">Guest Teachers</h2>--}}

{{--        <x-staff--}}
{{--            name="Miss Michelle"--}}
{{--            bio="--}}
{{--Miss Michelle started out as a flamenco dancer at the age of 8. She discovered her love for--}}
{{--dance when her Aunt was renting space at a dance school, while she was learning dances of her--}}
{{--Spanish culture. Little did she know that it was that tiny window that opened a lifetime of--}}
{{--opportunities. As she began her journey, she started out training where everyone else does, in--}}
{{--New York City at Broadway Dance Center. Training with the greats like Frank Hatchett, Charles--}}
{{--Kelly and many more. This fueled her fire to keep learning. It wasn’t even about the performing,--}}
{{--although she loved it, she started teaching and discovered that’s what she really loved. Though--}}
{{--she attended college to be an elementary school teacher, she decided that teaching and--}}
{{--educating dancers would eventually be her future. Fast forward over 30 years later, Miss--}}
{{--Michelle has been training dancers all over Long Island. Some of the MFDUSA alumni have been--}}
{{--successful on and off the stage. She is proud of the MFDUSA legacy and what it represents all--}}
{{--these years later. Hard work, a great work ethic and focus; all the qualities everyone needs,--}}
{{--whether you are dancing or just trying to live your best life. This is what she has tried to achieve--}}
{{--all these years. Miss Michelle has been teaching since she was 15 years old. She has won--}}
{{--choreography awards, entertainment awards and many others, but her most cherished job is--}}
{{--being a mom to 3 beautiful daughters; Ashley, Chelsey and Dominique. She has been happily--}}
{{--married to her husband Michael for over 30 years and resides in Shoreham.--}}
{{--"--}}
{{--        />--}}
{{--        <x-staff--}}
{{--            name="Miss Jasmine"--}}
{{--            bio="--}}
{{--Raised in Palm Bay, Florida, Jasmine Sinnott-Klenotich will be entering her fourth year at The--}}
{{--Juilliard School with the class of 2026, working toward a Bachelor of Fine Arts degree in dance.--}}
{{--She trained extensively under Dean and Director Alicia Graf Mack, with the transition to Melissa--}}
{{--Toogood’s leadership occurring during her final year. She began dancing at age 7 at local dance--}}
{{--studios in Florida, and in 2018, started training with EleNoble Ballet, learning from Chiaki--}}
{{--Yasukawa. During the COVID-19 pandemic, she trained online with The Washington School of--}}
{{--Ballet as part of their Professional Training Division. Jasmine has enjoyed several local--}}
{{--performance opportunities in Brevard County, Florida, performing at the King Center for the--}}
{{--Performing Arts as well as being a part of Complexions Contemporary Ballet&#39;s Pre-Professional--}}
{{--Program under co-artistic directors Dwight Rhoden and Desmond Richardson, and performing--}}
{{--in their 25th Anniversary gala in 2019 at The Joyce Theatre in New York. While at Juilliard,--}}
{{--Jasmine has performed works by Chanel Dasilva, Hope Boykin, Shen Wei, Pam Tanowitz, and--}}
{{--Aszure Barton.--}}
{{--"--}}
{{--        />--}}
{{--        <x-staff--}}
{{--            name="Phoenix Aryndia Vincent"--}}
{{--            bio="--}}
{{--Phoenix Aryndia Vincent is a seasoned choreographer, teacher, and dancer with training from--}}
{{--some of the best in the industry. Phoenix has traveled all over the country studying from dance--}}
{{--icons such as Mia Michaels, Mandy Moore, Justin Giles, TOKYO, Dee Caspery, Jackie Sleight,--}}
{{--Rick Robinson, and Darryl Yeager. Phoenix did a one on one mentoring program with Mia--}}
{{--Michaels that has had a huge influence on her development of original foundational technique--}}
{{--systems for dancers. She danced professionally with three different professional dance--}}
{{--companies in Utah and in 2008, Phoenix opened up her own large dance studio at the age of--}}
{{--28.--}}
{{--<br><br>--}}
{{--For nine years Phoenix was the artistic director and founder of Elle Vie Dance Company, a--}}
{{--professional dance company.  With her company she has produced 5 full length shows and has--}}
{{--performed in three different states. She is very innovative in her approach to dance, looking for--}}
{{--new ways to entertain, new paths to create success in the industry, and never accepting a path--}}
{{--or solution just because everyone else is doing it that way. She offers a high level of technical as--}}
{{--well as creative training for all of her students.--}}
{{--Nothing is impossible to her, and she gives that same courage and enthusiasm to her--}}
{{--performers and her audience, so that all walk away inspired and empowered.--}}
{{--Her most recent accomplishments include being hired to choreograph for a short film, “I See--}}
{{--Rose” which shows a young girl’s journey to find her voice while being trafficked. She has also--}}
{{--been accepted into American Dance Festival’s Dance Professional’s Workshop for summer of--}}
{{--<br><br>--}}
{{--2025 to work with former Artistic Director of Alvin Ailey American Dance Theater Robert Battle.--}}
{{--She looks forward to continuing to teach, inspire, create, and push herself as an artist all--}}
{{--around the world.--}}
{{--"--}}
{{--        />--}}

        </div>

@endsection
