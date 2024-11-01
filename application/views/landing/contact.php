<?php $this->load->view("landing/components/header"); ?>

<div class="contact-form f1 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="thm-header text-center">
                    <p class="c1 pb-10">Contact with us</p>
                    <h1 class="c3">Send us Message</h1>
                </div><!-- /.thm-header -->
            </div><!-- /.col-12 -->

            <div class="col-xl-8">

                <!-- Display flash message -->
                <?php if ($this->session->flashdata('message')): ?>
                    <div class="alert alert-success text-center">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url() ?>contact/create" method="post">
                    <input type="text" placeholder="Your Name" name="name" class="float-left">
                    <input type="text" placeholder="Email Address" name="email" class="float-right">
                    <textarea placeholder="Write your message" name="message"></textarea>
                    <div class="text-center">
                        <button type="submit">submit now</button>
                    </div>
                </form>
            </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.contact-form -->

<?php $this->load->view("landing/components/footer"); ?>
<?php $this->load->view("landing/components/bottom"); ?>
