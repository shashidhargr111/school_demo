<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">School Demo </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="home.php">Home site</a></li>
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Graphdropdown"><i class="fa fa-fw fa-arrows-v"></i> Graph<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Graphdropdown" class="collapse">
                            <li>
                                <a href="#"> Graph</a>
                            </li>
                            <li>
                                <a href="#"> Graph1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dropdown"><i class="fa fa-fw fa-arrows-v"></i> Student<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dropdown" class="collapse">
                            <li>
                                <a href="student.php"> View All Student </a>
                            </li>
                            <li>
                                <a href="student.php?source=add_student"> Add Student</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#class_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Class<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="class_dropdown" class="collapse">
                            <li>
                                <a href="class.php"> View All Class</a>
                            </li>
                            <li>
                                <a href="class.php?source=add_class"> Add Class</a>
                            </li>
                            <!-- <li>
                                <a href="class.php?source=add_section"> Add Section</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#subject_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Subject<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="subject_dropdown" class="collapse">
                            <li>
                                <a href="subject.php"> View All Subject </a>
                            </li>
                            <li>
                                <a href="subject.php?source=add_subject"> Add Subject</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#marks_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Marks<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="marks_dropdown" class="collapse">
                            <li>
                                <a href="grade.php"> Add Grade</a>
                            </li>
                            <li>
                                <a href="marks.php"> Add Marks</a>
                            </li>  
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Teachers"><i class="fa fa-fw fa-arrows-v"></i> Teachers<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Teachers" class="collapse">
                            <li>
                                <a href="teacher.php"> View All Teachers </a>
                            </li>
                            <li>
                                <a href="teacher.php?source=add_teacher"> Add Teachers</a>
                            </li>
                            <!-- <li>
                                <a href="teacher.php?source=add_teacher"> Teachers</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        
                        
                         <a href="exam.php"><i class="fa fa-fw fa-arrows-v"></i> View All Exam </a>
                          
                    </li>
                    <li>
                        
                         <a href="test.php"><i class="fa fa-fw fa-arrows-v"></i> View All Test </a>
                    </li>
                    

                   <!--  <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->