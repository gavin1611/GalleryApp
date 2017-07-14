The Gallery View Application integrates with Facebook SDK 5 which authenticates the user and redirects the user to the index.php. This displays a list of albums on click on an album the user can view all the photos for the particular album.

Facebook API service was chosen as SDK is ready to implement and I have worked with Facebook SDK 4.0 before so that justifies my reason for choosing it over other cloud service.

The application successfully authenticates the user but there are a few errors on retrieval of images from Facebook. I have not been able to make run error-free. I would be happy to complete the assignment if I would have had a few more hours.

To run this project please download Apache, PHP (LAMP stack without MySQL)

After successful download and install. Place this project in the web server depending if ubuntu var/www/html and run the login.html. On successful login, the access token is stored in SESSION VARIABLE and redirected to callback.php.

Callback.php just validates the user and access token. The echo statements which print the user details are just for debugging purpose. 

This redirects to index.php which contains grid view bootstap which displays all the albums of the particular user. On selection of a particular album the photos are displayed.(Error retriving the user photos).
The photos and albums list is retrieved in a JSON object from the Facebook API and then the attributes are decoded in the index.php and photos.php. 
A loop is used used abstract each photo from Facevook in an array and then it is added to the bootstrap grid. The Facebook Graph API is used to retrieve the photos in JSON from the URL with access code of the user in files index.php and photos.php.

I will be happy to provide any doubt clarifiation with regard to this assignment Gallery. The tasks were challenging in the given time frame and I loved the challenges which have been set by the team at PastBook very much related to the actual job.




