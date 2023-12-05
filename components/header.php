<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/img/logo/logo-icon.png" />
    <title>Bank Muamalat</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
    <script src="public/js/global.js"></script>
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
</head>
<body>
    <header>
        <nav id="nav">
            <div class="nav-top">
                <div class="nav-icon">
                    <button onclick="goToCalc()">
                        <i class="iconify" data-icon="ph:calculator-fill"></i>
                    </button>
                    <button onclick="goToFooter()">
                        <i class="iconify" data-icon="mdi:location"></i>
                    </button>
                    <button onclick="goToFooter()">
                        <i class="iconify" data-icon="ic:baseline-call"></i>
                    </button>
                </div>
                <div class="search-bar">
                    <i class="iconify" data-icon="gg:search"></i>
                    <input type="search" name="search" id="search" placeholder="Ketik untuk mencari">
                </div>
                <div class="language-button-wrapper">
                    <button id="id-btn" onclick="translateToBahasa()" class="language-button active">ID</button>
                    <button id="en-btn" onclick="translateToEnglish()" class="language-button">EN</button>
                </div>
            </div>
            <div class="nav-bottom">
                <a href="/bank-muamalat">
                    <img class="logo" src="public/img/logo/logo.svg" alt="logo">
                </a>
                <ul>
                    <a href="/bank-muamalat/customer-retail-banking.php">
                        <li>Customer & Retail Banking</li>
                    </a>
                    <a href="/bank-muamalat/enterprise-banking.php">
                        <li>Enterprise Banking</li>
                    </a>
                    <a href="/bank-muamalat/e-banking.php">
                        <li>E - Banking</li>
                    </a>
                    <a href="/bank-muamalat/tentang-muamalat.php">
                        <li>Tentang Muamalat</li>
                    </a>
                    <a href="/bank-muamalat/hubungi-kami.php">
                        <li>Hubungi Kami</li>
                    </a>
                    <a href="/bank-muamalat/karir.php">
                        <li>Karir</li>
                    </a>
                </ul>
                <div class="dropdown">
                    <button class="login-button"><span>Masuk</span><i class="iconify" data-icon="ri:arrow-down-s-line"></i></button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="/bank-muamalat/login">Masuk 1</a>
                        <a href="/bank-muamalat/login">Masuk 2</a>
                    </div>
                </div>
            </div>
        </nav>