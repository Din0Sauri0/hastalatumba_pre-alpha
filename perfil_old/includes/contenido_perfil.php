<?php
include 'variables_perfil.php';
require_once('../controller/usuarioController.php');
$controller = new usuarioController();
$res = $controller->userConfeciones($_SESSION['id_usuario']);
$userData = $controller->getDataUser($_SESSION['id_usuario']);
?>


<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="">
                            logo
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix mb-40"></div>
                <div class="offcanvas__contact mt-30 mb-20">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                    Mirnada City Tower, NYC</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+088889797697">+088889797697</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+012-345-6789"><span class="mailto:support@mail.com">support@mail.com</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas__social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!--Speaker popup area start -->
<!-- <section class="speaker__popup-area">
    <div class="popup__wrapper">
        <div class="popup__title-wrapper">
            <h3 class="popup__title">Agregar historia</h3>
        </div>
        <div class="popup__input-wrapper">
            <form action="#">
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">nombre</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Email</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">telefono</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">campo</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">campo</label>
                    <input type="text">
                </div>

                <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Agregar
                    Historia</button>
            </form>
        </div>
    </div>
</section> -->
<!--Speaker popup area end -->

<!-- Event popup area start -->
<!-- <section class="event__popup-area">
    <div class="popup__wrapper">
        <div class="popup__title-wrapper">
            <h3 class="popup__title">Add Event Attendant</h3>
        </div>
        <div class="popup__input-wrapper">
            <form action="#">
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Name</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Email</label>
                    <input type="email">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Phone Number</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Organization Name</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Ticket ID No</label>
                    <input type="text">
                </div>

                <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add
                    Attendant</button>
            </form>
        </div>
    </div>
</section> -->
<!-- Event popup area end -->

