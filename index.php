<?php
session_start();
$FirstName = $_SESSION['FirstName']; //need toh para makita ung name if wala sasabihin undefined variable ung $FirstName

if (!isset($_SESSION['id'])){
 //!isset = not isset   
// checheck if naka log in si user if hindi reredirect sa login page
    header("location: login.php");
}
   
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/templates/caffe-craze/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:16:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Coffee Shop">

    <title>Coffee Shop</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
    <!--<a href="about.php" class="nav-item nav-link">About</a>-->


    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-slider.css">
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="tt-smooth-scroll">


    <!-- PRELOADER START -->
    <div id="preloader">
        <div class="coffeeloader">
            <div class="steam">
                <div class="smoke1"></div>
                <div class="smoke2"></div>
                <div class="smoke3"></div>
            </div>
            <div class="cupcontainer">
                <div class="cup"></div>
                <div class="glance"></div>
                <div class="handle"></div>
            </div>
            <div class="plate"></div>
            <div class="bottom"></div>
        </div>
    </div>
    <!-- PRELOADER END -->

    
    <!-- Main Wrapper Start -->
    <div id="scroll-container">

        <!-- Header Menu Start -->
        <header class="header">
            <div class="container-fluid">
                <div class="top-bar">
                    <ul class="social-icon unstyled">
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M11.75 3.75C12.0087 3.75 12.2188 3.54 12.2188 3.28125V0.46875C12.2188 0.21 12.0087 0 11.75 0H8.9375C7.12812 0 5.65625 1.47187 5.65625 3.28125V5.625H4.25C3.99125 5.625 3.78125 5.835 3.78125 6.09375V8.90625C3.78125 9.165 3.99125 9.375 4.25 9.375H5.65625V15.5312C5.65625 15.79 5.86625 16 6.125 16H8.9375C9.19625 16 9.40625 15.79 9.40625 15.5312V9.375H11.2812C11.5103 9.375 11.7059 9.20938 11.7438 8.98344L12.2125 6.17094C12.235 6.035 12.1969 5.89594 12.1078 5.79063C12.0188 5.68563 11.8878 5.625 11.75 5.625H9.40625V3.75H11.75ZM8.9375 6.5625H11.1966L10.8841 8.4375H8.9375C8.67875 8.4375 8.46875 8.6475 8.46875 8.90625V15.0625H6.59375V8.90625C6.59375 8.6475 6.38375 8.4375 6.125 8.4375H4.71875V6.5625H6.125C6.38375 6.5625 6.59375 6.3525 6.59375 6.09375V3.28125C6.59375 1.98906 7.64531 0.9375 8.9375 0.9375H11.2812V2.8125H8.9375C8.67875 2.8125 8.46875 3.0225 8.46875 3.28125V6.09375C8.46875 6.3525 8.67875 6.5625 8.9375 6.5625Z"
                                        class="fill-white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_9636_1765)">
                                      <path d="M5.85531 16.0032C4.86031 16.0032 3.8875 15.656 3.11656 15.0254C2.10406 14.1973 1.52344 12.9748 1.52344 11.6713C1.52344 10.722 1.82531 9.8201 2.39625 9.06354C2.9475 8.33322 3.73187 7.78604 4.605 7.52322C5.38531 7.28822 6.20813 7.67854 6.51844 8.43135C6.53844 8.47947 6.55594 8.52947 6.57094 8.57885C6.6925 8.9826 6.64969 9.40947 6.45031 9.78072C6.25094 10.152 5.91875 10.4235 5.515 10.5451C5.02313 10.6932 4.67969 11.1563 4.67969 11.6713C4.67969 12.0829 4.90031 12.4701 5.25563 12.682C5.45188 12.7992 5.67688 12.8557 5.90656 12.846C6.53719 12.8192 7.03125 12.2926 7.03125 11.647V1.59635C7.03125 0.876349 7.50875 0.241661 8.19219 0.0532237C8.2675 0.0322862 8.345 0.0172862 8.42188 0.00822372C8.56469 -0.00896379 8.70937 -0.00615128 8.85219 0.0157237C9.39656 0.0966612 9.86562 0.463224 10.0769 0.972599C10.1566 1.16479 10.1969 1.36791 10.1969 1.57635C10.1969 2.41166 10.5766 3.18635 11.2387 3.70166C11.7125 4.07041 12.28 4.26666 12.8797 4.26885C13.5238 4.27104 14.0997 4.6551 14.3472 5.24729C14.4553 5.50666 14.4916 5.79166 14.4516 6.07166C14.3406 6.84447 13.6606 7.4251 12.8681 7.4251C12.8653 7.4251 12.8628 7.4251 12.86 7.4251C11.9184 7.42041 11.0087 7.19354 10.1875 6.76322V11.6788C10.1875 11.6838 10.1875 11.6888 10.1872 11.6942C10.18 12.9788 9.6075 14.1857 8.61594 15.0073C7.84094 15.6495 6.86063 16.0032 5.85531 16.0032ZM5.06188 8.39291C5 8.39291 4.93719 8.40197 4.875 8.42072C4.19094 8.62666 3.57625 9.05572 3.14437 9.62822C2.69719 10.2207 2.46094 10.9273 2.46094 11.6713C2.46094 12.6923 2.91625 13.6504 3.71031 14.2998C4.31437 14.7938 5.07625 15.0657 5.85531 15.0657C6.6425 15.0657 7.41063 14.7885 8.0175 14.2854C8.79656 13.6398 9.24563 12.692 9.24969 11.6848C9.24969 11.6813 9.24969 11.6773 9.25 11.6726V4.99604L9.99562 5.54166C10.8341 6.15541 11.8262 6.48229 12.8647 6.4876H12.8681C13.1972 6.4876 13.4784 6.25229 13.5234 5.93885C13.5397 5.82447 13.5259 5.71354 13.4822 5.60885C13.3819 5.36916 13.1388 5.20729 12.8766 5.20635C12.0675 5.20354 11.3019 4.93885 10.6631 4.44135C9.77125 3.74697 9.25969 2.7026 9.25969 1.57635C9.25969 1.49166 9.24344 1.40916 9.21125 1.33166C9.12531 1.12447 8.93469 0.975411 8.71406 0.942911L8.71 0.942286C8.65125 0.933224 8.59188 0.931974 8.53313 0.939161C8.50281 0.942911 8.47219 0.948849 8.44187 0.957286C8.16281 1.03385 7.96844 1.29666 7.96844 1.59635V11.647C7.96844 12.196 7.76156 12.7188 7.38625 13.1192C7.00688 13.5238 6.49531 13.7595 5.94594 13.7826C5.53312 13.7998 5.12844 13.6979 4.775 13.487C4.13781 13.107 3.74188 12.411 3.74188 11.6713C3.74188 10.7463 4.35969 9.91416 5.24438 9.6476C5.40813 9.59822 5.54313 9.48791 5.62406 9.33729C5.705 9.18666 5.7225 9.01322 5.67313 8.84947C5.66719 8.82947 5.65969 8.80885 5.65156 8.78885C5.55031 8.54322 5.315 8.39291 5.06188 8.39291ZM10.1869 11.6867V11.6907C10.1869 11.6895 10.1869 11.6879 10.1869 11.6867Z" class="fill-white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_9636_1765">
                                        <rect width="16" height="16" class="fill-white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_9636_1768)">
                                      <path d="M8.15747 16C8.10449 16 8.05151 16 7.99817 15.9997C6.74402 16.0028 5.5852 15.9709 4.45825 15.9023C3.42505 15.8394 2.48193 15.4824 1.73071 14.8698C1.00586 14.2788 0.510864 13.4796 0.259521 12.4947C0.0407715 11.6373 0.0291748 10.7956 0.0180664 9.98152C0.0100097 9.39742 0.00170898 8.70528 0 8.00142C0.00170898 7.29463 0.0100097 6.60249 0.0180664 6.01839C0.0291748 5.20442 0.0407715 4.36275 0.259521 3.5052C0.510864 2.52034 1.00586 1.72115 1.73071 1.13008C2.48193 0.517533 3.42505 0.160478 4.45837 0.0976113C5.58533 0.0291299 6.74438 -0.00285251 8.00122 0.000199254C9.25574 -0.00248629 10.4142 0.0291299 11.5411 0.0976113C12.5743 0.160478 13.5175 0.517533 14.2687 1.13008C14.9936 1.72115 15.4885 2.52034 15.7399 3.5052C15.9586 4.36263 15.9702 5.20442 15.9813 6.01839C15.9894 6.60249 15.9978 7.29463 15.9994 7.99849V8.00142C15.9978 8.70528 15.9894 9.39742 15.9813 9.98152C15.9702 10.7955 15.9587 11.6372 15.7399 12.4947C15.4885 13.4796 14.9936 14.2788 14.2687 14.8698C13.5175 15.4824 12.5743 15.8394 11.5411 15.9023C10.4619 15.968 9.35327 16 8.15747 16ZM7.99817 15.0087C9.23193 15.0117 10.3647 14.9804 11.4652 14.9135C12.2465 14.866 13.168 14.3536 13.7229 13.9011C14.2359 13.4827 14.5891 12.9056 14.7729 12.1856C14.955 11.4719 14.9655 10.7055 14.9756 9.96443C14.9835 9.38423 14.9918 8.69698 14.9936 7.99995C14.9918 7.30281 14.9835 6.61568 14.9756 6.03548C14.9655 5.29439 14.955 4.52803 14.7729 3.81416C14.5891 3.09419 14.2359 2.51704 13.7229 2.09871C13.168 1.64632 12.2465 1.14888 11.4652 1.10139C10.3647 1.03437 9.23193 1.00349 8.0011 1.00618C6.76758 1.00325 5.63464 1.03804 4.53418 1.10506C3.75293 1.15254 2.91684 1.4876 2.36191 1.93999C1.84897 2.35832 1.4007 3.09419 1.21699 3.81416C1.03486 4.52803 1.02436 5.29427 1.01423 6.03548C1.00629 6.61617 0.997993 7.30379 0.996284 8.00142C0.997993 8.696 1.00629 9.38374 1.01423 9.96443C1.02436 10.7055 1.03486 11.4719 1.21699 12.1856C1.4007 12.9056 1.75397 13.4827 2.26691 13.9011C2.82184 14.3535 3.75293 14.866 4.53418 14.9135C5.63464 14.9805 6.76782 15.0118 7.99817 15.0087ZM7.96838 11.9062C5.81457 11.9062 4.06213 10.1539 4.06213 7.99995C4.06213 5.84602 5.81457 4.0937 7.96838 4.0937C10.1223 4.0937 11.8746 5.84602 11.8746 7.99995C11.8746 10.1539 10.1223 11.9062 7.96838 11.9062ZM8.0011 5.00326C6.24478 5.00326 5.00876 6.23928 5.00876 7.99849C5.00876 9.46309 6.11624 11.0087 7.98382 11.0087C9.44854 11.0087 10.9713 9.62105 10.9713 7.99849C10.9713 6.53389 9.85398 5.00326 8.0011 5.00326ZM12.3121 2.8437C11.7944 2.8437 11.3746 3.26338 11.3746 3.7812C11.3746 4.29903 11.7944 4.7187 12.3121 4.7187C12.83 4.7187 13.2496 4.29903 13.2496 3.7812C13.2496 3.26338 12.83 2.8437 12.3121 2.8437Z" class="fill-white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_9636_1768">
                                        <rect width="16" height="16" class="fill-white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_9636_1771)">
                                      <path d="M9.49516 6.77491L15.3234 0H13.9423L8.88163 5.88256L4.83966 0H0.177734L6.28998 8.89547L0.177734 16H1.55893L6.90316 9.78782L11.1718 16H15.8337L9.49482 6.77491H9.49516ZM7.60342 8.97384L6.98412 8.08805L2.05659 1.03974H4.17803L8.1546 6.72795L8.7739 7.61374L13.943 15.0075H11.8215L7.60342 8.97418V8.97384Z" class="fill-white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_9636_1771">
                                        <rect width="16" height="16" class="fill-white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="time-location unstyled d-sm-flex d-none">
                        <li class="text-16">
                            <a href="contact.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M7.60997 15.7913C7.69691 15.9217 7.84328 16 8 16C8.15672 16 8.30309 15.9217 8.39003 15.7913C9.49937 14.1273 11.1333 12.0723 12.272 9.98222C13.1824 8.31109 13.625 6.88581 13.625 5.625C13.625 2.52338 11.1016 0 8 0C4.89838 0 2.375 2.52338 2.375 5.625C2.375 6.88581 2.81759 8.31109 3.72803 9.98222C4.86581 12.0707 6.50291 14.1307 7.60997 15.7913ZM8 0.9375C10.5847 0.9375 12.6875 3.04031 12.6875 5.625C12.6875 6.72512 12.2823 8.00369 11.4487 9.53372C10.4672 11.3352 9.06669 13.1627 8 14.699C6.93347 13.1629 5.53281 11.3353 4.55128 9.53372C3.71772 8.00369 3.3125 6.72512 3.3125 5.625C3.3125 3.04031 5.41531 0.9375 8 0.9375Z" class="fill-sec"/>
                                    <path d="M8 8.4375C9.55081 8.4375 10.8125 7.17581 10.8125 5.625C10.8125 4.07419 9.55081 2.8125 8 2.8125C6.44919 2.8125 5.1875 4.07419 5.1875 5.625C5.1875 7.17581 6.44919 8.4375 8 8.4375ZM8 3.75C9.03387 3.75 9.875 4.59113 9.875 5.625C9.875 6.65887 9.03387 7.5 8 7.5C6.96613 7.5 6.125 6.65887 6.125 5.625C6.125 4.59113 6.96613 3.75 8 3.75Z" class="fill-sec"/>
                                </svg>
                                Our Location
                            </a>
                        </li>
                        <li class="text-16">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_9636_1779)">
                                  <path d="M7.99992 0.100098C3.58876 0.100098 0 3.68878 0 8.09987C0 12.5113 3.58876 16.1001 7.99992 16.1001C12.411 16.1001 15.9997 12.5112 15.9997 8.09987C15.9997 3.68878 12.411 0.100098 7.99992 0.100098ZM7.99992 14.9533C4.2211 14.9533 1.14679 11.8788 1.14679 8.09987C1.14679 4.32112 4.2211 1.24689 7.99992 1.24689C11.7787 1.24689 14.8529 4.32112 14.8529 8.09987C14.8529 11.8788 11.7787 14.9533 7.99992 14.9533Z" class="fill-sec"/>
                                  <path d="M12.1134 7.966H8.3539V3.85652C8.3539 3.53985 8.09725 3.28313 7.7805 3.28313C7.46384 3.28313 7.20711 3.53985 7.20711 3.85652V8.53939C7.20711 8.85606 7.46384 9.11279 7.7805 9.11279H12.1134C12.4301 9.11279 12.6868 8.85606 12.6868 8.53939C12.6868 8.22273 12.43 7.966 12.1134 7.966Z" class="fill-sec"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_9636_1779">
                                    <rect width="16" height="16" class="fill-white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            Mon-Fri 9.00am - 10.00pm
                        </li>
                        <li class="text-16">
                            <a href="tel:12325468">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M12.9989 12.4243L12.6653 11.8671C12.0652 10.8777 11.2369 9.74206 10.1506 9.74206C9.94932 9.74206 9.75001 9.78255 9.55271 9.86452L8.96963 10.1146C8.91638 10.1367 8.86464 10.1618 8.80986 10.1884C8.66063 10.261 8.49141 10.3432 8.31735 10.3432C7.88798 10.3432 7.39048 9.78442 6.91673 8.76988C6.45178 7.77409 6.48144 7.25206 6.58817 6.98939C6.70594 6.69958 6.9798 6.57568 7.27401 6.46433C7.31493 6.44881 7.35187 6.43474 7.38781 6.41995L7.97825 6.17134C9.51649 5.52808 8.94423 3.28012 8.75661 2.54311L8.59749 1.90944C8.46146 1.3872 8.10079 0 6.90446 0C6.68299 0 6.44673 0.0515968 6.20245 0.153419C6.04218 0.217068 3.83658 1.11738 3.03751 2.69906C2.0825 4.58173 2.25908 7.10637 3.56185 10.2012C4.85487 13.3 6.53159 15.1954 8.54546 15.8346C8.8909 15.9444 9.28131 15.9999 9.70592 15.9999H9.70613C11.0959 15.9999 12.4678 15.4086 12.5792 15.3596C13.0583 15.1566 13.3681 14.8481 13.4997 14.4426C13.7228 13.7549 13.3485 13.0015 12.9989 12.4243ZM12.47 14.1085C12.4394 14.2027 12.333 14.2887 12.1541 14.3641C12.1511 14.3654 12.1475 14.3669 12.1445 14.3682C12.1321 14.3737 10.8903 14.9176 9.70584 14.9175C9.39251 14.9175 9.1123 14.879 8.87301 14.803C7.17637 14.2644 5.7256 12.576 4.56009 9.78291C3.38592 6.99328 3.19829 4.77469 4.0032 3.18796C4.62821 1.95087 6.58492 1.16609 6.60412 1.15858C6.60801 1.157 6.61184 1.15548 6.61566 1.15389C6.72708 1.10713 6.82696 1.08245 6.90446 1.08245C7.14296 1.08245 7.36003 1.45236 7.54866 2.17739L7.70706 2.80838C8.04883 4.15062 7.9968 4.99017 7.55927 5.17318L6.97164 5.4207C6.94826 5.43037 6.92091 5.44054 6.89075 5.45202C6.56616 5.57491 5.89071 5.83052 5.58524 6.58188C5.30806 7.26368 5.4228 8.12921 5.93567 9.22797C6.62641 10.7068 7.40542 11.4257 8.3172 11.4257C8.74037 11.4257 9.08004 11.2606 9.28297 11.162C9.32035 11.1438 9.35376 11.1272 9.3897 11.1123L9.97364 10.8619C10.0339 10.8368 10.0918 10.8246 10.1505 10.8246C10.4316 10.8246 10.9356 11.1029 11.7382 12.426L12.0716 12.9828C12.4826 13.6613 12.5151 13.9695 12.47 14.1085Z" class="fill-sec"/>
                                </svg>
                                +001 123 456 789
                            </a>
                        </li>
                    </ul>
                </div>
                <nav class="navigation">
                    <div class="navigation-wrapper">
                        <a href="index.php" class="d-flex align-items-center">
                            <img src="assets/media/logo.png" alt="/logo" class="header-logo">
                        </a>
                        <div class="main-menu__nav">
                            <ul class="main-menu__list">
                                <li class="active">
                                    <a href="index.php" class="active">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);">Menu</a>
                                    <ul>
                                        <li><a href="./menu.php">All Time Menu</a></li>
                                        <li><a href="./new_menu.php">Cafe's Specialty</a></li>
                                    </ul>
                                </li>
        
                                <li class="dropdown">
                                    <a href="javascript:void(0);">Shop</a>
                                    <ul>
                                        <li><a href="shop-grid.php">Shop Grid</a></li>
                                        <li><a href="shop-grid-sidebar.php">Shop Grid Sidebar</a></li>
                                        <li><a href="shop-list-sidebar.php">Shop List Sidebar</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                                <?php if ($_SESSION['Role'] === 'user'): ?>
                                <li>
                                <a href="myaccount.php">My Account</a>
                                </li>
                                <?php endif; ?> 
                                  <?php if ($_SESSION['Role'] === 'Admin' || $_SESSION['Role'] === 'Super Admin'): ?>
                                    <li class="dropdown">
                                    <a href="javascript:void(0);">Credentials</a>
                                    <ul>
                                        <li><a href="./account.php">Account Details</a></li>
                                        <?php if ($_SESSION['Role'] === 'Super Admin'): ?>
                                            <li><a href="./Users_column.php">Users Credentials</a></li>
                                        <?php endif; ?>
                                        <li><a href="./ProductForm.php">Add Product</a></li>
                                    </ul>
                                </li>
                                <?php endif; ?>   
                                
                                <li>
                                    <a href="logout.php">Log out</a>
                            </ul>
                        </div>
                        <div class="header-right-block">
                            <a href="javascript:;" class="main-menu__search search-toggler d-lg-block d-none icon">
                                <i class="fal fa-search"></i>
                            </a>
                            <a href="wishlist.php" class="d-lg-block d-none icon transparent-button">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="cart.php" class="d-lg-block d-none icon transparent-button">
                                <i class="fa-regular fa-cart-shopping"></i>
                            </a>
                            <a href="contact.php" class="cus-btn primary text-16">
                                BOOK A TABLE
                            </a>
                            <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                                <img src="assets/media/icon/menu-2.png" alt="">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Menu End -->

        <!-- HERO BANNER START -->
        <section class="hero-banner">
            <div class="hero-slider">
                <div class="slider-block slide-1">
                    <div class="detail">
                        <div class="mb-48">
        
                        <!-- HTML -->           <!--Variable para ma display sa website ↓ -->
                        <h2 class="h1 fw-400 color-white mb-16">Welcome, <?php echo $FirstName; ?>!</h2>
                            <p class="text-16 lightest-gray">Lorem ipsum dolor sit amet consectetur. Quam sed eu turpis ut proin. Fringilla proin neque tellus sem nulla nisi purus.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-24">
                            <a href="contact.php" class="cus-btn primary text-16">
                                BOOK A TABLE
                            </a>
                            <a href="contact.php" class="cus-btn transparent text-16">
                                CONTACT US
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slider-block slide-2">
                    <div class="detail">
                        <div class="mb-48">
                            <h2 class="h1 fw-400 color-white mb-16">Coffee is Our Language</h1>
                            <p class="text-16 lightest-gray">Lorem ipsum dolor sit amet consectetur. Quam sed eu turpis ut proin. Fringilla proin neque tellus sem nulla nisi purus.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-24">
                            <a href="contact.php" class="cus-btn primary text-16">
                                BOOK A TABLE
                            </a>
                            <a href="contact.php" class="cus-btn transparent text-16">
                                CONTACT US
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slider-block slide-3">
                    <div class="detail">
                        <div class="mb-48">
                            <h2 class="h1 fw-400 color-white mb-16">We Love What We Do</h2>
                            <p class="text-16 lightest-gray">Lorem ipsum dolor sit amet consectetur. Quam sed eu turpis ut proin. Fringilla proin neque tellus sem nulla nisi purus.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-24">
                            <a href="contact.php" class="cus-btn primary text-16">
                                BOOK A TABLE
                            </a>
                            <a href="contact.php" class="cus-btn transparent text-16">
                                CONTACT US
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO BANNER END -->

        <!-- BENEFITS START -->
        <section class="benefits py-40">
            <div class="container-fluid">
                <div class="row row-gap-4">
                    <div class="col-lg-3 col-6">
                        <div class="benefit-block">
                            <img src="assets/media/icon/scooter.png" alt="">
                            <h4 class="black">Free Delivery</h4>
                            <p class="text-16 black">Delivery On All Orders <br> Over $100</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="benefit-block">
                            <img src="assets/media/icon/gift-box.png" alt="">
                            <h4 class="black">Mug Rewards</h4>
                            <p class="text-16 black">Delivery On All Orders <br> Over $100</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="benefit-block">
                            <img src="assets/media/icon/discount.png" alt="">
                            <h4 class="black">Sale & Discounts</h4>
                            <p class="text-16 black">Delivery On All Orders <br> Over $100</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="benefit-block">
                            <img src="assets/media/icon/online.png" alt="">
                            <h4 class="black">Services Online</h4>
                            <p class="text-16 black">Delivery On All Orders <br> Over $100</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BENEFITS END -->

        <!-- ABOUT START -->
        <section class="about py-80">
            <div class="container-fluid">
                <div class="row align-items-center row-gap-5">
                    <div class="col-lg-6">
                        <div class="about-detail">
                            <p class="section-name text-md text-uppercase color-white mb-8">About us</p>
                            <h2 class="color-white fw-600 font-primary mb-16">Discover The Taste Of <br class="d-xl-block d-none"> Real <span class="color-sec d-inline">Coffee With Friends.</span></h2>
                            <p class="text-16 light-gray mb-12">Lorem ipsum dolor sit amet consectetur. Est nascetur erat eget ornare eu eget in diam quis. Massa risus commodo turpis malesuada ante nullam hac sit. Blandit est morbi ornare donec. Molestie pellentesque amet ac vel neque purus. Facilisis fusce a volutpat maecenas gravida urna nibh eget id.</p>
                            <p class="text-16 light-gray mb-48">Pulvinar lacus volutpat netus pellentesque cursus hendrerit. Velit eleifend imperdiet pharetra urna urna nibh placerat. Mauris vulputate tempor eget in vitae.</p>
                            <a href="about.php" class="d-inline cus-btn primary texat-16">
                                READ MORE
                            </a> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/media/about/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT END -->

        <!-- MENU START-->
        <section class="menu py-80">
            <div class="container-fluid h-100">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">Our Special Menu</h5>
                    <h2 class="color-white font-primary fw-600">Savor the Menu Selections</h2>
                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pellentesque aliquet in risus <br> phasellus tellus non est.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="menu-tabs">	
                            <ul  class="tabs-header unstyled">
                                <li>
                                    <button class="tab-button active" data-toggle="all">
                                        All
                                    </button>
                                </li>
                                <li>
                                    <button class="tab-button" data-toggle="tea">
                                        Tea
                                    </button>
                                </li>
                                <li>
                                    <button class="tab-button" data-toggle="coffee">
                                        Coffee
                                    </button>
                                </li>
                                <li>
                                    <button class="tab-button" data-toggle="pastries">
                                        Pastries
                                    </button>
                                </li>
                                <li>
                                    <button class="tab-button" data-toggle="beverages">
                                        Beverages
                                    </button>
                                </li>
                            </ul>
                            <div class="tabs-body">
                                <div class="tab-pane" id="all">
                                   <div class="row row-gap-4">
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/1.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.95</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/2.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED CARAMEL LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$4.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/3.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE MOCHA</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/4.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ESPRESSO MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.98</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/5.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">WHITE CHOCOLATE MOCHA</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.79</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/6.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CARAMEL MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.54</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/7.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE AMERICANO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.06</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/8.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED SMOKED LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.05</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-pane hidden" id="tea">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/1.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.95</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/4.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ESPRESSO MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.98</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane hidden" id="coffee">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/1.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.95</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/2.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED CARAMEL LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$4.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/3.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE MOCHA</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/4.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ESPRESSO MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.98</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/7.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE AMERICANO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.06</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/8.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED SMOKED LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.05</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-pane hidden" id="pastries">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/4.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ESPRESSO MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.98</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/7.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE AMERICANO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.06</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/8.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED SMOKED LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.05</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane hidden" id="beverages">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/1.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.95</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/2.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ICED CARAMEL LATTE</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$4.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/3.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">CAFFE MOCHA</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$3.67</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-item">
                                                <div class="item-image">
                                                    <img src="assets/media/menu/4.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="name-price">
                                                        <a href="#" class="h6 color-white flex-shrink-0">ESPRESSO MACCHIATO</a>
                                                        <div class="center-line"></div>
                                                        <h6 class="color-white flex-shrink-0">$2.98</h6>
                                                    </div>
                                                    <p class="text-16 light-gray">Lorem ipsum dolor sit amet consectetur. <br> Pellentesque aliquet in risus phasellus tellus non est.</p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- MENU END -->

        <!-- CATEGORY START -->
        <section class="category py-80">
            <div class="container-fluid">
                <div class="row row-gap-4">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="category-item">
                            <img src="assets/media/category/1.png" alt="">
                            <div class="item-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <h5 class="color-white text-uppercase"> CAFFE Espresso</h5>
                                <p class="text-16 color-white">Lorem ipsum dolor sit amet consectetur. Pellentesque <br class="d-lg-flex d-none"> aliquet in risus phasellus tellus non est.</p>
                                <a href="contact.php" class="cus-btn transparent text-16">
                                    CONTACT US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="category-item">
                            <img src="assets/media/category/2.png" alt="">
                            <div class="item-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <h5 class="color-white text-uppercase">CAFFE Macchiato</h5>
                                <p class="text-16 color-white">Lorem ipsum dolor sit amet consectetur. Pellentesque <br class="d-lg-flex d-none"> aliquet in risus phasellus tellus non est.</p>
                                <a href="contact.php" class="cus-btn transparent text-16">
                                    CONTACT US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="category-item">
                            <img src="assets/media/category/3.png" alt="">
                            <div class="item-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <h5 class="color-white text-uppercase">CAFFE Affogato</h5>
                                <p class="text-16 color-white">Lorem ipsum dolor sit amet consectetur. Pellentesque <br class="d-lg-flex d-none"> aliquet in risus phasellus tellus non est.</p>
                                <a href="contact.php" class="cus-btn transparent text-16">
                                    CONTACT US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 d-xl-none d-lg-block">
                        <div class="category-item">
                            <img src="assets/media/category/1.png" alt="">
                            <div class="item-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <h5 class="color-white text-uppercase"> CAFFE Espresso</h5>
                                <p class="text-16 color-white">Lorem ipsum dolor sit amet consectetur. Pellentesque <br class="d-lg-flex d-none"> aliquet in risus phasellus tellus non est.</p>
                                <a href="contact.php" class="cus-btn transparent text-16">
                                    CONTACT US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CATEGORY END -->

        <!-- TEAM START -->
        <section class="team py-80">
            <div class="container-fluid">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">Our SHOP Family</h5>
                    <h2 class="color-white font-primary fw-600">The Faces Behind the Flavors</h2>
                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pellentesque aliquet in risus <br> phasellus tellus non est.</p>
                </div>
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="team-member">
                            <img src="assets/media/team/1.png" alt="">
                            <div class="member-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <a href="team.php" class="h5 color-white">Sarah Johnson</a>
                                <p class="color-white">Waiter</p>
                                <div class="social">
                                    <div class="social-link">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.6875 4.6875C15.0109 4.6875 15.2734 4.425 15.2734 4.10156V0.585938C15.2734 0.2625 15.0109 0 14.6875 0H11.1719C8.91016 0 7.07031 1.83984 7.07031 4.10156V7.03125H5.3125C4.98906 7.03125 4.72656 7.29375 4.72656 7.61719V11.1328C4.72656 11.4563 4.98906 11.7188 5.3125 11.7188H7.07031V19.4141C7.07031 19.7375 7.33281 20 7.65625 20H11.1719C11.4953 20 11.7578 19.7375 11.7578 19.4141V11.7188H14.1016C14.3879 11.7188 14.6324 11.5117 14.6797 11.2293L15.2656 7.71367C15.2938 7.54375 15.2461 7.36992 15.1348 7.23828C15.0234 7.10703 14.8598 7.03125 14.6875 7.03125H11.7578V4.6875H14.6875ZM11.1719 8.20312H13.9957L13.6051 10.5469H11.1719C10.8484 10.5469 10.5859 10.8094 10.5859 11.1328V18.8281H8.24219V11.1328C8.24219 10.8094 7.97969 10.5469 7.65625 10.5469H5.89844V8.20312H7.65625C7.97969 8.20312 8.24219 7.94063 8.24219 7.61719V4.10156C8.24219 2.48633 9.55664 1.17188 11.1719 1.17188H14.1016V3.51562H11.1719C10.8484 3.51562 10.5859 3.77813 10.5859 4.10156V7.61719C10.5859 7.94063 10.8484 8.20312 11.1719 8.20312Z" class="fill-sec"/>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_686)">
                                                  <path d="M11.8685 8.46864L19.1538 0H17.4274L11.1015 7.3532L6.04909 0H0.22168L7.86198 11.1193L0.22168 20H1.94817L8.62846 12.2348L13.9642 20H19.7916L11.868 8.46864H11.8685ZM9.50379 11.2173L8.72967 10.1101L2.57025 1.29967H5.22205L10.1928 8.40994L10.9669 9.51718L17.4282 18.7594H14.7764L9.50379 11.2177V11.2173Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_686">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9571_633)">
                                                  <path d="M10.1968 20C10.1306 20 10.0644 20 9.99771 19.9997C8.43002 20.0035 6.9815 19.9637 5.57281 19.8779C4.28131 19.7993 3.10242 19.353 2.16339 18.5873C1.25732 17.8485 0.63858 16.8495 0.324402 15.6184C0.0509644 14.5467 0.0364685 13.4946 0.022583 12.477C0.0125122 11.7468 0.00213623 10.8817 0 10.0018C0.00213623 9.11835 0.0125122 8.25318 0.022583 7.52304C0.0364685 6.50559 0.0509644 5.4535 0.324402 4.38157C0.63858 3.15049 1.25732 2.15149 2.16339 1.41266C3.10242 0.646977 4.28131 0.200658 5.57297 0.122075C6.98166 0.0364734 8.43048 -0.0035046 10.0015 0.000310102C11.5697 -0.00304683 13.0177 0.0364734 14.4264 0.122075C15.7179 0.200658 16.8968 0.646977 17.8358 1.41266C18.7421 2.15149 19.3607 3.15049 19.6748 4.38157C19.9483 5.45334 19.9628 6.50559 19.9767 7.52304C19.9867 8.25318 19.9972 9.11835 19.9992 9.99817V10.0018C19.9972 10.8817 19.9867 11.7468 19.9767 12.477C19.9628 13.4944 19.9484 14.5465 19.6748 15.6184C19.3607 16.8495 18.7421 17.8485 17.8358 18.5873C16.8968 19.353 15.7179 19.7993 14.4264 19.8779C13.0774 19.96 11.6916 20 10.1968 20ZM9.99771 18.761C11.5399 18.7646 12.9559 18.7256 14.3315 18.642C15.3081 18.5826 16.46 17.942 17.1537 17.3764C17.7948 16.8535 18.2364 16.1321 18.4661 15.2321C18.6937 14.3399 18.7069 13.382 18.7195 12.4556C18.7294 11.7304 18.7398 10.8713 18.7419 10C18.7398 9.12857 18.7294 8.26966 18.7195 7.54441C18.7069 6.61805 18.6937 5.6601 18.4661 4.76777C18.2364 3.8678 17.7948 3.14637 17.1537 2.62345C16.46 2.05796 15.3081 1.43616 14.3315 1.3768C12.9559 1.29303 11.5399 1.25442 10.0014 1.25778C8.45947 1.25412 7.0433 1.29761 5.66772 1.38138C4.69116 1.44074 3.64605 1.85956 2.95239 2.42505C2.31121 2.94797 1.75088 3.8678 1.52123 4.76777C1.29357 5.6601 1.28045 6.61789 1.26779 7.54441C1.25787 8.27027 1.24749 9.1298 1.24535 10.0018C1.24749 10.8701 1.25787 11.7297 1.26779 12.4556C1.28045 13.382 1.29357 14.3399 1.52123 15.2321C1.75088 16.1321 2.19247 16.8535 2.83364 17.3764C3.52731 17.9419 4.69116 18.5826 5.66772 18.642C7.0433 18.7257 8.45978 18.7648 9.99771 18.761ZM9.96048 14.8828C7.26822 14.8828 5.07767 12.6924 5.07767 10C5.07767 7.30759 7.26822 5.11719 9.96048 5.11719C12.6529 5.11719 14.8433 7.30759 14.8433 10C14.8433 12.6924 12.6529 14.8828 9.96048 14.8828ZM10.0014 6.25413C7.80598 6.25413 6.26095 7.79917 6.26095 9.99817C6.26095 11.8289 7.6453 13.7609 9.97978 13.7609C11.8107 13.7609 13.7142 12.0264 13.7142 9.99817C13.7142 8.16742 12.3175 6.25413 10.0014 6.25413ZM15.3902 3.55469C14.743 3.55469 14.2183 4.07929 14.2183 4.72657C14.2183 5.37384 14.743 5.89844 15.3902 5.89844C16.0374 5.89844 16.562 5.37384 16.562 4.72657C16.562 4.07929 16.0374 3.55469 15.3902 3.55469Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9571_633">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_688)">
                                                  <path d="M7.32012 20.0039C6.07637 20.0039 4.86035 19.5699 3.89668 18.7816C2.63105 17.7465 1.90527 16.2184 1.90527 14.5891C1.90527 13.4023 2.28262 12.275 2.99629 11.3293C3.68535 10.4164 4.66582 9.73242 5.75723 9.40391C6.73262 9.11016 7.76113 9.59805 8.14902 10.5391C8.17402 10.5992 8.1959 10.6617 8.21465 10.7234C8.3666 11.2281 8.31309 11.7617 8.06387 12.2258C7.81465 12.6898 7.39941 13.0293 6.89473 13.1813C6.27988 13.3664 5.85059 13.9453 5.85059 14.5891C5.85059 15.1035 6.12637 15.5875 6.57051 15.8523C6.81582 15.9988 7.09707 16.0695 7.38418 16.0574C8.17246 16.0238 8.79004 15.3656 8.79004 14.5586V1.99531C8.79004 1.09531 9.38691 0.301954 10.2412 0.0664076C10.3354 0.0402357 10.4322 0.0214857 10.5283 0.0101576C10.7068 -0.0113268 10.8877 -0.00781117 11.0662 0.0195326C11.7467 0.120704 12.333 0.578908 12.5971 1.21563C12.6967 1.45586 12.7471 1.70977 12.7471 1.97031C12.7471 3.01445 13.2217 3.98281 14.0494 4.62695C14.6416 5.08789 15.351 5.3332 16.1006 5.33594C16.9057 5.33867 17.6256 5.81875 17.935 6.55899C18.0701 6.8832 18.1154 7.23945 18.0654 7.58945C17.9268 8.55547 17.0768 9.28125 16.0861 9.28125C16.0826 9.28125 16.0795 9.28125 16.076 9.28125C14.899 9.27539 13.7619 8.9918 12.7354 8.45391V14.5984C12.7354 14.6047 12.7354 14.6109 12.735 14.6176C12.726 16.2234 12.0104 17.732 10.7709 18.759C9.80215 19.5617 8.57676 20.0039 7.32012 20.0039ZM6.32832 10.491C6.25098 10.491 6.17246 10.5023 6.09473 10.5258C5.23965 10.7832 4.47129 11.3195 3.93145 12.0352C3.37246 12.7758 3.07715 13.659 3.07715 14.5891C3.07715 15.8652 3.64629 17.0629 4.63887 17.8746C5.39395 18.4922 6.34629 18.832 7.32012 18.832C8.3041 18.832 9.26426 18.4855 10.0229 17.8566C10.9967 17.0496 11.558 15.8648 11.5631 14.6059C11.5631 14.6016 11.5631 14.5965 11.5635 14.5906V6.24492L12.4955 6.92695C13.5436 7.69414 14.7838 8.10274 16.0818 8.10938H16.0861C16.4975 8.10938 16.849 7.81524 16.9053 7.42344C16.9256 7.28047 16.9084 7.1418 16.8537 7.01094C16.7283 6.71133 16.4244 6.50899 16.0967 6.50781C15.0854 6.5043 14.1283 6.17344 13.3299 5.55156C12.215 4.68359 11.5756 3.37813 11.5756 1.97031C11.5756 1.86445 11.5553 1.76133 11.515 1.66445C11.4076 1.40547 11.1693 1.21914 10.8936 1.17852L10.8885 1.17774C10.815 1.16641 10.7408 1.16484 10.6674 1.17383C10.6295 1.17852 10.5912 1.18594 10.5533 1.19649C10.2045 1.29219 9.96152 1.6207 9.96152 1.99531V14.5586C9.96152 15.2449 9.70293 15.8984 9.23379 16.3988C8.75957 16.9047 8.12012 17.1992 7.4334 17.2281C6.91738 17.2496 6.41152 17.1223 5.96973 16.8586C5.17324 16.3836 4.67832 15.5137 4.67832 14.5891C4.67832 13.4328 5.45059 12.3926 6.55645 12.0594C6.76113 11.9977 6.92988 11.8598 7.03105 11.6715C7.13223 11.4832 7.1541 11.2664 7.09238 11.0617C7.08496 11.0367 7.07559 11.0109 7.06543 10.9859C6.93887 10.6789 6.64473 10.491 6.32832 10.491ZM12.7346 14.6082V14.6133C12.7346 14.6117 12.7346 14.6098 12.7346 14.6082Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_688">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="team-member">
                            <img src="assets/media/team/2.png" alt="">
                            <div class="member-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <a href="team.php" class="h5 color-white">Ethan Rodriguez</a>
                                <p class="color-white">Maker</p>
                                <div class="social">
                                    <div class="social-link">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.6875 4.6875C15.0109 4.6875 15.2734 4.425 15.2734 4.10156V0.585938C15.2734 0.2625 15.0109 0 14.6875 0H11.1719C8.91016 0 7.07031 1.83984 7.07031 4.10156V7.03125H5.3125C4.98906 7.03125 4.72656 7.29375 4.72656 7.61719V11.1328C4.72656 11.4563 4.98906 11.7188 5.3125 11.7188H7.07031V19.4141C7.07031 19.7375 7.33281 20 7.65625 20H11.1719C11.4953 20 11.7578 19.7375 11.7578 19.4141V11.7188H14.1016C14.3879 11.7188 14.6324 11.5117 14.6797 11.2293L15.2656 7.71367C15.2938 7.54375 15.2461 7.36992 15.1348 7.23828C15.0234 7.10703 14.8598 7.03125 14.6875 7.03125H11.7578V4.6875H14.6875ZM11.1719 8.20312H13.9957L13.6051 10.5469H11.1719C10.8484 10.5469 10.5859 10.8094 10.5859 11.1328V18.8281H8.24219V11.1328C8.24219 10.8094 7.97969 10.5469 7.65625 10.5469H5.89844V8.20312H7.65625C7.97969 8.20312 8.24219 7.94063 8.24219 7.61719V4.10156C8.24219 2.48633 9.55664 1.17188 11.1719 1.17188H14.1016V3.51562H11.1719C10.8484 3.51562 10.5859 3.77813 10.5859 4.10156V7.61719C10.5859 7.94063 10.8484 8.20312 11.1719 8.20312Z" class="fill-sec"/>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_686)">
                                                  <path d="M11.8685 8.46864L19.1538 0H17.4274L11.1015 7.3532L6.04909 0H0.22168L7.86198 11.1193L0.22168 20H1.94817L8.62846 12.2348L13.9642 20H19.7916L11.868 8.46864H11.8685ZM9.50379 11.2173L8.72967 10.1101L2.57025 1.29967H5.22205L10.1928 8.40994L10.9669 9.51718L17.4282 18.7594H14.7764L9.50379 11.2177V11.2173Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_963">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9571_633)">
                                                  <path d="M10.1968 20C10.1306 20 10.0644 20 9.99771 19.9997C8.43002 20.0035 6.9815 19.9637 5.57281 19.8779C4.28131 19.7993 3.10242 19.353 2.16339 18.5873C1.25732 17.8485 0.63858 16.8495 0.324402 15.6184C0.0509644 14.5467 0.0364685 13.4946 0.022583 12.477C0.0125122 11.7468 0.00213623 10.8817 0 10.0018C0.00213623 9.11835 0.0125122 8.25318 0.022583 7.52304C0.0364685 6.50559 0.0509644 5.4535 0.324402 4.38157C0.63858 3.15049 1.25732 2.15149 2.16339 1.41266C3.10242 0.646977 4.28131 0.200658 5.57297 0.122075C6.98166 0.0364734 8.43048 -0.0035046 10.0015 0.000310102C11.5697 -0.00304683 13.0177 0.0364734 14.4264 0.122075C15.7179 0.200658 16.8968 0.646977 17.8358 1.41266C18.7421 2.15149 19.3607 3.15049 19.6748 4.38157C19.9483 5.45334 19.9628 6.50559 19.9767 7.52304C19.9867 8.25318 19.9972 9.11835 19.9992 9.99817V10.0018C19.9972 10.8817 19.9867 11.7468 19.9767 12.477C19.9628 13.4944 19.9484 14.5465 19.6748 15.6184C19.3607 16.8495 18.7421 17.8485 17.8358 18.5873C16.8968 19.353 15.7179 19.7993 14.4264 19.8779C13.0774 19.96 11.6916 20 10.1968 20ZM9.99771 18.761C11.5399 18.7646 12.9559 18.7256 14.3315 18.642C15.3081 18.5826 16.46 17.942 17.1537 17.3764C17.7948 16.8535 18.2364 16.1321 18.4661 15.2321C18.6937 14.3399 18.7069 13.382 18.7195 12.4556C18.7294 11.7304 18.7398 10.8713 18.7419 10C18.7398 9.12857 18.7294 8.26966 18.7195 7.54441C18.7069 6.61805 18.6937 5.6601 18.4661 4.76777C18.2364 3.8678 17.7948 3.14637 17.1537 2.62345C16.46 2.05796 15.3081 1.43616 14.3315 1.3768C12.9559 1.29303 11.5399 1.25442 10.0014 1.25778C8.45947 1.25412 7.0433 1.29761 5.66772 1.38138C4.69116 1.44074 3.64605 1.85956 2.95239 2.42505C2.31121 2.94797 1.75088 3.8678 1.52123 4.76777C1.29357 5.6601 1.28045 6.61789 1.26779 7.54441C1.25787 8.27027 1.24749 9.1298 1.24535 10.0018C1.24749 10.8701 1.25787 11.7297 1.26779 12.4556C1.28045 13.382 1.29357 14.3399 1.52123 15.2321C1.75088 16.1321 2.19247 16.8535 2.83364 17.3764C3.52731 17.9419 4.69116 18.5826 5.66772 18.642C7.0433 18.7257 8.45978 18.7648 9.99771 18.761ZM9.96048 14.8828C7.26822 14.8828 5.07767 12.6924 5.07767 10C5.07767 7.30759 7.26822 5.11719 9.96048 5.11719C12.6529 5.11719 14.8433 7.30759 14.8433 10C14.8433 12.6924 12.6529 14.8828 9.96048 14.8828ZM10.0014 6.25413C7.80598 6.25413 6.26095 7.79917 6.26095 9.99817C6.26095 11.8289 7.6453 13.7609 9.97978 13.7609C11.8107 13.7609 13.7142 12.0264 13.7142 9.99817C13.7142 8.16742 12.3175 6.25413 10.0014 6.25413ZM15.3902 3.55469C14.743 3.55469 14.2183 4.07929 14.2183 4.72657C14.2183 5.37384 14.743 5.89844 15.3902 5.89844C16.0374 5.89844 16.562 5.37384 16.562 4.72657C16.562 4.07929 16.0374 3.55469 15.3902 3.55469Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9571_741">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_688)">
                                                  <path d="M7.32012 20.0039C6.07637 20.0039 4.86035 19.5699 3.89668 18.7816C2.63105 17.7465 1.90527 16.2184 1.90527 14.5891C1.90527 13.4023 2.28262 12.275 2.99629 11.3293C3.68535 10.4164 4.66582 9.73242 5.75723 9.40391C6.73262 9.11016 7.76113 9.59805 8.14902 10.5391C8.17402 10.5992 8.1959 10.6617 8.21465 10.7234C8.3666 11.2281 8.31309 11.7617 8.06387 12.2258C7.81465 12.6898 7.39941 13.0293 6.89473 13.1813C6.27988 13.3664 5.85059 13.9453 5.85059 14.5891C5.85059 15.1035 6.12637 15.5875 6.57051 15.8523C6.81582 15.9988 7.09707 16.0695 7.38418 16.0574C8.17246 16.0238 8.79004 15.3656 8.79004 14.5586V1.99531C8.79004 1.09531 9.38691 0.301954 10.2412 0.0664076C10.3354 0.0402357 10.4322 0.0214857 10.5283 0.0101576C10.7068 -0.0113268 10.8877 -0.00781117 11.0662 0.0195326C11.7467 0.120704 12.333 0.578908 12.5971 1.21563C12.6967 1.45586 12.7471 1.70977 12.7471 1.97031C12.7471 3.01445 13.2217 3.98281 14.0494 4.62695C14.6416 5.08789 15.351 5.3332 16.1006 5.33594C16.9057 5.33867 17.6256 5.81875 17.935 6.55899C18.0701 6.8832 18.1154 7.23945 18.0654 7.58945C17.9268 8.55547 17.0768 9.28125 16.0861 9.28125C16.0826 9.28125 16.0795 9.28125 16.076 9.28125C14.899 9.27539 13.7619 8.9918 12.7354 8.45391V14.5984C12.7354 14.6047 12.7354 14.6109 12.735 14.6176C12.726 16.2234 12.0104 17.732 10.7709 18.759C9.80215 19.5617 8.57676 20.0039 7.32012 20.0039ZM6.32832 10.491C6.25098 10.491 6.17246 10.5023 6.09473 10.5258C5.23965 10.7832 4.47129 11.3195 3.93145 12.0352C3.37246 12.7758 3.07715 13.659 3.07715 14.5891C3.07715 15.8652 3.64629 17.0629 4.63887 17.8746C5.39395 18.4922 6.34629 18.832 7.32012 18.832C8.3041 18.832 9.26426 18.4855 10.0229 17.8566C10.9967 17.0496 11.558 15.8648 11.5631 14.6059C11.5631 14.6016 11.5631 14.5965 11.5635 14.5906V6.24492L12.4955 6.92695C13.5436 7.69414 14.7838 8.10274 16.0818 8.10938H16.0861C16.4975 8.10938 16.849 7.81524 16.9053 7.42344C16.9256 7.28047 16.9084 7.1418 16.8537 7.01094C16.7283 6.71133 16.4244 6.50899 16.0967 6.50781C15.0854 6.5043 14.1283 6.17344 13.3299 5.55156C12.215 4.68359 11.5756 3.37813 11.5756 1.97031C11.5756 1.86445 11.5553 1.76133 11.515 1.66445C11.4076 1.40547 11.1693 1.21914 10.8936 1.17852L10.8885 1.17774C10.815 1.16641 10.7408 1.16484 10.6674 1.17383C10.6295 1.17852 10.5912 1.18594 10.5533 1.19649C10.2045 1.29219 9.96152 1.6207 9.96152 1.99531V14.5586C9.96152 15.2449 9.70293 15.8984 9.23379 16.3988C8.75957 16.9047 8.12012 17.1992 7.4334 17.2281C6.91738 17.2496 6.41152 17.1223 5.96973 16.8586C5.17324 16.3836 4.67832 15.5137 4.67832 14.5891C4.67832 13.4328 5.45059 12.3926 6.55645 12.0594C6.76113 11.9977 6.92988 11.8598 7.03105 11.6715C7.13223 11.4832 7.1541 11.2664 7.09238 11.0617C7.08496 11.0367 7.07559 11.0109 7.06543 10.9859C6.93887 10.6789 6.64473 10.491 6.32832 10.491ZM12.7346 14.6082V14.6133C12.7346 14.6117 12.7346 14.6098 12.7346 14.6082Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_279">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="team-member">
                            <img src="assets/media/team/3.png" alt="">
                            <div class="member-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <a href="team.php" class="h5 color-white">Emily Brooks</a>
                                <p class="color-white">Maker</p>
                                <div class="social">
                                    <div class="social-link">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.6875 4.6875C15.0109 4.6875 15.2734 4.425 15.2734 4.10156V0.585938C15.2734 0.2625 15.0109 0 14.6875 0H11.1719C8.91016 0 7.07031 1.83984 7.07031 4.10156V7.03125H5.3125C4.98906 7.03125 4.72656 7.29375 4.72656 7.61719V11.1328C4.72656 11.4563 4.98906 11.7188 5.3125 11.7188H7.07031V19.4141C7.07031 19.7375 7.33281 20 7.65625 20H11.1719C11.4953 20 11.7578 19.7375 11.7578 19.4141V11.7188H14.1016C14.3879 11.7188 14.6324 11.5117 14.6797 11.2293L15.2656 7.71367C15.2938 7.54375 15.2461 7.36992 15.1348 7.23828C15.0234 7.10703 14.8598 7.03125 14.6875 7.03125H11.7578V4.6875H14.6875ZM11.1719 8.20312H13.9957L13.6051 10.5469H11.1719C10.8484 10.5469 10.5859 10.8094 10.5859 11.1328V18.8281H8.24219V11.1328C8.24219 10.8094 7.97969 10.5469 7.65625 10.5469H5.89844V8.20312H7.65625C7.97969 8.20312 8.24219 7.94063 8.24219 7.61719V4.10156C8.24219 2.48633 9.55664 1.17188 11.1719 1.17188H14.1016V3.51562H11.1719C10.8484 3.51562 10.5859 3.77813 10.5859 4.10156V7.61719C10.5859 7.94063 10.8484 8.20312 11.1719 8.20312Z" class="fill-sec"/>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_686)">
                                                  <path d="M11.8685 8.46864L19.1538 0H17.4274L11.1015 7.3532L6.04909 0H0.22168L7.86198 11.1193L0.22168 20H1.94817L8.62846 12.2348L13.9642 20H19.7916L11.868 8.46864H11.8685ZM9.50379 11.2173L8.72967 10.1101L2.57025 1.29967H5.22205L10.1928 8.40994L10.9669 9.51718L17.4282 18.7594H14.7764L9.50379 11.2177V11.2173Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_159">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9571_633)">
                                                  <path d="M10.1968 20C10.1306 20 10.0644 20 9.99771 19.9997C8.43002 20.0035 6.9815 19.9637 5.57281 19.8779C4.28131 19.7993 3.10242 19.353 2.16339 18.5873C1.25732 17.8485 0.63858 16.8495 0.324402 15.6184C0.0509644 14.5467 0.0364685 13.4946 0.022583 12.477C0.0125122 11.7468 0.00213623 10.8817 0 10.0018C0.00213623 9.11835 0.0125122 8.25318 0.022583 7.52304C0.0364685 6.50559 0.0509644 5.4535 0.324402 4.38157C0.63858 3.15049 1.25732 2.15149 2.16339 1.41266C3.10242 0.646977 4.28131 0.200658 5.57297 0.122075C6.98166 0.0364734 8.43048 -0.0035046 10.0015 0.000310102C11.5697 -0.00304683 13.0177 0.0364734 14.4264 0.122075C15.7179 0.200658 16.8968 0.646977 17.8358 1.41266C18.7421 2.15149 19.3607 3.15049 19.6748 4.38157C19.9483 5.45334 19.9628 6.50559 19.9767 7.52304C19.9867 8.25318 19.9972 9.11835 19.9992 9.99817V10.0018C19.9972 10.8817 19.9867 11.7468 19.9767 12.477C19.9628 13.4944 19.9484 14.5465 19.6748 15.6184C19.3607 16.8495 18.7421 17.8485 17.8358 18.5873C16.8968 19.353 15.7179 19.7993 14.4264 19.8779C13.0774 19.96 11.6916 20 10.1968 20ZM9.99771 18.761C11.5399 18.7646 12.9559 18.7256 14.3315 18.642C15.3081 18.5826 16.46 17.942 17.1537 17.3764C17.7948 16.8535 18.2364 16.1321 18.4661 15.2321C18.6937 14.3399 18.7069 13.382 18.7195 12.4556C18.7294 11.7304 18.7398 10.8713 18.7419 10C18.7398 9.12857 18.7294 8.26966 18.7195 7.54441C18.7069 6.61805 18.6937 5.6601 18.4661 4.76777C18.2364 3.8678 17.7948 3.14637 17.1537 2.62345C16.46 2.05796 15.3081 1.43616 14.3315 1.3768C12.9559 1.29303 11.5399 1.25442 10.0014 1.25778C8.45947 1.25412 7.0433 1.29761 5.66772 1.38138C4.69116 1.44074 3.64605 1.85956 2.95239 2.42505C2.31121 2.94797 1.75088 3.8678 1.52123 4.76777C1.29357 5.6601 1.28045 6.61789 1.26779 7.54441C1.25787 8.27027 1.24749 9.1298 1.24535 10.0018C1.24749 10.8701 1.25787 11.7297 1.26779 12.4556C1.28045 13.382 1.29357 14.3399 1.52123 15.2321C1.75088 16.1321 2.19247 16.8535 2.83364 17.3764C3.52731 17.9419 4.69116 18.5826 5.66772 18.642C7.0433 18.7257 8.45978 18.7648 9.99771 18.761ZM9.96048 14.8828C7.26822 14.8828 5.07767 12.6924 5.07767 10C5.07767 7.30759 7.26822 5.11719 9.96048 5.11719C12.6529 5.11719 14.8433 7.30759 14.8433 10C14.8433 12.6924 12.6529 14.8828 9.96048 14.8828ZM10.0014 6.25413C7.80598 6.25413 6.26095 7.79917 6.26095 9.99817C6.26095 11.8289 7.6453 13.7609 9.97978 13.7609C11.8107 13.7609 13.7142 12.0264 13.7142 9.99817C13.7142 8.16742 12.3175 6.25413 10.0014 6.25413ZM15.3902 3.55469C14.743 3.55469 14.2183 4.07929 14.2183 4.72657C14.2183 5.37384 14.743 5.89844 15.3902 5.89844C16.0374 5.89844 16.562 5.37384 16.562 4.72657C16.562 4.07929 16.0374 3.55469 15.3902 3.55469Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9571_753">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_688)">
                                                  <path d="M7.32012 20.0039C6.07637 20.0039 4.86035 19.5699 3.89668 18.7816C2.63105 17.7465 1.90527 16.2184 1.90527 14.5891C1.90527 13.4023 2.28262 12.275 2.99629 11.3293C3.68535 10.4164 4.66582 9.73242 5.75723 9.40391C6.73262 9.11016 7.76113 9.59805 8.14902 10.5391C8.17402 10.5992 8.1959 10.6617 8.21465 10.7234C8.3666 11.2281 8.31309 11.7617 8.06387 12.2258C7.81465 12.6898 7.39941 13.0293 6.89473 13.1813C6.27988 13.3664 5.85059 13.9453 5.85059 14.5891C5.85059 15.1035 6.12637 15.5875 6.57051 15.8523C6.81582 15.9988 7.09707 16.0695 7.38418 16.0574C8.17246 16.0238 8.79004 15.3656 8.79004 14.5586V1.99531C8.79004 1.09531 9.38691 0.301954 10.2412 0.0664076C10.3354 0.0402357 10.4322 0.0214857 10.5283 0.0101576C10.7068 -0.0113268 10.8877 -0.00781117 11.0662 0.0195326C11.7467 0.120704 12.333 0.578908 12.5971 1.21563C12.6967 1.45586 12.7471 1.70977 12.7471 1.97031C12.7471 3.01445 13.2217 3.98281 14.0494 4.62695C14.6416 5.08789 15.351 5.3332 16.1006 5.33594C16.9057 5.33867 17.6256 5.81875 17.935 6.55899C18.0701 6.8832 18.1154 7.23945 18.0654 7.58945C17.9268 8.55547 17.0768 9.28125 16.0861 9.28125C16.0826 9.28125 16.0795 9.28125 16.076 9.28125C14.899 9.27539 13.7619 8.9918 12.7354 8.45391V14.5984C12.7354 14.6047 12.7354 14.6109 12.735 14.6176C12.726 16.2234 12.0104 17.732 10.7709 18.759C9.80215 19.5617 8.57676 20.0039 7.32012 20.0039ZM6.32832 10.491C6.25098 10.491 6.17246 10.5023 6.09473 10.5258C5.23965 10.7832 4.47129 11.3195 3.93145 12.0352C3.37246 12.7758 3.07715 13.659 3.07715 14.5891C3.07715 15.8652 3.64629 17.0629 4.63887 17.8746C5.39395 18.4922 6.34629 18.832 7.32012 18.832C8.3041 18.832 9.26426 18.4855 10.0229 17.8566C10.9967 17.0496 11.558 15.8648 11.5631 14.6059C11.5631 14.6016 11.5631 14.5965 11.5635 14.5906V6.24492L12.4955 6.92695C13.5436 7.69414 14.7838 8.10274 16.0818 8.10938H16.0861C16.4975 8.10938 16.849 7.81524 16.9053 7.42344C16.9256 7.28047 16.9084 7.1418 16.8537 7.01094C16.7283 6.71133 16.4244 6.50899 16.0967 6.50781C15.0854 6.5043 14.1283 6.17344 13.3299 5.55156C12.215 4.68359 11.5756 3.37813 11.5756 1.97031C11.5756 1.86445 11.5553 1.76133 11.515 1.66445C11.4076 1.40547 11.1693 1.21914 10.8936 1.17852L10.8885 1.17774C10.815 1.16641 10.7408 1.16484 10.6674 1.17383C10.6295 1.17852 10.5912 1.18594 10.5533 1.19649C10.2045 1.29219 9.96152 1.6207 9.96152 1.99531V14.5586C9.96152 15.2449 9.70293 15.8984 9.23379 16.3988C8.75957 16.9047 8.12012 17.1992 7.4334 17.2281C6.91738 17.2496 6.41152 17.1223 5.96973 16.8586C5.17324 16.3836 4.67832 15.5137 4.67832 14.5891C4.67832 13.4328 5.45059 12.3926 6.55645 12.0594C6.76113 11.9977 6.92988 11.8598 7.03105 11.6715C7.13223 11.4832 7.1541 11.2664 7.09238 11.0617C7.08496 11.0367 7.07559 11.0109 7.06543 10.9859C6.93887 10.6789 6.64473 10.491 6.32832 10.491ZM12.7346 14.6082V14.6133C12.7346 14.6117 12.7346 14.6098 12.7346 14.6082Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_761">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="team-member">
                            <img src="assets/media/team/4.png" alt="">
                            <div class="member-detail p-24 d-flex flex-column align-items-center gap-16 text-center">
                                <a href="team.php" class="h5 color-white">Megan Robinson</a>
                                <p class="color-white">Waiter</p>
                                <div class="social">
                                    <div class="social-link">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.6875 4.6875C15.0109 4.6875 15.2734 4.425 15.2734 4.10156V0.585938C15.2734 0.2625 15.0109 0 14.6875 0H11.1719C8.91016 0 7.07031 1.83984 7.07031 4.10156V7.03125H5.3125C4.98906 7.03125 4.72656 7.29375 4.72656 7.61719V11.1328C4.72656 11.4563 4.98906 11.7188 5.3125 11.7188H7.07031V19.4141C7.07031 19.7375 7.33281 20 7.65625 20H11.1719C11.4953 20 11.7578 19.7375 11.7578 19.4141V11.7188H14.1016C14.3879 11.7188 14.6324 11.5117 14.6797 11.2293L15.2656 7.71367C15.2938 7.54375 15.2461 7.36992 15.1348 7.23828C15.0234 7.10703 14.8598 7.03125 14.6875 7.03125H11.7578V4.6875H14.6875ZM11.1719 8.20312H13.9957L13.6051 10.5469H11.1719C10.8484 10.5469 10.5859 10.8094 10.5859 11.1328V18.8281H8.24219V11.1328C8.24219 10.8094 7.97969 10.5469 7.65625 10.5469H5.89844V8.20312H7.65625C7.97969 8.20312 8.24219 7.94063 8.24219 7.61719V4.10156C8.24219 2.48633 9.55664 1.17188 11.1719 1.17188H14.1016V3.51562H11.1719C10.8484 3.51562 10.5859 3.77813 10.5859 4.10156V7.61719C10.5859 7.94063 10.8484 8.20312 11.1719 8.20312Z" class="fill-sec"/>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_686)">
                                                  <path d="M11.8685 8.46864L19.1538 0H17.4274L11.1015 7.3532L6.04909 0H0.22168L7.86198 11.1193L0.22168 20H1.94817L8.62846 12.2348L13.9642 20H19.7916L11.868 8.46864H11.8685ZM9.50379 11.2173L8.72967 10.1101L2.57025 1.29967H5.22205L10.1928 8.40994L10.9669 9.51718L17.4282 18.7594H14.7764L9.50379 11.2177V11.2173Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_842">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9571_633)">
                                                  <path d="M10.1968 20C10.1306 20 10.0644 20 9.99771 19.9997C8.43002 20.0035 6.9815 19.9637 5.57281 19.8779C4.28131 19.7993 3.10242 19.353 2.16339 18.5873C1.25732 17.8485 0.63858 16.8495 0.324402 15.6184C0.0509644 14.5467 0.0364685 13.4946 0.022583 12.477C0.0125122 11.7468 0.00213623 10.8817 0 10.0018C0.00213623 9.11835 0.0125122 8.25318 0.022583 7.52304C0.0364685 6.50559 0.0509644 5.4535 0.324402 4.38157C0.63858 3.15049 1.25732 2.15149 2.16339 1.41266C3.10242 0.646977 4.28131 0.200658 5.57297 0.122075C6.98166 0.0364734 8.43048 -0.0035046 10.0015 0.000310102C11.5697 -0.00304683 13.0177 0.0364734 14.4264 0.122075C15.7179 0.200658 16.8968 0.646977 17.8358 1.41266C18.7421 2.15149 19.3607 3.15049 19.6748 4.38157C19.9483 5.45334 19.9628 6.50559 19.9767 7.52304C19.9867 8.25318 19.9972 9.11835 19.9992 9.99817V10.0018C19.9972 10.8817 19.9867 11.7468 19.9767 12.477C19.9628 13.4944 19.9484 14.5465 19.6748 15.6184C19.3607 16.8495 18.7421 17.8485 17.8358 18.5873C16.8968 19.353 15.7179 19.7993 14.4264 19.8779C13.0774 19.96 11.6916 20 10.1968 20ZM9.99771 18.761C11.5399 18.7646 12.9559 18.7256 14.3315 18.642C15.3081 18.5826 16.46 17.942 17.1537 17.3764C17.7948 16.8535 18.2364 16.1321 18.4661 15.2321C18.6937 14.3399 18.7069 13.382 18.7195 12.4556C18.7294 11.7304 18.7398 10.8713 18.7419 10C18.7398 9.12857 18.7294 8.26966 18.7195 7.54441C18.7069 6.61805 18.6937 5.6601 18.4661 4.76777C18.2364 3.8678 17.7948 3.14637 17.1537 2.62345C16.46 2.05796 15.3081 1.43616 14.3315 1.3768C12.9559 1.29303 11.5399 1.25442 10.0014 1.25778C8.45947 1.25412 7.0433 1.29761 5.66772 1.38138C4.69116 1.44074 3.64605 1.85956 2.95239 2.42505C2.31121 2.94797 1.75088 3.8678 1.52123 4.76777C1.29357 5.6601 1.28045 6.61789 1.26779 7.54441C1.25787 8.27027 1.24749 9.1298 1.24535 10.0018C1.24749 10.8701 1.25787 11.7297 1.26779 12.4556C1.28045 13.382 1.29357 14.3399 1.52123 15.2321C1.75088 16.1321 2.19247 16.8535 2.83364 17.3764C3.52731 17.9419 4.69116 18.5826 5.66772 18.642C7.0433 18.7257 8.45978 18.7648 9.99771 18.761ZM9.96048 14.8828C7.26822 14.8828 5.07767 12.6924 5.07767 10C5.07767 7.30759 7.26822 5.11719 9.96048 5.11719C12.6529 5.11719 14.8433 7.30759 14.8433 10C14.8433 12.6924 12.6529 14.8828 9.96048 14.8828ZM10.0014 6.25413C7.80598 6.25413 6.26095 7.79917 6.26095 9.99817C6.26095 11.8289 7.6453 13.7609 9.97978 13.7609C11.8107 13.7609 13.7142 12.0264 13.7142 9.99817C13.7142 8.16742 12.3175 6.25413 10.0014 6.25413ZM15.3902 3.55469C14.743 3.55469 14.2183 4.07929 14.2183 4.72657C14.2183 5.37384 14.743 5.89844 15.3902 5.89844C16.0374 5.89844 16.562 5.37384 16.562 4.72657C16.562 4.07929 16.0374 3.55469 15.3902 3.55469Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9571_951">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>
                                        </a>
                                        <div class="vertical-line"></div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_9574_688)">
                                                  <path d="M7.32012 20.0039C6.07637 20.0039 4.86035 19.5699 3.89668 18.7816C2.63105 17.7465 1.90527 16.2184 1.90527 14.5891C1.90527 13.4023 2.28262 12.275 2.99629 11.3293C3.68535 10.4164 4.66582 9.73242 5.75723 9.40391C6.73262 9.11016 7.76113 9.59805 8.14902 10.5391C8.17402 10.5992 8.1959 10.6617 8.21465 10.7234C8.3666 11.2281 8.31309 11.7617 8.06387 12.2258C7.81465 12.6898 7.39941 13.0293 6.89473 13.1813C6.27988 13.3664 5.85059 13.9453 5.85059 14.5891C5.85059 15.1035 6.12637 15.5875 6.57051 15.8523C6.81582 15.9988 7.09707 16.0695 7.38418 16.0574C8.17246 16.0238 8.79004 15.3656 8.79004 14.5586V1.99531C8.79004 1.09531 9.38691 0.301954 10.2412 0.0664076C10.3354 0.0402357 10.4322 0.0214857 10.5283 0.0101576C10.7068 -0.0113268 10.8877 -0.00781117 11.0662 0.0195326C11.7467 0.120704 12.333 0.578908 12.5971 1.21563C12.6967 1.45586 12.7471 1.70977 12.7471 1.97031C12.7471 3.01445 13.2217 3.98281 14.0494 4.62695C14.6416 5.08789 15.351 5.3332 16.1006 5.33594C16.9057 5.33867 17.6256 5.81875 17.935 6.55899C18.0701 6.8832 18.1154 7.23945 18.0654 7.58945C17.9268 8.55547 17.0768 9.28125 16.0861 9.28125C16.0826 9.28125 16.0795 9.28125 16.076 9.28125C14.899 9.27539 13.7619 8.9918 12.7354 8.45391V14.5984C12.7354 14.6047 12.7354 14.6109 12.735 14.6176C12.726 16.2234 12.0104 17.732 10.7709 18.759C9.80215 19.5617 8.57676 20.0039 7.32012 20.0039ZM6.32832 10.491C6.25098 10.491 6.17246 10.5023 6.09473 10.5258C5.23965 10.7832 4.47129 11.3195 3.93145 12.0352C3.37246 12.7758 3.07715 13.659 3.07715 14.5891C3.07715 15.8652 3.64629 17.0629 4.63887 17.8746C5.39395 18.4922 6.34629 18.832 7.32012 18.832C8.3041 18.832 9.26426 18.4855 10.0229 17.8566C10.9967 17.0496 11.558 15.8648 11.5631 14.6059C11.5631 14.6016 11.5631 14.5965 11.5635 14.5906V6.24492L12.4955 6.92695C13.5436 7.69414 14.7838 8.10274 16.0818 8.10938H16.0861C16.4975 8.10938 16.849 7.81524 16.9053 7.42344C16.9256 7.28047 16.9084 7.1418 16.8537 7.01094C16.7283 6.71133 16.4244 6.50899 16.0967 6.50781C15.0854 6.5043 14.1283 6.17344 13.3299 5.55156C12.215 4.68359 11.5756 3.37813 11.5756 1.97031C11.5756 1.86445 11.5553 1.76133 11.515 1.66445C11.4076 1.40547 11.1693 1.21914 10.8936 1.17852L10.8885 1.17774C10.815 1.16641 10.7408 1.16484 10.6674 1.17383C10.6295 1.17852 10.5912 1.18594 10.5533 1.19649C10.2045 1.29219 9.96152 1.6207 9.96152 1.99531V14.5586C9.96152 15.2449 9.70293 15.8984 9.23379 16.3988C8.75957 16.9047 8.12012 17.1992 7.4334 17.2281C6.91738 17.2496 6.41152 17.1223 5.96973 16.8586C5.17324 16.3836 4.67832 15.5137 4.67832 14.5891C4.67832 13.4328 5.45059 12.3926 6.55645 12.0594C6.76113 11.9977 6.92988 11.8598 7.03105 11.6715C7.13223 11.4832 7.1541 11.2664 7.09238 11.0617C7.08496 11.0367 7.07559 11.0109 7.06543 10.9859C6.93887 10.6789 6.64473 10.491 6.32832 10.491ZM12.7346 14.6082V14.6133C12.7346 14.6117 12.7346 14.6098 12.7346 14.6082Z" class="fill-sec"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_9574_369">
                                                    <rect width="20" height="20" class="fill-white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TEAM END -->

        <!-- SPECIAL ITEMS START -->
        <section class="special py-80">
            <div class="container-fluid">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">SIGNATURE DELIGHT</h5>
                    <h2 class="color-white font-primary fw-600">Our Special Items</h2>
                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pellentesque aliquet in risus <br> phasellus tellus non est.</p>
                </div> 
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="special-item p-24">
                            <div class="item-image">
                                <a href="#">
                                    <img src="assets/media/menu/9.png" alt="">
                                </a>
                                <div class="icon">
                                    <a href="wishlist.php">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-detail">
                                <div class="rating mb-16">
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <a href="#" class="h6 color-white mb-8"> 
                                    CAFFE LATTE
                                </a>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="h6 color-sec">$20.00</span>
                                    <a href="cart.php" class="cus-btn transparent textd-16 p-8-16">
                                        ADD TO CART
                                        <i class="far fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="special-item p-24">
                            <div class="item-image">
                                <a href="#">
                                    <img src="assets/media/menu/10.png" alt="">
                                </a>
                                <div class="sale">
                                    <p class="text-16 color-sec">SALE</p>
                                </div>
                                <div class="icon">
                                    <a href="wishlist.php">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-detail">
                                <div class="rating mb-16">
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <a href="#" class="h6 color-white mb-8"> 
                                    ICED CARAMEL LATTE
                                </a>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="h6 color-sec d-flex"><span class="text-decoration-line-through color-white d-xxl-flex d-none">$22.00</span> &nbsp;$20.00</span>
                                    <a href="cart.php" class="cus-btn transparent textd-16 p-8-16">
                                        ADD TO CART
                                        <i class="far fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="special-item p-24">
                            <div class="item-image">
                                <a href="#">
                                    <img src="assets/media/menu/11.png" alt="">
                                </a>
                                <div class="icon">
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-detail">
                                <div class="rating mb-16">
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <a href="#" class="h6 color-white mb-8"> 
                                    CAFFE MOCHA
                                </a>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="h6 color-sec">$20.00</span>
                                    <a href="cart.php" class="cus-btn transparent textd-16 p-8-16">
                                        ADD TO CART
                                        <i class="far fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="special-item p-24">
                            <div class="item-image">
                                <a href="#">
                                    <img src="assets/media/menu/12.png" alt="">
                                </a>
                                <div class="icon">
                                    <a href="wishlist.php">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-detail">
                                <div class="rating mb-16">
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <a href="#" class="h6 color-white mb-8"> 
                                    ESPRESSO MACCHIATO
                                </a>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="h6 color-sec">$20.00</span>
                                    <a href="cart.php" class="cus-btn transparent textd-16 p-8-16">
                                        ADD TO CART
                                        <i class="far fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SPECIAL ITEMS END -->

        <!-- TESTIMONIAL START -->
        <section class="testimonial py-80">
            <div class="container-fluid">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">Customer Love Notes</h5>
                    <h2 class="color-white font-primary fw-600">Words from Our Happy Customers</h2>
                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pellentesque aliquet in risus <br> phasellus tellus non est.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11">
                        <div class="testimonial-wrapper">
                            <div class="row align-items-center row-gap-4">
                                <div class="col-lg-6">
                                    <div class="testimonial-image-slider">
                                        <div class="image-box">
                                            <img src="assets/media/testimonials/t-image-1.png" alt="" class="m-auto">
                                        </div>
                                        <div class="image-box">
                                            <img src="assets/media/testimonials/t-image-2.png" alt="" class="m-auto">
                                        </div>
                                        <div class="image-box">
                                            <img src="assets/media/testimonials/t-image-3.png" alt="" class="m-auto">
                                        </div>
                                        <div class="image-box">
                                            <img src="assets/media/testimonials/t-image-4.png" alt="" class="m-auto">
                                        </div>
                                        <div class="image-box">
                                            <img src="assets/media/testimonials/t-image-5.png" alt="" class="m-auto">
                                        </div>
                                    </div>
                                    <div class="all-navboxes">
                                        <div class="testimonial-asNav-slider">
                                            <div class="nav-box">
                                                <img src="assets/media/testimonials/nav-1.png" alt="">
                                            </div>
                                            <div class="nav-box">
                                                <img src="assets/media/testimonials/nav-2.png" alt="">
                                            </div>
                                            <div class="nav-box">
                                                <img src="assets/media/testimonials/nav-3.png" alt="">
                                            </div>
                                            <div class="nav-box">
                                                <img src="assets/media/testimonials/nav-4.png" alt="">
                                            </div>
                                            <div class="nav-box">
                                                <img src="assets/media/testimonials/nav-5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testimonial-text-slider">
                                        <div class="content-box">
                                            <div class="quotes">
                                                <img src="assets/media/icon/quote.png" alt="">
                                            </div>
                                            <div class="review-block">
                                                <div class="review-text mb-24">
                                                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium blandit ultrices hendrerit arcu. Dignissim
                                                        volutpat cursus magnis ante ultrices cras lacus et nibh. Urna convallis.</p>
                                                </div>
                                                <div class="rating-box">
                                                    <div class="mb-16">
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                    </div>
                                                    <div class="person-info d-flex mb-4p">
                                                        <div>
                                                            <p class="color-white mb-4p">Olivia Anderson</p>
                                                            <p class="color-sec">Maker</p>
                                                        </div>
                                                        <div class="rate d-flex align-items-center gap-1">
                                                            <i class="fa-solid fa-star-sharp color-primary"></i>
                                                            <p class="color-primary">4.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="quotes">
                                                <img src="assets/media/icon/quote.png" alt="">
                                            </div>
                                            <div class="review-block">
                                                <div class="review-text mb-24">
                                                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium blandit ultrices hendrerit arcu. Dignissim
                                                        volutpat cursus magnis ante ultrices cras lacus et nibh. Urna convallis.</p>
                                                </div>
                                                <div class="rating-box">
                                                    <div class="mb-16">
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                    </div>
                                                    <div class="person-info d-flex mb-4p">
                                                        <div>
                                                            <p class="color-white mb-4p">Catherine Nickson</p>
                                                            <p class="color-sec">Visiter</p>
                                                        </div>
                                                        <div class="rate d-flex align-items-center gap-1">
                                                            <i class="fa-solid fa-star-sharp color-primary"></i>
                                                            <p class="color-primary">4.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="quotes">
                                                <img src="assets/media/icon/quote.png" alt="">
                                            </div>
                                            <div class="review-block">
                                                <div class="review-text mb-24">
                                                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium blandit ultrices hendrerit arcu. Dignissim
                                                        volutpat cursus magnis ante ultrices cras lacus et nibh. Urna convallis.</p>
                                                </div>
                                                <div class="rating-box">
                                                    <div class="mb-16">
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                    </div>
                                                    <div class="person-info d-flex mb-4p">
                                                        <div>
                                                            <p class="color-white mb-4p">Linda James</p>
                                                            <p class="color-sec">Customer</p>
                                                        </div>
                                                        <div class="rate d-flex align-items-center gap-1">
                                                            <i class="fa-solid fa-star-sharp color-primary"></i>
                                                            <p class="color-primary">4.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="quotes">
                                                <img src="assets/media/icon/quote.png" alt="">
                                            </div>
                                            <div class="review-block">
                                                <div class="review-text mb-24">
                                                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium blandit ultrices hendrerit arcu. Dignissim
                                                        volutpat cursus magnis ante ultrices cras lacus et nibh. Urna convallis.</p>
                                                </div>
                                                <div class="rating-box">
                                                    <div class="mb-16">
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                    </div>
                                                    <div class="person-info d-flex mb-4p">
                                                        <div>
                                                            <p class="color-white mb-4p">Chenal David</p>
                                                            <p class="color-sec">Maker</p>
                                                        </div>
                                                        <div class="rate d-flex align-items-center gap-1">
                                                            <i class="fa-solid fa-star-sharp color-primary"></i>
                                                            <p class="color-primary">4.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="quotes">
                                                <img src="assets/media/icon/quote.png" alt="">
                                            </div>
                                            <div class="review-block">
                                                <div class="review-text mb-24">
                                                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium blandit ultrices hendrerit arcu. Dignissim
                                                        volutpat cursus magnis ante ultrices cras lacus et nibh. Urna convallis.</p>
                                                </div>
                                                <div class="rating-box">
                                                    <div class="mb-16">
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                        <i class="fa-solid fa-star-sharp color-sec"></i>
                                                    </div>
                                                    <div class="person-info d-flex mb-4p">
                                                        <div>
                                                            <p class="color-white mb-4p">Emily Johnson</p>
                                                            <p class="color-sec">Maker</p>
                                                        </div>
                                                        <div class="rate d-flex align-items-center gap-1">
                                                            <i class="fa-solid fa-star-sharp color-primary"></i>
                                                            <p class="color-primary">4.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-image">
                                        <img src="assets/media/testimonials/coffee-cup.png" alt="">
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL END -->

        <!-- BLOG START -->
        <section class="blog py-80">
            <div class="container-fluid">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">Our Blogs</h5>
                    <h2 class="color-white font-primary fw-600">The Brew Blog</h2>
                    <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pellentesque aliquet in risus <br> phasellus tellus non est.</p>
                </div>
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <a href="blog-detail.php" class="blog-item p-24">
                            <div class="blog-image">
                                <img src="assets/media/blog/1.jpg" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="d-flex item-center gap-12 mb-16">
                                    <div class="user-image flex-shrink-0">
                                        <img src="assets/media/user/1.jpg"  alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-thin color-sec mb-1">By: Olivia</span>
                                        <p class="text-16 color-sec">20 Nov, 2024</p>
                                    </div>
                                </div>
                                <h5 class="color-white mb-8"> 
                                    Coffee Cultures Around the World
                                </h5>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-8 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.99992 0C3.58876 0 0 3.58869 0 7.99977C0 12.4112 3.58876 16 7.99992 16C12.411 16 15.9997 12.4111 15.9997 7.99977C15.9997 3.58869 12.411 0 7.99992 0ZM7.99992 14.8532C4.2211 14.8532 1.14679 11.7787 1.14679 7.99977C1.14679 4.22102 4.2211 1.14679 7.99992 1.14679C11.7787 1.14679 14.8529 4.22102 14.8529 7.99977C14.8529 11.7787 11.7787 14.8532 7.99992 14.8532Z" class="fill-sec"/>
                                            <path d="M12.1134 7.8659H8.3539V3.75642C8.3539 3.43976 8.09725 3.18303 7.7805 3.18303C7.46384 3.18303 7.20711 3.43976 7.20711 3.75642V8.4393C7.20711 8.75596 7.46384 9.01269 7.7805 9.01269H12.1134C12.4301 9.01269 12.6868 8.75596 12.6868 8.4393C12.6868 8.12263 12.43 7.8659 12.1134 7.8659Z" class="fill-sec"/>
                                          </svg>
                                        <span class="text-thin color-sec">5 Min Read</span>
                                    </div>
                                    <span class="cus-btn transparent textd-16 p-8-16">
                                        READ MORE
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_9815_757)">
                                                <path
                                                    d="M11.3545 15.2002C11.3545 12.2002 14.1545 8.2002 17.3545 8.2002M17.3545 8.2002C15.5212 8.2002 11.3545 7.2002 11.3545 1.2002M17.3545 8.2002H-1.64551"
                                                    stroke="#E8C895" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9815_757">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.200195)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <a href="blog-detail.php" class="blog-item p-24">
                            <div class="blog-image">
                                <img src="assets/media/blog/2.jpg" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="d-flex item-center gap-12 mb-16">
                                    <div class="user-image flex-shrink-0">
                                        <img src="assets/media/user/2.jpg"  alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-thin color-sec mb-1">By: Olivia</span>
                                        <p class="text-16 color-sec">20 Nov, 2024</p>
                                    </div>
                                </div>
                                <h5 class="color-white mb-8"> 
                                    Sustainable Coffee Practices
                                </h5>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-8 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.99992 0C3.58876 0 0 3.58869 0 7.99977C0 12.4112 3.58876 16 7.99992 16C12.411 16 15.9997 12.4111 15.9997 7.99977C15.9997 3.58869 12.411 0 7.99992 0ZM7.99992 14.8532C4.2211 14.8532 1.14679 11.7787 1.14679 7.99977C1.14679 4.22102 4.2211 1.14679 7.99992 1.14679C11.7787 1.14679 14.8529 4.22102 14.8529 7.99977C14.8529 11.7787 11.7787 14.8532 7.99992 14.8532Z" class="fill-sec"/>
                                            <path d="M12.1134 7.8659H8.3539V3.75642C8.3539 3.43976 8.09725 3.18303 7.7805 3.18303C7.46384 3.18303 7.20711 3.43976 7.20711 3.75642V8.4393C7.20711 8.75596 7.46384 9.01269 7.7805 9.01269H12.1134C12.4301 9.01269 12.6868 8.75596 12.6868 8.4393C12.6868 8.12263 12.43 7.8659 12.1134 7.8659Z" class="fill-sec"/>
                                          </svg>
                                        <span class="text-thin color-sec">5 Min Read</span>
                                    </div>
                                    <span class="cus-btn transparent textd-16 p-8-16">
                                        READ MORE
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_9815_757)">
                                                <path
                                                    d="M11.3545 15.2002C11.3545 12.2002 14.1545 8.2002 17.3545 8.2002M17.3545 8.2002C15.5212 8.2002 11.3545 7.2002 11.3545 1.2002M17.3545 8.2002H-1.64551"
                                                    stroke="#E8C895" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9815_897">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.200195)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <a href="blog-detail.php" class="blog-item p-24">
                            <div class="blog-image">
                                <img src="assets/media/blog/3.jpg" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="d-flex item-center gap-12 mb-16">
                                    <div class="user-image flex-shrink-0">
                                        <img src="assets/media/user/3.jpg"  alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-thin color-sec mb-1">By: Olivia</span>
                                        <p class="text-16 color-sec">20 Nov, 2024</p>
                                    </div>
                                </div>
                                <h5 class="color-white mb-8"> 
                                    Brewing the Perfect Cup at Home
                                </h5>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-8 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.99992 0C3.58876 0 0 3.58869 0 7.99977C0 12.4112 3.58876 16 7.99992 16C12.411 16 15.9997 12.4111 15.9997 7.99977C15.9997 3.58869 12.411 0 7.99992 0ZM7.99992 14.8532C4.2211 14.8532 1.14679 11.7787 1.14679 7.99977C1.14679 4.22102 4.2211 1.14679 7.99992 1.14679C11.7787 1.14679 14.8529 4.22102 14.8529 7.99977C14.8529 11.7787 11.7787 14.8532 7.99992 14.8532Z" class="fill-sec"/>
                                            <path d="M12.1134 7.8659H8.3539V3.75642C8.3539 3.43976 8.09725 3.18303 7.7805 3.18303C7.46384 3.18303 7.20711 3.43976 7.20711 3.75642V8.4393C7.20711 8.75596 7.46384 9.01269 7.7805 9.01269H12.1134C12.4301 9.01269 12.6868 8.75596 12.6868 8.4393C12.6868 8.12263 12.43 7.8659 12.1134 7.8659Z" class="fill-sec"/>
                                          </svg>
                                        <span class="text-thin color-sec">5 Min Read</span>
                                    </div>
                                    <span class="cus-btn transparent textd-16 p-8-16">
                                        READ MORE
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_9815_757)">
                                                <path
                                                    d="M11.3545 15.2002C11.3545 12.2002 14.1545 8.2002 17.3545 8.2002M17.3545 8.2002C15.5212 8.2002 11.3545 7.2002 11.3545 1.2002M17.3545 8.2002H-1.64551"
                                                    stroke="#E8C895" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9815_575">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.200195)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <a href="blog-detail.php" class="blog-item p-24">
                            <div class="blog-image">
                                <img src="assets/media/blog/4.jpg" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="d-flex item-center gap-12 mb-16">
                                    <div class="user-image flex-shrink-0">
                                        <img src="assets/media/user/4.jpg"  alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-thin color-sec mb-1">By: Olivia</span>
                                        <p class="text-16 color-sec">20 Nov, 2024</p>
                                    </div>
                                </div>
                                <h5 class="color-white mb-8"> 
                                    Exploring Single-Origin Coffee
                                </h5>
                                <p class="text-16 light-gray mb-24"> Lorem ipsum dolor sit amet consectetur. Eget ullamcorper sit lacus pretium...</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-8 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.99992 0C3.58876 0 0 3.58869 0 7.99977C0 12.4112 3.58876 16 7.99992 16C12.411 16 15.9997 12.4111 15.9997 7.99977C15.9997 3.58869 12.411 0 7.99992 0ZM7.99992 14.8532C4.2211 14.8532 1.14679 11.7787 1.14679 7.99977C1.14679 4.22102 4.2211 1.14679 7.99992 1.14679C11.7787 1.14679 14.8529 4.22102 14.8529 7.99977C14.8529 11.7787 11.7787 14.8532 7.99992 14.8532Z" class="fill-sec"/>
                                            <path d="M12.1134 7.8659H8.3539V3.75642C8.3539 3.43976 8.09725 3.18303 7.7805 3.18303C7.46384 3.18303 7.20711 3.43976 7.20711 3.75642V8.4393C7.20711 8.75596 7.46384 9.01269 7.7805 9.01269H12.1134C12.4301 9.01269 12.6868 8.75596 12.6868 8.4393C12.6868 8.12263 12.43 7.8659 12.1134 7.8659Z" class="fill-sec"/>
                                          </svg>
                                        <span class="text-thin color-sec">5 Min Read</span>
                                    </div>
                                    <span class="cus-btn transparent textd-16 p-8-16">
                                        READ MORE
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_9815_757)">
                                                <path
                                                    d="M11.3545 15.2002C11.3545 12.2002 14.1545 8.2002 17.3545 8.2002M17.3545 8.2002C15.5212 8.2002 11.3545 7.2002 11.3545 1.2002M17.3545 8.2002H-1.64551"
                                                    stroke="#E8C895" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9815_947">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.200195)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- BLOG END -->

        <!-- BRAND START -->
        <section class="brand pt-40 pb-80">
            <div class="container-fluid">
                <div class="d-flex flex-column align-items-center gap-8 text-center mb-48">
                    <h5 class="text-md color-sec text-uppercase">BRANDS</h5>
                    <h2 class="color-white font-primary fw-600">Our Brands</h2>
                </div>
                <div class="brand-slider-wrapper d-flex flex-column gap-24">
                    <div class="brand-slider slider-rightSlider" dir="rtl">
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-1.png" alt="/logo-1">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-2.png" alt="/logo-2">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-3.png" alt="/logo-3">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-4.png" alt="/logo-4">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-5.png" alt="/logo-5">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-6.png" alt="/logo-6">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-7.png" alt="/logo-7">
                            </div>
                        </div>
                    </div>
                    <div class="brand-slider slider-leftSlider" dir="ltr">
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-8.png" alt="/logo-8">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-9.png" alt="/logo-2">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-10.png" alt="/logo-9">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-11.png" alt="/logo-10">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-12.png" alt="/logo-11">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-13.png" alt="/logo-12">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="logo">
                                <img src="assets/media/brand/brand-1.png" alt="/logo-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BRAND END -->

        <!-- NEWSLETTER START -->
        <section class="newsletter bg-dark-black">
            <div class="container-fluid">
                <div class="newletter-wrapper">
                    <div class="newletter-image">
                        <img src="assets/media/images/newsletter.png" alt="">
                    </div>
                    <div class="newletter-content">
                        <div class="mb-48">
                            <h2 class="fw-600 color-white font-primary mb-16">Join in and Get <span class="color-sec">25%</span>Off!</h2>
                            <p class="light-gray">Subscribe To Our Newsletter and Get 25% Discount.</p>
                        </div>
                        <form action="https://uiparadox.co.uk/templates/caffe-craze/index.php" method="post">
                            <input type="email" class="form-control" name="email" id="mail" placeholder="Enter your email">
                            <button type="submit" class="cus-btn primary">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- NEWSLETTER END -->

        <!-- FOOTER START -->
        <footer class="pt-80 pb-40">
            <div class="container-fluid">
                <div class="footer-wrapper mb-40">
                    <div class="footer-main-box">
                        <div class="box-wrapper">
                            <h6 class="fw-600 color-sec mb-24">Opening Hours</h6>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Monday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">9:00 - 10.00pm</p>
                            </div>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Tuesday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">9:00 - 10.00pm</p>
                            </div>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Wednesday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">9:00 - 10.00pm</p>
                            </div>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Thurday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">9:00 - 10.00pm</p>
                            </div>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Friday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">9:00 - 10.00pm</p>
                            </div>
                            <div class="name-price mb-16">
                                <p class="color-white flex-shrink-0">Saturday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">Closed</p>
                            </div>
                            <div class="name-price">
                                <p class="color-white flex-shrink-0">Sunday</p>
                                <div class="center-line"></div>
                                <p class="color-white flex-shrink-0">Closed</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link-box v-2">
                        <h6 class="fw-600 color-sec mb-24">Opening Hours</h6>
                        <ul class="list-unstyled">
                            <li class="mb-12 color-white"><a href="index.php">Home</a></li>
                            <li class="mb-12 color-white"><a href="menu.php">Menu</a></li>
                            <li class="mb-12 color-white"><a href="contact.php">Reservation</a></li>
                            <li class="mb-12 color-white"><a href="about.php">About</a></li>
                            <li class="mb-12 color-white"><a href="shop-grid.php">Shop</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-box v-2">
                        <h6 class="fw-600 color-sec mb-24">Information</h6>
                        <ul class="list-unstyled ">
                            <li class="mb-12 color-white"><a href="contact.php">Contact Us</a></li>
                            <li class="mb-12 color-white"><a href="account.php">My Account</a></li>
                            <li class="mb-12 color-white"><a href="cart.php">Cart</a></li>
                            <li class="mb-12 color-white"><a href="checkout.php">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-box">
                        <h6 class="fw-600 color-sec mb-24">Contact Us</h6>
                        <ul class="contact-list list-unstyled">
                            <li class="d-flex align-items-center mb-sm-12 mb-16 color-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <g clip-path="url(#clip0_9768_630)">
                                        <path
                                            d="M8.27696 15.9914C8.3639 16.1219 8.51027 16.2002 8.66699 16.2002C8.82371 16.2002 8.97009 16.1219 9.05702 15.9914C10.1664 14.3275 11.8003 12.2724 12.939 10.1824C13.8494 8.51129 14.292 7.08601 14.292 5.8252C14.292 2.72357 11.7686 0.200195 8.66699 0.200195C5.56537 0.200195 3.04199 2.72357 3.04199 5.8252C3.04199 7.08601 3.48459 8.51129 4.39502 10.1824C5.5328 12.2709 7.1699 14.3309 8.27696 15.9914ZM8.66699 1.1377C11.2517 1.1377 13.3545 3.24051 13.3545 5.8252C13.3545 6.92532 12.9493 8.20388 12.1157 9.73391C11.1342 11.5354 9.73368 13.3629 8.66699 14.8992C7.60046 13.3631 6.1998 11.5355 5.21827 9.73391C4.38471 8.20388 3.97949 6.92532 3.97949 5.8252C3.97949 3.24051 6.0823 1.1377 8.66699 1.1377Z"
                                            fill="#E8C895" />
                                        <path
                                            d="M8.66699 8.6377C10.2178 8.6377 11.4795 7.37601 11.4795 5.8252C11.4795 4.27438 10.2178 3.0127 8.66699 3.0127C7.11618 3.0127 5.85449 4.27438 5.85449 5.8252C5.85449 7.37601 7.11618 8.6377 8.66699 8.6377ZM8.66699 3.9502C9.70087 3.9502 10.542 4.79132 10.542 5.8252C10.542 6.85907 9.70087 7.7002 8.66699 7.7002C7.63312 7.7002 6.79199 6.85907 6.79199 5.8252C6.79199 4.79132 7.63312 3.9502 8.66699 3.9502Z"
                                            fill="#E8C895" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_9768_630">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666992 0.200195)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p>123 Main Street, Anytown, USA.</p>
                            </li>
                            <li class="d-flex align-items-center mb-sm-12 mb-16 color-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <g clip-path="url(#clip0_9768_634)">
                                        <path
                                            d="M8.66692 0.300293C4.25575 0.300293 0.666992 3.88898 0.666992 8.30006C0.666992 12.7115 4.25575 16.3003 8.66692 16.3003C13.078 16.3003 16.6667 12.7114 16.6667 8.30006C16.6667 3.88898 13.078 0.300293 8.66692 0.300293ZM8.66692 15.1535C4.88809 15.1535 1.81378 12.079 1.81378 8.30006C1.81378 4.52132 4.88809 1.44708 8.66692 1.44708C12.4457 1.44708 15.5199 4.52132 15.5199 8.30006C15.5199 12.079 12.4457 15.1535 8.66692 15.1535Z"
                                            fill="#E8C895" />
                                        <path
                                            d="M12.7804 8.1662H9.02089V4.05672C9.02089 3.74005 8.76424 3.48332 8.4475 3.48332C8.13083 3.48332 7.8741 3.74005 7.8741 4.05672V8.73959C7.8741 9.05626 8.13083 9.31298 8.4475 9.31298H12.7804C13.0971 9.31298 13.3538 9.05626 13.3538 8.73959C13.3538 8.42292 13.097 8.1662 12.7804 8.1662Z"
                                            fill="#E8C895" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_9768_634">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666992 0.200195)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p>Everyday: 9am - 10pm</p>
                            </li>
                            <li class="mb-sm-12 mb-16 color-white">
                                <a href="tel:123545892" class="d-flex align-items-center gap-sm-8 gap-12">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <g clip-path="url(#clip0_9768_638)">
                                            <path
                                                d="M13.6659 12.6245L13.3323 12.0673C12.7321 11.0779 11.9039 9.94226 10.8176 9.94226C10.6163 9.94226 10.417 9.98274 10.2197 10.0647L9.63663 10.3148C9.58337 10.3368 9.53163 10.362 9.47686 10.3886C9.32762 10.4612 9.1584 10.5434 8.98434 10.5434C8.55497 10.5434 8.05747 9.98462 7.58372 8.97007C7.11877 7.97429 7.14843 7.45226 7.25516 7.18958C7.37293 6.89978 7.64679 6.77587 7.941 6.66452C7.98192 6.64901 8.01887 6.63493 8.0548 6.62014L8.64524 6.37154C10.1835 5.72827 9.61122 3.48031 9.4236 2.74331L9.26448 2.10964C9.12845 1.58739 8.76778 0.200195 7.57145 0.200195C7.34998 0.200195 7.11372 0.251792 6.86945 0.353615C6.70917 0.417263 4.50357 1.31757 3.7045 2.89925C2.74949 4.78192 2.92608 7.30656 4.22884 10.4014C5.52187 13.5002 7.19858 15.3956 9.21245 16.0348C9.55789 16.1446 9.9483 16.2001 10.3729 16.2001H10.3731C11.7629 16.2001 13.1348 15.6088 13.2462 15.5597C13.7253 15.3567 14.0351 15.0483 14.1667 14.6428C14.3898 13.9551 14.0155 13.2017 13.6659 12.6245ZM13.137 14.3086C13.1064 14.4029 13 14.4889 12.8211 14.5643C12.8181 14.5655 12.8145 14.5671 12.8115 14.5684C12.799 14.5739 11.5573 15.1178 10.3728 15.1177C10.0595 15.1177 9.77929 15.0792 9.54 15.0031C7.84336 14.4646 6.39259 12.7762 5.22708 9.9831C4.05291 7.19348 3.86528 4.97489 4.67019 3.38816C5.2952 2.15106 7.25191 1.36628 7.27111 1.35878C7.275 1.35719 7.27883 1.35568 7.28265 1.35409C7.39407 1.30733 7.49395 1.28265 7.57145 1.28265C7.80995 1.28265 8.02702 1.65256 8.21566 2.37758L8.37405 3.00858C8.71582 4.35082 8.66379 5.19037 8.22626 5.37337L7.63864 5.62089C7.61526 5.63056 7.58791 5.64074 7.55774 5.65221C7.23315 5.77511 6.5577 6.03071 6.25223 6.78208C5.97505 7.46388 6.08979 8.3294 6.60266 9.42816C7.29341 10.907 8.07241 11.6259 8.9842 11.6259C9.40736 11.6259 9.74704 11.4608 9.94996 11.3622C9.98734 11.344 10.0208 11.3274 10.0567 11.3125L10.6406 11.0621C10.7009 11.037 10.7588 11.0248 10.8175 11.0248C11.0986 11.0248 11.6026 11.3031 12.4052 12.6262L12.7386 13.183C13.1496 13.8615 13.1821 14.1697 13.137 14.3086Z"
                                                fill="#E8C895" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_9768_638">
                                                <rect width="16" height="16" fill="white" transform="translate(0.666992 0.200195)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>+1 (321) 009 008</p>
                                </a>
                            </li>
                            <li class="mb-sm-12 mb-16 color-white">
                                <a href="mailto:info@example.com" class="d-flex align-items-center gap-sm-8 gap-12">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <g clip-path="url(#clip0_9768_642)">
                                            <path
                                                d="M15.2607 2.5752H2.07324C1.29627 2.5752 0.666992 3.20838 0.666992 3.98145V12.4189C0.666992 13.1966 1.3009 13.8252 2.07324 13.8252H15.2607C16.0312 13.8252 16.667 13.1993 16.667 12.4189V3.98145C16.667 3.20976 16.0402 2.5752 15.2607 2.5752ZM15.0638 3.5127C14.7765 3.79848 9.83209 8.71685 9.66137 8.88666C9.39574 9.15229 9.04262 9.29854 8.66699 9.29854C8.29137 9.29854 7.93824 9.15226 7.67174 8.88579C7.55693 8.77157 2.66709 3.90751 2.27018 3.5127H15.0638ZM1.60449 12.2281V4.17285L5.65568 8.20269L1.60449 12.2281ZM2.27077 12.8877L6.32037 8.86385L7.00971 9.54957C7.4524 9.99226 8.04096 10.236 8.66699 10.236C9.29302 10.236 9.88159 9.99226 10.3234 9.55045L11.0136 8.86385L15.0632 12.8877H2.27077ZM15.7295 12.2281L11.6783 8.20269L15.7295 4.17285V12.2281Z"
                                                fill="#E8C895" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_9768_642">
                                                <rect width="16" height="16" fill="white" transform="translate(0.666992 0.200195)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>email@example.com</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="social-icon unstyled">
                            <li>
                                <h6 class="color-sec">Follow Us:</h6>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_9768_649)">
                                          <path d="M15.3545 4.8877C15.6779 4.8877 15.9404 4.6252 15.9404 4.30176V0.786133C15.9404 0.462695 15.6779 0.200195 15.3545 0.200195H11.8389C9.57715 0.200195 7.7373 2.04004 7.7373 4.30176V7.23145H5.97949C5.65605 7.23145 5.39355 7.49395 5.39355 7.81738V11.333C5.39355 11.6564 5.65605 11.9189 5.97949 11.9189H7.7373V19.6143C7.7373 19.9377 7.9998 20.2002 8.32324 20.2002H11.8389C12.1623 20.2002 12.4248 19.9377 12.4248 19.6143V11.9189H14.7686C15.0549 11.9189 15.2994 11.7119 15.3467 11.4295L15.9326 7.91387C15.9607 7.74395 15.9131 7.57012 15.8018 7.43848C15.6904 7.30723 15.5268 7.23145 15.3545 7.23145H12.4248V4.8877H15.3545ZM11.8389 8.40332H14.6627L14.2721 10.7471H11.8389C11.5154 10.7471 11.2529 11.0096 11.2529 11.333V19.0283H8.90918V11.333C8.90918 11.0096 8.64668 10.7471 8.32324 10.7471H6.56543V8.40332H8.32324C8.64668 8.40332 8.90918 8.14082 8.90918 7.81738V4.30176C8.90918 2.68652 10.2236 1.37207 11.8389 1.37207H14.7686V3.71582H11.8389C11.5154 3.71582 11.2529 3.97832 11.2529 4.30176V7.81738C11.2529 8.14082 11.5154 8.40332 11.8389 8.40332Z" fill="#EAEAEC"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_9768_649">
                                            <rect width="20" height="20" fill="white" transform="translate(0.666992 0.200195)"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>        
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_9768_652)">
                                          <path d="M7.98711 20.2042C6.74336 20.2042 5.52734 19.7702 4.56367 18.982C3.29805 17.9468 2.57227 16.4187 2.57227 14.7894C2.57227 13.6027 2.94961 12.4753 3.66328 11.5296C4.35234 10.6167 5.33281 9.93274 6.42422 9.60423C7.39961 9.31048 8.42813 9.79837 8.81602 10.7394C8.84102 10.7995 8.86289 10.862 8.88164 10.9238C9.03359 11.4284 8.98008 11.962 8.73086 12.4261C8.48164 12.8902 8.06641 13.2296 7.56172 13.3816C6.94688 13.5667 6.51758 14.1456 6.51758 14.7894C6.51758 15.3038 6.79336 15.7878 7.2375 16.0527C7.48281 16.1991 7.76406 16.2699 8.05117 16.2577C8.83945 16.2241 9.45703 15.5659 9.45703 14.7589V2.19563C9.45703 1.29563 10.0539 0.502272 10.9082 0.266725C11.0023 0.240553 11.0992 0.221803 11.1953 0.210475C11.3738 0.188991 11.5547 0.192506 11.7332 0.21985C12.4137 0.321022 13 0.779225 13.2641 1.41594C13.3637 1.65618 13.4141 1.91008 13.4141 2.17063C13.4141 3.21477 13.8887 4.18313 14.7164 4.82727C15.3086 5.28821 16.018 5.53352 16.7676 5.53626C17.5727 5.53899 18.2926 6.01907 18.602 6.7593C18.7371 7.08352 18.7824 7.43977 18.7324 7.78977C18.5938 8.75579 17.7438 9.48157 16.7531 9.48157C16.7496 9.48157 16.7465 9.48157 16.743 9.48157C15.566 9.47571 14.4289 9.19212 13.4023 8.65422V14.7988C13.4023 14.805 13.4023 14.8113 13.402 14.8179C13.393 16.4238 12.6773 17.9324 11.4379 18.9593C10.4691 19.762 9.24375 20.2042 7.98711 20.2042ZM6.99531 10.6913C6.91797 10.6913 6.83945 10.7027 6.76172 10.7261C5.90664 10.9835 5.13828 11.5199 4.59844 12.2355C4.03945 12.9761 3.74414 13.8593 3.74414 14.7894C3.74414 16.0656 4.31328 17.2632 5.30586 18.0749C6.06094 18.6925 7.01328 19.0324 7.98711 19.0324C8.97109 19.0324 9.93125 18.6859 10.6898 18.057C11.6637 17.2499 12.225 16.0652 12.2301 14.8062C12.2301 14.8019 12.2301 14.7968 12.2305 14.7909V6.44524L13.1625 7.12727C14.2105 7.89446 15.4508 8.30305 16.7488 8.30969H16.7531C17.1645 8.30969 17.516 8.01555 17.5723 7.62376C17.5926 7.48079 17.5754 7.34212 17.5207 7.21126C17.3953 6.91165 17.0914 6.7093 16.7637 6.70813C15.7523 6.70462 14.7953 6.37376 13.9969 5.75188C12.882 4.88391 12.2426 3.57844 12.2426 2.17063C12.2426 2.06477 12.2223 1.96165 12.182 1.86477C12.0746 1.60579 11.8363 1.41946 11.5605 1.37883L11.5555 1.37805C11.482 1.36672 11.4078 1.36516 11.3344 1.37415C11.2965 1.37883 11.2582 1.38626 11.2203 1.3968C10.8715 1.49251 10.6285 1.82102 10.6285 2.19563V14.7589C10.6285 15.4452 10.3699 16.0988 9.90078 16.5991C9.42656 17.105 8.78711 17.3995 8.10039 17.4284C7.58437 17.4499 7.07852 17.3226 6.63672 17.0589C5.84023 16.5839 5.34531 15.714 5.34531 14.7894C5.34531 13.6331 6.11758 12.5929 7.22344 12.2597C7.42813 12.198 7.59688 12.0601 7.69805 11.8718C7.79922 11.6835 7.82109 11.4667 7.75938 11.262C7.75195 11.237 7.74258 11.2113 7.73242 11.1863C7.60586 10.8792 7.31172 10.6913 6.99531 10.6913ZM13.4016 14.8085V14.8136C13.4016 14.812 13.4016 14.8101 13.4016 14.8085Z" fill="#EAEAEC"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_9768_652">
                                            <rect width="20" height="20" fill="white" transform="translate(0.666992 0.200195)"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_9768_655)">
                                          <path d="M10.8638 20.2001C10.7976 20.2001 10.7314 20.2001 10.6647 20.1998C9.09701 20.2036 7.6485 20.1638 6.23981 20.0781C4.9483 19.9995 3.76941 19.5532 2.83038 18.7875C1.92432 18.0486 1.30557 17.0497 0.991394 15.8186C0.717957 14.7468 0.703461 13.6947 0.689575 12.6771C0.679504 11.947 0.669128 11.0818 0.666992 10.202C0.669128 9.31849 0.679504 8.45331 0.689575 7.72318C0.703461 6.70572 0.717957 5.65363 0.991394 4.5817C1.30557 3.35062 1.92432 2.35163 2.83038 1.6128C3.76941 0.847112 4.9483 0.400792 6.23996 0.322209C7.64865 0.236608 9.09747 0.19663 10.6685 0.200444C12.2367 0.197087 13.6847 0.236608 15.0934 0.322209C16.3849 0.400792 17.5638 0.847112 18.5028 1.6128C19.4091 2.35163 20.0276 3.35062 20.3418 4.5817C20.6153 5.65348 20.6298 6.70572 20.6436 7.72318C20.6537 8.45331 20.6642 9.31849 20.6662 10.1983V10.202C20.6642 11.0818 20.6537 11.947 20.6436 12.6771C20.6298 13.6946 20.6154 14.7466 20.3418 15.8186C20.0276 17.0497 19.4091 18.0486 18.5028 18.7875C17.5638 19.5532 16.3849 19.9995 15.0934 20.0781C13.7444 20.1602 12.3586 20.2001 10.8638 20.2001ZM10.6647 18.9611C12.2069 18.9648 13.6229 18.9257 14.9985 18.8421C15.9751 18.7827 17.127 18.1422 17.8207 17.5765C18.4618 17.0536 18.9034 16.3322 19.1331 15.4322C19.3607 14.54 19.3738 13.5821 19.3865 12.6557C19.3964 11.9305 19.4068 11.0714 19.4089 10.2001C19.4068 9.32871 19.3964 8.46979 19.3865 7.74454C19.3738 6.81818 19.3607 5.86023 19.1331 4.9679C18.9034 4.06794 18.4618 3.3465 17.8207 2.82358C17.127 2.25809 15.9751 1.63629 14.9985 1.57693C13.6229 1.49316 12.2069 1.45456 10.6684 1.45792C9.12646 1.45425 7.7103 1.49775 6.33472 1.58152C5.35815 1.64088 4.31304 2.05969 3.61938 2.62518C2.9782 3.1481 2.41787 4.06794 2.18823 4.9679C1.96056 5.86023 1.94744 6.81803 1.93478 7.74454C1.92486 8.4704 1.91448 9.32993 1.91235 10.202C1.91448 11.0702 1.92486 11.9299 1.93478 12.6557C1.94744 13.5821 1.96056 14.54 2.18823 15.4322C2.41787 16.3322 2.85946 17.0536 3.50063 17.5765C4.1943 18.142 5.35815 18.7827 6.33472 18.8421C7.7103 18.9259 9.12677 18.9649 10.6647 18.9611ZM10.6275 15.083C7.93521 15.083 5.74466 12.8926 5.74466 10.2001C5.74466 7.50773 7.93521 5.31733 10.6275 5.31733C13.3199 5.31733 15.5103 7.50773 15.5103 10.2001C15.5103 12.8926 13.3199 15.083 10.6275 15.083ZM10.6684 6.45427C8.47297 6.45427 6.92794 7.9993 6.92794 10.1983C6.92794 12.0291 8.31229 13.961 10.6468 13.961C12.4777 13.961 14.3812 12.2265 14.3812 10.1983C14.3812 8.36756 12.9845 6.45427 10.6684 6.45427ZM16.0572 3.75483C15.41 3.75483 14.8853 4.27942 14.8853 4.9267C14.8853 5.57398 15.41 6.09858 16.0572 6.09858C16.7044 6.09858 17.229 5.57398 17.229 4.9267C17.229 4.27942 16.7044 3.75483 16.0572 3.75483Z" fill="#EAEAEC"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_9768_655">
                                            <rect width="20" height="20" fill="white" transform="translate(0.666992 0.200195)"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_9768_658)">
                                          <path d="M12.5354 8.66883L19.8208 0.200195H18.0944L11.7685 7.55339L6.71608 0.200195H0.888672L8.52898 11.3195L0.888672 20.2002H2.61517L9.29545 12.435L14.6312 20.2002H20.4586L12.535 8.66883H12.5354ZM10.1708 11.4175L9.39666 10.3103L3.23725 1.49987H5.88904L10.8598 8.61014L11.6339 9.71737L18.0952 18.9596H15.4434L10.1708 11.4179V11.4175Z" fill="#EAEAEC"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_9768_658">
                                            <rect width="20" height="20" fill="white" transform="translate(0.666992 0.200195)"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom-bar">
                    <p class="color-white text-center">
                        @2024 All Rights Copyright <a href="index.php" class="color-sec">Coffee Shop</a> . Design & Developed By UIPARADOX
                    </p>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
    <!-- Main Wrapper End -->

    <button id="back-to-top" style="display: none;"><i class="fa-solid fa-arrow-turn-up"></i></button>

     <!-- Mobile Menu Start -->
     <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/media/mobile-logo.png" alt=""></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:example@company.com">example@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+12345678">+123 (4567) -890</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->

    <!-- modal-popup area end  -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
          <form role="search" method="get" class="search-popup__form" action="https://uiparadox.co.uk/templates/caffe-craze/index.php">
            <input type="text" id="search" placeholder="Search Here...">
            <button type="submit"><i class="fal fa-search"></i></button>
          </form>
        </div>
      </div>
    <!-- search-popup -->

    <!-- Modal -->
    <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="shop-detail">
                        <div class="detail-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="quick-image-box">
                                        <img src="assets/media/images/product-quickview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-text-container bg-light-black br-20">
                                        <div class="close-content text-end">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark color-white"></i></button>
                                        </div>
                                        <h5 class="color-white fw-600 mb-16">ESPRESSO MACCHIATO</h5>
                                        <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                            <h6 class="color-sec">★&nbsp;★&nbsp;★&nbsp;★&nbsp;★</h6>
                                            <div class="vr-line vr-line-2"></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-16 mb-24">
                                            <h6 class="color-sec">$30.00</h6>
                                            <p class="color-white text-decoration-line-through fw-300">$50.00</p>
                                        </div>
                                        <p class="color-white mb-24">
                                            Lorem ipsum dolor sit amet consectetur. Purus nulla nec in ac malesuada et nisi
                                            ipsum. Massa scelerisque...
                                        </p>
                                        <div class="hr-line mb-24"></div>
                                        <div class="function-bar mb-16">
                                            <div class="quantity quantity-wrap mb-24">
                                                <div class="input-area quantity-wrap">
                                                    <input class="decrement" type="button" value="-">
                                                    <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                        class="number">
                                                    <input class="increment" type="button" value="+">
                                                </div>
                                            </div>
                                            <div class="cart-btn d-flex">
                                                <a href="cart.php" class="cus-btn primary">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Jquery Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>

    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from uiparadox.co.uk/templates/caffe-craze/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:16:18 GMT -->
</html>