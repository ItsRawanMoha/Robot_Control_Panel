<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROBX24 Controlling System</title>
    <link href="https://cdn.jsdelivr.net/npm/pico.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header-container div {
            font-weight: bold;
            color: #003366; 
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 2rem;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .status {
            margin-top: 20px;
            padding: 10px;
            background: #e7f5ff;
            border: 1px solid #b6dfff;
            border-radius: 5px;
        }
        .title {
            font-size: 1.5rem;
            background: linear-gradient(to right, #6fd6ff, #5b8dff);
            -webkit-background-clip: text;
            color: transparent;
        }
        .subtitle {
            font-style: italic;
            color: #003366;
        }
    </style>
</head>
<body>
<div class="header-container">
    <div>Smart Methods</div>
    <div>Rawan Mohammed S AlGhmadi</div>
    <div><img src="img/robot-icon.png" alt="Robot Icon" width="125" height="100" /></div>
</div>
<div class="container">
    <h2>ROBX24 Command Status</h2>
    <?php
    // Database credentials
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'robx24';

    // Establish connection
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        echo "<div class='status'>Connection status: Failed to connect - " . $conn->connect_error . "</div>";
    } else {
        echo "<div class='status'>Connection status: Successfully connected</div>";

        // Fetch the latest command from the database
        $sql = "SELECT movements FROM robx24_controlling_system ORDER BY ID DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='status'>Latest Command: " . htmlspecialchars($row["movements"]) . "</div>";
            }
        } else {
            echo "<div class='status'>No commands found</div>";
        }
    }

    $conn->close();
    ?>
</main>
</body>
</html>