<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update details</title>
    <link rel="stylesheet" href="/student/css/upload.css" />
    <link rel="stylesheet" href="/student/css/main.css" />
  </head>
  <body>
  <!-- TRUNCATE TABLE TABLE_NAME ; -->
    <div class="upload_page">
      <div class="heading">
        <h1 class="h1">Student details upload</h1>
      </div>
      <div class="popup">
        <div class="popup_close">X</div>
        <?php if (isset($_GET['error'])) {?>
          <p class="error"><?php echo $_GET['error']?></p>
        <?php }?>
      </div>
      <div class="upload_form">
        <form action="upload.php" method='post' class="upload">
          <div class="left_details">
            <label for="name">name</label>
            <input
              type="text"
              name="name"
              id="name"
              class="name"
              placeholder="Eg:john doe"
              autofocus
             
            />

            <label for="rollno">rollno</label>
            <input
              type="text"
              name="rollno"
              id="rollno"
              class="rollno"
              placeholder="Eg:2024mtmhss001"
             
            />

            <label for="std">Standard</label>
            <input
              type="text"
              name="std"
              id="std"
              class="std"
              placeholder="Eg: 12"
            />

            <label for="section">section</label>
            <select name="sec" id="section" class="section select">
              <option value="">select section</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>

            <label for="dob">DOB </label>
            <input
              type="text"
              name="dob"
              id="dob"
              class="dob"
              placeholder="Eg: dd/mm/yyyy"
             
            />
            <label for="fees">fees</label>
            <select name="fees" id="fees" class="fees select">
              <option value="">select fees status</option>
              <option value="paid">paid</option>
              <option value="not paid">not paid</option>
            </select>
          </div>

          <div class="right_details">
            <label for="tamil">tamil mark </label>
            <input
              type="number"
              name="tamil"
              id="tamil"
              placeholder="Eg: 80"
             
            />

            <label for="english">english mark</label>
            <input
              type="number"
              name="english"
              id="english"
              placeholder="Eg: 80"
             
            />

            <label for="maths">maths mark </label>
            <input
              type="number"
              name="maths"
              id="maths"
              placeholder="Eg: 80"
             
            />

            <label for="physics">physics mark </label>
            <input
              type="number"
              name="physics"
              id="physics"
              placeholder="Eg: 80"
             
            />

            <label for="chemistry">chemistry mark</label>
            <input
              type="number"
              name="chemistry"
              id="chemistry"
              placeholder="Eg: 80"
             
            />

            <select name="group" id="group">
              <option value="">select group</option>
              <option value="biology">biology</option>
              <option value="cs">computer sciece</option>
            </select>

            <div class="bio_cs">
              <div class="bio_cs_flex">
                <label for="biology" class="bio_cs-lable">biology mark</label>
                <input
                  type="number"
                  name="bioCsMark"
                  id="biology"
                  placeholder="Eg: 80"
                 
                />
              </div>
            </div>
          </div>

          <div class="submit_button">
            <button type="submit" class="submit">upload</button>
          </div>
        </form>
      </div>
    </div>
    <script src="/student/js/upload.js"></script>
  </body>
</html>
