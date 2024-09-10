# Document Upload System

This project allows users to upload documents to the server and store the file information (including the username and a caption) in a MySQL database. The file upload system includes form validation, file type restrictions, and a file size limit. It uses PHP and MySQL for backend operations and SweetAlert for user notifications.

## Features

- Users can upload files (image files and PDFs).
- File type and size validation (up to 5MB).
- SweetAlert notifications for success and error messages.
- Files are stored on the server and file details are saved in the MySQL database.

## Requirements

- PHP 7 or higher
- MySQL
- Web server (Apache, Nginx, etc.)
- SweetAlert (included via CDN in the HTML)

## Table Structure

The project uses the following database table:

### `documents`

| Column     | Data Type | Description                         |
|------------|------------|-------------------------------------|
| id         | INT        | Primary key (auto-incremented).     |
| username   | VARCHAR(50)| Username of the user who uploaded the document. |
| caption    | VARCHAR(100)| Caption or document description.    |
| file_path  | TEXT       | Path to the uploaded file on the server. |
| created_at | TIMESTAMP  | Time when the file was uploaded.    |

## Installation and Setup

1. **Clone the Repository** (or download the project files):
   ```bash
   git clone https://github.com/your-username/document-upload-system.git
