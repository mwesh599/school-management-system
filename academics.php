<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JKUAT Academics</title>
    <link rel="stylesheet" href="academics.css">
</head>
<body>
    <header>
        <h1>JKUAT Academics</h1>
    </header>

    <section class="search-form">
        <h2>Search for Courses</h2>
        <form id="course-search-form">
            <label for="course">Select Course:</label>
            <select id="course" name="course" onchange="getCourseInfo(this.value)">
                <option value="">-- Select Course --</option>
                <option value="BSc IT">BSc IT</option>
                <option value="Diploma in Computer Science">Diploma in Computer Science</option>
                <option value="BBA">BBA</option>
                <!-- Add more options as needed -->
            </select>
        </form>
    </section>

    <section class="course-info">
        <h2>Course Information</h2>
        <div id="course-info-container"></div>
    </section>

    <script src="academics.js"></script>
</body>
</html>
