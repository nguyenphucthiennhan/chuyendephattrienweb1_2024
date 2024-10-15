<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
  $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
  require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1354.less', 'css/1354.css');
?>

<!DOCTYPE html>
<html>

<head>
  <title>1354</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="./css/1354.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="feedback-form-container">
          <div class="feedback-form">
            <h2 style="font-size: 2em;">Give Us Your Feedback</h2>
            <p>The most important for us is your feedback.</p>

            <form id="feedbackForm" novalidate>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="firstName">First Name<span class="required">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    required />
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="lastName">Last Name<span class="required">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    required />
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="email">Email<span class="required">*</span></label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    required />
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="phone">Phone<span class="required">*</span></label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    required />
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="dateVisited">Date of Visited<span class="required">*</span></label>
                  <input
                    type="date"
                    class="form-control"
                    id="dateVisited"
                    required />
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="visitedLocation">Visited Location<span class="required">*</span></label>
                  <select class="form-select" id="visitedLocation" required>
                    <option value="Pc & Mac Repair">Pc & Mac Repair</option>
                    <option value="Pc & Mac Repair">Laptop Repair</option>
                    <option value="Pc & Mac Repair">Tablet Repair</option>
                    <option value="Pc & Mac Repair">
                      Smart Phone Repair
                    </option>
                    <option value="Pc & Mac Repair">Console Repair</option>
                    <option value="Pc & Mac Repair">Data Recovery</option>
                  </select>
                  <div
                    class="error-message text-danger"
                    style="display: none">
                    The field is required.
                  </div>
                </div>
              </div>
              <div class="mb-3 recommendation-group">
                <label>How Would You Like to Recommend Us?<span class="required">*</span></label>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recommend" id="likely" value="Likely" />
                    <label class="form-check-label" for="likely">Likely</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recommend" id="veryLikely" value="Very Likely" />
                    <label class="form-check-label" for="veryLikely">Very Likely</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recommend" id="fabulous" value="Fabulous" />
                    <label class="form-check-label" for="fabulous">Fabulous</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recommend" id="unlikely" value="Unlikely" />
                    <label class="form-check-label" for="unlikely">Unlikely</label>
                  </div>
                </div>
                <div class="error-message text-danger" style="display: none;">You must select one option.</div>
              </div>


              <div class="mb-3">
                <label for="reason">Your Main Reason to Choose Us<span class="required">*</span></label>
                <textarea
                  class="form-control"
                  id="reason"
                  rows="6"
                  required></textarea>
                <div class="error-message text-danger" style="display: none">
                  The field is required.
                </div>
              </div>

              <button type="submit" class="btn btn-primary">
                SUBMIT FEEDBACK
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript kiểm tra các trường bắt buộc -->
<script>
  document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    var isValid = true;
    var inputs = document.querySelectorAll("#feedbackForm input[type='text'], #feedbackForm input[type='email'], #feedbackForm input[type='tel'], #feedbackForm input[type='date'], #feedbackForm textarea, #feedbackForm select");
    inputs.forEach(function(input) {
      var errorMessage = input.parentElement.querySelector(".error-message");
      if (!input.value) {
        errorMessage.style.display = "block";
        isValid = false;
      } else {
        errorMessage.style.display = "none";
      }
    });
    var recommendRadios = document.querySelectorAll("input[name='recommend']");
    var recommendChecked = false;
    recommendRadios.forEach(function(radio) {
      if (radio.checked) {
        recommendChecked = true;
      }
    });
    var recommendErrorMessage = document.querySelector(".recommendation-group .error-message");
    if (!recommendChecked) {
      recommendErrorMessage.style.display = "block";
      isValid = false;
    } else {
      recommendErrorMessage.style.display = "none";
    }
    if (!isValid) {
      event.preventDefault();
    }
  });
</script>

</html>