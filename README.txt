Code Louisville Project Name: Gripe
By: Joshua Dieckman

Media Query Breakpoints:
1150px
850px

Project Requirements:
General Expression - register.php
Ajax - index.php
Fetch API - index.php
Incrementing JavaScript function - index.php & profile.php

Instructions:
All files can be found on GitHub, but since I used PHP, I had to host it on my website. All files are the same except for the API Key and database credentials.

GitHub: 

Project Location: https://www.dieckmandesigns.com/codelou/php/register.php

On the registration page, I used general expression to validate the email and password to register for a Gripe account.

Once you register for an account, navigate to the log in page login.php

After you log in, you will see messages in the middle of the page and menus to the left and right.

The app will ask for your location, please allow.

In the console, you will notice an incrementing number. This is a JavaScript function that counts the seconds since the last activity on the page. It will direct you to logout.php when it gets to 20 minutes of inactivity.

In the top right corner, the weather for your area will show as well as the sunrise and sunset. This was retrieved with fetch API.

At the bottom of the page you will notice a form field where you can submit messages. When you submit a message, the middle of the page will reload using jQery and your message will show at the top of the list. 

At this point, the default profile image is my logo, but you can change your profile image on your profile page by clicking on your username in the top left menu. I'm sorry, I dont have any cool pictures to choose from yet. You'll notice that the page will not reload when you submit because I used Ajax to submit the message to the database.

When the viewport is reduced to 1150px or below, the right menu will condense and show in the left menu. The weather will only show the conditions and temperature.

When the viewport is reduced to 850px or below, the left menu will condense and a hamburger menu will appear in the top left of the page. When clicked, the menu items will drop down as well as the weather conditions and the temperature.