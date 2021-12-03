<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>INFO2180 Final Project</title>
        <link rel="stylesheet" href="styles.css" media="screen" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="createissues.js"></script>
        <script src="norefresh.js" charset="utf-8"></script>
    </head>
    <body>
    <header class="header">
    <div>
            <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
            <h1 class="center">Bugme Issue Tracker</h1>
            <p></p>
    </header>
            
    
            </div>
        <div class = "section">
        <div class="nav">
            <div class="tabs">
                <nav><ul class="mainNav">
                
                <a class="active" data-toggle="tab" href="#home"><i class="fa fa-home"></i>Home</a> 
                <a data-toggle="tab" href="newuser.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add User</a>
                <a data-toggle="tab" href="newissue.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>New Issue</a>
                <a data-toggle="tab" href="#logout"><i class='fa fa-power-off'></i>Logout</a>
            </ul></nav>
                
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
                                $table= mysqli_connect("localhost","admin@project2.com","password123","bugme" );
                                $sql = "SELECT * FROM  issues";
                                $result= $table->query($sql);

                                if ($result->num_rows>0){

                                    while ($row= $result->fetch_assoc()){

                                        $rowID = $row['assigned_to'];
                                        $sql = "SELECT DISTINCT users.id, users.firstname, users.lastname FROM users WHERE users.id=$rowID";
                                        $stmt1 = $conn->query("SELECT issues.created_by,issues.status, issues.assigned_to, user.firstname user.lastname FROM issues,users WHERE issues.id = users.id ");

                                        $assignedTo = $table->query($sql)->fetch_assoc();
                                        $assignedName = $assignedTo['firstname'] . $assignedTo['lastname'];
                                        echo "<tr><td>#<span class=\"id\">" . $row['id']."</span> <a class=\"title\">".$row['title'] . "</a></td><td>" . $row['type'] . "</td><td class=\"statusContainer\"><span class=\"status\">" . $row['status'] . "</span></td><td>" . $assignedName . "</td><td>" . $row['created'] . "</td><tr>";
                                    }
                                }
                                $table->close();
                            ?>
                            </tbody>
                          
                        </table>
                    </form>
                </div> 
    </body>
</html> 
