<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link href="css/Admin_index/index2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- nav bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #8B0000;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo Web</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!-- <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>

                </ul> -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('auth/google')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- main menu -->
    <div class="main">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 ">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./moufirst"><img src="pic/krongkarn.jpg" width="100" height="100"></a></td>
                                <td width="91%" valign="top">
                                    <h3>
                                        <font color="#000000"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบโครงการ&บริการ</strong></font>
                                    </h3>
                                    <!-- <p>
                                        <font color="#000000">ตรวจสอบโครงการ</font>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>
                <div class="col-md-4">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./kurupan"><img src="pic/karuphan.jpg" width="100" height="100"></a><a href="student/news/good_std48.pdf"></a><a href="disp_cutacc1.asp"></a><a href="disp_ponpan.asp"></a></td>
                                <td width="91%" valign="top">
                                    <h3><strong>
                                            <font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบครุภัณฑ์</font>
                                        </strong></h3>
                                    <!-- <p>
                                        <font color="#000000"></font><br>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./varasarn"><img src="pic/varasan.jpg" width="100" height="100"></a></td>
                                <td width="91%" valign="top">
                                    <h3><strong>
                                            <font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบวารสาร</font>
                                        </strong></h3>
                                    <!-- <p>
                                        <font color="#000000">บันทึกตีพิมพ์ทางวิชาการ</font>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </div>



<!--
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer> -->

</body>

</html>
