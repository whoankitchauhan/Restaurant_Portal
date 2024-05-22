# AIT Restaurant Website

This project is a website for the AIT Restaurant. The website includes sections for showcasing different types of food, the menu, testimonials, and a contact form for user feedback.

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgments](#acknowledgments)

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

- Web Server (like Apache or Nginx)
- PHP (7.0 or above)
- MySQL Database

### Installation

1. Clone the repository to your local machine:

   ```sh
   git clone https://github.com/your-username/ait-restaurant.git
   ```

2. Navigate to the project directory:

   ```sh
   cd ait-restaurant
   ```

3. Set up your database:

   - Create a new MySQL database.
   - Import the SQL schema file located in the `database` folder to set up the required tables.

4. Update the database connection file `database_f.php` with your database credentials.

5. Make sure your server root directory points to the project folder.

### Usage

1. Start your web server.

2. Open your browser and navigate to `http://localhost/`.

3. You should see the AIT Restaurant homepage.

## Features

- **Homepage**: Introduction and navigation to other sections of the website.
- **About Section**: Information about the restaurant.
- **Types of Food**: Different categories of food with links to external resources.
- **Menu**: Detailed menu with images, descriptions, prices, and order links.
- **Testimonials**: Customer reviews with star ratings.
- **Feedback Form**: A form for customers to submit their feedback, currently redirects to a Google Form for submission.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Acknowledgments

- [Font Awesome](https://fontawesome.com) for icons
- [Google Fonts](https://fonts.google.com) for fonts
- [Unsplash](https://unsplash.com) for free images
