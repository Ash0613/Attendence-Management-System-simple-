# Attendance Management System

## Description
The Attendance Management System is a web application designed to manage and track student attendance. With this system, you can add or delete students, select a date, mark students as either present or absent, and then submit the attendance. The count of students present is displayed and the attendance values (P for present, A for absent) are stored in the database as comma-separated values.

## Technologies Used
- HTML
- CSS
- JavaScript
- PHP

## Database Setup
This project uses a MySQL database running on XAMPP. **Please note that the MySQL port number is set to 3308 in the code.** If your MySQL server is running on a different port, you will need to update the port number in the database connection code.

Here are the steps to set up your database:

1. Install XAMPP on your machine if you haven't already. You can download it from the official XAMPP website.
2. Start the XAMPP control panel and start the Apache and MySQL services.
3. Click on admin, for MySQL which will lead to a phpmyadmin site.
4. Create a new MySQL database for this project.
5. In the project code, update the database connection details. The servername should be "localhost" or if yor using different port number->"localhost:(portno)", and the username and password should be your MySQL username and password.

   
## Usage
Once you have the Attendance Management System installed and the database set up, you can start using the application. Here's how:

1. **Start the XAMPP servers**: Open the XAMPP control panel and start the Apache and MySQL servers.
2. **Open the project in a web browser**: Navigate to `http://localhost/your_project_directory/trylog.php` in your web browser. Replace `your_project_directory` with the name of the directory where you installed the Attendance Management System.
3. **Use the Attendance Management System**: From here, you can start using the Attendance Management System. Here are some of the things you can do:
    - **Add students**: Use the 'Add Student'to add new students to the system.
    - **Mark attendance**: Select a date, click on one of the checkboxes (either absent or present) for each student, and then click 'Submit'. The attendance will be saved in the database, and the count of students present will be displayed.

## Some images
![Screenshot (11)](https://github.com/Ash0613/Attendence-Management-System-simple-/assets/159044952/53136883-fbee-4f4a-a296-12b9d454ab02)
![Screenshot (12)](https://github.com/Ash0613/Attendence-Management-System-simple-/assets/159044952/86645ba7-cddc-4fe8-93fb-38171d2a5b78)
![Screenshot (13)](https://github.com/Ash0613/Attendence-Management-System-simple-/assets/159044952/578994d2-d072-47fa-becb-ec625c25f776)


## Contact
For more information or queries, please contact me at ashlin21122003@gmail.com.
