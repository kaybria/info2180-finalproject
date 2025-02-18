<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>INFO2180 Final Project</title>
        <link rel="stylesheet" href="styles.css" media="screen" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src=""></script>
    </head>
    <body>        
        </header>
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
                        <table class="table">
                           <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Assigned To</td>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <tr>
                                <?php
                                $host = 'localhost';
                                $username = 'admin@project2.com';
                                $password = 'password123';
                                $dbname = 'bugme';
                                
                                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
                                $stmt = $conn->query("SELECT * FROM issues");
                                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                foreach($results as $row):                                    
                                    {
                                        $assigned = $row['assigned_to'];
                                        $stmt1= $conn->query("SELECT DISTINCT users.id, users.firstname, users.lastname FROM users WHERE users.id=$assigned");
                                        $results1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
                                        $assignedName = $results1['firstname'] . $results1['lastname'];
                                        echo "<table>";
                                        foreach($results as $row):{
                                            echo "<tr>"; 
                                            echo "<td>" .$row['id']. "</td>";
                                            echo "<td>" .$row['title']. "</td>";
                                            echo"<td>" .$row['type']. "</td>";
                                            echo "<td>" .$row['status']. "</td>";
                                            echo "<td>" . $assignedName . "</td>";
                                            echo "<td>" .$row['created']. "</td>";
                                            echo "</tr>";  

                                            echo "</table>"; 

                                      
                                        }
                                         endforeach;  
                                    }  
                                endforeach;  
                                ?>

                            </tbody>
                          
                        </table>
                    </form>
                </div> 
    </body>
</html> 
