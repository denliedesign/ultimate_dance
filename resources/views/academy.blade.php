@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-4">2023-2024 Schedule</h1>
        <div class="gradient-splash rounded shadow p-3 text-white">
            <h4 class="text-center fw-bold mb-0 pb-0">
                Join us for our 2023-2024 season!
            </h4>
            <p class="text-center my-0 py-0"><small><em>Class sizes are limited! Register Today!!</em></small></p>
            <div class="d-flex justify-content-center my-3">
                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
            </div>
        </div>

        <div class="my-5 p-3">
            <h2>Monday</h2>
            <table class="table">
                <x-room room="Room 1" time="4:00-5:00" name="Musical Theater" age="Grades K-5" staff=""/>
                <x-room room="Room 1" time="5:00-6:00" name="Musical Theater" age="Grades 6-12" staff=""/>
                <x-room room="Room 1" time="6:00-7:00" name="Tap" age="Grades 2-3" staff=""/>
                <x-room room="Room 1" time="7:00-8:00" name="Tap Adv" age="Grades 7-12" staff=""/>
                <x-room room="Room 1" time="8:00-9:00" name="Tap Beg/Int" age="Grades 4-12" staff=""/>
                <x-room room="Room 2" time="4:14-5:00" name="Hippity Hop/Tumble Tots" age="PreK 3-4" staff=""/>
                <x-room room="Room 2" time="5:00-6:00" name="Hip Hop" age="Grades K-5" staff=""/>
                <x-room room="Room 2" time="6:00-7:00" name="Hip Hop" age="Grades 6-12" staff=""/>
                <x-room room="Room 2" time="7:00-8:00" name="Top Gun" age="Grades 4-6" staff=""/>
                <x-room room="Room 2" time="8:00-9:00" name="Adult Jazz Stretch" age="18+" staff=""/>
            </table>
            <h2>Tuesday</h2>
            <table class="table">
                <x-room room="Room 1" time="4:00-5:00" name="Ballet" age="Grades 2-3" staff=""/>
                <x-room room="Room 1" time="5:00-6:00" name="Ballet Beg/Int" age="Grades 4-6" staff=""/>
                <x-room room="Room 1" time="6:00-7:00" name="Ballet Int/Adv" age="Grades 4-6 (PBT tech required)" staff=""/>
                <x-room room="Room 1" time="7:00-8:00" name="Ballet Beg/Int" age="Grades 7-12" staff=""/>
                <x-room room="Room 1" time="8:00-9:30" name="Ballet Int/Adv" age="Grades 7-12 (PBT tech required)" staff=""/>
                <x-room room="Room 2" time="4:30-5:15" name="Ballet/Tap Combo" age="PreK 3-4" staff=""/>
                <x-room room="Room 2" time="5:15-6:15" name="Leaps/Turns" age="Grades K-3 (ballet required)" staff=""/>
                <x-room room="Room 2" time="6:00-7:00" name="Ballet/Lyrical" age="Grades K-1" staff=""/>
                <x-room room="Room 2" time="7:00-8:00" name="Lyrical" age="Grades 4-6 (ballet required)" staff=""/>
                <x-room room="Room 2" time="8:00-9:00" name="Leaps/Turns" age="Grades 4-6" staff=""/>
            </table>
            <h2>Wednesday</h2>
            <table class="table">
                <x-room room="Room 1" time="4:30-5:30" name="Jazz Beg/Int" age="Grades 4-5" staff=""/>
                <x-room room="Room 1" time="5:30-6:30" name="PBT Ballet Tech 1" age="Grades 4-6 (2nd ballet class)" staff=""/>
                <x-room room="Room 1" time="6:30-7:30" name="PBT Ballet Tech 2" age="Grades 7-12" staff=""/>
                <x-room room="Room 1" time="7:30-8:15" name="PrePointe" age="Grades 4-12 (ballet tech required)" staff=""/>
                <x-room room="Room 1" time="8:15-8:45" name="Private Lessons as Scheduled" age="" staff=""/>
                <x-room room="Room 2" time="4:30-5:30" name="Jazz/Tap" age="Grades K-1" staff=""/>
                <x-room room="Room 2" time="5:30-6:30" name="Jazz" age="Grades 7-12" staff=""/>
                <x-room room="Room 2" time="6:30-7:30" name="Jazz Int/Adv" age="Grades 4-6 (ballet required)" staff=""/>
                <x-room room="Room 2" time="7:30-8:15" name="Pointe" age="(invitation only, ballet required)" staff=""/>
                <x-room room="Room 2" time="8:15-9:15" name="Lyrical" age="Grades 7-12 (ballet required)" staff=""/>
            </table>
            <h2>Thursday</h2>
            <table class="table">
                <x-room room="Room 1" time="4:30-5:30" name="Acro Beg" age="(skill based)" staff=""/>
                <x-room room="Room 1" time="5:30-6:30" name="Leaps/Turns" age="Grades 7-12" staff=""/>
                <x-room room="Room 1" time="6:30-8:00" name="Acro Adv" age="(skill based, Top Gun required)" staff=""/>
                <x-room room="Room 1" time="8:00-9:00" name="Top Gun" age="Grades 7-12" staff=""/>
{{--                <x-room room="Room" time="" name="" age="Grades" staff=""/>--}}
                <x-room room="Room 2" time="4:30-5:30" name="Acro Int/Adv" age="(skill based, Top Gun recommended)" staff=""/>
                <x-room room="Room 2" time="5:30-6:15" name="Top Gun" age="Grades K-3" staff=""/>
                <x-room room="Room 2" time="6:15-7:15" name="Lyrical" age="Grades 2-3 (ballet required)" staff=""/>
                <x-room room="Room 2" time="7:15-8:15" name="Jazz" age="Grades 2-3" staff=""/>
                <x-room room="Room 2" time="8:15-8:45" name="Private Lessons" age="" staff=""/>
            </table>
            <h2>Friday & Saturday</h2>
            <table class="table">
                <x-room room="" time="" name="UDF Powerhouse Team Rehearsal" age="" staff=""/>
                <x-room room="" time="" name="Private Lessons" age="" staff=""/>
            </table>
        </div>

        <div class="d-flex justify-content-center my-3">
            <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
        </div>

        <div>
            <p class="mt-5">
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
