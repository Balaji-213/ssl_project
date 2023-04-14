# ssl_project
NOTE: XAMPP should be installed in your system and you have to start it before running the code and keep the Project in the following directory:
C:\xampp\htdocs

Video Link:
https://drive.google.com/drive/folders/1hU9p9DjgxUkQ93vb9KYbBW5cBu54H2HE?usp=share_link

• home.php : This is for home page contains brief info our site.
• package.php: This file shows all the packages providing by company but you can't book it now,
first you have to login for it.
• signin.php: This file lets the user to login in our site with their saved credentials.
• signup.php: This file allows user to create their personal account in our site.
• adminlogin.php: This file is for admin login portal.
• signin2.php, adminlogin2.php: These files are used to check whether the user/admin is logging
with correct credentials or not, if not then it will show alert box. 
• signup2.php: This file is to add the user data into our database.

We fixed the admin username as 'admin@123' and password as 'iamadmin'.
If inputs are correct then signin2.php redirects us to home2.php and adminlogin2.php redirects
us to admin.php.

========If you login as a user========

• home2.php: This file is for user's home page, user's name appears at top.
• profile.php: Allows user to view his personel details and past trips.
• package2.php: It is for viewing packages, redirects to book.php on clicking 'Book Now' button.
• book.php: This is for booking trips by entering your details, basic detail like(name, addresss,etc)
will already be filled their, which you can edit also.
• book_form.php: This works in background to store booking data in database.
• transaction.php: This file is for calculating the costs and accordingly user pays the bill, 
even booking successfull message is added in this file itself.
• transaction2.php: This file is to verifies the otp generated and otp that is given as input.


========If you login as admin========

• admin.php: This file is for admin where he can view user's credentials and booking data by
clicking button.
• credentials.php: This file to view the number of users and their credentials.
• bookingdata.php: this file is to view the booking data.

 
********Other files********
 • style.css: This file is for designing webpage including font, layout, and colours.
 • Images(folder): It contains all the images used in webpage.
 
