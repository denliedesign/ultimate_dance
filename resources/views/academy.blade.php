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
            <h2>Wednesday</h2>
            <table class="table">
                <x-room day="Wednesday" room="Room 1" time="5:00-6:00" name="Lyrical" age="Grades K5-8" staff="Karis"/>
                <x-room day="Wednesday" room="Room 1" time="6:00-7:00" name="Jazz" age="Ages 9-11" staff="Karis"/>
                <x-room day="Wednesday" room="Room 1" time="7:00-8:00" name="M/TH" age="Ages 11 & Under" staff="Karis"/>
                <x-room day="Wednesday" room="Room 1" time="8:00-9:00" name="M/TH" age="Ages 12 & Up" staff="Karis"/>
                <x-room day="Wednesday" room="Room 2" time="5:00-6:00" name="Ballet/Tap/Tumble" age="Ages 2-3" staff="April"/>
                <x-room day="Wednesday" room="Room 2" time="6:00-7:00" name="Ballet" age="Grades K5-8" staff="April"/>
                <x-room day="Wednesday" room="Room 2" time="7:00-8:00" name="Jazz" age="Ages 12 & Up" staff="April"/>
                <x-room day="Wednesday" room="Room 2" time="8:00-9:00" name="Ballet" age="Ages 9-11" staff="April"/>
                <x-room day="Wednesday" room="Room 2" time="9:00-9:30" name="Pre-Pointe" age="-" staff="April"/>
            </table>
            <h2>Thursday</h2>
            <table class="table">
                <x-room day="Thursday" room="Room 1" time="4:00-5:00" name="PBT" age="Ages 12 & Up" staff="Karis"/>
                <x-room day="Thursday" room="Room 1" time="5:00-6:00" name="Tap" age="Ages 9-18 / LVL 1 & 2" staff="Karis"/>
                <x-room day="Thursday" room="Room 1" time="6:00-7:00" name="Jazz/Tap" age="Grades K5-8" staff="Karis"/>
                <x-room day="Thursday" room="Room 1" time="7:00-8:00" name="Tap" age="Ages 9-18 / LVL 2+ & 3" staff="Karis"/>
                <x-room day="Thursday" room="Room 1" time="8:00-9:00" name="PBT" age="Ages 11 & Under" staff="Karis"/>
                <x-room day="Thursday" room="Room 2" time="5:00-6:00" name="Acro 1" age="Grades K5-8" staff="April"/>
                <x-room day="Thursday" room="Room 2" time="6:00-7:00" name="Lyrical" age="Ages 12 & Up" staff="April"/>
                <x-room day="Thursday" room="Room 2" time="7:00-8:00" name="Lyrical" age="Ages 9-11" staff="April"/>
                <x-room day="Thursday" room="Room 2" time="8:00-9:15" name="Ballet" age="Ages 12 & Up" staff="April"/>
                <x-room day="Thursday" room="Room 2" time="9:15-9:45" name="Pointe" age="-" staff="April"/>
                <x-room day="Thursday" room="" time="9:00-4:00" name="Private Coaching" age="-" staff="Annette"/>
            </table>
            <h2>Friday</h2>
            <table class="table">
                <x-room day="Friday" room="Room 1" time="9:00-10:30" name="Acro 3" age="-" staff="Jeremy"/>
                <x-room day="Friday" room="Room 1" time="10:30-11:30" name="L/T" age="Ages 11 & Under" staff="Jeremy"/>
                <x-room day="Friday" room="Room 1" time="11:30-12:30" name="L/T" age="Ages 12 & Up" staff="Jeremy"/>
                <x-room day="Friday" room="Room 2" time="9:30-10:30" name="Acro 2" age="-" staff="Annette"/>
                <x-room day="Friday" room="Room 2" time="10:30-11:30" name="Top Gun" age="Ages 12 & Up" staff="Annette"/>
                <x-room day="Friday" room="Room 2" time="11:30-12:30" name="Top Gun" age="Ages 11 & Under" staff="Annette"/>
                <x-room day="Friday" room="Room 2" time="1:30-4:30" name="Team" age="-" staff="Annette"/>
            </table>
        </div>

        <div class="d-flex justify-content-center my-3">
            <a href="https://app.thestudiodirector.com/ultimatedanceflorida1/portal.sd?page=Register" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-gold btn-family">Register</div></a>
        </div>

        <div class="container">
            <div class="gradient-splash rounded shadow p-3 text-white">
                <h2>Ages 2-3</h2>
                <table class="table text-white">
                    <x-room day="Wednesday" room="Room 2" time="5:00-6:00" name="Ballet/Tap/Tumble" age="Ages 2-3" staff="April"/>

                </table>

                <h2>Ages 5-14</h2>
                <table class="table text-white">
                    <x-room day="Wednesday" room="Room 1" time="5:00-6:00" name="Lyrical" age="Grades K5-8" staff="Karis"/>
                    <x-room day="Wednesday" room="Room 2" time="6:00-7:00" name="Ballet" age="Grades K5-8" staff="April"/>
                    <x-room day="Thursday" room="Room 1" time="6:00-7:00" name="Jazz/Tap" age="Grades K5-8" staff="Karis"/>
                    <!-- Note: The classes for Grades K5-8 also fit within the Ages 9-11 group due to grade to age mapping -->

                </table>

                <h2>Ages 9-11 (Including Ages 11 & Under)</h2>
                <table class="table text-white">
                    <x-room day="Wednesday" room="Room 1" time="6:00-7:00" name="Jazz" age="Ages 9-11" staff="Karis"/>
                    <x-room day="Wednesday" room="Room 1" time="7:00-8:00" name="M/TH" age="Ages 11 & Under" staff="Karis"/>
                    <x-room day="Wednesday" room="Room 2" time="8:00-9:00" name="Ballet" age="Ages 9-11" staff="April"/>
                    <x-room day="Thursday" room="Room 1" time="8:00-9:00" name="PBT" age="Ages 11 & Under" staff="Karis"/>
                    <x-room day="Thursday" room="Room 2" time="7:00-8:00" name="Lyrical" age="Ages 9-11" staff="April"/>
                    <x-room day="Friday" room="Room 1" time="10:30-11:30" name="L/T" age="Ages 11 & Under" staff="Jeremy"/>
                    <x-room day="Friday" room="Room 2" time="11:30-12:30" name="Top Gun" age="Ages 11 & Under" staff="Annette"/>
                    <x-room day="Thursday" room="Room 1" time="5:00-6:00" name="Tap" age="Ages 9-18 / LVL 1 & 2" staff="Karis"/>
                    <x-room day="Thursday" room="Room 1" time="7:00-8:00" name="Tap" age="Ages 9-18 / LVL 2+ & 3" staff="Karis"/>

                </table>

                <h2>Ages 12 & Up</h2>
                <table class="table text-white">
                    <x-room day="Wednesday" room="Room 1" time="8:00-9:00" name="M/TH" age="Ages 12 & Up" staff="Karis"/>
                    <x-room day="Wednesday" room="Room 2" time="7:00-8:00" name="Jazz" age="Ages 12 & Up" staff="April"/>
                    <x-room day="Thursday" room="Room 1" time="4:00-5:00" name="PBT" age="Ages 12 & Up" staff="Karis"/>
                    <x-room day="Thursday" room="Room 2" time="6:00-7:00" name="Lyrical" age="Ages 12 & Up" staff="April"/>
                    <x-room day="Thursday" room="Room 2" time="8:00-9:15" name="Ballet" age="Ages 12 & Up" staff="April"/>
                    <x-room day="Friday" room="Room 1" time="11:30-12:30" name="L/T" age="Ages 12 & Up" staff="Jeremy"/>
                    <x-room day="Friday" room="Room 2" time="10:30-11:30" name="Top Gun" age="Ages 12 & Up" staff="Annette"/>
                    <x-room day="Thursday" room="Room 1" time="5:00-6:00" name="Tap" age="Ages 9-18 / LVL 1 & 2" staff="Karis"/>
                    <x-room day="Thursday" room="Room 1" time="7:00-8:00" name="Tap" age="Ages 9-18 / LVL 2+ & 3" staff="Karis"/>

                </table>

                                <h2>Non-Specified Age Groups</h2>
                                <table class="table text-white">
                                    <x-room day="Wednesday" room="Room 2" time="9:00-9:30" name="Pre-Pointe" age="-" staff="April"/>
                                    <x-room day="Thursday" room="Room 2" time="9:15-9:45" name="Pointe" age="-" staff="April"/>
                                    <x-room day="Thursday" room="" time="9:00-4:00" name="Private Coaching" age="-" staff="Annette"/>
                                    <x-room day="Friday" room="Room 1" time="9:00-10:30" name="Acro 3" age="-" staff="Jeremy"/>
                                    <x-room day="Friday" room="Room 2" time="9:30-10:30" name="Acro 2" age="-" staff="Annette"/>
                                    <x-room day="Friday" room="Room 2" time="1:30-4:30" name="Team" age="-" staff="Annette"/>

                                </table>

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
                <strong><u>2023-2024 TUITION SCHEDULE</u></strong>
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
    </div>

@endsection
