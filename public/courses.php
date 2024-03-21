<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Department of Computer Engineering</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link href="./css/output.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800">

        <!-- Navigation Menu -->
        <nav class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
            <!-- Navigation Menu Full Container -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- Logo + Menu Items + Hamburger -->
                <div class="relative flex flex-col sm:flex-row px-6 sm:px-0 grow justify-between">
                    <!-- Logo -->
                    <div class="shrink-0 -ms-4">
                        <a href="./index.php">
                            <div class="h-16 w-40 bg-cover bg-logo-light dark:bg-logo-dark"></div>
                        </a>
                    </div>

                    <!-- Menu Items -->
                    <div id="menu" class="grow flex flex-col sm:flex-row items-stretch
                                            invisible h-0 sm:visible sm:h-auto">
                        <!-- Menu Item: Introduction -->
                        <div class="flex me-0 sm:me-2">
                            <a class="grow inline-flex items-center h-16 px-3 pt-1
                                    text-sm font-medium text-gray-500 dark:text-gray-400 
                                    border-b-2 border-transparent
                                    hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-300 
                                    focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300
                                    hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900" href="./index.php">
                                Introduction
                            </a>
                        </div>

                        <!-- Menu Item: Courses -->
                        <div class="flex me-0 sm:me-2">
                            <a class="grow inline-flex items-center h-16 px-3 pt-1
                                    text-sm font-medium text-gray-900 dark:text-gray-50
                                    border-b-2 border-indigo-400 dark:border-indigo-500 
                                    focus:outline-none focus:border-indigo-700 dark:focus:border-indigo-300" href="./courses.php">
                                Courses
                            </a>
                        </div>

                        <!-- Menu Item: Curricula -->
                        <div class="relative sm:static group flex flex-col me-0 sm:me-2">
                            <button id="button_curricula" class="grow inline-flex items-center h-16 px-3 pt-1
                                text-sm font-medium text-gray-500 dark:text-gray-400
                                border-b-2 border-transparent
                                hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-300 
                                focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300
                                hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900">
                                <div>Curricula</div>
                                <div>
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            <div id="submenu_curricula" class="z-40 w-full items-center 
                                        grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 
                                        gap-3 bg-white dark:bg-gray-900
                                        sm:absolute sm:left-0 sm:top-14 sm:origin-top-left
                                        sm:rounded-md sm:ring-1 sm:ring-black sm:ring-opacity-5 sm:shadow-lg
                                        h-0 sm:h-auto                                        
                                        p-0 ps-6 sm:p-6 
                                        invisible sm:invisible sm:group-hover:visible">
                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    Computer Engineering
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    Digital Games and Multimedia
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    Master's in Computer Engineering - Mobile Computing
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    Master's in Cybersecurity and Computer Forensics
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    Master's in Data Science
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    TeSP - Web and Multimedia Development
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    TeSP - Information System Programming
                                </a>

                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    TeSP - Computer Networks and Systems
                                </a>
                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    TeSP - Cybersecurity and Computer Networks
                                </a>
                                <a class="submenu-curricula-dropdown" href="./curricula.php">
                                    TeSP - IT Technologies
                                </a>
                            </div>
                        </div>

                        <!-- Menu Item: User -->
                        <div class="relative group flex flex-col ms-0 sm:ms-auto me-0 sm:me-2">
                            <button id="button_user" class="grow inline-flex items-center h-16 
                                    px-3 sm:px-1 pt-1
                                    text-sm font-medium text-gray-500 dark:text-gray-400
                                    border-b-2 border-transparent hover:text-gray-700 dark:hover:text-gray-300 
                                    focus:outline-none focus:text-gray-700 dark:focus:text-gray-300
                                    hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900">
                                <div class="pe-1">
                                    <img src="./img/photos/photo_example.jpeg" class="w-12 h-12 rounded-full">
                                </div>
                                <div class="ps-1 max-w-lg sm:max-w-11 md:max-w-44 lg:max-w-sm truncate">
                                    João Miguel da Silva Pereira Antunes
                                </div>
                                <div>
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <div id="submenu_user" class="sm:absolute sm:right-2 sm:top-14 sm:origin-bottom-right
                                        w-full sm:w-48 bg-white dark:bg-gray-900
                                        grid grid-cols-1
                                        sm:rounded-md sm:ring-1 sm:ring-black sm:ring-opacity-5 sm:shadow-lg
                                        h-0 sm:h-auto                                        
                                        invisible sm:invisible sm:group-hover:visible
                                        ps-6 sm:ps-0">
                                <a class="w-full px-4 py-4 text-start text-sm leading-5 inline-flex h-auto 
                                            text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800  
                                            focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:bg-gray-100 dark:focus:bg-gray-800" href="./profile.php">
                                    Profile
                                </a>
                                <a class="w-full px-4 py-4 text-start text-sm leading-5 inline-flex h-auto 
                                            text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 
                                            focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:bg-gray-100 dark:focus:bg-gray-800" href="./change_password.php">
                                    Change Password
                                </a>
                                <hr>
                                <a class="w-full px-4 py-4 text-start text-sm leading-5 inline-flex h-auto 
                                        text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 
                                        focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:bg-gray-100 dark:focus:bg-gray-100" href="#">
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="absolute right-0 top-0 flex sm:hidden pt-3 pe-3 text-black dark:text-gray-50">
                        <button id="hamburger_btn">
                            <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path id="hamburger_btn_open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                <path class="invisible" id="hamburger_btn_close" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="bg-white dark:bg-gray-900 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h4 class="mb-1 text-base text-gray-500 dark:text-gray-400 leading-tight">
                    Department of Computer Engineering
                </h4>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Courses
                </h2>
            </div>
        </header>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900 
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/EI.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    Computer Engineering
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>6 semesters</div>
                                        <div>180 ECTS</div>
                                        <div>150 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.ei.estg@ipleiria.pt">coord.ei.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The degree in Computer Engineering aims to train professionals with skills in the areas of Information
                                    Systems and
                                    Information and Communication Technologies. The degree prepares students for software development,
                                    network and service
                                    planning and configuration, security, mobile computing, administration and intelligent data analysis,
                                    among other
                                    skills. During the course, students also have the opportunity to implement real case projects with
                                    internal and external
                                    entities. Graduates in Computer Engineering are highly employable and sought after by top companies.
                                </p>
                            </div>
                        </figure>
                    </div>

                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/JDM.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    Digital Games and Multimedia
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>6 semesters</div>
                                        <div>180 ECTS</div>
                                        <div>50 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.jdm.estg@ipleiria.pt">coord.jdm.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    To train professionals in the fields of video games and multimedia production. Graduates will have the
                                    necessary skills
                                    to work in the various stages of building a digital game (design, programming, artistic creation,
                                    quality assurance), as
                                    well as in other types of multimedia production (interactive software, web applications, mobile
                                    applications, etc.).
                                </p>
                            </div>
                        </figure>
                    </div>

                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/MEI-CM.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    Master's in Computer Engineering - Mobile Computing
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>40 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.mei-cm.estg@ipleiria.pt">coord.mei-cm.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Master's Degree in Computer Engineering - Mobile Computing aims to develop specialized training in
                                    the area of
                                    mobile computing and associated technologies, allowing the pursuit of studies by holders of degrees in
                                    Computer
                                    Engineering or related courses and the possibility of specialization for professionals in the job
                                    market. The course is
                                    based on project-based teaching in order to provide graduates with the ability to work in teams, plan
                                    and organize work,
                                    research and acquire the necessary knowledge, as well as develop autonomy, initiative, critical analysis
                                    and evaluation
                                    of solutions.
                                </p>
                            </div>
                        </figure>
                    </div>

                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/MCIF.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    Master's in Cybersecurity and Computer Forensics
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>20 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.mcif.estg@ipleiria.pt">coord.mcif.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Master's Degree in Cybersecurity and Computer Forensics aims to develop specialized training in the
                                    areas of
                                    cybersecurity and computer forensics, allowing holders of degrees in Computer Engineering or related
                                    courses to continue
                                    their studies and training highly qualified technicians in the areas of cybersecurity and computer
                                    forensics. This
                                    master's degree also aims to develop links with the region's business community through internships,
                                    projects and
                                    dissertations that can enable the application of best practices in the area of cybersecurity. The main
                                    objectives of
                                    this master's degree are also to develop applied research in the areas of cybersecurity and computer
                                    forensics, as well
                                    as to promote the transfer of advanced knowledge in the areas of cybersecurity and computer forensics to
                                    organizations.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/MCD.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    Master's in Data Science
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>50 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.mcd.estg@ipleiria.pt">coord.mcd.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The master's degree course in Data Science is a response to the growing need, felt by the region's
                                    business community,
                                    for a highly qualified workforce in Data Science, with skills in the latest technologies and analytical
                                    techniques for
                                    acquiring, processing and analyzing large volumes of data. The aim is for the course to be
                                    multidisciplinary and to
                                    foster a set of synergies between information systems, computer science and statistics, covering
                                    applications in various
                                    areas of knowledge, such as Management, Engineering, Health, Business Sciences, among others.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900  
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/TESP-DWM.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    TESP - Web and Multimedia Development
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>52 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.dwm.tesp.estg@ipleiria.pt">coord.dwm.tesp.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Higher Professional Technical course in Web and Multimedia Development aims to train professionals
                                    who are able to
                                    design and implement web applications and services with multimedia content, autonomously or in teams,
                                    using new
                                    technologies and tools.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900 
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/TESP-PSI.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    TESP - Information System Programming
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>71 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.psi.tesp.estg@ipleiria.pt">coord.psi.tesp.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Higher Professional Technical course in Information Systems Programming aims to train professionals
                                    who are able to
                                    program and integrate heterogeneous systems, applications and services, using modern software
                                    development technologies,
                                    tools and methodologies.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900 
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/TESP-RSI.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    TESP - Computer Networks and Systems
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>10 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.rsi.tesp.estg@ipleiria.pt">coord.rsi.tesp.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Higher Professional Technical course in Computer Networks and Systems course aims to train
                                    professionals who are
                                    able to carry out tasks involving the planning, installation, configuration, management and maintenance
                                    of computer
                                    networks and systems, guaranteeing the optimization of their operation and implementing appropriate
                                    security mechanisms.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900 
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/TESP-CRI.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    TESP - Cybersecurity and Computer Networks
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>72 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.cri.tesp.estg@ipleiria.pt">coord.cri.tesp.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Higher Professional Technical course in Cybersecurity and Computer Networks course aims to train
                                    professionals with
                                    specific skills to carry out tasks of planning, installing, configuring, managing and maintaining
                                    computer networks and
                                    systems, ensuring that they function optimally and implementing appropriate security mechanisms,
                                    applying various
                                    methodologies to identify and mitigate cybersecurity vulnerabilities and threats.
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                        rounded-none sm:rounded-xl
                                        bg-white dark:bg-gray-900 
                                        my-4 p-8 md:p-0">
                            <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php">
                                <img class="h-full aspect-auto mx-auto rounded-full md:rounded-l-xl md:rounded-r-none" src="img/cursos/TESP-TI.png">
                            </a>
                            <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" href="./curricula.php">
                                    TESP - IT Technologies
                                </a>
                                <figcaption class="font-medium">
                                    <div class="flex justify-center md:justify-start font-base text-base space-x-6 text-gray-700 dark:text-gray-300">
                                        <div>4 semesters</div>
                                        <div>120 ECTS</div>
                                        <div>10 places</div>
                                    </div>
                                    <address class="font-light text-gray-700 dark:text-gray-300">
                                        <a href="mailto:coord.ti.tesp.estg@ipleiria.pt">coord.ti.tesp.estg@ipleiria.pt</a>.
                                    </address>
                                </figcaption>
                                <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                    The Higher Professional Technical course in Computer Technologies course aims to train professionals
                                    who, autonomously
                                    or as part of a team, have the ability to design, model, implement and maintain information systems to
                                    support
                                    organizations, based on emerging computer technologies and those existing on the market, in order to
                                    optimize
                                    organizations' business processes. The professional with this training should have a high level of
                                    specialization in
                                    digital technologies and applications, namely SAP, OutSystems, Navision, Java, RPA (Robotic Process
                                    Automation), among
                                    others, enabling the creation of greater added value in organizations and the economy. The academic
                                    curriculum of the
                                    course will be very practical, allowing students to work in a real environment, which means carrying out
                                    activities and
                                    joining teams on small projects. Their time will be divided between teaching activities and practical
                                    work in a real
                                    environment.
                                </p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/menu.js"></script>
</body>

</html>