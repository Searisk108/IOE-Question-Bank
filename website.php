<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOE Question Bank</title>         
    <style>
    body {
    background-color: lightblue;
    text-align:center;
    }
    header{
    font-size: 20px;
    font-weight: bold;
    }
    table {
    border-collapse: collapse;
    }
    table, td{
    border: 1px solid black;
    text-align: center;
    padding: 8px;
    }
    th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
    background-color: #4CAF50;
    color: white;
    }
    .flex-container {
    display: flex;
    }
    .flex-container > div {
    margin: 10px;
    padding: 10px;
    font-size: 15px;
    }
    footer {
    display: flex;
    flex-wrap: nowrap;
    text-align:center;
    }

    footer > div {
    background-color: #f1f1f1;
    width: 100px;
    margin: 10px;
    text-align: center;
    line-height: 20px;
    font-size: 12px;
    }
    </style>
</head>
<body>
   <div>
    <img src="pcampus_banner.jpg">
   </div> 
   <header>
    <p> IOE Old Question Database For Electronics and Communication Engineering</p>
   </header> 
    <form method="POST">
        <div class="flex-container">
            <div>
                <label for="examyear">Choose exam year:</label>
                <select id="examyear" name="examyear">
                    <option>---</option>
                    <option value="All">All</option>
                    <option value="2075">2075</option>
                    <option value="2074">2074</option>
                    <option value="2073">2073</option>
                    <option value="2072">2072</option>
                    <option value="2071">2071</option>
                    <option value="2070">2070</option>
                    <option value="2069">2069</option>
                </select>
            </div>
            <div>
                <label for="examtype">Choose exam type:</label>
                <select id="examtype" name="examtype">
                    <option>---</option>
                    <option value="Regular">Regular</option>
                    <option value="Back">Back</option>
                </select>
            </div>
            <div>
                <label for="course">Choose a course:</label>
                <select id="course" name="course">
                    <option>---</option>
                    <option value='EX 601'>Advanced Electronics | EX 601</option>
                    <option value='CT 725 01'>Advanced Java Programming | CT 725 01</option>
                    <option value='EX 725 04'>Aeronautical Telecommunication | EX 725 04</option>
                    <option value='SH 551'>Applied Mathematics | SH 551</option>
                    <option value='CE 401'>Applied Mechanics | CE 401</option>
                    <option value='CT 653'>Artificial Intelligence | CT 653</option>
                    <option value='CT 785 06'>Artificial Intelligence | CT 785 06</option>
                    <option value='EE 401'>Basic Electrical Engineering | EE 401</option>
                    <option value='EX 451'>Basic Electronics Engineering | EX 451</option>
                    <option value='CT 765 07'>Big Data Technologies | CT 765 07</option>
                    <option value='SH 601'>Communication English | SH 601</option>
                    <option value='EX 652'>Communication System I | EX 652</option>
                    <option value='EX 702'>Communication System II | EX 702</option>
                    <option value='EX 603'>Computer Graphics | EX 603</option>
                    <option value='CT 657'>Computer Network | CT 657</option>
                    <option value='CT 702'>Computer Network |  CT 702</option>
                    <option value='CT 603'>Computer Organization and Architecture | CT 603</option>
                    <option value='CT 401'>Computer Programming | CT 401</option>
                    <option value='EE 602'>Control System | EE 602</option>
                    <option value='CT 602'>Data Communication | CT 602</option>
                    <option value='CT 725 02'>Data Mining | CT 725 02</option>
                    <option value='CT 552'>Data Structure and Algorithm | CT 552</option>
                    <option value='EX 765 06'>Database Management System | EX 765 06</option>
                    <option value='CT 652'>Database Management System | CT 652</option>
                    <option value='EX 502'>Digital Logic | EX 502</option>
                    <option value='CT 704'>Digital Signal Analysis and Processing | CT 704</option>
                    <option value='EX 753'>Digital Signal Processing | EX 753</option>
                    <option value='CT 551'>Discrete Structure | CT 551</option>
                    <option value='CT 703'>Distributed System | CT 703</option>
                    <option value='EE 501'>Electric Circuit Theory | EE 501</option>
                    <option value='EE 502'>Electrical Engineering Material | EE 502</option>
                    <option value='EE 554'>Electrical Machine | EE 554</option>
                    <option value='EX 503'>Electromagnetics | EX 503</option>
                    <option value='EX 501'>Electronic Devices and Circuits | EX 501</option>
                    <option value='CT 655'>Embedded System | CT 655</option>
                    <option value='EX 701'>Energy, Environment and Society | EX 701</option>
                    <option value='SH 453'>Engineering Chemistry | SH 453</option>
                    <option value='ME 401'>Engineering Drawing I | ME 401</option>
                    <option value='ME 451'>Engineering Drawing II | ME 451</option>
                    <option value='CE 655'>Engineering Economics | CE 655</option>
                    <option value='SH 501'>Engineering Mathemathics III | SH 501</option>
                    <option value='SH 401'>Engineering Mathematics I | SH 401</option>
                    <option value='SH 451'>Engineering Mathematics II | SH 451</option>
                    <option value='SH 402'>Engineering Physics | SH 402</option>
                    <option value='CE 752'>Engineering Professional Practice | CE 752</option>
                    <option value='CT 785 04'>Enterprise Application Design and Developement | CT 785 04</option>
                    <option value='EX 704'>Filter Design | EX 704</option>
                    <option value='ME 452'>Fundamental of Thermodynamics and Heat transfer | ME 452</option>
                    <option value='CT 751'>Information Systems | CT 751</option>
                    <option value='EE 552'>Instrumentation I | EE 552</option>
                    <option value='EX 602'>Instrumentation II | EX 602</option>
                    <option value='CT 754'>Internet and Intranet | CT 754</option>
                    <option value='EX 551'>Microprocessor | EX 551</option>
                    <option value='SH 553'>Numerical Method | SH 553</option>
                    <option value='CT 651'>Object Oriented Analysis and Design | CT 651</option>
                    <option value='CT 501'>Object Oriented Programming | CT 501</option>
                    <option value='CT 656'>Operating System | CT 656</option>
                    <option value='EX 765 01'>Optical Fiber Communication | EX 765 01</option>
                    <option value='ME 708'>Organization and Management | ME 708</option>
                    <option value='EE 553'>Power System | EE 553</option>
                    <option value='SH 602'>Probability and Statistics | SH 602</option>
                    <option value='CT 701'>Project Management | CT 701</option>
                    <option value='EX 653'>Propagation and Antenna | EX 653</option>
                    <option value='EX 725 01'>Radar Technology | EX 725 01</option>
                    <option value='EX 752'>RF and Microwave Engineering | EX 752</option>
                    <option value='EX 651'>Signal Analysis | EX 651</option>
                    <option value='CT 753'>Simulation and Modeling | CT 753</option>
                    <option value='CT 601'>Software Engineering | CT 601</option>
                    <option value='EX 703'>Telecommunication | EX 703</option>
                    <option value='CT 502'>Theory of Computation | CT 502</option>
                    <option value='CT 725 05'>Web Technologies and Applications | CT 725 05</option>
                    <option value='EX 751'>Wireless Communication | EX 751</option>
                    <option value='ME 453'>Workshop Technology | ME 453</option>
                </select>
            </div>
            <div>
                <input type="submit" name='search' value='Search'>
            </div>
        </div>
    </form>
   <br>
   <div class="container3">
    <table style="width:100%">
        <tr>
            <th>Course Code</th>
            <th>Course Title</tj>
            <th>Semester</th>
            <th>Department</th>
            <th>Program</th>
            <th>Course Type</th>
            <th>Teaching hours per week</th>
            <th>Full Marks</th>
            <th>Pass Marks</th>
            <th>Duration</th>
        </tr>
        <?php
        $connection1 = mysqli_connect("localhost","root");
        $db1 = mysqli_select_db($connection1,'ioe_question_bank');
        
        if (isset($_POST['search']))
        {
            $course1 = $_POST['course'];
            $query1 = "SELECT c.ID,c.Title,C.Semester,d.Name,c.Program,ct.Type_Name,c.Hours_per_week,ms.Full_Marks,ms.Pass_Marks,ms.Duration FROM department d INNER JOIN course c ON c.Depart_Code=d.Code INNER JOIN marking_scheme ms ON c.Marks_Code = ms.Code INNER JOIN course_type ct ON c.type_code = ct.code WHERE c.ID = '$course1';";
            $query_run1= mysqli_query($connection1,$query1);
            while($rows=mysqli_fetch_array($query_run1))
            {
            ?>
            <tr>
                <td> <?php echo $rows["ID"]; ?></td>
                <td> <?php echo $rows["Title"]; ?></td>
                <td> <?php echo $rows["Semester"]; ?></td>
                <td> <?php echo $rows["Name"]; ?></td>
                <td> <?php echo $rows["Program"]; ?></td>
                <td> <?php echo $rows["Type_Name"]; ?></td>
                <td> <?php echo $rows["Hours_per_week"]; ?></td>
                <td> <?php echo $rows["Full_Marks"]; ?></td>
                <td> <?php echo $rows["Pass_Marks"]; ?></td>
                <td> <?php echo $rows["Duration"]; ?></td>
            </tr>
            <?php
            } 
        }
        ?>       
      </table>
   </div>
   <br>
   <div class="container4">
    <table style="width:100%">
        <tr>
          <th>Exam Year</th>
          <th>Exam Type</th> 
          <th>Paper Link</th>
        </tr>
        <?php
        $connection2 = mysqli_connect("localhost","root");
        $db2 = mysqli_select_db($connection2,'ioe_question_bank');
        
        if (isset($_POST['search']))
        {
            $examyear = $_POST['examyear'];
            $examtype = $_POST['examtype'];
            $course = $_POST['course'];
            $query2 = "SELECT ei.Year,ei.Type,qp.Paper_link FROM course c INNER JOIN question_paper qp ON c.ID = qp.Course_ID INNER JOIN exam_information ei ON ei.ID = qp.Exam_Id WHERE c.ID= '$course' AND ei.Year ='$examyear'AND ei.Type ='$examtype';";  
            if ($examyear == 'All')
            {
                $query2 = "SELECT ei.Year,ei.Type,qp.Paper_link FROM course c INNER JOIN question_paper qp ON c.ID = qp.Course_ID INNER JOIN exam_information ei ON ei.ID = qp.Exam_Id WHERE c.ID= '$course' AND ei.Type ='$examtype';";   
            }
            $query_run2= mysqli_query($connection2,$query2);
            while($rows=mysqli_fetch_array($query_run2))
            {
            ?>
            <tr>
                <td> <?php echo $rows["Year"]; ?></td>
                <td> <?php echo $rows["Type"]; ?></td>
                <td> <a href = <?php echo $rows["Paper_link"]; ?>><?php echo $rows["Paper_link"]; ?></a></td>
            </tr>
            <?php
            }   
        }
        ?>       
      </table>
    </div>

</body>
</html>