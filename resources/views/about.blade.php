@extends('layout.master')
@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/aboutt.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p><b>
                            In an effort to enhance the level of education in our beloved country and help students improve
                            their understanding of the university majors available to them, First Step Academy provides an
                            atmosphere of learning and support designed to help students choose majors that are compatible
                            with
                            their interests as they forge their individual paths in life. </p></b>
                    <br>
                    <p><b> It is a great honor to work in the service of our fellow countrymen as we strive to produce
                            highly
                            educated students with the practical qualifications, experience, and skills needed to meet
                            demands
                            in both local and foreign markets. </p></b>
                    {{-- <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">SIGN UP</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- ROAD MAP -->

    {{-- <div>
        <p>

       
        </p> --}}

    </div>
    <style>
        .timeline {
            position: relative;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 40px;
            width: 2px;
            margin-left: -1.5px;
            content: "";
            background-color: #e9ecef;
        }

        .timeline>li {
            position: relative;
            min-height: 50px;
            margin-bottom: 50px;
        }

        .timeline>li:after,
        .timeline>li:before {
            display: table;
            content: " ";
        }

        .timeline>li:after {
            clear: both;
        }

        .timeline>li .timeline-panel {
            position: relative;
            float: right;
            width: 100%;
            padding: 0 20px 0 100px;
            text-align: left;
        }

        .timeline>li .timeline-panel:before {
            right: auto;
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline>li .timeline-panel:after {
            right: auto;
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline>li .timeline-image {
            position: absolute;
            z-index: 100;
            left: 0;
            width: 80px;
            height: 80px;
            margin-left: 0;
            text-align: center;
            color: white;
            border: 7px solid #e9ecef;
            border-radius: 100%;
            background-color: #ffc800;
        }

        .timeline>li .timeline-image h4,
        .timeline>li .timeline-image .h4 {
            font-size: 10px;
            line-height: 14px;
            margin-top: 12px;
        }

        .timeline>li.timeline-inverted>.timeline-panel {
            float: right;
            padding: 0 20px 0 100px;
            text-align: left;
        }

        .timeline>li.timeline-inverted>.timeline-panel:before {
            right: auto;
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline>li.timeline-inverted>.timeline-panel:after {
            right: auto;
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline>li:last-child {
            margin-bottom: 0;
        }

        .timeline .timeline-heading h4,
        .timeline .timeline-heading .h4 {
            margin-top: 0;
            color: inherit;
        }

        .timeline .timeline-heading h4.subheading,
        .timeline .timeline-heading .subheading.h4 {
            text-transform: none;
        }

        .timeline .timeline-body>ul,
        .timeline .timeline-body>p {
            margin-bottom: 0;
        }

        @media (min-width: 768px) {
            .timeline:before {
                left: 50%;
            }

            .timeline>li {
                min-height: 100px;
                margin-bottom: 100px;
            }

            .timeline>li .timeline-panel {
                float: left;
                width: 41%;
                padding: 0 20px 20px 30px;
                text-align: right;
            }

            .timeline>li .timeline-image {
                left: 50%;
                width: 100px;
                height: 100px;
                margin-left: -50px;
            }

            .timeline>li .timeline-image h4,
            .timeline>li .timeline-image .h4 {
                font-size: 13px;
                line-height: 18px;
                margin-top: 16px;
            }

            .timeline>li.timeline-inverted>.timeline-panel {
                float: right;
                padding: 0 30px 20px 20px;
                text-align: left;
            }
        }

        @media (min-width: 992px) {
            .timeline>li {
                min-height: 150px;
            }

            .timeline>li .timeline-panel {
                padding: 0 20px 20px;
            }

            .timeline>li .timeline-image {
                width: 150px;
                height: 150px;
                margin-left: -75px;
            }

            .timeline>li .timeline-image h4,
            .timeline>li .timeline-image .h4 {
                font-size: 18px;
                line-height: 26px;
                margin-top: 30px;
            }

            .timeline>li.timeline-inverted>.timeline-panel {
                padding: 0 20px 20px;
            }
        }

        @media (min-width: 1200px) {
            .timeline>li {
                min-height: 170px;
            }

            .timeline>li .timeline-panel {
                padding: 0 20px 20px 100px;
            }

            .timeline>li .timeline-image {
                width: 170px;
                height: 170px;
                margin-left: -85px;
            }

            .timeline>li .timeline-image h4,
            .timeline>li .timeline-image .h4 {
                margin-top: 40px;
            }

            .timeline>li.timeline-inverted>.timeline-panel {
                padding: 0 100px 20px 20px;
            }
        }

        .page-section {
            padding: 6rem 0;
        }

        .page-section h2.section-heading,
        .page-section .section-heading.h2 {
            font-size: 2.5rem;
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .page-section h3.section-subheading,
        .page-section .section-subheading.h3 {
            font-size: 1rem;
            font-weight: 400;
            font-style: italic;
            font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin-bottom: 4rem;
        }

        @media (min-width: 768px) {
            section {
                padding: 9rem 0;
            }
        }

        .text-center {
            text-align: center !important;
        }

        .page-section h2.section-heading,
        .page-section .section-heading.h2 {
            font-size: 2.5rem;
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .page-section h3.section-subheading,
        .page-section .section-subheading.h3 {
            font-size: 1rem;
            font-weight: 400;
            font-style: italic;
            font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin-bottom: 4rem;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #6c757d !important;
        }

        p {
            line-height: 1.75;
        }

        /* @media (min-width: 1400px) {

                                                                                                                                                                                                                                        .container-xxl,
                                                                                                                                                                                                                                        .container-xl,
                                                                                                                                                                                                                                        .container-lg,
                                                                                                                                                                                                                                        .container-md,
                                                                                                                                                                                                                                        .container-sm,
                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                            max-width: 1320px;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                    @media (min-width: 1200px) {

                                                                                                                                                                                                                                        .container-xl,
                                                                                                                                                                                                                                        .container-lg,
                                                                                                                                                                                                                                        .container-md,
                                                                                                                                                                                                                                        .container-sm,
                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                            max-width: 1140px;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                    @media (min-width: 992px) {

                                                                                                                                                                                                                                        .container-lg,
                                                                                                                                                                                                                                        .container-md,
                                                                                                                                                                                                                                        .container-sm,
                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                            max-width: 960px;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                    @media (min-width: 768px) {

                                                                                                                                                                                                                                        .container-md,
                                                                                                                                                                                                                                        .container-sm,
                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                            max-width: 720px;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                    @media (min-width: 576px) {

                                                                                                                                                                                                                                        .container-sm,
                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                            max-width: 540px;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    } */

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        user agent stylesheet div {
            display: block;
        }
    </style>

    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">The project was divided into 7 successive stages to make it
                    easier
                    for the student to understand each stage and pass it with all its requirements, which are divided as
                    follows:</h3>
            </div><br><br><br>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>2009-2011</h4> --}}
                            <h4 class="subheading">1st STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">All participants are subject to a comprehensive examination in all fields
                                of foundational studies, such as mathematics, science, language, and others.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>March 2011</h4> --}}
                            <h4 class="subheading">2nd STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> After passing the exam, students will be divided into two parts; A
                                section will move to the third stage directly, and a section will remain in the second
                                stage, those who did not pass the exam or had a low mark in some areas. The students undergo
                                a comprehensive foundation course, in which receive all the basics of their needs, in
                                addition to some things that may help them in the upcoming stages.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4></h4> --}}
                            <h4 class="subheading">3rd STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> It is the stage that only students who have achieved the highest
                                grades
                                reach, and have consolidated all the deficiencies in knowledge they needed before..
                                Here,
                                students receive an introductory overview of 7 fields selected according to market
                                needs,
                                linked in one way or another, and changeable according to development life, which
                                are:
                                medicine, electrical engineering, software engineering, artificial intelligence,
                                robotics,
                                cybersecurity, and data science. <br>

                                In which all students receive lectures at the hands of specialists in the same
                                field,
                                bringing them closer to their scattered picture of each specialization, and students
                                are
                                given specific topics that they must research before the end of the stage..
                                Students’
                                participation is monitored and recorded until they are categorized in the next
                                stages.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>July 2020</h4> --}}
                            <h4 class="subheading">4th STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> is the middle stage; In which students take exams that look like real
                                ones; About everything that was discussed in each of the lectures, or what was read through
                                the given topics. <br>

                                Then, the students are sifted and divided into intensive lectures in the disciplines in
                                which they achieved the highest marks. Then we move on to the next stage</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4></h4> --}}
                            <h4 class="subheading">5rd STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> After students have achieved high marks in one field rather than the
                                other; The specializations have been reduced on their way to 3 specializations. These
                                students, together with specialized experts working in the same field, undergo an intensive
                                course divided between practical and theoretical; It is the most accurate, difficult, most
                                important, and longest stage. All students receive accurate and difficult tests; They are
                                asked about it on both sides; Practical and theoretical! Then they are sifted to the next
                                stage.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>July 2020</h4> --}}
                            <h4 class="subheading">6th STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> Students undergo a comprehensive and detailed course for the
                                specialization in which they scored the highest marks.. The practical aspect is fed more, so
                                that the student can accurately understand everything contained in the specialization.. He
                                can only move to the last stage if he passed the comprehensive test, which includes accurate
                                details. The student is allowed 3 attempts to pass the test, otherwise, he will return to
                                the fourth stage because he made a mistake in choosing the specialty.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4></h4> --}}
                            <h4 class="subheading">THE LAST STAGE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> the students make field visits to the labor market; For start-up
                                companies and others with a long history in the field. They learn about the method of work,
                                And about the most important information that must be available to the person applying for
                                the job. except for the personal and psychological aspects, for which there must be controls
                                to complete the personality of the applicant for the job and be accepted without
                                hesitation!
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br>
                            Of Our
                            <br>
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
        <style>

        </style>
        <br><br><br><br><br>
        <div class='container'>
            <div class='card' style="background-color: #de6e24">
                <div class='content'>
                    <h1> A Short Overview of Our Approach:</h1><br><br>
                    <p style="color: #fff">

                        <b> 1. We maintain direct contact with each student during each stage of the program.
                    </p><br></b>

                    <p style="color: #fff"><b> 2. Students who achieve low scores during any of the program’s initial stages
                            have the option of
                            repeating the
                            relevant exams, as the goal is to help students and enrich their knowledge, and not to create an
                            atmosphere of
                            undue
                            stress or pressure.</p><br></b>

                    <p style="color: #fff"><b> 3. We maintain a direct relationship with each student’s parents and follow
                            up
                            with them on a
                            regular basis so
                            that
                            they remain informed about their child’s progress, with appropriate guidance offered for each
                            stage
                            of the
                            program.</p><br></b>

                    <p style="color: #fff"><b> 4. The duration of each stage ranges from 1 month to 3 months, depending on
                            both
                            student achievement
                            and
                            progress.</p><br></b>

                    <p style="color: #fff"><b> 5. Courses are divided into a combination of online and in-person classes,
                            according to what is
                            agreed upon by
                            students and their teachers.</p><br></b>

                    <p style="color: #fff"><b> 6. An admissions test is administered prior to the start of the program to
                            assess students’ academic
                            levels and
                            other skills.</p><br></b>

                    <p style="color: #fff"><b> 7. Between each stage of the program, students take a number of personal
                            development and psychology
                            courses in
                            order
                            to nourish this part of a student’s development that is overlooked by many. While most companies
                            undoubtedly
                            want to
                            work with smart people, they also seek to recruit those who are friendly, easy-going, and able
                            to
                            get along with
                            their colleagues and supervisors.</p><br></b>
                </div>
            </div>
        </div>
    </section>



    <!-- end road map -->
@endsection
