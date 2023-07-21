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
    select,
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
  </style>
</head>
<body>
  <div class="container">
    <h1>User Registration</h1>
    <form id="registrationForm">
      <label for="name">Name:</label>
      <input type="text" id="name" required>

      <label for="branch">Branch:</label>
      <input type="text" id="branch" required>

      <label for="semester">Semester:</label>
      <input type="text" id="semester" required>

      <label for="rollNumber">Roll Number:</label>
      <input type="text" id="rollNumber" required>

      <label for="email">Email:</label>
      <input type="email" id="email" required>

      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" required>

      <label for="interest">Subject of Interest:</label>
      <select id="interest" required>
        <option value="">Select an option</option>
        <option value="Technical">Technical</option>
        <option value="Cultural">Cultural</option>
        <option value="Both">Both</option>
      </select>

      <label for="experience">Past Experience:</label>
      <textarea id="experience"></textarea>

      <label for="signature">Signature:</label>
      <input type="text" id="signature" required>

      <button type="submit">Submit</button>
    </form>
  </div>

  <script>
    // JavaScript code to handle form submission
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting

      // Get form values
      const name = document.getElementById('name').value;
      const branch = document.getElementById('branch').value;
      const semester = document.getElementById('semester').value;
      const rollNumber = document.getElementById('rollNumber').value;
      const email = document.getElementById('email').value;
      const contactNumber = document.getElementById('contactNumber').value;
      const interest = document.getElementById('interest').value;
      const experience = document.getElementById('experience').value;
      const signature = document.getElementById('signature').value;

      // Perform further processing or validation
      // You can send the form data to a server or display a success message

      // Reset the form
      form.reset();
    });
  </script>
</body>
</html>
