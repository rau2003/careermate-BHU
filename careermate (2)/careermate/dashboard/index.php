<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Dashboard - CareerMate</title>
    <script>
        function logout() {
            if (confirm("Are you sure you want to log out?")) {
                window.location.href = 'logout.php';
            }
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard-container-unique">
        <div class="dashboard-unique">
            <div class="row">
                <div class="col-md-6 dashboard-item-unique">
                    <div class="card-unique">
                        <a href="#"><img src="images/News.png" alt="News Icon" class="dashboard-icon-unique"> News</a>
                    </div>
                </div>
                <div class="col-md-6 dashboard-item-unique">
                    <div class="card-unique">
                        <a href="#"><img src="images/syllabus.png" alt="Syllabus Icon" class="dashboard-icon-unique"> Syllabus</a>
                    </div>
                </div>
                <div class="col-md-6 dashboard-item-unique">
                    <div class="card-unique">
                        <a href="#"><img src="images/profile.png" alt="Progress Tracker Icon" class="dashboard-icon-unique"> Progress Tracker</a>
                    </div>
                </div>
                <div class="col-md-6 dashboard-item-unique">
                    <div class="card-unique">
                        <a href="courses.php"><img src="images/profile.png" alt="courses Icon" class="dashboard-icon-unique"> Courses</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
