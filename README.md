# Single Page Digital Resume

A modern, responsive digital resume built with Laravel 12 and Tailwind CSS. This project creates a beautiful, single-page resume website that displays professional information in an elegant, mobile-friendly format.
Live demo: [https://phancuong3107.xyz/](https://phancuong3107.xyz/)
## 🚀 Features

- **Modern Design**: Clean, professional layout with gradient backgrounds and smooth animations
- **Responsive**: Fully responsive design that works on all devices
- **JSON-Based Data**: Resume data stored in JSON format for easy editing
- **Caching**: Built-in caching system for optimal performance
- **PDF Download**: Download resume as PDF functionality
- **Component-Based**: Modular Blade components for maintainable code
- **Type-Safe**: Strongly typed PHP data objects with readonly properties

## 🛠️ Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Tailwind CSS 4.0, Blade Templates
- **Build Tool**: Vite
- **Testing**: PHPUnit
- **Data Format**: JSON with typed PHP objects

## 📁 Project Structure

```
single-page-digital-resume/
├── app/
│   ├── DataObjects/          # Type-safe data objects
│   │   ├── Resume.php        # Main resume data object
│   │   ├── Basics.php        # Basic information
│   │   ├── WorkEntry.php     # Work experience entries
│   │   ├── Skill.php         # Skills with levels
│   │   └── ...               # Other data objects
│   ├── Http/Controllers/
│   │   └── ResumeController.php
│   └── Models/
├── resources/
│   ├── views/
│   │   ├── resume.blade.php  # Main resume template
│   │   └── components/       # Reusable Blade components
│   ├── css/
│   └── js/
├── storage/
│   └── resume/
│       └── resume.json       # Resume data file
├── tests/
│   └── Feature/
│       └── ResumeControllerTest.php
└── public/
    └── storage/
        └── CV_PhanTanCuong.pdf
```

## 🚀 Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm
- Git

### Installation

1. **Clone the repository**

   ```bash
   git clone <repository-url>
   cd single-page-digital-resume
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install Node.js dependencies**

   ```bash
   npm install
   ```

4. **Environment setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Build assets**

   ```bash
   npm run build
   ```

6. **Start the development server**

   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` to see my resume!

## 📝 Customizing my Resume

### 1. Update Resume Data

Edit the `storage/resume/resume.json` file with my information:

```json
{
  "basics": {
    "name": "my Name",
    "label": "my Professional Title",
    "image": "/images/my-photo.jpg",
    "email": "my.email@example.com",
    "phone": "my Phone Number",
    "summary": "my professional summary...",
    "location": {
      "city": "my City",
      "region": "my Region",
      "countryCode": "US"
    },
    "profiles": [
      {
        "network": "LinkedIn",
        "url": "https://linkedin.com/in/myprofile"
      }
    ]
  },
  "work": [
    {
      "name": "Company Name",
      "position": "my Position",
      "startDate": "2023-01-01",
      "endDate": "2024-01-01",
      "summary": "Job description...",
      "highlights": ["Achievement 1", "Achievement 2"]
    }
  ],
  "skills": [
    {
      "name": "Programming Languages",
      "level": "Expert",
      "keywords": ["PHP", "JavaScript", "Python"]
    }
  ]
}
```

### 2. Add my Profile Image

1. Place my photo in `public/images/`
2. Update the `image` field in `resume.json`

### 3. Add my PDF Resume

1. Place my PDF resume in `public/storage/`
2. Update the filename in `ResumeController.php` if needed

## 🎨 Customization

### Styling

The project uses Tailwind CSS for styling. Key customization areas:

- **Colors**: Modify gradient classes in `resources/views/resume.blade.php`
- **Layout**: Adjust spacing and layout in Blade templates
- **Components**: Customize individual components in `resources/views/components/`

### Adding New Sections

1. Create a new data object in `app/DataObjects/`
2. Add it to the `Resume` class
3. Create a corresponding section in `resume.blade.php`
4. Update the JSON data structure

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test tests/Feature/ResumeControllerTest.php

# Run with coverage
vendor/bin/phpunit --coverage-html coverage
```

## 📦 Deployment

### Production Build

```bash
# Build assets for production
npm run build

# Clear and cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Variables

Set these in my production `.env`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://my-domain.com
```

## 🔧 Development

### Available Commands

```bash
# Development server with hot reload
npm run dev

# Build for production
npm run build

# Run tests
php artisan test

# Clear cache
php artisan cache:clear
```

### Code Structure

- **Data Objects**: Type-safe PHP classes in `app/DataObjects/`
- **Controllers**: Handle HTTP requests in `app/Http/Controllers/`
- **Views**: Blade templates in `resources/views/`
- **Components**: Reusable UI components
- **Assets**: CSS/JS in `resources/css/` and `resources/js/`

## 📋 Data Object Structure

The project uses strongly-typed data objects:

- `Resume`: Main container for all resume data
- `Basics`: Personal information and contact details
- `WorkEntry`: Work experience entries
- `Skill`: Skills with proficiency levels
- `Project`: Project portfolio entries
- `EducationEntry`: Educational background
- And more...

Each data object includes:

- Readonly properties for immutability
- Type hints for better IDE support
- `fromArray()` method for JSON deserialization

## 🎯 Features in Detail

### Caching System

- Resume data is cached for 24 hours
- Clear cache with `php artisan cache:clear` when updating data

### Responsive Design

- Mobile-first approach
- Flexible grid layouts
- Touch-friendly interactions

### Performance

- Optimized asset loading
- Efficient caching strategy
- Minimal JavaScript footprint

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make my changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com/)
- Styled with [Tailwind CSS](https://tailwindcss.com/)
- Icons from [Heroicons](https://heroicons.com/)

---

**Note**: Remember to clear the cache (`php artisan cache:clear`) after updating my resume data to see changes immediately.
