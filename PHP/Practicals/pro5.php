<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .submitted-info {
      margin-top: 20px;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Registration</h1>
    <form id="registrationForm">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" required>

      <label for="middleName">Middle Name:</label>
      <input type="text" id="middleName">

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" required>

      <label for="address">Address:</label>
      <input type="text" id="address" required>

      <label for="email">Email:</label>
      <input type="email" id="email" required>

      <label for="mobileNumber">Mobile Number:</label>
      <input type="tel" id="mobileNumber" required>

      <label for="description">Description:</label>
      <textarea id="description" required></textarea>

      <button type="submit">Submit</button>
    </form>

    <div id="submittedInfo" class="submitted-info" style="display: none;">
      <h2>Submitted Information:</h2>
      <p id="infoOutput"></p>
    </div>
  </div>

  <script>
    // JavaScript code to handle form submission
    const form = document.getElementById('registrationForm');
    const submittedInfo = document.getElementById('submittedInfo');
    const infoOutput = document.getElementById('infoOutput');

    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting

      // Get form values
      const firstName = document.getElementById('firstName').value;
      const middleName = document.getElementById('middleName').value;
      const lastName = document.getElementById('lastName').value;
      const address = document.getElementById('address').value;
      const email = document.getElementById('email').value;
      const mobileNumber = document.getElementById('mobileNumber').value;
      const description = document.getElementById('description').value;

      // Build the GET request URL with form values
      const url = `submission.html?firstName=${encodeURIComponent(firstName)}&middleName=${encodeURIComponent(middleName)}&lastName=${encodeURIComponent(lastName)}&address=${encodeURIComponent(address)}&email=${encodeURIComponent(email)}&mobileNumber=${encodeURIComponent(mobileNumber)}&description=${encodeURIComponent(description)}`;

      // Display the submitted information
		infoOutput.textContent = `First Name: ${firstName}
		Middle Name: ${middleName}
		Last Name: ${lastName}
		Address: ${address}
		Email: ${email}
		Mobile Number: ${mobileNumber}
		Description: ${description}`;
		submittedInfo.style.display = 'block';

      // Redirect to the GET request URL
      window.location.href = url;
    });
  </script>
</body>
</html>
