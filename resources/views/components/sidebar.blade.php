<!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li>
                            <img src="{{ auth()->user()->profile }}" alt="">
                        </li>
                        <li>
                            <h5>{{ auth()->user()->name }}<span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="admin.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
						<li><a href="/admin-setting"><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> All Courses</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/courses">All Course</a>
                                    </li>
                                    <li><a href="/admin/courses/create">Add New Course</a>
                                    </li>
                                    <li><a href="/admin-trash-courses">Trash Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/users">All Users</a>
                                    </li>
                                    <li><a href="/admin-user-add">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/teams">Team Members</a>
                                    </li>
                                    <li><a href="/admin/teams/create">Add New Member</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list" aria-hidden="true"></i>Course Category</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/categories">All Category</a>
                                    </li>
                                    <li><a href="/admin/categories/create">New Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-building" aria-hidden="true"></i> Departments</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/departments">All Department</a>
                                    </li>
                                    <li><a href="/admin/departments/create">New Department</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-edit" aria-hidden="true"></i> Blog</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/blogs">All Blog</a>
                                    </li>
                                    <li><a href="/admin/blogs/create">New Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bookmark-o" aria-hidden="true"></i>All Pages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-page-all">Pages</a>
                                    </li>
                                    <li><a href="/admin-page-add">Create New Page</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-main-menu">Main menu</a></li>
									<li><a href="/admin-about-menu">About menu</a></li>
									<li><a href="/admin-admission-menu">Admission menu</a></li>
									<li><a href="/admin-all-menu">All page menu</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image" aria-hidden="true"></i> Slides</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/slides">All Slide</a>
                                    </li>
                                    <li><a href="/admin/slides/create">New Slide</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
						<li><a href="/admin-quick-link"><i class="fa fa-external-link-square" aria-hidden="true"></i> Slider quick link</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin/events">All Events</a>
                                    </li>
                                    <li><a href="/admin/events/create">Create New Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Seminar</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-seminar-all">All Seminar</a>
                                    </li>
                                    <li><a href="/admin-seminar-add">Create New Seminar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Vacants</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-job-all">All Jobs</a>
                                    </li>
                                    <li><a href="/admin-job-add">Create New Job</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i> Exam time table</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-exam-all">All Exams</a></li>
                                    <li><a href="/admin-exam-add">Add New Exam</a></li>
                                    <li><a href="/admin-exam-group-all">All Groups</a></li>
                                    <li><a href="/admin-exam-group-add">Create New Groups</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-user-all">All Students</a>
                                    </li>
                                    <li><a href="/admin-user-add">Add New Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Enquiry</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-all-enquiry">All Enquiry</a></li>
									<li><a href="/admin-course-enquiry">Course Enquiry</a></li>
									<li><a href="/admin-admission-enquiry">Admission Enquiry</a></li>
									<li><a href="/admin-seminar-enquiry">Seminar Enquiry</a></li>
									<li><a href="/admin-event-enquiry">Event Enquiry</a></li>
									<li><a href="/admin-common-enquiry">Common Enquiry</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="/admin-export-data">Export all datas</a>
                                    </li>
                                    <li><a href="/admin-import-data">Import all datas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
