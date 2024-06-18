# uDub Search Project

## Overview

uDub Search is a project aimed at creating a comprehensive and efficient search system tailored for the University of Washington community. It leverages a combination of PHP for server-side processing and Python for running the core search logic.

## File Structure

The project consists of three main files:

- `server1.php`: Handles server-side requests and responses.
- `search1.php`: Manages the search queries and interactions with the user.
- `query.py`: Executes the core search logic and algorithms.

## Prerequisites

Before running this project, ensure you have the following installed:

- PHP 7.0 or higher
- Python 3.6 or higher
- Apache or any other compatible web server

## Setup Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/udub-search.git
   cd udub-search
   ```

2. **Install Python Dependencies:**
   ```bash
   pip install -r requirements.txt
   ```

3. **Configure the Web Server:**
   - Ensure that your web server is set up to serve PHP files.
   - Place `server1.php` and `search1.php` in the appropriate directory of your web server (e.g., `/var/www/html` for Apache).

4. **Run the Python Script:**
   - Ensure that `query.py` is executable.
   - You can run the script manually or set it up as a background service, depending on your requirements.

## Usage

1. **Accessing the Search Interface:**
   - Navigate to the URL where your web server is hosting the project, e.g., `http://localhost/search1.php`.

2. **Performing a Search:**
   - Use the search form provided in `search1.php` to input your query.
   - The query will be processed by `query.py`, and results will be displayed on the same page.

## File Descriptions

### server1.php

This file handles incoming HTTP requests, manages sessions, and routes requests to the appropriate components. It acts as the backbone of the web server, ensuring smooth communication between the front-end and back-end components.

### search1.php

This file contains the front-end logic for the search interface. It handles user input, displays the search results, and interacts with `server1.php` to fetch the necessary data.

### query.py

This Python script contains the core logic for processing search queries. It performs the necessary computations, filters, and ranking to generate relevant search results. It interacts with the PHP files to receive queries and send back results.

## Contributing

We welcome contributions to improve uDub Search. Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature-name`.
5. Submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact

For any questions or feedback, please contact Aditya at [your-email@example.com].

---
