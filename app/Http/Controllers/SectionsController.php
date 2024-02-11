<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\PageSection;

class SectionsController extends Controller
{
    //

    public $reusableBlocks = [
        [
            'content' => '<section class="inner-banner py-5">
                            <div class="w3l-breadcrumb py-lg-5">
                                <div class="container pt-5 pb-sm-4 pb-2">
                                    <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                                    <ul class="breadcrumbs-custom-path">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                                    </ul>
                                </div>
                            </div>
            </section>',
            'label' => 'Contact Us Header',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - 
                            https://fontawesome.com License - https://fontawesome.com/license 
                            (Commercial License) Copyright 2023 Fonticons,
                             Inc. --><path d="M71 12.5c-8.6 1-15 8.2-15 16.8c0 9.3 7.5 16.8 16.7 16.9H184.1c8.8-.1 15.9-7.2 15.9-16V16c0-9.5-8.3-17-17.8-15.9L71 12.5zM189.5 78.1H66.5C64.9 83.8 64 89.8 64 96c0 35.3 28.7 64 64 64s64-28.7 64-64c0-6.2-.9-12.2-2.5-17.9zM32 256v32c0 17.7 14.3 32 32 32H192c1.8 0 3.5-.1 5.2-.4L53 208.6C40.1 220.3 32 237.2 32 256zm190.2 42.5c1.1-3.3 1.8-6.8 1.8-10.5V256c0-35.3-28.7-64-64-64H96c-3.7 0-7.4 .3-10.9 .9L222.2 298.5zM384 160a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32H448c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H352zM215.8 450.1c5.2-4.6 8.2-11.1 8.2-18.1s-3-13.5-8.2-18.1l-64-56c-7.1-6.2-17.1-7.7-25.7-3.8S112 366.6 112 376v32l-88 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l88 0v32c0 9.4 5.5 18 14.1 21.9s18.6 2.4 25.7-3.8l64-56zM288 431.9c0 6.9 2.9 13.5 8.1 18.1l64 56.4c7.1 6.2 17.1 7.8 25.7 3.9s14.1-12.4 14.1-21.9l0-32.4 88 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-88 0 0-32c0-9.4-5.5-18-14.1-21.9s-18.6-2.4-25.7 3.8l-64 56c-5.2 4.5-8.2 11.1-8.2 18z"/>
                        </svg>',
            'id'=>'ContactUsHeader',
        ],

        [
            'content'=> '<section class="w3l-contact-2 py-5" id="contact">
                    <div class="container py-lg-5 py-md-4 py-2">
                        <div class="w3l-header-sec text-center mb-md-5 mb-4">
                            <h5 class="sub-title">Send Us Message</h5>
                            <h3 class="title-style">Contact Us</h3>
                        </div>
                        <div class="contact-grids d-grid">
                            <div class="contact-left-img">
                                <img src="../../images/contact.jpg" class="img-fluid radius-image" alt="">
                            </div>
                            <div class="contact-right">
                                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                                    <div class="input-grids">
            
                                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" required="">
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                                        <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" required="">
                                        <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input" required="">
                                    </div>
                                    <div class="form-input">
                                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                                    </div>
                                    <div class="form-buttonhny text-lg-end">
                                        <button class="btn btn-style btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                        <div class="contact-left mt-5 pt-lg-5">
                            <div class="w3l-header-sec text-center mb-md-5 mb-4">
                                <h5 class="sub-title">Find Us</h5>
                                <h3 class="title-style">Address Info</h3>
                            </div>
                            <div class="cont-details">
                                <div class="cont-top margin-up">
                                    <div class="cont-left text-center">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="cont-right">
                                        <h6>Company Address</h6>
                                        <p>Wildlive,#2214 cravel street, NY - 34336.</p>
                                    </div>
                                </div>
                                <div class="cont-top margin-up">
                                    <div class="cont-left text-center">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="cont-right">
                                        <h6>Call Us</h6>
                                        <p><a href="tel:+1(21) 343 5677">+1(21) 343 5677</a></p>
                                        <p><a href="tel:+1(21) 343 5678">+1(21) 343 5678</a></p>
                                    </div>
                                </div>
                                <div class="cont-top margin-up">
                                    <div class="cont-left text-center">
                                        <i class="fas fa-mail-bulk"></i>
                                    </div>
                                    <div class="cont-right">
                                        <h6>Email Us</h6>
                                        <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                        <p><a href="mailto:example@mail2.com" class="mail">example@mail2.com</a></p>
                                    </div>
                                </div>
                                <div class="cont-top margin-up">
                                    <div class="cont-left text-center">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="cont-right">
                                        <h6>Customer Support</h6>
                                        <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                        <p><a href="mailto:info@support2.com" class="mail">info@support2.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map-iframe mt-5 pt-md-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </section>',
            'label' => 'Contact Us',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                </svg>',
            
            'id' => 'contactUs'

        
        ],
        [
            'content' => '<section class="w3l-aboutblock py-5">
                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <h3 class="title-style">Learn how to cook from your house</h3>
                            <p class="mt-3">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
                                Mumquam eius modi tempora incidunt ut labore et.</p>
                            <div class="row mt-lg-5 mt-4">
                                <div class="col-sm-6 grids_info">
                                    <i class="fas fa-utensils"></i>
                                    <div class="detail mt-sm-4 mt-3">
                                        <h4>Easy Manual</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 grids_info mt-sm-0 mt-4">
                                    <i class="fas fa-bread-slice"></i>
                                    <div class="detail mt-sm-4 mt-3">
                                        <h4> For Everyone</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 ps-lg-5 mt-lg-0 mt-5">
                            <div class="row align-items-center">
                                <div class="col">
                                    <img src="../../images/about1.jpg" alt="" class="img-fluid radius-image">
                                </div>
                                <div class="col">
                                    <img src="../../images/about2.jpg" alt="" class="img-fluid radius-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>',
            'label'=> 'Learn to cook',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                    License - https://fontawesome.com/license/free
                    Copyright 2024 Fonticons, Inc. -->
                <path d="M320 352c-88.4 0-160-71.6-160-160c0-76.7 62.5-144.7 107.2-179.4c5-3.9 10.9-5.8 16.8-5.8c7.9-.1 16 3.1 22 9.2l46 46 11.3-11.3c11.7-11.7 30.6-12.7 42.3-1C464.5 108 480 160.2 480 192c0 88.4-71.6 160-160 160zm64-111.8c0-36.5-37-73-54.8-88.4c-5.4-4.7-13.1-4.7-18.5 0C293 167.1 256 203.6 256 240.2c0 35.3 28.7 64 64 64s64-28.7 64-64zM32 288c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32s-14.3 32-32 32v64H544V320c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32v96c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32V288zM320 480a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm160-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM192 480a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
            </svg>',
        ],
        [
            'content' => '<section class="w3l-whyblock py-4">
                <div class="pb-lg-5 pb-md-4 pb-2">
                    <div class="row align-items-center m-0">
                        <div class="col-lg-6 ps-0">
                            <img src="../../images/ab.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                            <h5 class="sub-title">Our Features</h5>
                            <h3 class="title-style mb-4">Why Choose Us?</h3>
                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.</p>
                            <div class="two-grids mt-5">
                                <div class="grids_info">
                                    <i class="fas fa-trophy"></i>
                                    <div class="detail">
                                        <h4>We Are Winners of 50 Competitions</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit.</p>
                                    </div>
                                </div>
                                <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                                    <i class="fas fa-user-friends"></i>
                                    <div class="detail">
                                        <h4>27 Professional Chefs-Trainers</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit.</p>
                                    </div>
                                </div>
                                <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                                    <i class="fas fa-hourglass-half"></i>
                                    <div class="detail">
                                        <h4>Guaranteed Fast Employment</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>',
            'label' => 'Why choose us',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                 License - https://fontawesome.com/license/free
                 Copyright 2024 Fonticons, Inc. -->
            <path d="M80 48a48 48 0 1 1 96 0A48 48 0 1 1 80 48zm64 193.7v65.1l51 51c7.1 7.1 11.8 16.2 13.4 26.1l15.2 90.9c2.9 17.4-8.9 33.9-26.3 36.8s-33.9-8.9-36.8-26.3l-14.3-85.9L66.8 320C54.8 308 48 291.7 48 274.7V186.6c0-32.4 26.2-58.6 58.6-58.6c24.1 0 46.5 12 59.9 32l47.4 71.1 10.1 5V160c0-17.7 14.3-32 32-32H384c17.7 0 32 14.3 32 32v76.2l10.1-5L473.5 160c13.3-20 35.8-32 59.9-32c32.4 0 58.6 26.2 58.6 58.6v88.1c0 17-6.7 33.3-18.7 45.3l-79.4 79.4-14.3 85.9c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8l15.2-90.9c1.6-9.9 6.3-19 13.4-26.1l51-51V241.7l-19 28.5c-4.6 7-11 12.6-18.5 16.3l-59.6 29.8c-2.4 1.3-4.9 2.2-7.6 2.8c-2.6 .6-5.3 .9-7.9 .8H256.7c-2.5 .1-5-.2-7.5-.7c-2.9-.6-5.6-1.6-8.1-3l-59.5-29.8c-7.5-3.7-13.8-9.4-18.5-16.3l-19-28.5zM2.3 468.1L50.1 348.6l49.2 49.2-37.6 94c-6.6 16.4-25.2 24.4-41.6 17.8S-4.3 484.5 2.3 468.1zM512 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm77.9 348.6l47.8 119.5c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8l-37.6-94 49.2-49.2z"/>
          </svg>'
        ],
        [
            'content'=> '<div class="container pb-lg-5 pb-md-4 pb-2">
                    <h5 class="sub-title text-center">Team of Professionals</h5>
                    <h3 class="title-style text-center">Our Best Chefs</h3>
                    <div class="row cards justify-content-center">
                        <div class="col-lg-4 col-md-6 mt-5">
                            <a href="#img" class="card">
                                <img src="../../images/team1.jpg" class="card__image radius-image" alt="">
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path></path>
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Olive Yew</h3>
                                            <span class="card__status">Masterchef</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <a href="#img" class="card">
                                <img src="../../images/team2.jpg" class="card__image radius-image" alt="">
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path></path>
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Aida Joe</h3>
                                            <span class="card__status">Masterchef</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <a href="#img" class="card">
                                <img src="../../images/team3.jpg" class="card__image radius-image" alt="">
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path></path>
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Teri Dac</h3>
                                            <span class="card__status">Masterchef</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>',
            'label'=> 'Our Chefs',
            'media'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                                License - https://fontawesome.com/license/free
                                Copyright 2024 Fonticons, Inc. -->
                            <path d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
                        </svg>'

        ],
        [
        'content' => '<section class="home-grids-section pb-5 pt-4">
                <div class="container pb-lg-5 pb-md-4 pb-2">
                    <div class="row mb-md-5 mb-4">
                        <div class="col-md-10 col-lg-7 mx-auto text-center px-xl-4">
                            <h5 class="sub-title text-center">Cooking Steps</h5>
                            <h3 class="title-style text-center">Easy Way To Make You Expert at Cooking</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="home-grids-block">
                                <div class="grids-icon mb-3">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="grids-content">
                                    <h5 class="mb-3"><a href="about.html">Find Course</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                        laudan erts.</p>
                                    <a href="classes.html" class="btn btn-style btn-style-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="home-grids-block">
                                <div class="grids-icon mb-md-4 mb-3">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="grids-content">
                                    <h5 class="mb-3"><a href="about.html">Learn Online</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                        laudan erts.</p>
                                    <a href="classes.html" class="btn btn-style btn-style-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                            <div class="home-grids-block">
                                <div class="grids-icon mb-md-4 mb-3">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <div class="grids-content">
                                    <h5 class="mb-3"><a href="about.html">Make Your Food</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                        laudan erts.</p>
                                    <a href="classes.html" class="btn btn-style btn-style-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>',
        'label' => 'Cooking steps',
        'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                            License - https://fontawesome.com/license/free
                            Copyright 2024 Fonticons, Inc. -->
                        <path d="M384 64c0-17.7 14.3-32 32-32H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H448v96c0 17.7-14.3 32-32 32H320v96c0 17.7-14.3 32-32 32H192v96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h96V320c0-17.7 14.3-32 32-32h96V192c0-17.7 14.3-32 32-32h96V64z"/>
                    </svg>'
        ],
        [
            'content' => '<section class="w3l-aboutblock1 py-5" id="about">
                            <div class="container py-md-5 py-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 about-right-faq">
                                        <h5 class="sub-title mb-2">About Us</h5>
                                        <h3 class="title-style text-start">Hello, Welcome to Cooking!</h3>
                                        <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                            ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Non quae, fugiat consequatur voluptatem ad.</p>
                                        <a class="btn btn-style mt-md-5 mt-4" href="#about"> Read More </a>
                                    </div>
                                    <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5">
                                        <img src="../../images/about3.jpg" alt="" class="img-fluid radius-image">
                                    </div>
                                </div>
                            </div>
                </section>',
                'label' => 'Welcome',
                'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                                License - https://fontawesome.com/license/free
                                Copyright 2024 Fonticons, Inc. -->
                            <path d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96v-32H288V32zm256 224c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32h-64v-352c0-35.3-28.7-64-64-64H352v64z"/>
                        </svg>'

        ],
        [
            'content' => '<section class="w3l-content-block1 py-5">
                    <div class="container py-md-5 py-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 title-content py-md-5">
                                <h3 class="title-style text-white">Join Our Cooking Class, Become a Chef</h3>
                                <p class="mt-3 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                    sunt in culpa qui officia
                                    sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
                                <a href="about.html" class="btn btn-style mt-5">
                                    Register Now
                                </a>
                            </div>
                        </div>
                    </div>
                </section>',
            'label' => 'Join classes',
            'media' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com
                        License - https://fontawesome.com/license/free
                        Copyright 2024 Fonticons, Inc. -->
                    <path d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8H32c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9V104l4.4-1.6L240.1 4.2zM64 224h64V416h40V224h64V416h48V224h64V416h40V224h64V420.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V224z"/>
            </svg>'
        ]
    ];
         

    public function uploadSliderImages(Request $request){

        $files = $request->allFiles();

        foreach ($files as $file) {

            $file_name = $file->getClientOriginalName();

            $path = $file->storeAs("slides",$file_name);
            
        }
       
      //  return $this->getSectionSlides(4);

    }

    public function liveEdit($section_id){

        $section =  PageSection::find($section_id);

        $content = $section->content;

       // dd(  $content );

        $blocks = $this->reusableBlocks;

        return Inertia::render('LiveEditor',['content' => $content,'blocks'=>$blocks,'section_id'=>$section_id]);



    }

    public function getPageSections($page_id){

        return PageSection::where('page_id',$page_id)->get();

    }

    public function saveSection(Request $request){

        $section = PageSection::find($request->sectionId);
        $section->content = $request->html;
        $section->css = $request->css;

        $section->save();

        return 'success !!';

    }

}
