<footer class="footer">
    
    <div class="container"> 
    <p>&copy; My Website 2021</p>
    </div>
    
    
</footer>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger" id="loginAlert"></div>
        <form>
            <input type="hidden" id="loginActive" name="loginActive" value="1">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email Address">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
          
         <a  id="toggleLogin">Sign Up</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="loginSignupbutton" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<script>
    
    $("#toggleLogin").click(function(){
       
      if($("#loginActive").val()=="1"){
         
         $("#loginActive").val("0");
         
         $("#loginModalTitle").html("Sign Up");
         
         $("#loginSignupbutton").html("Sign Up");
         
         $("#toggleLogin").html("Log in");
        
      }else{
          
              $("#loginActive").val("1");
         
         $("#loginModalTitle").html("Log in");
         
         $("#loginSignupbutton").html("Log in");
         
         $("#toggleLogin").html("Sign up");
          
      }
        
    });
    
    $("#loginSignupbutton").click(function(){
        
        
        $.ajax({
            
            type:"POST",
            url: "actions.php?action=loginSignup",
            data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
            success: function(result){
               
               if(result=="1"){
                   window.location.assign("http://jayasampathwebhosting-com.stackstaging.com/twitter_mvc/");
                   $("#loginAlert").html(result).hide();
               }else{
                   $("#loginAlert").html(result).show();
               }
            }
            
            
            
        });
        
        
    });
    
    $(".toggleFollow").click(function(){
        
        var id = $(this).attr("data-userId");
         $.ajax({
            
            type:"POST",
            url: "actions.php?action=toggleFollow",
            data: "userId=" + id ,
            success: function(result){
               
             if (result == "1") {
                    
                    $("a[data-userId='" + id + "']").html("Follow");
                    
                } else if (result == "2") {
                    
                    $("a[data-userId='" + id + "']").html("Unfollow");
                    
                }
            
            }
            
        });
    });
    
      $("#postTweetButton").click(function() {
        
        $.ajax({
            type: "POST",
            url: "actions.php?action=postTweet",
            data: "tweetContent=" + $("#tweetContent").val(),
            success: function(result) {
                
                if (result == "1") {
                    
                    $("#tweetSuccess").show();
                    $("#tweetFail").hide();
                    
                } else if (result != "") {
                    
                    $("#tweetFail").html(result).show();
                    $("#tweetSuccess").hide();
                    
                }
            }
            
        })
        
    })
    
</script>
  
  
  </body>
</html>