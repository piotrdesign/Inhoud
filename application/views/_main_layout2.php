<?php $this->load->view('components/page_head2'); ?>
<body class="index">
    <div class="pageContainer">
      <div class="pageHeader">
       <div class="top-line"></div>
        <div class="cnt">
            <div class="logo-wrapper">
                <a href="#" title=""><img class="logo" src="<?php echo base_url('img/logo.png'); ?>" alt="Balustrady Markaz Łapalice Kartuzy Trójmiasto" height="51" width="280" /></a>
                <ul class="logo-text">
                    <li>Wyroby ze stali</li>
                    <li>nierdzewnej i zwykłej</li>
                </ul>
            </div>
            <div class="contact-header">
                <ul class="contact-data">
                    <li><img src="img/phone.png" alt="Balustrady Markaz Łapalice zadzwoń" height="17" width="12" />+48 58 685 37 05</li>
                    <li><img src="img/mail.png" alt="Balustrady Markaz Kartuzy email" height="13" width="20" /><a href="mailto:biuro@balustradymarkaz.pl">biuro@balustradymarkaz.pl</a></li>
                </ul>
                <div class="contact-shadow"></div>
            </div>
            <div style="clear: both;"></div>
            <div class="menu-wrapper">
                <?php echo get_menu($menu); ?>
            </div>
            <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo base_url('img/slider/slider1.jpg'); ?>" alt="Balustrady Markaz nierdzewka stal Kartuzy Trójmiasto" height="300" width="1004" title="#htmlcaption1" />
                    <img src="<?php echo base_url('img/slider/slider2.jpg'); ?>" alt="Balustrady Markaz nierdzewka stal Kartuzy Trójmiasto" height="300" width="1004" title="#htmlcaption1" />
                    <img src="<?php echo base_url('img/slider/slider3.jpg'); ?>" alt="Balustrady Markaz nierdzewka stal Kartuzy Trójmiasto" height="300" width="1004" title="#htmlcaption1" />
                </div>
                <div id="htmlcaption1" class="nivo-html-caption">
                    <ul>
                        <li><a href="#">Balustrady</a></li>
                        <li><a href="#">Schody</a></li>
                        <li><a href="#">Ogrodzenia</a></li>
                        <li><a href="#">Zadaszenia</a></li>
                        <li><a id="orange-bg" href="#">Zapoznaj się z naszą ofertą !</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="pageContent">
        <div class="shadow-line"></div>
        <div class="cnt">
            <div class="right-side">
                <div class="content-bar">
                    <h1>Witamy serdecznie na stronie <span>firmy Markaz</span></h1>
                </div>
                <div class="content-text">
                    <?php $this->load->view('templates/' . $subview); ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('components/page_tail2'); ?>
