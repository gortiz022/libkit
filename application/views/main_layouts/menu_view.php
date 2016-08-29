        <header>
                <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="#">LibraryKit</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="<?php echo base_url() . 'main_index'; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'pagelist'; ?>">Page Lists</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(). 'main_index/config/'. $this->session->userdata('inst_id');?>">Config</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>

                </ul>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav">
                        <li><a href="<?php echo base_url();?>user_login/logout">Logout</a></li>
                    </ul>
                </div>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">LibraryKit</div>
            </nav>
        </header>