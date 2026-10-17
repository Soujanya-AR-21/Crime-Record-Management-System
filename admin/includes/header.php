<header class="header">
    <div class="logo-container">
         <a href="dashboard.php" class="logo" style="color:#000; font-size:22px; text-decoration:none;">
              Crime Record Management System | Admin Panel
          </a>
      
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
               <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
     </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="../assets/images/admin.png" alt="Admin" class="img-circle" data-lock-picture="../assets/images/admin.png" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                    <?php
                        $aid=$_SESSION['crmsaid'];
                        $sql="SELECT AdminName,Email from  tbladmin where ID=:aid";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':aid',$aid,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $row)
                        {              
                    ?>

   
                  
