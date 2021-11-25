<x-app-layout>

    <div id="wrapper" class="course-watch">

        <!-- Main Contents -->
        <div class="main_content h-screen flex justify-center items-center">

            <ul class="uk-switcher w-full " id="video_tabs">

                <li>
                    <!-- to autoplay video uk-video="automute: true" -->
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ" frameborder="0"
                                uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                    </div>

                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                    </div>
                </li>

            </ul>


        </div>

        <!-- This is the modal -->
        <div id="modal-example" style="margin-left: 22.5rem" uk-modal>
            <div class="uk-modal-dialog uk-modal-body rounded-md shadow-xl">

                <button class="absolute block top-0 right-0 m-6 rounded-full bg-gray-300 p-2 uk-modal-close" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="text-sm mb-2">  Section 2  </div>
                <h2 class="mb-5 font-semibold text-2xl">  Your First webpage  </h2>
                <p class="text-base">Do You want to skip the rest of this chapter and chumb to next chapter.</p>

                <div class="text-right  pt-3 mt-3">
                    <a href="#" class="py-2 inline-block px-8 rounded-md hover:bg-gray-200 uk-modal-close"> Stay </a>
                    <a href="#" class="py-2 inline-block px-8 rounded-md bg-blue-600 text-white"> Continue </a>
                </div>
            </div>
        </div>

        <!-- sidebar -->
        <div class="sidebar bg-white">

            <!-- slide_menu for mobile -->
            <span class="btn-close-mobi right-3 left-auto" uk-toggle="target: #wrapper ; cls: is-active"></span>

            <!-- back to home link -->
            <div class="flex justify-between lg:-ml-1 mt-1 mr-2">
                <a href="course-intro.html" class="flex items-center text-blue-500">
                    <ion-icon name="chevron-back-outline" class="md:text-lg text-2xl"></ion-icon>
                    <span class="text-sm md:inline hidden"> back</span>
                </a>
            </div>

            <!-- title -->
            <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2"> Learn Responsive Web Design Essentials </h1>

            <nav class="cd-secondary-nav nav-small extanded w-auto lg:block hidden">
                <ul uk-switcher="connect: #course-tabs; animation: uk-animation-fade">
                    <li><a href="#" class="lg:px-2">   Overview </a></li>
                    <li><a href="#" class="lg:px-2">  Notes  </a></li>
                    <li><a href="#" class="lg:px-2"> Faq  </a></li>
                </ul>
            </nav>

            <hr class="-mx-6 lg:block hidden">

            <!-- sidebar list -->
            <div class="sidebar_inner" data-simplebar>

                <div class="uk-switcher" id="course-tabs">

                    <div id="curriculum">
                        <div uk-accordion="multiple: true" class="divide-y space-y-3">

                            <div class="pt-2 uk-open">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">  <div class="mb-1 text-sm font-medium"> Section 1 </div> Html Introduction </a>
                                <div class="uk-accordion-content mt-3">

                                    <ul class="course-curriculum-list" uk-switcher="connect: #video_tabs; animation: uk-animation-fade">
                                        <li>
                                            <a href="#">
                                                Introduction <span class="hidden"> 4  min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                What is HTML <span class="hidden"> 5  min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                What is a Web page? <span class="hidden"> 8 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">

                                                Your First Web Page
                                                <span class="hidden"> 4 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">

                                                Brain Streak <span class="hidden"> 5 min </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="pt-2 uk-open">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#"> <div class="mb-1 text-sm font-medium"> Section 2 </div> Your First webpage  </a>
                                <div class="uk-accordion-content mt-3">

                                    <ul class="course-curriculum-list">
                                        <li>
                                            <a href="#modal-example" uk-toggle>
                                                Headings
                                                <span> 4 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#modal-example" uk-toggle>
                                                Paragraphs
                                                <span> 5 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#modal-example" uk-toggle>
                                                Emphasis and Strong Tag
                                                <span> 8 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#modal-example" uk-toggle>
                                                Brain Streak
                                                <span> 4 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#modal-example" uk-toggle>
                                                Live Preview Feature
                                                <span> 5 min </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="pt-2">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#"> <div class="mb-1 text-sm font-medium"> Section 3 </div> Build Complete Webste  </a>
                                <div class="uk-accordion-content mt-3">

                                    <ul class="course-curriculum-list">
                                        <li>
                                            <a href="#">
                                                The paragraph tag
                                                <span class="hidden"> 4 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                The break tag
                                                <span class="hidden"> 5 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Headings in HTML
                                                <span class="hidden"> 8 min </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Bold, Italics Underline
                                                <span class="hidden"> 4 min </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  Overview -->
                    <div class="space-y-6 px-2 py-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-1"> Description </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut
                                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna
                                aliquam erat
                                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis
                                nisl ut aliquip ex ea commodo consequat
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1"> What You’ll Learn </h3>
                            <ul>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Setting up the environment</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Advanced HTML Practices</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Build a portfolio website</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Responsive Designs</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Understand HTML Programming</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Code HTML</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Start building beautiful websites</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1"> Requirements</h3>
                            <ul class="list-disc ml-5 space-y-1 mt-3">
                                <li>Any computer will work: Windows, macOS or Linux</li>
                                <li>Basic programming HTML and CSS.</li>
                                <li>Basic/Minimal understanding of JavaScript</li>
                            </ul>
                        </div>
                    </div>

                    <!--  Announcements -->
                    <div  class="px-2 py-6">
                        <h3 class="text-xl font-semibold mb-3"> Announcement </h3>

                        <div class="flex items-center gap-x-4 mb-5">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-10 h-10">
                            <div>
                                <h4 class="-mb-1 text-base"> Stella Johnson</h4>
                                <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span> </span>
                            </div>
                        </div>

                        <h4 class="leading-8 text-xl"> Nam liber tempor cum soluta nobis eleifend </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolo  sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci ta ifend  nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat.</p>

                    </div>

                </div>


            </div>

            <!-- overly for mobile -->
            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

        </div>

    </div>
</x-app-layout>
