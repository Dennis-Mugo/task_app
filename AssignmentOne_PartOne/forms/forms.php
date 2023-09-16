<?php
class forms{
    public function sign_in_form(){
        ?>
<div class="row align-items-md-stretch">
   <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
         <form action="" method="POST">
         <div class="mb-3">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mb-3 form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Remeber Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
         </form>
      </div>
   </div>
   <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
         <h2>Useful Instructions</h2>
         <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
         <button class="btn btn-outline-secondary" type="button">Example button</button>
      </div>
   </div>
</div>
        <?php
    }
    public function sign_up_form(){
        ?>
<div class="row align-items-md-stretch py-4">
      
   <div class="col-md-6">
      
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
         <?php if (isset($_GET['token'])) {
            $token = $_GET['token'];
            if ($token == 'pending') {
               ?>
               <div class="mr-5 alert alert-info" role="alert">
                  A verification email has been sent to your email address.
               </div>
            <?php } else if ($token == 'invalid') {
            ?>
               <div class="mr-5 alert alert-danger" role="alert">
                  The token is invalid. Please register again.
               </div>
            <?php }
         } 
         ?>
      
         <form action="" method="POST">
            <div class="mb-3 form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
         </form>
      </div>
   </div>
   <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
         <h2>Useful Instructions</h2>
         <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
         <button class="btn btn-outline-secondary" type="button">Example button</button>
      </div>
   </div>
</div>
        <?php
    }
    
    public function contact_us_form(){
        ?>
<div class="row align-items-md-stretch">
   <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <form method = "POST" action = "data_process/processes.php" autocomplete = "off" accept-charset="UTF-8">
               <div class="mb-3 form-group">
                  <label for="fullName">Full Name</label>
                  <input placeholder="Enter your Full Name" class="form-control form-control-md" name="fullName" type="text" id="fullName" required autofocus />
               </div>
               <div class="mb-3 form-group">
                  <label for="email">Email Address</label>
                  <input placeholder="Enter your email" class="form-control form-control-md" name="email_address" type="email" id="email" required />
               </div>
               <div class="mb-3 form-group">
                  <label for="subject">Subject</label>
                  <input placeholder="Enter the subject" class="form-control form-control-md" name="subject" type="text" id="subject" required />
               </div>
               <div class="mb-3 form-group">
                  <label for="message">Message</label>
                  <textarea placeholder="Enter the message" class="form-control form-control-md" name="textMessage" id="subject" required style="height:170px" ></textarea>
               </div>
               <div>
                  <input class="btn btn-primary" type="submit" name="send_message"  value="Send Message">
               </div>
            </form>
      </div>
   </div>
   <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
      <h2>Talk to us</h2>
            Phone: (+254) (0)703-034000<br />
            E-mail: <a href="mailto:support@ics.com">support@ics.com</a><br />
            <br /><br />
            <b>Headquarter:</b><br />
            Company Inc, <br />
            Madaraka Siwa 201<br />
            55501 Mada, Ka<br />
            Phone: (+254) (0)703-034300<br />
            <a href="mailto:mada@ics.com">mada@ics.com</a><br />
            <br /><br />
            <b>Jasi:</b><br />
            Company HK Litd, <br />
            25/F.168 Ri<br />
            Maziwa District, Jasi<br />
            Phone: (+254) (0)703-034200<br />
            <a href="mailto:jasi@ics.com">jasi@ics.com</a><br />
      </div>
   </div>
</div>
        <?php
    }
}