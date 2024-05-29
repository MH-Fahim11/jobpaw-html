const container = document.getElementById('main-header');
const nav = document.createElement('nav');
nav.innerHTML = `
            <div class="main-header__inner">
                <div class="main-header__logo">
                    <a href="index.html">
                        <img src="assets/images/logos/logo-light.png" alt="Hiredots HTML" width="125">
                    </a>
                </div><!-- /.main-header__logo -->
                <a href="#" class="search-toggler main-header__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <div class="main-header__menu">
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li class="dropdown">
                                <a href="professionals.html">Professionels</a>
                            </li>

                            <li>
                                <a href="entreprises.html">Entreprises</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Universities</a>
                                <ul>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="jobs.html">Jobs</a></li>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Services</a>
                                <ul>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="service-d-consulting.html">HR Consulting</a></li>
                                    <li><a href="service-d-resources.html">Tech Resources</a></li>
                                    <li><a href="service-d-hydro-solution.html">Staffing Solution</a></li>
                                    <li><a href="service-d-program.html">Corporate Program</a></li>
                                    <li> <a href="service-d-training.html">Leadership Training</a></li>
                                    <li><a href="service-d-management.html">Staff Management</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="project.html">Projects</a>
                                <ul>
                                    <li><a href="project.html">Projects</a></li>
                                    <li><a href="project-details.html">Projects Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="connexion">
                        <div class="connexion-i1">
    
                            <p style="color: rgb(25, 164, 222);">Connexion</p>
                            <div style="margin-top: -20px;">
                                <select style="border: none;">
                                    <option>Inscription</option>
                                    <option>Entreprises</option>
                                    <option>Professionnels</option>
                                    <option>Universités</option>
                                </select>
                            </div>
                        </div>
                        <div class="connexion-i2 lang-menu">
                            
                                <div class="selected-lang">
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="fr"></a>
                                    </li>
                                    <li>
                                        <a href="" class="en"></a>
                                    </li>
                                    <li>
                                        <a href="" class="es"></a>
                                    </li>
                                    <li>
                                        <a href="" class="ht"></a>
                                    </li>
                                </ul>
                                
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class="connexion-m">
                    <div class="connexion-i1-m">

                        <p style="color: rgb(25, 164, 222);">Connexion</p>
                        <div style="margin-top: -20px;">
                            <select style="border: none;">
                                <option>Inscription</option>
                                <option>Entreprises</option>
                                <option>Professionnels</option>
                                <option>Universités</option>
                            </select>
                        </div>
                    </div>
                    <div class="connexion-i2 lang-menu">
                            
                        <div class="selected-lang">
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="fr"></a>
                            </li>
                            <li>
                                <a href="" class="en"></a>
                            </li>
                            <li>
                                <a href="" class="es"></a>
                            </li>
                            <li>
                                <a href="" class="ht"></a>
                            </li>
                        </ul>
                        
                    
                </div>
                </div>

                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
            </div>
    `;

container.appendChild(nav);
