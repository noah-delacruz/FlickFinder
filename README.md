# Flick Finder

An MVP app of [SceneIt](https://github.com/noah-delacruz/SceneIt) built with Laravel instead of MERN stack that allows users to search for movies by name using The Movie Database (TMDB) API. Flick Finder provides the ability to discover trending movies and saving favorites to a collection.

![image](https://github.com/user-attachments/assets/4daf5316-e29b-43bd-893a-090cad5d0934)


## Features

-   Movie search
-   View trending movies for today
-   Search results counter

## Tech Stack

-   **Frontend**: Blade with Tailwind CSS
-   **Backend**: Laravel (PHP Framework)
-   **API**: The Movie Database (TMDB) API
-   **Deployment**: Laravel Forge with DigitalOcean

## Getting Started

### Prerequisites

-   PHP (v8.1 or higher)
-   Composer (dependency manager for PHP)
-   TMDB API token (Get one at https://developer.themoviedb.org/docs/getting-started)

### Installation

1. Clone the repository

    ```bash
    git clone https://github.com/noah-delacruz/FlickFinder.git
    cd FlickFinder
    ```

2. Install PHP dependencies

    ```bash
    composer install
    ```

3. Add your TMDB credentials in the .env file:

    ```
    TMDB_API_TOKEN=your_api_token_here
    ```

4. Install frontend dependencies

    ```bash
    npm install
    ```

5. Build frontend assets with Vite

    ```bash
    npm run dev
    ```

6. Start the local server

    ```bash
    http://flickfinder.test
    ```
