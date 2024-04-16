<?

if(isset($_GET['notfound']))
echo'
<script>
Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Something went wrong!"
  });

</script>
';

?>