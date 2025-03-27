function getCourseInfo(course) {
    // Dummy data for course information (replace with actual data)
    const courseData = {
        "BSc IT": "Bachelor of Science in Information Technology - Duration: 4 years",
        "Diploma in Computer Science": "Diploma in Computer Science - Duration: 2 years",
        "BBA": "Bachelor of Business Administration - Duration: 4 years"
        // Add more course information as needed
    };

    const courseInfoContainer = document.getElementById("course-info-container");
    if (courseData[course]) {
        courseInfoContainer.textContent = courseData[course];
    } else {
        courseInfoContainer.textContent = "Course information not available.";
    }
}
