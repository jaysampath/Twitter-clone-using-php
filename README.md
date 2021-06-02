# Twitter-clone-using-php
Cloned the basic functionality of the twitter using php and MySQL. The application implemented the functionalities like Posting and Searching tweets, following and unfollowing, public profiles and search profiles, public tweets etc.

<h2>Features</h2>

<ul>
  <li> Nav bar using bootstrap4 component  </li>
  <li> Login/Signup validation in server side(php). While logging in checks for correct passoword. While signing in checks for existence of user  </li>
  <li> Passwords are stored using md5 hashing </li>
  <li> Nicely divided the php files. All functions are in functions.php file. after every click i.e., action are in actions.php. All script code is in footer.php. All 
          The nav bar and login/signup modal is in header.php. displaying tweets and search tweeets button are in home.php. styles are externally included from styles.css.  </li>
  <li> The application whether logged in or not, the home page shows very recent tweets  </li>
  <li> The User once logged in, he can see the post tweet button </li>
  <li> Your timeline page shows the tweets from the accounts that user follows  </li>
  <li> Your tweets page shows the users tweets (very recent first)  </li>
  <li> Public profiles shows the active users list from the database. They are linked to their own tweets. The user clicks on a userid on public profiles page takes to the clicked account's tweets along with the follow button  </li>
  <li>session variables are used for staying logged in </li>
  <li> User can search the public tweets by using some words not exactly like hashtags. But it displays the matched tweets  </li>
  <li> User can post his tweets by entering in the text field and hitting post tweet button  </li>
  
  <li>A lot more features are yet to be added</li>
  
  </ul>
  
  <h2>DataBases</h2>
  <p>Used three tables</p>
  <ul>
  <li> users (id [primary key] , email , password )  </li>
  <li> tweets ( id[primary key] , tweet , userid[foriegn key referencing users table ] , datetime )  </li>
  <li> isfollowing (id[primary key] , follower (stores the userid) , isfollowing (stores the userid)  </li>
  </ul>
  
  <h2>Application</h2>
  
  <h3>Home Page ( before logging in) </h3>

<img src = "twitter1.png" alt ="website-image">

<h3>Your Time Line Page (After Logged in) </h3>

<img src = "twitter2.png" alt ="website-image">

<h3>Your Tweets Page </h3>

<img src = "twitter3.png" alt ="website-image">

<h3>Public profiles Page </h3>

<img src = "twitter4.png" alt ="website-image">

<h3>When a link on public profiles page clicked </h3>

<img src = "twitter5.png" alt ="website-image">

<h3>Search Tweets Result Page </h3>

<img src = "twitter6.png" alt ="website-image">

<h3>Post Tweet button </h3>

<img src = "twitter7.png" alt ="website-image">



<h2>In action </h2>

<p> see this application in action <a href="http://jayasampathwebhosting-com.stackstaging.com/projects/query-page/">here </a></p>


