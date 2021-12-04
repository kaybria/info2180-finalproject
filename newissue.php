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
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        
        <div id="new">
            <h3>Create Issue</h3>
            <form method="post" name="form" id="form" action="">
                <label for="title">Title</label>
                <input type="text" id="title" name="array[]" placeholder=" ">
            
                <label for="description">Description</label>
                <textarea id="description" name="array[]" placeholder=" " style="height:200px"></textarea>
                        
                <label for="assigned">Assigned To</label>
                <select id="assigned" name="assigned">
                    <option value="name1">Admin</option>
                    <option value="name2">S</option>
                    
                </select><br><br>
            
                <label for="type">Type</label>
                <select id="type" name="type">
                   <option value="bug">Bug</option>
                   <option value="proposal"> Proposal </option>
                   <option value="task"> Task </option>
                </select><br><br>
            
                <label for="priority">Priority</label>
                <select id="priority" name="priority">
                    <option value="minor">Minor</option>
                    <option value="major">Major</option>
                    <option value="critical">Critical</option>
                </select><br>
                        
                <button type="submit" id="issue_submit" value="Submit">Submit</button>
                    
            </form>
        </div>
        <div>
            <h2>Result</h2>
            <div id="result"></div>
        </div>  
        
    </body>
</html>