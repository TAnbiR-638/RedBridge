# RedBridge
## Blood Donation Management System

RedBridge is a comprehensive web-based blood donation management system built with Laravel. It connects blood donors with healthcare facilities and individuals in need, making blood donation more accessible and organized.

![Screenshot (422)](https://github.com/user-attachments/assets/e7d6be76-f1c3-42fb-9765-ce023bfa067f)

## ✨ Features

- **Donor Management**: Complete donor registration and profile management
- **Blood Group Tracking**: Organized tracking by blood types (A+, A-, B+, B-, AB+, AB-, O+, O-)
- **Admin Dashboard**: Comprehensive administrative interface for managing donors
- **User Authentication**: Secure login/registration system with role-based access
- **Photo Upload**: Donor photo management for easy identification
- **Search & Filter**: Quick search and filtering capabilities by location and blood group
- **Responsive Design**: Mobile-friendly interface built with Tailwind CSS
- **Real-time Updates**: Live updates using Livewire components

## 🛠️ Technologies Used

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates, Livewire, Alpine.js
- **Styling**: Tailwind CSS
- **Authentication**: Laravel Jetstream with Sanctum
- **Database**: MySQL/PostgreSQL compatible
- **File Storage**: Local file system for donor photos
- **Development**: Vite for asset compilation

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- npm or Yarn
- MySQL or PostgreSQL
- Web server (Apache/Nginx) or use Laravel's built-in server

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/TAnbiR-638/RedBridge.git
   cd RedBridge
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   # Create .env file (copy from .env if needed, or create manually)
   php artisan key:generate
   ```

5. **Configure Database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=redbridge
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run Migrations**
   ```bash
   php artisan migrate
   ```

7. **Create Storage Link**
   ```bash
   php artisan storage:link
   ```

8. **Build Assets**
   ```bash
   npm run build
   ```

## 🏃‍♂️ Running the Application

### Development Server
```bash
php artisan serve
```
The application will be available at `http://localhost:8000`

### Development with Hot Reload
In a separate terminal, run:
```bash
npm run dev
```

## 📖 Usage

### For Administrators
1. Login with admin credentials
2. Access the admin dashboard
3. Add new donors through the "Add Donor" interface
4. Manage existing donor records
5. View donor statistics and reports

### For Users
1. Browse available donors by blood group
2. Search donors by location
3. View donor contact information
4. Register as a new donor

## 🗂️ Project Structure

```
RedBridge/
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php    # Admin functionality
│   │   └── HomeController.php     # Main application logic
│   └── Models/
│       ├── Donor.php              # Donor model
│       └── User.php               # User model
├── database/
│   └── migrations/
│       └── create_donors_table.php # Donor database schema
├── resources/
│   └── views/
│       ├── admin/                 # Admin interface views
│       └── user/                  # User interface views
└── routes/
    └── web.php                    # Application routes
```

## 🔑 Key Routes

- `/` - Home page with donor listings
- `/home` - User dashboard (authenticated)
- `/add_donor_view` - Add new donor form (admin)
- `/upload_donor` - Process donor submission
- `/login` - User authentication
- `/register` - User registration

## 🤝 Contributing

We welcome contributions to RedBridge! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Development Guidelines
- Follow PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation as needed

## 🧪 Testing

Run the test suite:
```bash
php artisan test
```

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

If you encounter any issues or have questions:

- Create an issue on GitHub
- Contact the development team
- Check the documentation

## 🙏 Acknowledgments

- Laravel community for the amazing framework
- Tailwind CSS for the utility-first CSS framework
- Livewire for making Laravel development more interactive

---

**Made with ❤️ for the community to save lives through organized blood donation**
