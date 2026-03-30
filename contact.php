<html dir="ltr">
<head>

<title>Savium</title>
<meta name="description" content="Savium">

<?php include 'inc/head.php'; ?>


<style>
.contact-page-section{
    background:#13615b; width: 100%;
    padding:40px 0 30px;
}

.contact-page-wrap{
    max-width:1020px;
    margin:0 auto;
    padding:0 20px;
}

.contact-card{
    display:grid;
    grid-template-columns: 1.08fr 0.92fr;
    background:#f7f7f7;
    border-radius:26px;
    overflow:hidden;
    min-height:620px;
}

.contact-card-left{
    position:relative;
    background:#1b837b;
    padding:30px 30px 30px;
    color:#fff;
    overflow:hidden;
}

.contact-card-left::after{
       content: "";
    position: absolute;
    left: 136px;
    bottom: -325px;
    width: 640px;
    height: 640px;
    border-radius: 50%;
    background: rgba(83, 210, 192, 0.10);
}

.contact-card-left > *{
    position:relative;
    z-index:2;
}

.contact-card-left h2{
    margin:0 0 15px;
    font-size:2rem;
    line-height:1.15;
    font-weight:700;
    color:#ffffff;
}

.contact-card-left .contact-subtext{
    margin:0 0 30px;
    font-size:18px;
    line-height:1.6;
    color:#eaf7f5;
    font-weight:500;
}

.contact-info-list{
    display:flex;
    flex-direction:column;
    gap:34px;
}

.contact-info-item{
    display:flex;
    align-items:flex-start;
    gap:18px;
}

.contact-info-icon{
    width:48px;
    height:48px;
    min-width:48px;
    border-radius:50%;
    background:rgba(214,255,248,0.22);
    display:flex;
    align-items:center;
    justify-content:center;
}

.contact-info-icon svg{
    width:20px;
    height:20px;
    fill:#ffffff;
}

.contact-info-text .mini-label{
    margin:0 0 6px;
    font-size:14px;
    line-height:1.2;
    color:#9fe1d7;
    font-weight:600;
    text-transform:lowercase;
}

.contact-info-text p{
    margin:0;
    font-size:18px;
    line-height:1.6;
    font-weight:700;
    color:#ffffff;
}

.contact-card-right{
    background:#f7f7f7;
    padding:30px;
}

.contact-card-right h2{
    margin:0 0 15px;
    text-align:center;
    color:#0f5f58;
    font-size:2rem;
    line-height:1.15;
    font-weight:700;
}

.contact-form-group{
    margin-bottom:18px;
}

.contact-form-group label{
    display:block;
    margin:0 0 10px;
    font-size:14px;
    line-height:1.2;
    color:#103f3c;
    font-weight:600;
}

.contact-form-group input,
.contact-form-group textarea{
    width:100%;
    border:none;
    outline:none;
    box-shadow:none;
    background:#dfeceb;
    color:#0d6660;
    font-size:16px;
    border-radius:12px;
    padding:15px 16px;
}

.contact-form-group input::placeholder,
.contact-form-group textarea::placeholder{
    color:#1e7b74;
    opacity:1;
}

.contact-form-group textarea{
    height:220px;
    resize:none;
    padding-top:16px;
}

.contact-submit-btn{
    width:100%;
    height:44px;
    border:none;
    outline:none;
    border-radius:8px;
    background:#0b5a54;
    color:#fff;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:0.2s ease;
}

.contact-submit-btn:hover{
    opacity:0.95;
}

@media (max-width: 991px){
    .contact-card{
        grid-template-columns:1fr;
    }

    .contact-card-left,
    .contact-card-right{
        padding:34px 24px;
    }

    .contact-card-left h2,
    .contact-card-right h2{
        font-size:30px;
    }
}

@media (max-width: 575px){
    .contact-page-section{
        padding:24px 0 18px;
    }

    .contact-page-wrap{
        padding:0 14px;
    }

    .contact-card-left h2,
    .contact-card-right h2{
        font-size:26px;
    }

    .contact-card-left .contact-subtext,
    .contact-info-text p{
        font-size:16px;
    }

    .contact-form-group textarea{
        height:180px;
    }
}
</style>
  

</head>
<body>

<div id="main">
<!--$-->
<div class="savium-O2K8G savium-l33gxc">

<!-- header -->
<?php include 'inc/header.php'; ?>
<!-- //header end -->

<div class="contact-page-section">
    <div class="contact-page-wrap">
        <div class="contact-card">

            <div class="contact-card-left">
                <h2>Get in Touch</h2>
                <p class="contact-subtext">Our team is ready to assist you</p>

                <div class="contact-info-list">

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <p class="mini-label">email addresss</p>
                            <p>info@savium.co.uk</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 5c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <p class="mini-label">call now</p>
                            <p>020 3386 9731</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z"/>
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <p class="mini-label">Office address</p>
                            <p>167-169 Great Portland Street, 5th Floor, London, England W1W 5PF</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 1a11 11 0 1 0 11 11A11.013 11.013 0 0 0 12 1zm1 11.41V6h-2v7h6v-2z"/>
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <p class="mini-label">office time</p>
                            <p>Mon - Sat | 09:00 AM - 06:00 PM</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="contact-card-right">
                <h2>Ask for Call Back</h2>

                <form action="" method="post">
                    <div class="contact-form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Jane Smith">
                    </div>

                    <div class="contact-form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="jane@email.com">
                    </div>

                    <div class="contact-form-group">
                        <label>Email</label>
                        <textarea name="message" placeholder="write your message here..."></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>


</div>


<!-- footer -->
<?php include 'inc/footer.php'; ?>
<!-- //footer -->


</div>
<!--/$-->
</div>

<?php include 'inc/footer-script.php'; ?>

</body>
</html>