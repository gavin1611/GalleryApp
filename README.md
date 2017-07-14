### Facebook API

Facebook API service was chosen as Facebook is mostly widely used social media in the world and it has big customer base. It will give users much more conviniece to log in by Facebook than other social medias. As for the programming, Facebook SDK is ready to implement and I have worked with Facebook SDK 4.0 before so that justifies my reason for choosing it over other cloud service.



### Gallery App Guidance 

The Gallery View Application integrates with Facebook SDK 5 authenticateing and redirecting users to the index.php. Index.php displays a list of albums and by clicking on an album, users can view all the photos of the particular album.



- To run this project please download Apache, PHP (LAMP stack without MySQL)

- After successful download and install. Place this project in the web server depending if ubuntu var/www/html and run the login.html. On successful login, the access token is stored in SESSION VARIABLE and redirected to callback.php.

- Callback.php validates the user and access token. The echo statements which print the user details are for debugging purpose.

- After logging in successfully, it will redirect to index.php which contains grid view bootstap displaying all the albums from the particular user. 

- On selection of a particular album, the photos are displayed.(Error retriving the user photos). The photos and albums list is retrieved in a JSON object from the Facebook API and then the attributes are decoded in the index.php and photos.php. A loop is used to abstract each photo from the decoded data and then it is added to the bootstrap grid.

> To achieve this, Facebook Graph API is used to retrieve the photos in JSON from the URL with access code of the user in files index.php and photos.php.



The application can successfully authenticate the user but there are a few errors on retrieval of images from Facebook. I have not been able to make run error-free. I would be happy to complete the assignment if I would have had a few more hours.



I am happy to provide any doubt clarifiation with regard to this assignment Gallery. The tasks were challenging in the given time frame and I loved the challenges which have been set by the team at PastBook and it is very much related to the actual job.














































