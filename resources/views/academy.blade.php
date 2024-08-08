@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-4">Fall 2024 Schedule</h1>
        <div class="gradient-splash rounded shadow p-3 text-white">
            <h4 class="text-center fw-bold mb-0 pb-0">
                Join us this Fall!
            </h4>
            <p class="text-center my-0 py-0"><small><em>Class sizes are limited! Register Today!!</em></small></p>
            <div class="d-flex justify-content-center my-3">
                <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
            </div>
        </div>

        <div class="my-5 p-3">
            <h2>Monday</h2>
            <table class="table">
                <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Leaps/Turns" age="7-11 (Grade 2-6)" staff="AA"/>
                <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Leaps/Turns" age="12+ (Grade 7-12)" staff="AA"/>
{{--                <x-room room="" day="Monday" time="7:00pm-7:45pm" name="Leaps/Turns" age="5-8 (Grade K-3)" staff="AA"/>--}}
                <x-room room="" day="Monday" time="7:00pm-9:00pm" name="Privates by appointment" age="" staff="AA"/>
                <x-room room="" day="Monday" time="4:15pm-5:00pm" name="Preschool Tumbling" age="" staff="JS"/>
                <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Acro 1" age="beg (skill based)" staff="JS"/>
                <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Acro 2" age="beg/Int (skill based) *Top Gun recommended" staff="JS"/>
                <x-room room="" day="Monday" time="7:00pm-8:00pm" name="Acro 3" age="int/adv (skill based) *Top Gun required" staff="JS"/>
                <x-room room="" day="Monday" time="8:00pm-9:00pm" name="Acro 4" age="adv (skill based) *Top Gun required" staff="JS"/>
            </table>
            <h2>Tuesday</h2>
            <table class="table">
                <x-room room="" day="Tuesday" time="4:00pm-5:00pm" name="Ballet" age="ages 7-8 (Grade 2-3)" staff="SB"/>
                <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Ballet" age="beg/int ages 9-18 (Grade 4-12)" staff="SB"/>
                <x-room room="" day="Tuesday" time="6:00pm-6:45pm" name="PrePointe" age="ages 9+ (must also take ballet & PBT)" staff="SB"/>
                <x-room room="" day="Tuesday" time="7:00pm-8:00pm" name="Ballet" age="int/adv ages 9-11 (must also take PBT tech class)" staff="SB"/>
                <x-room room="" day="Tuesday" time="8:00pm-9:00pm" name="Ballet" age="int/adv ages 12+ (must also take PBT tech class)" staff="SB"/>
                <x-room room="" day="Tuesday" time="9:00pm-9:45pm" name="Pointe" age="ages 11+ *Invitation only, (must also take ballet & PBT)" staff="SB"/>
                <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Lyrical" age="ages 7-8 (Grade 2-3) *Ballet required" staff="AS"/>
                <x-room room="" day="Tuesday" time="6:00pm-7:00pm" name="Ballet/Lyrical" age="ages 5-6 (Grade K-1)" staff="AS"/>
                <x-room room="" day="Tuesday" time="7:00pm-8:00pm" name="Lyrical" age="ages 12+ (Grade 7-12) *Ballet required" staff="AS"/>
                <x-room room="" day="Tuesday" time="8:00pm-9:00pm" name="Lyrical" age="ages 9-11 (Grade 4-6) *Ballet required" staff="AS"/>
{{--                <x-room room="" day="Tuesday" time="9:00pm-9:30pm" name="PrePointe" age="ages 9+ (Grade 4-12) (must also take ballet & PBT)" staff="AS"/>--}}
            </table>
            <h2>Wednesday</h2>
            <table class="table">
                <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Jazz" age="ages K5-8(Grade K-3)" staff="AS"/>
                <x-room room="" day="Wednesday" time="6:00pm-7:00pm" name="Jazz" age="beg/int; ages 9-11 (Grades 4-5)" staff="AS"/>
                <x-room room="" day="Wednesday" time="7:00pm-8:00pm" name="Jazz" age="ages 12+ (Grade 7-12)" staff="AS"/>
                <x-room room="" day="Wednesday" time="8:00pm-9:00pm" name="Adult Jazz Stretch" age="18+" staff="AS"/>
                <x-room room="" day="Wednesday" time="4:15pm-5:00pm" name="PBT Ballet Tech 1" age="ages 9-11 (Grade 4-6) *2nd ballet class" staff="KR"/>
                <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Tap" age="ages 12+ adv (Grade 7-12)" staff="KR"/>
                <x-room room="" day="Wednesday" time="6:00pm-7:00pm" name="Tap" age="ages K5-8 (Grade K-3)" staff="KR"/>
                <x-room room="" day="Wednesday" time="7:00pm-8:00pm" name="Musical Theater" age="ages K5-9 (Grades K-4)" staff="KR"/>
                <x-room room="" day="Wednesday" time="8:00pm-9:00pm" name="Musical Theater" age="ages 10-18 (Grades 5-12)" staff="KR"/>
            </table>
            <h2>Thursday</h2>
            <table class="table">
                <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Hip Hop" age="ages 9-11 (Grade 4-5)" staff="ASH"/>
                <x-room room="" day="Thursday" time="5:00pm-6:00pm" name="Hip Hop" age="ages K5-8 (Grade K-3)" staff="ASH"/>
                <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Hip Hop" age="ages 12-18 (Grade 6-12)" staff="ASH"/>
                <x-room room="" day="Thursday" time="7:00pm-8:00pm" name="Top Gun" age="ages 6-11 (Grade 1-6)" staff="ASH"/>
                <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Top Gun" age="ages 12+ (Grade 7-12)" staff="ASH"/>
                <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Ballet/Tap Combo" age="ages PreK 3-PK5" staff="KR"/>
                <x-room room="" day="Thursday" time="5:00pm-6:00pm" name="Tap" age="ages 9-18 beg/int (Grade 4-12)" staff="KR"/>
                <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Jazz" age="int/adv; ages 9-11 (Grade 4-6) *Ballet required" staff="KR"/>
                <x-room room="" day="Thursday" time="7:00pm-8:00pm" name="PBT Ballet Tech 2" age="ages 12+ (Grade 7-12) *2nd ballet class" staff="KR"/>
                <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Tap" age="ages 9-11 int/adv (Grade 4-6)" staff="KR"/>
            </table>
            <h2>Friday</h2>
            <table class="table">
                <x-room room="" day="Friday" time="5:00pm-8:00pm" name="UDF Powerhouse Team Rehearsal" age="" staff="KR"/>
            </table>
        </div>

        <div class="d-flex justify-content-center my-3">
            <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
        </div>

        <div class="container">
            <div class="gradient-splash rounded shadow p-3 text-white">

                <h2>Preschool (Ages 3-5)</h2>
                <table class="table text-white">
                    <x-room room="" day="Monday" time="4:15pm-5:00pm" name="Preschool Tumbling" age="" staff="JS"/>
                    <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Ballet/Tap Combo" age="ages PreK 3-PK5" staff="KR"/>
                </table>
                <h2>Kindergarten to Grade 1 (Ages 5-6)</h2>
                <table class="table text-white">
                    <x-room room="" day="Tuesday" time="6:00pm-7:00pm" name="Ballet/Lyrical" age="ages 5-6 (Grade K-1)" staff="AS"/>
                    <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Jazz" age="ages K5-8 (Grade K-3)" staff="AS"/>
                    <x-room room="" day="Wednesday" time="6:00pm-7:00pm" name="Tap" age="ages K5-8 (Grade K-3)" staff="KR"/>
                    <x-room room="" day="Wednesday" time="7:00pm-8:00pm" name="Musical Theater" age="ages K5-9 (Grades K-4)" staff="KR"/>
                </table>
                <h2>Grade 2 to Grade 3 (Ages 7-8)</h2>
                <table class="table text-white">
                    <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Leaps/Turns" age="7-11 (Grade 2-6)" staff="AA"/>
                    <x-room room="" day="Tuesday" time="4:00pm-5:00pm" name="Ballet" age="ages 7-8 (Grade 2-3)" staff="SB"/>
                    <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Lyrical" age="ages 7-8 (Grade 2-3) *Ballet required" staff="AS"/>
                    <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Hip Hop" age="ages K5-8 (Grade K-3)" staff="ASH"/>
                </table>
                <h2>Grade 4 to Grade 6 (Ages 9-11)</h2>
                <table class="table text-white">
                    <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Acro 1" age="beg (skill based)" staff="JS"/>
                    <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Acro 2" age="beg/Int (skill based) *Top Gun recommended" staff="JS"/>
                    <x-room room="" day="Monday" time="7:00pm-8:00pm" name="Acro 3" age="int/adv (skill based) *Top Gun required" staff="JS"/>
                    <x-room room="" day="Monday" time="8:00pm-9:00pm" name="Acro 4" age="adv (skill based) *Top Gun required" staff="JS"/>
                    <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Ballet" age="beg/int ages 9-18 (Grade 4-12)" staff="SB"/>
                    <x-room room="" day="Tuesday" time="6:00pm-6:45pm" name="PrePointe" age="ages 9+ (must also take ballet & PBT)" staff="SB"/>
                    <x-room room="" day="Tuesday" time="7:00pm-8:00pm" name="Lyrical" age="ages 9-11 (Grade 4-6) *Ballet required" staff="AS"/>
                    <x-room room="" day="Wednesday" time="4:15pm-5:00pm" name="PBT Ballet Tech 1" age="ages 9-11 (Grade 4-6) *2nd ballet class" staff="KR"/>
                    <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Hip Hop" age="ages 9-11 (Grade 4-5)" staff="ASH"/>
                    <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Jazz" age="int/adv; ages 9-11 (Grade 4-6) *Ballet required" staff="KR"/>
                    <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Tap" age="ages 9-11 int/adv (Grade 4-6)" staff="KR"/>
                </table>
                <h2>Grade 7 to Grade 12 (Ages 12+)</h2>
                <table class="table text-white">
                    <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Leaps/Turns" age="12+ (Grade 7-12)" staff="AA"/>
                    <x-room room="" day="Tuesday" time="8:00pm-9:00pm" name="Ballet" age="int/adv ages 12+ (must also take PBT tech class)" staff="SB"/>
                    <x-room room="" day="Tuesday" time="9:00pm-9:45pm" name="Pointe" age="ages 11+ *Invitation only, (must also take ballet & PBT)" staff="SB"/>
                    <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Tap" age="ages 12+ adv (Grade 7-12)" staff="KR"/>
                    <x-room room="" day="Wednesday" time="7:00pm-8:00pm" name="Jazz" age="ages 12+ (Grade 7-12)" staff="AS"/>
                    <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Hip Hop" age="ages 12-18 (Grade 6-12)" staff="ASH"/>
                    <x-room room="" day="Thursday" time="7:00pm-8:00pm" name="Top Gun" age="ages 12+ (Grade 7-12)" staff="ASH"/>
                    <x-room room="" day="Thursday" time="7:00pm-8:00pm" name="PBT Ballet Tech 2" age="ages 12+ (Grade 7-12) *2nd ballet class" staff="KR"/>
                </table>
                <h2>Adults (Ages 18+)</h2>
                <table class="table text-white">
                    <x-room room="" day="Wednesday" time="8:00pm-9:00pm" name="Adult Jazz Stretch" age="18+" staff="AS"/>
                </table>


