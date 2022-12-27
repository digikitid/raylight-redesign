<?php
/**
 * The header.
 * 
 * This is template that displays all of the <head> section and everything up until main.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *  
 * @package raylight
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raylight</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    
<nav class="ray-navbar">
    <div class="container">
        
        <div class="ray-navbar-container">
            <div class="ray-navbar-left">
                <div class="ray-menu-button">
                    <span class="ray-menu-button-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="ray-menu-button-text">MENU</span>
                </div>
                <div class="ray-network-button">
                    <span class="ray-network-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5001 22C16.418 22.0125 15.3925 21.5181 14.7283 20.6637C14.0642 19.8094 13.838 18.6935 14.1171 17.648L7.85709 14.07C6.77538 15.061 5.18977 15.2708 3.88758 14.5951C2.58538 13.9194 1.84397 12.5022 2.03146 11.0472C2.21895 9.59217 3.29542 8.40923 4.72637 8.08574C6.15732 7.76224 7.63795 8.36711 8.43309 9.59999L14.1161 6.35099C14.0426 6.07318 14.0036 5.78735 14.0001 5.49999C13.9858 3.8267 15.1479 2.37313 16.7833 2.01881C18.4187 1.66449 20.0782 2.50673 20.7577 4.03591C21.4372 5.56508 20.9501 7.36122 19.5911 8.3375C18.232 9.31378 16.3744 9.20208 15.1421 8.06999L8.99109 11.585C8.985 11.8443 8.94876 12.102 8.88309 12.353L15.1421 15.93C16.2944 14.8725 18.0089 14.7093 19.34 15.5303C20.6711 16.3513 21.2947 17.9567 20.8669 19.461C20.4391 20.9653 19.064 22.0023 17.5001 22ZM17.5001 17C16.6717 17 16.0001 17.6716 16.0001 18.5C16.0001 19.3284 16.6717 20 17.5001 20C18.3285 20 19.0001 19.3284 19.0001 18.5C19.0001 17.6716 18.3285 17 17.5001 17ZM5.50009 9.99999C4.67166 9.99999 4.00009 10.6716 4.00009 11.5C4.00009 12.3284 4.67166 13 5.50009 13C6.32852 13 7.00009 12.3284 7.00009 11.5C7.00009 10.6716 6.32852 9.99999 5.50009 9.99999ZM17.5001 3.99999C16.6717 3.99999 16.0001 4.67156 16.0001 5.49999C16.0001 6.32842 16.6717 6.99999 17.5001 6.99999C18.3285 6.99999 19.0001 6.32842 19.0001 5.49999C19.0001 4.67156 18.3285 3.99999 17.5001 3.99999Z" fill="#2E3A59"></path>
                        </svg>
                    </span>
                    <span class="ray-network-text">NETWORK</span>
                    <ul class="ray-network-menu">
                        <li><a href="#">detik.com</a></li>
                        <li><a href="#">cnnindonesia.com</a></li>
                        <li><a href="#">kumparan.com</a></li>
                        <li><a href="#">liputan6.com</a></li>
                        <li><a href="#">vice.com</a></li>
                    </ul>
                </div>
                <div class="ray-dark-button">
                    <span class="ray-dark-icon">
                        <i class="fas fa-moon"></i>
                    </span>
                </div>
                <div class="ray-search-button">
                    <span class="ray-search-icon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="ray-navbar-right">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <span class="ray-navbar-date">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C19.995 7.58378 16.4162 4.00496 12 4ZM17 13H11V7H13V11H17V13Z" fill="#2E3A59"></path>
                    </svg>
                    <i>19 November 2022</i>
                </span>
            </div>
        </div>

    </div>
</nav>

<nav class="ray-navbar-mobile">
    <div class="container">
        
        <div class="ray-navbar-mobile-container">
            <div class="ray-navbar-mobile-menu-button">
                <span><i class="fas fa-bars"></i></span>
            </div>
            <div class="ray-navbar-mobile-branding">
                <!--<div class="ray-branding-mobile">
                    <h1><a href="#">Raylight</a></h1>
                </div>-->
                <div class="ray-branding-mobile">
                    <img src="assets/image/Raylight.png" alt="site logo">
                </div>
            </div>
            <div class="ray-navbar-mobile-search-button">
                <span><i class="fas fa-search"></i></span>
            </div>
        </div>

    </div>
</nav>

<section class="ray-navbar-menu-wrapper">
    <nav class="ray-navbar-menu">
        <div class="ray-navbar-menu-close">
            <span>
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z" fill="#2E3A59"></path>
                </svg>
            </span>
        </div>
        <div class="ray-navbar-menu-menu">
            <section class="ray-navbar-menu-widget">
                <?php include 'inc/widget/widget-style/ray-widget-style-1.php'; ?>
                <?php include 'inc/widget/widget-style/ray-widget-style-2.php'; ?>
                <?php include 'inc/widget/widget-style/ray-widget-style-3.php'; ?>
            </section>
        </div>
    </nav>
</section>

<section class="ray-search-wrapper">
    <div class="ray-search-close">
        <i class="fas fa-times"></i>
    </div>
    <div class="ray-search-form">
        <form action="">
            <input type="text" name="s" placeholder="search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</section>

<nav class="ray-nav-mobile-bottom">
    <ul>
        <li>
            <span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 8.65714L12 3L20 8.65714V21H4V8.65714Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
        <li>
            <span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5001 22C16.418 22.0125 15.3925 21.5181 14.7283 20.6637C14.0642 19.8094 13.838 18.6935 14.1171 17.648L7.85709 14.07C6.77538 15.061 5.18977 15.2708 3.88758 14.5951C2.58538 13.9194 1.84397 12.5022 2.03146 11.0472C2.21895 9.59217 3.29542 8.40923 4.72637 8.08574C6.15732 7.76224 7.63795 8.36711 8.43309 9.59999L14.1161 6.35099C14.0426 6.07318 14.0036 5.78735 14.0001 5.49999C13.9858 3.8267 15.1479 2.37313 16.7833 2.01881C18.4187 1.66449 20.0782 2.50673 20.7577 4.03591C21.4372 5.56508 20.9501 7.36122 19.5911 8.3375C18.232 9.31378 16.3744 9.20208 15.1421 8.06999L8.99109 11.585C8.985 11.8443 8.94876 12.102 8.88309 12.353L15.1421 15.93C16.2944 14.8725 18.0089 14.7093 19.34 15.5303C20.6711 16.3513 21.2947 17.9567 20.8669 19.461C20.4391 20.9653 19.064 22.0023 17.5001 22ZM17.5001 17C16.6717 17 16.0001 17.6716 16.0001 18.5C16.0001 19.3284 16.6717 20 17.5001 20C18.3285 20 19.0001 19.3284 19.0001 18.5C19.0001 17.6716 18.3285 17 17.5001 17ZM5.50009 9.99999C4.67166 9.99999 4.00009 10.6716 4.00009 11.5C4.00009 12.3284 4.67166 13 5.50009 13C6.32852 13 7.00009 12.3284 7.00009 11.5C7.00009 10.6716 6.32852 9.99999 5.50009 9.99999ZM17.5001 3.99999C16.6717 3.99999 16.0001 4.67156 16.0001 5.49999C16.0001 6.32842 16.6717 6.99999 17.5001 6.99999C18.3285 6.99999 19.0001 6.32842 19.0001 5.49999C19.0001 4.67156 18.3285 3.99999 17.5001 3.99999Z" fill="#2E3A59"></path>
                </svg>
            </span>
        </li>
        <li>
            <span class="menu-bars">    
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="5" y1="18" x2="19" y2="18" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="5" y1="13" x2="19" y2="13" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="5" y1="8" x2="19" y2="8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
        <li>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.171 19 18.1395 17.1814 19 14.2899" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19 14C18.8319 14 18.6652 13.9941 18.5 13.9824C12.5 15 9.50001 11.5 12 5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
        <li>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 7L12 18" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 7L15 9.5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 7L9 9.5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
    </ul>
</nav>