<div class="modal fade" id="modalAdduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <!--form-->   

     
        <h2>Registration Form</h2>
        <form method="POST" action="../backend/userauth.php">
          <fieldset>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <label for="accesstype">Access Type</label>
                <select class="form-control" id="accesstype" name="accesstype">
                   <?php
                   $q = "SELECT access_id, accessName FROM accesstype";
                   $rs =mysqli_query($conn,$q);
                   while ($rw = mysqli_fetch_array($rs)){
                    echo '<option value ="'.$rw['access_id'].'">'.$rw['accessName'].'</option>';
                   }
                   ?>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="pic" accept="image/*">
            </div>
          </fieldset>

          <?php 
        echo '<select class="form-control" name="accesstype" arial-label="input example">';

        $q = "SELECT access_id, accessName FROM accesstype";
        $rs = mysqli_query($conn,$q);
        while ($rw = mysqli_fetch_array($rs)){
          echo '<option value=" ' .$rw['access_id']. ' " > '.$rw['accessName'].'</option>';
        }
          
        
        echo '
        </select>';
        
        ?>     
     
  

   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addUser" value="addUser" class="btn btn-primary">Add Account</button>
        </form>
      </div>
    </div>
  </div>
</div>