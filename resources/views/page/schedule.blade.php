@extends('backend_web.master')

@section('content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/home-page">Home</a>
                    <span>Schedule</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Dentists Schedule</div>
                <h1>Doctors Timetable</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="text-center mb-4 mb-md-5 max-900">
                <p>Need to make a pediatric dentist appointment this week? Use our Timetable to find dentists you who take your insurance. It’s simple to check their availabilities here. </p>
            </div>
            <div class="nav nav-pills justify-content-center" role="tablist">
                <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab" aria-expanded="true">Endodontics</a>
                <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab" aria-expanded="false">General dentistry</a>
                <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab" aria-expanded="false">Oral medicine</a>
                <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab" aria-expanded="false">Oral surgery</a>
                <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab" aria-expanded="false">Orthodontics</a>
                <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab" aria-expanded="false">Periodontics</a>
                <a class="nav-link" data-toggle="pill" href="#tab-G" role="tab" aria-expanded="false">Prosthodontics</a>
            </div>
            <div id="tab-content" class="tab-content mt-3 mt-md-4">
                <div id="tab-A" class="tab-pane fade show active" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-B" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-C" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-D" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-E" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-F" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-G" class="tab-pane fade" role="tabpanel">
                    <div class="cd-schedule loading">
                        <div class="timeline">
                            <div class="timeline-top-info"><span>Hours</span></div>
                            <ul>
                                <li><span>08:00</span></li>
                                <li><span>09:00</span></li>
                                <li><span>10:00</span></li>
                                <li><span>11:00</span></li>
                                <li><span>12:00</span></li>
                                <li><span>13:00</span></li>
                                <li><span>14:00</span></li>
                                <li><span>15:00</span></li>
                                <li><span>16:00</span></li>
                                <li><span>17:00</span></li>
                                <li><span>18:00</span></li>
                                <li><span>19:00</span></li>
                            </ul>
                        </div>
                        <div class="events">
                            <ul>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Monday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Tuesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Wednesday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Thursday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Friday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Saturday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Gerald Gleaves</div>
                                                <div class="doctor-position">General Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="events-group">
                                    <div class="schedule-top-info"><span>Sunday</span></div>
                                    <ul>
                                        <li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Frank Bigham</div>
                                                <div class="doctor-position">Associate Dentist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Pamela Knaack</div>
                                                <div class="doctor-position">Dental Hygienist</div>
                                            </a>
                                        </li>
                                        <li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
                                            <a href="doctor-page.html">
                                                <div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
                                                <div class="doctor-name">Dr. Billy Logan</div>
                                                <div class="doctor-position">Cosmetic Dentist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
    </div>
</div>
@endsection

@section('script_new')
<script src="{{ asset('vendor/schedule/schedule.js') }}"></script>
@endsection