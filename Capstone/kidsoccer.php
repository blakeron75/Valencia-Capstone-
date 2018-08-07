<!DOCTYPE html>
<html>

   <head>
   <!--
      New Perspectives on HTML and CSS
      Tutorial 6
      Tutorial Case

      Red Ball Pizza Customer Survey
      Author: Ronald Blake
      Date:   

      Filename:         survey.htm
      Supporting files: customer.png, forms.css, formsubmit.js, go.png,
                        modernizr-1.5.js, rb.css, redball.png,
                        stop.png

   -->

      <meta charset="UTF-8" />
      <title>For The Kids</title>
      <script src="modernizr-1.5.js"></script>
      <script src="formsubmit.js"></script>

      <link href="rb.css" rel="stylesheet" />
      <link href="forms.css" rel="stylesheet" />

   </head>

   <body>

      <header>
         <nav>
            <ul>
               <li><a href="#">Sign In</a></li>
            </ul>
         </nav>
      
         <article>
            <h1>Simply The Best</h1>
            <p>Thank you for taking the time to visit our website. We 
				take the time to make your kids the best at soccer and 
				give some time to yourself. At the end of the day kids 
				will be Simply The Best, at soccer.  
            </p>
           
         </article>
      </header>

   <section>
      <p>Register your kids today </p>

      <form id="survey" name="survey"
            action="http://www.Simplythebest.com/"
            method="post">

         <fieldset id="custInfo">
            <legend>Your Information</legend>

            <label for="username">Username *</label>
            <input name="username" id="username"
                   required="required" />

            <label for="password">Password *</label>
            <input name="password" id="password"
				required="required" />
          
            <label for="email">E-mail *</label>
            <input name="email" id="email" type="email"
                   required="required" />

         </fieldset>


      </form>

   </section>
   
   <section>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6EVD5J9K2RWY6">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
   </section>

   <footer>
      <address>
         Simply the Best &bull;
         864 Central ave &bull;
         Orlando, FL  32158 &bull;
         (551)864-8004 
      </address>
   </footer>

   </body>

</html>