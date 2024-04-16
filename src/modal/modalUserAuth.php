<div class="modal fade" id="deleteUser<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="../backend/userauth.php">

      <input type="text" value="<?php
      echo $row['user_id'];
      ?> " name="id" hidden>

      <span> Do you want to remove <b> <?php 
      
      echo $row['fullname'];

      ?> </b> </span>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="removeUser" value="removeUser" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>