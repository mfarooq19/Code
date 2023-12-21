## Setup Instructions

1. Clone the repository: `git clone https://github.com/rajafawady/website.git`
2. Install Dependencies: Run `composer install`
3. Generate Application Key: Execute `php artisan key:generate`
4. Configure Database: Update settings in the .env file
5. Create Database: Run `php artisan migrate`
6. Start Laravel Development Server: Launch with `php artisan serve`

## Objectives

1. Streamline project evaluation.
2. Provide a user-friendly interface for evaluators and administrators.
3. Randomly assign projects based on preferences.
4. Ensure security and confidentiality of evaluation results.

## Features

1. User Authentication: Admin, guests, and students with specific roles.
2. Evaluator Preferences: Allow guests to set project preferences.
3. Random Assignment: Match projects to evaluators based on keywords.
4. Project Evaluation: Evaluate projects on a scale of 1-10.
5. Results Visibility: Restrict access to administrators.

## Technologies Used

- Laravel: PHP web application framework.
- MySQL: Relational database management system.
- Tailwind CSS: Utility-first CSS framework.

## System Architecture

- Follows MVC (Model-View-Controller) architecture for maintainability and scalability.

## Database Design

- Tables for users, projects, evaluations, and guest_preferences.
- Relationships for data integrity and efficient querying.

## User Roles and Permissions

1. Admin: Manages projects and views evaluation results.
2. Guest: Evaluates assigned projects.
3. Students: Adds FYP for evaluation.
   - Each role has specific permissions and access levels.
