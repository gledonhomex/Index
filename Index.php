<?php
/*
 * File: copyright.php
 * Author: Aditya Putra Bramasta
 * Hak Cipta: Â© 2023 Aditya Putra Bramasta. Semua hak dilindungi.
 */

// Informasi hak cipta
$copyright_owner = "Aditya Putra Bramasta";
$copyright_year = date("Y");
$license = "Semua hak dilindungi";
$website = "www.bramasta.my.id"; // Ganti dengan website Anda
$email = "aditiyaputra8674@gmail.com"; // Ganti dengan email Anda

// Fungsi untuk menampilkan badge hak cipta
function displayCopyrightBadge($owner, $year, $license) {
    $badge = "
    <div class='copyright-badge'>
        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-copyright'>
            <circle cx='12' cy='12' r='10'></circle>
            <path d='M14.83 14.83a4 4 0 1 1 0-5.66'></path>
        </svg>
        <span>Â© $year $owner. $license</span>
    </div>";
    return $badge;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hak Cipta <?php echo htmlspecialchars($copyright_owner); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6f9fc 0%, #e3ebf6 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #2c3e50;
            line-height: 1.6;
        }
        
        .copyright-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 90%;
            max-width: 600px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .copyright-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .copyright-header {
            margin-bottom: 2rem;
        }
        
        .copyright-header h1 {
            font-size: 2.2rem;
            color: #3498db;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .copyright-header p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }
        
        .copyright-badge {
            display: inline-flex;
            align-items: center;
            background: #f8f9fa;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            margin: 1.5rem 0;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .copyright-badge svg {
            margin-right: 10px;
            color: #e74c3c;
        }
        
        .copyright-badge span {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .copyright-details {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #eee;
        }
        
        .copyright-details p {
            margin-bottom: 0.8rem;
        }
        
        .copyright-contact a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .copyright-contact a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .copyright-container {
                padding: 2rem;
            }
            
            .copyright-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="copyright-container">
        <div class="copyright-header">
            <h1>Hak Cipta</h1>
            <p>Informasi kepemilikan dan lisensi</p>
        </div>
        
        <?php echo displayCopyrightBadge($copyright_owner, $copyright_year, $license); ?>
        
        <div class="copyright-message">
            <p>Seluruh konten, desain, dan kode pada platform ini dilindungi oleh undang-undang hak cipta.</p>
            <p>Dilarang memperbanyak, mendistribusikan, atau memodifikasi tanpa izin tertulis dari pemilik hak cipta.</p>
        </div>
        
        <div class="copyright-details">
            <div class="copyright-contact">
                <p><strong>Pemilik Hak Cipta:</strong> <?php echo htmlspecialchars($copyright_owner); ?></p>
                <p><strong>Tahun:</strong> <?php echo htmlspecialchars($copyright_year); ?></p>
                <p><strong>Website:</strong> <a href="https://<?php echo htmlspecialchars($website); ?>" target="_blank"><?php echo htmlspecialchars($website); ?></a></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
            </div>
        </div>
    </div>
</body>
</html>
