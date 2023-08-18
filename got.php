<!DOCTYPE html>
<html>
<head>
    <title>Enter Students Results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .center{
            width: 450px;
            margin: 0 auto;
            
        }
        .text{
            background: red;
            width: 50px;
            height: 5px;
            margin-top: 0;
        }
         
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Enter Student Results</h2>
    <div class="center">
    <form action="process_results.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" required><br>

        <!-- Enter results for all 10 subjects -->
        <h3>Subjects Results</h3>

        <!-- English -->
        <h4 >English</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="english_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="english_exam" class="form-control" required><br>

        <!-- Maths -->
        <h4>Maths</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="maths_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="maths_exam" class="form-control" required><br>

        <h4>Biology</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="biology_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="biology_exam" class="form-control" required><br>

        <h4>Chemistry</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="chemistry_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="chemistry_exam" class="form-control" required><br>

        <h4>Physics</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="physics_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="physics_exam" class="form-control" required><br>

        <h4>Further Maths</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="further_maths_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="further_maths_exam" class="form-control" required><br>

        <h4>Agric</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="agric_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="agric_exam" class="form-control" required><br>

        <h4>Civic Edu</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="civic_ed_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="civic_edu_exam" class="form-control" required><br>

        <h4>French</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="french_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="french_exam" class="form-control" required><br>

        <h4>Geography</h4>
        <div class="text"></div>
        <label>Test Score:</label>
        <input type="number" name="geography_test" class="form-control" required><br>
        <label>Exam Score:</label>
        <input type="number" name="geography_exam" class="form-control" required><br>

        

        <!-- Repeat similar inputs for all other subjects -->

        <input type="submit" value="Submit" class="btn btn-success">
    </form>
    </div>
    </div>
</body>
</html>
