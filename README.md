# Practical Training Management System

This Laravel project aims to enhance the logbook implementation and organization process for practical training. It provides a comprehensive system for students to submit daily logbook entries, generate reports, and receive feedback from their supervisors. Additionally, supervisors have access to a dedicated dashboard to review and manage the submitted logbooks.On top of that there is an organization dashboard dedicated for organizations where they can select the number of students they want for practical training

## Installation

To set up and run the Practical Training Management System on your local machine, follow these steps:

1. Clone the repository to your local environment:

```
git clone https://github.com/PTMS.git
```

2. Navigate to the project directory:

```
cd PTMS
```

3. Install the project dependencies using Composer:

```
composer install
```

4. Copy the `.env.example` file to create a new `.env` file:

```
cp .env.example .env
```

5. Generate an application key:

```
php artisan key:generate
```

6. Configure the database settings in the `.env` file, including the database connection, host, username, password, and database name.

7. Run the database migrations to set up the required tables:

```
php artisan migrate
```

8.  Seed the database with sample data:

```
php artisan db:seed
```

9. Serve the application locally:

```
php artisan serve
```
10. And run npm run dev Serve :

```
npm run dev
```

10. Access the application by visiting `http://localhost:8000` in your web browser.

## Setup and Run

Once the application is installed and running, follow these steps to set up and utilize the logbook management features:

1. Sign in as a student or supervisor using the provided login form.
   use username: a@gmail.com
       password: 12345678

2. As a student, you can add new logbook entries by navigating to the "Logbook" section and filling out the necessary details such as the date and activity description. Submit the logbook entry to save it.

3. Students can view and manage their submitted logbooks in the "My Logbooks" section. They can edit, delete, and download their logbook entries as required.

4. Supervisors have access to the supervisor dashboard, where they can review all the logbooks submitted by students. The dashboard provides a summary view of logbooks grouped by week number, displaying the last modification date and the start and end dates of each week.
   Access the supervisor dashboard from `http://localhost:8000/supervisor`

5. Supervisors can click on individual logbooks to view the details, including the student's name, submission date, logbook entries, and any attachments. They can provide feedback and comments to the students as necessary.

6. Notifications are sent to both students and supervisors when logbooks are submitted or when feedback/comments are received.
   
7. To access the organization dashboard go to `http://localhost:8000/signup` where you'll create an organization account and go to `http://localhost:8000/signin` and sign in

