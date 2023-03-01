
<h6 id="titlehead" class="display-6" style="color:#4723D9; text-align:center;">Add Student</h6>

<div class="wrapper rounded bg-white">



        <form  class="row g-3" action="crud/insert.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="inputEmail4" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="student_name">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="inputAddress2" class="form-label" id="labelImage">Student Image</label>
                    <input type="file"  id="inputAddress2" name="student_image" value="Upload Images">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="inputCity" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" id="inputCity" name="birth_date">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label class="status">Status</label>
                    <div class="d-flex align-items-center mt-2">
                        <label class="option">
                            <input class="moveStatus" id="status" type="radio" name="student_status" value="available">
                            <label class="radio1" for="status" value="available">available</label>
                            <span class="checkmark"></span>
                        </label>
                        <label class="option ms-4">
                            <input id="status" type="radio" name="student_status" value="not available">
                            <label class="radio1" for="status" value="not available">not available</label>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class=" my-md-2 my-3">
                <label for="inputState" class="form-label">Courses</label>
                <select id="sub"  class="form-select" name="courses" required>
                    <option value="" selected hidden>Choose Option</option>
                    <option value="HTML" selected>HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                </select>
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary" id="AddStudent">Add</button>
            </div>
        
    </div>