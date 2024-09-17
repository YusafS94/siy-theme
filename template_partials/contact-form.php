<form class="needs-validation mx-1" novalidate="" action="/form-process.php" method="POST">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="text-main" for="firstName">Name</label>
                <input type="text" class="form-control bg-transparent text-light" id="firstName" name="fullname" placeholder="First & Last Name" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-12 mb-3">
                <label class="text-main" for="lastName">Email (required)</label>
                <input type="email" class="form-control bg-transparent text-light" id="email" name="email" placeholder="Your email" value="" required="">
                <div class="invalid-feedback">
                  Valid email is required.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="text-main" for="message">Message (required)</label>
                <textarea class="form-control bg-transparent text-light" id="message" name="message"></textarea>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" mailto="email@email.com" type="submit">Submit</button>
          </form>