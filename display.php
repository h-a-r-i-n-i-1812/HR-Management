<?php
$id=$_GET["i"];
$id=intval($id);

session_start();
$_SESSION['emp'] = $id;

?>

<html>
  <head>
    <title>Employee page</title>
    <style>
      /* CSS styles for the sidebar */
      .sidebar {
        background-color: #333;
        color: white;
        height: 100vh;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        overflow-y: auto;
        padding: 20px;
      }
      .sidebar h2 {
        font-size: 1.5rem;
        margin-top: 0;
      }
      .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .sidebar li {
        margin-bottom: 10px;
      }
      .sidebar a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        transition: all 0.2s ease-in-out;
      }
      .sidebar a:hover {
        transform: scale(1.1);
      }
      
      /* CSS styles for the main content area */
      .main-content {
        margin-left: 250px;
        padding: 20px;
        background-color: #f2f2f2;
        font-size: 1.2rem;
        line-height: 1.5;
      }
      .main-content h1 {
        font-size: 2rem;
        margin-top: 0;
      }
      .main-content p {
        margin-bottom: 1.5rem;
      }
      .main-content .highlight {
        background-color: yellow;
        font-weight: bold;
      }
	  .i{
       background-color:rgb(157, 201, 237);
	  }
    </style>
  </head>

  <body>
	<div class="i">
	<img src="employee.jpg" width="1500" height="200">

	</div>

    <div class="sidebar">
      <h2>Options</h2>
      <ul>
        <li><a href="my info .php">My info</a></li>
		<li><a href="salary.php"	>View Salary </a></li>
        <li><a href="benefit.html">Claim benefit</a></li>
        <li><a href="leave.html"	>Apply leave </a></li>
      </ul>
    </div>

    <div class="main-content">
      <h1>About Us:</h1>
      <p>The employees of our company are typically highly skilled professionals who specialize in various areas such as software development, network engineering, cybersecurity, and data analytics. These employees are essential to the success of the company and often work on cutting-edge projects that require a high level of expertise and creativity.
      <h1 id="section2">Know more</h1>
      <p>To respect top talent, our company often offer a range of benefits and perks to our employees. These can include competitive salaries, health and dental insurance, retirement plans, paid time off, and flexible work arrangements. Additionally,we offer training and development opportunities to help employees enhance their skills and advance their careers. we also provide on-site amenities such as gyms, cafes, and recreation areas to promote work-life balance and foster a positive workplace culture. Overall, we recognize the importance of investing in their employees and creating a supportive and engaging work environment to achieve success in the highly competitive tech industry
		</p>
		</div>
		</body>
		</html>
    