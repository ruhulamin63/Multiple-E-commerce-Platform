# Multiple-E-commerce-Platform

A modern, full-featured e-commerce platform built with Laravel 10 and Vue.js 2, featuring a comprehensive admin panel, multi-vendor support, and extensive customization options.

## 🚀 Features

### Core Features
- **Multi-vendor marketplace** with seller registration and management
- **Complete product management** with categories, brands, and variations
- **Advanced shopping cart** with wishlist and comparison features
- **Multiple payment gateways** (PayPal, Stripe, Razorpay, etc.)
- **Order management** with tracking and invoice generation
- **User authentication** with social login options
- **Multi-language support** with RTL compatibility
- **Multi-currency system** with automatic conversion
- **SEO optimized** with meta tags and social sharing

### Advanced Features
- **PWA (Progressive Web App)** support
- **Video shopping** functionality
- **Affiliate system** with commission tracking
- **Reward points** and wallet system
- **Live chat integration** (Tawk.to, Facebook Messenger)
- **Real-time notifications** with Pusher
- **Advanced filtering** and search capabilities
- **Mobile-responsive design**
- **Analytics and reporting**

## 📋 Requirements

- **PHP**: 8.1 or higher
- **Laravel**: 10.x
- **Node.js**: 16.x or higher
- **NPM**: 8.x or higher
- **MySQL**: 5.7 or higher / PostgreSQL: 12 or higher
- **Composer**: 2.x
- **Web Server**: Apache/Nginx

## 🛠️ Installation

### 1. Clone the Repository
```bash
git clone https://github.com/ruhulamin63/Multiple-E-commerce-Platform.git
cd Multiple-E-commerce-Platform
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
```bash
# Configure your database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yoori_ecommerce
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations and seeders
php artisan migrate --seed
```

### 6. Storage Setup
```bash
# Create storage link
php artisan storage:link

# Set proper permissions (Linux/Mac)
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### 7. Build Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

### 8. Start the Application
```bash
# Start Laravel development server
php artisan serve

# In another terminal, start Vite for hot reloading (development)
npm run dev
```

## 🔧 Configuration

### Environment Variables
Key environment variables to configure:

```env
# Application
APP_NAME="Multiple-E-commerce-Platform"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yoori_ecommerce
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password

# Payment Gateways
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_CLIENT_SECRET=your_paypal_secret

# Social Login
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
FACEBOOK_CLIENT_ID=your_facebook_client_id
FACEBOOK_CLIENT_SECRET=your_facebook_client_secret

# Pusher (Real-time notifications)
PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_key
PUSHER_APP_SECRET=your_pusher_secret
PUSHER_APP_CLUSTER=your_pusher_cluster
```

### Admin Panel Access
After installation, access the admin panel:
- URL: `https://yourdomain.com/admin`
- Default credentials will be created during seeding

## 🏗️ Architecture

### Backend (Laravel 10)
- **MVC Architecture** with Repository Pattern
- **RESTful APIs** for frontend communication
- **Service Layer** for business logic
- **Trait-based** helper functions
- **Event-driven** architecture for notifications
- **Queue system** for background jobs

### Frontend (Vue.js 2 + Vite)
- **Single Page Application (SPA)** architecture
- **Vue Router** for client-side routing
- **Vuex** for state management
- **Component-based** UI structure
- **Responsive design** with Bootstrap 5
- **Progressive Web App** capabilities

### Database Structure
- **Users & Authentication**: User management with roles
- **Products**: Categories, brands, variations, inventory
- **Orders**: Shopping cart, checkout, order tracking
- **Vendors**: Multi-vendor marketplace support
- **Content**: Pages, blogs, banners, sliders
- **Settings**: Configuration and customization options

## 📱 API Documentation

### Authentication Endpoints
```
POST /api/auth/login
POST /api/auth/register
POST /api/auth/logout
POST /api/auth/refresh
```

### Product Endpoints
```
GET /api/products
GET /api/products/{id}
GET /api/categories
GET /api/brands
```

### Cart & Order Endpoints
```
POST /api/cart/add
GET /api/cart
POST /api/checkout
GET /api/orders
```

## 🔌 Integrations

### Payment Gateways
- PayPal
- Stripe
- Razorpay
- SSLCommerz
- Mollie
- Mercado Pago
- Iyzico

### Social Authentication
- Google OAuth
- Facebook Login
- Twitter OAuth

### Communication
- Tawk.to Live Chat
- Facebook Messenger
- Email Notifications
- SMS Integration

### Analytics & Tracking
- Google Analytics
- Facebook Pixel
- Custom Event Tracking

## 🚀 Deployment

### Production Deployment

1. **Server Setup**
   ```bash
   # Upload files to server
   # Set up web server (Apache/Nginx)
   # Configure SSL certificate
   ```

2. **Environment Configuration**
   ```bash
   # Set production environment variables
   APP_ENV=production
   APP_DEBUG=false
   
   # Optimize Laravel
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Build Assets**
   ```bash
   npm run build
   ```

4. **Database Migration**
   ```bash
   php artisan migrate --force
   ```

### Docker Deployment
```dockerfile
# Use the official PHP image
FROM php:8.1-fpm

# Install dependencies and configure
# ... (Docker configuration)
```

## 📊 Performance Optimization

### Laravel Optimization
- **Caching**: Redis/Memcached for sessions and cache
- **Queue Workers**: Background job processing
- **Database Optimization**: Proper indexing and query optimization
- **Image Optimization**: Automatic image compression and WebP conversion

### Frontend Optimization
- **Code Splitting**: Automatic chunk splitting with Vite
- **Lazy Loading**: Component and route-based lazy loading
- **Asset Optimization**: Minification and compression
- **CDN Integration**: Static asset delivery

## 🔒 Security Features

- **CSRF Protection**: Built-in Laravel CSRF tokens
- **XSS Prevention**: Input sanitization and output escaping
- **SQL Injection Protection**: Eloquent ORM and prepared statements
- **Authentication**: Secure user authentication with Sentinel
- **Authorization**: Role-based access control
- **Rate Limiting**: API and form submission rate limiting
- **Security Headers**: HTTPS, CSP, and other security headers

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

### Frontend Testing
```bash
# Run JavaScript tests
npm run test

# Run E2E tests
npm run test:e2e
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Development Guidelines
- Follow PSR-12 coding standards for PHP
- Use ESLint configuration for JavaScript
- Write comprehensive tests for new features
- Update documentation for API changes
- Follow semantic versioning for releases

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

### Documentation
- [API Documentation](docs/api.md)
- [Deployment Guide](docs/deployment.md)
- [Customization Guide](docs/customization.md)

### Getting Help
- **GitHub Issues**: Report bugs and request features
- **Discussions**: Community support and questions
- **Email**: ruhulamin63@gmail.com

### Changelog
See [CHANGELOG.md](CHANGELOG.md) for version history and updates.

## 🙏 Acknowledgments

- Laravel Framework team
- Vue.js community
- Bootstrap team
- All open-source contributors

---

**Built with ❤️ by [Ruhul Amin](https://github.com/ruhulamin63)**