<!-- Dashboard area start -->
<div class="page__full-wrapper">
    <!-- App sidebar area start -->
    <div class="expovent__sidebar" data-background="assets/imagenes/bg/dropdown-bg.png">
        <div class="logo-details">
            <span>
                <a href="">
                    logo
                </a>
            </span>
            <span>
                <a href="">
                    logo
                </a>
            </span>
        </div>
        <div class="sidebar__inner simple-bar">
            <div class="dlabnav">
                <ul class="metismenu" id="menu">
                    <li><a href="perfil">
                            <i class="flaticon-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>

                    </li>
                    <li><a href="" aria-expanded="false">
                            <i class="fas fa-heart"></i>
                            <span class="nav-text">Historias Guardadas</span>
                        </a>
                    </li>
                    <li><a href="" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="nav-text">Mis datos</span>
                        </a>
                    </li>
                    <li><a href="" aria-expanded="false">
                            <i class="fas fa-h"></i>
                            <span class="nav-text">Novedades</span>
                        </a>
                    </li>




                </ul>

                <div class="sidebar__profile mb-50">
                    <a href=""><i class="flaticon-log-out-3"></i><span class="links_name">Cerrar
                            sesión</span></a>
                </div>
                <div class="sidebar__copyright">
                    <p>Copyright @ hastalatumba 2023</p>a
                </div>
            </div>
        </div>
    </div>
    <div class="app__offcanvas-overlay"></div>
    <!-- App sidebar area end -->
    <div class="page__body-wrapper">
        <!-- App header area start -->
        <div class="app__header__area">
            <div class="app__header-inner">
                <div class="app__header-left">
                    <a id="sidebar__active" class="app__header-toggle" href="javascript:void(0)">
                        <div class="bar-icon-2">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <div class="app__herader-input p-relative">
                        <input type="search" placeholder="¿Que buscas? .">
                        <button><i class="fas fa-search" style="color:#000"></i></button>
                    </div>
                </div>
                <div class="app__header-right">
                    <div class="app__header-action">
                        <ul>
                            <li>
                                <div class="nav-item p-relative">
                                    <a id="langdropdown" class="langdropdown" href="javascript:void(0)">
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2045_21)">
                                                    <path d="M18.5295 15.2207C19.4935 13.6502 20.0025 11.8429 20 10.0002C20.0025 8.15741 19.4935 6.34975 18.5295 4.77922L18.524 4.77065C17.6296 3.31298 16.3765 2.10901 14.8841 1.27379C13.3918 0.438574 11.7102 6.98837e-06 10 0C8.28987 -6.98804e-06 6.60828 0.438545 5.11595 1.27375C3.62361 2.10896 2.37039 3.31292 1.47604 4.77057L1.47048 4.77925C0.508875 6.35086 7.13768e-06 8.15752 0 10C-7.13739e-06 11.8425 0.508846 13.6491 1.47044 15.2207L1.47609 15.2295C2.37045 16.6871 3.62366 17.8911 5.11599 18.7263C6.60832 19.5615 8.28989 20 10 20C11.7102 20 13.3917 19.5615 14.8841 18.7262C16.3764 17.891 17.6296 16.6871 18.5239 15.2294L18.5295 15.2207ZM11.2782 18.2861C11.0876 18.47 10.8684 18.6215 10.6289 18.7345C10.4324 18.8279 10.2175 18.8764 10 18.8764C9.78245 18.8764 9.56755 18.8279 9.37109 18.7345C8.91545 18.5018 8.52543 18.1586 8.23666 17.7363C7.64692 16.8841 7.20987 15.9358 6.94506 14.9339C7.96235 14.8713 8.98065 14.8395 10 14.8383C11.0189 14.8383 12.0373 14.8702 13.0551 14.9339C12.9085 15.4491 12.7255 15.9532 12.5073 16.4423C12.2199 17.1302 11.8026 17.7563 11.2782 18.2861ZM1.14315 10.5618H5.17663C5.20289 11.6873 5.32488 12.8085 5.54129 13.9133C4.43869 14.0104 3.33891 14.1435 2.24195 14.3131C1.59959 13.1606 1.22409 11.8787 1.14315 10.5618ZM2.24195 5.68691C3.33847 5.85684 4.43865 5.99013 5.54245 6.08678C5.32561 7.19151 5.20335 8.31271 5.17699 9.43818H1.14315C1.22408 8.1213 1.59959 6.83936 2.24195 5.68691ZM8.72176 1.71385C8.91231 1.52998 9.13164 1.3785 9.37109 1.2654C9.56755 1.17203 9.78245 1.12358 10 1.12358C10.2175 1.12358 10.4324 1.17203 10.6289 1.2654C11.0845 1.49813 11.4745 1.84135 11.7634 2.26367C12.3531 3.11586 12.7901 4.06413 13.0549 5.06606C12.0376 5.12866 11.0194 5.16055 10 5.16174C8.98108 5.16173 7.96271 5.12983 6.94488 5.06605C7.09146 4.5509 7.27455 4.04685 7.49275 3.55771C7.78008 2.8698 8.19736 2.24375 8.72176 1.71385ZM18.8568 9.43818H14.8234C14.7971 8.31271 14.6751 7.19149 14.4587 6.08668C15.5614 5.98966 16.6611 5.8564 17.7581 5.68691C18.4005 6.83936 18.7759 8.1213 18.8568 9.43818ZM6.67136 13.8259C6.45163 12.751 6.32753 11.6586 6.30052 10.5618H13.6996C13.6728 11.6586 13.5489 12.751 13.3295 13.826C12.2208 13.7533 11.111 13.7161 10 13.7146C8.88978 13.7146 7.78024 13.7517 6.67136 13.8259ZM13.3286 6.17404C13.5484 7.24901 13.6725 8.34134 13.6995 9.43818H6.30039C6.32715 8.34134 6.45103 7.24899 6.67056 6.17398C7.77915 6.24672 8.88896 6.28383 10 6.28532C11.1102 6.28532 12.2197 6.24822 13.3286 6.17404ZM14.823 10.5618H18.8568C18.7759 11.8787 18.4004 13.1606 17.758 14.3131C16.6615 14.1431 15.5614 14.0098 14.4575 13.9132C14.6744 12.8085 14.7966 11.6873 14.823 10.5618ZM17.0844 4.65275C16.1256 4.79108 15.164 4.90059 14.1995 4.9813C14.0262 4.33593 13.8026 3.7051 13.5309 3.0946C13.2828 2.53279 12.9706 2.00154 12.6006 1.51138C14.3889 2.05982 15.9582 3.15928 17.0844 4.65275ZM3.72341 3.7234C4.74923 2.69661 6.01126 1.93712 7.39889 1.51152C7.37784 1.53878 7.35618 1.56485 7.33543 1.59267C6.62219 2.61941 6.10266 3.76789 5.80247 4.98147C4.83795 4.89978 3.87567 4.79021 2.91564 4.65275C3.16324 4.32479 3.43313 4.01427 3.72341 3.7234ZM2.91563 15.3472C3.87435 15.2089 4.83594 15.0994 5.80041 15.0187C5.97375 15.6641 6.19732 16.2949 6.46905 16.9054C6.71715 17.4672 7.02932 17.9985 7.39935 18.4886C5.61107 17.9402 4.0418 16.8406 2.91563 15.3472ZM16.2765 16.2765C15.2507 17.3034 13.9887 18.0629 12.6011 18.4885C12.6222 18.4612 12.6438 18.4352 12.6645 18.4073C13.3778 17.3805 13.8974 16.2321 14.1975 15.0185C15.1621 15.1002 16.1244 15.2098 17.0844 15.3473C16.8367 15.6752 16.5668 15.9857 16.2765 16.2765Z" fill="#7A7A7A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2045_21">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="language-text">English</span>
                                    </a>
                                    <div class="lang__dropdown">
                                        <ul>
                                            <li>
                                                <a class="lang__item" href="#">
                                                    <div class="lang__icon">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_647_364)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H28.5003V1.15386H0V0ZM0 2.30771H28.5003V3.46157H0V2.30771ZM0 4.61543H28.5003V5.76929H0V4.61543ZM0 6.92314H28.5003V8.077H0V6.92314ZM0 9.23086H28.5003V10.3847H0V9.23086ZM0 11.5386H28.5003V12.6924H0V11.5386ZM0 13.8463H28.5003V15.0001H0V13.8463Z" fill="#BD3D44" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.15381H28.5003V2.30767H0V1.15381ZM0 3.46152H28.5003V4.61538H0V3.46152ZM0 5.76924H28.5003V6.9231H0V5.76924ZM0 8.07695H28.5003V9.23081H0V8.07695ZM0 10.3847H28.5003V11.5385H0V10.3847ZM0 12.6924H28.5003V13.8462H0V12.6924Z" fill="white" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H11.4V8.07686H0V0Z" fill="#192F5D" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.950137 0.345703L1.05385 0.664922H1.38953L1.11795 0.862236L1.22169 1.18146L0.950107 0.98417L0.678584 1.18146L0.782295 0.862236L0.510742 0.664922H0.846396L0.950137 0.345703ZM2.85013 0.345703L2.95387 0.664922H3.28955L3.01797 0.862236L3.12171 1.18146L2.85013 0.98417L2.5786 1.18146L2.68231 0.862236L2.41076 0.664922H2.74642L2.85013 0.345703ZM4.75021 0.345703L4.85392 0.664922H5.1896L4.91802 0.862236L5.02176 1.18146L4.75021 0.98417L4.47865 1.18146L4.58236 0.862236L4.31081 0.664922H4.64649L4.75021 0.345703ZM6.65017 0.345703L6.75388 0.664922H7.08953L6.81798 0.862236L6.92169 1.18146L6.65017 0.98417L6.37858 1.18146L6.48232 0.862236L6.21074 0.664922H6.54643L6.65017 0.345703ZM8.55021 0.345703L8.65393 0.664922H8.98961L8.71803 0.862236L8.82177 1.18146L8.55019 0.98417L8.27866 1.18146L8.38237 0.862236L8.11082 0.664922H8.44647L8.55021 0.345703ZM10.4503 0.345703L10.554 0.664922H10.8897L10.6181 0.862236L10.7218 1.18146L10.4503 0.98417L10.1787 1.18146L10.2825 0.862236L10.0109 0.664922H10.3466L10.4503 0.345703ZM1.90018 1.15342L2.00389 1.47264H2.33957L2.06799 1.66992L2.17176 1.98917L1.90018 1.79188L1.62862 1.98917L1.73233 1.66992L1.46078 1.47264H1.79646L1.90018 1.15342ZM3.80014 1.15342L3.90385 1.47264H4.2395L3.96795 1.66992L4.07166 1.98917L3.80014 1.79188L3.52855 1.98917L3.63229 1.66992L3.36071 1.47264H3.6964L3.80014 1.15342ZM5.70019 1.15342L5.8039 1.47264H6.13958L5.868 1.66992L5.97174 1.98917L5.70016 1.79188L5.42863 1.98917L5.53234 1.66992L5.26079 1.47264H5.59645L5.70019 1.15342ZM7.60023 1.15342L7.70395 1.47264H8.03963L7.76805 1.66992L7.87179 1.98917L7.60023 1.79188L7.32865 1.98917L7.43245 1.66992L7.16087 1.47264H7.49655L7.60023 1.15342ZM9.5002 1.15342L9.60391 1.47264H9.93956L9.66801 1.66992L9.77172 1.98917L9.5002 1.79188L9.22861 1.98917L9.33235 1.66992L9.06077 1.47264H9.39646L9.5002 1.15342ZM0.950137 1.9611L1.05385 2.28032H1.38953L1.11795 2.47764L1.22169 2.79686L0.950107 2.59957L0.678584 2.79686L0.782295 2.47764L0.510742 2.28032H0.846396L0.950137 1.9611ZM2.85013 1.9611L2.95387 2.28032H3.28955L3.01797 2.47764L3.12171 2.79686L2.85013 2.59957L2.5786 2.79686L2.68231 2.47764L2.41076 2.28032H2.74642L2.85013 1.9611ZM4.75021 1.9611L4.85392 2.28032H5.1896L4.91802 2.47764L5.02176 2.79686L4.75021 2.59957L4.47865 2.79686L4.58236 2.47764L4.31081 2.28032H4.64649L4.75021 1.9611ZM6.65017 1.9611L6.75388 2.28032H7.08953L6.81798 2.47764L6.92169 2.79686L6.65017 2.59957L6.37858 2.79686L6.48232 2.47764L6.21074 2.28032H6.54643L6.65017 1.9611ZM8.55021 1.9611L8.65393 2.28032H8.98961L8.71803 2.47764L8.82177 2.79686L8.55019 2.59957L8.27866 2.79686L8.38237 2.47764L8.11082 2.28032H8.44647L8.55021 1.9611ZM10.4503 1.9611L10.554 2.28032H10.8897L10.6181 2.47764L10.7218 2.79686L10.4503 2.59957L10.1787 2.79686L10.2825 2.47764L10.0109 2.28032H10.3466L10.4503 1.9611ZM1.90018 2.76879L2.00389 3.08804H2.33957L2.06799 3.28532L2.17176 3.60457L1.90018 3.40729L1.62862 3.60457L1.73233 3.28532L1.46078 3.08804H1.79646L1.90018 2.76879ZM3.80014 2.76879L3.90385 3.08804H4.2395L3.96795 3.28532L4.07166 3.60457L3.80014 3.40729L3.52855 3.60457L3.63229 3.28532L3.36071 3.08804H3.6964L3.80014 2.76879ZM5.70019 2.76879L5.8039 3.08804H6.13958L5.868 3.28532L5.97174 3.60457L5.70016 3.40729L5.42863 3.60457L5.53234 3.28532L5.26079 3.08804H5.59645L5.70019 2.76879ZM7.60023 2.76879L7.70395 3.08804H8.03963L7.76805 3.28532L7.87179 3.60457L7.60023 3.40729L7.32865 3.60457L7.43242 3.28532L7.16084 3.08804H7.49652L7.60023 2.76879ZM9.5002 2.76879L9.60391 3.08804H9.93956L9.66801 3.28532L9.77172 3.60457L9.5002 3.40729L9.22861 3.60457L9.33235 3.28532L9.06077 3.08804H9.39646L9.5002 2.76879ZM0.950137 3.5765L1.05385 3.89572H1.38953L1.11795 4.09304L1.22169 4.41226L0.950107 4.21497L0.678584 4.41226L0.782295 4.09304L0.510742 3.89572H0.846396L0.950137 3.5765ZM2.85013 3.5765L2.95387 3.89572H3.28955L3.01797 4.09304L3.12171 4.41226L2.85013 4.21497L2.5786 4.41226L2.68231 4.09304L2.41076 3.89572H2.74642L2.85013 3.5765ZM4.75021 3.5765L4.85392 3.89572H5.1896L4.91802 4.09304L5.02176 4.41226L4.75021 4.21497L4.47865 4.41226L4.58236 4.09304L4.31081 3.89572H4.64649L4.75021 3.5765ZM6.65017 3.5765L6.75388 3.89572H7.08953L6.81798 4.09304L6.92169 4.41226L6.65017 4.21497L6.37858 4.41226L6.48232 4.09304L6.21074 3.89572H6.54643L6.65017 3.5765ZM8.55021 3.5765L8.65393 3.89572H8.98961L8.71803 4.09304L8.82177 4.41226L8.55019 4.21497L8.27866 4.41226L8.38237 4.09304L8.11082 3.89572H8.44647L8.55021 3.5765ZM10.4503 3.5765L10.554 3.89572H10.8897L10.6181 4.09304L10.7218 4.41226L10.4503 4.21497L10.1787 4.41226L10.2825 4.09304L10.0109 3.89572H10.3466L10.4503 3.5765ZM1.90018 4.38419L2.00389 4.70344H2.33957L2.06799 4.90072L2.17176 5.21997L1.90018 5.02269L1.62862 5.21997L1.73233 4.90072L1.46078 4.70344H1.79646L1.90018 4.38419ZM3.80014 4.38419L3.90385 4.70344H4.2395L3.96795 4.90072L4.07166 5.21997L3.80014 5.02269L3.52855 5.21997L3.63229 4.90072L3.36071 4.70344H3.6964L3.80014 4.38419ZM5.70019 4.38419L5.8039 4.70344H6.13958L5.868 4.90072L5.97174 5.21997L5.70016 5.02269L5.42863 5.21997L5.53234 4.90072L5.26079 4.70344H5.59645L5.70019 4.38419ZM7.60023 4.38419L7.70395 4.70344H8.03963L7.76805 4.90072L7.87179 5.21997L7.60023 5.02269L7.32865 5.21997L7.43242 4.90072L7.16084 4.70344H7.49652L7.60023 4.38419ZM9.5002 4.38419L9.60391 4.70344H9.93956L9.66801 4.90072L9.77172 5.21997L9.5002 5.02269L9.22861 5.21997L9.33235 4.90072L9.06077 4.70344H9.39646L9.5002 4.38419ZM0.950137 5.1919L1.05385 5.51112H1.38953L1.11795 5.70844L1.22169 6.02766L0.950107 5.83037L0.678584 6.02766L0.782295 5.70844L0.510742 5.51112H0.846396L0.950137 5.1919ZM2.85013 5.1919L2.95387 5.51112H3.28955L3.01797 5.70844L3.12171 6.02766L2.85013 5.83037L2.5786 6.02766L2.68231 5.70844L2.41076 5.51112H2.74642L2.85013 5.1919ZM4.75021 5.1919L4.85392 5.51112H5.1896L4.91802 5.70844L5.02176 6.02766L4.75021 5.83037L4.47865 6.02766L4.58236 5.70844L4.31081 5.51112H4.64649L4.75021 5.1919ZM6.65017 5.1919L6.75388 5.51112H7.08953L6.81798 5.70844L6.92169 6.02766L6.65017 5.83037L6.37858 6.02766L6.48232 5.70844L6.21074 5.51112H6.54643L6.65017 5.1919ZM8.55021 5.1919L8.65393 5.51112H8.98961L8.71803 5.70844L8.82177 6.02766L8.55019 5.83037L8.27866 6.02766L8.38237 5.70844L8.11082 5.51112H8.44647L8.55021 5.1919ZM10.4503 5.1919L10.554 5.51112H10.8897L10.6181 5.70844L10.7218 6.02766L10.4503 5.83037L10.1787 6.02766L10.2825 5.70844L10.0109 5.51112H10.3466L10.4503 5.1919ZM1.90018 5.99959L2.00389 6.31884H2.33957L2.06799 6.51612L2.17176 6.83537L1.90018 6.63809L1.62862 6.83537L1.73233 6.51612L1.46078 6.31884H1.79646L1.90018 5.99959ZM3.80014 5.99959L3.90385 6.31884H4.2395L3.96795 6.51612L4.07166 6.83537L3.80014 6.63809L3.52855 6.83537L3.63229 6.51612L3.36071 6.31884H3.6964L3.80014 5.99959ZM5.70019 5.99959L5.8039 6.31884H6.13958L5.868 6.51612L5.97174 6.83537L5.70016 6.63809L5.42863 6.83537L5.53234 6.51612L5.26079 6.31884H5.59645L5.70019 5.99959ZM7.60023 5.99959L7.70395 6.31884H8.03963L7.76805 6.51612L7.87179 6.83537L7.60023 6.63809L7.32865 6.83537L7.43242 6.51612L7.16084 6.31884H7.49652L7.60023 5.99959ZM9.5002 5.99959L9.60391 6.31884H9.93956L9.66801 6.51612L9.77172 6.83537L9.5002 6.63809L9.22861 6.83537L9.33235 6.51612L9.06077 6.31884H9.39646L9.5002 5.99959ZM0.950137 6.8073L1.05385 7.12652H1.38953L1.11795 7.32384L1.22169 7.64306L0.950107 7.44577L0.678584 7.64306L0.782295 7.32384L0.510742 7.12652H0.846396L0.950137 6.8073ZM2.85013 6.8073L2.95387 7.12652H3.28955L3.01797 7.32384L3.12171 7.64306L2.85013 7.44577L2.5786 7.64306L2.68231 7.32384L2.41076 7.12652H2.74642L2.85013 6.8073ZM4.75021 6.8073L4.85392 7.12652H5.1896L4.91802 7.32384L5.02176 7.64306L4.75021 7.44577L4.47865 7.64306L4.58236 7.32384L4.31081 7.12652H4.64649L4.75021 6.8073ZM6.65017 6.8073L6.75388 7.12652H7.08953L6.81798 7.32384L6.92169 7.64306L6.65017 7.44577L6.37858 7.64306L6.48232 7.32384L6.21074 7.12652H6.54643L6.65017 6.8073ZM8.55021 6.8073L8.65393 7.12652H8.98961L8.71803 7.32384L8.82177 7.64306L8.55019 7.44577L8.27866 7.64306L8.38237 7.32384L8.11082 7.12652H8.44647L8.55021 6.8073ZM10.4503 6.8073L10.554 7.12652H10.8897L10.6181 7.32384L10.7218 7.64306L10.4503 7.44577L10.1787 7.64306L10.2825 7.32384L10.0109 7.12652H10.3466L10.4503 6.8073Z" fill="white" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_647_364">
                                                                    <rect width="20" height="15" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="lang__country">
                                                        <span>English</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="lang__item" href="#">
                                                    <div class="lang__icon">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_650_408)">
                                                                <path d="M0 0H20V5H0V0Z" fill="#00732F" />
                                                                <path d="M0 5H20V10H0V5Z" fill="white" />
                                                                <path d="M0 10H20V15H0V10Z" fill="black" />
                                                                <path d="M0 0H6.875V15H0V0Z" fill="#FF0000" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_650_408">
                                                                    <rect width="20" height="15" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="lang__country">
                                                        <span>لعربية</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="lang__item" href="#">
                                                    <div class="lang__icon">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_650_394)">
                                                                <path d="M0 0H20V15H0V0Z" fill="#DE2910" />
                                                                <path d="M2.4269 5.5725L3.74988 1.5L5.07287 5.5725L1.60791 3.0525H5.89186L2.4269 5.5725Z" fill="#FFDE00" />
                                                                <path d="M8.25704 1.56588L6.86593 1.88534L7.8037 0.809307L7.67681 2.23181L6.94284 1.00688L8.25704 1.56588Z" fill="#FFDE00" />
                                                                <path d="M9.66184 3.3445L8.25572 3.09942L9.53741 2.47132L8.86876 3.73327L8.66731 2.31955L9.66184 3.3445Z" fill="#FFDE00" />
                                                                <path d="M9.46176 5.84138L8.27787 5.04411L9.70428 4.99338L8.57909 5.87289L8.97174 4.49993L9.46176 5.84138Z" fill="#FFDE00" />
                                                                <path d="M7.69664 7.47561L6.91253 6.28295L8.24786 6.78708L6.87029 7.16375L7.76274 6.04899L7.69664 7.47561Z" fill="#FFDE00" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_650_394">
                                                                    <rect width="20" height="15" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="lang__country">
                                                        <span>简体中文</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="lang__item" href="#">
                                                    <div class="lang__icon">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_651_428)">
                                                                <path d="M0 10H20V15.0001H0V10Z" fill="#FFCE00" />
                                                                <path d="M0 0H20V5H0V0Z" fill="black" />
                                                                <path d="M0 5H20V10H0V5Z" fill="#DD0000" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_651_428">
                                                                    <rect width="20" height="15" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="lang__country">
                                                        <span>Deutsch</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="lang__item" href="#">
                                                    <div class="lang__icon">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_651_427)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H20V15H0V0Z" fill="white" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.66678V15H0V0Z" fill="#00267F" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.333 0H19.9998V15H13.333V0Z" fill="#F31830" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_651_427">
                                                                    <rect width="20" height="15" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="lang__country">
                                                        <span>Français</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <div class="nav-item">
                                        <div class="notification__icon">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.47106 21.549C7.09156 21.549 6.78356 21.2417 6.78356 20.8615V14.7984H0.6875C0.308 14.7984 0 14.4911 0 14.1109C0 13.7308 0.308 13.4234 0.6875 13.4234H7.47106C7.85056 13.4234 8.15856 13.7308 8.15856 14.1109V20.8615C8.15856 21.2417 7.85056 21.549 7.47106 21.549V21.549ZM14.5289 21.5318C14.1494 21.5318 13.8414 21.2245 13.8414 20.8443V14.0601C13.8414 13.6799 14.1494 13.3726 14.5289 13.3726H21.2795C21.659 13.3726 21.967 13.6799 21.967 14.0601C21.967 14.4403 21.659 14.7476 21.2795 14.7476H15.2164V20.8443C15.2164 21.2245 14.9084 21.5318 14.5289 21.5318V21.5318ZM7.47106 8.17644H0.7205C0.341 8.17644 0.033 7.86912 0.033 7.48894C0.033 7.10875 0.341 6.80144 0.7205 6.80144H6.78356V0.704688C6.78356 0.3245 7.09156 0.0171875 7.47106 0.0171875C7.85056 0.0171875 8.15856 0.3245 8.15856 0.704688V7.48894C8.15856 7.86844 7.85056 8.17644 7.47106 8.17644ZM21.3125 8.12556H14.5289C14.1494 8.12556 13.8414 7.81825 13.8414 7.43806V0.6875C13.8414 0.307312 14.1494 0 14.5289 0C14.9084 0 15.2164 0.307312 15.2164 0.6875V6.75056H21.3125C21.692 6.75056 22 7.05788 22 7.43806C22 7.81825 21.692 8.12556 21.3125 8.12556Z" fill="#7A7A7A" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="nav-item p-relative">
                                    <a id="notifydropdown" href="#">
                                        <div class="notification__icon">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_209_757)">
                                                    <path d="M9.1665 22C7.27185 22 5.729 20.4582 5.729 18.5625C5.729 18.183 6.037 17.875 6.4165 17.875C6.79601 17.875 7.104 18.183 7.104 18.5625C7.104 19.7002 8.02985 20.625 9.1665 20.625C10.3032 20.625 11.229 19.7002 11.229 18.5625C11.229 18.183 11.537 17.875 11.9165 17.875C12.296 17.875 12.604 18.183 12.604 18.5625C12.604 20.4582 11.0613 22 9.1665 22Z" fill="#7A7A7A" />
                                                    <path d="M16.7291 19.2499H1.60411C0.719559 19.2499 0 18.5304 0 17.6458C0 17.1764 0.204437 16.7319 0.560944 16.4266C0.583939 16.4065 0.608612 16.3882 0.634293 16.3715C1.97992 15.1973 2.75 13.5079 2.75 11.724V9.16655C2.75 6.18106 4.77306 3.61805 7.66975 2.93323C8.04002 2.84797 8.41046 3.07439 8.49757 3.44483C8.58452 3.81426 8.35541 4.18453 7.98698 4.27164C5.71266 4.80875 4.125 6.82174 4.125 9.16655V11.724C4.125 13.9388 3.15417 16.0343 1.46396 17.4724C1.4502 17.4835 1.43828 17.4936 1.42351 17.5037C1.39883 17.5349 1.375 17.5826 1.375 17.6458C1.375 17.7704 1.47957 17.8749 1.60411 17.8749H16.7291C16.8538 17.8749 16.9584 17.7704 16.9584 17.6458C16.9584 17.5815 16.9346 17.5349 16.9089 17.5037C16.8951 17.4936 16.8822 17.4835 16.8694 17.4724C16.0482 16.7722 15.3999 15.9271 14.9436 14.9599C14.7804 14.617 14.9269 14.2073 15.2707 14.0442C15.6173 13.881 16.0233 14.0296 16.1856 14.3723C16.5485 15.1387 17.0573 15.8116 17.7008 16.3744C17.7246 16.3908 17.7495 16.4083 17.7704 16.4266C18.129 16.7319 18.3334 17.1764 18.3334 17.6458C18.3334 18.5304 17.6138 19.2499 16.7291 19.2499Z" fill="#7A7A7A" />
                                                    <path d="M16.0417 11.9166C12.7565 11.9166 10.0835 9.24365 10.0835 5.95839C10.0835 2.67296 12.7565 0 16.0417 0C19.3271 0 22.0001 2.67296 22.0001 5.95839C22.0001 9.24365 19.3271 11.9166 16.0417 11.9166ZM16.0417 1.375C13.5145 1.375 11.4585 3.43112 11.4585 5.95839C11.4585 8.48566 13.5145 10.5416 16.0417 10.5416C18.569 10.5416 20.6251 8.48566 20.6251 5.95839C20.6251 3.43112 18.569 1.375 16.0417 1.375Z" fill="#7A7A7A" />
                                                    <path d="M16.2709 8.70828C15.8914 8.70828 15.5834 8.40028 15.5834 8.02078V5.0415H15.125C14.7455 5.0415 14.4375 4.73351 14.4375 4.354C14.4375 3.9745 14.7455 3.6665 15.125 3.6665H16.2709C16.6504 3.6665 16.9584 3.9745 16.9584 4.354V8.02078C16.9584 8.40028 16.6504 8.70828 16.2709 8.70828Z" fill="#7A7A7A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_209_757">
                                                        <rect width="22" height="22" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="notification__dropdown">
                                        <div class="notification__card card__scroll">
                                            <div class="notification__header">
                                                <div class="notification__inner">
                                                    <h5>Notificaciónes</h5>
                                                    <span>(10)</span>
                                                </div>
                                            </div>
                                            <div class="notification__item">
                                                <div class="notification__thumb">
                                                    <a href=""><img src="assets/imagenes/meta/chatbox/01.png" alt="image not found"></a>
                                                </div>
                                                <div class="notification__content">
                                                    <p>Tu historia se ha publicado con exito</p>
                                                    <div class="notification__time">
                                                        <span>2h ago</span>
                                                        <span class="status">Graphic Design</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item p-relative">
                        <a id="userportfolio" href="#">
                            <div class="user__portfolio">
                                <div class="user__portfolio-thumb">
                                    <img src="assets/imagenes/user/1/01.png" alt="imge not found">
                                </div>
                                <div class="user__content">
                                    <span>@<?php echo $userData->alias ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="user__dropdown">
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fas fa-user-circle"></i>

                                        MI perfil</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-edit"></i>

                                        Publicar Historia</a>
                                </li>



                                <li>
                                    <a href="">
                                        <i class="fas fa-sign-out-alt"></i>Cerrar sesion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body__overlay"></div>
        <!-- App header area end -->
        <!-- App side area start -->
        <div class="app__slide-wrapper">
            <div class="breadcrumb__area">
                <div class="breadcrumb__wrapper mb-35">
                    <div class="breadcrumb__main">
                        <div class="breadcrumb__inner">
                            <div class="breadcrumb__icon">
                                <i class="fas fa-house"></i>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="">Purgatorio</a></span></li>
                                        <li class="active"><span>Mi Perfil @<?php echo $userData->alias ?></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="breadcrumb__tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="day-tab-1" data-bs-toggle="tab" data-bs-target="#day-tab-1-pane" type="button" role="tab" aria-controls="day-tab-1-pane" aria-selected="true"> Mis secretos <i class="fas fa-heart"></i></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab-2" data-bs-toggle="tab" data-bs-target="#day-tab-2-pane" type="button" role="tab" aria-controls="day-tab-2-pane" aria-selected="false">Mis Datos <i class="fas fa-user"></i></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-danger" id="day-tab-4" data-bs-toggle="tab" data-bs-target="#day-tab-4-pane" type="button" role="tab" aria-controls="day-tab-4-pane" aria-selected="false">
                                        Agregar historia <i class="far fa-plus-square"></i></button>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="breadcrum__button">
                            <a class="breadcrum__btn speaker__popup-active" href="#">Agregar historia<i
                                    class="fa-regular fa-plus"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="speaker__area pb-60">
                <div class="schedule__content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="day-tab-1-pane" role="tabpanel" aria-labelledby="day-tab-1" tabindex="0">
                            <div class="row">
                                <?php
                                foreach ($res as $data) {
                                ?>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                        <div class="speaker__list-item mb-30">
                                            <div class="speaker__list-thumb">
                                                <a href="">
                                                    <?php if ($userData->genero == 'Masculino') { ?>
                                                        <img src="assets/imagenes/portadas_historias/hombre.webp" alt="image not found">
                                                    <?php
                                                    } elseif ($userData->genero == 'Femenino') { ?>
                                                        <img src="assets/imagenes/portadas_historias/mujer.webp" alt="image not found">
                                                    <?php
                                                    } ?>
                                                </a>
                                            </div>
                                            <div class="speaker__list-content-inner">
                                                <div class="speaker__list-content">
                                                    <h5 class="speaker__author-title"><a href=""><?php echo $data->titulo ?></a></h5>
                                                    <span class="speaker__author-info"><?php echo $userData->alias ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab-2-pane" role="tabpanel" aria-labelledby="day-tab-2" tabindex="0">
                            <div class="row">


                                <div class="body__card-wrapper">
                                    <div class="card__header-top">
                                        <div class="card__title-inner">
                                            <h4 class="event__information-title">Mis datos</h4>
                                        </div>

                                    </div>
                                    <div class="create__event-main pt-25">
                                        <div class="event__left-box">
                                            <div class="create__input-wrapper">

                                                <label class="input__field-text">Género</label>
                                                <div class="contact__select mb-15">

                                                    <select name="select1">
                                                        <option selected>Cuál es tu género?</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="singel__input-field mb-15">
                                                    <label class="input__field-text">Mi pseudónimo</label>
                                                    <input type="text" value="<?php echo $userData->alias ?>" placeholder="pseudonimo">
                                                </div>
                                                <div class="event__input mb-15">
                                                    <label class="input__field-text">Descripción</label>
                                                    <textarea placeholder="detalles"><?php echo $userData->descripcion ?></textarea>
                                                </div>

                                            </div>

                                            <form action="#">
                                                <div class="row g-20">
                                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                                        <div class="singel__input-field is-color-change mb-15">
                                                            <label class="input__field-text">Fecha de Nacimeitno</label>
                                                            <input type="date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="event__right-box">
                                            <div class="create__input-wrapper">
                                                <form action="#">
                                                    <div class="singel__input-field mb-15">
                                                        <label class="input__field-text">Email</label>
                                                        <input type="text" value="<?php echo $userData->email ?>" placeholder="email">
                                                    </div>
                                                    <button type="submit" class="unfield__input-btn w-100 mb-20"><i class="fas fa-pen"></i>Editar PErfíl</button>
                                                    <button class="input__btn w-100" type="submit">
                                                        <li class="fas fa-trash"></li> Borrar
                                                        Perfil
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="day-tab-4-pane" role="tabpanel" aria-labelledby="day-tab-4" tabindex="0">
                            <div class="row">
                                <div class="body__card-wrapper">
                                    <div class="card__header-top">
                                        <div class="card__title-inner">
                                            <h4 class="event__information-title">Libérate - Déjanos Tú Bistoria </h4>
                                        </div>

                                    </div>
                                    <div class="pt-25">
                                        <form action="store.php" method="POST">
                                            <div class="singel__input-field mb-15">
                                                <label class="input__field-text">Título Historia</label>
                                                <input name="titulo" type="text">
                                            </div>
                                            <div class="singel__input-field mb-15">
                                                <label class="input__field-text">Seleccion Categoria</label>
                                                <input name="categoria" type="text">
                                            </div>
                                            <div class="event__input mb-15">
                                                <label class="input__field-text">Libérate</label>
                                                <textarea name="confecion" placeholder="detalles"></textarea>
                                            </div>
                                            <button class="input__btn w-100" type="submit">
                                                <li class="fas fa-upload" aria-hidden="true"></li> Publicar Historia
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- App side area end -->
            </div>
        </div>
        <!-- Dashboard area end -->


        <!-- Back to top start -->