@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-4">Academy</h1>
        <div class="gradient-splash rounded shadow p-3 text-white">
            <h4 class="text-center fw-bold mb-0 pb-0">Join us for our 30th Season of Ultimate Dance!
                <br>Fall 2022-2023
            </h4>
            <p class="text-center my-0 py-0"><small><em>Class sizes are limited! Register Today!!</em></small></p>
        </div>
        <div class="row mt-5">
            <div class="col-sm my-3 shadow rounded mx-2 p-3">
                <strong>Beginner</strong> (level 1 classes) to <strong>Intermediate</strong> (level 2 classes)

                are intended for Academy dancers with 0-3 years experience and/or new to genre.
                <br>
                <strong>Intermediate</strong> (2+) to <strong>Advanced</strong> (3) level classes
                are intended for students
                who take 4+ hours per week AND multiple classes.
                <br><br>
                ALL Intermediate and Advanced  classes
                require ballet classes concurrently.
                <br>
                Students who dance 1-3 times a week, or need to build skills,
                should enroll in our Beginner/Intermediate level classes.
                <br><br>
                PLEASE REFER TO CLASS DESCRIPTIONS FOR ALL ACRO LEVELS!
            </div>
            <div class="col-sm my-3 shadow rounded mx-2 p-3">
                Students will be tested to assure correct placement has been made.
                <br><br>
                Advanced classes require Director authorization.
                <br>This is our advanced, multiple class, pre-professional UDF dancers.
                <br><br>
                Ballet class must be taken in conjunction with any
                <br>
                UDF lyrical/contemporary class, Top Gun, and /or Leaps & Turns class.
                <br><br>
                Ballet Performance and Ballet Tech are required for all pre-pointe and pointe students.
                <br>
                <u>Please be sure which class you are registering for so we won't have to move you!</u>
            </div>
            <div class="col-sm my-3 shadow rounded mx-2 p-3">
                <strong><u>Age Guidelines:</u></strong>
                <br><small>(ages as of September 1st)</small>
                <br>Ages 2-3 (Tippy Toes & Tuxedos)
                <br>4-PK5 (PreKindergarten) Creative Dancers
                <br>Ages K5-6 (Kindergarten-1st Grade)
                <br>Ages 7-9 (2nd-3rd Grade)
                <br>Ages 9-11 (4th -5th grade)
                <br>Ages 12-14 (Middle School)
                <br>Ages 15+ (High School)
                <br><br>
                *Please note: when you are ready to REGISTER, you must complete the registration all the way through payment in order to be registered. The system does drop all non-paid partial registrations at midnight each night!
            </div>
            <div class="col-sm my-3 shadow rounded mx-2 p-3">
                <strong><u>2022-2023 TUITION SCHEDULE</u></strong>
                <br>1ST HOUR $84
                <br>
                2ND - 6TH HOUR $42 (50% DISCOUNT!)
                <br>
                7TH - 11TH HOUR $21 (75% DISCOUNT!)
                <br>
                12TH HOUR AND ABOVE FREE!!!
                <br>
                <em>*The software system will divide incremental hours accordingly</em>
                <br><br>
                ANNUAL MEMBERSHIP FEE
                <br>
                $50 individual or $75 family
                <br><br>
                SIBLING DISCOUNT 5% off 1st child
                <br>
                10% off additional children in same house
            </div>
        </div>

        <div class="gradient-splash my-5 rounded shadow p-3">
            <h1 class="text-center text-white">2022-2023 Fall Schedule</h1>
            <div class="d-flex justify-content-center my-3">
                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
            </div>
            <div class="row text-white row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col-sm">
                    <h4 class="nic txt-gold">Monday <span class="norm">Open 4:00-9:30</span></h4>
{{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <thead>
                        <th scope="col"></th>
                        <th scope="col">Room 1</th>
                        <th scope="col">Room 2</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4:15-5:15</td>
                            <td>Musical Theater K5-11</td>
                            <td>Hippity Hop/Tumble Tots (ages 3-5)</td>
                        </tr>
                        <tr>
                            <td>5:15-6:15</td>
                            <td>Tap 1 (ages 9+)</td>
                            <td>Hip Hop (ages K5-8)</td>
                        </tr>
                        <tr>
                            <td>6:15-7:15</td>
                            <td>Musical Theater 12+</td>
                            <td>Hip Hop (ages 9-11)</td>
                        </tr>
                        <tr>
                            <td>7:15-8:15</td>
                            <td>Tap Int (ages 9+)</td>
                            <td>Hip Hop (ages 12+)</td>
                        </tr>
                        <tr>
                            <td>8:15-9:15</td>
                            <td>Tap Adv (ages 12+)</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold">Tuesday <span class="norm">Open 4:30-9:45</span></h4>
                    <table class="table text-white">
                        <thead>
                        <th scope="col"></th>
                        <th scope="col">Room 1</th>
                        <th scope="col"></th>
                        <th scope="col">Room 2</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4:30-5:15</td>
                            <td></td>
                            <td>4:45-5:30</td>
                            <td>Tippy Toes (ages 2-3)</td>
                        </tr>
                        <tr>
                            <td>5:15-6:15</td>
                            <td>Ballet (beg/int) (ages 9+)</td>
                            <td>5:30-6:15</td>
                            <td>Pre-Pointe (ages 9+)</td>
                        </tr>
                        <tr>
                            <td>6:15-7:15</td>
                            <td>Ballet (adv) (ages 9-11)</td>
                            <td>6:15-7:15</td>
                            <td>Lyrical (ages 12+)</td>
                        </tr>
                        <tr>
                            <td>7:15-8:45</td>
                            <td>Ballet (adv) (ages 12+)</td>
                            <td>7:15-8:15</td>
                            <td>Lyrical (ages 9-11)</td>
                        </tr>
                        <tr>
                            <td>8:45-9:30</td>
                            <td>Pointe *invite only</td>
                            <td>8:15-9:00</td>
                            <td>Top Gun Tech (ages 9-11)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold">Wednesday <span class="norm">Open 4:00-9:30</span></h4>
                    <table class="table text-white">
                        <thead>
                        <th scope="col"></th>
                        <th scope="col">Room 1</th>
                        <th scope="col">Room 2</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4:15-5:15</td>
                            <td>Acro Beg/Int</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5:15-6:15</td>
                            <td>Top Gun Tech (ages 12+)</td>
                            <td>Ballet (ages 7-11)</td>
                        </tr>
                        <tr>
                            <td>6:15-7:15</td>
                            <td>Lyrical (ages 7-8)</td>
                            <td>Acro Int/Adv</td>
                        </tr>
                        <tr>
                            <td>7:15-8:15</td>
                            <td>Jazz (ages 9-11)</td>
                            <td>Leaps & Turns (ages 12+)</td>
                        </tr>
                        <tr>
                            <td>8:15-9:15</td>
                            <td>Jazz (ages 12+)</td>
                            <td>Leaps & Turns (ages 9-11)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold">Thursday <span class="norm">Open 4:15-8:15</span></h4>
                    <table class="table text-white">
                        <thead>
                        <th scope="col"></th>
                        <th scope="col">Room 1</th>
                        <th scope="col">Room 2</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4:30-5:15</td>
                            <td></td>
                            <td>Creative Dancers (ages 3-5)</td>
                        </tr>
                        <tr>
                            <td>5:15-6:15</td>
                            <td>T/J Combo (ages K5-6)</td>
                            <td>Jazz (ages 7-8)</td>
                        </tr>
                        <tr>
                            <td>6:15-7:15</td>
                            <td>Tap (ages 7-8)</td>
                            <td>B/L Combo (ages K5-6)</td>
                        </tr>
                        <tr>
                            <td>7:15-8:00</td>
                            <td>Leaps & Turns (ages K5-8)</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold">Friday & Saturday <span class="norm">Open As Needed</span></h4>
                    <table class="table text-white">
{{--                        <thead>--}}
{{--                        <th scope="col"></th>--}}
{{--                        <th scope="col">Room 1</th>--}}
{{--                        <th scope="col">Room 2</th>--}}
{{--                        </thead>--}}
                        <tbody>
                        <tr>
                            <td>UDF Team Rehearsal as Scheduled</td>
                        </tr>
                        <tr>
                            <td>UDF Privates Available</td>
                        </tr>
                        <tr>
                            <td>UDF Birthday Parties</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row text-white row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col-sm">
                    <h4 class="nic txt-gold" id="age-1">Ages 2-PK5</h4>
                    {{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>4:30-5:15</td>
                            <td>Hippity Hop/Tumble Tots (ages 3-5)</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>4:15-5:00</td>
                            <td>Tippy Toes & Tuxedos (ages 2-3)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>4:30-5:15</td>
                            <td>Creative Dance (ages 3-5)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold" id="age-2">Ages K5-6</h4>
                    {{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>4:15-5:15</td>
                            <td>Musical Theater (ages K5-11)</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>5:15-6:15</td>
                            <td>Hip Hop (ages K5-8)</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>4:15-5:15</td>
                            <td>Acro Beg/Int</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>7:15-8:00</td>
                            <td>Leaps & Turns (must take ballet/lyrical combo)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>5:15-6:15</td>
                            <td>T/J Combo (ages K5-6)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>6:15-7:15</td>
                            <td>B/L Combo (ages K5-6)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold" id="age-3">Ages 7-8</h4>
                    {{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>4:15-5:15</td>
                            <td>Musical Theater K5-11</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>5:15-6:15</td>
                            <td>Hip Hop (ages K5-8)</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>4:15-5:15</td>
                            <td>Acro Beg/Int</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>5:15-6:15</td>
                            <td>Ballet (ages 7-8)</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>6:15-7:15</td>
                            <td>Lyrical (ages 7-8, must take ballet)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>5:15-6:15</td>
                            <td>Jazz (ages 7-8)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>6:15-7:15</td>
                            <td>Tap (ages 7-8)</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>7:15-8:00</td>
                            <td>Leaps & Turns (must take ballet)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold" id="age-3">Ages 9-11</h4>
                    {{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <tbody>
                        <tr><td>Monday</td><td>4:15-5:15</td><td>Musical Theater (K5-11)</td></tr>
                        <tr><td>Monday</td><td>5:15-6:15</td><td>Tap Beg/Int (ages 9+)</td></tr>
                        <tr><td>Monday</td><td>6:15-7:15</td><td>Hip Hop (ages 9-11)</td></tr>
                        <tr><td>Monday</td><td>7:15-8:15</td><td>Tap Int/Adv</td></tr>
                        <tr><td>Tuesday</td><td>5:15-6:00</td><td>Prepointe (must take ballet and Top Gun)</td></tr>
                        <tr><td>Tuesday</td><td>5:15-6:15</td><td>Ballet Beg/Int (ages 9+)</td></tr>
                        <tr><td>Tuesday</td><td>6:15-7:15</td><td>Ballet Adv (ages 9-11)</td></tr>
                        <tr><td>Tuesday</td><td>7:15-8:15</td><td>Lyrical (ages 9-11, must take ballet)</td></tr>
                        <tr><td>Tuesday</td><td>8:15-9:00</td><td>Top Gun (ages 9-11, must take ballet)</td></tr>
                        <tr><td>Wednesday</td><td>6:15-7:15</td><td>Acro Int/Adv (*skills tested, must take a tech class)</td></tr>
                        <tr><td>Wednesday</td><td>7:15-8:15</td><td>Jazz (ages 9-11)</td></tr>
                        <tr><td>Wednesday</td><td>8:15-9:15</td><td>Leaps & Turns (ages 9-11, must take ballet)</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h4 class="nic txt-gold" id="age-3">Ages 12+</h4>
                    {{--                    <p class="fw-bold pb-0 mb-0" style="font-size: 1.5em;">Monday</p>--}}
                    <table class="table text-white">
                        <tbody>
                        <tr><td>Monday</td><td>6:15-7:15</td><td>Musical Theater (ages 12+)</td></tr>
                        <tr><td>Monday</td><td>7:15-8:15</td><td>Hip Hop (ages 12+)</td></tr>
                        <tr><td>Monday</td><td>7:15-8:15</td><td>Tap Intermediate (ages 9+)</td></tr>
                        <tr><td>Monday</td><td>8:15-9:15</td><td>Tap Advanced (ages 12+)</td></tr>
                        <tr><td>Tuesday</td><td>5:15-6:15</td><td>Ballet Beg/Int (ages 9+)</td></tr>
                        <tr><td>Tuesday</td><td>5:15-6:00</td><td>Prepointe (must take ballet and Top Gun)</td></tr>
                        <tr><td>Tuesday</td><td>6:15-7:15</td><td>Lyrical (ages 12+, must take ballet)</td></tr>
                        <tr><td>Tuesday</td><td>7:15-8:45</td><td>Ballet Advanced (ages 12+)</td></tr>
                        <tr><td>Tuesday</td><td>8:45-9:30</td><td>Pointe *Invite Only, must take ballet, Top Gun, and Leaps & Turns</td></tr>
                        <tr><td>Wednesday</td><td>5:15-6:15</td><td>Top Gun (ages 12+, must take ballet)</td></tr>
                        <tr><td>Wednesday</td><td>6:15-7:15</td><td>Acro Int/Adv *skill tested, must take a tech class</td></tr>
                        <tr><td>Wednesday</td><td>7:15-8:15</td><td>Leaps & Turns (ages 12+, must take ballet)</td></tr>
                        <tr><td>Wednesday</td><td>8:15-9:15</td><td>Jazz (ages 12+)</td></tr>
                        </tbody>
                    </table>
                </div>

            <p class="text-white mt-5">
                SATURDAY's are reserved for Team Rehearsals per the Team Calendar.
                <br>
                <br>Private lessons available by appointment, scheduled through the front desk. Private lessons must be scheduled a week in advance.
                <br>
                <br>Prepointe requires 2 ballet classes and Top Gun taken in conjunction to Prepointe
                <br>Pointe requires 2 ballet classes) and Top Gun taken in conjunction to Pointe
                <br>ALL Lyrical classes requires a ballet class in conjunction
                <br>ALL level 2+/3 classes require  ballet class in conjunction
                <br>Acro is SKILL BASED. Levels 2 & 3 require ballet class in conjunction
                <br>
                <br><small>*PLEASE NOTE: Classes and teachers are subject to change, for any reason.  Classes that do not meet enrollment requirements will be combined or discontinued. If forced to temporarily close due to COVID-19, all classes will seamlessly convert to online until we are able to safely reopen. our physical location.
                    <br>UPDATED 12/10/21</small>
            </p>
        </div>
            <div class="d-flex justify-content-center my-3">
                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
            </div>
        </div>
        <div class="my-5">
            <p class="text-center pb-0 mb-0">Check out why we are the BEST studio and faculty to meet your needs:</p>
            <p class="text-center txt-burg fw-bold pb-0 mb-0" style="font-size: 1.25em;">
                TOP STUDIO & NATIONALLY RANKED studio in the SE United States!
                <br>Chamber of Commerce BEST Business Recipient
                <br>ABT® Certified National Training Curriculum
                <br>Progressing Ballet Technique® Certified Teachers
                <br>More Than Just Great Dancing Affiliate Studio
                <br>Professionally Working & Retired Dancer Instructors
                <br>Florida Dance Masters certified by test to teach (all subjects)
                <br>Dance Masters of America certified by test to each (all subjects)
                <br>National Dance Competition adjudicator
                <br>MTV® choreographer
                <br>Nationally ranked award winning Powerhouse Dance Team
                <br>Guest choreographers and Master Teachers
            </p>
            <p class="text-center pt-0 mt-0">...the list goes on and on!</p>
        </div>
        <div class="gradient-splash rounded shadow p-3">
            <p class="text-center text-white fw-bold" style="font-size: 1.25em;">
                TO BE THE BEST, YOU HAVE TO TRAIN WITH THE BEST!
                <br>Are you ready to take the LEAP?
                <br>Just do it!
                <br>
                <br>
                We don't just make <em>great dancers</em> we make <em>great kids!</em>
            </p>
        </div>
    </div>

@endsection
