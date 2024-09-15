<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Computer Science Department</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; }
        h1 { color: #003366; }
        h2 { color: #0066cc; }
        .container { max-width: 800px; margin: auto; }
        form { margin-top: 20px; }
        label, input, textarea { display: block; margin-bottom: 10px; }
        input, textarea { width: 100%; padding: 8px; }
        button { background-color: #0066cc; color: white; padding: 10px 15px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact the Computer Science Department</h1>
        
        <h2>Get in Touch</h2>
        <p>We're here to answer any questions you may have about our programs, research opportunities, or general inquiries.</p>
        
        <h2>Contact Information</h2>
        <p>
            <strong>Address:</strong> 123 University Avenue, Cityville, State 12345, Country<br>
            <strong>Phone:</strong> +1 (555) 123-4567<br>
            <strong>Email:</strong> info@csuniversity.edu
        </p>
        
        <h2>Department Hours</h2>
        <p>Monday - Friday: 9:00 AM - 5:00 PM<br>
        Saturday - Sunday: Closed</p>
        
        <h2>Send Us a Message</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
        
        <h2>Connect With Us</h2>
        <p>Follow us on social media for the latest updates, events, and research highlights:</p>
        <ul>
            <li>Facebook: /CSUniversity</li>
            <li>Twitter: @CSUniversity</li>
            <li>LinkedIn: Computer Science University</li>
            <li>Instagram: @cs_university</li>
        </ul>
    </div>
</body>
</html>