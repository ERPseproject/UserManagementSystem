@extends('layouts.app')
<style>
    .main
 {
   /* background-color: #8B0000; */
 padding-top: 5%;
 padding-bottom: 5%;
 margin-left: 15%;
 }
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
    </style>
@section('content')
        <div class="main">
            <div class="container-fluid text-center">
                <div class="row content">

                    <!-- </div>
                    <div class="col-sm-8 text-left">
                        <br>
                        <h1>Admin</h1> -->
                        <div class="w3-container">
                            <table class="w3-table w3-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Project & Service View</th>
                                    <th>Project & Service Edit</th>
                                    <th>Machine View Only</th>
                                    <th>Machine Edit</th>
                                    <th>Research View Only</th>
                                    <th>Research Edit</th>
                                </tr>
                                <tr>
                                    <td>Nuttapol K</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>

                                </tr>
                                <tr>
                                    <td>Lightning</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>

                                </tr>
                                <tr>
                                    <td>Anan</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>

                                </tr>
                                <tr>
                                    <td>Ruj Dumrong</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>

                                </tr>
                                <tr>
                                    <td>Korawit Eiansuk</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>

                                </tr>
                                <tr>
                                    <td>Ruttini Lmao</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                </tr>

                                <tr>
                                    <td>Ruttini Lmao</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                </tr>

                                <tr>
                                    <td>Ruttini Lmao</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                </tr>

                                <tr>
                                    <td>Ruttini Lmao</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name2" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                    <td><input type="checkbox" name="name1" />&nbsp;</td>
                                </tr>

                            </table>
                            <div class="Nga" align="right">
                          <button type="button" class="btn btn-default">Confirm</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
                        <!-- <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">ระบบครุภัณฑ์</a></li>
    <li><a href="#">ระบบวารสาร</a></li>
    <li><a href="#">ระบบบริการ&บริหาร</a></li>
  </ul>
</div> -->


  
@endsection
@section('footer')

@endsection
