# Robot Control using XAMPP

![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/9d4170dc-a87a-43a9-839f-636775aa0257) ![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/e47f6ab7-6987-4094-b228-e1e3078d5651)


This project demonstrates how to create a webpage to control robot movement using XAMPP, a web server solution stack package developed by Apache Friends.

## Introduction

Controlling a robot via a webpage provides a convenient and user-friendly interface for remote operation. By hosting a webpage on a local server using XAMPP, users can interact with the robot through a web browser interface.

## How it Works

The webpage hosted on the XAMPP server contains buttons or controls that send commands to the robot when clicked or activated. These commands are typically transmitted to the robot via a communication interface such as Wi-Fi, Bluetooth, or serial communication.

![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/ef107d3a-01ed-4311-9f17-dd6ebf572dca)


## Getting Started

To get started with creating a webpage for robot control using XAMPP, you will need the following components:
- Microcontroller (e.g., Arduino) 
- XAMPP installed on your computer
- Text editor or integrated development environment (IDE) for editing HTML, CSS, and JavaScript code

## Steps

### Follow these steps to create a webpage for robot control using XAMPP:

2. Install and configure XAMPP on your computer following the official installation instructions.
3. Create a new folder in the XAMPP `htdocs` directory to store your webpage files.
4. Create HTML, CSS, and JavaScript files for the webpage interface, including buttons or controls for robot movement.
5. Write JavaScript code to send commands to the robot based on user interactions with the webpage controls.
6. Test the webpage by accessing it through a web browser and verifying that it successfully controls the robot's movement.

### To start a MySQL database and phpMyAdmin using XAMPP:
1. Download and Install XAMPP
2. Start XAMPP Control Panel:
   After installation, open the XAMPP Control Panel. You canusually find it in the installation directory or search for it in your computer’s programs.
4. Start Apache Server:
    In the XAMPP Control Panel, you’ll see various modules listed suchas Apache, MySQL, FileZilla (FTP), etc. Click on the “Start” button next to Apache to startthe Apache server.
6. Start MySQL Database:
    After starting Apache, click on the “Start” button next to MySQL to start the MySQL database server.
8. Access phpMyAdmin:
   Once Apache and MySQL are running, you can access phpMyAdminby opening a web browser and navigating to http://localhost/phpmyadmin/. This will bring up the phpMyAdmin interface where you can manage your MySQL databases. You have now started a MySQL database and phpMyAdmin using XAMPP. You can create databases, tables, run SQL queries, and perform other database management tasks using phpMyAdmin.

![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/59bc7255-a202-44e0-a1fe-5b2752d326a5)

To start phpMyAdmin on my localhost and create a database:
1. Start XAMPP: Ensure that XAMPP is running, including both Apache and MySQL.
2. Open Web Browser: Open your preferred web browser.
3. Navigate to phpMyAdmin: In the address bar of your web browser, type
http://localhost/phpmyadmin/ and press Enter. This will take you to the phpMyAdmin login
page.
4. Log in to phpMyAdmin: If prompted, log in using the credentials for your MySQL database.
By default, the username is usually "root" and there is no password. If you haven't set up a
password during installation, you may leave the password field blank.
5. Create Database:
• Once logged in, you'll see the phpMyAdmin interface.
• On the left-hand side, you'll see a panel with options. Look for "Databases" and click
on it.
• You'll see a text field labeled "Create database". Enter the name you want for your
database here.
• Select the collation (character set) for your database. This specifies how data should
be sorted and compared. You can usually leave this as default (utf8_general_ci).
• Click on the "Create" button. This will create the database with the specified name.
6. Confirmation: After creating the database, you should see a confirmation message indicating
that the database has been created successfully.
You have now started phpMyAdmin on your localhost and created a new database. You can use this
database to create tables, insert data, and perform various database operations.
Starting Apache and MySQL on XAMPPPHP and a MySQL database (such as phpMyAdmin) to control a robot's movement:
Database Setup: First, set MySQL database to store information about the robot's movement
commands.
- Access phpMyAdmin interface.
- Create a new database.
- Create a table to store commands.
2. HTML Page: Creating an HTML page where users can input commands.
3. PHP Script to Process Commands: Creating a PHP script to process the commands
submitted by users and store them in the database.
4. Execution: Now, when a user enters a command in the HTML form and submits it, the PHP
script process_command.php will insert the command into the robot_commands table in
your MySQL database.

![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/dd471380-7596-4e76-9849-6c7a5f619e55)

### Image for structure in phpMyAdmin

![image](https://github.com/ItsRawanMoha/Robot_Control_Panel/assets/156599594/dc573e50-175c-46a1-b0a7-4dcb80b33372)

### Image for storage in phpMyAdmin


## Output

Once the webpage is successfully created and hosted on XAMPP, users can access it through a web browser and control the robot's movement by clicking or activating the interface controls.


### Main page where the user can control robot movement (Right, Left, Forward, Backward, and stop). And send the movements to database.

![screen-gif](https://github.com/ItsRawanMoha/Robot_Control_Panel/blob/main/11.png)

### Response page where the user can see the last command from the main page that he pressed on was sent to the database and get it from there to show it here as shown in the figure and to show the connection status.

![screen-gif](https://github.com/ItsRawanMoha/Robot_Control_Panel/blob/main/22.png)


## Code

Sample HTML, CSS, and JavaScript code for creating the webpage interface and controlling the robot's movement can be found in the file section above.

## Pictures

![screen-gif](https://github.com/ItsRawanMoha/Robot_Control_Panel/blob/main/1.gif)

![screen-gif](https://github.com/ItsRawanMoha/Robot_Control_Panel/blob/main/2.gif)


## Conclusion

Creating a webpage for robot control using XAMPP offers a flexible and accessible method for remotely operating robots. By hosting the webpage locally, users can easily access and control the robot from any device with a web browser, providing convenience and ease of use.
