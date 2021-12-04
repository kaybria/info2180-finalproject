<?php session_start();
require_once "./phpfunctions.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>INFO2180 Final Project</title>
 <link rel="stylesheet" href="styles.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="header">
        <div>
           <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
           <h1 class="center">Bugme Issue Tracker</h1>
           <p></p>
   
        </div>
       
    </header>
    <div class = "section">
        <div class="nav">
            <div class="tabs">
                <ul class="mainNav">
                
                    <a class="active" data-toggle="tab" href="#home"><i class="fa fa-home"></i>Home</a> 
                    <a data-toggle="tab" href="#add"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add User</a>
                    <a data-toggle="tab" href="#new"><i class="fa fa-plus-circle" aria-hidden="true"></i>New Issue</a>
                    <a data-toggle="tab" href="#logout"><i class='fa fa-power-off'></i>Logout</a>
                </ul>
            </div>
        </div>  
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <form action="">
                        <div class="issues">
                          <h1 class="h1">Issues</h1>
                          <button class="new-issue" id="new_issue">Create New User</button>
                        </div>
                        <div class="filter">
                          <p class="par">Filter by: </p>
                          <a class="all" href="" id="all">All</a>
                          <a class="open" href="" id="open">Open</a>
                          <a class="tickets" href="" id="my-tickets">My Tickets</a>
                        </div>
                        <table class="table">
                          <tr>
                              <th>Title</th>
                              <th>Type</th>
                              <th>Status</th>
                              <th>Assigned To</td>
                              <th>Created</th>
                          </tr>
                          <tr>
                              <td class="title"><em>#100</em>  <a href="url"> Vulnerability in Add User Form</a></td>
                              <td class="type">Bug</td>
                              <td><input type="button" id="status1" value="Open"></td>
                              <td class="asto">Tom Brady</td>
                              <td class="date">2019-11-01</td>
                          </tr>
                          <tr>
                              <td class="title"><em>#23</em> <a href="url">Location Service isn't working</a></td>
                              <td class="type">Bug</td>
                              <td><input type="button" id="status1" value="Open"></td>
                              <td class="asto">Jan Brady</td>
                              <td class="date">2019-10-15</td>
                          </tr>
                          <tr>
                              <td class="title"><em>#16</em> <a href="url"> Setup Logger</a></td>
                              <td class="type">Proposal </td>
                              <td><input type="button" id="status2" value="Closed"></td>
                              <td class="asto">Marsha Brady</td>
                              <td class="date">2019-08-10</td>
                          </tr>
                          <tr>
                              <td class="title"><em>#50</em> <a href="url">Create API Documentation</a></td>
                              <td class="type">Proposal</td>
                              <td class="status"><input type="button" id="status3" value="In Progress"></td>
                              <td class="asto">Mike Brady</td>
                              <td class="date">2019-10-29</td>
                          </tr>
                          <tr>
                              <td class="title"><em>#24</em> <a href="url">Allow results to be sorted</a></td>
                              <td class="type">Proposal</td>
                              <td><input type="button" id="status3" value="In Progress"></td>
                              <td class="asto">Marcia Brady</td>
                              <td class="date">2019-10-20</td>
                          </tr>
                        </table>
                    </form>
                </div> 

                    
                <div id="add" class="tab-pane fade">
                  <h3>New User</h3>
                  <form>
                    <script src="script.js" type="text/javascript"></script>
                    <label for="fname">Firstname</label>
                    <input type="text" id="fname" name="fname" placeholder=" ">
                    <label for="lname">Lastname</label>
                    <input type="text" id="lname" name="lname" placeholder=" ">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder=" ">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder=" ">
                    <button id = "submitform" class = "submit"> Submit </button>
                    <div id="results"></div>
                  </form>
                
                </div>

                <div id="new" class="tab-pane fade">
                        <?php ("Location: newissue.php")?>
                    </div>
                
                     
                
                  </form>
                  </div>
                <div id="logout" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        
        
    </div>
     

    
</body>