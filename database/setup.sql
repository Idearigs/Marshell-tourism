-- Marshel Tourism Review System Database Setup
-- Run this SQL script in phpMyAdmin or MySQL command line

CREATE DATABASE IF NOT EXISTS marshel_tourism;
USE marshel_tourism;

-- Table for tour packages
CREATE TABLE IF NOT EXISTS tour_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    package_name VARCHAR(100) NOT NULL,
    package_slug VARCHAR(100) NOT NULL UNIQUE,
    view_count INT DEFAULT 0,
    total_rating DECIMAL(3,2) DEFAULT 0.00,
    review_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table for reviews
CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    package_id INT NOT NULL,
    reviewer_name VARCHAR(100) NOT NULL,
    reviewer_email VARCHAR(150) NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    review_text TEXT NOT NULL,
    comfort_rating INT DEFAULT 5 CHECK (comfort_rating >= 1 AND comfort_rating <= 5),
    destination_rating INT DEFAULT 5 CHECK (destination_rating >= 1 AND destination_rating <= 5),
    accommodation_rating INT DEFAULT 5 CHECK (accommodation_rating >= 1 AND accommodation_rating <= 5),
    transport_rating INT DEFAULT 5 CHECK (transport_rating >= 1 AND transport_rating <= 5),
    is_approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (package_id) REFERENCES tour_packages(id) ON DELETE CASCADE
);

-- Table for view tracking (optional - for more detailed analytics)
CREATE TABLE IF NOT EXISTS page_views (
    id INT AUTO_INCREMENT PRIMARY KEY,
    package_id INT NOT NULL,
    visitor_ip VARCHAR(45),
    user_agent TEXT,
    viewed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (package_id) REFERENCES tour_packages(id) ON DELETE CASCADE
);

-- Insert initial tour packages
INSERT INTO tour_packages (package_name, package_slug, view_count) VALUES
('Jewels of Ceylon Grand Tour', 'jewels-of-ceylon-grand-tour', 1256),
('Sacred Ceylon Wellness Retreat', 'sacred-ceylon-wellness-retreat', 892),
('Ceylon Discovery Explorer', 'ceylon-discovery-explorer', 4892),
('Paradise Coastal Adventure', 'paradise-coastal-adventure', 2143),
('Buddhist Cultural Visit', 'buddhist-cultural-visit', 1567),
('Cool Relaxing Visit', 'cool-relaxing-visit', 1956)
ON DUPLICATE KEY UPDATE
package_name = VALUES(package_name),
view_count = VALUES(view_count);

-- Add some sample reviews (you can remove these later)
INSERT INTO reviews (package_id, reviewer_name, reviewer_email, rating, review_text, comfort_rating, destination_rating, accommodation_rating, transport_rating, is_approved) VALUES
(1, 'John Smith', 'john@example.com', 5, 'Amazing tour! Everything was perfectly organized and the guides were very knowledgeable. Sri Lanka is truly a beautiful country.', 5, 5, 4, 5, TRUE),
(1, 'Sarah Johnson', 'sarah@example.com', 4, 'Great experience overall. The cultural sites were breathtaking and the accommodation was comfortable. Highly recommend!', 4, 5, 4, 4, TRUE),
(3, 'Mike Brown', 'mike@example.com', 5, 'Perfect introduction to Sri Lanka! As first-time visitors, this tour gave us a comprehensive view of the country. Excellent service from Marshel Tourism.', 5, 5, 5, 5, TRUE);

-- Update total ratings and review counts
UPDATE tour_packages SET
    total_rating = (SELECT AVG(rating) FROM reviews WHERE package_id = tour_packages.id AND is_approved = TRUE),
    review_count = (SELECT COUNT(*) FROM reviews WHERE package_id = tour_packages.id AND is_approved = TRUE);