<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube-Inspired Homepage</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ff0000;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .search-bar {
            flex: 1;
            display: flex;
            margin: 0 20px;
        }
        .search-bar input {
            width: 100%;
            padding: 8px;
            border-radius: 4px 0 0 4px;
            border: 1px solid #ccc;
            outline: none;
        }
        .search-bar button {
            padding: 8px 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }
        .header-icons {
            display: flex;
            gap: 15px;
        }
        
        /* Main Content Styles */
        .main-content {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .video-card {
            width: 240px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .video-card:hover {
            transform: scale(1.05);
        }
        .thumbnail {
            width: 100%;
            height: 135px;
            background-color: #ddd;
        }
        .video-info {
            padding: 10px;
        }
        .video-title {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        .video-details {
            font-size: 12px;
            color: #666;
            margin-top: 4px;
        }
        
        /* Footer Styles */
        footer {
            padding: 20px;
            text-align: center;
            background-color: #f1f1f1;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="logo">MyTube</div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
        <div class="header-icons">
            <a href="#">Login</a>
            <a href="#">Notifications</a>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="main-content">
        <!-- Video Card Template -->
        <div class="video-card">
            <div class="thumbnail"></div>
            <div class="video-info">
                <h3 class="video-title">Sample Video Title</h3>
                <p class="video-details">Channel Name • 1.2M views • 3 days ago</p>
            </div>
        </div>

        <!-- Add more video cards as needed -->
        <div class="video-card">
            <div class="thumbnail"></div>
            <div class="video-info">
                <h3 class="video-title">Another Video Title</h3>
                <p class="video-details">Another Channel • 500K views • 1 week ago</p>
            </div>
        </div>

        <!-- Add more video cards in a similar way for a grid layout -->
    </div>

    <!-- Footer Section -->
    <footer>
        © 2024 MyTube. All rights reserved.
    </footer>

</body>
</html>
