# magento-google-reviews
This is a simple module to show google reviews in magento eshop
- #Installation steps
- Download project from repository and paste inside magento modules folder.
- In the GoogleReviews.phtml you have to put your Place_ID
- Run in terminal php bin/magento setup:upgrade
- Now you will have to put this script with your own Google_API_KEY in the main template head section
- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=**********&signed_in=true&libraries=places"></script>
