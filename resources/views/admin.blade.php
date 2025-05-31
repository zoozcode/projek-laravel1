<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="/css/all.min.css">
        <link rel="shortcut icon" href="/zooz.png" type="image/x-icon">

    
    <link rel="stylesheet" href="/admin.css">
    <style>
        .salam{
            margin-top: 20px;
            width: 100%;
            height: 120px;
            background-image: linear-gradient(to right top, #ff00d3, #ff00b7, #ff009c, #ff0083, #ff006c, #ff0161, #ff0757, #ff114c, #ff194b, #ff2049, #ff2548, #ff2a47);
            border-radius: 20px;
        }

        .salam h2{
            color: white;
            padding-top: 30px;
            padding-left: 20px;
            font-size: 30px
        }

        .salam p{
            font-size: 16px;
            color: white;
            padding-top: 10px;
            padding-left: 20px;
        }

        @media (max-width: 768px){
            .salam h2{
                font-size: 24px;
                padding-top: 10px;
            }

            .salam p{
                font-size: 14px;
                padding-top: 6px;
            }
        }
        .logo h2{
            color: #ff006c;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/zooz.png" alt="">
                    <h2 style="padding-top: 3px, font-size: 16px;">Meubel Jepara</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close </span>
                </div>
            </div>

            <div class="sidebar">
               <a href="/admin/admin"><span class="material-symbols-outlined">dashboard</span>
                    <h3>dashboard</h3>
                </a>
                <a href="/admin/kategori"><span class="material-symbols-outlined">equalizer</span>
                    <h3>kategori</h3>
                </a>
                <a href="/admin/produk"><span class="material-symbols-outlined">shopping_cart_checkout</span>
                    <h3>produk</h3>
                </a>
                <a href="/admin/stock"><span class="material-symbols-outlined">blood_pressure</span>
                    <h3>stock barang</h3>
                </a>
                <a href="logout"><span class="material-symbols-outlined">logout</span>
                    <h3>keluar</h3>
                </a>
            </div>
        </aside>

        {{-- end of aside --}}
        <main>
            <h1>Dashboard</h1>
            {{-- <div class="date">
                <input type="date">
            </div> --}}

            <div class="salam">
                <h2>Selamat datang, Admin!</h2>
                <p>Kelola sistem database anda disini</p>
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total <br>Penjualan</h3>
                            <h1>$25.024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of sales --}}
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pendapatan Perbulan</h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of expenses --}}
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pertumbuhan Penjualan</h3>
                            <h1>$10.024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of income --}}
            </div>
            {{-- end of insights --}}
            <div class="recent-order">
                <h2>Recent Order</h2>
               
                    
               
                <table>
                    <thead>
                        <tr>
                            <th>product name</th>
                            <th>product price</th>
                            <th>payment</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lemari</td>
                            <td>Rp. 10.000.000</td>
                            <td>e-wallet</td>
                            <td class="primary">details</td>
                        </tr>
                        <tr>
                            <td>meja</td>
                            <td>Rp. 6.000.000</td>
                            <td>e-wallet</td>
                            <td class="primary">details</td>
                        </tr>
                        <tr>
                            <td>kursi</td>
                            <td>Rp. 2.000.000</td>
                            <td>e-wallet</td>
                            <td class="primary">details</td>
                        </tr>
                    </tbody>
                </table>
                
                <a href="#">show all</a>
            </div>
        </main>

        {{-- end of main --}}
        {{-- <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                <div class="profile">
                </div>
                </div> --}}

                {{-- end of top --}}
                {{-- <div class="recent-updates">
                    <h2>recent update</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/zooz.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="message">
                                <p><b>mike tyson</b> received his order of night lion tech gps drone</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/zooz.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="message">
                                <p><b>mike tyson</b> received his order of night lion tech gps drone</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/zooz.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="message">
                                <p><b>mike tyson</b> received his order of night lion tech gps drone</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/zooz.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="message">
                                <p><b>mike tyson</b> received his order of night lion tech gps drone</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div> --}}
                    {{-- </div>
                </div> --}}

                {{-- end of recent update --}}
                {{-- <div class="sales-analytics">
                    <h2>sales</h2>
                    <div class="item online">
                        <div class="shoping"></div>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>
</body>
</html>