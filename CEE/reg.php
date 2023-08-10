


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    /* Styling for the modal backdrop */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.5);
}

/* Styling for the modal dialog */
.modal-dialog {
    max-width: 600px; /* Set the maximum width of the modal */
    margin: 100px auto; /* Adjust the vertical position of the modal */
}

/* Styling for the modal content */
.modal-content {
    padding: 20px;
    border-radius: 5px;
}

/* Styling for the modal header */
.modal-header {
    background-color: #f1f1f1;
    border-bottom: 1px solid #ccc;
}

/* Styling for the modal title */
.modal-title {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
}

/* Styling for the close button */
.modal-header .close {
    font-size: 1.5rem;
}

/* Styling for the modal body */
.modal-body {
    padding-top: 10px;
}

/* Styling for form elements inside the modal */
.modal-body .form-group {
    margin-bottom: 15px;
}

/* Styling for labels */
.modal-body label {
    font-weight: bold;
}

/* Styling for input fields */
.modal-body input[type="text"],
.modal-body input[type="email"],
.modal-body input[type="password"],
.modal-body select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Styling for the "Add Now" button */
.modal-footer .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

/* Styling for the "Close" button */
.modal-footer .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
}

/* Styling for the "Add Now" and "Close" buttons on hover */
.modal-footer .btn-primary:hover,
.modal-footer .btn-secondary:hover {
    opacity: 0.8;
}

/* Styling for the modal backdrop */
.modal-backdrop {
  background-color: rgba(0, 0, 0, 0.5);
}

/* Styling for the modal dialog */
.modal-dialog {
  max-width: 400px;
}

/* Styling for the modal content */
.modal-content {
  border-radius: 8px;
}

/* Styling for the modal header */
.modal-header {
  background-color: #f1f1f1;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  padding: 10px 20px;
}

/* Styling for the modal title */
.modal-title {
  font-size: 20px;
  margin: 0;
}

/* Styling for the close button */
.close {
  font-size: 28px;
}

/* Styling for the modal body */
.modal-body {
  padding: 20px;
}

/* Styling for the form groups */
.form-group {
  margin-bottom: 20px;
}

/* Styling for the labels */
label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

/* Styling for the input fields */
.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Styling for the select elements */
select.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  appearance: none;
  background: url("down-arrow-icon.png") no-repeat right center;
  background-size: 20px 20px;
}

/* Styling for the buttons in the modal footer */
.modal-footer button {
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Styling for the "Add Now" button */
.modal-footer .btn-primary {
  background-color: #007bff;
  color: #fff;
}

/* Styling for the "Close" button */
.modal-footer .btn-secondary {
  background-color: #6c757d;
  color: #fff;
}



/* Styling for the modal backdrop */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.5);
}

/* Styling for the modal dialog */
.modal-dialog {
    max-width: 600px; /* Set the maximum width of the modal */
    margin: 100px auto; /* Adjust the vertical position of the modal */
}

/* Styling for the modal content */
.modal-content {
    padding: 20px;
    border: 1px solid #ccc; /* Add a border to the modal content */
    border-radius: 5px;
}

/* Styling for the modal header */
.modal-header {
    background-color: #f1f1f1;
    border-bottom: 1px solid #ccc;
}

/* Styling for the modal title */
.modal-title {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
}

/* Styling for the close button */
.modal-header .close {
    font-size: 1.5rem;
}

/* Styling for the modal body */
.modal-body {
    padding-top: 10px;
}

/* Styling for form elements inside the modal */
.modal-body .form-group {
    margin-bottom: 15px;
}

/* Styling for labels */
.modal-body label {
    font-weight: bold;
}

/* Styling for input fields */
.modal-body input[type="text"],
.modal-body input[type="email"],
.modal-body input[type="password"],
.modal-body select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Styling for the "Add Now" button */
.modal-footer .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

/* Styling for the "Close" button */
.modal-footer .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
}

/* Styling for the "Add Now" and "Close" buttons on hover */
.modal-footer .btn-primary:hover,
.modal-footer .btn-secondary:hover {
    opacity: 0.8;
}

</style>
</head>
<body>
	<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" action="register.php" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Examinee</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Fullname</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input Fullname" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Birhdate</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Select gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label>Course</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Select course</option>

              <?php 
                include("conn.php");
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label>Year Level</label>
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Select year level</option>
              <option value="first year">First Year</option>
              <option value="second year">Second Year</option>
              <option value="third year">Third Year</option>
              <option value="fourth year">Fourth Year</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">

        <a style="padding:8px; border-radius: 5px;  background-color: gray; width: 50px; color: white;" class="" data-dismiss="modal" href="index.php">Close</a>

        <button type="submit" class="btn btn-primary">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>
</body>
</html>