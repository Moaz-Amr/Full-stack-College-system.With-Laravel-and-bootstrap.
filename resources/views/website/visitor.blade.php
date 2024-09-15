<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Computer Science Department</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; }
        .navbar { background-color: #003366; padding: 1rem; }
        .navbar ul { list-style-type: none; padding: 0; margin: 0; display: flex; justify-content: center; }
        .navbar li { margin: 0 15px; }
        .navbar a { color: white; text-decoration: none; font-weight: bold; }
        .container { max-width: 800px; margin: auto; padding: 20px; }
        h1 { color: #003366; }
        h2 { color: #0066cc; }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            
            <li><a href="#about">About Us</a></li>
            {{-- <li><a href="#programs">Programs</a></li> --}}
            
            <li><a href="{{route("contact")}}">Contact</a></li>
            <li><a href="{{route('ShowStudentData')}}">my student data</a></li>
        </ul>
    </nav>
    <body>
        <div class="container">
            <h1>About the Computer Science Department</h1>
            
            <h2>Our Mission</h2>
            <p>The Computer Science Department is dedicated to advancing the frontiers of computing through innovative research and providing world-class education to future leaders in the field. We strive to create an inclusive environment that fosters creativity, critical thinking, and technological innovation.</p>
            
            <h2>Our Vision</h2>
            <p>To be a globally recognized center of excellence in computer science education and research, driving technological advancements and preparing students to shape the digital future.</p>
            
            <h2>Programs Offered</h2>
            <ul>
                <li>Bachelor of Science in Computer Science</li>
                <li>Master of Science in Computer Science</li>
                <li>Ph.D. in Computer Science</li>
                <li>Certificate Programs in Specialized Areas</li>
            </ul>
            
            <h2>Research Areas</h2>
            <p>Our faculty and students are engaged in cutting-edge research across various domains, including:</p>
            <ul>
                <li>Artificial Intelligence and Machine Learning</li>
                <li>Cybersecurity and Privacy</li>
                <li>Data Science and Big Data Analytics</li>
                <li>Human-Computer Interaction</li>
                <li>Computer Networks and Distributed Systems</li>
                <li>Software Engineering and Programming Languages</li>
            </ul>
            
            <h2>Facilities</h2>
            <p>Our department boasts state-of-the-art facilities, including:</p>
            <ul>
                <li>Advanced Computing Laboratories</li>
                <li>Virtual Reality and Augmented Reality Lab</li>
                <li>Robotics and AI Research Center</li>
                <li>High-Performance Computing Cluster</li>
            </ul>
            
            <h2>Industry Partnerships</h2>
            <p>We maintain strong ties with leading technology companies, providing our students with internship opportunities, collaborative research projects, and access to the latest industry trends.</p>
            
            <h2>Join Us</h2>
            <p>Whether you're a prospective student, researcher, or industry partner, we invite you to explore the exciting opportunities at our Computer Science Department. Together, let's shape the future of technology!</p>
        </div>
    
</body>
</html>