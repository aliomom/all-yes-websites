<?php
	/*
			This is the template for the footer
	*/
?>
<?php
	if ( !is_front_page() ): ?>
      <footer class="bg-white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="footer-info text-center text-md-left mb-4">
                <h6 class="mb-3"><?php pl_e( 'follow us' ) ?></h6>
                <div class="row col-10 mb-5">
                  <div class="col px-0">
                    <a class="social-icon facebook-icon" href="#">
                      <i class="fa fa-facebook fa-fw fa-lg"></i>
                    </a>
                  </div>
                  <div class="col px-0">
                    <a class="social-icon linkedin-icon" href="#">
                      <i class="fa fa-linkedin fa-fw fa-lg"></i>
                    </a>
                  </div>
                  <div class="col px-0">
                    <a class="social-icon slack-icon" href="#">
                      <i class="fa fa-slack fa-fw fa-lg"></i>
                    </a>
                  </div>
                  <div class="col px-0">
                    <a class="social-icon twitter-icon" href="#">
                      <i class="fa fa-twitter fa-fw fa-lg"></i>
                    </a>
                  </div>
                </div>
                <h6 class="my-3"><?php pl_e( 'information' ) ?></h6>
	              <?php yes_user_display_footer_menu(); ?>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div id="contact-us" class="footer-contact">
                <h6><?php pl_e( 'follow us') ?></h6>
                <h3 class="mb-5"><?php bloginfo( 'admin_email' ); ?></h3>
                <h6><?php pl_e( 'keep in touch') ?></h6>
                <div class="footer-contact-form">
                  <form id="yesUserContactForm" class="yes-user-contact-form" action="#" method="post" data-url="<?php echo admin_url( 'admin-ajax.php'); ?>">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6 mb-4 footer-input">
                          <input type="text" class="footer-input-control" name="name" id="name" placeholder="<?php pl_e( 'Your Name' ) ?>">
                          <small class="text-danger form-control-msg mt-2"><?php pl_e( 'Your Name Is Required' ) ?></small>
                        </div>
                        <div class="col-6 mb-4 footer-input">
                          <input type="email" class="footer-input-control" name="email" id="email" placeholder="<?php pl_e( 'Email' ) ?>">
                          <small class="text-danger form-control-msg mt-2"><?php pl_e( 'Your Email Is Required' ) ?></small>
                        </div>
                        <div class="col-9 footer-input">
                          <textarea class="footer-input-control" rows="2" name="message" id="message" placeholder="<?php pl_e('Write the message') ?>"></textarea>
                          <small class="text-danger form-control-msg mt-2"><?php pl_e( 'Your Message is Required' ) ?></small>
                        </div>
                        <div class="col-3 pl-0 pl-md-3">
                          <button type="submit" class="btn btn-custom"><?php pl_e( 'Send' ) ?></button>
                        </div>
                        <div class="col-12 text-center">
                          <small class="text-info form-control-msg js-form-submission"><?php pl_e('Submission in process, please wait..') ?></small>
                          <small class="text-success form-control-msg js-form-success"><?php pl_e('Message Successfully submitted, thank you!') ?></small>
                          <small class="text-danger form-control-msg js-form-error"><?php pl_e('There was a problem with the Contact Form, please try again!') ?></small>
                          <small class="text-danger form-control-msg user-not-login"><?php pl_e( 'You must be logged in to send your request' ) ?></small>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <?php endif; ?>
		<?php wp_footer(); ?>
	</body>
</html>
