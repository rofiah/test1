<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?php echo $deskripsi; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <meta charset="utf-8">
    <meta name="robots" content="all">
    <title><?php echo $title; ?></title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/typography.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/elements.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/shortcodes.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/widgets.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.flexslider.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/settings.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/fullwidth.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/revolution/absolution_revolution.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.tweet.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.isotope.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/jquery.jcarousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/responsive-gs-12col.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/web/css/mediaqueries.css"/>    
</head>
<body>

<header class="header-top">
    <div class="container clr">
        <div class="row no-margin-col">
            <div class="col span_5">
			<div class="logonew">
                    <div class="logo-baru">
					<a href="<?php echo base_url(); ?>index.php/web/index"><img src="<?php echo base_url(); ?>asset/web/logonew.png" alt="logonew">
					</a>
					</div>
					
					</div>
                <div class="floatright">
                    <ul class="inline-ul no-margin">
                        <li><p class="mail-top nova-text">&nbsp;&nbsp;&nbsp;&nbsp;infolowkerupdate@gmail.com</p></li>
                    </ul>          
                </div>
            </div>

            <!--<div class="col span_7">
                <div class="header-social-icons-parent">
                    <div class="header-social-icons clr">
                        <a href="<?php echo $g_plus; ?>" target="_blank">
                            <div class="social-icon-dribbble"></div>
                        </a>
                        <a href="<?php echo $facebook; ?>" target="_blank">
                            <div class="social-icon-facebook"></div>
                        </a>
                        <a href="<?php echo $twitter; ?>" target="_blank">
                            <div class="social-icon-twitter"></div>
                        </a>
                    </div>
                </div>

            </div>-->
        </div>
    </div>  
</header>

<header class="header-container">
    <div class="header-elements container">
        <div class="row span_12 no-margin-col">

            <div class="col span_3">
               <!-- <div class="logo">
                    <img src="<?php echo base_url(); ?>asset/web/logonew.png" alt="logo">
                </div>-->
            </div>

            <div class="col span_9">
                <nav class="menu-system">
                    <ul class="absolution">
                        <li>
                            <a href="">
                                <span class="icon"><span class="menu-icon menu-icon-home"></span></span>INFO LOWONGAN KERJA TERBARU DESEMBER 2015
                            </a>
							<span>Lowongan Kerja SMA/SMK, Lowongan D3, Lowongan S1,
							Lowongan Kerja BUMN, Lowongan Kerja Bank, Lowongan CPNS 2015</span>
                        </li>                      
                        <li>
                           <!-- <a href="<?php echo base_url(); ?>index.php/web/contact">
                                <span class="icon"><span class="menu-icon menu-icon-contact"></span></span>CONTACT
                            </a>-->
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>

<section class="title-large">
    <div class="title-large-inner">
        <!--<div class="container clr">
            <div class="row span_12 no-margin-col">

               <!-- <div class="col span_6">
                                     
                </div>-->

               <!-- <div class="col span_6">
                    <ul class="inline-ul breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>                        
                    </ul>
                </div>-->

           <!-- </div>
        </div>  -->    
  </div>            
</section>

