# capstone
Senior Project for College

This is a team-based project. The task is to design a web application for a non-profit that utilizes a database to keep track of information such as membership, donations, and employees.

The "Testing" folders are rough designs for the different modules that make up the web application.

"News" sorts and pulls the three most recent news articles and displays them in a table. This will be utilized on the front page of the non-profit website. There is a back-end for this as well which features a form that uploads a news article into the database. Potential ideas for expansion here: generating the "Author" name based on the person that is logged in and connecting committees, which would allow someone to post a news article that only authorized people can view.

"Calendar" is a single-page calendar of events that are organized by month and day. The code is written to organize these events by month and not display months that have no events scheduled.

"Calendar-Backend" is the employee side of the calendar. It features a form that allows employees to add events to the calendar. There is a selection list here that is populated directly from the database, generating the list of available committees the employee can select from. In the future, the "Start Date" and "End Date" options will feature a JavaScript calendar that will allow employees to select the date and time. There will also be a list of events with edit and delete options available.

connection.php (which connects to the database) is not included in this repository.
