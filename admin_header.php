<!-- Admin Header Section -->
 <?php
// If any message are set (like error or success), show them
if(isset($message)){
    foreach($message as $message){
      echo '
      <div class="message">
       <span>'.$message.'</span>
       <i class="fas fa-times" onclick="this.parentElement.remove()"></i>
</div>
      ';  
    }
}
?>
<header class="header">

  <div class="flex"> <!-- Flex container for layout -->

   <!-- Logo that links to the admin homepage -->
   <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

    <!-- Navigation menu -->
    <nav class="navbar">
    <a href="admin_page.php">Home</a>  <!-- Admin dashboard home -->
    <a href="admin_books.php">Books</a>  <!-- Manage products -->
    <a href="admin_orders.php">Orders</a>   <!-- View customer orders -->
    <a href="admin_users.php">Users</a>      <!-- Manage registered user -->
    <a href="admin_contacts.php">Messages</a>  <!-- View contact messages -->
    </nav>

    <!-- Icons section (e.g., for menu and user profile) -->
    <div class="icons">
       <div id="menu-btn" class="fas fa-bars"></div>    <!-- Menu button (used for small screens) --> 
       <div id="user-btn" class="fas fa-user"></div>    <!-- User button to toggle user info -->
    </div>

    <!-- Account box showing admin info -->
    <div class="account-box">
        <p>username : <span><?php echo$_SESSION['admin_name']; ?></span></p>    <!-- Display admin's name -->
        <p>email : <span><?php echo$_SESSION['admin_email']; ?></span></p>      <!-- Display admin's email -->
        <a href="logout.php" class="delete-btn">logout</a>                     <!-- Logout button -->

    </div>
   </div>

 </header>

 <!--custom admin js file link -->
 <script src="js/admin_script.js"></script>
