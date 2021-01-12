<!--Jin Qikai 19034275-->
<script>
    function directToHome() {
        location.replace("mainPage.php");
    }
</script>
<style>
    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }
    #navBarlogo {
        width: 250px;
        height:80px;
        cursor: pointer;
    }
    li {
        margin:20px;
          text-align: center;
    }
    
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="image/ych-logo.png" alt="natural" class="navbar-brand" id="navBarlogo" onclick="directToHome()" />
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" href="#">About YCH</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.yishuncommunityhospital.com.sg/about-ych/senior-management-team">SENIOR MANAGEMENT TEAM</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/about-ych/our-vision-and-mission">OUR VISION AND MISSION</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/about-ych/awards-recognition">AWARDS AND RECOGNITION</a></li>
                    </ul>
                <li class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" href="#">Patients and Visitors</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/inpatient-stay">INPATIENT STAY</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/hospital-charges-schemes-subsidies">HOSPITAL CHARGES / SCHEMES & SUBSIDIES</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/how-to-pay-your-bills">HOW TO PAY YOUR BILLS</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/our-doctors">OUR DOCTORS</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/visitor-registration">VISITOR REGISTRATION</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" href="#">Services and Facilities</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.yishuncommunityhospital.com.sg/services-and-facilities/inpatient-services">INPATIENT SERVICES</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/services-and-facilities/outpatient-services">OUTPATIENT SERVICES</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-toggle="dropdown" href="#">Join Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.yishuncommunityhospital.com.sg/join-us/careers">CAREERS</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/join-us/scholarships-sponsorship">SCHOLARSHIPS & SPONSORSHIPS</a></li>
                        <hr>
                        <li><a href="https://www.yishuncommunityhospital.com.sg/join-us/volunteers">VOLUNTEERS</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php if(isset($_SESSION['user'])) {?>
                  <li class="btn btn-dark"><a href="addExercise.php"><span class="glyphicon glyphicon-user"></span> Add Exercise</a></li>
                  <li class="btn btn-dark"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                <?php } else { ?>
                  <li class="btn btn-dark"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li class="btn btn-dark"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search">
                <button class="btn btn-default" type="submit">Search</button>
            </form>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    </div>
</nav>
<!--Jin Qikai 19034275-->