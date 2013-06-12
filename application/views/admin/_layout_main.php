<?php  $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Pulpit</a></li>
                <li><?php echo anchor('admin/article', 'Aktualności'); ?></li>
                <li><?php echo anchor('admin/page', 'Strony'); ?></li>
                <li><?php echo anchor('admin/page/order', 'Menu'); ?></li>
                <li><?php echo anchor('admin/user', 'Użytkownicy'); ?></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main column -->
            <div class="span9">
                <section>
                    <?php $this->load->view($subview); ?>
                </section>
            </div>

            <!--Sidebar-->
            <div class="span3">
                <section>
                    <i class="icon-user"></i> Witaj <?php echo $this->session->userdata('name'); ?><br>
                    <?php echo anchor('admin/user/logout', '<i class="icon-off"></i> wyloguj się'); ?>
                </section>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/components/page_tail'); ?>