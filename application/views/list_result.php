<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="panel panel-primary">
        <div class="panel-heading">Panel Heading</div>
        <div class="panel-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Diploma</th>
                <th>Course</th>
                <th>Batch Year</th>
                <th>university</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        


        foreach($survey as $value) 
        {  
        
         
        ?>

            <tr>
                <td><?=$value->firstname?></td>
                <td><?=$value->email?></td>
                <td><?=$value->gender?></td>
                <td><?=$value->discipline?></td>
                <td><?=$value->course?></td>
                <td><?=$value->batchyear?></td>
                <td><?=$value->universityname?></td>
                <td><button type="button" name="forward" id="myBtn" dataval=<?=$value->id?> class="forward">View</button></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    
    
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
<div class="demo">

<h2 id="fullname"></h2>
<h3 id="email"></h3>
<h3 id="gender"></h3>
<h3 id="diploma"></h3>
<h3 id="course"></h3>
<h3 id="university"></h3>

<ul>
        <li><strong>1</strong>
            <h5>How familiar are you with artificial intelligence?</h5>
            <p id="question_1"></p>
        </li>
        <li><strong>2</strong>
            <h5>Have you ever taken the help of any AI tools for your studies? If yes, please mention the name of the tool
                used. </h5>
            <p id="question_2"></p>
            <p id="question_2_tool"></p>
        </li>
        <li><strong>3</strong>
            <h5>Do you think artificial intelligence can improve the quality of your studies? </h5>
            <p id="question_3"></p>
        </li>
        <li><strong>4</strong>
            <h5>Have you heard about generative AI? </h5>
            <p id="question_4"></p>
        </li>
        <li><strong>5</strong>
            <h5>Do you believe AI technologies like ChatGPT can provide valuable support for your project/studies research?
            </h5>
            <p id="question_5"></p>
        </li>
        <li><strong>6</strong>
            <h5>Do you think AI technologies like ChatGPT can help your career? </h5>
            <p id="question_6"></p>
        </li>
        <li><strong>7</strong>
            <h5>Have you felt that AI can provide personalised learning experiences based on your learning styles,
                interests, and abilities?
            </h5>
            <p id="question_7"></p>
        </li>
        <li><strong>8</strong>
            <h5>Do you think artificial intelligence can impact the management industry?
            </h5>
            <p id="question_8"></p>
        </li>
        <li><strong>9</strong>
            <h5>Do you think that the existing business education needs to change with the concept of AI, both in terms of
                how and what is delivered in the classroom?
            </h5>
            <p id="question_9"></p>
        </li>
        <li><strong>10</strong>
            <h5>Do you think that an AI-integrated business school’s curriculum will prepare you for the evolving job
                market?
            </h5>
            <p id="question_10"></p>
        </li>
        <li><strong>11</strong>
            <h5>Do you think artificial intelligence can help improve the efficiency and productivity of management
                professionals?</h5>
            <p id="question_11"></p>
        </li>
        <li><strong>12</strong>
            <h5>Artificial intelligence can provide a more efficient way of managing projects. Do you agree?</h5>
            <p id="question_12"></p>
        </li>
        <li><strong>13</strong>
            <h5>Do you think AI can replace MBA students? </h5>
            <p id="question_13"></p>
        </li>
        <li><strong>14</strong>
            <h5>Do you think that AI Skills are mandatory for next-generation jobs? </h5>
            <p id="question_14"></p>
        </li>
        <li><strong>15</strong>
            <h5>Do you think artificial intelligence is likely to have a negative influence on the future of management?
            </h5>
            <p id="question_15"></p>
        </li>
        <li><strong>16</strong>
            <h5>Would you be interested in specializing in AI as part of your MBA program?</h5>
            <p id="question_16"></p>
        </li>
        <li><strong>17</strong>
            <h5>Do you think that AI and related technologies will lead to the displacement of current jobs and workers?
            </h5>
            <p id="question_17"></p>
        </li>
        <li><strong>18</strong>
            <h5>AI-related roles will require workers with a strong skill set and orientation in areas such as ethics,
                leadership, emotional intelligence, and change management. Are you preparing yourselves for these skill sets?
            </h5>
            <p id="question_18"></p>
        </li>
        <li><strong>19</strong>
            <h5>Is artificial intelligence posing a threat to management studies?</h5>
            <p id="question_19"></p>
        </li>
        <li><strong>20</strong>
            <h5>Do you trust AI to make significant decisions about your future/career? </h5>
            <p id="question_20"></p>
        </li>

</ul>
</div>

</div>

</div>
  </div>
</div>

</div>
</div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script> 

$(document).ready(function(){
  new DataTable('#example');
});


</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var button = document.getElementsByClassName("forward");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

$(function () {
        $(".forward").click(function () {
            modal.style.display = "block";

var c=$(this).attr("dataval");

console.log(c);

var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var ar=JSON.parse(this.responseText);
      var obj=ar[ar.length-1];
    //   console.log(obj.firstname);

      document.getElementById("fullname").innerHTML=obj.firstname;
      document.getElementById("email").innerHTML=obj.email;
      document.getElementById("gender").innerHTML=obj.gender;
      document.getElementById("diploma").innerHTML=obj.discipline;
      document.getElementById("course").innerHTML=obj.course;
      document.getElementById("university").innerHTML=obj.universityname;
      document.getElementById("question_1").innerHTML=obj.question_1;
      document.getElementById("question_2").innerHTML=obj.question_2;
      document.getElementById("question_2_tool").innerHTML=obj.question_2_tool;
      document.getElementById("question_3").innerHTML=obj.question_3;
      document.getElementById("question_4").innerHTML=obj.question_4;
      document.getElementById("question_5").innerHTML=obj.question_5;
      document.getElementById("question_6").innerHTML=obj.question_6;
      document.getElementById("question_7").innerHTML=obj.question_7;
      document.getElementById("question_8").innerHTML=obj.question_8;
      document.getElementById("question_9").innerHTML=obj.question_9;
      document.getElementById("question_10").innerHTML=obj.question_10;
      document.getElementById("question_11").innerHTML=obj.question_11;
      document.getElementById("question_12").innerHTML=obj.question_12;
      document.getElementById("question_13").innerHTML=obj.question_13;
      document.getElementById("question_14").innerHTML=obj.question_14;
      document.getElementById("question_15").innerHTML=obj.question_15;
      document.getElementById("question_16").innerHTML=obj.question_16;
      document.getElementById("question_17").innerHTML=obj.question_17;
      document.getElementById("question_18").innerHTML=obj.question_18;
      document.getElementById("question_19").innerHTML=obj.question_19;
      document.getElementById("question_20").innerHTML=obj.question_20;
        
    }
  };
  xmlhttp.open("GET", "Backend/getdata?q=" + c+"&fun=singlesurvey", true);
  xmlhttp.send();
        });
    });


// // When the user clicks the button, open the modal 
// button.onclick = function() {

// alert("clicked");

//   modal.style.display = "block";

//   var c=btn.getAttribute("dataval");

//   console.log(c);

//   var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         var ar=JSON.parse(this.responseText);
//         // console.log(ar['id']);
//         document.getElementById("question_1").innerHTML=ar['i'];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
//         document.getElementById("question_1").innerHTML=ar[7];
        

//       }
//     };
//     xmlhttp.open("GET", "getdata.php?q=" + c, true);
//     xmlhttp.send();



// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>

</html>