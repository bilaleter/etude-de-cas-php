<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="icon.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Back office</title>
  <style>
     @keyframes colorchange {
    0% { background-color: blue; }
    50% { background-color: orange; }
    100% { background-color: blue; }
  }

  input[type="submit"] {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    cursor: pointer;
    background-color: black; /* Initial background color */
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    animation: colorchange 3s infinite; /* Color changing animation */
    transition: transform 0.2s ease;
  }

  input[type="submit"]:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
  }
     @keyframes slideBackground {
      0% { background-position: 0 0; }
      50% { background-position: 100% 100%; }
    }
    
    body {
      text-align: center;
      background-image: url('/Backoffice/backgrounf back1.png');
      background-size: contain;
      background-attachment: fixed;
      background-position: 0 0;
      animation: slideBackground 3s ease infinite;
      scroll-behavior: smooth;
    }
    
    @keyframes colorChange {
      0% { color: brown; } 
      25% { color: black; } 
      50% { color: white; } 
      75% { color: beige; } 
      100% { color: brown; } 
    }
    
    label {
      font-family: 'Arial', sans-serif; 
      color: white;
      margin-bottom: 5px;
    }
    
    h1 {
      animation: colorChange 5s infinite; 
    }
    
    .form-container {
      border: 2px solid none; 
      border-radius: 10px; 
      padding: 20px; 
      max-width: 350px; 
      margin: 0 auto; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
      background-color: rgba(249, 249, 249, 0); 
    }
    
    input, select {
      width: 90%; 
      padding: 10px; 
      margin: 10px 0; 
      border-radius: 5px; 
      border: 1px solid #ddd; 
    }
    
    input[type="checkbox"] {
      margin-left: 10px; 
      transform: scale(1.2);
    }
    
    input[type="submit"] {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Add a Travel Offer</h1>
  <div class="form-container">
    <form method="POST" action="Verification.php">
      <label for="title">Title:</label>
      <br>
      <input type="text" placeholder="ex: Title" minlength="3" id="title" name="title" required>
      <br>

      <label for="destination">Destination:</label>
      <br>
      <input type="text" placeholder="ex: Tunisie" pattern="[A-Za-z\s]{3,}" id="destination" name="destination" required>
      <br>

      <label for="departure">Departure Date:</label>
      <br>
      <input type="date" id="departure" name="departure" required>
      <br>

      <label for="return">Return Date:</label>
      <br>
      <input type="date" id="return" name="return" required>
      <br>

      <label for="price">Price:</label>
      <br>
      <input type="number" placeholder="ex: 400" step="0.01" min="0" id="price" name="price"  required>
      <br>

      <label for="available">Availability:</label>
      <input type="checkbox" id="avai" name="avai" value="1">
      <br><br>

      <label for="category">Category:</label>
      <br>
      <select name="category" id="category" required>
        <option value="Adventure">Adventure</option>
        <option value="Culture">Culture</option>
        <option value="Joy">Joy</option>
      </select>
      <br><br>

      <input type="submit" value="Add offer">
    </form>
  </div>
</body>
</html>