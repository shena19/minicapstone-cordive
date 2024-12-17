-- User table with role for authentication
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tourist spots table to store tourist locations
CREATE TABLE IF NOT EXISTS tourist_spots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    barangay VARCHAR(100) NOT NULL,
    is_featured BOOLEAN DEFAULT FALSE
);

-- Recommendations table for user feedback or suggestions
CREATE TABLE IF NOT EXISTS reccommendation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    spot_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,        -- Title for the recommendation
    description TEXT,                   -- Description for the recommendation
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (spot_id) REFERENCES tourist_spots(id) ON DELETE CASCADE
);

-- Tourist guides table linking users to specific tourist spots
CREATE TABLE IF NOT EXISTS tourist_guide (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    spot_id INT NOT NULL,
    languages VARCHAR(255),
    experience_years INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (spot_id) REFERENCES tourist_spots(id)
);


CREATE TABLE history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT
);
CREATE TABLE IF NOT EXISTS reccommendation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    spot_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,        -- Title for the recommendation
    description TEXT,                   -- Description for the recommendation
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (spot_id) REFERENCES tourist_spots(id) ON DELETE CASCADE
);