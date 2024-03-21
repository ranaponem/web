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
                                    text-sm font-medium text-gray-900 dark:text-gray-50
                                    border-b-2 border-indigo-400 dark:border-indigo-500 
                                    focus:outline-none focus:border-indigo-700 dark:focus:border-indigo-300" href="./index.php">
                                Introduction
                            </a>
                        </div>

                        <!-- Menu Item: Courses -->
                        <div class="flex me-0 sm:me-2">
                            <a class="grow inline-flex items-center h-16 px-3 pt-1
                                    text-sm font-medium text-gray-500 dark:text-gray-400 
                                    border-b-2 border-transparent
                                    hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-300 
                                    focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300
                                    hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900
                                    " href="./courses.php">
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
                    Introduction
                </h2>
            </div>
        </header>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="my-4 p-6 bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-gray-50">
                    <h3 class="pb-3 font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        Department of Computer Engineering
                    </h3>
                    <p class="py-3 font-medium text-gray-700 dark:text-gray-300">
                        The Department of Computer Engineering was formally created in 1997 with the approval of
                        the Statutes of the
                        School of Technology and Management (Escola Superior de Tecnologia e Gestão - ESTG),
                        but its origins lie in the area of Computer Science that has existed at ESTG
                        since it began operating in the 1989/90 academic year.
                    </p>
                    <p class="py-3 font-medium text-gray-700 dark:text-gray-300">
                        The Department of Computer Engineering is a functional unit of the ESTG to which
                        teachers,
                        laboratories and support services related to the teaching of
                        computer engineering are assigned.
                        The Department of Computer Engineering is responsible for a number of undergraduate,
                        master's and postgraduate
                        courses, as well as the recently created Higher Professional Technical Courses. It is
                        also responsible for teaching
                        various curricular units in the area of Computer Science that are part of the curriculum
                        of other courses taught at
                        ESTG. The activities carried out by the the Department of Computer Engineering follow
                        the strategic guidelines
                        defined by ESTG's bodies (Scientific Council, Pedagogical Council and Management).
                    </p>
                    <p class="py-3 font-medium text-gray-700 dark:text-gray-300">
                        The Master's course in Computer Engineering - Mobile Computing has been recognized by
                        ENAEE (European Network for
                        Accreditation of Engineering Education) through the award of the EUR-ACE® Quality Mark.
                        The distinction places the
                        quality of teaching in this course at the Polytechnic of Leiria at the level of the best
                        European universities and
                        polytechnics, and confirms the international dimension of the School's diplomas,
                        encouraging greater acceptance of
                        engineers graduating from the Polytechnic of Leiria throughout Europe.
                    </p>
                </div>
                <div class="my-4 p-6 bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-gray-50">
                    <h3 class="pb-3 font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        Organization
                    </h3>
                    <p class="py-3 font-medium text-gray-700 dark:text-gray-300">
                        The organization of the Department of Computer Engineering is defined by the ESTG
                        statutes as follows:
                    <ul class="list-disc ms-12">
                        <li class="py-1 font-medium text-gray-700 dark:text-gray-300">Coordinator;</li>
                        <li class="py-1 font-medium text-gray-700 dark:text-gray-300">Department Council;</li>
                        <li class="py-1 font-medium text-gray-700 dark:text-gray-300">Plenary.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/menu.js"></script>
</body>

</html>