<section class="container clr">
    <div class="row">

        <div class="col span_8">
			<?php foreach($content as $c){ ?>
            <article class="entry">
                <!--<div class="entry-meta">
                    <div class="meta-date">
					<?php
						$p_satu = explode(' ',$c['tanggal']);
						$tgl =explode('-',$p_satu[0]); 
						$bulan = array('Jan','Feb','Mar', 'Apr', 'Mei', 'Jun','Jul','Ags','Sep','Okt', 'Nov','Des');
					?>
                        <p><?php echo $bulan[($tgl[1]-1)]; ?></p>
						<p><?php echo $tgl[0]; ?></p> <!-- $tgl[0] untuk menampilkan tahun, sedangkan $tgl[2], untuk menampilkan tanggal -->
                    <!--</div>
                </div>-->
                <div class="entry-image">
                    <div class="image-hover blog-image">
                         <img src="<?php echo $c['image_header']; ?>" "alt="redpassion_large">
                         <div class="extra-info blog-image">
                            <a href="#" class="entry-img-hover-loupe"></a>
                         </div>                
                    </div>
                    <div class="image-shadow"></div>                    
                </div>
				
                <div class="entry-text">
                    <a href="<?php echo base_url(); ?>index.php/web/detail/<?php echo $c['kode_content']; ?>">
                        <h3 class="content-green-hover no-margin text-bold"><?php echo $c['judul_content']; ?></h3>
                    </a>
                    <ul class="inline-ul entry-text-ul">
                        <li>
                            <span class="gray-text">Posted by: </span>
                            <span class="gray-text"><?php echo $c['penulis']; ?></span>
                        </li>
                        <li>
                            <span class="gray-text">Comments: </span>
                            <span class="gray-text"><a href="single_blog.html"><?php echo $c['totalkomentar']; ?></a></span>
                        </li>
                        <li>
                            <ul class="inline-ul no-margin">
                                <li><span class="gray-text">Taged by: </span></li>
                                <li>
                                   <ul class="inline-ul no-margin">
									<?php 
										$tags = explode(',',$c['tags']);
										foreach($tags as $tag){
									?>
                                        <li><a href="<?php echo base_url(); ?>index.php/web/detail/<?php echo $c['kode_content']; ?>"><?php echo $tag; ?>,</a></li>
									<?php } ?>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                    </ul>
					<div style="text-align:justify;"><p>
                    <?php echo word_limiter($c['content'],75); ?>
					</p></div>
                    <a href="<?php echo base_url(); ?>index.php/web/detail/<?php echo $c['kode_content']; ?>">
                        <span class="content-green-hover read-more">Read More</span>
                    </a>
                </div>
            </article>
			
            <div class="divider-large"></div>
			<?php } ?>
			<?php echo $links; ?>
        </div>

        <div class="col span_41">
            <div class="widget-area row span_12">
                <!--<div class="widget widget_search">
                    <input type="text" name="search" placeholder="Search here...">
                </div>-->
                <div class="widget widget_recent_entries">
                        <div class="title-small clr">
                            <h3>Kategori Lowongan</h3>
                        </div>
                    <ul>
					<?php foreach($label as $l){ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/web/kategori/<?php echo $l["kode_label"]; ?>"><?php echo $l['judul_label']; ?></a></li>
					<?php } ?>
                    </ul>
                </div>

				<div class="widget widget_recent_entries">
                        <div class="title-small clr">
                            <h3>Lowongan Kerja Populer</h3>
                        </div>
                    <ul>
					<?php foreach($counter as $o){ ?>
					
						<!--<div class="entry-imagepop">-->
                    <div class="image-hoverpop blog-imagepop">
						<img src="<?php echo $o['image_header']; ?>" align="right" alt="redpassion_large"> </div><!--</div>-->
					
						<a href="<?php echo base_url(); ?>index.php/web/detail/<?php echo $o['kode_content']; ?>">
                        <h7 class="content-green-hover no-margin text-bold"><?php echo $o['judul_content']; ?></h7>
                    </a>
					<div style="text-align:justify;">
						<?php echo word_limiter($o['content'],11); ?>
					<?php } ?>
					</div>
                    </ul>
					
                </div>

                </div>                
            </div>
        </div>
    </div>
</section>
<footer class="footer-container">
    <div class="container">
            </div>

    <div class="copyright-container">
        <div class="container">
            <p class="white-text" align="center">© Copyright InfoLowkerIndonesia<a target="blank" href="www.rubidium-style.html" class="green-hover"> </a></p>
        </div>
    </div>

</footer>
<div class="to-top"></div>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.gmap-1.1.0-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.isotope.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/main.js"></script>

</body>
</html>