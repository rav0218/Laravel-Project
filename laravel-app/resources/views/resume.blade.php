<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim - Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-top: 10px;
        }
        h2 {
            font-size: 24px;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section p {
            margin: 5px 0;
        }
        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .contact-info div {
            margin: 5px 0;
        }
        .skills ul {
            list-style-type: none;
            padding: 0;
        }
        .skills ul li {
            background-color: #dcdddd;
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;

        width: 95%;

        }
        img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            display: block;
            margin: 0 auto 20px;
        }
        .skills p.skill-item {
    background-color: #dcdddd;
    padding: 5px; 
    border-radius: 5px; 
    margin: 5px 0; 
}

    </style>
</head>
<body>
    <div class="container">

                <!-- My image -->
                <img src="/DelaRosa,Ravinal.png" alt="Ravinal Dela Rosa">
    
        <h1>{{ $informations->name }}</h1>
        
        <div class="contact-info">
            <div>
                <Address>{{ $informations->address }}</Address>
                <p>{{ $informations->email }}</p>
                <p>Phone: {{ $informations->phone }}</p>
                
            </div>

        </div>

        <!-- Objectives -->
        <div class="section">
            <h2>Objectives</h2>
            <p>{{ $informations->objectives }}
                </p>
        </div>

        <!-- Personal Info -->
        <div class="section personal-info">
            <h2>Personal Information</h2>
            <ul>
                <p>Date of Birth:{{ $informations->birthday }}<p>
                <p>Place of Birth: {{ $informations->birthplace }}<p>
                <p>Age: {{ $informations->age }}</p>
                <p>Religion: {{ $informations->religion }}<p>
                <p>Civil Status: {{ $informations->civil_status }}</p>
                <p>Citizenship: {{ $informations->citizenship }}</p>

            </ul>
        </div>
<!-- Education -->
<div class="section education">
    <h2>Education</h2>
    @php
        // Split the education entries by commas
        $educationsArray = explode(',', $informations->education); 
    @endphp
    @foreach ($educationsArray as $education)
        @php
            // Further split each education entry into parts
            $parts = explode('-', $education); // Split by the dash
            $degree = trim($parts[0]);
            $institution = isset($parts[1]) ? trim($parts[1]) : '';
            $year = isset($parts[2]) ? trim($parts[2]) : '';
        @endphp
        <p><strong>{{ $degree }}</strong></p> 
        <p>
            {{ $institution }} 
            @if($year) - {{ $year }} @endif
        </p>
        <br /> 
    @endforeach
</div>
<!-- Skills -->
<div class="section skills">
    <h2>Skills</h2>
    @php
        $skillsArray = explode(',', $informations->skills); 
    @endphp
    @foreach ($skillsArray as $skill)
        <p class="skill-item">• {{ trim($skill) }}</p> 
    @endforeach
    <br /> 
</div>

<!-- Awards and Achievements -->
<div class="section awards-and-achievements">
    <h2>Awards and Achievements</h2>
    @php
        $awardsArray = explode(',', $informations->awards);
    @endphp
    @foreach ($awardsArray as $award)
        <p>• <strong>{{ trim($award) }}</strong></p> 
    @endforeach
</div>


    </div>
</body>
</html>