{{--                <h2>Ages 2-4</h2>--}}
{{--                <table class="table text-white">--}}
{{--                    <x-room room="" day="Monday" time="4:15pm-5:00pm" name="Preschool Tumbling" age="Preschool" staff="JS"/>--}}
{{--                    <x-room room="" day="Thursday" time="4:15pm-5:00pm" name="Ballet/Tap Combo" age="ages PreK 3-PK5" staff="KR"/>--}}
{{--                </table>--}}

{{--                <h2>Ages 5-8</h2>--}}
{{--                <table class="table text-white">--}}
{{--                    <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Leaps/Turns" age="9-11 (Grade 4-6)" staff="AA"/>--}}
{{--                    <x-room room="" day="Monday" time="7:00pm-7:45pm" name="Leaps/Turns" age="5-8 (Grade K-3)" staff="AA"/>--}}
{{--                    <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Jazz" age="ages K5-8 (Grade K-3)" staff="AS"/>--}}
{{--                    <x-room room="" day="Wednesday" time="6:00pm-7:00pm" name="Tap" age="ages K5-8 (Grade K-3)" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="4:00pm-5:00pm" name="Hip Hop" age="ages K5-11 (Grade K-5)" staff="ASH"/>--}}
{{--                    <x-room room="" day="Thursday" time="5:00pm-6:00pm" name="Jazz/Tap" age="ages 5-6 (Grade K-1)" staff="ASH"/>--}}
{{--                    <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Jazz" age="int/adv; ages 9-11 (Grade 4-6) *Ballet required" staff="KR"/>--}}
{{--                    <x-room room="" day="Tuesday" time="6:00pm-7:00pm" name="Ballet/Lyrical" age="ages 5-6 (Grade K-1)" staff="AS"/>--}}
{{--                    <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Lyrical" age="ages 7-8 (Grade 2-3) *Ballet required" staff="AS"/>--}}
{{--                </table>--}}

{{--                <h2>Ages 9-11 (Including Ages 11 & Under)</h2>--}}
{{--                <table class="table text-white">--}}
{{--                    <x-room room="" day="Monday" time="5:00pm-6:00pm" name="Leaps/Turns" age="9-11 (Grade 4-6)" staff="AA"/>--}}
{{--                    <x-room room="" day="Monday" time="7:00pm-8:00pm" name="Acro 3" age="int/adv (skill based) *Top Gun required" staff="JS"/>--}}
{{--                    <x-room room="" day="Tuesday" time="5:00pm-6:00pm" name="Ballet" age="beg/int ages 9-18 (Grade 4-12)" staff="SB"/>--}}
{{--                    <x-room room="" day="Tuesday" time="6:00pm-6:45pm" name="PrePointe" age="ages 9+ (must also take ballet & PBT)" staff="SB"/>--}}
{{--                    <x-room room="" day="Tuesday" time="7:00pm-8:00pm" name="Ballet" age="int/adv ages 9-11 (must also take PBT tech class)" staff="SB"/>--}}
{{--                    <x-room room="" day="Tuesday" time="8:00pm-9:00pm" name="Lyrical" age="ages 9-11 (Grade 4-6) *Ballet required" staff="AS"/>--}}
{{--                    <x-room room="" day="Wednesday" time="4:15pm-5:00pm" name="PBT Ballet Tech 1" age="ages 9-11 (Grade 4-6) *2nd ballet class" staff="KR"/>--}}
{{--                    <x-room room="" day="Wednesday" time="6:00pm-7:00pm" name="Musical Theater" age="ages K5-11 (Grades K-5)" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="5:00pm-6:00pm" name="Tap" age="ages 9-18 beg/int (Grade 4-12)" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="6:00pm-7:00pm" name="Jazz" age="int/adv; ages 9-11 (Grade 4-6) *Ballet required" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Tap" age="ages 9-11 int/adv (Grade 4-6)" staff="KR"/>--}}
{{--                </table>--}}

{{--                <h2>Ages 12 & Up</h2>--}}
{{--                <table class="table text-white">--}}
{{--                    <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Leaps/Turns" age="ages 12+ (Grade 7-12)" staff="AA"/>--}}
{{--                    <x-room room="" day="Monday" time="6:00pm-7:00pm" name="Acro 2" age="beg/Int (skill based) *Top Gun recommended" staff="JS"/>--}}
{{--                    <x-room room="" day="Monday" time="8:00pm-9:00pm" name="Acro 4" age="adv (skill based) *Top Gun required" staff="JS"/>--}}
{{--                    <x-room room="" day="Tuesday" time="6:00pm-7:00pm" name="Ballet" age="beg/int ages 12+ (Grade 7-12)" staff="SB"/>--}}
{{--                    <x-room room="" day="Tuesday" time="8:00pm-9:00pm" name="Ballet" age="int/adv ages 12+ (must also take PBT tech class)" staff="SB"/>--}}
{{--                    <x-room room="" day="Tuesday" time="7:00pm-8:00pm" name="Lyrical" age="ages 12+ (Grade 7-12) *Ballet required" staff="AS"/>--}}
{{--                    <x-room room="" day="Tuesday" time="9:00pm-9:30pm" name="PrePointe" age="ages 9+ (Grade 4-12) (must also take ballet & PBT)" staff="AS"/>--}}
{{--                    <x-room room="" day="Wednesday" time="5:00pm-6:00pm" name="Tap" age="ages 12+ adv (Grade 7-12)" staff="KR"/>--}}
{{--                    <x-room room="" day="Wednesday" time="8:00pm-9:00pm" name="Musical Theater" age="ages 12-18 (Grades 6-12)" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="5:00pm-6:00pm" name="Tap" age="ages 9-18 beg/int (Grade 4-12)" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="7:00pm-8:00pm" name="PBT Ballet Tech 2" age="ages 12+ (Grade 7-12) *2nd ballet class" staff="KR"/>--}}
{{--                    <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Top Gun" age="ages 12+ (Grade 7-12)" staff="ASH"/>--}}
{{--                    <x-room room="" day="Thursday" time="8:00pm-9:00pm" name="Tap" age="ages 9-11 int/adv (Grade 4-6)" staff="KR"/>--}}
{{--                    <x-room room="" day="Friday" time="5:00pm-8:00pm" name="UDF Powerhouse Team Rehearsal" age="" staff="KR"/>--}}
{{--                </table>--}}

{{--                                <h2>Non-Specified Age Groups</h2>--}}
{{--                                <table class="table text-white">--}}

{{--                                </table>--}}

            </div>
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
                <br>
                Please see each class for required prerequisites
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
                <strong><u>2024-2025 TUITION SCHEDULE</u></strong>
                <br>Please call us for tuition information
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
        <div class="d-flex justify-content-center my-3">
            <img src="/images/summer-graphic.JPEG" alt="summer graphic" class="img-fluid">
        </div>
        <div class="d-flex justify-content-center my-3">
            <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
        </div>
    </div>

@endsection
