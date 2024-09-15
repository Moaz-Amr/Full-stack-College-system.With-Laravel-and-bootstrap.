
# Full-stack-College-system.With-Laravel-and-bootstrap

This project is a comprehensive college management system built using Laravel and Bootstrap. It provides different interfaces for administrators, visitors, and students, aiming to facilitate the management of student information, departments, and courses in an efficient and user-friendly manner.
and with CRUD Operations
Without use any package.
## Key Features

### Student Management
- Add student information and photos
- Edit student data (available for administrators and students themselves)
- Temporarily delete student data with the ability to restore
- Permanently delete student data
- Display the name of the tablet received by each student

### Department Management
- View all departments in the college
- View the list of students in each department

### Course Management
- Register courses for students
- View registered courses for each student
- Enter and view student grades for each course

### User Interfaces
1. **Admin Interface**: Enables administrators to manage all aspects of the system
2. **Student Interface**: 
   - View personal information and photo
   - View the name of the received tablet
   - View registered courses and grades
   - Ability to edit some personal data
3. **Visitor Interface**: Provides general information about the college and departments

## Technical Requirements

- Programming Language: PHP
- Framework: Laravel
- User Interface: Bootstrap
- Database: MySQL

## How to Install the Project

1. Clone the repository:
   ```
   git clone https://github.com/Moaz-Amr/Full-stack-College-system.With-Laravel-and-bootstrap..git
   ```
2. Navigate to the project folder:
   ```
   cd Full-stack-College-system.With-Laravel-and-bootstrap.
   ```
3. Install dependencies:
   ```
   composer install
   npm install
   ```
4. Copy the environment file and modify it:
   ```
   cp .env.example .env
   ```
   Edit the `.env` file to set up your database connection.

5. Generate the application key:
   ```
   php artisan key:generate
   ```
6. Run migrations and seed initial data:
   ```
   php artisan migrate --seed
   ```
7. Start the local server:
   ```
   php artisan serve
   ```

## How to Use the System
Before run code you must.Add a vendor folder.
and you cane import a database file : laravel_g1.sql

1. **Login as Administrator**:
   - Use the default login credentials (you can change them later):
     - Email:moaz@gmail.com
     - password:12345678
   - From the dashboard, you can manage students, departments, and courses.

2. **Login as Student**:
   - Use the student ID and password provided by the administration.
   - You can view your personal information, registered courses, and grades.
   - You can edit some personal data such as phone number and email.

3. **Using the Visitor Interface**:
   - Visitors can browse general information about the college and departments with register.

## Contributing to the Project

We welcome your contributions to improve this project. Please follow these steps to contribute:

1. Fork the project
2. Create a new branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact

If you have any questions or suggestions, please open an issue in this repository or contact via email: moazamralsaid@gmail.com
