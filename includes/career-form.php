<div class="modal fade" id="careerForm" tabindex="-1" role="dialog" aria-labelledby="careerForm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Apply Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="career-form">
          <form method="post" action="jobs_form_process.php" enctype="multipart/form-data">
            <div class="form-group mb-2">
              <label>Name*</label>
              <input type="text" required name="jobUserName" placeholder="">
            </div>
            <div class="form-group mb-2">
              <label>Email*</label>
              <input type="email" required name="jobEmail" placeholder="">
            </div>
            <div class="form-group mb-2">
              <label>Phone Number*</label>
              <input type="tel" required name='jobNumber' placeholder="">
            </div>
            <div class="form-group mb-2">
              <label>LinkedIn Url*</label>
              <input type="text" required name="jobSocialLink" placeholder="">
            </div>
            <div class="form-group mb-2">
              <label>Upload Resume*</label>
              <input type="file" id="myfile" name="fileToUploadCV">
            </div>
            <div class="form-group mb-2">
              <label>Why do you want to join Bettamint* (500 Words Only)</label>
              <textarea name='message'></textarea>
              <input name="jobId" type="hidden" id="jobName" />
            </div>
            <div class="sbbmt-btn">
              <div class="loader" style="display:none;"></div>
              <input type="submit" id="sbmt-btn" class='inq-submit-btn btn btn-secondary'>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>